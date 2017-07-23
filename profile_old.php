<?php include_once 'common/config.php'; ?>
<?php
    if(isset($_GET['certiNum'])) {
        $certiNum = $_GET['certiNum'];
        $sql="SELECT * FROM student where certificateNumber='$certiNum'";
        $result=mysqli_query($mysqli,$sql);
        // Associative array
        $row=mysqli_fetch_assoc($result);
        // Free result set
        mysqli_free_result($result);
    }
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

    <link href="assets/css/custom.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="content">
	<div class="container">
		<div class="col-md-12 textCenter">
			<div class="form-group has-feedback">
                        <img src="assets/img/logo.png" class="img-responsive" style="padding-top: 30px;"/>
                    </div>
			<h3 style="padding: 25px; font-weight: bold;"><span><?php echo $row["firstName"]; ?></span> <span><?php echo $row["lastName"]; ?></span></h3>
			
		</div>
		<div class="col-md-2">
			<img class="img-responsive" src="<?php echo $row['photo'] ?>" alt="No Image" width="160"/>
		</div>
		<div class="col-md-6">
			<table class="table">
			<tbody>
			  <tr>
				<td class="p-12 textBold">DOB</td>
				<td class="p-12"><?php echo $row['DOB']; ?></td>
			  </tr>
			  <tr>
				<td class="p-12 textBold">Age</td>
				<td class="p-12"><?php echo $row['age']; ?></td>
			  </tr>
			  <tr>
				<td class="p-12 textBold">Address</td>
				<td class="p-12"><?php echo $row['address']; ?></td>
			  </tr>
			  <tr>
				<td class="p-12 textBold">Mobile</td>
				<td class="p-12"><?php echo $row['mobile']; ?></td>
			  </tr>
			  <tr>
				<td class="p-12 textBold">Alternate Number</td>
				<td class="p-12"><?php echo $row['alternateNumber']; ?></td>
			  </tr>
			  <tr>
				<td class="p-12 textBold">E-Mail</td>
				<td class="p-12"><?php echo $row['email']; ?></td>
			  </tr>
			  <tr>
				<td class="p-12 textBold">Working</td>
				<td class="p-12"><?php echo $row['Working']; ?></td>
			  </tr>
			  <tr>
				<td class="p-12 textBold">Organazation Name</td>
				<td class="p-12"><?php echo $row["OrganizationName"]; ?></td>
			  </tr>
			  <tr>
				<td class="p-12 textBold">Designation</td>
				<td class="p-12"><?php echo $row["Designation"]; ?></td>
			  </tr>
			  <tr>
				<td><h3>Educational Info</h3></td><td></td>
			  </tr>
			  <tr>
				<td class="p-12 textBold">SSLC</td>
				<td class="p-12">
					<span><?php echo $row['SSLCYearOfPassing']!=null ? $row['SSLCYearOfPassing'] : "NA" ?></span> ,&nbsp;&nbsp;&nbsp;<span><?php echo $row['SSLCPercentage']!=null ? $row['SSLCPercentage'].' %' : "NA" ?></span>
				</td>
			  </tr>
			  <tr>
				<td class="p-12 textBold">PUC</td>
				<td class="p-12">
					<span><?php echo $row['PUCYearOfPassing']!=null ? $row['PUCYearOfPassing'] : "NA" ?></span> ,&nbsp;&nbsp;&nbsp;<span><?php echo $row['PUCPercentage']!=null ? $row['PUCPercentage'].' %' : "NA" ?></span>
				</td>
			  </tr>
			  <tr>
				<td class="p-12 textBold">Diploma / ITI</td>
				<td class="p-12">
					<span><?php echo $row['DiplomaYearOfPassing']!=null ? $row['DiplomaYearOfPassing'] : "NA" ?></span> ,&nbsp;&nbsp;&nbsp;<span><?php echo $row['DiplomaPercentage']!=null ? $row['DiplomaPercentage'].' %' : "NA" ?></span>
				</td>
			  </tr>
			  <tr>
				<td class="p-12 textBold">UG</td>
				<td class="p-12">
					<span><?php echo $row['UGYearOfPassing']!=null ? $row['UGYearOfPassing'] : "NA" ?></span> ,&nbsp;&nbsp;&nbsp;<span><?php echo $row['UGPercentage']!=null ? $row['UGPercentage'].' %' : "NA" ?></span>
				</td>
			  </tr>
			  <tr>
				<td class="p-12 textBold">PG</td>
				<td class="p-12">
					<span><?php echo $row['PGYearOfPassing']!=null ? $row['PGYearOfPassing'] : "NA" ?></span> ,&nbsp;&nbsp;&nbsp;<span><?php echo $row['PGPercentage']!=null ? $row['PGPercentage'].' %' : "NA" ?></span>
				</td>
			  </tr>
			  <tr>
				<td>
					<h3>Course</h3>
				</td>
				<td></td>
			  </tr>
			  <tr>
				<td class="p-12 textBold">Skills</td>
				<td class="p-12"><?php echo $row["skills"]; ?></td>
			  </tr>
			  <tr>
				<td class="p-12 textBold">Course Studied</td>
				<td class="p-12"><?php echo $row["courseStudied"]; ?></td>
			  </tr>
			  <tr>
				<td class="p-12 textBold">Course Duration</td>
				<td class="p-12"><?php echo $row["duration"]; ?></td>
			  </tr>
			  <tr>
				<td class="p-12 textBold">Certificate Issue Date</td>
				<td class="p-12"><?php echo $row["certificateIssueDate"]; ?></td>
			  </tr>
			  <tr>
				<td class="p-12 textBold">Grade</td>
				<td class="p-12"><?php echo $row["Grade"]; ?></td>
			  </tr>
			  <tr>
				<td class="p-12 textBold">Remarks</td>
				<td class="p-12"><?php echo $row["Remarks"]; ?></td>
			  </tr>
			  
			</tbody>
			</table>
			<div class="col-md-12 textCenter m-b-20">
				<a class="btn btn-info dwnloadButton" href="<?php echo $row['Resume'] ?>" target="_blank">Download Resume</a>
			</div>
		</div>
		
	</div>
</div>


</body>

        <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="assets/js/datatables.min.js"></script>
    <script src="assets/js/knockout-3.1.0.js" type="text/javascript"></script>
    <script src="assets/plugins/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/jquery.bootstrap.wizard.min.js"></script>
    <script src="assets/js/moment.js"></script>
	<script src="assets/js/script.js"></script>
	<script>
		if(location.href.indexOf("profile.php") >= -1){
			if($(".dwnloadButton").attr("href") == "javascript:;"){
				$(".dwnloadButton").hide()
			}
		}
	</script>
</html>