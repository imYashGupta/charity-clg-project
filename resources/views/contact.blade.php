@extends("layouts.web")
@section("content")
    <!--Page Header Start-->
        <section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            <div class="container">
                <div class="page-header__inner">
                    <h2>Contact</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{route("home")}}">Home</a></li>
                        <li><span>/</span></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="container">
                <div class="block-title text-center">
                    <h4>Asked Quesitons</h4>
                    <h2>Contact With Us</h2>
                </div>
                <div class="row">
                    <div class="col-xl-8">
                        <div class="contact-form">
                            <form action="http://layerdrops.com/asting/inc/sendemail.php" class="contact-form-validated contact-one__form">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="contact-form__input-box">
                                            <input type="text" placeholder="Your name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="contact-form__input-box">
                                            <input type="email" placeholder="Email address" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="contact-form__input-box">
                                            <input type="text" placeholder="Phone number" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="contact-form__input-box">
                                            <input type="email" placeholder="Subject" name="Subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="contact-form__input-box">
                                            <textarea name="message" placeholder="Write message"></textarea>
                                        </div>
                                        <button type="submit" class="thm-btn contact-form__btn">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4 d-flex align-items-stretch">
                        <div class="contact-page__info-box">
                            <div class="contact-page__info-box-address">
                                <h4 class="contact-page__info-box-tilte">Address</h4>
                                <p class="contact-page__info-box-address-text">88 New Street, Washington DC <br> United
                                    States, America</p>
                            </div>
                            <div class="contact-page__info-box-phone">
                                <h4 class="contact-page__info-box-tilte">Phone</h4>
                                <p class="contact-page__info-box-phone-number">
                                    <a href="tel:0123456789">Local: 666 888 0000</a> <br>
                                    <a href="tel:0123456789">Mobile: 000 8888 999</a>
                                </p>
                            </div>
                            <div class="contact-page__info-box-email">
                                <h4 class="contact-page__info-box-tilte">Email</h4>
                                <p class="contact-page__info-box-email-address">
                                    <a href="mailto:needhelp@company.com">needhelp@company.com</a> <br>
                                    <a href="mailto:inquiry@asting.com">inquiry@asting.com</a>
                                </p>
                            </div>
                            <div class="contact-page__info-box-follow">
                                <h4 class="contact-page__info-box-tilte">Follow</h4>
                                <div class="contact-page__info-box-follow-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="clr-fb"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#" class="clr-dri"><i class="fab fa-dribbble"></i></a>
                                    <a href="#" class="clr-ins"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->

        <!--Contact Page Google Map Start-->
        <section class="contact-page-google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                class="contact-page-google-map__one" allowfullscreen></iframe>

        </section>
        <!--Contact Page Google Map End-->

@endsection
