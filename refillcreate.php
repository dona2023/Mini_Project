<?php
//session_start();
require '../config.php'
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="formstyle.css" rel="stylesheet">


    <title>Rate of Cylinder</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('../message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Refil Rate Chart
                            <!-- <a href="Admin/index.php" class="btn btn-danger float-end">BACK</a> -->
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label> Cylinder Weight (kg)</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Rate</label>
                                <input type="email" name="email" class="form-control">
                            <!-- </div>
                            <!-- <label for="phone">Enter your phone number:</label> -->
                            <!-- <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"> 
                            <div class="mb-3">
                                <label>Phone*</label>
                                <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" class="form-control">
                            </div>
                            <div class="mb-3">
                            <label for="start"> Date Of Birth*:   (DD-MM-YYYY)</label> 
                            <input type="date" name="begin" placeholder="dd-mm-yyyy" value=""min="1997-01-01" max="2030-12-31" class="form-control">
                            </div>
                            <div class="mb-3">
                            <label for="start">Gender* :</label><br>

                            <input type="radio" id="html" name="fav_language" value="HTML" >
                           <label for="html">Male</label><br>
                           <input type="radio" id="css" name="fav_language" value="CSS">
                           <label for="css">Female</label><br>
                           <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                           <label for="javascript">Other</label></div>


                           <h6><u>Close Relative</u></h6>
                           <div class="mb-3">
                                <label> Father's Name*:</label>
                                <input type="text" name="address" class="form-control">
                            </div>
                           
                            <div class="mb-3">
                                <label> OR Spouse Name*:</label>
                                <input type="text" name="address" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Mother's Name*:</label>
                                <input type="text" name="address" class="form-control">
                            </div>

                            <!-- <div class="card-header">
                        <h4>Id Proof 
                            <a href="Admin/index.php" class="btn btn-danger float-end">BACK</a> >
                        </h4> >
                    </div> -->
                            <div class="mb-3">
                            <!-- <a href="customer-create.php" class="previous">&laquo; Previous</a>
                            <a href="#" class="next">Next &raquo;</a> -->
                            
                            
                            <button type="submit" name="save_Rate" class="btn btn-primary">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html-->
