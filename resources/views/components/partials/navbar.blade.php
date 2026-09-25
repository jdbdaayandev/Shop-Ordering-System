<!-- Note: If you want the orange background to stretch across the whole screen, 
     we wrap the container in a fluid div with the background color -->
<div class="container-fluid bg-shopee pb-1">
    <div class="container">
        <!-- Changed to navbar-dark to automatically make the toggler icon white -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-shopee">
            <div class="container-fluid px-0">
                
                <!-- Logo / Brand -->
                <a class="navbar-brand fw-bold fs-3 text-white" href="#">
                    <!-- Ensure you have Bootstrap Icons linked in your project for these to show -->
                    <i class="bi bi-bag-check-fill"></i> Shopee
                </a>
                
                <!-- Mobile Toggler -->
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <!-- Search Bar (Expands to fill middle space) -->
                    <form class="d-flex flex-grow-1 mx-lg-4 my-3 my-lg-0" role="search">
                        <input class="form-control me-1 rounded-1 border-0 shadow-none" type="search" placeholder="Search for products, brands and shops" aria-label="Search" />
                        <button class="btn bg-white rounded-1 border-0" type="submit">
                            <ion-icon name="search-outline"></ion-icon>
                        </button>
                    </form>
                    
                    <!-- Right Menu: Cart, Sign Up, Login -->
                    <ul class="navbar-nav mb-2 mb-lg-0 align-items-center">
                        
                        <!-- Cart with Badge -->
                        <li class="nav-item me-lg-3 mb-3 mb-lg-0">
                            <a class="nav-link position-relative nav-link-shopee fs-5 px-3" href="#">
                                <ion-icon name="cart-outline"></ion-icon>
                                <!-- BS5 Badge styling -->
                                <span class="position-absolute top-25 start-75 translate-middle badge rounded-pill bg-white text-shopee border border-white" style="font-size: 0.65rem; margin-top: 5px;">
                                    3
                                    <span class="visually-hidden">items in cart</span>
                                </span>
                            </a>
                        </li>
                        
                        <!-- Sign Up -->
                        <li class="nav-item border-end border-white border-opacity-50 d-none d-lg-block">
                            <a class="nav-link nav-link-shopee px-3" href="#">Sign Up</a>
                        </li>
                        <li class="nav-item d-lg-none">
                            <a class="nav-link nav-link-shopee px-3" href="#">Sign Up</a>
                        </li>
                        
                        <!-- Login -->
                        <li class="nav-item">
                            <a class="nav-link nav-link-shopee px-3" href="#">Login</a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </nav>
    </div>
</div>