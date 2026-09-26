<x-layouts.admin>
    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold mb-0">Products Management</h4>
        <button type="button" class="btn btn-nature d-flex align-items-center gap-2"
            style="background-color: #2e7d32; color: white;" data-bs-toggle="modal" data-bs-target="#createItemModal">
            <ion-icon name="add-outline" class="fs-5"></ion-icon> Add New Product
        </button>
    </div>

    <!-- Search and Filter Card -->
    <div class="card border-0 shadow-sm rounded-3 mb-4">
        <div class="card-body p-3">
            <form class="row g-3 align-items-center" method="GET" action="{{ route('items.index') }}">
                <!-- Search Input -->
                <div class="col-12 col-md-4">
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0">
                            <ion-icon name="search-outline"></ion-icon>
                        </span>
                        <input type="text" class="form-control border-start-0 bg-light" placeholder="Search products..."
                            value="{{ old('search') }}">
                    </div>
                </div>

                <!-- Category Filter -->
                <div class="col-6 col-md-3">
                    <select class="form-select bg-light" class="rounded">
                        <option selected class="rounded">All Categories</option>
                        @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                        @endforeach

                    </select>
                </div>

                <!-- Status Filter -->
                <div class="col-6 col-md-3">
                    <select class="form-select bg-light">
                        <option selected>All Status</option>
                        <option value="active">Active</option>
                        <option value="draft">Draft</option>
                        <option value="out_of_stock">Out of Stock</option>
                    </select>
                </div>

                <!-- Filter Button -->
                <div class="col-12 col-md-2">
                    <button type="submit" class="btn btn-outline-secondary w-100">Filter</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Products Data Table -->
    <div class="card border-0 shadow-sm rounded-3 mb-4">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light text-muted" style="font-size: 0.85rem; text-transform: uppercase;">
                    <tr>
                        <th class="ps-4 py-3" style="width: 50px;">
                            <input class="form-check-input" type="checkbox">
                        </th>
                        <th>Product Info</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Status</th>
                        <th class="text-end pe-4">Actions</th>
                    </tr>
                </thead>
                <tbody class="border-top-0">

                    @if(!$items)
                        <tr>
                            <td>
                                No Records Found
                            </td>
                        </tr>
                    @else
                        @foreach ($items as $item)
                            <tr>
                                <td class="ps-4">
                                    <input class="form-check-input" type="checkbox">
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-3">
                                        <img src="https://images.unsplash.com/photo-1615397323141-86082c5a2c3a?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80"
                                            alt="Product" class="rounded" style="width: 50px; height: 50px; object-fit: cover;">
                                        <div>
                                            <h6 class="mb-0 fw-semibold">{{ $item->name }}</h6>
                                            <small class="text-muted">{{ $item->item_number }}</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-secondary">{{ $item->category->category_name }}</td>
                                <td class="fw-semibold">₱ {{ $item->price }}</td>
                                <td>{{ $item->stock_quantity }}</td>
                                <td><span
                                        class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 px-2 py-1">{{ $item->status }}</span>
                                </td>
                                <td class="text-end pe-4">
                                    <div class="btn-group">
                                        <button
                                            class="btn btn-sm btn-light border d-flex align-items-center justify-content-center"
                                            title="Edit" id="edit">
                                            <ion-icon name="create-outline" class="text-primary"></ion-icon>
                                        </button>
                                        <button
                                            class="btn btn-sm btn-light border d-flex align-items-center justify-content-center"
                                            title="Delete">
                                            <ion-icon name="trash-outline" class="text-danger"></ion-icon>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif

                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="card-footer bg-white border-top py-3 d-flex justify-content-between align-items-center">
            <span class="text-muted small">Showing 1 to 4 of 24 entries</span>
            <nav aria-label="Page navigation">
                <ul class="pagination pagination-sm mb-0">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link bg-success border-success" href="#">1</a></li>
                    <li class="page-item"><a class="page-link text-success" href="#">2</a></li>
                    <li class="page-item"><a class="page-link text-success" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link text-success" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Add Modal -->
    <!-- Create Item Modal -->
    <div class="modal fade" id="createItemModal" tabindex="-1" aria-labelledby="createItemModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content border-0 shadow">

                <div class="modal-header bg-light border-bottom-0">
                    <h5 class="modal-title fw-bold" id="createItemModalLabel">Add New Product</h5>
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <!-- Note: enctype="multipart/form-data" is required for the image upload -->
                <form action="{{ route('items.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-body p-4">
                        <div class="row g-3">

                            <!-- Product Name -->
                            <div class="col-md-6">
                                <label for="name" class="form-label fw-semibold text-secondary small">Product Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter product name" required>
                            </div>

                            <!-- Category (Foreign Key) -->
                            <div class="col-md-6">
                                <label for="category_id"
                                    class="form-label fw-semibold text-secondary small">Category</label>
                                <select class="form-select" id="category_id" name="category_id">
                                    <option value="">Select a category</option>
                                    <!-- Loop through your categories here -->
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Price -->
                            <div class="col-md-6">
                                <label for="price" class="form-label fw-semibold text-secondary small">Price (₱) <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">₱</span>
                                    <input type="number" step="0.01" min="0" class="form-control border-start-0"
                                        id="price" name="price" placeholder="0.00" required>
                                </div>
                            </div>

                            <!-- Stock Quantity -->
                            <div class="col-md-6">
                                <label for="stock_quantity" class="form-label fw-semibold text-secondary small">Stock
                                    Quantity <span class="text-danger">*</span></label>
                                <input type="number" min="0" class="form-control" id="stock_quantity"
                                    name="stock_quantity" placeholder="0" required>
                            </div>

                            <!-- Product Image -->
                            <div class="col-12">
                                <label for="image" class="form-label fw-semibold text-secondary small">Product Image
                                    <span class="text-danger">*</span></label>
                                <input class="form-control" type="file" id="image" name="image" accept="image/*">
                                <div class="form-text small text-muted">Upload a high-quality image (JPG, PNG). Max
                                    size: 2MB.</div>
                            </div>

                            <!-- Description -->
                            <div class="col-12">
                                <label for="description"
                                    class="form-label fw-semibold text-secondary small">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="4"
                                    placeholder="Enter product description and features..."></textarea>
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer border-top-0 bg-light">
                        <button type="button" class="btn btn-outline-secondary px-4"
                            data-bs-dismiss="modal">Cancel</button>
                        <!-- Using the btn-nature class from your layout -->
                        <button type="submit" class="btn text-white px-4" style="background-color: #2e7d32;">Save
                            Product</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            $('#edit').on('click', function(){
            alert('clicked');
        });
        </script>
    @endpush
</x-layouts.admin>