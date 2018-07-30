<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="/css/sticky-footer.css" rel="stylesheet" media="screen">
    </head>
    <body>
        <!-- header & grobal navi -->
        @include('layouts.partials.header')
        <!-- header & grobal navi -->
        <!-- container -->
        <div class="container">
            <!-- content -->
            <div class="row" id="content">
                <!-- left -->
                <div class="col-md-3">
                    <!-- sidebar -->
                    @include('layouts.partials.sidebar')
                    <!-- sidebar -->
                </div>
                <!-- main -->
                <div class="col-md-9">
                    <!-- contents -->
                    @yield('content')
                    <!-- contents -->
                </div>
            </div>
            <!-- content -->
        </div>
        <!-- container -->
        <!-- footer -->
        @include('layouts.partials.footer')
        <!-- footer -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        @yield('script')
    </body>
</html>
