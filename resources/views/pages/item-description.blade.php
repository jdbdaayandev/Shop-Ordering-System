<x-layouts.app>
    <!-- Product Detail Styles -->
    <style>
        .product-main-img {
            aspect-ratio: 1 / 1;
            object-fit: cover;
            width: 100%;
        }
        .btn-nature {
            background-color: #2e7d32;
            color: white;
            transition: background-color 0.2s;
        }
        .btn-nature:hover {
            background-color: #1b5e20;
            color: white;
        }
        .btn-outline-nature {
            color: #2e7d32;
            border: 1px solid #2e7d32;
            background-color: #e8f5e9; /* Very light green tint */
            transition: all 0.2s;
        }
        .btn-outline-nature:hover {
            background-color: #2e7d32;
            color: white;
        }
        .price-box {
            background-color: #fafafa;
        }
        .qty-input {
            width: 60px;
            text-align: center;
        }
    </style>

    <div class="container my-4">
        
        <!-- Breadcrumbs -->
        <nav aria-label="breadcrumb" class="mb-3">
            <ol class="breadcrumb" style="font-size: 0.85rem;">
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-nature">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-nature">Eco-Friendly</a></li>
                <li class="breadcrumb-item active" aria-current="page">Bamboo Toothbrush Set</li>
            </ol>
        </nav>

        <!-- Main Product Section -->
        <div class="bg-white shadow-sm rounded p-4 mb-4">
            <div class="row">
                
                <!-- Left Column: Single Image -->
                <div class="col-md-5 mb-4 mb-md-0">
                    <div>
                        <img src="https://images.unsplash.com/photo-1615397323141-86082c5a2c3a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             class="product-main-img rounded" alt="Main Product Image">
                    </div>
                </div>

                <!-- Right Column: Product Details -->
                <div class="col-md-7 ps-md-4">
                    <h3 class="fw-semibold mb-2">Eco-Friendly Bamboo Toothbrush Set (4 Pack)</h3>
                    
                    <!-- Ratings & Sold -->
                    <div class="d-flex align-items-center mb-3 text-secondary" style="font-size: 0.9rem;">
                        <span class="text-nature fw-bold border-bottom border-nature me-1">4.9</span>
                        <div class="text-warning me-3 d-flex align-items-center">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star-half"></ion-icon>
                        </div>
                        <span class="me-3 border-start ps-3"><span class="text-dark fw-bold border-bottom border-dark">1.2k</span> Ratings</span>
                        <span class="border-start ps-3"><span class="text-dark fw-bold">3.4k</span> Sold</span>
                    </div>

                    <!-- Price Box -->
                    <div class="price-box p-3 mb-4 rounded d-flex align-items-center">
                        <span class="text-muted text-decoration-line-through me-2 fs-5">₱250</span>
                        <span class="text-nature fw-bold display-6 mb-0">₱150</span>
                        <span class="badge bg-danger ms-3">40% OFF</span>
                    </div>

                    <!-- Variations / Options -->
                    <div class="row mb-3 align-items-center">
                        <div class="col-3 text-muted">Bristle Type</div>
                        <div class="col-9 d-flex gap-2">
                            <button class="btn btn-outline-secondary btn-sm">Soft</button>
                            <button class="btn btn-outline-nature btn-sm fw-semibold">Medium</button>
                            <button class="btn btn-outline-secondary btn-sm disabled">Hard (Out of stock)</button>
                        </div>
                    </div>

                    <!-- Quantity Selector -->
                    <div class="row mb-4 align-items-center">
                        <div class="col-3 text-muted">Quantity</div>
                        <div class="col-9 d-flex align-items-center">
                            <div class="input-group input-group-sm w-auto me-3">
                                <button class="btn btn-outline-secondary px-2" type="button"><ion-icon name="remove-outline"></ion-icon></button>
                                <input type="text" class="form-control qty-input border-secondary text-center" value="1" aria-label="Quantity">
                                <button class="btn btn-outline-secondary px-2" type="button"><ion-icon name="add-outline"></ion-icon></button>
                            </div>
                            <span class="text-muted" style="font-size: 0.85rem;">450 pieces available</span>
                        </div>
                    </div>

                    <!-- Action Buttons (Resized to be smaller) -->
                    <div class="d-flex gap-3 mt-4">
                        <button class="btn btn-outline-nature px-3 py-2 d-flex align-items-center justify-content-center gap-2">
                            <ion-icon name="cart-outline" class="fs-5"></ion-icon> Add to Cart
                        </button>
                        <button class="btn btn-nature px-4 py-2 fw-semibold">
                            Buy Now
                        </button>
                    </div>
                </div>

            </div>
        </div>

        <!-- Lower Section: Product Description -->
        <div class="bg-white shadow-sm rounded p-4 mb-4">
            <h5 class="bg-light p-2 rounded mb-4 fs-6 fw-bold">PRODUCT DESCRIPTION</h5>
            
            <div class="text-secondary" style="line-height: 1.8;">
                <p>Switch to a more sustainable lifestyle with our Premium Bamboo Toothbrush Set. Made from 100% biodegradable and sustainably grown bamboo, these toothbrushes are the perfect eco-friendly alternative to traditional plastic toothbrushes.</p>
                
                <p class="fw-semibold text-dark mt-3 mb-1">Key Features:</p>
                <ul>
                    <li>100% natural, biodegradable bamboo handle.</li>
                    <li>BPA-free, charcoal-infused bristles for natural teeth whitening.</li>
                    <li>Ergonomic handle for a comfortable grip.</li>
                    <li>Eco-friendly kraft paper packaging—zero plastic used.</li>
                </ul>

                <p class="fw-semibold text-dark mt-3 mb-1">Specifications:</p>
                <table class="table table-sm table-borderless w-50 text-secondary">
                    <tbody>
                        <tr>
                            <td class="text-muted w-25">Brand</td>
                            <td>NatureStore Basics</td>
                        </tr>
                        <tr>
                            <td class="text-muted">Material</td>
                            <td>Bamboo & Nylon (BPA-Free)</td>
                        </tr>
                        <tr>
                            <td class="text-muted">Weight</td>
                            <td>50g per set</td>
                        </tr>
                        <tr>
                            <td class="text-muted">Origin</td>
                            <td>Locally Sourced</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-layouts.app>