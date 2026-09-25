<x-layouts.admin>
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
</x-layouts.admin>