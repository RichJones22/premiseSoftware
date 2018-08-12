<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="google-site-verification" content="9-2KuETcRoMvmdJkTvNT7Rgx7NR2TP9dFcWjSKerM3I" />

    <title>Premise Software Solutions, Inc.</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    {{--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113475271-1"></script>--}}

    <link href="{{mix('css/vendor.css')}}" rel="stylesheet" type="text/css">
    <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">

    {{--<script>--}}
        {{--<!-- Google Analytics -->--}}
        {{--(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){--}}
            {{--(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),--}}
            {{--m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)--}}
        {{--})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');--}}

        {{--ga('create', 'UA-113475271-1', 'auto');--}}
        {{--ga('send', 'pageview');--}}

        {{--window.dataLayer = window.dataLayer || [];--}}
        {{--function gtag(){dataLayer.push(arguments);}--}}
        {{--gtag('js', new Date());--}}

        {{--gtag('config', 'UA-113475271-1');--}}
    {{--</script>--}}
    <!-- End Google Analytics -->
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
