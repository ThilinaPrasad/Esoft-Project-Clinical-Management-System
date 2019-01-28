<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Kenway | Doctor</title>
    <!-- Favicon-->
    <link rel="shortcut icon" href="../favicon.ico" >

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
    <link href="./plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet"/>

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
                <img src="images/doctor_profile_img.png" data-toggle="tooltip" data-placement="right" title="" data-original-title="View Profile" width="48" height="48" alt="User" onclick="viewProfile();"/>
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
                        <span>View Doctor Schedule</span>
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
                            <td>Name</td>
                            <td>Sadeepa Laksri</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>test@123.com</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>University of Moratuwa</td>
                        </tr>
                        <tr>
                            <td>Telephone</td>
                            <td>0912267288</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer" style="padding-top: 0;">
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
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
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                                </thead>
                                <tfoot class="col-teal">
                                <tr >
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <tr onclick="showPatient(1);">
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>$170,750</td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009/01/12</td>
                                    <td>$86,000</td>
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2012/03/29</td>
                                    <td>$433,060</td>
                                </tr>
                                <tr>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008/11/28</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td>Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2012/12/02</td>
                                    <td>$372,000</td>
                                </tr>
                                <tr>
                                    <td>Herrod Chandler</td>
                                    <td>Sales Assistant</td>
                                    <td>San Francisco</td>
                                    <td>59</td>
                                    <td>2012/08/06</td>
                                    <td>$137,500</td>
                                </tr>
                                <tr>
                                    <td>Rhona Davidson</td>
                                    <td>Integration Specialist</td>
                                    <td>Tokyo</td>
                                    <td>55</td>
                                    <td>2010/10/14</td>
                                    <td>$327,900</td>
                                </tr>
                                <tr>
                                    <td>Colleen Hurst</td>
                                    <td>Javascript Developer</td>
                                    <td>San Francisco</td>
                                    <td>39</td>
                                    <td>2009/09/15</td>
                                    <td>$205,500</td>
                                </tr>
                                <tr>
                                    <td>Sonya Frost</td>
                                    <td>Software Engineer</td>
                                    <td>Edinburgh</td>
                                    <td>23</td>
                                    <td>2008/12/13</td>
                                    <td>$103,600</td>
                                </tr>
                                <tr>
                                    <td>Jena Gaines</td>
                                    <td>Office Manager</td>
                                    <td>London</td>
                                    <td>30</td>
                                    <td>2008/12/19</td>
                                    <td>$90,560</td>
                                </tr>
                                <tr>
                                    <td>Quinn Flynn</td>
                                    <td>Support Lead</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2013/03/03</td>
                                    <td>$342,000</td>
                                </tr>
                                <tr>
                                    <td>Charde Marshall</td>
                                    <td>Regional Director</td>
                                    <td>San Francisco</td>
                                    <td>36</td>
                                    <td>2008/10/16</td>
                                    <td>$470,600</td>
                                </tr>
                                <tr>
                                    <td>Haley Kennedy</td>
                                    <td>Senior Marketing Designer</td>
                                    <td>London</td>
                                    <td>43</td>
                                    <td>2012/12/18</td>
                                    <td>$313,500</td>
                                </tr>
                                <tr>
                                    <td>Tatyana Fitzpatrick</td>
                                    <td>Regional Director</td>
                                    <td>London</td>
                                    <td>19</td>
                                    <td>2010/03/17</td>
                                    <td>$385,750</td>
                                </tr>
                                <tr>
                                    <td>Michael Silva</td>
                                    <td>Marketing Designer</td>
                                    <td>London</td>
                                    <td>66</td>
                                    <td>2012/11/27</td>
                                    <td>$198,500</td>
                                </tr>
                                <tr>
                                    <td>Paul Byrd</td>
                                    <td>Chief Financial Officer (CFO)</td>
                                    <td>New York</td>
                                    <td>64</td>
                                    <td>2010/06/09</td>
                                    <td>$725,000</td>
                                </tr>
                                <tr>
                                    <td>Gloria Little</td>
                                    <td>Systems Administrator</td>
                                    <td>New York</td>
                                    <td>59</td>
                                    <td>2009/04/10</td>
                                    <td>$237,500</td>
                                </tr>
                                <tr>
                                    <td>Bradley Greer</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>41</td>
                                    <td>2012/10/13</td>
                                    <td>$132,000</td>
                                </tr>
                                <tr>
                                    <td>Dai Rios</td>
                                    <td>Personnel Lead</td>
                                    <td>Edinburgh</td>
                                    <td>35</td>
                                    <td>2012/09/26</td>
                                    <td>$217,500</td>
                                </tr>
                                <tr>
                                    <td>Jenette Caldwell</td>
                                    <td>Development Lead</td>
                                    <td>New York</td>
                                    <td>30</td>
                                    <td>2011/09/03</td>
                                    <td>$345,000</td>
                                </tr>
                                <tr>
                                    <td>Yuri Berry</td>
                                    <td>Chief Marketing Officer (CMO)</td>
                                    <td>New York</td>
                                    <td>40</td>
                                    <td>2009/06/25</td>
                                    <td>$675,000</td>
                                </tr>
                                <tr>
                                    <td>Caesar Vance</td>
                                    <td>Pre-Sales Support</td>
                                    <td>New York</td>
                                    <td>21</td>
                                    <td>2011/12/12</td>
                                    <td>$106,450</td>
                                </tr>
                                <tr>
                                    <td>Doris Wilder</td>
                                    <td>Sales Assistant</td>
                                    <td>Sidney</td>
                                    <td>23</td>
                                    <td>2010/09/20</td>
                                    <td>$85,600</td>
                                </tr>
                                <tr>
                                    <td>Angelica Ramos</td>
                                    <td>Chief Executive Officer (CEO)</td>
                                    <td>London</td>
                                    <td>47</td>
                                    <td>2009/10/09</td>
                                    <td>$1,200,000</td>
                                </tr>
                                <tr>
                                    <td>Gavin Joyce</td>
                                    <td>Developer</td>
                                    <td>Edinburgh</td>
                                    <td>42</td>
                                    <td>2010/12/22</td>
                                    <td>$92,575</td>
                                </tr>
                                <tr>
                                    <td>Jennifer Chang</td>
                                    <td>Regional Director</td>
                                    <td>Singapore</td>
                                    <td>28</td>
                                    <td>2010/11/14</td>
                                    <td>$357,650</td>
                                </tr>
                                <tr>
                                    <td>Brenden Wagner</td>
                                    <td>Software Engineer</td>
                                    <td>San Francisco</td>
                                    <td>28</td>
                                    <td>2011/06/07</td>
                                    <td>$206,850</td>
                                </tr>
                                <tr>
                                    <td>Fiona Green</td>
                                    <td>Chief Operating Officer (COO)</td>
                                    <td>San Francisco</td>
                                    <td>48</td>
                                    <td>2010/03/11</td>
                                    <td>$850,000</td>
                                </tr>
                                <tr>
                                    <td>Shou Itou</td>
                                    <td>Regional Marketing</td>
                                    <td>Tokyo</td>
                                    <td>20</td>
                                    <td>2011/08/14</td>
                                    <td>$163,000</td>
                                </tr>
                                <tr>
                                    <td>Michelle House</td>
                                    <td>Integration Specialist</td>
                                    <td>Sidney</td>
                                    <td>37</td>
                                    <td>2011/06/02</td>
                                    <td>$95,400</td>
                                </tr>
                                <tr>
                                    <td>Suki Burks</td>
                                    <td>Developer</td>
                                    <td>London</td>
                                    <td>53</td>
                                    <td>2009/10/22</td>
                                    <td>$114,500</td>
                                </tr>
                                <tr>
                                    <td>Prescott Bartlett</td>
                                    <td>Technical Author</td>
                                    <td>London</td>
                                    <td>27</td>
                                    <td>2011/05/07</td>
                                    <td>$145,000</td>
                                </tr>
                                <tr>
                                    <td>Gavin Cortez</td>
                                    <td>Team Leader</td>
                                    <td>San Francisco</td>
                                    <td>22</td>
                                    <td>2008/10/26</td>
                                    <td>$235,500</td>
                                </tr>
                                <tr>
                                    <td>Martena Mccray</td>
                                    <td>Post-Sales support</td>
                                    <td>Edinburgh</td>
                                    <td>46</td>
                                    <td>2011/03/09</td>
                                    <td>$324,050</td>
                                </tr>
                                <tr>
                                    <td>Unity Butler</td>
                                    <td>Marketing Designer</td>
                                    <td>San Francisco</td>
                                    <td>47</td>
                                    <td>2009/12/09</td>
                                    <td>$85,675</td>
                                </tr>
                                <tr>
                                    <td>Howard Hatfield</td>
                                    <td>Office Manager</td>
                                    <td>San Francisco</td>
                                    <td>51</td>
                                    <td>2008/12/16</td>
                                    <td>$164,500</td>
                                </tr>
                                <tr>
                                    <td>Hope Fuentes</td>
                                    <td>Secretary</td>
                                    <td>San Francisco</td>
                                    <td>41</td>
                                    <td>2010/02/12</td>
                                    <td>$109,850</td>
                                </tr>
                                <tr>
                                    <td>Vivian Harrell</td>
                                    <td>Financial Controller</td>
                                    <td>San Francisco</td>
                                    <td>62</td>
                                    <td>2009/02/14</td>
                                    <td>$452,500</td>
                                </tr>
                                <tr>
                                    <td>Timothy Mooney</td>
                                    <td>Office Manager</td>
                                    <td>London</td>
                                    <td>37</td>
                                    <td>2008/12/11</td>
                                    <td>$136,200</td>
                                </tr>
                                <tr>
                                    <td>Jackson Bradshaw</td>
                                    <td>Director</td>
                                    <td>New York</td>
                                    <td>65</td>
                                    <td>2008/09/26</td>
                                    <td>$645,750</td>
                                </tr>
                                <tr>
                                    <td>Olivia Liang</td>
                                    <td>Support Engineer</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td>2011/02/03</td>
                                    <td>$234,500</td>
                                </tr>
                                <tr>
                                    <td>Bruno Nash</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>38</td>
                                    <td>2011/05/03</td>
                                    <td>$163,500</td>
                                </tr>
                                <tr>
                                    <td>Sakura Yamamoto</td>
                                    <td>Support Engineer</td>
                                    <td>Tokyo</td>
                                    <td>37</td>
                                    <td>2009/08/19</td>
                                    <td>$139,575</td>
                                </tr>
                                <tr>
                                    <td>Thor Walton</td>
                                    <td>Developer</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2013/08/11</td>
                                    <td>$98,540</td>
                                </tr>
                                <tr>
                                    <td>Finn Camacho</td>
                                    <td>Support Engineer</td>
                                    <td>San Francisco</td>
                                    <td>47</td>
                                    <td>2009/07/07</td>
                                    <td>$87,500</td>
                                </tr>
                                <tr>
                                    <td>Serge Baldwin</td>
                                    <td>Data Coordinator</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td>2012/04/09</td>
                                    <td>$138,575</td>
                                </tr>
                                <tr>
                                    <td>Zenaida Frank</td>
                                    <td>Software Engineer</td>
                                    <td>New York</td>
                                    <td>63</td>
                                    <td>2010/01/04</td>
                                    <td>$125,250</td>
                                </tr>
                                <tr>
                                    <td>Zorita Serrano</td>
                                    <td>Software Engineer</td>
                                    <td>San Francisco</td>
                                    <td>56</td>
                                    <td>2012/06/01</td>
                                    <td>$115,000</td>
                                </tr>
                                <tr>
                                    <td>Jennifer Acosta</td>
                                    <td>Junior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>43</td>
                                    <td>2013/02/01</td>
                                    <td>$75,650</td>
                                </tr>
                                <tr>
                                    <td>Cara Stevens</td>
                                    <td>Sales Assistant</td>
                                    <td>New York</td>
                                    <td>46</td>
                                    <td>2011/12/06</td>
                                    <td>$145,600</td>
                                </tr>
                                <tr>
                                    <td>Hermione Butler</td>
                                    <td>Regional Director</td>
                                    <td>London</td>
                                    <td>47</td>
                                    <td>2011/03/21</td>
                                    <td>$356,250</td>
                                </tr>
                                <tr>
                                    <td>Lael Greer</td>
                                    <td>Systems Administrator</td>
                                    <td>London</td>
                                    <td>21</td>
                                    <td>2009/02/27</td>
                                    <td>$103,500</td>
                                </tr>
                                <tr>
                                    <td>Jonas Alexander</td>
                                    <td>Developer</td>
                                    <td>San Francisco</td>
                                    <td>30</td>
                                    <td>2010/07/14</td>
                                    <td>$86,500</td>
                                </tr>
                                <tr>
                                    <td>Shad Decker</td>
                                    <td>Regional Director</td>
                                    <td>Edinburgh</td>
                                    <td>51</td>
                                    <td>2008/11/13</td>
                                    <td>$183,000</td>
                                </tr>
                                <tr>
                                    <td>Michael Bruce</td>
                                    <td>Javascript Developer</td>
                                    <td>Singapore</td>
                                    <td>29</td>
                                    <td>2011/06/27</td>
                                    <td>$183,000</td>
                                </tr>
                                <tr>
                                    <td>Donna Snider</td>
                                    <td>Customer Support</td>
                                    <td>New York</td>
                                    <td>27</td>
                                    <td>2011/01/25</td>
                                    <td>$112,000</td>
                                </tr>
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
                                                <input id="schedule_start_date" type="text" class="datepicker form-control" placeholder="Please choose start date...">
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
                                                <input type="text" id="start_time" class="timepicker form-control" placeholder="Please choose start time...">
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
                                                <input id="end_date" type="text" class="datepicker form-control" placeholder="Please choose end date...">
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
                                                <input type="text" id="end_time" class="timepicker form-control" placeholder="Please choose end time...">
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
                                <tr >
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
                        <button class="btn bg-teal btn-sm waves-effect btn-block" onclick="editDetails()" value="Edit" id="editBtn">Edit</button>
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
                                                    <input type="text" class="form-control details profile-control" id="Name"
                                                           name="Name" placeholder="Name" value="Sadeepa Laksri"
                                                           disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Address" class="col-sm-2 control-label">Address</label>
                                            <div class="col-sm-10">
                                                <div class="form-line view-mode profile-line">
                                                    <input type="text" class="form-control details profile-control" id="Address"
                                                           name="Address" placeholder="Address"
                                                           value="Veyangoda, Gampaha." disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="TelNo" class="col-sm-2 control-label">Mobile Number</label>
                                            <div class="col-sm-10">
                                                <div class="form-line view-mode profile-line">
                                                    <input type="number" class="form-control details profile-control" id="TelNo"
                                                           name="TelNo" placeholder="Telephone Number"
                                                           value="0716220786" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Email" class="col-sm-2 control-label">Email</label>
                                            <div class="col-sm-10">
                                                <div class="form-line view-mode profile-line">
                                                    <input type="email" class="form-control details profile-control" id="Email"
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
