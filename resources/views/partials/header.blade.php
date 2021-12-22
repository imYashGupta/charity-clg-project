<header class="main-nav__header-one">
    <div class="main-nav__header-one__top clearfix">
        <div class="main-nav__header-one__top-left">
            <ul class="list-unstyled">
                <li>
                    <div class="icon">
                        <i class="fas fa-phone-square-alt"></i>
                    </div>
                    <div class="text">
                        <p><a href="tel:92-666-888-0000">92 666 888 0000</a></p>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="text">
                        <p><a href="mailto:needhelp@company.com">needhelp@company.com</a></p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="main-nav__header-one__top-right">
            <div class="main-nav__header-one__top-social">
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-dribbble"></i></a>
            </div>
        </div>
    </div>
    <nav class="header-navigation stricky">
        <div class="container clearfix">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="main-nav__left main-nav__left-one float-left">
                <a href="#" class="side-menu__toggler">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="main-nav__main-navigation clearfix">
                    <ul class=" main-nav__navigation-box float-left">
                        <li>
                            <a href="{{route("home")}}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route("page.about") }}">About</a>
                        </li>
                       {{--  <li class="dropdown">
                            <a href="#">Volunteers</a>
                            <ul>

                                <li><a href="{{ route("page.volunteer") }}">Members</a></li>
                                <li><a href="{{ route("page.become-volunteer") }}">Become a Volunteer</a></li>
                            </ul><!-- /.sub-menu -->
                        </li> --}}
                        <li >
                            <a href="{{route("page.campaigns")}}">Campaigns</a>
                           {{--  <ul>
                                <li><a href="{{route("page.campaigns")}}">Campaigns</a></li>
                                <li><a href="{{route("page.campaign-details")}}">Campaigns Details</a></li>
                            </ul><!-- /.sub-menu --> --}}
                        </li>
                       {{--  <li class="dropdown">
                            <a href="#">Events</a>
                            <ul>
                                <li><a href="{{route("page.event")}}">Events</a></li>
                                <li><a href="{{route("page.event-details")}}">Events Details</a></li>
                            </ul><!-- /.sub-menu -->
                        </li> --}}
                        <li  >
                            <a href="{{route("page.news")}}">News</a>
                          {{--   <ul>
                                <li><a href="{{route("page.news")}}">News</a></li>
                            </ul><!-- /.sub-menu --> --}}
                        </li>
                        <li>
                            <a href="{{route("page.contact")}}">Contact</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
            <div class="main-nav__right main-nav__right-one float-right">
                <div class="main-nav__right__btn-one">
                    <a href="{{route("page.campaigns")}}"><i class="fas fa-heart"></i>Donate</a>
                </div>
               {{--  <div class="main-nav__right__icon-cart-box">
                    <a href="#">
                        <span class="icon-shopping-cart"></span>
                    </a>
                </div> --}}
                <div class="main-nav__right__icon-search-box">
                    <a href="#" class="main-nav__search search-popup__toggler">
                        <i class="icon-magnifying-glass"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
