<?php include_once 'common/config.php'; ?>
<?php
   $conn = $mysqli;
   if(isset($_POST['btn-login']))
   {
    $username = $_POST['username'];
    $upass = $_POST['password'];
   
    $sql = "SELECT * FROM `admin` WHERE username='$username' and password='$upass'";
    $result = $conn->query($sql);
    session_start();
    if ($result->num_rows > 0) {
       $row = $result->fetch_assoc();
       $_SESSION["markEduUsername"] = $row['username'];
       $_SESSION["loginType"] = $row['loginType'];
       echo '<script>window.location = "dashboard.php";</script>';
   
    } else {
       echo '<script>alert("Username or Password is wrong");</script>';
   }
   
   }
   $conn->close();
   ?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <link rel="icon" type="image/png" href="assets/img/favicon.ico">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <title>Mark Education Acadamy</title>
      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
      <meta name="viewport" content="width=device-width" />
      <!-- Bootstrap core CSS     -->
      <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
      <!-- Animation library for notifications   -->
      <link href="assets/css/animate.min.css" rel="stylesheet"/>
      <!--  Light Bootstrap Table core CSS    -->
      <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
      <!--  CSS for Demo Purpose, don't include it in your project     -->
      <link href="assets/css/custom.css" rel="stylesheet" />
      <!--     Fonts and icons     -->
      <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
   </head>
   <body style="background:#2d7fc7;">
      <div class="content">
         <div class="container loginForm" style="width: 30%;">
            <div class="card" style="margin-top: 25vh;">
               <div class="content">
                  <form action="" method="post">
                     <div class="form-group has-feedback">
                        <img src="assets/img/logo.png" class="img-responsive" style="margin: 0 auto;"/>
                     </div>
                     <div class="form-group has-feedback">
                        <input type="input" class="form-control" placeholder="Username" name="username">
                     </div>
                     <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                     </div>
                     <div class="row">
                        <div class="col-xs-12">
                           <button type="submit" class="btn btn-primary btn-block btn-flat" name="btn-login">Sign In</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </body>
   <!--   Core JS Files   -->
   <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
   <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
</html>