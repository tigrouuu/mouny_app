<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Le jeu de mouny</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    {{--<meta name="robots" content="noindex, follow" />--}}

    <x-layouts.meta></x-layouts.meta>

    @vite(['public/appvilla/style.css', 'public/appvilla/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    {{--<script defer src="app.js"></script>--}}
</head>
<body class="antialiased">
<!--[if lte IE 9]>
<p class="browserupgrade">
    You are using an <strong>outdated</strong> browser. Please
    <a href="https://browsehappy.com/">upgrade your browser</a> to improve
    your experience and security.
</p>
<![endif]-->

<!-- Start Preloader -->
<div class="preloader">
    <span class="preloader__circle"></span>
    <span class="preloader__circle preloader__circle--two"></span>
</div>
<!-- End Preloader -->

<!-- élément d'ancre qui mène à un fichier externe  -->
<noscript>
    <a href="https://www.mozilla.org/">Lien externe</a>
</noscript>

<!-- Scroll-top -->
<a href="#" class="go-top" aria-label="Go back to top"><i class="fa-solid fa-chevron-up"></i></a>

<x-layouts.sections></x-layouts.sections>

<!-- JS Files -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</body>
</html>
