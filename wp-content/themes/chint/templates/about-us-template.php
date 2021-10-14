<?php
/*
 * Template Name: About Us
 * Version: 1.0
 */

get_header();
?>
    <body class="sub-page">

<section class="sub-page-banner" <?php echo get_field('banner_image') == '' ? '' : 'style="background-image: url('. get_field('banner_image').')"'?>>
</section>
<div class="container" style="padding-top: 20px;">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="breadcrumb__text">
                <!--					<h2>About Us</h2>-->
                <div class="breadcrumb__links">
                    <a href="<?= get_home_url()?>" style="color: #7d7d7d">Home</a>
                    <span>About Us</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrapper">

    <section class="about">
        <div class="container">

            <div class="col-inner-wrap">
                <div class="col-md-5">
                    <h1>Our Identity</h1>
                    <p style="text-align:justify">
                        Chint Energy (Pvt) Ltd., is the authorized distributor of the world renowned smart energy solution provider for CHINT in Sri Lanka since  May 2019. Our team is equipped with qualified and experienced professionals who successfully manage to grow our local dealer network in the market. Over the years the network has grown over 25 authorised distributors island wide.

                    </p>
                    <p style="text-align:justify">
                        Chint Energy possesses a flagship store which allows our customers to effortlessly experience our immense portfolio under one roof in the heart of Colombo. We have succeeded in generating a brand that has timelessly proved its safety, reliability and stability.


                    </p>

                </div>

                <div class="col-md-7">
                    <div class="single-image-container">
                        <img class="sh-image-url" src="<?=get_template_directory_uri()?>/images/aboutus/our_Identity_chint.png" alt="call-1866884_1920">
                    </div>
                </div>
            </div>

            <div class="col-inner-wrap">
                <div class="col-md-7">
                    <div class="single-image-container">
                        <img class="sh-image-url" src="<?=get_template_directory_uri()?>/images/aboutus/who_are_we.png" alt="call-1866884_1920">
                    </div>
                </div>

                <div class="col-md-5">
                    <h1>Who Are We </h1>
                    <h2 style="margin: 0;"> Our Purpose</h2>
                    <p style="text-align:justify">
                        We exist to empower Sri Lanka with Smart Energy and Electrical Solutions and to actively participate in conserving energy and optimizing its use for everyone.

                    </p>
                    <br>
                    <h2 style="margin: 0;"> Our Vision</h2>
                    <p>
                        To be the Pioneer in Sri Lanka for Smart Energy Solutions.
                    </p>
                    <br>
                    <h2 style="margin: 0;"> Our Mission</h2>
                    <p>
                        To be a brand that’s celebrated through our services to the industry, society, and the Nation.

                    </p>

                </div>
            </div>

            <div class="col-inner-wrap">
                <div class="col-md-5">
                    <h1>Our Philosophy</h1>
                    <p style="text-align:justify">
                        We believe in nurturing the value of honest and ethical practices as a part of our everyday life, so we can live by doing the right thing, always.
                    </p>
                </div>

                <div class="col-md-7">
                    <div class="single-image-container">
                        <img class="sh-image-url" src="<?=get_template_directory_uri()?>/images/aboutus/our_philosophy.png" alt="call-1866884_1920">
                    </div>
                </div>
            </div>

            <div class="col-inner-wrap">
                <div class="col-md-7">
                    <div class="single-image-container">
                        <img class="sh-image-url" src="<?=get_template_directory_uri()?>/images/aboutus/our_people.png" alt="call-1866884_1920">
                    </div>
                </div>

                <div class="col-md-5">
                    <h1>Our Culture</h1>
                    <p style="text-align:justify">
                        Investing in a culture that is open, engaging and effective is the way we empower the people in our company. Our employees are encouraged to be initiators, agile and honest about achieving not just organizational goals but also personal goals. Our key strength lies in creating a space that enables them to be successful on their own merit.
                    </p>
                </div>
            </div>


            <div class="col-inner-wrap">
                <div class="col-md-5">
                    <h1>Our People</h1>
                    <p style="text-align:justify">
                        Our journey of adversity and celebrations empower are our people’s triumphs. We understand they are a bigger part of who we are and our identity. At CHINT Energy, we respect and treat our fellow colleagues as our equals, helping to foster an environment that’s nurturing – professionally and personally

                    </p>
                </div>

                <div class="col-md-7">
                    <div class="single-image-container">
                        <img class="sh-image-url" src="<?=get_template_directory_uri()?>/images/aboutus/new_our_people.png" alt="call-1866884_1920">
                    </div>
                </div>
            </div>


            <div class="col-inner-wrap">
                <div class="col-md-7">
                    <div class="single-image-container">
                        <img class="sh-image-url" src="<?=get_template_directory_uri()?>/images/aboutus/our_core_values.png" alt="call-1866884_1920">
                    </div>
                </div>

                <div class="col-md-5">
                    <h1>Our Core Values </h1>

                    <h2 style="margin: 0;"> Integrity</h2>

                    <p style="text-align:justify">
                        Being honest and ethical in everything we do

                    </p>
                    <br>
                    <h2 style="margin: 0;"> The Drive</h2>

                    <p style="text-align:justify">
                        Having the passion to be results-focused in everything we do.</p>
                    <br>
                    <h2 style="margin: 0;"> Open-mindedness</h2>

                    <p style="text-align:justify">
                        Cultivating an unbiased view in everything we do

                    </p>
                    <br>
                    <h2 style="margin: 0;"> Entrepreneurial Spirit</h2>

                    <p style="text-align:justify">
                        Nurturing a mind of curiosity and innovation in everything we do

                    </p>

                </div>
            </div>




        </div>
    </section>


    <section class="home-Projects" style="margin-top: 0px;">
        <div class="container">
            <div class="section-header">
                <h1>Our Strength</h1>
            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="col-inner" style="background-color:rgb(244, 244, 244);padding:20px 20px 20px 20px;">
                        <div class="box has-hover teamimg  has-hover box-none box-text-bottom">
                            <div class="box-image">
                                <img src="<?=get_template_directory_uri()?>/images/distribution_network.png" class="attachment-original size-original wp-post-image">
                            </div>
                            <br>
                            <p style="text-align: center;" class="txtbodyp">CHINT Island wide distribution <br>
                                <!-- box-image <a href="profile.html" class="button" style="font-size: 12px;padding: 10px;height: auto;line-height: initial;">Read more >></a> -->
                            </p>
                        </div><!-- box-image -->

                        <div class="box-text text-center" style="padding:0px 0px 0px 0px;">
                            <div class="box-text-inner"></div><!-- box-text-inner -->
                        </div><!-- box-text -->
                    </div><!-- .box  -->

                    <div class="gap-element clearfix" style="display:block; height:auto; padding-top:20px"></div>
                </div>

                <div class="col-md-6">
                    <div class="col-inner" style="background-color:rgb(244, 244, 244);padding:20px 20px 20px 20px;">
                        <div class="box has-hover teamimg  has-hover box-none box-text-bottom">
                            <div class="box-image">
                                <img src="<?=get_template_directory_uri()?>/images/aboutus/warehouse.png" class="attachment-original size-original wp-post-image">
                            </div>
                            <br>
                            <p style="text-align: center;" class="txtbodyp">CHINT Warehouse in Rajagiriya <br>
                                <!-- box-image  <a href="profile.html" class="button" style="font-size: 12px;padding: 10px;height: auto;line-height: initial;">Read more >></a>-->
                            </p>

                        </div><!-- box-image -->

                        <div class="box-text text-center" style="padding:0px 0px 0px 0px;">
                            <div class="box-text-inner"></div><!-- box-text-inner -->
                        </div><!-- box-text -->
                    </div><!-- .box  -->

                    <div class="gap-element clearfix" style="display:block; height:auto; padding-top:20px"></div>
                </div>

            </div>

        </div>
    </section>






    <section class="home-Projects" style="margin-top: 0px;">
        <div class="container">
            <div class="section-header">
                <h1>Our Leadership Team</h1>
            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="col-inner" style="background-color:rgb(244, 244, 244);padding:20px 20px 20px 20px;">
                        <div class="box has-hover teamimg  has-hover box-none box-text-bottom">
                            <div class="box-image">
                                <img src="<?=get_template_directory_uri()?>/images/aboutus/team_member2.png" class="attachment-original size-original wp-post-image">
                            </div>
                            <br>
                            <p style="text-align: center;" class="txtbodyp">Mr.Faham Nauman <br><span style="color: #d72b2f;"><b>Chairman</b></span><br><br>
                                <a href="https://tropusi.com/chint/CMS/profile/#faham-nauman" class="button" style="font-size: 12px;padding: 10px;height: auto;line-height: initial;">Read more >></a>
                            </p>
                        </div><!-- box-image -->

                        <div class="box-text text-center" style="padding:0px 0px 0px 0px;">
                            <div class="box-text-inner"></div><!-- box-text-inner -->
                        </div><!-- box-text -->
                    </div><!-- .box  -->

                    <div class="gap-element clearfix" style="display:block; height:auto; padding-top:20px"></div>
                </div>

                <div class="col-md-6">
                    <div class="col-inner" style="background-color:rgb(244, 244, 244);padding:20px 20px 20px 20px;">
                        <div class="box has-hover teamimg  has-hover box-none box-text-bottom">
                            <div class="box-image">
                                <img src="<?=get_template_directory_uri()?>/images/aboutus/team_member3.png" class="attachment-original size-original wp-post-image">
                            </div>
                            <br>
                            <p style="text-align: center;" class="txtbodyp">Mr.Kamil Hussain  <br><span style="color: #d72b2f;"><b>Managing Director </b></span><br><br>
                                <a href="https://tropusi.com/chint/CMS/profile/#kamil-hussain" class="button" style="font-size: 12px;padding: 10px;height: auto;line-height: initial;">Read more >></a>
                            </p>

                        </div><!-- box-image -->

                        <div class="box-text text-center" style="padding:0px 0px 0px 0px;">
                            <div class="box-text-inner"></div><!-- box-text-inner -->
                        </div><!-- box-text -->
                    </div><!-- .box  -->

                    <div class="gap-element clearfix" style="display:block; height:auto; padding-top:20px"></div>
                </div>

            </div>

        </div>
    </section>


    <section class="home-Projects">
        <div class="container">
            <div class="section-header">
                <h1>Where we are</h1>
            </div>

            <div class="row" id="row-1028996918">
                <div class="col-md-8">
                    <div class="col-inner">
                        <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_158769735">
                            <div class="img-inner dark">
                                <img width="2560" height="1256" <img src="<?=get_template_directory_uri()?>/images/aboutus/location_map.png" >
                                <br><br><br>
                                <a href="https://chintglobal.com/" class="button" style="font-size: 12px;padding: 10px;height: auto;line-height: initial;">Chint Global >></a>
                            </div>

                            <style scope="scope">

                                #image_158769735 {
                                    width: 100%;
                                }
                            </style>
                        </div>

                    </div></div>


                <div class="col-md-4"><div class="col-inner">
                        <div class="gap-element clearfix" style="display:block; height:auto; padding-top:50px"></div>
                        <p class="mtext" style="text-align: center;"><span class="timer count-title count-number mtext1" data-from="0" data-to="28" data-speed="1500" id="count-regions">140</span>countries and regions</p>
                        <div class="gap-element clearfix" style="display:block; height:auto; padding-top:40px"></div>
                        <p class="mtext" style="text-align: center;"><span class="timer count-title count-number mtext1" data-from="0" data-to="4300" data-speed="1500" id="count-empower">30,000 +</span> Empowering </p>
                        <div class="gap-element clearfix" style="display:block; height:auto; padding-top:40px"></div>
                        <p class="mtext" style="text-align: center;"> <span class="timer count-title count-number mtext1" data-from="0" data-to="50000" data-speed="1500" id="count-sales">2000+</span> Sales Companies</p>
                        <div class="gap-element clearfix" style="display:block; height:auto; padding-top:40px"></div>
                        <p class="mtext" style="text-align: center;"><span class="timer count-title count-number mtext1" data-from="0" data-to="6" data-speed="1500" id="count-global">21</span> Global Subsidiaries </p>
                    </div></div>
            </div>

        </div>

    </section>


















    <section class="dzsparallaxer auto-init video-wrap" data-options='{direction: "reverse"}' style="height: 600px;">
        <div class="divimage dzsparallaxer--target " style="width: 100%; height: 100%; background-image: url(<?=get_template_directory_uri()?>/images/new_big_image_aboutus.png)"></div>

        <div class="video-content-wrap center-it" style="z-index:1;">

            <h2>
                We believe in  <span>empowering values </span>  that contribute towards the progress of  <span>future generations and environment</span>
            </h2>
            <a href="contact-us" class="f-button"><i class="fas fa-headphones"></i> Contact Us</a>
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
                      var date = new Date();
                      var year = date.getYear();
                      year = year < 1000 ? year + 1900 : year;
                      document.write('&copy;' + '&nbsp;' + year);
                    </script> CHINT ENERGY. Powered by Tropusi
                </p>
            </div>
        </div>
        <!-- End Footer-Copyrights -->

    </footer>

</div>



<?php
get_footer();

