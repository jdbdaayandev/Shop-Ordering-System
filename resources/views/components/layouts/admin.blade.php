<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NatureStore Admin</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" crossorigin="anonymous">
    
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f4; 
            overflow-x: hidden;
        }

        .wrapper {
            display: flex;
            width: 100%;
            height: 100vh;
        }

        .sidebar {
            width: 260px;
            background-color: #1b5e20; 
            color: #ffffff;
            display: flex;
            flex-direction: column;
            transition: all 0.3s;
            z-index: 1040;
        }

        .sidebar-header {
            padding: 20px;
            font-size: 1.5rem;
            font-weight: bold;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
        }

        .sidebar-nav {
            padding: 15px 0;
            flex-grow: 1;
        }

        .sidebar-link {
            display: flex;
            align-items: center;
            color: rgba(255, 255, 255, 0.8);
            padding: 12px 20px;
            text-decoration: none;
            transition: all 0.2s;
            font-size: 1rem;
        }

        .sidebar-link ion-icon {
            font-size: 1.4rem;
            margin-right: 15px;
        }

        .sidebar-link:hover, .sidebar-link.active {
            color: #ffffff;
            background-color: rgba(255, 255, 255, 0.1);
            border-left: 4px solid #81c784; 
        }

        .main-panel {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            min-width: 0; 
        }

        .admin-navbar {
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .content-area {
            padding: 24px;
            flex-grow: 1;
            overflow-y: auto;
        }

        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                height: 100%;
                left: -260px; 
            }
            .sidebar.show {
                left: 0;
            }
        }
        
        .stat-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            transition: transform 0.2s;
        }
        .stat-card:hover {
            transform: translateY(-3px);
        }
        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
        }
        .bg-light-green { background-color: #e8f5e9; color: #2e7d32; }
        .bg-light-blue { background-color: #e3f2fd; color: #1565c0; }
        .bg-light-orange { background-color: #fff3e0; color: #ef6c00; }
        .bg-light-red { background-color: #ffebee; color: #c62828; }
    </style>
</head>
<body>

    <div class="wrapper">
        <!-- SIDEBAR -->
        <nav class="sidebar" id="sidebar">
            <div class="sidebar-header d-flex align-items-center justify-content-center gap-2">
                <ion-icon name="leaf"></ion-icon> Admin Panel
            </div>
            
            <div class="sidebar-nav">
                <a href="#" class="sidebar-link active">
                    <ion-icon name="grid-outline"></ion-icon> Dashboard
                </a>
                <a href="#" class="sidebar-link">
                    <ion-icon name="pricetags-outline"></ion-icon> Products
                </a>
                <a href="#" class="sidebar-link">
                    <ion-icon name="cart-outline"></ion-icon> Orders
                    <span class="badge bg-danger ms-auto rounded-pill">5</span>
                </a>
                <a href="#" class="sidebar-link">
                    <ion-icon name="people-outline"></ion-icon> Customers
                </a>
                <a href="#" class="sidebar-link">
                    <ion-icon name="settings-outline"></ion-icon> Settings
                </a>
            </div>
            
            <div class="p-3 mt-auto">
                <a href="#" class="btn btn-outline-light w-100 d-flex align-items-center justify-content-center gap-2">
                    <ion-icon name="log-out-outline"></ion-icon> Logout
                </a>
            </div>
        </nav>

        <!-- MAIN PANEL -->
        <div class="main-panel">
            
            <!-- TOP NAVBAR -->
            <header class="admin-navbar">
                <div class="d-flex align-items-center gap-3">
                    <button class="btn btn-light d-md-none" id="sidebarToggle">
                        <ion-icon name="menu-outline" class="fs-4"></ion-icon>
                    </button>
                    
                    <form class="d-none d-md-flex align-items-center bg-light rounded px-3 py-1 border">
                        <ion-icon name="search-outline" class="text-muted"></ion-icon>
                        <input type="text" class="form-control border-0 bg-transparent shadow-none form-control-sm ms-2" placeholder="Search...">
                    </form>
                </div>

                <div class="d-flex align-items-center gap-3">
                    <a href="#" class="text-dark position-relative fs-4">
                        <ion-icon name="notifications-outline"></ion-icon>
                        <span class="position-absolute top-25 start-75 translate-middle p-1 bg-danger border border-light rounded-circle">
                            <span class="visually-hidden">New alerts</span>
                        </span>
                    </a>
                    
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center text-decoration-none text-dark dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="https://ui-avatars.com/api/?name=Admin+User&background=2e7d32&color=fff" alt="Admin" width="35" height="35" class="rounded-circle me-2">
                            <span class="d-none d-md-inline fw-semibold fs-6">Admin User</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 mt-2">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="#">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </header>

            <!-- MAIN CONTENT AREA -->
            <main class="content-area">
                
                {{ $slot }}

            </main>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.js"></script>
    
    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('show');
        });
    </script>
</body>
</html>