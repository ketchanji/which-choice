
<?php

include 'db.php';

if(isset($_POST['display'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $address = $_POST['address'];
    $head_office = $_POST['head_office'];

    $sql = "INSERT INTO customer (name,email,date,address,head_office) VALUES('$name','$email','$date','$address','$head_office')";

    $result = mysqli_query($connection,$sql);

    if($result) {
      header("admin.php");
    }}





?>



<?php 
include 'db.php';

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO register (name,email,password) VALUES('$name','$email','$password')";

    $result = mysqli_query($connection,$sql);

    if($result) {
      header("");
    }else {
        die("There was a problem sending us your Message");
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin- Dashboard</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/lolo.png">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="bootstrap-5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/counter.css">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: rgb(7, 62, 99)">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
                <div class="sidebar-brand-icon rotate-n-2">
                    <i class="fas fa-user"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="admin.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Components</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Components:</h6>
                    <a class="collapse-item" href="customer_table.php">registered customers</a>
                </div>
            </div>
        </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.php">Register</a>
                        <a class="collapse-item" href="forgot-password.php">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.php">404 Page</a>
                        <a class="collapse-item" href="blank.php">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content bg-white">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light  topbar mb-4 static-top shadow" >

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn" type="button" style="background-color: rgb(7, 62, 99)">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <?php 
                                    include ('db.php');

                                    $sql = "SELECT * FROM contact_us";
    
                                    $contactusDataQuery = mysqli_query($connection,$sql);
                                        if(!$contactusDataQuery) {
                                            die("Error trying to get message data");
                                        //  echo $studDataQuery;
                                        // print_r($studData);
                                    }  
                                    $numberContact = mysqli_num_rows($contactusDataQuery);
                                    // echo $numberContact;
                                    echo "<span class='badge badge-danger badge-counter'>".$numberContact."</span>";
                                ?>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <?php   
                                include ('db.php');

                                $sql = "SELECT * FROM contact_us";

                                $contactusDataQuery = mysqli_query($connection,$sql);
                                    if(!$contactusDataQuery) {
                                        die("Error trying to get message data");
                                    //  echo $studDataQuery;
                                    // print_r($studData);
                                }  


                                while($data = mysqli_fetch_assoc($contactusDataQuery)) {

                                    echo " <a class='dropdown-item d-flex align-items-center' href='#'>
                                    <div class='dropdown-list-image mr-3'>
                                        <img class='rounded-circle' src='img/undraw_profile_2.svg'
                                            alt='...'>
                                        <div class='status-indicator'></div>
                                    </div>
                                    <div>
                                        <div class='text-truncate'>".$data['email']."</div>
                                        <div class='small text-gray-500'>".$data['message']."</div>
                                    </div>
                                </a>";
                            }
                                
                            

                                ?>
                    
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>
             
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-800 small">valery</span>
                                <img class="img-profile rounded-circle"
                                    src="img/mimi.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid" style="background: #e4eaec">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Admin Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm  shadow-sm" style="background: #0c4586"><i
                                class="fas fa-download fa-sm text-white-90" style="color: #fff"></i> Generate Report</a>
                    </div>

<!-- Content Row -->
<div class="row">

    <!-- total (clients) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left- shadow h-100 py-2" style="background: #0bb2d4">
            <div class="card-body">
                <div class="row no-gutters align-items-center" >
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                            Create user</div>
                        <div class="h5 mb-0 font-weight-bold text-white-800" style="color: #fff">CREATE USER</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-3x text-gray-300"></i>
                    </div>
                </div>
            </div>
    <div class="card-footer" style="background: #0bb2d4">
    <button type="button" class="btn big-register" data-toggle="modal" data-target="#registerModal" data-whatever="@mdo" style="color: #fff">Create user</button>
 <div class="modal fade register" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registerModalLabel">CREATE NEW USER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          <div class="form-group">
          <label for="Name">Name:</label>
    <input type="text" class="form-control" placeholder="Enter name" id="name" name="name">
          </div>
          <div class="form-group">
          <label for="email">Email:</label>
    <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
          </div>
          <div class="form-group">
          <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn " style="background: #0c4586" name="submit">Create</button>
      </div>
      </form>
    </div>
  </div>
</div>
            </div>
        </div>
    </div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-left- shadow h-100 py-2" style="background: #17b3a3">
    <div class="card-body">
        <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                    REgister company</div>
                <div class="h5 mb-0 font-weight-bold text-white-800" style="color: #fff">REGISTER NEW COMPANY</div>
            </div>
            <div class="col-auto">
                <i class="fas fa-users fa-3x text-gray-300"></i>
            </div>
        </div>
    </div>
    <div class="card-footer" style="background: #17b3a3">
<button type="button" class="btn btn-" data-toggle="modal" data-target="#Modal" data-whatever="@mdo" style="color: #fff">Register company</button>

<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">REGISTER NEW COMPANY</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST" >
          <div class="form-group">
          <label for="name">Name:</label>
    <input type="text" class="form-control" placeholder="Enter name" id="name" name="name">
          </div>
          <div class="form-group">
          <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
          </div>
          <div class="form-group">
          <label for="date">DATE:</label>
    <input type="date" class="form-control" placeholder="Enter Date" id="date" name="date">
          </div>
          <div class="form-group">
          <label for="address">Address:</label>
    <input type="address" class="form-control" placeholder="Enter Address" id="address" name="address">
          </div>
          <div class="form-group">
          <label for="head_office">Head_Office:</label>
    <input type="head_office" class="form-control" placeholder="Enter Head_Office" id="head_office" name="head_office">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" style="background: #17b3a3" name="display" class="btn btn-primary" >Register</button>
      </div>
      
      </form>
    </div>
  </div>
</div>
    </div>
  </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left- shadow h-100 py-2" style= "background: #dd9968">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Tasks
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto" >
                            <div class="h5 mb-0 mr-3 font-weight-bold " style="color: #fff">65%</div>
                        </div>
                        <div class="col">
                            <div class="progress progress-sm mr-2">
                                <div class="progress-bar bg-success" role="progressbar" 
                                    style="width: 65%" aria-valuenow="50" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-6x text-gray-300"></i>
                </div>
            </div>
        </div>
       
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left- shadow h-100 py-2" style="background: #17b3a3">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1 colored">
                        Unreplied Messages</div>
                    <div class="h5 mb-0 font-weight-bold text-white-800" style="color: #fff">18</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-comments fa-6x text-gray-300"></i>
                </div>
            </div>
        </div>
        <div class="card-footer" style="background: #17b3a3">
            
        </div>
    </div>
</div>
</div>

<div class="box">
    <div class="row" >
        <div class="four col-md-3">
            <div class="counter-box colored" style="background: #0bb2d4"> <i class="fa fa-eye"></i> <span class="counter">5147</span>
                <p>total Visit</p>
            </div>
        </div>
        <div class="four col-md-3">
            <div class="counter-box colored" style="background: #17b3a3"> <i class="fa fa-star" ></i> <span class="counter">3275</span>
                <p>Total Rating</p>
            </div>
        </div>
        <div class="four col-md-3">
            <div class="counter-box colored" style= "background: #dd9968"> <i class="fa fa-thumbs-up"></i> <span class="counter">289</span>
                <p>Total Subcribers</p>
            </div>
            </div>
            <div class="four col-md-3">
            <div class="counter-box colored" style="background: #0bb2d4"> <i class="fa fa-users"></i> <span class="counter">6003</span>
                <p>Satisfield Clients</p>
            </div>
        </div>
    </div><br><br>
    
<!-- Pie Chart -->
<div class="col-xl-4 col-lg-5">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                    aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Dropdown Header:</div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="chart-pie pt-4 pb-2">
                <canvas id="myPieChart"></canvas>
            </div>
            <div class="mt-4 text-center small">
                <span class="mr-2">
                    <i class="fas fa-circle text-primary"></i> Direct
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle text-success"></i> Social
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle text-info"></i> Referral
                </span>
            </div>
        </div>
    </div>
    </div>
 </div>
 <!-- Area Chart -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
    </div>
    <div class="card-body">
        <div class="chart-area">
            <canvas id="myAreaChart"></canvas>
        </div>
        <hr>
        
    </div>
</div>

<!-- Bar Chart -->

            <!-- Footer -->
            <footer class="sticky-footer " >
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="./bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./bootstrap-5.0.2/dist/js/bootstrap.min.js"></script>

   <script> $(document).ready(function() {

$('.counter').each(function () {
$(this).prop('Counter',0).animate({
Counter: $(this).text()
}, {
duration: 4000,
easing: 'swing',
step: function (now) {
$(this).text(Math.ceil(now));
}
});
});

});
    </script>
</body>

</html>