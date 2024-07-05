<x-layouts.base>
    {{--    <x-slot:heading>Home</x-slot:heading>--}}

    <x-layouts.header></x-layouts.header>

    <!-- Start Home Area -->
    <section id="home" class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="hero-content">
                        <h1 class="wow fadeInLeft" data-wow-delay=".4s">A powerful app for your business.</h1>
                        <p class="wow fadeInLeft" data-wow-delay=".6s">From open source to pro services, Piqes helps you
                            to build, deploy, test, and monitor apps.</p>
                        <div class="button wow fadeInLeft" data-wow-delay=".8s">
                            <a href="javascript:void(0)" class="btn"><i class="lni lni-apple"></i> App Store</a>
                            <a href="javascript:void(0)" class="btn btn-alt"><i class="lni lni-play-store"></i> Google
                                Play</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-12">
                    <div class="hero-image wow fadeInRight" data-wow-delay=".4s">
                        <img src="{{ asset('images/hero/phone.png') }}" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Home Area -->

    <!-- Start Features Area -->
    <section id="features" class="features section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Features</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Your Experience Gets Better And Better Over Time.
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
                        <i class="lni lni-cloud-upload"></i>
                        <h3>Push to Deploy</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page at its layout.</p>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-feature wow fadeInUp" data-wow-delay=".4s">
                        <i class="lni lni-lock"></i>
                        <h3>SSL Certificates</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page at its layout.</p>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-feature wow fadeInUp" data-wow-delay=".6s">
                        <i class="lni lni-reload"></i>
                        <h3>Simple Queues</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page at its layout.</p>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
                        <i class="lni lni-shield"></i>
                        <h3>Advanced Security</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page at its layout.</p>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-feature wow fadeInUp" data-wow-delay=".4s">
                        <i class="lni lni-cog"></i>
                        <h3>Powerful API</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page at its layout.</p>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-feature wow fadeInUp" data-wow-delay=".6s">
                        <i class="lni lni-layers"></i>
                        <h3>Database Backups</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page at its layout.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Features Area -->

    <!-- Start Overview Area -->
    <section id="overview" class="app-info section">
        <div class="container">
            <div class="info-one">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-12">

                        <div class="info-text wow fadeInLeft" data-wow-delay=".3s">
                            <div class="main-icon">
                                <i class="lni lni-inbox"></i>
                            </div>
                            <h2>1,25,000 Customers Using The Application!</h2>
                            <p>Collaborate over projects with your team and clients optimised for mobile and tablet
                                don't
                                let slow page speeds drive our innovative platform empowers anyone to convert clicks
                                ou'll
                                publish your first landing page in minutes.</p>
                            <div class="button">
                                <a href="javascript:void(0)" class="btn">Get Started</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="info-image wow fadeInRight" data-wow-delay=".5s">
                            <img class="ss1" src="{{ asset('images/app-ss1.png') }}" alt="#">
                        </div>
                    </div>
                </div>
            </div>
            <div class="info-one style2">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="info-image wow fadeInLeft" data-wow-delay=".3s">
                            <img class="ss1" src="{{ asset('images/app-ss2.png') }}" alt="#">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">

                        <div class="info-text wow fadeInRight" data-wow-delay=".5s">
                            <div class="main-icon">
                                <i class="lni lni-layout"></i>
                            </div>
                            <h2>Seamless Loyalty</h2>
                            <p>Collaborate over projects with your team and clients optimised for mobile and tablet
                                don't
                                let slow page speeds drive our innovative platform empowers anyone to convert clicks
                                ou'll
                                publish your first landing page in minutes.</p>
                            <div class="button">
                                <a href="javascript:void(0)" class="btn">Get Started</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Overview Area -->

    <!-- Start Our Achievement Area -->
    <section class="our-achievement section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                    <div class="title">
                        <h2>Trusted by developers from over 80 planets</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="single-achievement wow fadeInUp" data-wow-delay=".2s">
                                <h3 class="counter"><span id="secondo1" class="countup" cup-end="100">100</span>%</h3>
                                <p>satisfaction</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="single-achievement wow fadeInUp" data-wow-delay=".4s">
                                <h3 class="counter"><span id="secondo2" class="countup" cup-end="120">120</span>K</h3>
                                <p>Happy Users</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="single-achievement wow fadeInUp" data-wow-delay=".6s">
                                <h3 class="counter"><span id="secondo3" class="countup" cup-end="125">125</span>k+</h3>
                                <p>Downloads</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Achievement Area -->

    <!-- Start Pricing Area -->
    <section id="pricing" class="pricing-table section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">pricing</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Pricing Plan</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">

                    <div class="single-table wow fadeInUp" data-wow-delay=".2s">

                        <div class="table-head">
                            <h4 class="title">Hobby</h4>
                            <p>All the basics for starting a new business</p>
                            <div class="price">
                                <h2 class="amount">$12<span class="duration">/mo</span></h2>
                            </div>
                            <div class="button">
                                <a href="javascript:void(0)" class="btn">Buy Hobby</a>
                            </div>
                        </div>


                        <div class="table-content">
                            <h4 class="middle-title">What's Included</h4>

                            <ul class="table-list">
                                <li><i class="lni lni-checkmark-circle"></i> Cras justo odio.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Dapibus ac facilisis in.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Morbi leo risus.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Potenti felis, in cras ligula.</li>
                            </ul>

                        </div>

                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-12">

                    <div class="single-table wow fadeInUp" data-wow-delay=".4s">

                        <div class="table-head">
                            <h4 class="title">Freelancer</h4>
                            <p>All the basics for starting a new business</p>
                            <div class="price">
                                <h2 class="amount">$24<span class="duration">/mo</span></h2>
                            </div>
                            <div class="button">
                                <a href="javascript:void(0)" class="btn">Buy Freelancer</a>
                            </div>
                        </div>


                        <div class="table-content">
                            <h4 class="middle-title">What's Included</h4>

                            <ul class="table-list">
                                <li><i class="lni lni-checkmark-circle"></i> Cras justo odio.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Dapibus ac facilisis in.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Morbi leo risus.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Potenti felis, in cras ligula.</li>
                            </ul>

                        </div>

                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-12">

                    <div class="single-table wow fadeInUp" data-wow-delay=".6s">

                        <div class="table-head">
                            <h4 class="title">Startup</h4>
                            <p>All the basics for starting a new business</p>
                            <div class="price">
                                <h2 class="amount">$32<span class="duration">/mo</span></h2>
                            </div>
                            <div class="button">
                                <a href="javascript:void(0)" class="btn">Buy Startup</a>
                            </div>
                        </div>


                        <div class="table-content">
                            <h4 class="middle-title">What's Included</h4>

                            <ul class="table-list">
                                <li><i class="lni lni-checkmark-circle"></i> Cras justo odio.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Dapibus ac facilisis in.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Morbi leo risus.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Potenti felis, in cras ligula.</li>
                            </ul>

                        </div>

                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-12">

                    <div class="single-table wow fadeInUp" data-wow-delay=".8s">

                        <div class="table-head">
                            <h4 class="title">Enterprise</h4>
                            <p>All the basics for starting a new business</p>
                            <div class="price">
                                <h2 class="amount">$48<span class="duration">/mo</span></h2>
                            </div>
                            <div class="button">
                                <a href="javascript:void(0)" class="btn">Buy Enterprise</a>
                            </div>
                        </div>


                        <div class="table-content">
                            <h4 class="middle-title">What's Included</h4>

                            <ul class="table-list">
                                <li><i class="lni lni-checkmark-circle"></i> Cras justo odio.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Dapibus ac facilisis in.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Morbi leo risus.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Potenti felis, in cras ligula.</li>
                            </ul>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Pricing Area -->

    <!-- Start Team Area -->
    <section id="team" class="team section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Team</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Meat our team</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-team wow fadeInUp" data-wow-delay=".2s">
                        <div class="image">
                            <img src="{{ asset('images/team1.jpg') }}" alt="#">
                        </div>
                        <div class="content">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-12">
                                    <div class="text">
                                        <h3><a href="javascript:void(0)">Leonard Krasner</a></h3>
                                        <h5>Senior Designer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-12">
                                    <ul class="social">
                                        <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
                                        </li>
                                        <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-team wow fadeInUp" data-wow-delay=".4s">
                        <div class="image">
                            <img src="{{ asset('images/team2.jpg') }}" alt="#">
                        </div>
                        <div class="content">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-12">
                                    <div class="text">
                                        <h3><a href="javascript:void(0)">Leonard Krasner</a></h3>
                                        <h5>Senior Designer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-12">
                                    <ul class="social">
                                        <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
                                        </li>
                                        <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-team wow fadeInUp" data-wow-delay=".6s">
                        <div class="image">
                            <img src="{{ asset('images/team3.jpg') }}" alt="#">
                        </div>
                        <div class="content">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-12">
                                    <div class="text">
                                        <h3><a href="javascript:void(0)">Leonard Krasner</a></h3>
                                        <h5>Senior Designer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-12">
                                    <ul class="social">
                                        <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
                                        </li>
                                        <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Team Area -->

    <!-- Start Testimonials Area -->
    <section class="testimonials section">
        <img class="testi-patern1" src="{{ asset('images/testi-patern.jpg') }}" alt="#">
        <img class="testi-patern2" src="{{ asset('images/testi-patern.jpg') }}" alt="#">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="testimonial-slider">

                        <div class="single-testimonial">
                            <div class="text">
                                <div class="brand-icon">
                                    <img src="{{ asset('images/brand2.svg') }}" alt="#">
                                </div>
                                <p>"It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is
                                    that it has"</p>
                            </div>
                            <div class="author">
                                <img src="{{ asset('images/testi1.jpg') }}" alt="#">
                                <h4 class="name">
                                    Musharof Chowdhury
                                    <span class="deg">CEO - Ayro UI</span>
                                </h4>
                            </div>
                        </div>


                        <div class="single-testimonial">
                            <div class="text">
                                <div class="brand-icon">
                                    <img src="{{ asset('images/brand1.svg') }}" alt="#">
                                </div>
                                <p>"It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is
                                    that it has"</p>
                            </div>
                            <div class="author">
                                <img src="{{ asset('images/testi2.jpg') }}" alt="#">
                                <h4 class="name">
                                    Musharof Chowdhury
                                    <span class="deg">CEO - GrayGrids</span>
                                </h4>
                            </div>
                        </div>


                        <div class="single-testimonial">
                            <div class="text">
                                <div class="brand-icon">
                                    <img src="{{ asset('images/brand3.svg') }}" alt="#">
                                </div>
                                <p>"It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is
                                    that it has"</p>
                            </div>
                            <div class="author">
                                <img src="{{ asset('images/testi3.jpg') }}" alt="#">
                                <h4 class="name">
                                    Naimur Rahman
                                    <span class="deg">CEO - WpthemesGrid</span>
                                </h4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonials Area -->

    <!-- Start Call Action Area -->
    <section class="section call-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="cta-content">
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">Install Appvilla and Start Using</h2>
                        <p class="wow fadeInUp" data-wow-delay=".4s">There are many variations of passages of Lorem
                            Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't look
                            even slightly believable.</p>
                        <div class="button wow fadeInUp" data-wow-delay=".6s">
                            <a href="javascript:void(0)" class="btn"><i class="lni lni-apple"></i> App Store</a>
                            <a href="javascript:void(0)" class="btn btn-alt"><i class="lni lni-play-store"></i> Google
                                Play</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call Action Area -->

    <!-- Start FAQ Area -->
    <section class="faq section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Faq</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Frequently Asked Questions</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
<span class="title"><span class="serial">01</span>How Do I Contact Customer
Services?</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur sit
                                        amet ante nec vulputate. Nulla aliquam, justo auctor consequat tincidunt, arcu
                                        erat mattis lorem, lacinia lacinia dui enim at eros. Pellentesque ut gravida
                                        augue. Duis ac dictum tellus</p>
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute. non cupidatat skateboard dolor
                                        brunch. Foosd truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt alqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim ke ffiyeh helvetica, craft beer labore wes anderson
                                        cred nesciunt sapiente ea proident.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
<span class="title"><span class="serial">02</span> Material types can you work
with?</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute. non cupidatat skateboard dolor
                                        brunch. Foosd truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt alqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim ke ffiyeh helvetica, craft beer labore wes anderson
                                        cred nesciunt sapiente ea proident.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur sit
                                        amet ante nec vulputate. Nulla aliquam, justo auctor consequat tincidunt, arcu
                                        erat mattis lorem, lacinia lacinia dui enim at eros. Pellentesque ut gravida
                                        augue. Duis ac dictum tellus</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
<span class="title"><span class="serial">03</span>Can I have multiple activities in
a single feature?</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas expedita,
                                        repellendus est nemo cum quibusdam optio, voluptate hic a tempora facere, nihil
                                        non itaque alias similique quas quam odit consequatur.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
<span class="title"><span class="serial">04</span>How Clients Can Consult With
online?</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute. non cupidatat skateboard dolor
                                        brunch. Foosd truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt alqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident iure ab nisi,
                                        magnam vitae. Laboriosam laborum suscipit recusandae officia laudantium,
                                        consectetur adipisci voluptates doloremque quisquam. Id rerum iusto
                                        reprehenderit assumenda!</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
<span class="title"><span class="serial">05</span>Can I share resources between
features?</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute. non cupidatat skateboard dolor
                                        brunch. Foosd truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt alqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End FAQ Area -->

    <!-- Start Blog Area -->
    <section id="blog" class="blog-section section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Blogs</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Our Latest News</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-blog wow fadeInUp" data-wow-delay=".2s">
                        <div class="blog-img">
                            <a href="{{ url('blog-single-sidebar') }}">
                                <img src="{{ asset('images/blog-1.jpg') }}" alt="#">
                            </a>
                        </div>
                        <div class="blog-content">
                            <a class="category" href="javascript:void(0)">Blog</a>
                            <h4>
                                <a href="{{ url('blog-single-sidebar') }}">Boost your conversion rate</a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt dolore
                                magna.</p>
                            <div class="autor">
                                <a href="javascript:void(0)"><img src="{{ asset('images/comment1.jpg') }}"
                                                                  alt="#"></a>
                                <a href="javascript:void(0)" class="name">Roel Aufderhar</a>
                                <ul class="meta-content">
                                    <li>
                                        <a href="javascript:void(0)">Mar 15,2023</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">5 min read</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-blog wow fadeInUp" data-wow-delay=".4s">
                        <div class="blog-img">
                            <a href="{{ url('blog-single-sidebar') }}">
                                <img src="{{ asset('images/blog-2.jpg') }}" alt="#">
                            </a>
                        </div>
                        <div class="blog-content">
                            <a class="category" href="javascript:void(0)">Video</a>
                            <h4>
                                <a href="{{ url('blog-single-sidebar') }}">How to use search engine</a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt dolore
                                magna.</p>
                            <div class="autor">
                                <a href="javascript:void(0)"><img src="{{ asset('images/comment2.jpg') }}"
                                                                  alt="#"></a>
                                <a href="javascript:void(0)" class="name">Jenifer Zuliya</a>
                                <ul class="meta-content">
                                    <li>
                                        <a href="javascript:void(0)">Feb 10,2023</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">7 min read</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-blog wow fadeInUp" data-wow-delay=".6s">
                        <div class="blog-img">
                            <a href="{{ url('blog-single-sidebar') }}">
                                <img src="{{ asset('images/blog-3.jpg') }}" alt="#">
                            </a>
                        </div>
                        <div class="blog-content">
                            <a class="category" href="javascript:void(0)">Marketing</a>
                            <h4>
                                <a href="{{ url('blog-single-sidebar') }}">Awesome ways to boost sales</a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt dolore
                                magna.</p>
                            <div class="autor">
                                <a href="javascript:void(0)"><img src="{{ asset('images/comment3.jpg') }}"
                                                                  alt="#"></a>
                                <a href="javascript:void(0)" class="name">Roel Aufderhar</a>
                                <ul class="meta-content">
                                    <li>
                                        <a href="javascript:void(0)">Jan 20,2023</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">6 min read</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->

    <!-- Start Client Area -->
    <div class="client-logo-section">
        <div class="container">
            <div class="client-logo-wrapper">
                <div class="client-logo-carousel d-flex align-items-center justify-content-between">
                    <div class="client-logo">
                        <img src="{{ asset('images/graygrids-logo.svg') }}" alt>
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('images/pagebulb-logo.svg') }}" alt>
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('images/lineicons-logo.svg') }}" alt>
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('images/graygrids-logo.svg') }}" alt>
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('images/lineicons-logo.svg') }}" alt>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Client Area -->

    <x-layouts.footer></x-layouts.footer>
</x-layouts.base>
