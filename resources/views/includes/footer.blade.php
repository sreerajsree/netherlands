<!-- Footer Section Begin -->
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="footer__about">
                    <img src="{{ asset('assets/img/logo-footer.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6">
                <div class="footer__widget">
                    <h5>QUICK LINKS</h5>
                    <ul>
                        <li><a href="{{ route('yoga.practices') }}">Yoga</a></li>
                        <li><a href="{{ route('ayu.healthcare') }}">Ayurvedic Healthcare</a></li>
                        <li><a href="{{ route('body.fit') }}">Body Fit Practices</a></li>
                        <li><a href="{{ route('terms') }}">Terms & Conditions</a></li>
                        <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6">
                <div class="footer__widget">
                    <h5>About Us</h5>
                    <ul>
                        <li><a href="{{ route('pricing') }}">Pricing</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li><a href="/about#meet_the_team">Meet The Team</a></li>
                        <li><a href="mailto:info@houseforpositivechange.com">Customer Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="footer__widget">
                    <h5>CONTACT US</h5>
                    <ul class="footer-address">
                        <li><i class="fa fa-phone"></i> (01) 436 8888</li>
                        <li><i class="fa fa-envelope"></i> <a
                                href="mailto:info@houseforpositivechange.com">info@houseforpositivechange.com</a></li>
                        <li><i class="fa fa-location-arrow"></i> House for Positive Change <br>
                            <span> Dobbeweg 11R,
                                2254 AG Voorschoten</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="footer__copyright__text">
                        <p>Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="footer__copyright__social">
                        <a href="https://www.facebook.com/houseforpositivechange/" target="_blank"><i
                                class="fa fa-facebook fa-lg"></i></a>
                        <a href="https://www.instagram.com/houseforpositivechange/" target="_blank"><i
                                class="fa fa-instagram fa-lg"></i></a>
                        <a href="mailto:info@houseforpositivechange.com"><i class="fa fa-envelope fa-lg"></i></a>
                        @guest
                            <a href="{{ route('login') }}"><i class="fa fa-user fa-lg"></i></a>
                        @endguest
                        @auth
                            <a href="{{ route('home') }}"><i class="fa fa-user fa-lg"></i></a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Section End -->
