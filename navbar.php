<!-- CSS here -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/price_rangs.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="assets/css/modal.css">
   </head>
    <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader End -->
    
<header>
<?php 

include "modal.php";
?>
        <!-- Header Start -->
       <div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>  
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="index.php">Beranda</a></li>
                                            <li><a href="joblist.php">Cari Kerja</a></li>
                                            <li><a href="about.php">Tentang</a></li>
                                            <li><a href="#">Halaman</a></li>
                                            <li><a href="#">Kontak</a></li>
                                        </ul>
                                    </nav>
                                </div>

                                <?php if ( isset($_SESSION["username"]) && ($_SESSION["user_akses"] == "klien")): ?>
                                <div class="main-menu">
                                <nav class="d-none d-lg-block">
                                <ul id="navigation">
                                    <li><a href="#"><i class="fas fa-user-circle fa-lg"></i> <?php echo $_SESSION["nama"]; ?></a>
                                        <ul class="submenu">
                                            <li><a href="profile.php">Profil</a></li>
                                            <li><a href="uploadjob.php">Upload Job</a></li>
                                            <li><a href="action/act_logout.php"></i>Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                </nav>    
                                </div>

                                <?php elseif ( isset($_SESSION["username"]) && ($_SESSION["user_akses"] == "admin")): ?>
                                <div class="main-menu">
                                <nav class="d-none d-lg-block">
                                <ul id="navigation">
                                    <li><a href="#"><i class="fas fa-user-circle fa-lg"></i> Admin</a>
                                        <ul class="submenu">
                                            <li><a href="cntl/dLowongan.php">Data Lowongan</a></li>
                                            <li><a href="cntl/dKlien.php">Data Klien</a></li>
                                            <li><a href="action/act_logout.php"></i>Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                </nav>    
                                </div>

                                <?php else: ?>          
                                <!-- Header-btn -->
                                <div class="header-btn d-none f-right d-lg-block">
                                    <a href="#myModal" data-toggle="modal" class="btn head-btn2">Login</a>
                                </div>
                                <!-- Header-btn -->
                                <?php endif; ?>

                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
        <!-- Header End -->
    </header>