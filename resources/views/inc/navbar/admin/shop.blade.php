<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
        <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
        <div class="logo"><a href="#" class="simple-text logo-normal">
                Only pain Dashboard
            </a></div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item   ">
                    <a class="nav-link" href="/admin-dashboard">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/admin-subscriber">
                        <i class="material-icons">person</i>
                        <p>Subscribers</p>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/admin-shop">
                        <i class="material-icons">content_paste</i>
                        <p>Shop</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/admin-music">
                        <i class="material-icons">library_books</i>
                        <p>Music</p>
                    </a>
                </li>
                {{-- <li class="nav-item ">
                    <a class="nav-link" href="/admin-newsletter">
                        <i class="material-icons">library_books</i>
                        <p>Newsletter</p>
                    </a>
                </li> --}}
                <li class="nav-item ">
                    <a class="nav-link" href="/admin-video">
                        <i class="material-icons">shop</i>
                        <p>Video</p>
                    </a>
                </li>





            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="javascript:;">Shop</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">

                    <ul class="navbar-nav">


                        <li class="nav-item dropdown">
                            <a class="nav-link" href="javascript:;" id="navbarDropdownProfile"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">person</i>
                                <p class="d-lg-none d-md-block">
                                    Account
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
