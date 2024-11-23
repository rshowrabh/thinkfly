@if (!$brands->isEmpty())
<section class="main-brand__area gray-bg section-space-bottom-2">
    <div class="brand__area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="swiper brand__active wow fadeIn" data-wow-delay=".3s">
                        <div class="swiper-wrapper">
                            @foreach ($brands as $brand)
                            <div class="swiper-slide">
                                <div class="brand__item text-center  wow fadeIn animated" data-wow-delay=".1s">
                                    <div class="brand__thumb">
                                        <a href="{{$brand->link}}"><img class="img-fluid" src="{{asset('storage/'. $brand->icon)}}" alt="image not found"></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@else
<section class="main-brand__area gray-bg section-space-bottom-2">
    <div class="brand__area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="swiper brand__active wow fadeIn" data-wow-delay=".3s">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="brand__item text-center  wow fadeIn animated" data-wow-delay=".1s">
                                    <div class="brand__thumb">
                                        <a href="https://segment.com/"><img class="img-fluid" src="assets/imgs/brands/black-brands/black-brands1.png" alt="image not found"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item text-center  wow fadeIn animated" data-wow-delay=".2s">
                                    <div class="brand__thumb">
                                        <a href="https://www.splunk.com/"><img class="img-fluid" src="assets/imgs/brands/black-brands/black-brands2.png" alt="image not found"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item text-center  wow fadeIn animated" data-wow-delay=".3s">
                                    <div class="brand__thumb">
                                        <a href="https://www.hubspot.com/"><img class="img-fluid" src="assets/imgs/brands/black-brands/black-brands3.png" alt="image not found"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item text-center  wow fadeIn animated" data-wow-delay=".4s">
                                    <div class="brand__thumb">
                                        <a href="https://app.asana.com/"><img class="img-fluid" src="assets/imgs/brands/black-brands/black-brands4.png" alt="image not found"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item text-center  wow fadeIn animated" data-wow-delay=".5s">
                                    <div class="brand__thumb">
                                        <a href="https://www.airtasker.com/"><img class="img-fluid" src="assets/imgs/brands/black-brands/black-brands5.png" alt="image not found"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif