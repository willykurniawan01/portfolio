<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Willy kurniawan - @yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('home/img/logo.png')}}">

    @include('includes.home.style')

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    @include('includes.home.navbar')

    @yield('content')

    @include('includes.home.footer')

    @include('includes.home.script')

</body>

</html>