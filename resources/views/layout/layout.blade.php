<!doctype html>
<html>
<head>
    @include('layout.partials.head')
</head>
<body>
@include('layout.partials.sidenav')
<!-- Main content -->
<div class="main-content" id="panel">
    @include('layout.partials.nav')
    @include('layout.partials.header')
    <div class="container-fluid mt--6">
        @yield('content')
    </div>
</div>
@include('layout.partials.footer-scripts')
</body>
</html>
