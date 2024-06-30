<html lang="en">
<head>
    <title>SMARTSHIP MONITORING</title>
    <meta charset="utf-8" />
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <meta
      name= name="csrf-token" content="{{ csrf_token() }}
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="shortcut icon" href="{{asset("img/app-logo.svg")}}">

    <!-- FontAwesome JS-->
    <script defer src="{{asset("plugins/fontawesome/js/all.min.js")}}"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="{{asset("css/portal.css")}}">
	<link rel="stylesheet" href="{{asset("css/style.css")}}">

    @yield('custom-css')

</head>
<body>
    @yield('header')
    <div class="app-wrapper pt-4">
        <div class="app-content pt-5">
            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>


    <!-- Javascript -->
    <script src="{{asset("plugins/popper.min.js")}}"></script>
    <script src="{{asset("plugins/bootstrap/js/bootstrap.min.js")}}"></script>


    <!-- Page Specific JS -->
    <script src="{{asset("js/app.js")}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>
