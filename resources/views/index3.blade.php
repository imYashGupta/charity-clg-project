 @extends("layouts.web")
 @section('content')
        <!-- Main Slider Start -->
        <section class="main-slider main-slider-three">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
    "effect": "fade",
    "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
      },
    "navigation": {
        "nextEl": ".main-slider-button-next",
        "prevEl": ".main-slider-button-prev",
        "clickable": true
    },
    "autoplay": {
        "delay": 5000
    }}'>

                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/main-slider/slider-3-1.jpg);"></div>
                        <div class="container">
                            <div class="swiper-slide__inner">
                                <div class="swiper-slide__inner-shape">
                                    <img src="assets/images/shapes/slider-three-shape.png" alt="">
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <p>We’re Always Ready to Help Them</p>
                                        <h2>You Can Change <br> their Lifestyle</h2>
                                        <a href="about.html" class="thm-btn">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/main-slider/slider-3-2.jpg);"></div>
                        <div class="container">
                            <div class="swiper-slide__inner">
                                <div class="swiper-slide__inner-shape">
                                    <img src="assets/images/shapes/slider-three-shape.png" alt="">
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <p>We’re Always Ready to Help Them</p>
                                        <h2>You Can Change <br> their Lifestyle</h2>
                                        <a href="about.html" class="thm-btn">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/main-slider/slider-3-1.jpg);"></div>
                        <div class="container">
                            <div class="swiper-slide__inner">
                                <div class="swiper-slide__inner-shape">
                                    <img src="assets/images/shapes/slider-three-shape.png" alt="">
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <p>We’re Always Ready to Help Them</p>
                                        <h2>You Can Change <br> their Lifestyle</h2>
                                        <a href="about.html" class="thm-btn">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination" id="main-slider-pagination"></div>
                <div class="main-slider-nav">
                    <div class="main-slider-button-prev"><span class="icon-right-arrow"></span></div>
                    <div class="main-slider-button-next"><span class="icon-right-arrow"></span> </div>
                </div>
            </div>
        </section>
        <!-- Main Slider End -->

        <!-- Welcome Two Start -->
        <section class="welcome-two">
            <div class="welcome-two-hand"
                style="background-image: url(assets/images/backgrounds/welcome_two_hands.png)"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="welcome-two__left">
                            <div class="block-title text-left">
                                <h4>Our Community</h4>
                                <h2>Welcome to Non-Profit Charity Organization</h2>
                            </div>
                            <div class="welcome-two__checks">
                                <a href="#" class="welcome-two__check-one"><i class="fa fa-check"></i>Prosper in this
                                    volatile</a>
                                <a href="#"><i class="fa fa-check"></i>Prosper in this volatile</a>
                            </div>
                            <p class="welcome-two__text">There are many variations of passages of Lorem Ipsum available,
                                but the majority have suffered alteration in some form, by injected humour, or
                                randomised words which don't look even slightly believable. If you are going to use a
                                passage.</p>
                            <div class="welcome-two__btn">
                                <a href="about.html" class="thm-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="welcome-two__right">
                            <div class="welcome-two__img">
                                <img src="assets/images/resources/welcome-two-img-1.jpg" alt="">
                                <div class="welcome-two__counter">
                                    <h3>3,880</h3>
                                    <p>Campaign <br> Funds</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Welcome Two End -->

        <!--Three Boxes Start-->
        <section class="three-boxes">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <!--Three Boxes Single-->
                        <div class="three-boxes__single wow fadeInLeft" data-wow-delay="100ms">
                            <div class="three-boxes__single-inner">
                                <div class="three-boxes__single-top">
                                    <div class="three-boxes_img">
                                        <img src="assets/images/resources/three-boxes-img-1.jpg" alt="">
                                    </div>
                                    <div class="three-boxes__content">
                                        <h3>More Charity</h3>
                                    </div>
                                </div>
                                <div class="three-boxes__sinlge-hover">
                                    <div class="three-boxes__sinlge-hover__img">
                                        <img src="assets/images/resources/three-boxes-hover-img-1.jpg" alt="">
                                        <div class="three-boxes__single-hover__content">
                                            <div class="three-boxes__single-hover__content-iocn">
                                                <span class="icon-support"></span>
                                            </div>
                                            <h3><a href="campaigns.html">More <br> Charity</a></h3>
                                            <p class="three-boxes__single-hover__content-text">Lorem ipsum dolor sit am
                                                adipi sicing elit, sed do consulting firms Et leggings.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Three Boxes Single-->
                        <div class="three-boxes__single wow fadeInLeft" data-wow-delay="200ms">
                            <div class="three-boxes__single-inner">
                                <div class="three-boxes__single-top">
                                    <div class="three-boxes_img">
                                        <img src="assets/images/resources/three-boxes-img-2.jpg" alt="">
                                    </div>
                                    <div class="three-boxes__content">
                                        <h3>Become
                                            Volunteer</h3>
                                    </div>
                                </div>
                                <div class="three-boxes__sinlge-hover">
                                    <div class="three-boxes__sinlge-hover__img">
                                        <img src="assets/images/resources/three-boxes-hover-img-1.jpg" alt="">
                                        <div class="three-boxes__single-hover__content">
                                            <div class="three-boxes__single-hover__content-iocn">
                                                <span class="icon-support"></span>
                                            </div>
                                            <h3><a href="become-volunteer.html">Become <br> Volunteer</a></h3>
                                            <p class="three-boxes__single-hover__content-text">Lorem ipsum dolor sit am
                                                adipi sicing elit, sed do consulting firms Et leggings.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Three Boxes Single-->
                        <div class="three-boxes__single wow fadeInLeft" data-wow-delay="300ms">
                            <div class="three-boxes__single-inner">
                                <div class="three-boxes__single-top">
                                    <div class="three-boxes_img">
                                        <img src="assets/images/resources/three-boxes-img-3.jpg" alt="">
                                    </div>
                                    <div class="three-boxes__content">
                                        <h3>Child Education</h3>
                                    </div>
                                </div>
                                <div class="three-boxes__sinlge-hover">
                                    <div class="three-boxes__sinlge-hover__img">
                                        <img src="assets/images/resources/three-boxes-hover-img-1.jpg" alt="">
                                        <div class="three-boxes__single-hover__content">
                                            <div class="three-boxes__single-hover__content-iocn">
                                                <span class="icon-support"></span>
                                            </div>
                                            <h3><a href="event.html">Child <br> Education</a></h3>
                                            <p class="three-boxes__single-hover__content-text">Lorem ipsum dolor sit am
                                                adipi sicing elit, sed do consulting firms Et leggings.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Three Boxes End-->

        <!--Testimonials Two Start-->
        <section class="testimonials-two jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%">
            <img src="assets/images/backgrounds/testimonials-two-bg.jpg" alt="" class="jarallax-img">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testimonials-two__carousel owl-theme owl-carousel">
                            <div class="testimonials-two__item">
                                <div class="testimonials-two__img">
                                    <div class="testimonials-two__img-shape"
                                        style="background-image: url(assets/images/shapes/testimonials-two-shape.png)">
                                    </div>
                                    <img src="assets/images/testimonials/testimonials_two-img-1.png" alt="">
                                    <div class="testimonials-two__quote">
                                        <img src="assets/images/testimonials/testimonials-two-icon-1.png" alt="">
                                    </div>
                                </div>
                                <div class="testimonials-two__text">
                                    <p>This is due to their excellent service, competitive pricing and customer support.
                                        It’s throughly refresing to get such a personal touch.</p>
                                    <h3>Mike Hardson</h3>
                                </div>
                            </div>
                            <div class="testimonials-two__item">
                                <div class="testimonials-two__img">
                                    <div class="testimonials-two__img-shape"
                                        style="background-image: url(assets/images/shapes/testimonials-two-shape.png)">
                                    </div>
                                    <img src="assets/images/testimonials/testimonials_two-img-2.png" alt="">
                                    <div class="testimonials-two__quote">
                                        <img src="assets/images/testimonials/testimonials-two-icon-1.png" alt="">
                                    </div>
                                </div>
                                <div class="testimonials-two__text">
                                    <p>This is due to their excellent service, competitive pricing and customer support.
                                        It’s throughly refresing to get such a personal touch.</p>
                                    <h3>Mike Hardson</h3>
                                </div>
                            </div>
                            <div class="testimonials-two__item">
                                <div class="testimonials-two__img">
                                    <div class="testimonials-two__img-shape"
                                        style="background-image: url(assets/images/shapes/testimonials-two-shape.png)">
                                    </div>
                                    <img src="assets/images/testimonials/testimonials_two-img-3.png" alt="">
                                    <div class="testimonials-two__quote">
                                        <img src="assets/images/testimonials/testimonials-two-icon-1.png" alt="">
                                    </div>
                                </div>
                                <div class="testimonials-two__text">
                                    <p>This is due to their excellent service, competitive pricing and customer support.
                                        It’s throughly refresing to get such a personal touch.</p>
                                    <h3>Mike Hardson</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonials Two End-->

        <!--Featured Campaigns Start-->
        <section class="featured-campaigns">
            <div class="container">
                <div class="block-title text-left">
                    <h4>Donate Right Now</h4>
                    <h2>Featured Campaigns</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="featured-campaigns__carousel owl-theme owl-carousel">
                            <!--Featured Campaigns Single-->
                            <div class="featured-campaigns__single">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="featured-campaigns__img-box">
                                            <div class="featured-campaigns__img">
                                                <img src="assets/images/resources/featured-campaigns-img-1.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="featured-campaigns__content_box">
                                            <div class="featured-campaigns__Category">
                                                <p>Education</p>
                                            </div>
                                            <div class="featured-campaigns__title">
                                                <h3><a href="event-details.html">Raise Funds for Clean & Fresh Water for
                                                        Africa</a></h3>
                                                <p class="featured-campaigns__text-box">Aliq is notm hendr erit a augue
                                                    insu image pellen tes. many variations of passage of lorem ipsum
                                                    available but the majority have suffered.</p>
                                            </div>
                                            <div class="featured-campaigns__progress">
                                                <div class="bar">
                                                    <div class="bar-inner count-bar" data-percent="36%">
                                                        <div class="count-text">36%</div>
                                                    </div>
                                                </div>
                                                <div class="featured-campaigns__goals">
                                                    <p><span>$25,270</span> Raised</p>
                                                    <p><span>$30,000</span> Goal</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Featured Campaigns Single-->
                            <div class="featured-campaigns__single">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="featured-campaigns__img-box">
                                            <div class="featured-campaigns__img">
                                                <img src="assets/images/resources/featured-campaigns-img-1.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="featured-campaigns__content_box">
                                            <div class="featured-campaigns__Category">
                                                <p>Education</p>
                                            </div>
                                            <div class="featured-campaigns__title">
                                                <h3><a href="event-details.html">Raise Funds for Clean & Fresh Water for
                                                        Africa</a></h3>
                                                <p class="featured-campaigns__text-box">Aliq is notm hendr erit a augue
                                                    insu image pellen tes. many variations of passage of lorem ipsum
                                                    available but the majority have suffered.</p>
                                            </div>
                                            <div class="featured-campaigns__progress">
                                                <div class="bar">
                                                    <div class="bar-inner count-bar" data-percent="36%">
                                                        <div class="count-text">36%</div>
                                                    </div>
                                                </div>
                                                <div class="featured-campaigns__goals">
                                                    <p><span>$25,270</span> Raised</p>
                                                    <p><span>$30,000</span> Goal</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Featured Campaigns Single-->
                            <div class="featured-campaigns__single">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="featured-campaigns__img-box">
                                            <div class="featured-campaigns__img">
                                                <img src="assets/images/resources/featured-campaigns-img-1.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="featured-campaigns__content_box">
                                            <div class="featured-campaigns__Category">
                                                <p>Education</p>
                                            </div>
                                            <div class="featured-campaigns__title">
                                                <h3><a href="event-details.html">Raise Funds for Clean & Fresh Water for
                                                        Africa</a></h3>
                                                <p class="featured-campaigns__text-box">Aliq is notm hendr erit a augue
                                                    insu image pellen tes. many variations of passage of lorem ipsum
                                                    available but the majority have suffered.</p>
                                            </div>
                                            <div class="featured-campaigns__progress">
                                                <div class="bar">
                                                    <div class="bar-inner count-bar" data-percent="36%">
                                                        <div class="count-text">36%</div>
                                                    </div>
                                                </div>
                                                <div class="featured-campaigns__goals">
                                                    <p><span>$25,270</span> Raised</p>
                                                    <p><span>$30,000</span> Goal</p>
                                                </div>
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
        <!--Featured Campaigns End-->

        <!--Gallery Three Start-->
        <section class="gallery-tow gallery-three">
            <div class="gallery-tow__container">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 20, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                    "0": {
                        "spaceBetween": 0,
                        "slidesPerView": 1
                    },
                    "575": {
                        "spaceBetween": 20,
                        "slidesPerView": 2
                    },
                    "767": {
                        "spaceBetween": 20,
                        "slidesPerView": 3
                    },
                    "991": {
                        "spaceBetween": 20,
                        "slidesPerView": 4
                    },
                    "1199": {
                        "spaceBetween": 20,
                        "slidesPerView": 5
                    }
                }}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!--Gallery Two Single-->
                            <div class="gallery-tow__single">
                                <div class="gallery-tow__img">
                                    <img src="assets/images/gallery/gallery_one_img_1.jpg" alt="">
                                    <div class="gallery-two__hover">
                                        <h2>Small Help</h2>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Charity</a></li>
                                            <li><span>/</span></li>
                                            <li><a href="#">Donation</a></li>
                                        </ul>
                                        <a href="assets/images/gallery/gallery_one_img_1.jpg" class="img-popup"><i
                                                class="fa fa-plus"></i></a><!-- /.img-popup -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!--Gallery Two Single-->
                            <div class="gallery-tow__single">
                                <div class="gallery-tow__img">
                                    <img src="assets/images/gallery/gallery_one_img_2.jpg" alt="">
                                    <div class="gallery-two__hover">
                                        <h2>Small Help</h2>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Charity</a></li>
                                            <li><span>/</span></li>
                                            <li><a href="#">Donation</a></li>
                                        </ul>
                                        <a href="assets/images/gallery/gallery_one_img_2.jpg" class="img-popup"><i
                                                class="fa fa-plus"></i></a><!-- /.img-popup -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!--Gallery Two Single-->
                            <div class="gallery-tow__single">
                                <div class="gallery-tow__img">
                                    <img src="assets/images/gallery/gallery_one_img_3.jpg" alt="">
                                    <div class="gallery-two__hover">
                                        <h2>Small Help</h2>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Charity</a></li>
                                            <li><span>/</span></li>
                                            <li><a href="#">Donation</a></li>
                                        </ul>
                                        <a href="assets/images/gallery/gallery_one_img_3.jpg" class="img-popup"><i
                                                class="fa fa-plus"></i></a><!-- /.img-popup -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!--Gallery Two Single-->
                            <div class="gallery-tow__single">
                                <div class="gallery-tow__img">
                                    <img src="assets/images/gallery/gallery_one_img_4.jpg" alt="">
                                    <div class="gallery-two__hover">
                                        <h2>Small Help</h2>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Charity</a></li>
                                            <li><span>/</span></li>
                                            <li><a href="#">Donation</a></li>
                                        </ul>
                                        <a href="assets/images/gallery/gallery_one_img_4.jpg" class="img-popup"><i
                                                class="fa fa-plus"></i></a><!-- /.img-popup -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!--Gallery Two Single-->
                            <div class="gallery-tow__single">
                                <div class="gallery-tow__img">
                                    <img src="assets/images/gallery/gallery_one_img_4.jpg" alt="">
                                    <div class="gallery-two__hover">
                                        <h2>Small Help</h2>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Charity</a></li>
                                            <li><span>/</span></li>
                                            <li><a href="#">Donation</a></li>
                                        </ul>
                                        <a href="assets/images/gallery/gallery_one_img_4.jpg" class="img-popup"><i
                                                class="fa fa-plus"></i></a><!-- /.img-popup -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end swiper wrapper -->
                </div>
            </div>
        </section>
        <!--Gallery Three End-->

        <!--Brand Three Start-->
        <div class="brand-two brand-three jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 0%"
            data-imgSize="cover">
            <img src="assets/images/backgrounds/brand-three-bg.jpg" alt="" class="jarallax-img">

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
                            <img src="assets/images/brand/brand_1_img_1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand_1_img_2.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand_1_img_3.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand_1_img_4.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand_1_img_5.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand_1_img_1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand_1_img_2.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand_1_img_3.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand_1_img_4.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand_1_img_5.png" alt="">
                        </div><!-- /.swiper-slide -->
                    </div>
                </div>
            </div>
        </div>
        <!--Brand Three End-->

        <!--Make Donation Start-->
        <section class="make-donation">
            <div class="make-donation-bg" style="background-image: url(assets/images/backgrounds/make-donation-bg.png)">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="make-donation__left">
                            <div class="make-donation__top">
                                <div class="make-donation__top-text">
                                    <h3>The Largest Global <br> Non-Profit & Crowdfunding <br> Community</h3>
                                </div>
                                <div class="make-donation__top-icon">
                                    <span class="icon-charity-1"></span>
                                </div>
                            </div>
                            <div class="make-donation__bottom">
                                <div class="block-title text-left">
                                    <h4>Make a Donation</h4>
                                    <h2>We Make a Difference in their Life</h2>
                                </div>
                                <p class="make-donation__text">Tincidunt elit magnis nulla facilisis sagittis is
                                    maecenas. Sapien nunced amet ultrices, dolores sit ipsum velit purus aliquet, massa
                                    fringilla leo orci.</p>
                                <div class="make-donation__progress">
                                    <div class="make-donation__progress-single">
                                        <h4 class="make-donation__progress-title">Funding</h4>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="83%">
                                                <div class="count-text">83%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="make-donation__progress-single">
                                        <h4 class="make-donation__progress-title">Donations</h4>
                                        <div class="bar mrb-0">
                                            <div class="bar-inner count-bar" data-percent="66%">
                                                <div class="count-text">66%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="make-donation__right">
                            <div class="make-donation__img">
                                <img src="assets/images/resources/make-donation-img-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Make Donation End-->

        <!--News One Start-->
        <section class="news-one news-three">
            <div class="container">
                <div class="block-title text-center">
                    <h4>From the Blog</h4>
                    <h2>News & Articles</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <!--News Three Single-->
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <div class="news-one__img-box">
                                    <img src="assets/images/blog/news_one_img_1.jpg" alt="">
                                    <a href="news-details.html"></a>
                                </div>
                                <div class="news-one__date-box">
                                    <p>23 <br> Dec</p>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>
                                    <li><span>/</span></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 2 Comments</a>
                                    </li>
                                </ul>
                                <div class="news-one__title">
                                    <h3><a href="news-details.html">Bring to the table win-win survival</a></h3>
                                </div>
                                <a href="news-details.html" class="thm-btn news-one__btn">More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <!--News Three Single-->
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <div class="news-one__img-box">
                                    <img src="assets/images/blog/news_one_img_2.jpg" alt="">
                                    <a href="news-details.html"></a>
                                </div>
                                <div class="news-one__date-box">
                                    <p>23 <br> Dec</p>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>
                                    <li><span>/</span></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 2 Comments</a>
                                    </li>
                                </ul>
                                <div class="news-one__title">
                                    <h3><a href="news-details.html">Capitalize on low hanging fruit to identify</a></h3>
                                </div>
                                <a href="news-details.html" class="thm-btn news-one__btn">More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <!--News Three  Single-->
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <div class="news-one__img-box">
                                    <img src="assets/images/blog/news_one_img_3.jpg" alt="">
                                    <a href="news-details.html"></a>
                                </div>
                                <div class="news-one__date-box">
                                    <p>23 <br> Dec</p>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>
                                    <li><span>/</span></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 2 Comments</a>
                                    </li>
                                </ul>
                                <div class="news-one__title">
                                    <h3><a href="news-details.html">How Does Malnutrition Affect Children?</a></h3>
                                </div>
                                <a href="news-details.html" class="thm-btn news-one__btn">More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--News One End-->

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
                                <a href="become-volunteer.html" class="thm-btn">Get Involved Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--CTA Two End-->

        <!--Google Map Start-->
        <section class="google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                class="google-map__contact" allowfullscreen></iframe>

        </section>
        <!--Google Map End-->

@endsection
