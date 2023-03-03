<?php
    include 'config.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require 'vendor/autoload.php';

    //Create an instance; passing `true` enables exceptions

    if(isset($_POST['send_otp']))
    {
        $mail = $_POST['email'];
        $checkMail = "SELECT * FROM tblusers WHERE email='$mail'";
        $result = mysqli_query($conn,$checkMail);
        $rsltCheck = mysqli_num_rows($result);
        $fetch = mysqli_fetch_array($result);
        if($rsltCheck>0)
        {
            $_SESSION['email'] = $fetch['email'];
            $email = $_SESSION['email'];
            $code = rand(999999, 111111);
            
            $insert_otp = "UPDATE `tblusers` SET `otp_code`='$code' WHERE `email`='$email'";
            $data_check = mysqli_query($conn, $insert_otp);
            if($data_check)
            {   
                //     $mail = new PHPMailer(true);
                //     $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                //     $mail->isSMTP();                                            //Send using SMTP
                //     $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                //     $mail->SMTPAuth   =  true;                                   //Enable SMTP authentication
                //     $mail->Username   = 'donamthomas2023a@mca.ajce.in';                     //SMTP username
                //     $mail->Password   = 'rmca2021#';                               //SMTP password
                //     $mail->SMTPSecure = "ssl";            //Enable implicit TLS encryption
                //     $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                
                //     //Recipients
                //     $mail->setFrom('donamthomas2023a@mca.ajce.in');
                //     $mail->addAddress($email);     //Add a recipient
                //     $mail->isHTML(true);                                  //Set email format to HTML
                //     $mail->Subject = 'OTP DO NOT SHARE';
                //     $mail->Body    = "This is the $code  message body <b>in bold!</b>";
                //    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
                //         if($mail->send())
                //         {
                //             echo '<script> alert ("OTP sent successfully");</script>';
                //             echo'<script>window.location.href="enterotp.php";</script>';
                //         }
                //         else
                //         {
                //             echo '<script> alert ("OTP sent failed");</script>';
                //             echo'<script>window.location.href="forgot.php";</script>';
                //         }
                
                $subject= "Forgot Password - OTP DO NOT SHARE - SuperGas";
                $body= "OTP code for your forgot password is ".$code.". This OTP would only be valid for 15 minutes.";
                $altbody= "This is the body in plain text for non-HTML mail clients";
                $sender_mail= "donamthomas2023a@mca.ajce.in";

                if(mail($email, $subject, $body, $sender_mail)){
                    echo '<script> alert ("OTP sent successfully");</script>';
                    echo'<script>window.location.href="enterotp.php";</script>';
                }
                else{
                    echo "<script>alert('Mail not send !! Please try again...');</script>";
                }
            }
        }
        else
        {
            echo '<script> alert ("The user doesnot exist!");</script>';
            echo'<script>window.location.href="forgot.php";</script>';
        }
    }
?>
