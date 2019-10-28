<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bohmer_Bags
 */

?>

        <!-- Footer Start -->
        <footer class="footer footer-1 bg--black ptb--40">
            <div class="footer-top pb--40 pb-md--30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-8 mb-md--30">
                            <div class="footer-widget">
                                <div class="textwidget">
                                    <img src="/wp-content/themes/bohmer/assets/img/logo/logo-white.png" alt="Logo" class="mb--10">
                                    <p class="font-size-16 font-2 mb--20">Integer ut ligula quis lectus fringilla
                                        elementum porttitor sed est. Duis fringilla efficitur ligula sed lobortis.</p>
                                    <!-- Social Icons Start Here -->
                                    <ul class="social">
                                        <li class="social__item">
                                            <a href="https://twitter.com/" class="social__link color--white">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="https://plus.google.com/" class="social__link color--white">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="https://facebook.com/" class="social__link color--white">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="https://youtube.com/" class="social__link color--white">
                                                <i class="fa fa-youtube"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="https://instagram.com/" class="social__link color--white">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Social Icons End Here -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 mb-md--30">
                            <div class="footer-widget">
                                <h3 class="widget-title">Company</h3>
                                <ul class="widget-menu">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="#">Our Services</a></li>
                                    <li><a href="#">Affiliate Program</a></li>
                                    <li><a href="#">Work for Airi</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 mb-sm--30">
                            <div class="footer-widget">
                                <h3 class="widget-title">USEFUL LINKS</h3>
                                <ul class="widget-menu">
                                    <li><a href="shop-collections.html">The Collections</a></li>
                                    <li><a href="#">Size Guide</a></li>
                                    <li><a href="#">Return Policiy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 mb-sm--30">
                            <div class="footer-widget">
                                <h3 class="widget-title">SHOPPING</h3>
                                <ul class="widget-menu">
                                    <li><a href="shop-instagram.html">Look Book</a></li>
                                    <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                    <li><a href="shop-fullwidth.html">Shop Fullwidth</a></li>
                                    <li><a href="shop-no-gutter.html">Man &amp; Woman</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="footer-widget">
                                <h4 class="widget-title">CONTACT INFO</h4>
                                <ul class="contact-info">
                                    <li class="contact-info__item">
                                        <i class="fa fa-phone"></i>
                                        <span><a href="#" class="contact-info__link">(+612) 2531 5600</a></span>
                                    </li>
                                    <li class="contact-info__item">
                                        <i class="fa fa-envelope"></i>
                                        <span><a href="#" class="contact-info__link">info@la-studioweb.com</a></span>
                                    </li>
                                    <li class="contact-info__item">
                                        <i class="fa fa-map-marker"></i>
                                        <span>PO Box 1622 Colins Street West Victoria 8077 Australia</span>
                                    </li>
                                </ul>
                                <div class="textwidget">
                                    <img src="/wp-content/themes/bohmer/assets/img/others/payments.png" alt="Payment">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-middle pb--40 pb-md--30">
                <div class="container">
                    <div class="row method-box-wrapper">
                        <div class="col-lg-3 col-md-6 mb-md--10">
                            <div class="method-box">
                                <h4>FREESHIPPING WORLD WIDE</h4>
                                <p>Freeship over oder $100</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-md--10">
                            <div class="method-box">
                                <h4>30 DAYS MONEY BACK</h4>
                                <p>You can back money any times</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-sm--10">
                            <div class="method-box">
                                <h4>PROFESSIONAL SUPPORT 24/7</h4>
                                <p>info@la-studioweb.com</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="method-box">
                                <h4>100% SECURE CHECKOUT</h4>
                                <p>Protect buyer &amp; clients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <p class="copyright-text">&copy; <?php echo date("Y"); ?> Bohmer Bags All rights reserved. Designed by Manny</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

    </div>
    <!-- Main Wrapper End -->


    <?php wp_footer(); ?>

    <!-- ************************* JS Files ************************* -->

    <!-- jQuery JS -->
    <script src="/wp-content/themes/bohmer/assets/js/vendor/jquery.min.js"></script>

    <!-- Bootstrap and Popper Bundle JS -->
    <script src="/wp-content/themes/bohmer/assets/js/bootstrap.bundle.min.js"></script>

    <!-- All Plugins Js -->
    <script src="/wp-content/themes/bohmer/assets/js/plugins.js"></script>

    <!-- Ajax Mail Js -->
    <script src="/wp-content/themes/bohmer/assets/js/ajax-mail.js"></script>

    <!-- Main JS -->
    <script src="/wp-content/themes/bohmer/assets/js/main.js"></script>

    <!-- REVOLUTION JS FILES -->
    <script src="/wp-content/themes/bohmer/assets/js/revoulation/jquery.themepunch.tools.min.js"></script>
    <script src="/wp-content/themes/bohmer/assets/js/revoulation/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="/wp-content/themes/bohmer/assets/js/revoulation/extensions/revolution.extension.actions.min.js"></script>
    <script src="/wp-content/themes/bohmer/assets/js/revoulation/extensions/revolution.extension.carousel.min.js"></script>
    <script src="/wp-content/themes/bohmer/assets/js/revoulation/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="/wp-content/themes/bohmer/assets/js/revoulation/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="/wp-content/themes/bohmer/assets/js/revoulation/extensions/revolution.extension.migration.min.js"></script>
    <script src="/wp-content/themes/bohmer/assets/js/revoulation/extensions/revolution.extension.navigation.min.js"></script>
    <script src="/wp-content/themes/bohmer/assets/js/revoulation/extensions/revolution.extension.parallax.min.js"></script>
    <script src="/wp-content/themes/bohmer/assets/js/revoulation/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="/wp-content/themes/bohmer/assets/js/revoulation/extensions/revolution.extension.video.min.js"></script>

    <!-- REVOLUTION ACTIVE JS FILES -->
    <script src="assets/js/revoulation.js"></script>
</body>
</html>