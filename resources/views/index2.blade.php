@extends("layouts.web")
@section("content")


        <!-- Main Slider Start -->
        <section class="main-slider main-slider-two">
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
                            style="background-image: url(assets/images/main-slider/slider-2-1.jpg);"></div>
                        <div class="container">
                            <div class="swiper-slide__inner">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <p>Helping Them Today</p>
                                        <h2>We Can Make <br> A Difference</h2>
                                        <a href="about.html" class="thm-btn">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/main-slider/slider-2-2.jpg);"></div>
                        <div class="container">
                            <div class="swiper-slide__inner">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <p>Helping Them Today</p>
                                        <h2>We Can Make <br> A Difference</h2>
                                        <a href="about.html" class="thm-btn">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/main-slider/slider-2-1.jpg);"></div>
                        <div class="container">
                            <div class="swiper-slide__inner">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <p>Helping Them Today</p>
                                        <h2>We Can Make <br> A Difference</h2>
                                        <a href="about.html" class="thm-btn">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination" id="main-slider-pagination"></div>
            </div>
        </section>
        <!-- Main Slider End -->

        <!--Give Helping Start-->
        <section class="give-helping">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="give-helping__first-item">
                            <div class="block-title text-left">
                                <h4>Introductions</h4>
                                <h2>Give a Helping Hand Needy</h2>
                            </div>
                            <p class="give-helping__first-item__text">There are many variations of Ipsum available, but
                                the majority have suffered alteration in some form, by injected humour.</p>
                            <a href="#" class="thm-btn give-helping__first-item__btn">Learn More</a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="give-helping__two-boxes">
                            <div class="give-helping__two-boxes__img">
                                <img src="assets/images/resources/give-helping-two-boxs-img.jpg" alt="">
                                <div class="give-helping__two-boxes__text">
                                    <p><a href="become-volunteer.html">Join Our <br> Volunteers</a></p>
                                </div>
                            </div>
                            <div class="give-helping__two-boxes__img">
                                <img src="assets/images/resources/give-helping-two-boxs-img.jpg" alt="">
                                <div class="give-helping__two-boxes__text">
                                    <p><a href="become-volunteer.html">Food & Water <br>
                                            Charity</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="give-helping__cause">
                            <div class="give-helping__cause-shape"
                                style="background-image: url(assets/images/shapes/give-helping__cause-shape.png)"></div>
                            <div class="give-helping__cause-title">
                                <h3>Help Children Rise Out of Poverty</h3>
                                <p>Dignissim cras tincidunt lobortis feugiat vivam at augue eget. Id consectetur purus
                                    orci.</p>
                            </div>
                            <div class="give-helping__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="36%">
                                        <div class="count-text">36%</div>
                                    </div>
                                </div>
                                <div class="give-helping__goals">
                                    <p><span>$25,270</span> Raised</p>
                                    <p><span>$30,000</span> Goal</p>
                                </div>
                                <div class="give-helping__btn">
                                    <a href="campaigns.html"><i class="fas fa-heart"></i>Donate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Give Helping End-->

        <!--Popular Causes Start-->
        <section class="popular-causes-two">
            <div class="container">
                <div class="block-title text-center">
                    <h4>Help the People</h4>
                    <h2>Our Popular Causes</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <!--Popular Causes Single-->
                        <div class="popular-causes__sinlge">
                            <div class="popular-causes__img">
                                <img src="assets/images/resources/popular-causes-two-1.jpg" alt="">
                                <div class="popular-causes__category">
                                    <p>Food</p>
                                </div>
                            </div>
                            <div class="popular-causes__content">
                                <div class="popular-causes__title">
                                    <h3><a href="campaign-details.html">Raise Fund for Clean & Healthy Water</a></h3>
                                    <p>Aliq is notm hendr erit a augue insu image pellen tes.</p>
                                </div>
                                <div class="popular-causes__progress">
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="36%">
                                            <div class="count-text">36%</div>
                                        </div>
                                    </div>
                                    <div class="popular-causes__goals">
                                        <p><span>$25,270</span> Raised</p>
                                        <p><span>$30,000</span> Goal</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <!--Popular Causes Single-->
                        <div class="popular-causes__sinlge">
                            <div class="popular-causes__img">
                                <img src="assets/images/resources/popular-causes-two-2.jpg" alt="">
                                <div class="popular-causes__category">
                                    <p>Education</p>
                                </div>
                            </div>
                            <div class="popular-causes__content">
                                <div class="popular-causes__title">
                                    <h3><a href="campaign-details.html">School Counseling for Children</a></h3>
                                    <p>Aliq is notm hendr erit a augue insu image pellen tes.</p>
                                </div>
                                <div class="popular-causes__progress">
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="36%">
                                            <div class="count-text">36%</div>
                                        </div>
                                    </div>
                                    <div class="popular-causes__goals">
                                        <p><span>$25,270</span> Raised</p>
                                        <p><span>$30,000</span> Goal</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <!--Popular Causes Single-->
                        <div class="popular-causes__sinlge">
                            <div class="popular-causes__img">
                                <img src="assets/images/resources/popular-causes-two-3.jpg" alt="">
                                <div class="popular-causes__category">
                                    <p>Education</p>
                                </div>
                            </div>
                            <div class="popular-causes__content">
                                <div class="popular-causes__title">
                                    <h3><a href="campaign-details.html">Growing Up children in Charity Care</a></h3>
                                    <p>Aliq is notm hendr erit a augue insu image pellen tes.</p>
                                </div>
                                <div class="popular-causes__progress">
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="36%">
                                            <div class="count-text">36%</div>
                                        </div>
                                    </div>
                                    <div class="popular-causes__goals">
                                        <p><span>$25,270</span> Raised</p>
                                        <p><span>$30,000</span> Goal</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Popular Causes One End-->

        <!-- You Can Help Start -->
        <section class="you-can-help" style="background-image: url(assets/images/backgrounds/you_can_help_bg.jpg)">
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
                                            <span class="icon-water-1"></span>
                                        </div>
                                        <div class="text">
                                            <p>Water</p>
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
        <!-- You Can Help End -->

        <!--Counter One Start-->
        <section class="counter-one jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
            style="background-image: url(assets/images/backgrounds/counter_one_bg.jpg)">
            <div class="container">
                <ul class="counter-one__box list-unstyled">
                    <li class="counter-one__single wow fadeInLeft" data-wow-delay="100ms">
                        <div class="counter-one__icon">
                            <i class="icon-campaign"></i>
                        </div>
                        <h3 class="counter">4850</h3>
                        <p class="counter-one__text">Successful Campaigns</p>
                    </li>
                    <li class="counter-one__single wow fadeInLeft" data-wow-delay="200ms">
                        <div class="counter-one__icon">
                            <i class="icon-budget"></i>
                        </div>
                        <h3 class="counter">3456</h3>
                        <p class="counter-one__text">Raised Funds</p>
                    </li>
                    <li class="counter-one__single wow fadeInLeft" data-wow-delay="300ms">
                        <div class="counter-one__icon">
                            <i class="icon-social-campaign"></i>
                        </div>
                        <h3 class="counter">460</h3>
                        <p class="counter-one__text">Satisfied Donors</p>
                    </li>
                    <li class="counter-one__single wow fadeInLeft" data-wow-delay="400ms">
                        <div class="counter-one__icon">
                            <i class="icon-help"></i>
                        </div>
                        <h3 class="counter">2060</h3>
                        <p class="counter-one__text">Best Volunteers</p>
                    </li>
                </ul>
            </div>
        </section>
        <!--Counter One End-->

        <!--Charity Activity Start-->
        <section class="charity-activity">
            <div class="charity-activity-map" style="background-image: url(assets/images/map/charity_activity_map.png)">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
                        <div class="charity-activity__left">
                            <div class="charity-activity__img">
                                <img src="assets/images/resources/charity_activity_img.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="charity-activity__right">
                            <div class="charity-activity__right-content">
                                <h2>Charity activities are taken place around the world</h2>
                                <p>Dignissim cras tincidunt lobortis feugiat vivam at augue eget. Id not lorem ipsum is
                                    simply free text available.</p>
                                <a href="event-details.html" class="thm-btn charity-activity__btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Charity Activity End-->

        <!--Meet Volunteers One Start-->
        <section class="meet-volunteers-one">
            <div class="meet-volunteers-one-bg"
                style="background-image: url(assets/images/backgrounds/meet-volunteers-one-bg.png)"></div>
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
            </div>
        </section>
        <!--Meet Volunteers One End-->

        <!--CTA One Start-->
        <section class="cta-one" style="background-image: url(assets/images/backgrounds/cta-one-bg.jpg)">
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
        <!--CTA One End-->

        <!--Gallery Three Start-->
        <section class="gallery-tow gallery-three gallery-home-two">
            <div class="gallery-tow__container gallery-three__contianer">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"loop": true, "spaceBetween": 6, "slidesPerView": 1, "autoplay": { "delay": 5000 }, "breakpoints": {
                    "0": {
                        "spaceBetween": 0,
                        "slidesPerView": 1
                    },
                    "375": {
                        "slidesPerView": 1
                    },
                    "575": {
                        "slidesPerView": 2
                    },
                    "767": {
                        "slidesPerView": 3
                    },
                    "991": {
                        "slidesPerView": 4
                    }
                }}'>
                    <!-- swiper wrapper -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!--Gallery Two Single-->
                            <div class="gallery-tow__single">
                                <div class="gallery-tow__img">
                                    <img src="assets/images/gallery/gallery-two-img-1.jpg" alt="">
                                    <div class="gallery-two__hover">
                                        <h2>Small Help</h2>
                                        <ul class="list-unstyled">
                                            <li><a href="event-details.html">Charity</a></li>
                                            <li><span>/</span></li>
                                            <li><a href="event-details.html">Donation</a></li>
                                        </ul>
                                        <a href="assets/images/gallery/gallery-two-img-1.jpg" class="img-popup"><i
                                                class="fa fa-plus"></i></a><!-- /.img-popup -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!--Gallery Two Single-->
                            <div class="gallery-tow__single">
                                <div class="gallery-tow__img">
                                    <img src="assets/images/gallery/gallery-two-img-2.jpg" alt="">
                                    <div class="gallery-two__hover">
                                        <h2>Small Help</h2>
                                        <ul class="list-unstyled">
                                            <li><a href="event-details.html">Charity</a></li>
                                            <li><span>/</span></li>
                                            <li><a href="event-details.html">Donation</a></li>
                                        </ul>
                                        <a href="assets/images/gallery/gallery-two-img-2.jpg" class="img-popup"><i
                                                class="fa fa-plus"></i></a><!-- /.img-popup -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!--Gallery Two Single-->
                            <div class="gallery-tow__single">
                                <div class="gallery-tow__img">
                                    <img src="assets/images/gallery/gallery-two-img-3.jpg" alt="">
                                    <div class="gallery-two__hover">
                                        <h2>Small Help</h2>
                                        <ul class="list-unstyled">
                                            <li><a href="event-details.html">Charity</a></li>
                                            <li><span>/</span></li>
                                            <li><a href="event-details.html">Donation</a></li>
                                        </ul>
                                        <a href="assets/images/gallery/gallery-two-img-3.jpg" class="img-popup"><i
                                                class="fa fa-plus"></i></a><!-- /.img-popup -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!--Gallery Two Single-->
                            <div class="gallery-tow__single">
                                <div class="gallery-tow__img">
                                    <img src="assets/images/gallery/gallery-two-img-4.jpg" alt="">
                                    <div class="gallery-two__hover">
                                        <h2>Small Help</h2>
                                        <ul class="list-unstyled">
                                            <li><a href="event-details.html">Charity</a></li>
                                            <li><span>/</span></li>
                                            <li><a href="event-details.html">Donation</a></li>
                                        </ul>
                                        <a href="assets/images/gallery/gallery-two-img-4.jpg" class="img-popup"><i
                                                class="fa fa-plus"></i></a><!-- /.img-popup -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.swiper-wrapper -->
                </div>
                <!-- end .thm-swiper__slider -->
            </div>
        </section>
        <!--Gallery Three End-->

        <!--Events And Newsletter Start-->
        <section class="events-and-newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="block-title text-left">
                            <h4>List of Events</h4>
                            <h2>Upcoming Events</h2>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <a href="#" class="thm-btn events-and-newsletter__btn">All Events</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="upcoming-events">
                            <!--Upcoming Events Single-->
                            <div class="upcoming-events__sinlge">
                                <div class="upcoming-events__img-box">
                                    <div class="upcoming-events__img">
                                        <img src="assets/images/event/upcoming-event-img-1.jpg" alt="">
                                    </div>
                                    <div class="upcoming-events__date-box">
                                        <p>23 <br> Dec</p>
                                    </div>
                                </div>
                                <div class="upcoming-events__content">
                                    <ul class="upcoming-events__meta-box list-unstyled">
                                        <li><i class="far fa-clock"></i>04:00 am</li>
                                        <li><span>/</span></li>
                                        <li><i class="far fa-map"></i>66 broklyn Street, New York</li>
                                    </ul>
                                    <div class="upcoming-events__title">
                                        <h3><a href="event-details.html">Mission for Fresh & Clean Water</a></h3>
                                    </div>
                                    <p class="upcoming-events__text">Dignissim cras tincidunt lorem ipsum is simply free
                                        text feugiat at augue. Id purus integer orci.</p>
                                </div>
                            </div>
                            <!--Upcoming Events Single-->
                            <div class="upcoming-events__sinlge">
                                <div class="upcoming-events__img-box">
                                    <div class="upcoming-events__img">
                                        <img src="assets/images/event/upcoming-event-img-2.jpg" alt="">
                                    </div>
                                    <div class="upcoming-events__date-box">
                                        <p>23 <br> Dec</p>
                                    </div>
                                </div>
                                <div class="upcoming-events__content">
                                    <ul class="upcoming-events__meta-box list-unstyled">
                                        <li><i class="far fa-clock"></i>04:00 am</li>
                                        <li><span>/</span></li>
                                        <li><i class="far fa-map"></i>66 broklyn Street, New York</li>
                                    </ul>
                                    <div class="upcoming-events__title">
                                        <h3><a href="event-details.html">Mission for Fresh & Clean Water</a></h3>
                                    </div>
                                    <p class="upcoming-events__text">Dignissim cras tincidunt lorem ipsum is simply free
                                        text feugiat at augue. Id purus integer orci.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="events-and-newsletter__newsletter">
                            <div class="events-and-newsletter__newsletter-title">
                                <h2>Newsletter</h2>
                                <p>Get all the latest updates</p>
                            </div>
                            <form action="#" class="events-and-newsletter__newsletter-form">
                                <div class="events-and-newsletter__newsletter-input-box">
                                    <input type="text" placeholder="Your name">
                                </div>
                                <div class="events-and-newsletter__newsletter-input-box">
                                    <input type="email" placeholder="Email address">
                                </div>
                                <button type="submit" class="thm-btn events-and-newsletter__subscribe-btn">Subscribe
                                    Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Events And Newsletter Start-->

        <!--News Two Start-->
        <section class="news-two" style="background-image: url(assets/images/backgrounds/news-two-bg.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="news-two__left">
                            <div class="block-title text-left">
                                <h4>From the Blog</h4>
                                <h2>Latest News <br> & Articles</h2>
                            </div>
                            <p class="news-two__text">There are many variations of passages of Lorem Ipsum available
                                simply free text, but the majority.</p>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="news-two__right">
                            <div class="news-two__carousel owl-theme owl-carousel">
                                <!--News two Single-->
                                <div class="news-one__single">
                                    <div class="news-one__img">
                                        <div class="news-one__img-box">
                                            <img src="assets/images/blog/news-two-img-1.jpg" alt="">
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
                                            <h3><a href="news-details.html">How Does Malnutrition Affect Children?</a>
                                            </h3>
                                        </div>
                                        <a href="news-details.html" class="thm-btn news-one__btn">More</a>
                                    </div>
                                </div>
                                <!--News two Single-->
                                <div class="news-one__single">
                                    <div class="news-one__img">
                                        <div class="news-one__img-box">
                                            <img src="assets/images/blog/news-two-img-2.jpg" alt="">
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
                                            <h3><a href="news-details.html">Leverage agile frameworks to provide a.</a>
                                            </h3>
                                        </div>
                                        <a href="news-details.html" class="thm-btn news-one__btn">More</a>
                                    </div>
                                </div>
                                <!--News two Single-->
                                <div class="news-one__single">
                                    <div class="news-one__img">
                                        <div class="news-one__img-box">
                                            <img src="assets/images/blog/news-two-img-3.jpg" alt="">
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
                                            <h3><a href="news-details.html">Bring to the table win-win survival
                                                    strategies.</a>
                                            </h3>
                                        </div>
                                        <a href="news-details.html" class="thm-btn news-one__btn">More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--News Two End-->

        <!--Brand Two Start-->
        <div class="brand-two">
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
        <!--Brand Two End-->

@endsection
