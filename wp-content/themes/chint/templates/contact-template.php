<?php
/*
 * Template Name: Contact
 * Version: 1.0
 */
get_header();
?>
    <body class="sub-page">
    <section class="sub-page-banner" <?php echo get_field('banner_image') == '' ? '' : 'style="background-image: url('. get_field('banner_image').')"'?>>

    </section>
    <div class="container" style="padding-top: 20px">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <!--                        <h2>Contact Us</h2>-->
                    <div class="breadcrumb__links">
                        <a href="<?=get_home_url()?>" style="color: #7d7d7d">Home</a>
                        <span>Contact Us</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper">

        <section class="contact spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="contact__text">
                            <div class="section-title">
                                <span>Information</span>
                                <h2>Contact Details</h2>
                            </div>
                            <p>WE ARE READY FOR YOU ANYTIME.
                                </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact__widget__item">
                            <div class="contact__widget__item__icon">
                                <img src="images/ci-1.png" alt="">
                            </div>
                            <div class="contact__widget__item__text">
                                <h5>Phone Number</h5>
                                <span>011 7 021 611</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact__widget__item">
                            <div class="contact__widget__item__icon">
                                <img src="images/ci-2.png" alt="">
                            </div>
                            <div class="contact__widget__item__text">
                                <h5>Email Address</h5>
                                <span>info@chintenergy.lk</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact__widget__item last__item">
                            <div class="contact__widget__item__icon">
                                <img src="images/ci-3.png" alt="">
                            </div>
                            <div class="contact__widget__item__text">
                                <h5>Office Location</h5>
                                <span>No.113, Havelock Road, Colombo 05</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0072699128445!2d79.85878425336664!3d6.8897316223014595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25bb466de2d3b%3A0x54e5a2755bbd6c3b!2sCHINT%20Energy%20(Pvt)%20ltd!5e0!3m2!1sen!2slk!4v1606887934169!5m2!1sen!2slk"
                            height="460" style="border:0;" allowfullscreen=""></iframe>
                </div>

                <div class="row">
                    <div class="col-lg-5">
                        <div class="contact__form__text">
                            <div class="section-title">
                                <span>Form</span>
                                <h2>Get in touch</h2>
                            </div>
                            <p>If you have any questions or queries a member of staff will always be happy to help. feel
                                free to contact us by telephone or email and will be sure to get back to you as soon as
                                possible.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="contact__form">
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input type="text" placeholder="Email">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Message"></textarea>
                                        <button type="submit" class="button">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <footer id="footer">

            <!-- Start Footer-Top -->
            <div class="footer-top">

                <div class="col-sm-12 col-md-10 col-lg-7 widget widget-address">
                    <ul>
                       <li><h4>Chint Energy (Pvt) Ltd.</h4><br> No. 113, Havelock Road, Colombo 05</li>
						<li><h4>E-mail</h4><br><a href="mailto:info@damisila.lk">info@chintenergy.lk</a></li>
						<li><h4>Tel</h4><br> +94 11 702 1611</li>

                    </ul>
                </div>
                <div class="col-sm-12 col-md-2 col-lg-5" style="display: flex; justify-content: flex-end;">
                    <a href="https://www.facebook.com/CHINTEnergy" style="margin: 2px;"><i class="fab fa-facebook-square fa-2x" style="color: #3b5998; font-size: 2.5em"></i></a>
                    <a href="https://www.instagram.com/chintenergy/?igshid=cdxzh9k3e1kk" style="margin: 2px;"><i class="fab fa-instagram-square fa-2x" style="color: #C13584; font-size: 2.5em"></i></a>
                    <a href="https://www.linkedin.com/company/chint-energy-pvt-ltd" style="margin: 2px;"><i class="fab fa-linkedin fa-2x" style="color: #0077b5; font-size: 2.5em"></i></a>
                </div>

            </div>
            <!-- End Footer-Top -->

            <!-- Start Footer-Copyrights -->
            <div class="footer-copyrights">
                <div class="col-md-12">
                    <p>
                        Copyright
                        <script type="text/javascript">
                          var date = new Date()
                          var year = date.getYear()
                          year = year < 1000 ? year + 1900 : year
                          document.write('&copy;' + '&nbsp;' + year)
                        </script>
                        CHINT ENERGY. Powered by Tropusi
                    </p>
                </div>
            </div>
            <!-- End Footer-Copyrights -->

        </footer>

    </div>
    </body>
    </html>
<?php
get_footer();
