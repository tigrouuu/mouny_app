<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>{{ isset($title) ? $title.' - '.config('app.name') : config('app.name') }}</title>

    <x-layouts.meta></x-layouts.meta>

    @vite([
        'appvilla/css/bootstrap.min.css',
        'appvilla/css/lineicons.css',
        'appvilla/css/animate.min.css',
        'appvilla/css/tiny-slider.css',
        'appvilla/css/glightbox.min.css',
        'appvilla/css/main.css',

        /*'appvilla/js/email-decode.min.js',
        'appvilla/js/bootstrap.min.js',
        'appvilla/js/wow.min.js',
        'appvilla/js/tiny-slider.js',
        'appvilla/js/glightbox.min.js',
        'appvilla/js/countUp.min.js',
        'appvilla/js/main.js'*/
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
{{--<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>--}}
<!-- End Preloader -->

<!-- élément d'ancre qui mène à un fichier externe  -->
<noscript>
    <a href="https://www.mozilla.org/">Lien externe</a>
</noscript>

{{ $slot }}

<!-- Scroll-top -->
<a href="#" class="scroll-top">
    <i class="lni lni-chevron-up"></i>
</a>

<x-layouts.js></x-layouts.js>
</body>
</html>
