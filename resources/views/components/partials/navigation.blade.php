<!-- Main Header Wrapper with Gradient and Shadow -->
<div class="container-fluid bg-nature-gradient pb-2 shadow">
    
    <!-- TOP BAR (Desktop Only - Secondary Links) -->
    <div class="container d-none d-lg-flex justify-content-between align-items-center top-navbar pt-2 pb-1 border-bottom border-white border-opacity-10">
        <!-- Left Side: Seller & Socials -->
        <div class="d-flex align-items-center gap-3">
            <a href="#">Seller Centre</a>
            <span class="text-white opacity-50">|</span>
            <a href="#">Download</a>
            <span class="text-white opacity-50">|</span>
            <span class="text-white d-flex align-items-center gap-2 opacity-75">
                Follow us on 
                <a href="#" class="fs-6 d-flex"><ion-icon name="logo-facebook"></ion-icon></a>
                <a href="#" class="fs-6 d-flex"><ion-icon name="logo-instagram"></ion-icon></a>
            </span>
        </div>
        
        <!-- Right Side: Notifications, Help, Auth -->
        <div class="d-flex align-items-center gap-3">
            <a href="#" class="d-flex align-items-center gap-1"><ion-icon name="notifications-outline" class="fs-6"></ion-icon> Notifications</a>
            <a href="#" class="d-flex align-items-center gap-1"><ion-icon name="help-circle-outline" class="fs-6"></ion-icon> Help</a>
            <span class="text-white opacity-50">|</span>
            <a href="{{ route('auth.register') }}" class="fw-bold text-white">Sign Up</a>
            <span class="text-white opacity-50">|</span>
            <a href="{{ route('auth.login') }}" class="fw-bold text-white">Login</a>
        </div>
    </div>

    <!-- MAIN NAVBAR -->
    <div class="container pt-2">
        <!-- bg-transparent because the parent fluid div handles the gradient now -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent px-0">
            <div class="container-fluid px-0">
                
                <!-- Logo / Brand -->
                <a class="navbar-brand fw-bold fs-2 text-white d-flex align-items-center me-lg-5" href="#">
                    <ion-icon name="leaf" class="me-2 mb-1"></ion-icon> MyStore
                </a>
                
                <!-- Mobile Toggler -->
                <button class="navbar-toggler border-0 shadow-none px-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <!-- Search Area (Input + Tags) -->
                    <div class="d-flex flex-column flex-grow-1 mx-lg-4 my-3 my-lg-0">
                        <!-- Search Form -->
                        <form class="d-flex w-100 shadow-sm" role="search">
                            <input class="form-control me-1 rounded-1 border-0 shadow-none px-3 py-2" type="search" placeholder="Search for eco-friendly products, brands and shops" aria-label="Search" />
                            <button class="btn btn-search rounded-1 border-0 d-flex align-items-center justify-content-center px-4" type="submit">
                                <ion-icon name="search-outline" class="text-nature fs-5"></ion-icon>
                            </button>
                        </form>
                        <!-- Search Tags (Desktop Only) -->
                        <div class="search-tags mt-2 d-none d-lg-block">
                            <a href="#">Bamboo Toothbrush</a>
                            <a href="#">Organic Soap</a>
                            <a href="#">Canvas Bags</a>
                            <a href="#">Essential Oils</a>
                            <a href="#">Vegan Leather</a>
                        </div>
                    </div>
                    
                    <!-- Right Menu (Cart & Mobile Auth) -->
                    <ul class="navbar-nav mb-2 mb-lg-0 align-items-center ms-lg-3">
                        
                        <!-- Cart Icon -->
                        <li class="nav-item me-lg-3 mb-3 mb-lg-0 mt-2 mt-lg-0">
                            <a class="nav-link position-relative text-white fs-4 px-2" href="#">
                                <ion-icon name="cart-outline"></ion-icon>
                                <!-- Notification Badge -->
                                <span class="position-absolute top-25 start-100 translate-middle badge rounded-pill bg-white text-nature border border-white shadow-sm" style="font-size: 0.65rem; margin-top: 2px; margin-left: -5px;">
                                    3
                                </span>
                            </a>
                        </li>
                        
                        <!-- Mobile Only Auth Links (Since desktop has them in the Top Bar) -->
                        <li class="nav-item d-lg-none w-100 border-top border-white border-opacity-25 mt-2 pt-2">
                            <a class="nav-link text-white" href="#">Sign Up</a>
                        </li>
                        <li class="nav-item d-lg-none w-100">
                            <a class="nav-link text-white" href="#">Login</a>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </nav>
    </div>
</div>