<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyStore</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        /* Upgraded Nature Theme Navbar Styles */
.bg-nature-gradient {
    /* Subtle gradient from a darker forest green to your base nature green */
    background: linear-gradient(-180deg, #1b5e20 0%, #2e7d32 100%);
}

.top-navbar {
    font-size: 0.8rem;
}

.top-navbar a {
    color: rgba(255, 255, 255, 0.85);
    text-decoration: none;
    transition: color 0.2s ease;
}

.top-navbar a:hover {
    color: #ffffff;
}

.search-tags a {
    color: rgba(255, 255, 255, 0.9);
    font-size: 0.75rem;
    text-decoration: none;
    margin-right: 12px;
}

.search-tags a:hover {
    text-decoration: underline;
}

/* Make the search button pop a bit more */
.btn-search {
    background-color: #f4f7f4;
    transition: background-color 0.2s ease;
}
.btn-search:hover {
    background-color: #e2e8e2;
}

        body {
            background-color: #f4f7f4; /* Very soft earthy off-white */
            min-height: 100vh;
        }
    </style>
</head>

<body>
    @include('components.partials.navbar')
    
    {{$slot}}
    
    @include('components.partials.footer')
    
    <script src="{{ asset('js/bootstrap.min.js') }}"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.js"></script>
</body>

</html>