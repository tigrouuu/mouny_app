<!-- JS Files -->
<script src="{{ asset('appvilla/js/email-decode.min.js') }}" data-cfasync="false"></script>
<script src="{{ asset('appvilla/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('appvilla/js/wow.min.js') }}"></script>
<script src="{{ asset('appvilla/js/tiny-slider.js') }}"></script>
<script src="{{ asset('appvilla/js/glightbox.min.js') }}"></script>
<script src="{{ asset('appvilla/js/countUp.min.js') }}"></script>
<script src="{{ asset('appvilla/js/main.js') }}"></script>
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
                items: 1,
            },
            540: {
                items: 2,
            },
            768: {
                items: 3,
            },
            992: {
                items: 4,
            }
        }
    });

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
                items: 1,
            },
            540: {
                items: 1,
            },
            768: {
                items: 1,
            },
            992: {
                items: 1,
            },
            1170: {
                items: 1,
            }
        }
    });

    //====== counter up
    var cu = new counterUp({
        start: 0,
        duration: 2000,
        intvalues: true,
        interval: 100,
        append: " ",
    });
    cu.start();
</script>
