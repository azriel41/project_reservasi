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
                            <a href="{{ route('login') }}" class="button_container header_button ml-auto"><div class="button text-center"><span>Login</span></div></a>
                            <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Menu -->

    <div class="menu">
        <div class="background_image" style="background-image:url('{{url('assets_frontend/images/menu.jpg')}}')"></div>
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
