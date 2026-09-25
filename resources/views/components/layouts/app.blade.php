<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NatureStore Admin</title>
    <!-- Bootstrap 5 CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <style>
        /* Admin Layout Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f4; /* Soft nature background */
            overflow-x: hidden;
        }

        .wrapper {
            display: flex;
            width: 100%;
            height: 100vh;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 260px;
            background-color: #1b5e20; /* Darker Forest Green */
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
            border-left: 4px solid #81c784; /* Light green accent */
        }

        /* Main Content Styles */
        .main-panel {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            min-width: 0; /* Prevents flexbox overflow */
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

        /* Responsive Sidebar */
        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                height: 100%;
                left: -260px; /* Hidden by default on mobile */
            }
            .sidebar.show {
                left: 0;
            }
        }
        
        /* Dashboard Card Styles */
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
                    <ion-icon name="bar-chart-outline"></ion-icon> Analytics
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
                <!-- Mobile Toggle Button & Search -->
                <div class="d-flex align-items-center gap-3">
                    <button class="btn btn-light d-md-none" id="sidebarToggle">
                        <ion-icon name="menu-outline" class="fs-4"></ion-icon>
                    </button>
                    
                    <form class="d-none d-md-flex align-items-center bg-light rounded px-3 py-1 border">
                        <ion-icon name="search-outline" class="text-muted"></ion-icon>
                        <input type="text" class="form-control border-0 bg-transparent shadow-none form-control-sm ms-2" placeholder="Search...">
                    </form>
                </div>

                <!-- Right Side: Profile & Notifications -->
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
                            <li><a class="dropdown-item" href="#">Store Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="#">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </header>

            <!-- MAIN CONTENT AREA -->
            <main class="content-area">
                
                <h4 class="fw-bold mb-4">Dashboard Overview</h4>

                <!-- Top Statistics Cards -->
                <div class="row g-3 mb-4">
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="card stat-card p-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="text-muted mb-1 fs-6">Total Sales</p>
                                    <h3 class="fw-bold mb-0">₱45,231</h3>
                                </div>
                                <div class="stat-icon bg-light-green">
                                    <ion-icon name="wallet-outline"></ion-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="card stat-card p-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="text-muted mb-1 fs-6">Total Orders</p>
                                    <h3 class="fw-bold mb-0">1,245</h3>
                                </div>
                                <div class="stat-icon bg-light-blue">
                                    <ion-icon name="bag-handle-outline"></ion-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="card stat-card p-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="text-muted mb-1 fs-6">Pending Orders</p>
                                    <h3 class="fw-bold mb-0">23</h3>
                                </div>
                                <div class="stat-icon bg-light-orange">
                                    <ion-icon name="time-outline"></ion-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="card stat-card p-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="text-muted mb-1 fs-6">Low Stock Items</p>
                                    <h3 class="fw-bold mb-0">8</h3>
                                </div>
                                <div class="stat-icon bg-light-red">
                                    <ion-icon name="warning-outline"></ion-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Orders Table -->
                <div class="card stat-card">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center py-3 border-bottom-0">
                        <h6 class="mb-0 fw-bold">Recent Orders</h6>
                        <a href="#" class="btn btn-sm btn-outline-success">View All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light text-muted" style="font-size: 0.85rem;">
                                <tr>
                                    <th class="ps-4">Order ID</th>
                                    <th>Customer</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="border-top-0">
                                <tr>
                                    <td class="ps-4 fw-semibold">#ORD-9012</td>
                                    <td>Juan Dela Cruz</td>
                                    <td class="text-muted">Oct 24, 2026</td>
                                    <td class="fw-semibold">₱1,250.00</td>
                                    <td><span class="badge bg-warning text-dark">Pending</span></td>
                                    <td><button class="btn btn-sm btn-light"><ion-icon name="eye-outline"></ion-icon></button></td>
                                </tr>
                                <tr>
                                    <td class="ps-4 fw-semibold">#ORD-9011</td>
                                    <td>Maria Clara</td>
                                    <td class="text-muted">Oct 24, 2026</td>
                                    <td class="fw-semibold">₱850.00</td>
                                    <td><span class="badge bg-success">Completed</span></td>
                                    <td><button class="btn btn-sm btn-light"><ion-icon name="eye-outline"></ion-icon></button></td>
                                </tr>
                                <tr>
                                    <td class="ps-4 fw-semibold">#ORD-9010</td>
                                    <td>Jose Rizal</td>
                                    <td class="text-muted">Oct 23, 2026</td>
                                    <td class="fw-semibold">₱3,400.00</td>
                                    <td><span class="badge bg-info">Shipped</span></td>
                                    <td><button class="btn btn-sm btn-light"><ion-icon name="eye-outline"></ion-icon></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Note: In Laravel, you would replace the content above with { { $slot } } so this acts as a true layout file -->
                <!-- {{ $slot }} -->

            </main>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmxc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.js"></script>
    
    <!-- Sidebar Toggle Script for Mobile -->
    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('show');
        });
    </script>
</body>
</html>