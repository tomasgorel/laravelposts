<!DOCTYPE html>
<html lang="en">
<!-- Page Header-->
@include('_partials/head')
<body>
<!--Navigatins-->
@include('_partials/nav')
<!-- Page Header-->
@include('_partials/header')
<div class="container px-4 px-lg-5">
    @yield('content')
</div>
<hr />
<!-- Footer-->
@include('_partials/footer')
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{URL::asset('js/scripts.js')}}"></script>
</head>
</body>
</html>
