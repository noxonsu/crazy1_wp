<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>

		<meta charset="utf-8">

        <?php wp_head();?>

        <?php if(get_theme_mod('favicon_upload')=="") { ?>

		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon">

        <?php } else { ?>

        <link rel="shortcut icon" href="<?php echo get_theme_mod('favicon_upload'); ?>" type="image/x-icon">

        <?php } ?>

         <!-- Plugins -->

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animsition.min.css">

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css">

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/remodal.css">

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/remodal-default-theme.css">

		<!-- Icons -->

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/linear_icons.css">

		<!-- Custom CSS -->

        <?php if(get_theme_mod('style_h')=="two") { ?>

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style_two.css">

        <?php } elseif(get_theme_mod('style_h')=="three") { ?>

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style_three.css">

        <?php } else { ?>

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style_one.css">

        <?php } ?>

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
        
        <?php if ( is_admin_bar_showing() ) { ?>
        <style>
		    .frame-line.top-frame {
   		        height: 30px !important;
    		    top: 32px !important;
		    }
		</style>
       <?php } ?>

	</head>



	<body id="top" <?php body_class(); if ( ! isset( $content_width ) ) $content_width = 900; ?>>



		<div class="animsition">



			<!-- ************************ -->

			<!--  GO TO TOP               -->

			<!-- ************************ -->



			<a href="#top" class="toTop">

				<i class="fa fa-arrow-up"></i>

			</a>



			<!-- ************************ -->

			<!--   PAGE BORDER            -->

			<!-- ************************ -->



			<span class="frame-line animated top-frame"></span>

			<span class="frame-line animated right-frame"></span>

			<span class="frame-line animated bottom-frame"></span>

			<span class="frame-line animated left-frame"></span>



			<!-- ************************ -->

			<!--   NAVBAR                 -->

			<!-- ************************ -->



			<div class="crazy-navbar">

				<div class="container">



					<div class="crazy-border"></div>



					<div class="crazy-logo">

                        <?php if(get_theme_mod('logo_upload')!="") { ?>

                        <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_theme_mod('logo_upload'); ?>" alt="<?php bloginfo('name'); ?>"></a>

                        <?php } else { ?>

                        <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.png" alt="<?php bloginfo('name'); ?>"></a>

                        <?php } ?>

					</div>

					<!-- End crazy-logo -->



					<nav class="crazy-nav">

						<ul class="sf-menu">

							<?php 

							   $walker = new mainMenuWalker ();

							   wp_nav_menu(array('theme_location'=>'primary','fallback_cb'=>'Main menu','container'=>false,'walker' => $walker,'items_wrap'=>'%3$s',)); 

							?>

						</ul>

					</nav>

					<a href="#" class="open-menu">

						<i class="burger-icon">

							<i></i>

						</i>

					</a>

				</div>

				<!-- End container -->

				<div class="container">

					<div class="row">

						<div class="mobile-menu-wrap">

							<nav>

								<ul class="list-none">

									<?php wp_nav_menu(array('theme_location'=>'primary','fallback_cb'=>'Main menu','container'=>false,'walker' => $walker,'items_wrap'=>'%3$s',)); ?>

								</ul>

							</nav>

						</div>

						<!-- End mobile-menu-wrap -->

					</div>

				</div>

				<!-- End container -->

			</div>