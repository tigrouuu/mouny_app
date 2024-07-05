<x-layouts.base>
    {{--<x-slot:heading>About</x-slot:heading>--}}

    <x-layouts.header></x-layouts.header>

    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Blog Grid Sidebar</h1>
                    </div>
                    <ul class="breadcrumb-nav">
                        <li><a href="/">Home</a></li>
                        <li>Blog Grid Sidebar</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="section blog-section blog-list">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">

                            <div class="single-blog">
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
                                    <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor
                                        ividunt dolore magna.</p>
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
                        <div class="col-lg-6 col-md-6 col-12">

                            <div class="single-blog">
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
                                    <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor
                                        ividunt dolore magna.</p>
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
                        <div class="col-lg-6 col-md-6 col-12">

                            <div class="single-blog">
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
                                    <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor
                                        ividunt dolore magna.</p>
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
                        <div class="col-lg-6 col-md-6 col-12">

                            <div class="single-blog">
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
                                    <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor
                                        ividunt dolore magna.</p>
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
                        <div class="col-lg-6 col-md-6 col-12">

                            <div class="single-blog">
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
                                    <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor
                                        ividunt dolore magna.</p>
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
                        <div class="col-lg-6 col-md-6 col-12">

                            <div class="single-blog">
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
                                    <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor
                                        ividunt dolore magna.</p>
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
                        <div class="col-lg-6 col-md-6 col-12">

                            <div class="single-blog">
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
                                    <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor
                                        ividunt dolore magna.</p>
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
                        <div class="col-lg-6 col-md-6 col-12">

                            <div class="single-blog">
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
                                    <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor
                                        ividunt dolore magna.</p>
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
                    </div>

                    <div class="pagination left blog-grid-page">
                        <ul class="pagination-list">
                            <li><a href="javascript:void(0)">Prev</a></li>
                            <li class="active"><a href="javascript:void(0)">2</a></li>
                            <li><a href="javascript:void(0)">3</a></li>
                            <li><a href="javascript:void(0)">4</a></li>
                            <li><a href="javascript:void(0)">Next</a></li>
                        </ul>
                    </div>

                </div>
                <aside class="col-lg-4 col-md-12 col-12">
                    <div class="sidebar blog-grid-page">

                        <div class="widget search-widget">
                            <h5 class="widget-title">Search This Site</h5>
                            <form action="#">
                                <input type="text" placeholder="Search Here...">
                                <button type="submit"><i class="lni lni-search-alt"></i></button>
                            </form>
                        </div>

                        <div class="widget popular-feeds">
                            <h5 class="widget-title">Popular Feeds</h5>
                            <div class="popular-feed-loop">
                                <div class="single-popular-feed">
                                    <div class="feed-desc">
                                        <a class="feed-img" href="{{ url('blog-single-sidebar') }}">
                                            <img src="{{ asset('images/blog-sidebar-1.jpg') }}" alt="#">
                                        </a>
                                        <a href="javascript:void(0)" class="cetagory">Creative</a>
                                        <h6 class="post-title"><a href="{{ url('blog-single-sidebar') }}">Bringing Great
                                                Design
                                                Ideas To Completion</a></h6>
                                        <span class="time"><i class="lni lni-calendar"></i> 05th Nov 2023</span>
                                    </div>
                                </div>
                                <div class="single-popular-feed">
                                    <div class="feed-desc">
                                        <a class="feed-img" href="{{ url('blog-single-sidebar') }}">
                                            <img src="{{ asset('images/blog-sidebar-2.jpg') }}" alt="#">
                                        </a>
                                        <a href="javascript:void(0)" class="cetagory">Jobs</a>
                                        <h6 class="post-title"><a href="{{ url('blog-single-sidebar') }}">Live Life
                                                Smart And
                                                Focus On The Positive</a></h6>
                                        <span class="time"><i class="lni lni-calendar"></i> 24th March 2023</span>
                                    </div>
                                </div>
                                <div class="single-popular-feed">
                                    <div class="feed-desc">
                                        <a class="feed-img" href="{{ url('blog-single-sidebar') }}">
                                            <img src="{{ asset('images/blog-sidebar-3.jpg') }}" alt="#">
                                        </a>
                                        <a href="javascript:void(0)" class="cetagory">Marketing</a>
                                        <h6 class="post-title"><a href="{{ url('blog-single-sidebar') }}">We’re
                                                currently
                                                acceping new projects.</a></h6>
                                        <span class="time"><i class="lni lni-calendar"></i> 30th Jan 2023</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget categories-widget">
                            <h5 class="widget-title">Categories</h5>
                            <ul class="custom">
                                <li>
                                    <a href="javascript:void(0)">Web Design</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Branding</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Graphic Design</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Marketing</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Wireframing</a>
                                </li>
                            </ul>
                        </div>

                        <div class="widget popular-tag-widget">
                            <h5 class="widget-title">Popular Tags</h5>
                            <div class="tags">
                                <a href="javascript:void(0)">Popular</a>
                                <a href="javascript:void(0)">Design</a>
                                <a href="javascript:void(0)">UX</a>
                                <a href="javascript:void(0)">Usability</a>
                                <a href="javascript:void(0)">Interview</a>
                                <a href="javascript:void(0)">Jobs</a>
                                <a href="javascript:void(0)">Develop</a>
                                <a href="javascript:void(0)">Business</a>
                                <a href="javascript:void(0)">Tech</a>
                                <a href="javascript:void(0)">Consult</a>
                                <a href="javascript:void(0)">Employee</a>
                            </div>
                        </div>

                        <div class="widget help-call">
                            <h5 class="widget-title">Need Help?</h5>
                            <div class="inner">
                                <h3>
                                    Online Help!
                                    <span>+(123) 456-78-90</span>
                                </h3>
                            </div>
                        </div>

                    </div>
                </aside>
            </div>
        </div>
    </section>

    <x-layouts.footer></x-layouts.footer>
</x-layouts.base>
