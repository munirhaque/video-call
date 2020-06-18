<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" href="" type="image/x-icon">
    @include('layouts.backend.partials.style')
    @yield('extra-css')
    @yield('custom-css')
</head>

<body class="theme-light-blue">
@include('layouts.backend.partials.searchbar')

<!-- Top Bar -->
@include('layouts.backend.partials.topbar')
@include('layouts.backend.partials.leftsidebar')

<section class="content">
    <div class="container-fluid">
        <!-- Content -->
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">@yield('section-title')</div>
                    <div class="body">@yield('main-content')</div>
                </div>
            </div>
        </div>
        <!-- #END# Entent -->
    </div>
</section>

@include('layouts.backend.partials.scripts')
@yield('extra-scripts')
@yield('custom-scripts')
</body>

</html>
