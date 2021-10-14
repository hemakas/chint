<?php
/*
 * Single category page template
 */
get_header();
$category = get_queried_object();;
$category_id    = $category->term_id;
$category_name  = $category->name;
$sub_categories = get_categories( [
	'parent' => $category_id
] )
?>

<body class="sub-page">

<!-- <a onClick="openPopup('#wrap_popup1')">Open 1st Popup</a> |  -->

<!-- Popup -->
<div id="wrap_popup1" class="wrap_popup">
    <div class="popup">
        <!-- <div class="title">
			<p>Advert popup</p>
		</div> -->

        <div class="box">
            <button onClick="closePopup('#wrap_popup1')"><i class="fas fa-times"></i></button>
            <!-- partial:index.partial.html -->
            <div class="tabbedPanels">  <!-- begins the tabbed panels / wrapper-->

                <ul class="tabs">
                    <li><a href="#panel1">Overview</a></li>
                    <li><a href="#panel2">Specifications</a></li>
                </ul>

                <div class="panelContainer">
                    <div id="panel1" class="panel">
                    </div>  <!-- end panel 1 -->

                    <div id="panel2" class="panel">
						<?php
						if (get_field('specifications', $category_id) == ''){
							?>
                            <p><a id="specification-link s" href="#">Click to
                                    Download the
                                    Specificationas</a></p>
							<?php
						}
						else{
							?>
                            <p><a id="specification-link s" href="<?=get_field('specifications', $category_id)?>" target="_blank">Click to
                                    Download the
                                    Specificationss</a></p>
							<?php
						}
						?>

						<?php
						if (get_field('certificate', $category_id) == ''){
							?>
                            <p><a id="certification-link" href="#">Click to
                                    Download the
                                    Certifications</a></p>
							<?php
						}
						else{
							?>
                            <p><a id="certification-link" href="<?=get_field('certificate', $category_id)?>" target="_blank">Click to
                                    Download the
                                    Certifications</a></p>
							<?php
						}
						?>
                    </div> <!-- end panel 2 -->
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Popup -->

<section class="sub-page-banner" <?php echo get_field('banner_image') == '' ? '' : 'style="background-image: url('. get_field('banner_image').')"'?>>
</section>
    <div class="container" style="padding-top: 20px">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <!--                    <h2>--><?//= $category_name ?><!--</h2>-->
                    <div class="breadcrumb__links">
                        <a href="<?= get_home_url() ?>" style="color: #7d7d7d">Home</a>
                        <span><?= $category_name ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="wrapper">

    <section class="about">
        <div class="container">

			<?php
			//Looping through the sub categories to make the carousels
			foreach ( $sub_categories as $sub_category ) {
				$sub_category_name = $sub_category->name;
				$sub_category_id   = $sub_category->term_id;
				?>

                <div class="row  gallery-row" style="margin-bottom: 20px;">

                    <h2><?= $sub_category_name ?></h2>

                    <div id="owl-demo" class="owl-carousel">

						<?php
						//Looping through all the products to find products in the sub category
						$product_args = [
							'post_type'      => 'products-list',
							'post_status'    => 'publish',
							'posts_per_page' => - 1,
							'cat'            => $sub_category_id,
						];

						$loop = new WP_Query( $product_args );

						while ( $loop->have_posts() ) {
							$loop->the_post();
							?>

                            <div class="item">
                                <a href="#" class="gallery-wrap"
                                   onClick="openPopup('#wrap_popup1', <?= get_the_ID() ?>)">
                                    <img src="<?= get_field( 'featured_image' ) ?>"/>
                                    <div class="title">
                                        <h3><?= get_the_title() ?></h3>
                                    </div>
                                </a>
                            </div>

							<?php
						}
						wp_reset_postdata();
						?>

                    </div>
                </div>

				<?php
			}
			?>


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


<!-- ** Bootstrap core JavaScript **
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/jquery-1.11.1.min.js"></script>

<script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/menuzord.js"></script>

<!-- Owl Carousel Assets -->
<link href="<?= get_template_directory_uri() ?>/js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="<?= get_template_directory_uri() ?>/js/owl-carousel/owl.theme.css" rel="stylesheet">
<script src="<?= get_template_directory_uri() ?>/js/owl-carousel/owl.carousel.js"></script>
<!-- Demo -->
<script>
  $(document).ready(function () {

    $('#owl-demo, #owl-demo2').owlCarousel({
      items: 4,
      lazyLoad: true,
      navigation: true,
      autoPlay: true,
    })

  })
</script>

<!-- Preload Script -->
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/preloader.js"></script>

<!-- Parallax Image -->
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/dzsparallaxer.js"></script>

<script type="text/javascript" src='<?= get_template_directory_uri() ?>/js/script.js'></script>


<!--  Popup  -->
<script>
  async function openPopup (divPopup, productId) {
    let productData = {
      productId: productId,
    }
    let response = await fetch('<?=get_template_directory_uri()?>/inc/product_details_request_handler.php', {
      method: 'POST',
      mode: 'same-origin',
      credentials: 'same-origin',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({
        'payload': productData,
      }),
    })
    let data = await response.text()

    let decodedData = JSON.parse(data)

    $('#panel1').html(decodedData.overview)
    $('#specification-link').attr('href', decodedData.specifications)

    $(divPopup).fadeIn(250)
  }

  function closePopup (divPopup) {
    $(divPopup).fadeOut(250)
  }
</script>

<!--  Tab Menu  -->
<script>
  $(document).ready(function () {

    //alert('here');

    $('.tabs a').click(function () {

      $('.panel').hide()
      $('.tabs a.active').removeClass('active')
      $(this).addClass('active')

      var panel = $(this).attr('href')
      $(panel).fadeIn(100)

      return false  // prevents link action

    })  // end click

    $('.tabs li:first a').click()

  }) // end ready
</script>


</body>

</html>