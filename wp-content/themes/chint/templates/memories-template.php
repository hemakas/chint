<?php
/*
 * Template Name: Memories
 * Version: 1.0
 */
get_header();

//Getting all the post details
$post_type = 'our-memories';
$args      = [
	'post_type'      => $post_type,
	'post_status'    => 'publish',
	'posts_per_page' => 8,
	'orderby'        => 'title',
	'order'          => 'ASC',
];

$posts_loop              = new WP_Query( $args );
$memory_class_names_list = '';
//Getting the list of Memory Groups
while ( $posts_loop->have_posts() ) {
	$posts_loop->the_post();

	if ( $posts_loop->current_post + 1 == $posts_loop->post_count ) {
		$memory_class_names_list .= '.mem_' . get_the_ID();
	} else {
		$memory_class_names_list .= '.mem_' . get_the_ID() . ', ';
	}
	wp_reset_postdata();
}
?>

    <body class="sub-page">
    <section
            class="sub-page-banner" <?php echo get_field( 'banner_image' ) == '' ? '' : 'style="background-image: url(' . get_field( 'banner_image' ) . ')"' ?>>

    </section>
    <div class="container" style="padding-top: 20px">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <!--                        <h2>Memories</h2>-->
                    <div class="breadcrumb__links">
                        <a href="<?= get_home_url() ?>" style="color: #7d7d7d">Home</a>
                        <span>memories</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="wrapper">

        <section class="about">
            <div class="container">

                <div class="project-name-list">
                    <ul id="filters" class="clearfix">
                        <li><span class="filter active" data-filter="<?= $memory_class_names_list ?>">All</span></li>

						<?php
						while ( $posts_loop->have_posts() ) {
							$posts_loop->the_post();
							?>

                            <li><span class="filter"
                                      data-filter=".mem_<?= get_the_ID() ?>"><?= get_the_title() ?></span></li>

							<?php
						}

						?>
                    </ul>
                </div>

                <div id="portfoliolist" class="customer-list">

					<?php
					while ( $posts_loop->have_posts() ) {
						$posts_loop->the_post();

						if ( have_rows( 'images' ) ) {
							while ( have_rows( 'images' ) ) {
								the_row();
								$thumbnail  = get_sub_field( 'thumbnail_image' );
								$full_image = get_sub_field( 'full_image' );

								?>
                                <div class="portfolio mem_<?= get_the_ID() ?>" data-cat="app">
                                    <a class="portfolio-wrapper image-popup-vertical-fit" href="<?= $full_image ?>">
                                        <img src="<?= $thumbnail ?>" alt=""/>
                                    </a>
                                </div>
								<?php
							}
						}
					}
					?>

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
                    <a href="https://www.facebook.com/CHINTEnergy" style="margin: 2px;"><i
                                class="fab fa-facebook-square fa-2x" style="color: #3b5998; font-size: 2.5em"></i></a>
                    <a href="https://www.instagram.com/chintenergy/?igshid=cdxzh9k3e1kk" style="margin: 2px;"><i
                                class="fab fa-instagram-square fa-2x" style="color: #C13584; font-size: 2.5em"></i></a>
                    <a href="https://www.linkedin.com/company/chint-energy-pvt-ltd" style="margin: 2px;"><i
                                class="fab fa-linkedin fa-2x" style="color: #0077b5; font-size: 2.5em"></i></a>
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


    <!-- ** Bootstrap core JavaScript **
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/jquery-1.11.1.min.js"></script>

    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/menuzord.js"></script>

    <!-- Portfolio -->
    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/jquery.mixitup.min.js"></script>
    <script type="text/javascript">
      (function ($) {
        $(function () {
          var filterList = {
            init: function () {
              // MixItUp plugin
              // http://mixitup.io
              $('#portfoliolist').mixItUp({
                selectors: {
                  target: '.portfolio',
                  filter: '.filter',
                },
                load: {
                  filter: '<?=$memory_class_names_list?>',
                },
              })
            },
          }
          // Run the show!
          filterList.init()
        })
      })(jQuery)
    </script>

    <!-- Popup Image Script -->
    <script src='<?= get_template_directory_uri() ?>/js/jquery.magnific-popup.min.js'></script>
    <script>
      (function ($) {
        $(document).ready(function () {
          $('.image-popup-vertical-fit').magnificPopup({
            type: 'image',
            mainClass: 'mfp-with-zoom',
            gallery: {
              enabled: true,
            },

            zoom: {
              enabled: true,

              duration: 300, // duration of the effect, in milliseconds
              easing: 'ease-in-out', // CSS transition easing function

              opener: function (openerElement) {

                return openerElement.is('img') ? openerElement : openerElement.find('img')
              },
            },

          })

        })
      })(jQuery)
    </script>

    <!-- Preload Script -->
    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/preloader.js"></script>

    <!-- Parallax Image -->
    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/dzsparallaxer.js"></script>

    <script type="text/javascript" src='<?= get_template_directory_uri() ?>/js/script.js'></script>


    </body>

    </html>

<?php
get_footer();