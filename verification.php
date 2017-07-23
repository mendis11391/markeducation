<?php include_once 'common/config.php'; ?>
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

    <link href="assets/css/custom.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
</head>
<body style="background: url(./assets/img/bg_1.jpg); background-size:cover;">

<div class="content">
			
			
			
			<div class="content">
    <div class="container" style="width: 30%;">
        <div class="card" style="margin-top: 25vh;">
            <div class="content">
                <form action="" method="post">
                    <div class="form-group has-feedback">
                        <img src="assets/img/logo.png" class="img-responsive" style="margin: 0 auto;"/>
                    </div>
                    <div class="form-group has-feedback">
						<label class="control-label">Certificate Number</label>

                        <input type="text" class="form-control certificateNumberForVerification" placeholder="Certificate Number">

					</div>
                    <div class="row">
                        <div class="col-xs-12">
							<a class="btn btn-info btn-block" href="javascript:;" id="verifyStudent">Verify</a>
						</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
			
			

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="verificationResult">
			<div class="col-md-12 modalHeader">
				<div class="modalHeaderTitle"><span>Student Detail</span></div>
			</div>
			<div class="col-md-12 p-30">
			<div class="form-group">
					<div class="col-sm-2"></div>
					<div class="col-sm-5 p-r-0">
						<input type="text" class="form-control certificateNumberForVerification verifyInputBx" placeholder="Enter your verification #">
					</div>
					<div class="col-sm-3 p-l-0">
						<a class="btn btn-block verifyInputBtn" href="javascript:;" id="verifyStudent">Verify</a>
					</div>
					<div class="col-sm-2"></div>
				</div>
			</div>
			<table class="table table-striped studentDataTitle">
			<tbody>
			  <tr>
				<td class="">Student Name</td>
				<td><span class="dispStudentName"></span></td>
			  </tr>
			  <tr>
				<td class="">Course</td>
				<td><span class="dispCourse"></span></td>
			  </tr>
			  <tr class="">
				<td class="">Grade</td>
				<td><span class="dispGrade"></span></td>
			  </tr>
			  <tr>
				<td class="">Certificate Number</td>
				<td><span class="dispCertificateNum"></span></td>
			  </tr>
			  <tr>
				<td class="">Certificate Issue Date</td>
				<td><span class="dispCertificateIssueDate"></span></td>
			  </tr>
			</tbody>
		  </table>
			<div class="col-md-12">
				<a class="btn btn-block closeBtn" href="javascript:;">CLOSE</a>
			</div>
		</div>
  </div>

</div>
</div>


</body>

        <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>

	<script src="./assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="./assets/js/light-bootstrap-dashboard.js"></script>

    <script type="text/javascript" src="assets/js/datatables.min.js"></script>
    <script src="assets/js/knockout-3.1.0.js" type="text/javascript"></script>
    <script src="assets/plugins/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/jquery.bootstrap.wizard.min.js"></script>
    <script src="assets/js/moment.js"></script>
    
    <script src="assets/js/script.js"></script>

</html>