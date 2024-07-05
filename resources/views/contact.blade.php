<x-layouts.base>
    {{--<x-slot:heading>About</x-slot:heading>--}}

    <x-layouts.header></x-layouts.header>

    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Contact Us</h1>
                    </div>
                    <ul class="breadcrumb-nav">
                        <li><a href="/">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section id="contact-us" class="contact-us section">
        <div class="container">
            <div class="contact-head wow fadeInUp" data-wow-delay=".4s">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h3 class="wow zoomIn" data-wow-delay=".2s">Contact</h3>
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">We’d Love To Help You</h2>
                            <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                                Ipsum available, but the majority have suffered alteration in some form.</p>
                        </div>
                    </div>
                </div>
                <div class="contact-info">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-12">
                            <div class="single-info">
                                <i class="lni lni-map"></i>
                                <h3>Address</h3>
                                <ul>
                                    <li>3333 Raleigh St, Houston,
                                        TX 77021, USA.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12">
                            <div class="single-info">
                                <i class="lni lni-phone"></i>
                                <h3>Call us on</h3>
                                <ul>
                                    <li><a href="tel:+18005554400">+1 800 555 44 00 (Toll free)</a></li>
                                    <li><a href="tel:+321556667890">+321 55 666 7890</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12">
                            <div class="single-info">
                                <i class="lni lni-envelope"></i>
                                <h3>Mail at</h3>
                                <ul>
                                    <li>
                                        <a href="/cdn-cgi/l/email-protection#5d2e282d2d322f2929383c301d38253c302d3138733e3230"><span
                                                class="__cf_email__"
                                                data-cfemail="3c4f494c4c534e4848595d517c59445d514c5059125f5351">[email&#160;protected]</span></a>
                                    </li>
                                    <li>
                                        <a href="/cdn-cgi/l/email-protection#0467657661617644617c65697468612a676b69"><span
                                                class="__cf_email__"
                                                data-cfemail="1576746770706755706d74786579703b767a78">[email&#160;protected]</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="contact-form-head section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="contact-inner-title">
                        <h2>New Case? <br>Send Message Us</h2>
                        <p>Just send us your questions or concerns to
                            starting a new project.</p>
                        <div class="question">
                            <img src="{{ asset('images/author-thumb.jpg') }}" alt="#">
                            <h4><span>HAVE A QUESTION?</span>
                                +888 445 55 678
                            </h4>
                        </div>
                        <ul class="day-list">
                            <li>Monday - Friday:</li>
                            <li>9.00 - 6.00</li>
                            <li>Sunday & Public Holidays (Closed)
                            </li>
                        </ul>
                        <a href="javascript:void(0)" class="call-back">Request a call back <i
                                class="lni lni-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="form-main">
                        <form class="form" method="post" action="assets/mail/mail.php">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <input name="name" type="text" placeholder="Your Name" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <input name="subject" type="text" placeholder="Your Subject"
                                               required="required">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <input name="email" type="email" placeholder="Your Email" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <input name="phone" type="text" placeholder="Your Phone" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group message">
                                        <textarea name="message" placeholder="Your Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group button">
                                        <button type="submit" class="btn ">Submit Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="map-section">
        <div class="map-container">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe width="100%" height="500" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <a href="https://123movies-to.com">123movies old site</a>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            height: 500px;
                            width: 100%;
                        }

                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 500px;
                            width: 100%;
                        }
                    </style>
                </div>
            </div>
        </div>
    </div>

    <x-layouts.footer></x-layouts.footer>
</x-layouts.base>
