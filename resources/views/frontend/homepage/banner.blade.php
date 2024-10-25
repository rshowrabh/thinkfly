<section class="overflow-hidden p-relative gray-bg">
    <div class="banner-home">
        <div class="banner-wrap padding-space dark-green">
            <div class="container">
                <div class="banner-home__all-shape">
                    <div class="left-tower upDown-top">
                         <img src="./assets/imgs/banner-1/banner-left-towor.png" alt="img not found">               
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 ">
                        <div class="banner-home__content p-relative">
                            <h1 class="title mb-xs-10 wow fadeInLeft animated" data-wow-delay=".4s">
                       
                                {{ $banner->heading ?? "New Visa is Here"}}
                                                     
                            </h1>
                            <div class="banner-home__btn__wrapper d-flex flex-wrap mt-40 mt-md-35 mt-sm-30 mt-xs-25">
                                <a href="about-us.html" class="rr-btn btn-transparent wow fadeInLeft animated" data-wow-delay=".6s">Read More <i class="fa-solid fa-arrow-right"></i></a>
                                @if ($banner->url != null)
                                <a href="{{$banner->url}}" class="popup-video zooming banner-video-button" data-effect="mfp-move-from-top vertical-middle">
                                @else
                                <a href="https://www.youtube.com/watch?v=tNDXtCFPFs4" class="popup-video zooming banner-video-button" data-effect="mfp-move-from-top vertical-middle">
                                @endif
                                    <svg width="26" height="28" viewbox="0 0 26 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g filter="url(#filter0_d_836_9)">
                                        <path d="M19.5 10.134C20.1667 10.5189 20.1667 11.4811 19.5 11.866L7.5 18.7942C6.83333 19.1791 6 18.698 6 17.9282L6 4.0718C6 3.302 6.83333 2.82087 7.5 3.20577L19.5 10.134Z" fill="#fff"></path>
                                        </g>
                                        <defs>
                                        <filter id="filter0_d_836_9" x="0" y="0.0703125" width="26" height="27.8594" filterunits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feflood flood-opacity="0" result="BackgroundImageFix"></feflood>
                                        <fecolormatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></fecolormatrix>
                                        <feoffset dy="3"></feoffset>
                                        <fegaussianblur stddeviation="3"></fegaussianblur>
                                        <fecomposite in2="hardAlpha" operator="out"></fecomposite>
                                        <fecolormatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"></fecolormatrix>
                                        <feblend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_836_9"></feblend>
                                        <feblend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_836_9" result="shape"></feblend>
                                        </filter>
                                        </defs>
                                    </svg>
                                </a>
                                @if ($banner->url != null)
                                <a class="video-text wow fadeInLeft animated" data-wow-delay=".8s" href="{{$banner->url}}">Watch Our Videos</a>
                                @else
                                <a class="video-text wow fadeInLeft animated" data-wow-delay=".8s" href="https://www.youtube.com/watch?v=tNDXtCFPFs4">Watch Our Videos</a>
                                
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="banner-home__shape position-relative wow fadeInLeft animated" data-wow-delay=".9s">
                            <div class="ball-shape upDown">
                                <img class="img-fluid" src="{{ URL::to('assets/imgs/banner-1/banner-bg-ball-shape.png') }}" alt="img not found">
                            </div>
                            <div class="man-img leftRight">
                                @if ($banner->image != null )
                                <img src="{{ asset('storage/'. $banner->image) }}" alt="img not found">
                                @else
                                <img src="./assets/imgs/banner-1/banner-man-img.png" alt="img not found">
                                @endif
                            </div>
                            <div class="right-tower upDown-bottom">
                                <img src="{{ URL::to('assets/imgs/banner-1/banner-right-towor.png')}}" alt="img not found">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>