<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Mark Education Acadamy</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>-->

    <link href="assets/css/compressed.css" rel="stylesheet"/>

    <!--  Custom CSS -->
    <link href="assets/css/custom.css" rel="stylesheet" />

    <script src="./assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.15/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css"/>
    <link href="assets/plugins/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css">


</head>
<body>
<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="./assets/img/sidebar-5.jpg">
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    Mark Education
                </a>
            </div>

            <ul class="nav">
                <li class="">
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <!-- ko if: $root.aLogin -->
                <li class="">
                    <a href="saveStudentInfo.php">
                        <i class="pe-7s-add-user"></i>
                        <p>Add Student</p>
                    </a>
                </li>
                <!-- /ko -->
            </ul>
    	</div>
    </div>


<?php include_once 'config.php'; ?>