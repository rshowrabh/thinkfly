<div class="fix">
    <div class="offcanvas__area">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="index.html">
                            <img src="assets/imgs/logo/footer-logo.png" alt="logo not found">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button class="offcanvas-close-icon animation--flip">
                                <span class="offcanvas-m-lines">
                              <span class="offcanvas-m-line line--1"></span><span class="offcanvas-m-line line--2"></span><span class="offcanvas-m-line line--3"></span>
                                </span>
                        </button>
                    </div>
                </div>
                <div class="mobile-menu fix"></div> 
                <div class="offcanvas__social">
                    <h3 class="offcanvas__title mb-20">Subscribe & Follow</h3>
                    <ul>
                        @if($setting)
                        @foreach (json_decode($setting->social_network)  as $key =>$item)
                        @if($item != null)
                        <a target="_blank" href="{{$item}}"><i class="fa-brands fa-{{$key}}"></i></a>
                        @endif
                        @endforeach
                        @endif
                    </ul>
                </div>
                <div class="offcanvas__btn d-sm-none">
                    <div class="header__btn-wrap">
                        <a class="rr-btn btn-hover-white" href="contact.html">Purchase Now<span><i class="fa-regular fa-angle-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>
<div class="offcanvas__overlay-white"></div>