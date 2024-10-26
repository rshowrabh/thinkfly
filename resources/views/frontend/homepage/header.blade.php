<div id="header-sticky" class="header__area header-1 gray-bg">
    <div class="header-container">
        <div class="mega__menu-wrapper p-relative">
            <div class="header__main">
                <div class="header__left">
                    <div class="header__logo">
                        <a href="/">
                            <div class="logo">
                                @if($setting)
                                <img src="{{asset('storage/'.$setting->site_logo ?? '')}}" alt="logo not found">
                                @endif
                            </div>
                        </a>
                    </div>
                </div>
                <div class="header__middle">
                    <div class="mean__menu-wrapper d-none d-xl-block">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="has-dropdown active">
                                        <a href="javascript:void(0)">Home</a>
                                        <ul class="submenu">
                                            <li><a href="index.html">Home 1</a></li>
                                            <li><a href="index-2.html">Home 2</a></li>
                                            <li><a href="index-3.html">Home 3</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="about-us.html">About Us</a>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="story.html">Story</a>
                                        <ul class="submenu">
                                            <li><a href="story.html">Story</a></li>
                                            <li><a href="story-details.html">Story Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="service.html">Visa</a>
                                        <ul class="submenu">
                                            <li><a href="visa.html">Visa</a></li>
                                            <li><a href="visa-details.html">Visa Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="has-dropdown">blog</a>
                                        <ul class="submenu">
                                            <li><a href="blog-grid.html">blog grid</a></li>
                                            <li><a href="blog-details.html">blog details</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown ">
                                        <a href="javascript:void(0)">Page</a>
                                        <ul class="submenu">
                                            <li><a href="visa-offers.html">visa-offers</a></li>
                                            <li><a href="gallery.html">gallery</a></li>
                                            <li><a href="pricing.html">pricing</a></li>
                                            <li><a href="coaching.html">coaching</a></li>
                                            <li><a href="coaching-details.html">coaching details</a></li>
                                            <li><a href="countrie.html">Countries</a></li>
                                            <li><a href="countrie-details.html">Countries details</a></li>
                                            <li><a href="team.html">team</a></li>
                                            <li><a href="team-details.html">team details</a></li>
                                            <li><a href="faq.html">faq</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{route('frontend.appointment')}}">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="header__right">
                    <div class="header__action d-flex align-items-center">
                        <div class="header__btn-wrap d-none d-sm-inline-flex">
                            <a href="{{route('frontend.appointment')}}" class="rr-btn">Get An Appointment <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        <div class="header__hamburger ml-20 d-xl-none">
                            <div class="sidebar__toggle">
                                <button class="bar-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>