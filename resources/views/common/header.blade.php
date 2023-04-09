<header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{route('index')}}"><img src="{{asset('assets/images/logo.png')}}" class="logo" alt="">APS Chirgaon
            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation">

                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">

                    <li class="nav-item">
                        <a class="nav-link {{ Request::route()->getName() == 'index' ? 'active' : '' }} " aria-current="page" href="{{route('index')}}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Request::route()->getName() == 'about' ? 'active' : '' }} " aria-current="page" href="{{route('about')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::route()->getName() == 'academic' ? 'active' : '' }}" href="{{route('academic')}}">Academics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::route()->getName() == 'gallery' ? 'active' : '' }}" href="{{route('gallery')}}">Gallery</a>
                    </li>

                    {{--                    <li class="nav-item dropdown">--}}
                    {{--                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"--}}
                    {{--                           data-bs-toggle="dropdown" aria-expanded="false">--}}
                    {{--                            Pages <i class="fas fa-angle-down"></i>--}}
                    {{--                        </a>--}}
                    {{--                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">--}}
                    {{--                            <li><a class="dropdown-item" href="about.html">About</a></li>--}}
                    {{--                            <li><a class="dropdown-item" href="error.html">404 Page</a></li>--}}
                    {{--                            <li><a class="dropdown-item" href="email-template.html">Email Template</a></li>--}}
                    {{--                            <li><a class="dropdown-item" href="shortcodes.html">Shortcodes</a></li>--}}
                    {{--                            <li><a class="dropdown-item" href="landing-single.html">Landing Page</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}

                    <li class="nav-item">
                        <a class="nav-link {{ Request::route()->getName() == 'contact' ? 'active' : '' }}" href="{{route('contact')}}">Contact</a>
                    </li>  <li class="nav-item">
                        <a class="nav-link" href="https://www.facebook.com/aphschirgaon" target="_blank" style="font-size: 1.5rem"><i
                                class="fa fa-facebook"></i></a>
                    </li>  <li class="nav-item">
                        <a class="nav-link" href="https://instagram.com/apschirgaon?igshid=ZDdkNTZiNTM=" target="_blank" style="font-size: 1.5rem"> <i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
            <!-- toggle switch for light and dark theme -->
            <div class="cont-ser-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
        </nav>
    </div>
</header>
