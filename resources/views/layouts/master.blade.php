<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="google-site-verification" content="9-2KuETcRoMvmdJkTvNT7Rgx7NR2TP9dFcWjSKerM3I" />

    <title>Premise Software Solutions, Inc.</title>
    <link rel="shortcut icon" href='/img/logo_transparent_background-small.png' type="image/x-icon"/>

    <link href="{{mix('css/vendor.css')}}" rel="stylesheet" type="text/css">
    <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">
</head>

<body id="page-top">

    <!-- site navigation -->
    @include('nav.topNav')

    <!-- page content -->
    @yield('content')

    <!-- site javascript -->
    <script src="{{mix('js/vendor.js')}}"></script>
    <script src="{{mix('js/app.js')}}"></script>

</body>

</html>
