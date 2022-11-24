<?php
//session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Gym System Admin</title>

<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<style>
body {
  background-image: url("ai.jpg");
  background-repeat: no-repeat;
  background-size: 3000px 8000px;

}
</style>

</head>
<body>

<?php
include 'config.php';
$email = $_GET['email'];
$qry= "select * from tbl_img where email='$email'";
$result=mysqli_query($conn,$qry);
while($row=mysqli_fetch_array($result)){
?> 

<div id="content">
  <div id="content-header"><br>

    <h1><center>Payment Form</center></h1>
  </div><br><br>
  
  
  <div class="container-fluid" style="margin-top:-38px;">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="fas fa-money"></i> </span>
           
          </div>
          <div class="widget-content"><br><br>
            <div class="row-fluid">
              <div class="span5">
                <table class="">
                  <tbody>
                 
                    <tr>
                      <td><h4>Super Gas</h4></td>
                    </tr>
                    <tr>
                      <td>Kanjirapally,Kottayam</td>
                    </tr>
                    
                    <tr>
                      <td>Phone no:9061297397</td>
                    </tr>
                    <tr>
                      <td>Email:donamthomas6866@gmail.com</td>
                    </tr>
                  </tbody>
                </table>
              </div>
			  
			  
              <div class="span7">
                <table class="table table-bordered table-invoice">
				
                  <tbody>
				  <form action="userpay.php" method="POST">
                    <tr>
                    <tr>
                      <td class="width30">name:</td>
                      <input type="hidden" name="name" value="<?php echo $row['name']; ?>">
                      <td class="width70"><strong><?php echo $row['name']; ?></strong></td>
                    </tr>
                    <tr>
                      <td>Email:</td>
                      <input type="hidden" name="email" value="<?php echo $row['email']; ?>">
                      <td><strong><?php echo $row['email']; ?></strong></td>
                    </tr>
                    <!-- <tr>
                      <td>Service:</td>
                      <input type="hidden" name="service" value="<?php echo $row['service']; ?>">
                      <td><strong><?php echo $row['service']; ?></strong></td>
                    </tr> -->
                    <tr>
                      <td>Amount Per Month:</td>
                      <td><input id="amount" type="number" name="amount" value='<?php if($row['service'] == 'Fitness') { echo '55';} elseif ($row['service'] == 'Sauna') { echo '35';} else {echo '40';} ?>' required/></td>
                    </tr>

                    <!-- <input type="hidden" name="paid_date" value="<?php echo $row['paid_date']; ?>"> -->
					
                  <td class="width30">Plan:</td>
                    <td class="width70">
					<div class="controls">
                <select name="plans" required="required" id="select">
                  <option value="1" selected="selected" >One Month</option>
                  <option value="3">Three Month</option>
                  <option value="6">Six Month</option>
                  <option value="12">One Year</option>
                  <option value="0">None-Expired</option>

                </select>
              </div>

             
			  
                      </td>
					  
					  <tr>
                     
                    </tr>
                  <td class="width30">Member's Status:</td>
                    <td class="width70">
					<div class="controls">
                <select name="status" required="required" id="select">
                  <option value="Active" selected="selected" >Active</option>
                  <option value="Expired">Expired</option>

                </select>
              </div>
			  

                      </td>
                  </tr>
                    </tbody>
                  
                </table>
              </div>
			  
			  
            </div> <!-- row-fluid ends here -->
			
			
            <div class="row-fluid">
              <div class="span12">
                
				
				<hr>
                <div class="text-center">
                  <!-- user's ID is hidden here -->

             <input type="hidden" name="email" value="<?php echo $row['email'];?>">
      
                  <button class="btn btn-success btn-large" type="SUBMIT" href="">Make Payment</button> 
				</div>
        
				  
				  </form>
              </div><!-- span12 ends here -->
            </div><!-- row-fluid ends here -->
			
      <?php
}
      ?>
          </div><!-- widget-content ends here -->
		  
		  
        </div><!-- widget-box ends here -->
      </div><!-- span12 ends here -->
      <a href="index.html">
          <span class="btn btn-success">Go Back</span>
        </a>

    </div> <!-- row-fluid ends here -->
  </div> <!-- container-fluid ends here -->
</div> <!-- div id content ends here -->




</body>
</html>