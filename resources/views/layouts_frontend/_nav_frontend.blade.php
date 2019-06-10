 <header class="header">
        <div class="header_content">

            <!-- Logo -->
            <div class="logo_container d-flex flex-column align-items-center justify-content-center">
                <div class="logo">
                    <a href="#" class="text-center">
                        <div class="logo_subtitle">hotel</div>
                        <div class="logo_title">Samira</div>
                        <div class="logo_stars">
                            <ul class="d-flex flex-row align-items-start justfy-content-start">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                        </div>
                    </a>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_inner d-flex flex-row align-items-center justify-content-start">
                            <nav class="main_nav">
                                <ul class="d-flex flex-row align-items-center justify-content-start">
                                    <li class="active"><a href="index.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>home</span></div></a></li>
                                    <li><a href="about.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>about us</span></div></a></li>
                                    <li><a href="rooms.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>rooms</span></div></a></li>
                                    <li><a href="news.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>news</span></div></a></li>
                                    <li><a href="contact.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>contact</span></div></a></li>
                                </ul>
                            </nav>
                            <a href="#" class="button_container header_button ml-auto"><div class="button text-center"><span>Book Your Stay</span></div></a>
                            <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                            <div class="header_review"><a href="{{ route('login') }}">Login</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Menu -->

    <div class="menu">
        <div class="background_image" style="background-image:url('../project_reservasi/assets_frontend/images/menu.jpg')"></div>
        <div class="menu_content d-flex flex-column align-items-center justify-content-center">
            <ul class="menu_nav_list text-center">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About us</a></li>
                <li><a href="rooms.html">Rooms</a></li>
                <li><a href="news.html">News</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <div class="menu_review"><a href="{{ route('login') }}">LOGIN</a></div>
        </div>
    </div>

    <div class="home">
        
        <!-- Home Slider -->
        <div class="home_slider_container">
            <div class="owl-carousel owl-theme home_slider">
                
                <!-- Slide -->
                <div class="owl-item">
                    <!-- Image credit: https://unsplash.com/@santtd -->
                    <div class="background_image" style="background-image:url({{ url('assets_frontend/images/home_slider_1.jpg') }})"></div>
                    <div class="home_content_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_content text-center">
                                        <div class="home_subtitle">luxury resort</div>
                                        <div class="home_title">Amazing Services, Location & Facilities</div>
                                        <a href="#" class="button_container home_button"><div class="button text-center"><span>Book Your Stay</span></div></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="owl-item">
                    <!-- Image credit: https://unsplash.com/@santtd -->
                    <div class="background_image" style="background-image:url('../project_reservasi/assets_frontend/images/home_slider_1.jpg')"></div>
                    <div class="home_content_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_content text-center">
                                        <div class="home_subtitle">luxury resort</div>
                                        <div class="home_title">Amazing Services, Location & Facilities</div>
                                        <a href="#" class="button_container home_button"><div class="button text-center"><span>Book Your Stay</span></div></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="owl-item">
                    <!-- Image credit: https://unsplash.com/@santtd -->
                    <div class="background_image" style="background-image:url('../project_reservasi/assets_frontend/images/home_slider_1.jpg')"></div>
                    <div class="home_content_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_content text-center">
                                        <div class="home_subtitle">luxury resort</div>
                                        <div class="home_title">Amazing Services, Location & Facilities</div>
                                        <a href="#" class="button_container home_button"><div class="button text-center"><span>Book Your Stay</span></div></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Home Slider Dots -->

            <div class="home_slider_dots">
                <ul id="home_slider_custom_dots" class="home_slider_custom_dots">
                    <li class="home_slider_custom_dot active">01</li>
                    <li class="home_slider_custom_dot">02</li>
                    <li class="home_slider_custom_dot">03</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="search_bar">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="search_bar_container">
                        <form action="#" id="search_bar_form" class="search_bar_form d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-between clearfix">
                            <div>
                                <select class="search_form_select">
                                    <option disabled selected>Select Arrival Date</option>
                                    <option>07/15/2018</option>
                                    <option>07/22/2018</option>
                                    <option>07/29/2018</option>
                                </select>
                            </div>
                            <div>
                                <select class="search_form_select">
                                    <option disabled selected>Select Departure Date</option>
                                    <option>07/15/2018</option>
                                    <option>07/22/2018</option>
                                    <option>07/29/2018</option>
                                </select>
                            </div>
                            <div>
                                <select class="search_form_select">
                                    <option disabled selected>Select Rooms</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                            <div><button class="search_bar_button">Request a Quote</button></div>
                        </form>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>