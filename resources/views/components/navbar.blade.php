<!-- START NAVBAR -->
<div id="navigation" class="navbar-light bg-faded site-navigation">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="site-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/bdu-logo-dark.svg') }}" alt="BDU Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-9 col-sm-8">
                <div class="header_right">
                    <nav id="main-menu" class="ms-auto">
                        <ul>
                            <li><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                            <li>
                                <a class="nav-link" href="#">Pages <span class="ti-angle-down"></span></a>
                                <ul>
                                    <li><a class="nav-link" href="{{ url('about') }}">About Us</a></li>
                                    <li><a class="nav-link" href="{{ url('team') }}">Instructor</a></li>
                                    <li><a class="nav-link" href="{{ url('team-details') }}">Instructor Details</a></li>
                                    <li><a class="nav-link" href="{{ url('faq') }}">FAQ's</a></li>
                                    <li><a class="nav-link" href="{{ url('event') }}">Event</a></li>
                                    <li><a class="nav-link" href="{{ url('event_single') }}">Event Single</a></li>
                                    <li><a class="nav-link" href="{{ url('error') }}">404 Page</a></li>
                                    <li><a class="nav-link" href="{{ url('login') }}">Login</a></li>
                                    <li><a class="nav-link" href="{{ url('register') }}">Register</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ url('course') }}">Courses <span class="ti-angle-down"></span></a>
                                <ul>
                                    <li><a class="nav-link" href="{{ url('course') }}">Courses 01</a></li>
                                    <li><a class="nav-link" href="{{ url('course2') }}">Courses 02</a></li>
                                    <li><a class="nav-link" href="{{ url('course3') }}">Courses 03</a></li>
                                    <li><a class="nav-link" href="{{ url('course-sidebar') }}">Course Sidebar</a></li>
                                    <li><a class="nav-link" href="{{ url('single_course') }}">Course Details</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ url('shop') }}">Shop <span class="ti-angle-down"></span></a>
                                <ul>
                                    <li><a class="nav-link" href="{{ url('shop') }}">Shop</a></li>
                                    <li><a class="nav-link" href="{{ url('single_shop') }}">Single Shop</a></li>
                                    <li><a class="nav-link" href="{{ url('cart') }}">Cart Page</a></li>
                                    <li><a class="nav-link" href="{{ url('checkout') }}">Checkout Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ url('blog') }}">Blog <span class="ti-angle-down"></span></a>
                                <ul>
                                    <li><a class="nav-link" href="{{ url('blog') }}">Blog List</a></li>
                                    <li><a class="nav-link" href="{{ url('blog_single') }}">Single Blog</a></li>
                                </ul>
                            </li>
                            <li><a class="nav-link" href="{{ url('contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                    <div id="mobile_menu"></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-8">
                <div class="call_to_action">
                    <a class="btn_one" href="{{ url('contact') }}">Contact Us</a>
                    <a class="btn_two" href="{{ url('register') }}">My Account</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END NAVBAR -->