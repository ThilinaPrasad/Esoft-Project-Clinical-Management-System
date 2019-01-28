﻿<?php
require_once("php/getPatients.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Kenway | Doctor</title>
    <!-- Favicon-->
    <link rel="shortcut icon" href="../favicon.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
          type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet"/>

    <!-- Doctor Css -->
    <link href="css/custom/doctor.css" rel="stylesheet">

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet"/>

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet"/>


    <!-- JQuery DataTable Css -->
    <link href="./plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="./plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css"
          rel="stylesheet"/>

    <!-- Bootstrap DatePicker Css -->
    <link href="./plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet"/>

    <!-- Wait Me Css -->
    <link href="plugins/waitme/waitMe.css" rel="stylesheet"/>

    <!-- Bootstrap Select Css -->
    <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet"/>

    <link href="css/theme.css" rel="stylesheet"/>

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="theme-teal">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-teal">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->

<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse"
               data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="#"><img src="images/nav_logo.png" class="navbar-logo"></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Call Search -->
                <!-- #END# Call Search -->
                <!-- Notifications -->
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="material-icons">notifications</i>
                        <span class="label-count">7</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">NOTIFICATIONS</li>
                        <li class="body">
                            <ul class="menu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-light-green">
                                            <i class="material-icons">person_add</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>12 new members joined</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 14 mins ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-cyan">
                                            <i class="material-icons">add_shopping_cart</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>4 sales made</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 22 mins ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-red">
                                            <i class="material-icons">delete_forever</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4><b>Nancy Doe</b> deleted account</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 3 hours ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-orange">
                                            <i class="material-icons">mode_edit</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4><b>Nancy</b> changed name</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 2 hours ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-blue-grey">
                                            <i class="material-icons">comment</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4><b>John</b> commented your post</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 4 hours ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-light-green">
                                            <i class="material-icons">cached</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4><b>John</b> updated status</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 3 hours ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-purple">
                                            <i class="material-icons">settings</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>Settings updated</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> Yesterday
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="javascript:void(0);">View All Notifications</a>
                        </li>
                    </ul>
                </li>
                <!-- #END# Notifications -->
            </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info doctor-info">
            <div class="image">
                <img src="images/doctor_profile_img.png" data-toggle="tooltip" data-placement="right" title=""
                     data-original-title="View Profile" width="48" height="48" alt="User" onclick="viewProfile();"/>
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                <div class="email">john.doe@example.com</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);" onclick="viewProfile()"><i class="material-icons">person</i>Profile</a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active" id="home" onclick="viewHome('#home')">
                    <a href="#">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li id="patient" onclick="viewPatient('#patient')">
                    <a href="#">
                        <i class="material-icons">accessible</i>
                        <span>View Patients</span>
                    </a>
                </li>
                <li id="schedule">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">schedule</i>
                        <span>Schedules & Appointments</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="javascript:void(0);" onclick="addSchedules('#schedule')">
                                <span>Add Schedules</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" onclick="viewSchedule('#schedule')">
                                <span>View Schedules</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" onclick="viewAppointments('#schedule')">
                                <span>View Appointments</span>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2019 <a href="#">Kenway Medicals (pvt) Ltd</a>.
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->

</section>

<section class="content" id="dashboard">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>

        <!-- Widgets -->
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-pink hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">playlist_add_check</i>
                    </div>
                    <div class="content">
                        <div class="text">NEW TASKS</div>
                        <div class="number count-to" data-from="0" data-to="125" data-speed="15"
                             data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-cyan hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">help</i>
                    </div>
                    <div class="content">
                        <div class="text">NEW TICKETS</div>
                        <div class="number count-to" data-from="0" data-to="257" data-speed="1000"
                             data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-light-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">forum</i>
                    </div>
                    <div class="content">
                        <div class="text">NEW COMMENTS</div>
                        <div class="number count-to" data-from="0" data-to="243" data-speed="1000"
                             data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-orange hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">person_add</i>
                    </div>
                    <div class="content">
                        <div class="text">NEW VISITORS</div>
                        <div class="number count-to" data-from="0" data-to="1225" data-speed="1000"
                             data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Widgets -->

        <div class="row clearfix">
            <!-- Task Info -->
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="card">
                    <div class="header">
                        <h2>TASK INFOS</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover dashboard-task-infos">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Task</th>
                                    <th>Status</th>
                                    <th>Manager</th>
                                    <th>Progress</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Task A</td>
                                    <td><span class="label bg-green">Doing</span></td>
                                    <td>John Doe</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="62"
                                                 aria-valuemin="0" aria-valuemax="100" style="width: 62%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Task B</td>
                                    <td><span class="label bg-blue">To Do</span></td>
                                    <td>John Doe</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="40"
                                                 aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Task C</td>
                                    <td><span class="label bg-light-blue">On Hold</span></td>
                                    <td>John Doe</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-light-blue" role="progressbar"
                                                 aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 72%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Task D</td>
                                    <td><span class="label bg-orange">Wait Approvel</span></td>
                                    <td>John Doe</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="95"
                                                 aria-valuemin="0" aria-valuemax="100" style="width: 95%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Task E</td>
                                    <td>
                                        <span class="label bg-red">Suspended</span>
                                    </td>
                                    <td>John Doe</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-red" role="progressbar" aria-valuenow="87"
                                                 aria-valuemin="0" aria-valuemax="100" style="width: 87%"></div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Task Info -->
        </div>
    </div>
</section>

<!-- Patiaent data model -->
<div class="modal fade" id="patientDataModel" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-teal" style="padding: 15px;">
                <h2 class="modal-title text-center" id="patientDataModelLabel">Patient Details</h2>
            </div>
            <div class="modal-body" style="padding-bottom: 0;">
                <div class="body table-responsive">
                    <table class="table text-center">
                        <tbody>
                        <tr>
                            <td>Full name</td>
                            <td id="view-patient-name"></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td id="view-patient-gender"></td>
                        </tr>
                        <tr>
                            <td>Birthday(age)</td>
                            <td id="view-patient-bday"></td>
                        </tr>
                        <tr>
                            <td>Blood Group</td>
                            <td id="view-patient-bloodType"></td>
                        </tr>
                        <tr>
                            <td>Weight(kg)</td>
                            <td id="view-patient-weight"></td>
                        </tr>
                        <tr>
                            <td>Height(cm)</td>
                            <td id="view-patient-height"></td>
                        </tr>
                        <tr>
                            <td>NIC/Passport</td>
                            <td id="view-patient-nic"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td id="view-patient-email"></td>
                        </tr>
                        <tr>
                            <td>Telephone</td>
                            <td id="view-patient-telephone"></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td id="view-patient-address"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="modal-footer" style="padding-top: 0;">
                <button type="button" class="btn btn-success waves-effect" onclick="showDiagnosis();">Add diagnosis</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Patiaent diagnosis model -->
<div class="modal fade" id="patientDiagnosisModel" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-teal" style="padding: 15px;">
                <h2 class="modal-title text-center" id="patientDiagnosisModelLabel">Create Diagnosis Report</h2>
            </div>
            <div class="modal-body" style="padding-bottom: 0;">
                <div class="body row table-responsive">
                        <div class="col-md-12">
                    <form class="form-horizontal">
                        <input id="diagnosis-patient-id" type="text"
                               disabled hidden>
                        <div class="row clearfix m-b-10">
                            <div class="col-lg-4 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="diagnosis-patient-name">Patient name</label>
                            </div>
                            <div class="col-lg-8 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="diagnosis-patient-name" type="text"
                                               class="form-control" disabled style="cursor: default;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix m-b-10">
                            <div class="col-lg-4 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="diagnosis-patient-age">Patient b'day(age)</label>
                            </div>
                            <div class="col-lg-8 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="diagnosis-patient-age" type="text"
                                               class="form-control" disabled style="cursor: default;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix m-b-10">
                            <div class="col-lg-4 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="diagnosis-patient-gender">Patient gender</label>
                            </div>
                            <div class="col-lg-8 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="diagnosis-patient-gender" type="text"
                                               class="form-control" disabled style="cursor: default;">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix m-b-30">
                            <div class="col-lg-4 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="diagnosis-patient-name">Diagnosis description</label>
                            </div>
                            <div class="col-lg-8 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="8" placeholder="Type diagnosis here..." class="form-control" id="patient-diagnosis-description" autofocus></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                        </div>
                </div>
            </div>

            <div class="modal-footer" style="padding-top: 0;">
                <button type="button" class="btn btn-success waves-effect" >Save Diagnosis</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<section class="content" id="viewPatients">
    <div class="container-fluid">
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2 class="font-bold col-teal">
                            View Patient Details
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead class="col-teal">
                                <tr>
                                    <th>Full Name</th>
                                    <th>Gender</th>
                                    <th>B'day (m/d/y)</th>
                                    <th>Blood group</th>
                                    <th>Weight(kg)</th>
                                    <th>Height(cm)</th>
                                    <th>Telephone</th>
                                    <!--<th>Email</th>
                                    <th>Address</th>-->
                                </tr>
                                </thead>
                                <tfoot class="col-teal">
                                <tr>
                                    <th>Full Name</th>
                                    <th>Gender</th>
                                    <th>B'day (m/d/y)</th>
                                    <th>Blood group</th>
                                    <th>Weight(kg)</th>
                                    <th>Height(cm)</th>
                                    <th>Telephone</th>
                                    <!--<th>Email</th>
                                    <th>Address</th>-->
                                </tr>
                                </tfoot>
                                <tbody id="viewPatients-table-body">
                                <?php
                                foreach ($dbResponse as $temp) {
                                    $temp_html = "<tr onclick='showPatient(" . $temp['id'] . ");'>" .
                                        "<td>" . $temp['fname'] . " " . $temp['sname'] . "</td>" .
                                        "<td>" . $temp['gender'] . "</td>" .
                                        "<td>" . $temp['bday'] . "</td>" .
                                        "<td>" . $temp['bloodType'] . "</td>" .
                                        "<td>" . $temp['weight'] . "</td>" .
                                        "<td>" . $temp['height'] . "</td>" .
                                        "<td>" . $temp['telephone'] . "</td>" .
                                        /*"<td>".$temp['email']."</td>".
                                        "<td>".$temp['street'].", ".$temp['city'].", ".$temp['country'].", ".$temp['zipCode'].".</td>".*/

                                        "</tr>";
                                    echo $temp_html;
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
</section>

<section class="content" id="viewAppointments">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card" style="min-height: 80vh;">
                    <div class="header">
                        <h2 class="font-bold col-teal">
                            View Appointments
                        </h2>
                    </div>
                    <div class="body row">
                        <!--This week schedules-->
                        <div class="col-md-4">
                            <!-collapse panel group-->
                            <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                <h5 class="text-center">This week</h5>
                                <div class="panel-group" id="twh" role="tablist" aria-multiselectable="true">
                                    <!--panel-->
                                    <div class="panel panel-success">
                                        <div class="panel-heading" role="tab" id="twh_1">
                                            <h4 class="panel-title">
                                                <a class="collapsed text-center" role="button" data-toggle="collapse"
                                                   data-parent="#twh" href="#twh_collapse_1" aria-expanded="false"
                                                   aria-controls="twh_collapse_1">
                                                    11.30 A.M | 25 January 2019
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="twh_collapse_1" class="panel-collapse collapse" role="tabpanel"
                                             aria-labelledby="twh_1">
                                            <div class="panel-body">
                                                <div class="list-group">
                                                    <button type="button" class="list-group-item">
                                                        <span class="pull-left">Date</span> <span class="pull-right">25 January 2019</span>
                                                    </button>
                                                    <button type="button" class="list-group-item">
                                                        <span class="pull-left">Time</span> <span class="pull-right">11.30 A.M</span>
                                                    </button>
                                                    <button type="button" class="list-group-item">
                                                        <span class="pull-left">Patient</span> <span class="pull-right">D.G. Sumanapala</span>
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!--panel-->
                                    <!--panel-->
                                    <div class="panel panel-success">
                                        <div class="panel-heading" role="tab" id="twh_2">
                                            <h4 class="panel-title">
                                                <a class="collapsed text-center" role="button" data-toggle="collapse"
                                                   href="#twh_collapse_2" aria-expanded="false"
                                                   aria-controls="twh_collapse_2">
                                                    11.30 A.M | 25 January 2019
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="twh_collapse_2" class="panel-collapse collapse" role="tabpanel"
                                             aria-labelledby="twh_1">
                                            <div class="panel-body">
                                                <div class="list-group">
                                                    <button type="button" class="list-group-item">
                                                        <span class="pull-left">Date</span> <span class="pull-right">25 January 2019</span>
                                                    </button>
                                                    <button type="button" class="list-group-item">
                                                        <span class="pull-left">Time</span> <span class="pull-right">11.30 A.M</span>
                                                    </button>
                                                    <button type="button" class="list-group-item">
                                                        <span class="pull-left">Patient</span> <span class="pull-right">D.G. Sumanapala</span>
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!--panel-->
                                    <!--panel-->
                                    <div class="panel panel-success">
                                        <div class="panel-heading" role="tab" id="twh_3">
                                            <h4 class="panel-title">
                                                <a class="collapsed text-center" role="button" data-toggle="collapse"
                                                   href="#twh_collapse_3" aria-expanded="false"
                                                   aria-controls="twh_collapse_3">
                                                    11.30 A.M | 25 January 2019
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="twh_collapse_3" class="panel-collapse collapse" role="tabpanel"
                                             aria-labelledby="twh_1">
                                            <div class="panel-body">
                                                <div class="list-group">
                                                    <button type="button" class="list-group-item">
                                                        <span class="pull-left">Date</span> <span class="pull-right">25 January 2019</span>
                                                    </button>
                                                    <button type="button" class="list-group-item">
                                                        <span class="pull-left">Time</span> <span class="pull-right">11.30 A.M</span>
                                                    </button>
                                                    <button type="button" class="list-group-item">
                                                        <span class="pull-left">Patient</span> <span class="pull-right">D.G. Sumanapala</span>
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!--panel-->
                                </div>
                            </div>
                            <!-collapse panel group-->
                        </div>
                        <!--next Week schedule-->
                        <div class="col-md-4">
                            <!-collapse panel group-->
                            <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                <h5 class="text-center">Next week</h5>
                                <div class="panel-group" id="nwh" role="tablist" aria-multiselectable="true">
                                    <!--panel-->
                                    <div class="panel panel-primary">
                                        <div class="panel-heading" role="tab" id="nwh_1">
                                            <h4 class="panel-title">
                                                <a class="collapsed text-center" role="button" data-toggle="collapse"
                                                   data-parent="#nwh" href="#nwh_collapse_1" aria-expanded="false"
                                                   aria-controls="nwh_collapse_1">
                                                    11.30 A.M | 25 January 2019
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="nwh_collapse_1" class="panel-collapse collapse" role="tabpanel"
                                             aria-labelledby="nwh_1">
                                            <div class="panel-body">
                                                <div class="list-group">
                                                    <button type="button" class="list-group-item">
                                                        <span class="pull-left">Date</span> <span class="pull-right">25 January 2019</span>
                                                    </button>
                                                    <button type="button" class="list-group-item">
                                                        <span class="pull-left">Time</span> <span class="pull-right">11.30 A.M</span>
                                                    </button>
                                                    <button type="button" class="list-group-item">
                                                        <span class="pull-left">Patient</span> <span class="pull-right">D.G. Sumanapala</span>
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!--panel-->
                                    <!--panel-->
                                    <div class="panel panel-primary">
                                        <div class="panel-heading" role="tab" id="nwh_2">
                                            <h4 class="panel-title">
                                                <a class="collapsed text-center" role="button" data-toggle="collapse"
                                                   href="#nwh_collapse_2" aria-expanded="false"
                                                   aria-controls="nwh_collapse_2">
                                                    11.30 A.M | 25 January 2019
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="nwh_collapse_2" class="panel-collapse collapse" role="tabpanel"
                                             aria-labelledby="twh_1">
                                            <div class="panel-body">
                                                <div class="list-group">
                                                    <button type="button" class="list-group-item">
                                                        <span class="pull-left">Date</span> <span class="pull-right">25 January 2019</span>
                                                    </button>
                                                    <button type="button" class="list-group-item">
                                                        <span class="pull-left">Time</span> <span class="pull-right">11.30 A.M</span>
                                                    </button>
                                                    <button type="button" class="list-group-item">
                                                        <span class="pull-left">Patient</span> <span class="pull-right">D.G. Sumanapala</span>
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!--panel-->
                                    <!--panel-->
                                    <div class="panel panel-primary">
                                        <div class="panel-heading" role="tab" id="nwh_3">
                                            <h4 class="panel-title">
                                                <a class="collapsed text-center" role="button" data-toggle="collapse"
                                                   href="#nwh_collapse_3" aria-expanded="false"
                                                   aria-controls="nwh_collapse_3">
                                                    11.30 A.M | 25 January 2019
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="nwh_collapse_3" class="panel-collapse collapse" role="tabpanel"
                                             aria-labelledby="twh_1">
                                            <div class="panel-body">
                                                <div class="list-group">
                                                    <button type="button" class="list-group-item">
                                                        <span class="pull-left">Date</span> <span class="pull-right">25 January 2019</span>
                                                    </button>
                                                    <button type="button" class="list-group-item">
                                                        <span class="pull-left">Time</span> <span class="pull-right">11.30 A.M</span>
                                                    </button>
                                                    <button type="button" class="list-group-item">
                                                        <span class="pull-left">Patient</span> <span class="pull-right">D.G. Sumanapala</span>
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!--panel-->
                                </div>
                            </div>
                            <!-collapse panel group-->
                        </div>
                        <div class="col-md-4">
                            <!-collapse panel group-->
                            <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                <h5 class="text-center">Next week</h5>
                                <div class="panel-group" id="pwh" role="tablist" aria-multiselectable="true">
                                    <!--panel-->
                                    <div class="panel panel-warning">
                                        <div class="panel-heading" role="tab" id="pwh_1">
                                            <h4 class="panel-title">
                                                <a class="collapsed text-center" role="button" data-toggle="collapse"
                                                   data-parent="#pwh" href="#pwh_collapse_1" aria-expanded="false"
                                                   aria-controls="pwh_collapse_1">
                                                    11.30 A.M | 25 January 2019
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="pwh_collapse_1" class="panel-collapse collapse" role="tabpanel"
                                             aria-labelledby="nwh_1">
                                            <div class="panel-body">
                                                <div class="list-group">
                                                    <button type="button" class="list-group-item">
                                                        <span class="pull-left">Date</span> <span class="pull-right">25 January 2019</span>
                                                    </button>
                                                    <button type="button" class="list-group-item">
                                                        <span class="pull-left">Time</span> <span class="pull-right">11.30 A.M</span>
                                                    </button>
                                                    <button type="button" class="list-group-item">
                                                        <span class="pull-left">Patient</span> <span class="pull-right">D.G. Sumanapala</span>
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!--panel-->
                                    <!--panel-->
                                    <div class="panel panel-warning">
                                        <div class="panel-heading" role="tab" id="pwh_2">
                                            <h4 class="panel-title">
                                                <a class="collapsed text-center" role="button" data-toggle="collapse"
                                                   href="#pwh_collapse_2" aria-expanded="false"
                                                   aria-controls="pwh_collapse_2">
                                                    11.30 A.M | 25 January 2019
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="pwh_collapse_2" class="panel-collapse collapse" role="tabpanel"
                                             aria-labelledby="twh_1">
                                            <div class="panel-body">
                                                <div class="list-group">
                                                    <button type="button" class="list-group-item">
                                                        <span class="pull-left">Date</span> <span class="pull-right">25 January 2019</span>
                                                    </button>
                                                    <button type="button" class="list-group-item">
                                                        <span class="pull-left">Time</span> <span class="pull-right">11.30 A.M</span>
                                                    </button>
                                                    <button type="button" class="list-group-item">
                                                        <span class="pull-left">Patient</span> <span class="pull-right">D.G. Sumanapala</span>
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!--panel-->
                                    <!--panel-->
                                    <div class="panel panel-warning">
                                        <div class="panel-heading" role="tab" id="pwh_3">
                                            <h4 class="panel-title">
                                                <a class="collapsed text-center" role="button" data-toggle="collapse"
                                                   href="#pwh_collapse_3" aria-expanded="false"
                                                   aria-controls="pwh_collapse_3">
                                                    11.30 A.M | 25 January 2019
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="pwh_collapse_3" class="panel-collapse collapse" role="tabpanel"
                                             aria-labelledby="twh_1">
                                            <div class="panel-body">
                                                <div class="list-group">
                                                    <button type="button" class="list-group-item">
                                                        <span class="pull-left">Date</span> <span class="pull-right">25 January 2019</span>
                                                    </button>
                                                    <button type="button" class="list-group-item">
                                                        <span class="pull-left">Time</span> <span class="pull-right">11.30 A.M</span>
                                                    </button>
                                                    <button type="button" class="list-group-item">
                                                        <span class="pull-left">Patient</span> <span class="pull-right">D.G. Sumanapala</span>
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!--panel-->
                                </div>
                            </div>
                            <!-collapse panel group-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content" id="addSchedules">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card" style="min-height: 80vh;">
                    <div class="header">
                        <h2 class="font-bold col-teal">
                            Add Schedules
                        </h2>
                    </div>
                    <div class="body row">
                        <div class="col-md-10 col-md-offset-1">
                            <form class="form-horizontal">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="schedule_start_date">Start date</label>
                                    </div>
                                    <div class="col-lg-6 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input id="schedule_start_date" type="text"
                                                       class="datepicker form-control"
                                                       placeholder="Please choose start date...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="start_time">Start time</label>
                                    </div>
                                    <div class="col-lg-6 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="start_time" class="timepicker form-control"
                                                       placeholder="Please choose start time...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="end_date">End date</label>
                                    </div>
                                    <div class="col-lg-6 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input id="end_date" type="text" class="datepicker form-control"
                                                       placeholder="Please choose end date...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="end_time">End time</label>
                                    </div>
                                    <div class="col-lg-6 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="end_time" class="timepicker form-control"
                                                       placeholder="Please choose end time...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="button" class="btn btn-lg bg-teal m-t-15 waves-effect">Add
                                            Schedule
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content" id="viewSchedule">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card" style="min-height: 80vh;">
                    <div class="header">
                        <h2 class="font-bold col-teal">
                            View Schedules
                        </h2>
                    </div>
                    <div class="body row">
                        <div class="body table-responsive">
                            <table class="table table-hover text-center">
                                <thead class="text-center">
                                <tr>
                                    <th class="text-center col-teal">Start Date</th>
                                    <th class="text-center col-teal">Start Time</th>
                                    <th class="text-center col-teal">End Date</th>
                                    <th class="text-center col-teal">End Time</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="schedule-row">
                                    <td>01/12/2018</td>
                                    <td>25:53</td>
                                    <td>01/12/2018</td>
                                    <td>25:53</td>
                                </tr>
                                <tr>
                                    <td>01/12/2018</td>
                                    <td>25:53</td>
                                    <td>01/12/2018</td>
                                    <td>25:53</td>
                                </tr>
                                <tr>
                                    <td>01/12/2018</td>
                                    <td>25:53</td>
                                    <td>01/12/2018</td>
                                    <td>25:53</td>
                                </tr>
                                <tr>
                                    <td>01/12/2018</td>
                                    <td>25:53</td>
                                    <td>01/12/2018</td>
                                    <td>25:53</td>
                                </tr>
                                <tr>
                                    <td>01/12/2018</td>
                                    <td>25:53</td>
                                    <td>01/12/2018</td>
                                    <td>25:53</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content" id="profile">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-3">
                <div class="card profile-card">
                    <div class="profile-header">&nbsp;</div>
                    <div class="profile-body col-teal">
                        <div class="image-area">
                            <img src="./images/doctor_profile_img.png" alt="AdminBSB - Profile Image"/>
                        </div>
                        <div class="content-area">
                            <h3>Sadeepa Laksri</h3>
                            <p>Kenway Hospitals</p>
                            <p>Doctor</p>
                        </div>
                    </div>
                    <div class="profile-footer">
                        <ul>
                            <li>
                                <span>Doctor_NO</span>
                                <span>1</span>
                            </li>
                            <li>
                                <span>Following</span>
                                <span>1.201</span>
                            </li>
                            <li>
                                <span>Friends</span>
                                <span>14.252</span>
                            </li>
                        </ul>
                        <button class="btn bg-teal btn-sm waves-effect btn-block" onclick="editDetails()" value="Edit"
                                id="editBtn">Edit
                        </button>
                        <button class="btn btn-danger btn-sm waves-effect btn-block">Delete</button>
                    </div>
                </div>

            </div>
            <div class="col-xs-12 col-sm-9">
                <div class="card">
                    <div class="body">
                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#profile_settings"
                                                                          aria-controls="settings" role="tab"
                                                                          data-toggle="tab">Profile Settings</a></li>
                                <li role="presentation"><a href="#change_password_settings" aria-controls="settings"
                                                           role="tab" data-toggle="tab">Change Password</a></li>
                            </ul>

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="profile_settings">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label for="Name" class="col-sm-2 control-label">Name</label>
                                            <div class="col-sm-10">
                                                <div class="form-line view-mode profile-line">
                                                    <input type="text" class="form-control details profile-control"
                                                           id="Name"
                                                           name="Name" placeholder="Name" value="Sadeepa Laksri"
                                                           disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Address" class="col-sm-2 control-label">Address</label>
                                            <div class="col-sm-10">
                                                <div class="form-line view-mode profile-line">
                                                    <input type="text" class="form-control details profile-control"
                                                           id="Address"
                                                           name="Address" placeholder="Address"
                                                           value="Veyangoda, Gampaha." disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="TelNo" class="col-sm-2 control-label">Mobile Number</label>
                                            <div class="col-sm-10">
                                                <div class="form-line view-mode profile-line">
                                                    <input type="number" class="form-control details profile-control"
                                                           id="TelNo"
                                                           name="TelNo" placeholder="Telephone Number"
                                                           value="0716220786" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Email" class="col-sm-2 control-label">Email</label>
                                            <div class="col-sm-10">
                                                <div class="form-line view-mode profile-line">
                                                    <input type="email" class="form-control details profile-control"
                                                           id="Email"
                                                           name="Email" placeholder="Email" value="example@example.com"
                                                           disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn bg-teal waves-effect" id="submitBtn">
                                                    Save Changes
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="change_password_settings">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label for="OldPassword" class="col-sm-3 control-label">Old Password</label>
                                            <div class="col-sm-9">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" id="OldPassword"
                                                           name="OldPassword" placeholder="Old Password" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="NewPassword" class="col-sm-3 control-label">New Password</label>
                                            <div class="col-sm-9">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" id="NewPassword"
                                                           name="NewPassword" placeholder="New Password" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="NewPasswordConfirm" class="col-sm-3 control-label">New Password
                                                (Confirm)</label>
                                            <div class="col-sm-9">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" id="NewPasswordConfirm"
                                                           name="NewPasswordConfirm"
                                                           placeholder="New Password (Confirm)" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <button type="submit" class="btn bg-teal waves-effect">Change Password
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Jquery Core Js -->
<script src="plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="plugins/node-waves/waves.js"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="plugins/jquery-countto/jquery.countTo.js"></script>


<!-- Sparkline Chart Plugin Js -->
<script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="./plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="./plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="./plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="./plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="./plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="./plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="./plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="./plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="./plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

<!-- Custom Js -->
<script src="js/admin.js"></script>
<script src="./js/pages/tables/jquery-datatable.js"></script>
<script src="./js/pages/examples/profile.js"></script>

<!-- Validation Plugin Js -->
<script src="./plugins/jquery-validation/jquery.validate.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="plugins/node-waves/waves.js"></script>

<!-- Autosize Plugin Js -->
<script src="plugins/autosize/autosize.js"></script>

<!-- Moment Plugin Js -->
<script src="plugins/momentjs/moment.js"></script>

<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

<!-- Bootstrap Datepicker Plugin Js -->
<script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

<script src="js/pages/ui/tooltips-popovers.js"></script>

<!-- Doctor js -->
<script src="js/demo.js"></script>

<!-- Demo Js -->
<script src="js/custom/doctor.js"></script>
<script src="js/pages/forms/basic-form-elements.js"></script>

</body>

</html>
