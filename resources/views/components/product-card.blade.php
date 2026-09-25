@props([
    'url' => url('/item-description'),
    'image',
    'title',
    'price',
    'sold' => null,
])

<div class="col">
    <a href="{{ $url }}" class="text-decoration-none text-dark">
        <div class="card h-100 product-card shadow-sm bg-white rounded-1">
            <div class="product-image-container">
                <img
                    src="{{ $image }}"
                    class="product-img card-img-top rounded-top-1"
                    alt="{{ $title }}"
                >
            </div>

            <div class="card-body p-2 d-flex flex-column justify-content-between">
                <div class="card-title text-truncate mb-2" style="font-size: 0.9rem;">
                    {{ $title }}
                </div>

                <div class="d-flex justify-content-between align-items-center mt-auto">
                    <span class="text-nature fw-bold fs-6">{{ $price }}</span>

                    @if($sold)
                        <span class="text-muted" style="font-size: 0.75rem;">
                            {{ $sold }}
                        </span>
                    @endif
                </div>
            </div>
        </div>
    </a>
</div>