<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>{{ isset($title) ? $title.' - '.config('app.name') : config('app.name') }}</title>

    <x-layouts.meta></x-layouts.meta>

    @vite([
        'resources/assets/appvilla/css/bootstrap.min.css',
        'resources/assets/appvilla/css/lineicons.css',
        'resources/assets/appvilla/css/animate.min.css',
        'resources/assets/appvilla/css/tiny-slider.css',
        'resources/assets/appvilla/css/glightbox.min.css',
        'resources/assets/appvilla/css/main.css',

        /*'resources/assets/appvilla/js/bootstrap.bundle.min.js',
        'resources/assets/appvilla/js/wow.min.js',
        'resources/assets/appvilla/js/tiny-slider.js',
        'resources/assets/appvilla/js/glightbox.min.js',
        'resources/assets/appvilla/js/countUp.min.js',
        'resources/assets/appvilla/js/main.js'*/
    ])
</head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">
    You are using an <strong>outdated</strong> browser. Please
    <a href="https://browsehappy.com/">upgrade your browser</a> to improve
    your experience and security.
</p>
<![endif]-->

<!-- Start Preloader -->
<div class="preloader" style="opacity: 0; display: none;">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- End Preloader -->

<!-- élément d'ancre qui mène à un fichier externe  -->
<noscript>
    <a href="https://www.mozilla.org/">Lien externe</a>
</noscript>

{{--<x-layouts.sections></x-layouts.sections>--}}
{{ $slot }}

<!-- Scroll-top -->
<a href="#" class="scroll-top" style="display: none;">
    <i class="lni lni-chevron-up"></i>
</a>

<!-- JS Files -->
<script src="{{ asset('resources/assets/appvilla/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('resources/assets/appvilla/js/wow.min.js') }}"></script>
<script src="{{ asset('resources/assets/appvilla/js/tiny-slider.js') }}"></script>
<script src="{{ asset('resources/assets/appvilla/js/glightbox.min.js') }}"></script>
<script src="{{ asset('resources/assets/appvilla/js/countUp.min.js') }}"></script>
<script src="{{ asset('resources/assets/appvilla/js/main.js') }}"></script>
<script type="text/javascript">
    //======== tiny slider
    tns({
        container: '.client-logo-carousel',
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true,
        gutter: 15,
        nav: false,
        controls: false,
        responsive: {
            0: {
                items: 1
            },
            540: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 4
            }
        }
    })

    //========= testimonial
    tns({
        container: '.testimonial-slider',
        items: 3,
        slideBy: 'page',
        autoplay: false,
        mouseDrag: true,
        gutter: 0,
        nav: true,
        controls: false,
        controlsText: ['<i class="lni lni-arrow-left"></i>', '<i class="lni lni-arrow-right"></i>'],
        responsive: {
            0: {
                items: 1
            },
            540: {
                items: 1
            },
            768: {
                items: 1
            },
            992: {
                items: 1
            },
            1170: {
                items: 1
            }
        }
    })

    //====== counter up
    var cu = new counterUp({
        start: 0,
        duration: 2000,
        intvalues: true,
        interval: 100,
        append: ' '
    })
    cu.start()
</script>
</body>
</html>
