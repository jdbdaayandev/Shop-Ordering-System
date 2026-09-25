<!-- Category Grid Styles -->
<style>
    .category-card { transition: all 0.2s ease-in-out; }
    .category-card:hover { 
        box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important; 
        border-color: #2e7d32 !important; /* Nature Green Border */
        z-index: 1;
    }
    .category-card:hover .category-text { 
        color: #2e7d32; /* Nature Green Text */
    }
</style>

<div class="bg-white shadow-sm rounded p-3">
    <h5 class="mb-3 fs-6 fw-semibold text-secondary text-uppercase">Categories</h5>
    
    <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6 g-2 text-center">

        @foreach ($categories as $category)
            <div class="col">
                <a href="#" class="text-decoration-none text-dark d-block border rounded category-card bg-white py-2 px-1 h-100 d-flex align-items-center justify-content-center">
                    <div class="category-text text-truncate" style="font-size: 0.85rem;">{{ $category->category_name }}</div>
                </a>
            </div>
        @endforeach

    </div>
</div>