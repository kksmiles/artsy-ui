<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    @include('layouts.linkcss')
    @yield('css')
    <title>@yield('title')</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Space Column -->
            <div class="col-xl-1 d-none d-xl-block">

            </div>
            <!-- Left Column (Navigation) -->
            <div class="col-xl-2 col-lg-4 d-none d-xl-block d-lg-block">
                @include('layouts.navpanel')
            </div>
            <!-- Middle + Right column (Main + Noti) -->
            <div class="col-12 col-xl-7 col-lg-7">
                <div class="row">
                    @include('layouts.searchbar')
                </div>
                <div class="row">
                    @yield('content')
                </div>
            </div>
        <!-- Space column -->
            <div class="col-xl-1 col-lg-1 d-none d-xl-block">

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
