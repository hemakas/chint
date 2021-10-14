<?php
/*
 * Template Name: General Inner Page
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
                <!--                    <h2>--><?//= get_the_title() ?><!--</h2>-->
                <div class="breadcrumb__links">
                    <a href="<?= get_home_url() ?>" style="color: #7d7d7d">Home</a>
                    <span><?= get_the_title() ?></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wrapper">

    <section class="about">
        <div class="container">
			<?php the_content(); ?>
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
