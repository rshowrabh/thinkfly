@extends('layouts.frontend')

@section('content')

<!-- Body main wrapper start -->
<main>
    <!--visa-details-->
    <section class="visa-details__area coaching-details padding-t100 section-space-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="visa-details__content">
                        {!! $visa->content !!}
                        <div class="visa-details__content-faq-title mt-30 mb-60 wow fadeInLeft animated" data-wow-delay=".6s">
                            <h3>frequently asked questions</h3>
                        </div>
                        <div class="visa-details__content-faq">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item  wow fadeInLeft animated" data-wow-delay=".2s">
                                    <h5 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                            Where Wanderlust Meets Reality?
                                        </button>
                                    </h5>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>It is a long established fact that a reader will be distr acted bioiiy the rea <br> dablea content of a page when looking at its layout  Thoiie point of using.It is <br> a long this established fact that a reader</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item  wow fadeInLeft animated" data-wow-delay=".3s">
                                    <h5 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            How far in advance should I book my flight?
                                        </button>
                                    </h5>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>It is a long established fact that a reader will be distr acted bioiiy the rea <br> dablea content of a page when looking at its layout  Thoiie point of using.It is <br> a long this established fact that a reader</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item  wow fadeInLeft animated" data-wow-delay=".4s">
                                    <h5 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapse" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            What documents travel internationally?
                                        </button>
                                    </h5>
                                    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>It is a long established fact that a reader will be distr acted bioiiy the rea <br> dablea content of a page when looking at its layout  Thoiie point of using.It is <br> a long this established fact that a reader</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item  wow fadeInLeft animated" data-wow-delay=".5s">
                                    <h5 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                            Is travel insurance necessary?
                                        </button>
                                    </h5>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>It is a long established fact that a reader will be distr acted bioiiy the rea <br> dablea content of a page when looking at its layout  Thoiie point of using.It is <br> a long this established fact that a reader</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="visa-details__links-visa wow fadeInLeft animated" data-wow-delay=".2s">
                        <a href="countrie-details.html">Asia <i class="fa-solid fa-angle-right"></i></a>
                        <a class="mt-20" href="countrie-details.html">Europe <i class="fa-solid fa-angle-right"></i></a>
                        <a class="mt-20" href="countrie-details.html">North America <i class="fa-solid fa-angle-right"></i></a>
                        <a class="mt-20" href="countrie-details.html">Australia <i class="fa-solid fa-angle-right"></i></a>
                        <a class="mt-20" href="countrie-details.html">Latine America <i class="fa-solid fa-angle-right"></i></a>
                        <a class="mt-20 border" href="countrie-details.html">Africa <i class="fa-solid fa-angle-right"></i></a>
                    </div>
                    <div class="visa-details__widget mt-30 wow fadeInLeft animated" data-wow-delay=".3s">
                        <div class="visa-details__widget-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <h3 class="mt-15">GET TOUCH</h3>
                        <a href="tel:{{$setting->support_phone}}">{{$setting->support_phone}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
 @endsection