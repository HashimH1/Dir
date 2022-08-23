  <div class="preloader">
    <img class="preloader__image" width="60" src="assets/images/loader.png" alt="" />
</div>
<header dir="ltr" class="main-header clearfix">
    <nav class="main-menu clearfix">
        <div class="main-menu-wrapper">
            <div class="main-menu-wrapper__logo">
                <a href="index.html"><img src="assets/images/resources/logo-1.png" alt=""></a>
            </div>
            <div class="main-menu-wrapper__main-menu">
                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                <ul class="main-menu__list">
                    <li class="dropdown  ">
                        <a href="{{ route('home') }}">Home</a>

                    </li>
                    <li class="dropdown">
                        <a href="#">Pages</a>
                        <ul>
                            <li><a href="about.html">About</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="faq.html">FAQs</a></li>
                            <li><a href="404.html">404 Error</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="services.html">Services</a>
                        <ul>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="mobile-application.html">Mobile Application</a></li>
                            <li><a href="digital-marketing.html">Digital Marketing</a></li>
                            <li><a href="graphic-designing.html">Graphic Designing</a></li>
                            <li><a href="website-development.html">Website Development</a></li>
                            <li><a href="social-marketing.html">Social Marketing</a></li>
                            <li><a href="content-writing.html">Content Writting</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('projects') }}">Projects</a>

                    </li>
                    <li class="dropdown">
                        <a href="{{ route('news') }}">Blog</a>

                    </li>
                    <li><a href="{{ route('contact.us.create') }}">Contact</a></li>
                </ul>
            </div>
            <div class="main-menu-wrapper__right">
                <div class="main-menu-wrapper__call">
                    <div class="main-menu-wrapper__call-icon">
                        <img src="assets/images/icon/phone-icon.png" alt="">
                    </div>
                    <div class="main-menu-wrapper__call-number">
                        <p>Call Anytime</p>
                        <h5><a href="tel:926668880000">+ 92 666 888 0000</a></h5>
                    </div>
                </div>
                <div class="main-menu-wrapper__search-box">
                    <a href="#" class="main-menu-wrapper__search search-toggler icon-magnifying-glass"></a>
                </div>
            </div>
        </div>
    </nav>
</header>

 <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
