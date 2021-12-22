 @extends("layouts.web")
 @section("content")
        <!--Page Header Start-->
        <section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            <div class="container">
                <div class="page-header__inner">
                    <h2>Donations</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{route("home")}}">Home</a></li>
                        <li><span>/</span></li>
                        <li>Campaigns Details</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Campaign Details Start-->
        <section class="campaign-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="campaign-details__left-bar">
                            <div class="campaign-details__img">
                                <div class="campaign-details__img-box">
                                    <img src="assets/images/resources/campaign-details-img-1.jpg" alt="">
                                    <div class="campaign-details__category">
                                        <p>Food</p>
                                    </div>
                                </div>
                                <div class="campaign-details__progress">
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="36%"><div class="count-text">36%</div></div>
                                    </div>
                                    <div class="campaign-details__goals">
                                        <p><span>$25,270</span> Raised</p>
                                        <p><span>$30,000</span> Goal</p>
                                    </div>
                                </div>
                            </div>
                            <div class="campaign-details__text-box">
                                <h3>Raise Fund for Clean & Healthy Water</h3>
                                <p class="campaign-details__text">Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci phaedrum. There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some injected or  words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrang hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, </p>
                            </div>
                            <div class="campaign-details__summary">
                                <h3 class="campaign-details__summary-title">Summary</h3>
                                <p class="campaign-details__summary-text">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type simen book.</p>
                                <div class="campaign-details__summary-list">
                                    <ul class="list-unstyled">
                                        <li>
                                            <div class="campaign-details__summary-icon">
                                                <span class="icon-confirmation"></span>
                                            </div>
                                            <div class="campaign-details__summary-content">
                                                <p>Nsectetur cing do not elit.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="campaign-details__summary-icon">
                                                <span class="icon-confirmation"></span>
                                            </div>
                                            <div class="campaign-details__summary-content">
                                                <p>Suspe ndisse suscipit sagittis in leo.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="campaign-details__summary-icon">
                                                <span class="icon-confirmation"></span>
                                            </div>
                                            <div class="campaign-details__summary-content">
                                                <p>Entum estibulum dignissim lipsm posuere.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="campaign-details__summary-img-box">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="campaign-details__summary-img-box-single">
                                                <img src="assets/images/resources/summary-img-1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="campaign-details__summary-img-box-single">
                                                <img src="assets/images/resources/summary-img-2.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="campaign-details__summary-bottom-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. orem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                            <div class="campaign-details__map">
                                <h3 class="campaign-details__map-title">Campaign Map</h3>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="campaign-details__map-box" allowfullscreen></iframe>
                            </div>
                            <div class="campaign-details__share">
                                <div class="campaign-details__share__btn-box">
                                    <a href="#" class="thm-btn campaign-details__share__btn">Donate Now</a>
                                </div>
                                <div class="campaign-details__share__social-box">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="clr-fb"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#" class="clr-dri"><i class="fab fa-dribbble"></i></a>
                                    <a href="#" class="clr-ins"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="campaign-details__download">
                                <div class="campaign-details__download__left-content">
                                    <div class="icon">
                                        <i class="far fa-file-pdf"></i>
                                    </div>
                                    <div class="text"><h3>Our Presentation</h3></div>
                                </div>
                                <div class="campaign-details__download__right-content">
                                    <a href="#" class="thm-btn campaign-details__download-btn">Download</a>
                                </div>
                            </div>
                            <div class="comment-one">
                                <h3 class="comment-one__title">2 Comments</h3>
                                <div class="comment-one__single">
                                    <div class="comment-one__image">
                                        <img src="assets/images/blog/comment-1-1.png" alt="">
                                    </div>
                                    <div class="comment-one__content">
                                        <h3>Kevin Martin</h3>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting unchanged. It was popularised in the sheets containing lorem ipsum is simply free text.</p>
                                        <a href="#" class="thm-btn comment-one__btn">Reply</a>
                                    </div>
                                </div>
                                <div class="comment-one__single">
                                    <div class="comment-one__image">
                                        <img src="assets/images/blog/comment-1-2.png" alt="">
                                    </div>
                                    <div class="comment-one__content">
                                        <h3>Sarah Albert</h3>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting unchanged. It was popularised in the sheets containing lorem ipsum is simply free text.</p>
                                        <a href="#" class="thm-btn comment-one__btn">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-form">
                                <h3 class="comment-form__title">Leave a Comment</h3>
                                <form action="http://layerdrops.com/asting/inc/sendemail.php" class="comment-one__form">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Your name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="email" placeholder="Email address" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Phone number" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="email" placeholder="Subject" name="Subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box">
                                                <textarea name="message" placeholder="Write message"></textarea>
                                            </div>
                                            <button type="submit" class="thm-btn comment-form__btn">Submit Comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="campaign-details__right-bar">
                            <div class="campaign-details__organizer">
                                <div class="campaign-details__organizer-img">
                                    <img src="assets/images/resources/organizer-img-1.png" alt="">
                                </div>
                                <h3 class="campaign-details__organizer-title">Jessica Smith</h3>
                                <p class="campaign-details__organizer-text">It uses a dictionary of over lorem ipsum simply free text latin words,</p>
                            </div>
                            <div class="campaign-details__donations">
                                <h3 class="campaign-details__donations-title">Recent Donations</h3>
                                <ul class="list-unstyled campaign-details__donations-list">
                                    <li>
                                        <div class="campaign-details__donations-img">
                                            <img src="assets/images/resources/recent-donation-img-1.jpg" alt="">
                                        </div>
                                        <div class="campaign-details__donations-content">
                                            <h4>$20</h4>
                                            <h5>David Marks <span>3 hours ago</span></h5>
                                            <p>God bless you dear</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="campaign-details__donations-img">
                                            <img src="assets/images/resources/recent-donation-img-2.jpg" alt="">
                                        </div>
                                        <div class="campaign-details__donations-content">
                                            <h4>$50</h4>
                                            <h5>Christine Eve <span>8 hours ago</span></h5>
                                            <p>God bless you dear</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="campaign-details__donations-img">
                                            <img src="assets/images/resources/recent-donation-img-3.jpg" alt="">
                                        </div>
                                        <div class="campaign-details__donations-content">
                                            <h4>$10</h4>
                                            <h5>Mike Hardson <span>1 day ago</span></h5>
                                            <p>God bless you dear</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Campaign Details End-->

 @endsection
