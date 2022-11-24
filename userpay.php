<?php
//session_start();
?>

<html lang="en">
<head>
<title>Gym System Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="stylesheet" href="../css/fullcalendar.css" />
<link rel="stylesheet" href="../css/matrix-style.css" />
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

<link href="../font-awesome/css/fontawesome.css" rel="stylesheet" />
<link href="../font-awesome/css/all.css" rel="stylesheet" />

</head>
<body>

 
</div>
<form role="form" action="dashboard.html" method="POST">
    <?php 

            if(isset($_POST['amount'])){ 

            $name = $_POST['name'];
            //$paid_date = $_POST['paid_date'];
            // $p_year = date('Y');
            //$service = $_POST["service"];
            $amount = $_POST["amount"];
            $plans = $_POST["plans"];
            $status = $_POST["status"];
            $email=$_POST['email'];
            

            $amountpayable = $amount * $plans;
            
            include 'config.php';
            date_default_timezone_set('Asia/Kathmandu');
            //$current_date = date('Y-m-d h:i:s');
                $curr_date = date('Y-m-d h:i A');
                $exp_date_time = explode(' ', $curr_date);
                $curr_date =  $exp_date_time['0'];
                $curr_time =  $exp_date_time['1']. ' ' .$exp_date_time['2'];
            //code after connection is successfull
            //update query
            $qry = "UPDATE tbl_img SET amount='$amountpayable', plans='$plans', status='$status' WHERE email='$email'";
            $result = mysqli_query($conn,$qry); //query executes
            $query = "UPDATE tbl_img SET  status='$status' WHERE email='$email'";
            $resul = mysqli_query($conn,$query); //query executes
            


            if(!$result){ ?>

                <h3 class="text-center">Something went wrong!</h3>
                
             <?php } else { ?>

              <?php if ($status == 'Active') {?> 
            
                <table class="body-wrap">
                <tbody><tr>
                    <td></td>
                    <td class="container" width="600">
                        <div class="content">
                            <table class="main" width="100%" cellpadding="0" cellspacing="0">
                                <tbody><tr>
                                    <td class="content-wrap aligncenter print-container">
                                        <table width="100%" cellpadding="0" cellspacing="0">
                                            <tbody><tr>
                                                <td class="content-block">
                                                    <h3 class="text-center">Payment Receipt</h3>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-block">
                                                    <table class="invoice">
                                                        <tbody>
                                                        <!-- <tr>
                                                            <td><div style="float:left"ZACSON'S GYM"?php echo(rand(100000,10000000));?> <br> Kanjirappally,Kottayam,ZACSON's GYM</div><div style="float:right"> Last Payment: <?php echo $paid_date?></div></td>
                                                        </tr> -->

                                                        <tr>
                                                        <td class="text-center" style="font-size:14px;"><b>Member: <?php echo $name; ?></b>  <br>
                                                          Paid On: <?php echo date("F j, Y - g:i a");?>
                                                        </td>
                                                        
                                                        </tr>
                                                       
                                                        <tr>
                                                            <td>
                                                                <table class="invoice-items" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                    
                                                                    <tr>
                                                                        <td><b>Service Taken</b></td>
                                                                        <td class="alignright"><b>Valid Upto</b></td>
                                                                    </tr>
                                                                    
                                                                    
                                                                    <!-- <tr>
                                                                        <td>?php echo $service; ?></td>
                                                                        <td class="alignright">?php echo $plans?> Month/s</td>
                                                                    </tr> -->

                                                                    <tr>
                                                                        <td><?php echo 'Charge Per Month'; ?></td>
                                                                        <td class="alignright"><?php echo 'Rs '.$amount?></td>
                                                                    </tr>
                                                                   
                                                                    
                                                                    <tr class="total">
                                                                        <td class="alignright" width="80%">Total Amount</td>
                                                                        <td class="alignright">Rs <?php echo $amountpayable; ?></td>
                                                                    </tr>
                                                                </tbody></table>
                                                            </td>
                                                        </tr>
                                                    </tbody></table>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="content-block text-center">
                                                We sincerely appreciate your promptness regarding all payments from your side.
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    </td>
                                </tr>
                            </tbody></table>
                            <div class="footer">
                                <table width="100%">
                                    <tbody><tr>
                                        <td class="aligncenter content-block"><button class="btn btn-danger" onclick="window.print()"><i class="fas fa-print"></i> Print</button></td>
                                    </tr>
                                </tbody></table>
                            </div></div>
                    </td>
                    <td></td>
                </tr>
            </tbody>
            </table>
            
           <?php } else {?>

            <div class='error_ex'>
            <h1>409</h1>
            <h3>Looks like you've deactivated the customer's account!</h3>
            <p>The selected member's account will no longer be ACTIVATED until the next payment.</p>
            <a class='btn btn-danger btn-big'  href='payment.php'>Go Back</a> </div>

           <?php } ?>

         <?php   }

          } else { ?>
              <h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='dashboard.html'> DASHBOARD </a></h3>
       <?php }
?>
                                                               
                
             </form>
         </div>
         
</div></div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->



<style>
#footer {
  color: white;
}


body {
    -webkit-font-smoothing: antialiased;
    -webkit-text-size-adjust: none;
    width: 100% !important;
    height: 100%;
    line-height: 1.6;
}

/* Let's make sure all tables have defaults */
table td {
    vertical-align: top;
}

/* -------------------------------------
    BODY & CONTAINER
------------------------------------- */


.body-wrap {
    background-color: #f6f6f6;
    width: 100%;
}

.container {
    display: block !important;
    max-width: 600px !important;
    margin: 0 auto !important;
    /* makes it centered */
    clear: both !important;
}

.content {
    max-width: 600px;
    margin: 0 auto;
    display: block;
    padding: 20px;
}

/* -------------------------------------
    HEADER, FOOTER, MAIN
------------------------------------- */
.main {
    background: #fff;
    border: 1px solid #e9e9e9;
    border-radius: 3px;
}

.content-wrap {
    padding: 20px;
}



.footer {
    width: 100%;
    clear: both;
    color: #999;
    padding: 20px;
}


/* -------------------------------------
    INVOICE
    Styles for the billing table
------------------------------------- */
.invoice {
    margin: 22px auto;
    text-align: left;
    width: 80%;
}
.invoice td {
    padding: 7px 0;
}
.invoice .invoice-items {
    width: 100%;
}
.invoice .invoice-items td {
    border-top: #eee 1px solid;
}
.invoice .invoice-items .total td {
    border-top: 2px solid #333;
    border-bottom: 2px solid #333;
    font-weight: 700;
}

/* -------------------------------------
    RESPONSIVE AND MOBILE FRIENDLY STYLES
------------------------------------- */
@media only screen and (max-width: 640px) {
   

    h2 {
        font-size: 18px !important;
    }


    .container {
        width: 100% !important;
    }

    .content, .content-wrap {
        padding: 10px !important;
    }

    .invoice {
        width: 100% !important;
    }
}

@media print {
  body * {
    visibility: hidden;
  }

  .print-container, .print-container * {
    visibility: visible;
  }

  .print-container {
    position: absolute;
    left: 0px;
    top: 0px;
    right: 0px;
  }
}
</style>
</body>
</html>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>











































































































































































<?php
include('smtp/PHPMailerAutoload.php');
include 'config.php';
$email=$_POST['email'];
$to=$email;
$html='Booking is issued';

function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(); 
	$mail->SMTPDebug  = 3;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "donamthomas2023a@mca.ajce.in";
	$mail->Password = "rmca2021#";
	$mail->SetFrom("SMTP_EMAIL_ID");
	$mail->Subject = $subject;
	$mail->Body ='<h1 align="center">YOUR BOOKING IS SUCCESSFULL</h1>';
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
		return 'Sent';
        header("location:a.php");
	}
}
?>
