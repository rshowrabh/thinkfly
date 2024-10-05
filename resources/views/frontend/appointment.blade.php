@extends('layouts.frontend')

@section('content')

 <!--contact-us-start-->
 <section class="contact-us__area section pt-100 section-space-bottom overflow-hidden">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="contact-us__widget mb-30" data-tilt="">
                    <img src="assets/imgs/concact/contact-left-img.png" alt="img not found">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-us__title-wrapper">
                    <div class="section__title-wrapper mb-40">
                        <h6 class="section__title-wrapper-black-subtitle mb-10 wow fadeInLeft animated" data-wow-delay=".2s">Appointment Details
                            <svg width="14" height="12" viewbox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_3843_1169)">
                            <path d="M4.92578 10.3748L6.49623 9.68052L5.62583 9.07031L4.92578 10.3748Z" fill="#83CD20"></path>
                            <path d="M4.92578 10.3743L5.00073 8L13.9088 0L5.66505 9.1113L4.92578 10.3743Z" fill="#83CD20"></path>
                            <path d="M5 8L13.908 0L0 6.22704L5 8Z" fill="#83CD20"></path>
                            <path d="M5.66406 9.1113L9.95686 12L13.9078 0L5.66406 9.1113Z" fill="#034833"></path>
                            </g>
                            <defs>
                            <clippath id="clip0_3843_1169">
                            <rect width="13.908" height="12" fill="white"></rect>
                            </clippath>
                            </defs>
                            </svg></h6>
                        <h2 class="section__title-wrapper-title wow fadeInLeft animated" data-wow-delay=".3s">Let Your Wanderlust Guide You</h2>
                    </div>
                    <div class="contact-us__form-wrapper">
                        <form class="contact-us__form" id="contact-us__form" method="POST" action="{{route('frontend.appointment.store')}}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="contact-us__input wow fadeInLeft animated" data-wow-delay=".4s">
                                        <span>Your Name</span>
                                        <input name="name" id="name" type="text" placeholder="Your name">
                                        <div class="icon">
                                            <i class="fa-solid fa-paper-plane"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="contact-us__input wow fadeInLeft animated" data-wow-delay=".4s">
                                        <span>Your Email</span>
                                        <input name="email" id="email" type="email" placeholder="Your Email">
                                        <div class="icon">
                                            <i class="fa-solid fa-paper-plane"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="contact-us__input wow fadeInLeft animated" data-wow-delay=".5s">
                                        <span>Your Phone</span>
                                        <input name="phone" id="phone" type="number" placeholder="Your Phone">
                                        <div class="icon icon-2">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="contact-us__input wow fadeInLeft animated" data-wow-delay=".6s">
                                        <span>Your Address</span>
                                        <input name="address" id="address" type="text" placeholder="Your Address">
                                        <div class="icon">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="contact-us__textarea wow fadeInLeft animated" data-wow-delay=".7s">
                                        <span>Message</span>
                                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Write Message.."></textarea>
                                        <div class="icon">
                                            <i class="fa-solid fa-envelope"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="contact-btn mt-30 wow fadeInLeft animated" data-wow-delay=".8s">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--contact-us-end-->

@endsection