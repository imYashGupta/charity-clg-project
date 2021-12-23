@extends("layouts.web")
@section("content")
  <!-- Main Slider Start -->
  <section class="main-slider">
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
                    style="background-image: url(assets/images/main-slider/slider-1-1.jpg);"></div>
                <div class="container">
                    <div class="swiper-slide__inner">
                        <div class="row">
                            <div class="col-xl-12">
                                <p>Helping Them Today</p>
                                <h2>Help the Poor <br> in Need</h2>
                                <a href="about.html" class="thm-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url(assets/images/main-slider/slider-1-2.jpg);"></div>
                <div class="container">
                    <div class="swiper-slide__inner">
                        <div class="row">
                            <div class="col-xl-12">
                                <p>Helping Them Today</p>
                                <h2>Believe in helping<br>others</h2>
                                <a href="about.html" class="thm-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           {{--  <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url(assets/images/main-slider/slider-1-3.jpg);"></div>
                <div class="container">
                    <div class="swiper-slide__inner">
                        <div class="row">
                            <div class="col-xl-12">
                                <p>Helping Them Today</p>
                                <h2>Help the Poor <br> in Need</h2>
                                <a href="about.html" class="thm-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="swiper-pagination" id="main-slider-pagination"></div>
        <div class="main-slider-nav">
            <div class="main-slider-button-prev"><span class="icon-right-arrow"></span></div>
            <div class="main-slider-button-next"><span class="icon-right-arrow"></span> </div>
        </div>
    </div>
</section>
<!-- Main Slider End -->

<!--Three Icon Start-->
<section class="feature-one">
    <div class="container">
        <div class="feature-one__inner">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <!--Three Icon Single-->
                    <div class="feature-one__single feature-one__single-first-item">
                        <div class="feature-one__icon-wrap">
                            <div class="feature-one__icon-box">
                                <span class="icon-heart"></span>
                                <div class="feature-one__icon-box-img">
                                    <img src="assets/images/resources/three_iocn_box_bg.png" alt="">
                                </div>
                            </div>
                            <div class="feature-one__icon-text-box">
                                <h4>Become <br> Volunteer</h4>
                            </div>
                        </div>
                        <p class="feature-one__icons-single-text">
                            Volunteering your time, money or energy to help others doesn't just make the world better it also makes you better.
                             {{-- The very act of giving back to the community boosts your happiness, health, and sense of well-being!" --}}
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <!--Three Icon Single-->
                    <div class="feature-one__single feature-one__single-second-item">
                        <div class="feature-one__icon-wrap">
                            <div class="feature-one__icon-box feature-one__icon-box-two">
                                <span class="icon-wallet-filled-money-tool"></span>
                                <div class="feature-one__icon-box-img">
                                    <img src="assets/images/resources/three_iocn_box_bg-2.png" alt="">
                                </div>
                            </div>
                            <div class="feature-one__icon-text-box">
                                <h4>Quick <br> Fundraise</h4>
                            </div>
                        </div>
                        <p class="feature-one__icons-single-text">
                            The efforts of one person can't move mountains. It's the strength of us all working together that makes a change.
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <!--Three Icon Single-->
                    <div class="feature-one__single feature-one__single-third-item">
                        <div class="feature-one__icon-wrap">
                            <div class="feature-one__icon-box feature-one__icon-box-three">
                                <span class="icon-charity"></span>
                                <div class="feature-one__icon-box-img">
                                    <img src="assets/images/resources/three_iocn_box_bg-3.png" alt="">
                                </div>
                            </div>
                            <div class="feature-one__icon-text-box">
                                <h4>Start <br> Donating</h4>
                            </div>
                        </div>
                        <p class="feature-one__icons-single-text">
                            A little help with a little smile gives meaning to human life.
                            Help those less fortunate than you, for it is real human existence.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Three Icon End-->

<!--Welcome One Start-->
<section class="welcome-one" style="background-image: url(assets/images/backgrounds/welcome_one_bg.jpg)">
    <div class="welcome-one-hands"
        style="background-image:url(assets/images/backgrounds/welcome_one_hands.png)"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="welcome-one__left">
                    <div class="welcome-one__img wow slideInLeft" data-wow-delay="100ms">
                        <img src="assets/images/resources/welcome_one_img_1.jpg" alt="">
                        <div class="welcome-one__badge">
                            <img src="assets/images/resources/welcome_one_badge.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="welcome-one__right">
                    <div class="block-title text-left">
                        <h4>Helping Today</h4>
                        <h2>Our Goal is to Help Poor People</h2>
                    </div>
                    <p class="welcome-one__text">Living for others is a rule of nature. We are all born to help each other. No matter how difficult it is. Life is good when you are happy; but much better when others are happy because of you.</p>
                    <ul class="welcome-one__list list-unstyled">
                        <li><span class="icon-confirmation"></span>Do it yourself,Person to person</li>
                        <li><span class="icon-confirmation"></span>Let's help poor people.</li>
                        <li><span class="icon-confirmation"></span>Believe in helping others.</li>
                    </ul>
                    <div class="welcome-one__campaigns">
                        <div class="iocn">
                            <span class="icon-donation"></span>
                        </div>
                        <div class="text">
                            <h2 class="counter">86,700</h2>
                            <p>Fund Raised</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Welcome One End-->

<!--Popular Causes Start-->
<section class="popular-causes">
    <div class="container">
        <div class="block-title text-left">
            <h4>Help the People</h4>
            <h2>Our Popular Causes</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="popular-causes__carousel owl-theme owl-carousel">
                    <!--Popular Causes Single-->
                    <div class="popular-causes__sinlge">
                        <div class="popular-causes__img">
                            <img src="assets/images/resources/popular-causes-img-1.jpg" alt="">
                            <div class="popular-causes__category">
                                <p>Food</p>
                            </div>
                        </div>
                        <div class="popular-causes__content">
                            <div class="popular-causes__title">
                                <h3><a href="campaign-details.html">Helping people living on the sidewalk</a>
                                </h3>
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
                    <!--Popular Causes Single-->
                    <div class="popular-causes__sinlge">
                        <div class="popular-causes__img">
                            <img src="assets/images/resources/popular-causes-img-2.jpg" alt="">
                            <div class="popular-causes__category">
                                <p>Education</p>
                            </div>
                        </div>
                        <div class="popular-causes__content">
                            <div class="popular-causes__title">
                                <h3><a href="campaign-details.html">Promoting skills of under privileged children.</a>
                                </h3>
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
                    <!--Popular Causes Single-->
                    <div class="popular-causes__sinlge">
                        <div class="popular-causes__img">
                            <img src="assets/images/resources/popular-causes-img-3.jpg" alt="">
                            <div class="popular-causes__category">
                                <p>Food</p>
                            </div>
                        </div>
                        <div class="popular-causes__content">
                            <div class="popular-causes__title">
                                <h3><a href="campaign-details.html">Providing essential medication to poor.</a>
                                </h3>
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
                    <!--Popular Causes Single-->
                   {{--  <div class="popular-causes__sinlge">
                        <div class="popular-causes__img">
                            <img src="assets/images/resources/popular-causes-img-4.jpg" alt="">
                            <div class="popular-causes__category">
                                <p>Education</p>
                            </div>
                        </div>
                        <div class="popular-causes__content">
                            <div class="popular-causes__title">
                                <h3><a href="campaign-details.html">School Counseling for Children</a>
                                </h3>
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
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!--Popular Causes One End-->

<!--We Are Helping Start-->
<section class="we-are-helping jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
    style="background-image: url(assets/images/backgrounds/we_are_helping_bg.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="we-are-helping__left">
                    <div class="block-title text-left">
                        <h4>Helping Today</h4>
                        <h2>We’re Helping People in Need Around the World</h2>
                    </div>
                    <div class="we-are-helping__video">
                        <a href="https://www.youtube.com/watch?v=i9E_Blai8vk"
                            class="we-are-helping__video-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                    <div class="we-are-helping__arrow">
                        <img src="assets/images/shapes/we_are_helping_arrow.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="we-are-helping__points">
                    <ul class="list-unstyled">
                        <li>
                            <div class="icon">
                                <span class="icon-salad"></span>
                            </div>
                            <div class="text">
                                <h4>Healthy Food</h4>
                                <p>There are many variations of but the majority have simply free text suffered.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-water"></span>
                            </div>
                            <div class="text">
                                <h4>Clean Water</h4>
                                <p>There are many variations of but the majority have simply free text suffered.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--We Are Helping End-->

<!--We Need Help Start-->
<section class="we-need-help">
    <div class="we-nned-help-bg">
        <img src="assets/images/resources/we_need_help_bg.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="we-need-help__left">
                    <div class="block-title text-left">
                        <h4>Asked Quesitons</h4>
                        <h2>We Need Your Help</h2>
                    </div>
                    <div class="we-need-help__faqs">
                        <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>How to process the charity functions?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>There are many variations of passages of available but the majority
                                            have suffered alteration in that some form by words which don’t look
                                            even as slightly believable now.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>How to process the charity functions?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>There are many variations of passages of available but the majority
                                            have suffered alteration in that some form by words which don’t look
                                            even as slightly believable now.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>How to process the charity functions?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>There are many variations of passages of available but the majority
                                            have suffered alteration in that some form by words which don’t look
                                            even as slightly believable now.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="we-need-help__right">
                    <div class="we-need-help__img">
                        <img src="assets/images/resources/we_need_help_img.jpg" alt="">
                        <div class="we-need-help__give">
                            <div class="icon">
                                <span class="icon-charity-1"></span>
                            </div>
                            <div class="text">
                                <h4>Let’s Give us your <br> Helping Hand</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--We Need Help End-->

<!--Testimonials One Start-->
<section class="testimonials-one">
    <div class="testimonials-one-bg"
        style="background-image: url(assets/images/backgrounds/testimonials_one_bg.jpg)"></div>
    <div class="testimonials-one__container-box">
        <div class="block-title text-center">
            <h4>Happy People</h4>
            <h2>What They Say</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 4, "autoplay": { "delay": 5000 }, "pagination": {
        "el": "#testimonials-one__pagination",
        "type": "bullets",
        "clickable": true
      },
      "navigation": {
        "nextEl": ".latest_properties_next",
        "prevEl": ".latest_properties_prev",
        "clickable": true
    },
    "breakpoints": {
        "0": {
            "spaceBetween": 30,
            "slidesPerView": 1
        },
        "425": {
            "spaceBetween": 30,
            "slidesPerView": 1
        },
        "575": {
            "spaceBetween": 30,
            "slidesPerView": 1
        },
        "767": {
            "spaceBetween": 30,
            "slidesPerView": 2
        },
        "991": {
            "spaceBetween": 20,
            "slidesPerView": 3
        },
        "1289": {
            "spaceBetween": 30,
            "slidesPerView": 3
        },
        "1440": {
            "spaceBetween": 30,
            "slidesPerView": 3
        }
    }}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!--Testimonials One Single-->
                            <div class="testimonials-one__single">
                                <div class="testimonials-one__quote">
                                    <img src="assets/images/testimonials/testimonials-one-icon-1.png" alt="">
                                </div>
                                <div class="testimonials-one__text">
                                    <p>There are many variations of passages of lorem ipsum available but the
                                        majority have suffered alteration in some form.</p>
                                    <h3>- Kevin Martin</h3>
                                </div>
                                <div class="testimonials-one__author-img">
                                    <img src="assets/images/testimonials/testimonials_one_au_img_1.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!--Testimonials One Single-->
                            <div class="testimonials-one__single">
                                <div class="testimonials-one__quote">
                                    <img src="assets/images/testimonials/testimonials-one-icon-1.png" alt="">
                                </div>
                                <div class="testimonials-one__text">
                                    <p>There are many variations of passages of lorem ipsum available but the
                                        majority have suffered alteration in some form.</p>
                                    <h3>- Jessica Brown</h3>
                                </div>
                                <div class="testimonials-one__author-img">
                                    <img src="assets/images/testimonials/testimonials_one_au_img_2.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!--Testimonials One Single-->
                            <div class="testimonials-one__single">
                                <div class="testimonials-one__quote">
                                    <img src="assets/images/testimonials/testimonials-one-icon-1.png" alt="">
                                </div>
                                <div class="testimonials-one__text">
                                    <p>There are many variations of passages of lorem ipsum available but the
                                        majority have suffered alteration in some form.</p>
                                    <h3>- David Cooper</h3>
                                </div>
                                <div class="testimonials-one__author-img">
                                    <img src="assets/images/testimonials/testimonials_one_au_img_3.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!--Testimonials One Single-->
                            <div class="testimonials-one__single">
                                <div class="testimonials-one__quote">
                                    <img src="assets/images/testimonials/testimonials-one-icon-1.png" alt="">
                                </div>
                                <div class="testimonials-one__text">
                                    <p>There are many variations of passages of lorem ipsum available but the
                                        majority have suffered alteration in some form.</p>
                                    <h3>- Kevin Martin</h3>
                                </div>
                                <div class="testimonials-one__author-img">
                                    <img src="assets/images/testimonials/testimonials_one_au_img_1.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!--Testimonials One Single-->
                            <div class="testimonials-one__single">
                                <div class="testimonials-one__quote">
                                    <img src="assets/images/testimonials/testimonials-one-icon-1.png" alt="">
                                </div>
                                <div class="testimonials-one__text">
                                    <p>There are many variations of passages of lorem ipsum available but the
                                        majority have suffered alteration in some form.</p>
                                    <h3>- Jessica Brown</h3>
                                </div>
                                <div class="testimonials-one__author-img">
                                    <img src="assets/images/testimonials/testimonials_one_au_img_2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination" id="testimonials-one__pagination"></div>
            </div>
        </div>
    </div>
</section>
<!--Testimonials One End-->

<!--Join One Start-->
<section class="join-one jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
    style="background-image: url(assets/images/backgrounds/join_one_bg.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="join-one__inner">
                    <div class="join-one__icon">
                        <span class="icon-helping-hand"></span>
                    </div>
                    <h2>Join the Helpers Group</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Join One End-->

<!--Newsletter One Start-->
<section class="newsletter-one" style="margin-bottom: 4rem">
    <div class="container">
        <div class="newsletter-one__inner">
            <div class="row">
                <div class="col-xl-4">
                    <div class="newsletter-one__left">
                        <div class="newsletter-one__subscriber-box">
                            <div class="icon">
                                <span class="icon-news"></span>
                            </div>
                            <div class="text">
                                <p>Subscribe</p>
                                <h4>Newsletter</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="newsletter-one__right">
                        <form action="#" class="newsletter-one__subscribe-form">
                            <div class="newsletter-one__subscribe-input-box">
                                <input type="email" name="email" placeholder="Enter email address">
                                <button type="submit" class="button">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Newsletter One End-->
<!--News One End-->

<!--Gallery One Start-->
<section class="gallery-one">
    <div class="gallery-one__container-box clearfix">
        <div class="thm-swiper__slider swiper-container gallery-one__content" data-swiper-options='{"spaceBetween": 20, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
            "0": {
                "spaceBetween": 10,
                "slidesPerView": 1
            },
            "375": {
                "spaceBetween": 20,
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
            <!-- swiper wrapper start -->
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="gallery-one__img-box">
                        <img src="assets/images/gallery/gallery_one_img_1.jpg" alt="">
                        <div class="gallery-one__iocn">
                            <a href="assets/images/gallery/gallery_one_img_1.jpg" class="img-popup"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gallery-one__img-box">
                        <img src="assets/images/gallery/gallery_one_img_2.jpg" alt="">
                        <div class="gallery-one__iocn">
                            <a href="assets/images/gallery/gallery_one_img_2.jpg" class="img-popup"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gallery-one__img-box">
                        <img src="assets/images/gallery/gallery_one_img_3.jpg" alt="">
                        <div class="gallery-one__iocn">
                            <a href="assets/images/gallery/gallery_one_img_3.jpg" class="img-popup"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gallery-one__img-box">
                        <img src="assets/images/gallery/gallery_one_img_4.jpg" alt="">
                        <div class="gallery-one__iocn">
                            <a href="assets/images/gallery/gallery_one_img_4.jpg" class="img-popup"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gallery-one__img-box">
                        <img src="assets/images/gallery/gallery_one_img_5.jpg" alt="">
                        <div class="gallery-one__iocn">
                            <a href="assets/images/gallery/gallery_one_img_5.jpg" class="img-popup"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div><!-- /.swiper-wrapper -->
        </div>
        <!-- end .swiper-container -->
    </div>
</section>
<!--Gallery One End-->

<!--Brand One Start-->
<section class="brand-one">
    <div class="brand-one-bg" style="background-image: url(assets/images/backgrounds/brand-one-bg.png)"></div>
    <div class="brand-one__container">
        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"loop": true, "spaceBetween": 0, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
            "0": {
                "slidesPerView": 2
            },
            "375": {
                "slidesPerView": 2
            },
            "575": {
                "slidesPerView": 2
            },
            "767": {
                "slidesPerView": 3
            },
            "991": {
                "slidesPerView": 4
            },
            "1199": {
                "slidesPerView": 5
            }
        }}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="brand-one__img">
                        <img src="assets/images/brand/brand_1_img_1.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-one__img">
                        <img src="assets/images/brand/brand_1_img_2.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-one__img">
                        <img src="assets/images/brand/brand_1_img_3.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-one__img">
                        <img src="assets/images/brand/brand_1_img_4.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-one__img">
                        <img src="assets/images/brand/brand_1_img_5.png" alt="">
                    </div>
                </div>
            </div><!-- /.swiper-wrapper -->
        </div>
    </div>
</section>
<!--Brand One End-->
@endsection
