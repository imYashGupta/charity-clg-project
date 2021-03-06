@extends("layouts.web")
@section("content")
        <!--Page Header Start-->
        <section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            <div class="container">
                <div class="page-header__inner">
                    <h2>About</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{route("home")}}">Home</a></li>
                        <li><span>/</span></li>
                        <li>About</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Make Donation Two Start-->
        <section class="make-donation-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="make-donation-two__left">
                            <div class="block-title text-left">
                               <h4>Make a Donation</h4>
                               <h2>We Make a Difference in their Life</h2>
                            </div>
                            <p class="make-donation-two__text">Tincidunt elit magnis nulla facilisis sagittis is maecenas. Sapien nunced amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.</p>
                            <div class="make-donation-two__progress">
                                <div class="make-donation-two__progress-single">
                                   <h4 class="make-donation-two__progress-title">Funding</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="83%">
                                            <div class="count-text">83%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="make-donation-two__progress-single">
                                   <h4 class="make-donation-two__progress-title">Donations</h4>
                                    <div class="bar mrb-0">
                                        <div class="bar-inner count-bar" data-percent="66%">
                                            <div class="count-text">66%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="make-donation-two__right">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="make-donation-two__single-img">
                                        <img src="assets/images/resources/make-donation-two-img-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="make-donation-two__single-img">
                                        <img src="assets/images/resources/make-donation-two-img-2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Make Donation Two End-->

        <!-- You Can Help Two Start -->
        <section class="you-can-help you-can-help-two" style="background-image: url(assets/images/backgrounds/you_can_help_bg.jpg)">
           <div class="you-can-help-img"><img src="assets/images/resources/you_can_help_img.png" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="you-can-help__left">
                            <div class="block-title text-left">
                               <h4>Help the people</h4>
                               <h2>You Can Help us to Change One Person Live Through Donation</h2>
                           </div>
                           <div class="you-can-help__three-icon">
                                <ul class="list-unstyled">
                                    <li>
                                        <div class="icon-box">
                                            <span class="icon-vegetable"></span>
                                        </div>
                                        <div class="text">
                                            <p>Food</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-box">
                                            <span class="icon-graduated"></span>
                                        </div>
                                        <div class="text">
                                            <p>Education</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-box">
                                            <span class="icon-stethoscope"></span>
                                        </div>
                                        <div class="text">
                                            <p>Medical</p>
                                        </div>
                                    </li>
                                </ul>
                           </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="you-can-help__right">
                            <div class="you-can-help__give-box">
                                <div class="you-can-help__give-text-box">
                                    <p>Give Education to Kids</p>
                                </div>
                                <div class="you-can-help__icon-box">
                                    <span class="icon-graduated"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- You Can Help Two End -->

        <!--Testimonials Three Start-->
        <section class="testimonials-two testimonials-three jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(assets/images/backgrounds/testimonials-two-bg.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testimonials-two__carousel owl-theme owl-carousel">
                            <div class="testimonials-two__item">
                                <div class="testimonials-two__img">
                                   <div class="testimonials-two__img-shape" style="background-image: url(assets/images/shapes/testimonials-two-shape.png)"></div>
                                    <img src="assets/images/testimonials/testimonials_two-img-1.png" alt="">
                                    <div class="testimonials-two__quote">
                                        <img src="assets/images/testimonials/testimonials-two-icon-1.png" alt="">
                                    </div>
                                </div>
                                <div class="testimonials-two__text">
                                    <p>This is due to their excellent service, competitive pricing and customer support. It???s throughly refresing to get such a personal touch.</p>
                                    <h3>Mike Hardson</h3>
                                </div>
                            </div>
                            <div class="testimonials-two__item">
                                <div class="testimonials-two__img">
                                   <div class="testimonials-two__img-shape" style="background-image: url(assets/images/shapes/testimonials-two-shape.png)"></div>
                                    <img src="assets/images/testimonials/testimonials_two-img-1.png" alt="">
                                    <div class="testimonials-two__quote">
                                        <img src="assets/images/testimonials/testimonials-two-icon-1.png" alt="">
                                    </div>
                                </div>
                                <div class="testimonials-two__text">
                                    <p>This is due to their excellent service, competitive pricing and customer support. It???s throughly refresing to get such a personal touch.</p>
                                    <h3>Mike Hardson</h3>
                                </div>
                            </div>
                            <div class="testimonials-two__item">
                                <div class="testimonials-two__img">
                                   <div class="testimonials-two__img-shape" style="background-image: url(assets/images/shapes/testimonials-two-shape.png)"></div>
                                    <img src="assets/images/testimonials/testimonials_two-img-1.png" alt="">
                                    <div class="testimonials-two__quote">
                                        <img src="assets/images/testimonials/testimonials-two-icon-1.png" alt="">
                                    </div>
                                </div>
                                <div class="testimonials-two__text">
                                    <p>This is due to their excellent service, competitive pricing and customer support. It???s throughly refresing to get such a personal touch.</p>
                                    <h3>Mike Hardson</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonials Three End-->

        <!--Brand Four Start-->
        <div class="brand-two brand-four">
           <div class="brand-four-bg" style="background-image: url(assets/images/backgrounds/brand-four-bg.jpg)"></div>
            <div class="container">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                "0": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "375": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "575": {
                    "spaceBetween": 30,
                    "slidesPerView": 3
                },
                "767": {
                    "spaceBetween": 50,
                    "slidesPerView": 4
                },
                "991": {
                    "spaceBetween": 50,
                    "slidesPerView": 5
                },
                "1199": {
                    "spaceBetween": 100,
                    "slidesPerView": 5
                }
            }}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand_2_img_1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand_2_img_2.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand_2_img_3.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand_2_img_4.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand_2_img_5.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand_2_img_1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand_2_img_2.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand_2_img_3.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand_2_img_4.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand_2_img_5.png" alt="">
                        </div><!-- /.swiper-slide -->
                    </div>
                </div>
            </div>
        </div>
        <!--Brand Four End-->

        <!--Meet Volunteers One Start-->
        <section class="meet-volunteers-one">
            <div class="container">
                <div class="block-title text-center">
                   <h4>Professional People</h4>
                   <h2>Meet Volunteers</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <!--Meet Volunteers One Single-->
                        <div class="meet-volunteers-one__single">
                            <div class="meet-volunteers-one__img">
                                <img src="assets/images/resources/Volunteer_one_img-1.jpg" alt="">
                            </div>
                            <div class="meet-volunteers-one__content">
                                <div class="meet-volunteers-one__name">
                                    <h3>Jessica Brown</h3>
                                </div>
                                <div class="meet-volunteers-one__social-info">
                                    <div class="left">
                                        <p>Volunteer</p>
                                    </div>
                                    <div class="meet-volunteers-one__social-info-box">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <!--Meet Volunteers One Single-->
                        <div class="meet-volunteers-one__single">
                            <div class="meet-volunteers-one__img">
                                <img src="assets/images/resources/Volunteer_one_img-2.jpg" alt="">
                            </div>
                            <div class="meet-volunteers-one__content">
                                <div class="meet-volunteers-one__name">
                                    <h3>Kevin Martin</h3>
                                </div>
                                <div class="meet-volunteers-one__social-info">
                                    <div class="left">
                                        <p>Volunteer</p>
                                    </div>
                                    <div class="meet-volunteers-one__social-info-box">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <!--Meet Volunteers One Single-->
                        <div class="meet-volunteers-one__single">
                            <div class="meet-volunteers-one__img">
                                <img src="assets/images/resources/Volunteer_one_img-3.jpg" alt="">
                            </div>
                            <div class="meet-volunteers-one__content">
                                <div class="meet-volunteers-one__name">
                                    <h3>Christine Eve</h3>
                                </div>
                                <div class="meet-volunteers-one__social-info">
                                    <div class="left">
                                        <p>Volunteer</p>
                                    </div>
                                    <div class="meet-volunteers-one__social-info-box">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-md-2 col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <!--Meet Volunteers One Single-->
                        <div class="meet-volunteers-one__single">
                            <div class="meet-volunteers-one__img">
                                <img src="assets/images/resources/Volunteer_one_img-2.jpg" alt="">
                            </div>
                            <div class="meet-volunteers-one__content">
                                <div class="meet-volunteers-one__name">
                                    <h3>Kevin Martin</h3>
                                </div>
                                <div class="meet-volunteers-one__social-info">
                                    <div class="left">
                                        <p>Volunteer</p>
                                    </div>
                                    <div class="meet-volunteers-one__social-info-box">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <!--Meet Volunteers One Single-->
                        <div class="meet-volunteers-one__single">
                            <div class="meet-volunteers-one__img">
                                <img src="assets/images/resources/Volunteer_one_img-2.jpg" alt="">
                            </div>
                            <div class="meet-volunteers-one__content">
                                <div class="meet-volunteers-one__name">
                                    <h3>Kevin Martin</h3>
                                </div>
                                <div class="meet-volunteers-one__social-info">
                                    <div class="left">
                                        <p>Volunteer</p>
                                    </div>
                                    <div class="meet-volunteers-one__social-info-box">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Meet Volunteers One End-->

        <!--CTA Two Start-->
        <section class="cta-one" style="background-image: url(assets/images/backgrounds/cta-two-bg.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cta-one__inner">
                            <div class="cta-one__text">
                                <p>Help People in Need</p>
                                <h3>Become a Volunteer Now</h3>
                            </div>
                            <div class="cta-one__btn">
                                <a href="{{ route("page.become-volunteer") }}" class="thm-btn">Get Involved Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--CTA Two End-->


@endsection








