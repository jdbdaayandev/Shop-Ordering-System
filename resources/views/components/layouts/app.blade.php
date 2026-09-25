<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyShopee</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
    .bg-shopee { background-color: #ee4d2d !important; }
    .text-shopee { color: #ee4d2d !important; }
    .nav-link-shopee { color: white !important; font-weight: 500; }
    .nav-link-shopee:hover { color: rgba(255,255,255,0.8) !important; }
    body{background-color: #f1f0f076;height: 100vh;}
</style>
  </head>
  <body>
    @include('components.partials.navbar');
    {{$slot}}
    <script src="{{ asset('js/bootstrap.min.js') }}" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.js"></script>
  </body>
</html>