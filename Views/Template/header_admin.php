<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendors Min CSS -->
        <link rel="stylesheet" href="<?= media();?>\css\vendors.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="<?= media();?>\css\style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="<?= media();?>\css\responsive.css">
         

        <title>Sistema Logistica</title>

        <link rel="icon" type="image/png" href="<?= media();?>/images/uploads/dorado.png">
    </head>

    <body>

        <!-- Start Sidemenu Area -->
        <div class="sidemenu-area">
            <div class="sidemenu-header">
                <a href="dashboard-analytics.html" class="navbar-brand d-flex align-items-center">
                    <img style="width:48px;" src="<?= media();?>/images/uploads/dorado.png" alt="image">
                    <span>Logistica</span>
                </a>
               
               <div class="responsive-burger-menu d-block d-lg-none active">
                    <span class="top-bar"></span>
                    <span class="middle-bar"></span>
                    <span class="bottom-bar"></span>
                </div>
            </div>

            <div class="sidemenu-body">
                <ul class="sidemenu-nav metisMenu h-100" id="sidemenu-nav" data-simplebar="">
                    <li class="nav-item-title">
                        Main
                    </li>

                    <li class="nav-item">
                        <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                            <span class="icon"><i class='bx bx-home-circle'></i></span>
                            <span class="menu-title">Dashboard</span>
                            <span class="badge">2</span>
                        </a>

                        <ul class="sidemenu-nav-second-level">
                            <li class="nav-item">
                                <a href="dashboard-analytics.html" class="nav-link">
                                    <span class="icon"><i class='bx bx-analyse'></i></span>
                                    <span class="menu-title">Analytics</span>
                                </a>
                            </li>
        
                            <li class="nav-item">
                                <a href="dashboard-ecommerce.html" class="nav-link">
                                    <span class="icon"><i class='bx bxs-shopping-bag'></i></span>
                                    <span class="menu-title">eCommerce</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item-title">
                        Gestiones
                    </li>

                    <li class="nav-item">
                        <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                            <span class="icon"><i class=' bx bxl-react'></i></span>
                            <span class="menu-title">Armeria</span>
                            <span class="badge">3</span>
                        </a>

                        <ul class="sidemenu-nav-second-level">
                            <li class="nav-item">
                                <a href="app-email.html" class="nav-link">
                                    <span class="icon"><i class='bx bxs-radiation'></i></span>
                                    <span class="menu-title">Municiones</span>
                                </a>
                            </li>
        
                            <li class="nav-item">
                                <a href="email-read.html" class="nav-link">
                                    <span class="icon"><i class='bx bxs-badge-check'></i></span>
                                    <span class="menu-title">Despachos</span>
                                </a>
                            </li>
        
                            <li class="nav-item">
                                <a href="email-compose.html" class="nav-link">
                                    <span class="icon"><i class='bx bx-send'></i></span>
                                    <span class="menu-title">Asignaciones</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End Sidemenu Area -->

        <!-- Start Main Content Wrapper Area -->
        <div class="main-content d-flex flex-column">

            <!-- Top Navbar Area -->
            <nav class="navbar top-navbar navbar-expand">
                <div class="collapse navbar-collapse" id="navbarSupportContent">
                    <div class="responsive-burger-menu d-block d-lg-none">
                        <span class="top-bar"></span>
                        <span class="middle-bar"></span>
                        <span class="bottom-bar"></span>
                    </div>
                    
                    <ul class="navbar-nav left-nav align-items-center">
                       

                        
                    </ul>

                    <form class="nav-search-form d-none ml-auto d-md-block">
                       
                    </form>

                    <ul class="navbar-nav right-nav align-items-center">
                        <li class="nav-item">
                            <a class="nav-link bx-fullscreen-btn" id="fullscreen-button">
                                <i class="bx bx-fullscreen"></i>
                            </a>
                        </li>

                      

                       
                        <li class="nav-item dropdown profile-nav-item">
                            <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="menu-profile">
                                    <span class="name">Hi! Andro</span>
                                    <img src="<?= media();?>/images/uploads/dorado.png" class="rounded-circle" alt="image">
                                </div>
                            </a>

                            <div class="dropdown-menu">
                                <div class="dropdown-header d-flex flex-column align-items-center">
                                    <div class="figure mb-3">
                                        <img src="<?= media();?>/images/uploads/dorado.png" class="rounded-circle" alt="image">
                                    </div>

                                    <div class="info text-center">
                                        <span class="name">Andro Smith</span>
                                        <p class="mb-3 email">hello@androsmith.com</p>
                                    </div>
                                </div>

                                <div class="dropdown-body">
                                    <ul class="profile-nav p-0 pt-3">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class='bx bx-user'></i> <span>Profile</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class='bx bx-envelope'></i> <span>My Inbox</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class='bx bx-edit-alt'></i> <span>Edit Profile</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class='bx bx-cog'></i> <span>Settings</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown-footer">
                                    <ul class="profile-nav">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class='bx bx-log-out'></i> <span>Logout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Top Navbar Area -->