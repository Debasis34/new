<!DOCTYPE html>
<html lang="en">
<?php
define('IMAGE_PATH', 'http://localhost/phplogin/');
?>



<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Railway - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/railway2.css" rel="stylesheet">

    <style>
.transparent-image {
    opacity: 0.2; 
    position: fixed; 
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover; 
    z-index: -1; 
}

    .carousel-item img {
        max-width: 100%;
        max-height: 450px; 
        display: block;
        margin: auto; 
    }
    
.scroll-box-container {
    width: 100%; 
    margin: 20px; 
}

.scroll-box {
    height: 300px;
    overflow: hidden; 
    background-color: #f9f9f9; 
    border: 1px solid #ccc; 
    position: relative; 
}

.scroll-box thead th {
    position: sticky;
    top: 0;
    background-color: #f2f2f2;
    z-index: 1;
}

.scroll-box h5 {
    background-color: #007bff; 
    color: #fff; 
    padding: 10px; 
    margin: 0; 
}

.scroll-box .content {
    position: absolute; 
    width: 100%; 
    animation: scroll-up 30s linear infinite; 
}

@keyframes scroll-up {
    0% {
        top: 100%; 
    }
    100% {
        top: -200%; 
    }
}

.scroll-box:hover .content {
    animation-play-state: paused; 
}
</style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../SignUP-SignIn-FIrebase-main/railwayimg.jpg">
                <div class="sidebar-brand-icon ">
                    <img src="../logo cropped.png" alt="Login Image" class="img-fluid custom-bg-image">
                </div>
                <div class="sidebar-brand-text mx-3">Railway</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="railwayDashboardDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="railwayDashboardDropdown">
                    <a class="dropdown-item" href="#">Railway Board</a>
                    <a class="dropdown-item dropdown-toggle" href="#" id="category2Dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        xyz
                    </a>
                    <div class="dropdown-menu" aria-labelledby="category2Dropdown">
                        <a class="dropdown-item" href="#">subcat</a>
                        <a class="dropdown-item" href="#">subcat</a>
                    </div>
                    <a class="dropdown-item" href="category.php">All</a>
                </div>
            </li>

            

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Departments
            </div>

            <!-- Nav Item - Accounts Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Accounts</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.php">Subcat1</a>
                        <a class="collapse-item" href="cards.php">Subcat2</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Personnel Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Personnel</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Catelogue</h6>
                        <a class="collapse-item" href="utilities-color.php">Subcat 1</a>
                        <a class="collapse-item" href="utilities-border.php">Subcat 2</a>
                        <a class="collapse-item" href="utilities-animation.php">Subcat 3</a>
                        <a class="collapse-item" href="utilities-other.php">Other</a>
                    </div>
                </div>
            </li>

        

            <!-- Nav Item - S & T Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>S & T</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="index.php">Login</a>
                        <a class="collapse-item" href="register.php">Register</a>
                        <a class="collapse-item" href="forgot-password.php">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.php">404 Page</a>
                        <a class="collapse-item" href="blank.php">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>RPF</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Commercial</span></a>
            </li>

            <!-- Nav Item- Mechanical collapse menu-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Mechanical</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.php">Subcat1</a>
                        <a class="collapse-item" href="cards.php">Subcat2</a>
                    </div>
                </div>
            </li>

           <!-- Nav Item- Operating collapse menu-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Operating</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-3 collapse-inner rounded">
                        <h6 class="collapse-header">Catelogue</h6>
                        <a class="collapse-item" href="utilities-color.php">Subcat 1</a>
                        <a class="collapse-item" href="utilities-border.php">Subcat 2</a>
                        <a class="collapse-item" href="utilities-animation.php">Subcat 3</a>
                        <a class="collapse-item" href="utilities-other.php">Other</a>
                    </div>
                </div>
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
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

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
                                <button class="btn btn-primary" type="button">
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
                        <div class="topbar-divider d-none d-sm-block"></div>
                    </ul>

                </nav>
            <marquee>Welcome to East Coast Railway: Rail Sadan, East Coast Railway,  Chandrasekharpur, Bhubaneswar-751017</marquee>

                <!-- End of Topbar -->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
  <div class="carousel-item active">
    <img class="d-block w-100" src="<?php echo IMAGE_PATH . 'slide1.png.'; ?>" alt="First slide">
</div>
<div class="carousel-item">
    <img class="d-block w-100" src="<?php echo IMAGE_PATH . 'slide2.jpg'; ?>" alt="Second slide">
</div>
<div class="carousel-item">
    <img class="d-block w-100" src="<?php echo IMAGE_PATH . 'slide3.jpeg'; ?>" alt="Third slide">
</div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="scroll-box-container">
                <div class="scroll-box">
                    <h5 class="text-center">NOTICE</h5>
                    <div class="content">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Serial No</th>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Link</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>July 10, 2024</td>
                                    <td>Operationalization of Cadre Management and Organisation Hierarchy module of HRMS in Railways.</td>
                                    <td><a href="notice1.html" class="d-block" target="_blank">Click Here</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>July 9, 2024</td>
                                    <td>Inquiry under Railway Servants (Disciplin &Appeal)Rules 1968,Appointment of Inquiring authority</td>
                                    <td><a href="notice2.html" class="d-block" target="_blank">Click Here</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>July 8, 2024</td>
                                    <td>Scheme of General Departmental Competitive Examination (GDCE)-regarding provision of quota for PwBD.</td>
                                    <td><a href="notice3.html" class="d-block" target="_blank">Click Here</a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>July 7, 2024</td>
                                    <td>Incorporation of provision for rounding off the qualifying service for the purpose of  Post Retirement Complimentary Pass (PRCP) facility.</td>
                                    <td><a href="notice4.html" class="d-block" target="_blank">Click Here</a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>July 23, 2023</td>
                                    <td>Amendment of provisions relating to Railway Staff Benefit Fund-Chapter-8 of Indian Railway Establishment Code,Volume-1</td>
                                    <td><a href="notice4.html" class="d-block" target="_blank">Click Here</a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>March 7, 2023</td>
                                    <td>Permission to retain Railway accommodation at the place of previous posting by Railway officers/staff going on deputation to Rail Energy Management Company Ltd. (REMC Ltd.).</td>
                                    <td><a href="notice4.html" class="d-block" target="_blank">Click Here</a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Nov 7, 2022</td>
                                    <td>Advance issue of Privilege Pass Surrender Certificate (PPSC)/Confirmation note (CN) for availing AILTC in the next Calender year.</td>
                                    <td><a href="notice4.html" class="d-block" target="_blank">Click Here</a></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>July 7, 2022</td>
                                    <td>Selection procedure for promotion to selection posts-Formation of panel of Commercial-cum-Tickets Clerks</td>
                                    <td><a href="notice4.html" class="d-block" target="_blank">Click Here</a></td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="scroll-box-container">
                <div class="scroll-box">
                    <h5 class="text-center">POLICY</h5>
                    <div class="content">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Serial No</th>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Link</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>July 10, 2024</td>
                                    <td>Metro Railway (Construction & Works) Act, 1978</td>
                                    <td><a href="notice1.html" class="d-block" target="_blank">Click Here</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>July 5, 2024</td>
                                    <td>Calcutta Metro Railway (Operation and Maintenance) Temporary Provisions Act, 1985</td>
                                    <td><a href="notice2.html" class="d-block" target="_blank">Click Here</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Oct 6, 2023</td>
                                    <td>Details by Secretary Directorate</td>
                                    <td><a href="notice3.html" class="d-block" target="_blank">Click Here</a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>April 24, 2023</td>
                                    <td>Details by Traffic Commercial / Transportation Directorate</td>
                                    <td><a href="notice4.html" class="d-block" target="_blank">Click Here</a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Nov 7, 2022</td>
                                    <td>RCT Act and Rules </td>
                                    <td><a href="notice4.html" class="d-block" target="_blank">Click Here</a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>July 1, 2022</td>
                                    <td>The Railways (Employment of Members of the Armed Forces) Act, 1965, Act No. 40 of 1965</td>
                                    <td><a href="notice4.html" class="d-block" target="_blank">Click Here</a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>June 16, 2022</td>
                                    <td>Sectoral Guidelines for Domestic/Foreign Direct Investment in Railways</td>
                                    <td><a href="notice4.html" class="d-block" target="_blank">Click Here</a></td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



        <!-- End of Content Wrapper -->
        <img src="../logo cropped.png" class="transparent-image >
        <!-- begin page content -->
       
     <!-- Footer -->

    <!-- End of Footer -->
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
                    <a class="btn btn-primary" href="index.php">Logout</a>
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

    <script>
    document.querySelector('.scroll-box').addEventListener('mouseover', function() {
        this.querySelector('.content').style.animationPlayState = 'paused';
    });

    document.querySelector('.scroll-box').addEventListener('mouseout', function() {
        this.querySelector('.content').style.animationPlayState = 'running';
    });
</script>


</body>

</html>