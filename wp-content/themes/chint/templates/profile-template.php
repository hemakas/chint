<?php
/*
 * Template Name: Profile
 * Version: 1.0
 */

get_header();
?>
    <body class="sub-page">

    <!-- --- Preload Start --- -->
    <!-- <div id="preload">
		<div class="container logo">

			<div class="ispinner gray animating">
				<div class="ispinner-blade"></div>
				<div class="ispinner-blade"></div>
				<div class="ispinner-blade"></div>
				<div class="ispinner-blade"></div>
				<div class="ispinner-blade"></div>
				<div class="ispinner-blade"></div>
				<div class="ispinner-blade"></div>
				<div class="ispinner-blade"></div>
				<div class="ispinner-blade"></div>
				<div class="ispinner-blade"></div>
				<div class="ispinner-blade"></div>
				<div class="ispinner-blade"></div>
			</div>

			<div class="text-logo animated flipoutY fadeOutUp"><img alt="" src="images/loding-logo.png"></div>

		</div>
	</div> -->
    <!-- --- End Preload --- -->

    <!-- Fixed Header -->

    <!-- / Fixed Header -->

    <section class="sub-page-banner" <?php echo get_field('banner_image') == '' ? '' : 'style="background-image: url('. get_field('banner_image').')"'?>>
    </section>
        <div class="container" style="padding-top: 20px">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <!--					<h2>About Us</h2>-->
                        <div class="breadcrumb__links">
                            <a href="<?= get_home_url()?>" style="color:#7d7d7d;">Home</a>
                            <span>Profile</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <div class="wrapper">

        <section class="about">
            <div class="container">

                <div class="col-inner-wrap">
                    <div class="col-md-6" id="faham-nauman">
                        <h1>Faham Nauman <span style="font-size: 22px;">The Risketarian</span></h1>
                        <p style="text-align:justify">
                            No dream was big enough for young Faham Nauman. Starting his career just after his secondary
                            education in 1989, Faham Nauman was an ambitious entrepreneur who wanted to explore the
                            roots outside his family business of 50 years, Fazaal Hardware Stores in Galle. His
                            determination and thirst for the future led him to setup a store in Colombo, importing his
                            first container of ceramic tiles to Sri Lanka in the 1990’s. This led to the inception of
                            Fazaal Ceramics.

                        </p>
                        <p style="text-align:justify">
                            In 2011, he ventured into a partnership with Mr. Kamil Hussain, creating Synergy Ventures,
                            the company that later on became the sole distributors and authorised agents for Hansa, the
                            number one Faucet Brand in Germany as well New Pearl Group, China - the largest tile
                            manufacturer in China. Having completed many successful projects in the market including a
                            well noted National project for the Ministry of Defence, Synergy Ventures is definitely
                            moving towards a well-earned fea

                        </p>

                    </div>

                    <div class="col-md-6">
                        <div class="single-image-container">
                            <img class="sh-image-url" src="https://tropusi.com/chint/CMS/wp-content/uploads/2021/07/profile-img1.jpg" alt="call-1866884_1920">
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <p> Away from the the corporate space, Faham Nauman is an efficient cricketer, professional car race
                        driver and a car collector. One of his favourite quote is from the late Ayrton Senna,
                        professional racing driver - “If you no longer go for a gap that exists, you are no longer a
                        racing driver”, and he believes it’s the same philosophy he applies for his business, helping
                        him be agile, flexible and versatile to bridge existing business gaps </p>
                    <p> A man of many roles, Faham Nauman is currently the Chairman of CHINT Energy, whilst also being
                        the Managing Director of Fazaal Ceramics. He’s also a member of the Tiles and Sanitary ware
                        Importers Association as well as a member of the Sri Lanka Association of Racing Drivers and
                        Riders (SLARDAR) - The premier Motor Sports Club in Sri Lanka </p>
                </div>

                <div class="col-inner-wrap" id="kamil-hussain">
                    <div class="col-md-6">
                        <div class="single-image-container">
                            <img class="sh-image-url" src="https://tropusi.com/chint/CMS/wp-content/uploads/2021/07/profile-img2.jpg" alt="call-1866884_1920">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h1>Kamil Hussain <span style="font-size: 22px;">Tomorrow’s Visionary</span></h1>
                        <p style="text-align:justify">
                            Changing the game for the past 16 years, Kamil Hussain is a well-known veteran in the field
                            of marketing, specialising in Brand Marketing and Management. Starting his career in 1997 as
                            a Trade Marketing Executive at British American Tobacco, he moved up the ladder swiftly
                            securing a secondment as a Brand Manager in BAT Kenya for a Business Process Re-engineering
                            project. With an effectual stint in Kenya, he returned to Sri Lanka as the Chief Operating
                            Officer at Orange Electric, a well-known electrical accessories exporter in Sri Lanka.
                            During his tenure, he turned around Orange Electric from a withering company to a successful
                            enterprise thus adding value towards the economy of the country. His agile personality and
                            his indisputable success at Orange Electric elevated his position to Chief Executive
                            Officer, but Kamil Hussain was seeking for bigger challenges.
                        </p>

                    </div>

                    <div class="col-md-12">
                        <p> This led to the inception of Synergy Ventures with his dear friend and partner, Faham
                            Nauman. The company started out as a simple importing business of bathware and tiles for
                            projects and later became distributors of renowned international bathware in Sri Lanka. A
                            man with many successes is also man with many passions, mainly racing. Presently, he is the
                            President of the Sri Lanka Association of Racing Drivers and Riders (SLARDAR) - The premier
                            Motor Sports Club in Sri Lanka. He also has extensive experience in serving on private
                            sector and government boards and committees and is currently, the President of the Tiles and
                            Sanitary Ware Importers Association.</p>
                        <p>Today, Kamil Hussain leads CHINT Energy as the Managing Director, actively playing a
                            visionary role in building the brand image and market equity of the CHINT brand in Sri
                            Lanka, because he strongly believes that ‘Impossible is Nothing’. </p>
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


<?php
get_footer();

