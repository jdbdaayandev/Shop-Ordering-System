<!-- Product Grid Styles (Make sure these are in your CSS or <style> block) -->
<style>
    .product-card {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        border: 1px solid transparent;
    }
    .product-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
        border-color: #2e7d32 !important; /* Nature Green */
    }
    .product-image-container {
        aspect-ratio: 1 / 1;
        overflow: hidden;
        background-color: #f8f9fa;
    }
    .product-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>

<div class="container my-4">
    <!-- Section Title -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="mb-0 fs-6 fw-semibold text-secondary text-uppercase">Daily Discoveries</h5>
        <a href="#" class="text-nature text-decoration-none" style="font-size: 0.85rem;">See All ></a>
    </div>
    
    <!-- Grid System -->
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-3">
        
        <!-- Reusable Components with hardcoded mock data -->
        <x-product-card 
            image="https://images.unsplash.com/photo-1615397323141-86082c5a2c3a?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" 
            title="Eco-Friendly Bamboo Toothbrush Set" 
            price="₱150" 
            sold="1.2k sold" 
        />
        
        <x-product-card 
            image="https://images.unsplash.com/photo-1596162954151-cd9d3fa0655a?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" 
            title="100% Organic Arabica Coffee Beans" 
            price="₱320" 
            sold="850 sold" 
        />
        
        <x-product-card 
            image="https://images.unsplash.com/photo-1622560480605-d83c853bc5c3?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" 
            title="Reusable Canvas Tote Bag Nature Print" 
            price="₱120" 
            sold="3.4k sold" 
        />

        <x-product-card 
            image="https://images.unsplash.com/photo-1611078449942-ea79c6b8af32?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" 
            title="Natural Essential Oil Set 5pcs" 
            price="₱450" 
            sold="420 sold" 
        />

        <x-product-card 
            image="https://images.unsplash.com/photo-1556228578-0d85b1a4d571?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" 
            title="Handmade Ceramic Earth Mug" 
            price="₱280" 
            sold="156 sold" 
        />

    </div>
</div>