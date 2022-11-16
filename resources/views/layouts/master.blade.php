<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title')</title>

    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/images/tap_logo.png" />

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="/assets/css/plugins.css">

    <!-- Bootstap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">

    @livewireStyles
</head>
<!-- End of header -->

<body class="template-index home2-default">

    <!-- Preloader -->
    <div id="pre-loader">
        <img src="/assets/images/loader.gif" alt="Loading..." />
    </div>
    <!-- End Preloader -->

    <div class="pageWrapper">
    
        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')

        <!--Scoll Top-->
        <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
        <!--End Scoll Top-->

        <!-- Including Jquery -->
        <script src="/assets/js/vendor/jquery-3.3.1.min.js"></script>
        <script src="/assets/js/vendor/modernizr-3.6.0.min.js"></script>
        <script src="/assets/js/vendor/jquery.cookie.js"></script>
        <script src="/assets/js/vendor/wow.min.js"></script>

        <!-- Including Javascript -->
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/plugins.js"></script>
        <script src="/assets/js/popper.min.js"></script>
        <script src="/assets/js/lazysizes.js"></script>
        <script src="/assets/js/main.js"></script>

        <!--For Newsletter Popup-->
        <script>
            jQuery(document).ready(function() {
                jQuery('.closepopup').on('click', function() {
                    jQuery('#popup-container').fadeOut();
                    jQuery('#modalOverly').fadeOut();
                });

                var visits = jQuery.cookie('visits') || 0;
                visits++;
                jQuery.cookie('visits', visits, {
                    expires: 1,
                    path: '/'
                });
                console.debug(jQuery.cookie('visits'));
                if (jQuery.cookie('visits') > 1) {
                    jQuery('#modalOverly').hide();
                    jQuery('#popup-container').hide();
                } else {
                    var pageHeight = jQuery(document).height();
                    jQuery('<div id="modalOverly"></div>').insertBefore('body');
                    jQuery('#modalOverly').css("height", pageHeight);
                    jQuery('#popup-container').show();
                }
                if (jQuery.cookie('noShowWelcome')) {
                    jQuery('#popup-container').hide();
                    jQuery('#active-popup').hide();
                }
            });

            jQuery(document).mouseup(function(e) {
                var container = jQuery('#popup-container');
                if (!container.is(e.target) && container.has(e.target).length === 0) {
                    container.fadeOut();
                    jQuery('#modalOverly').fadeIn(200);
                    jQuery('#modalOverly').hide();
                }
            });

            /*--------------------------------------
                Promotion / Notification Cookie Bar 
              -------------------------------------- */
            if (Cookies.get('promotion') != 'true') {
                $(".notification-bar").show();
            }
            $(".close-announcement").on('click', function() {
                $(".notification-bar").slideUp();
                Cookies.set('promotion', 'true', {
                    expires: 1
                });
                return false;
            });
        </script>
        <!--End For Newsletter Popup-->
    </div>

    @livewireScripts
</body>

</html>