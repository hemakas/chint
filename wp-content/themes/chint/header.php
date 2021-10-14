<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="google-site-verification" content="B3AN_VAADVa338JkZoWKcuTZZk9dNUChjSIKHoi6FzE"/>

	<?php wp_head(); ?>
    <link rel="icon" href="<?= get_template_directory_uri() ?>/images/favicon.ico">

    <title>Chint Energy</title>


    <!-- ** CSS **
================================================== -->
    <link href="<?= get_template_directory_uri() ?>/css/master.css" rel="stylesheet">

</head>
<header class="header-section top-bar important-class">

    <div class="top-wrap">
        <div class="address-social row hidden-xs hidden-sm">
            
            
            
            
            <ul class="social-icon pull-right">
                <li><a class="fab fa-facebook-f facebook" target="_blank"
                       href="https://www.facebook.com/CHINTEnergy"></a></li>
                <li><a class="fab fa-linkedin-in linkedin" target="_blank"
                       href="https://www.linkedin.com/company/chint-energy-pvt-ltd"></a></li>
                <li><a class="fab fa-instagram instagram" target="_blank"
                       href="https://www.instagram.com/chintenergy/?igshid=cdxzh9k3e1kk"></a></li>
            </ul>

            <ul class="contact-block preload-animated preload-fadeInLeft">
                <li><a><i class="fa fa-phone"></i><span>+94 11 702 1611 </span></a></li>
                <li><a><i class="fa fa-envelope"></i><span> info@chintenergy.lk</span></a></li>
            </ul>
            <ul class="contact-block preload-animated preload-fadeInLeft electrician-survey">
                <li><a href="#" target="_blank"><i class="fa fa-battery-full"></i><span>Help Center</span></a></li>
            </ul>
            
        </div>
    </div>

    <div class="col-md-2 col-xs-2 col-sm-2">
        <a href="<?= get_home_url() ?>" class="menuzord-brand row">
            <img src="<?= get_template_directory_uri() ?>/images/logo.png">
        </a>
    </div>

    <!-- Main menu -->
    <div id="menuzord" class="menuzord col-md-10 col-xs-12 col-sm-10">

		<?php
		wp_nav_menu( array(
			'theme_location' => 'primary_menu',
			'container'      => false,
			'menu_class'     => 'menuzord-menu menuzord-right menuzord-indented scrollable',
			'walker'         => new Child_Wrap(),
		) );
		?>
    </div>
    <!-- / Main menu -->

</header>