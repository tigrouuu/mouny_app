<!-- Start Header Area -->
<header class="header navbar-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="nav-inner">

                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="/">
                            <img src="{{ asset('images/logo/white-logo.svg') }}" alt="Logo">
                        </a>
                        <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a href="#home" class="page-scroll active" aria-label="Toggle navigation">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#features" class="page-scroll" aria-label="Toggle navigation">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#overview" class="page-scroll" aria-label="Toggle navigation">Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#pricing" class="page-scroll" aria-label="Toggle navigation">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#team" class="page-scroll" aria-label="Toggle navigation">Team</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll dd-menu collapsed" href="#blog" data-bs-toggle="collapse"
                                       data-bs-target="#submenu-1-4" aria-controls="navbarSupportedContent"
                                       aria-expanded="false" aria-label="Toggle navigation">Blog</a>
                                    <ul class="sub-menu collapse" id="submenu-1-4">
                                        <li class="nav-item"><a href="{{ url('blog-grid-sidebar') }}">Blog Grid
                                                Sidebar</a>
                                        </li>
                                        <li class="nav-item"><a href="{{ url('blog-single') }}">Blog Single</a></li>
                                        <li class="nav-item"><a href="{{ url('blog-single-sidebar') }}">Blog Single
                                                Sibebar</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('contact') }}" aria-label="Toggle navigation">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="button add-list-button">
                            <a href="{{ url('contact') }}" class="btn">Get it now</a>
                        </div>
                    </nav>

                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Header Area -->
