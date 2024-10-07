<!DOCTYPE html>
<html class="wow-animation" lang="en">
<head>
    <!-- Site Title-->
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="https://livedemo00.template-help.com/wt_prod-20484/images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Ubuntu:300,300italic,400,400italic,500,500italic,700,700italic">
    <link rel="stylesheet" href="https://livedemo00.template-help.com/wt_prod-20484/css/bootstrap.css">
    <link rel="stylesheet" href="https://livedemo00.template-help.com/wt_prod-20484/css/fonts.css">
    <link rel="stylesheet" href="https://livedemo00.template-help.com/wt_prod-20484/css/style.css">
    <script src="js/html5shiv.js"></script>
</head>
<body>
<div class="preloader">
    <div class="preloader-body">
        <div class="cssload-container">
            <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Загрузка...</p>
    </div>
</div>
<div class="page">
    <header class="page-header header-transparent" id="home">
        @include('header')
        @yield('banner')
    </header>
    @yield('content')
    @include('footer')
</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
<script src="https://livedemo00.template-help.com/wt_prod-20484/js/core.min.js"></script>
<script src="https://livedemo00.template-help.com/wt_prod-20484/js/script.js"></script>

<!--LIVEDEMO_00 -->

<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-7078796-5']);
    _gaq.push(['_trackPageview']);
    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();</script>

<!-- coded by kraken-->
<!-- Google Tag Manager -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P9FT69" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>
<script>(function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
        var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-P9FT69');</script><!-- End Google Tag Manager --></body>
</html>
