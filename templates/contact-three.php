<?php get_header(); ?>

			<!-- ************************ -->
			<!--   PAGE TITLE             -->
			<!-- ************************ -->
            <?php while (have_posts()) : the_post();

                $thumb_id = get_post_thumbnail_id();
                $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
            ?>
			<div class="page-title jarallax" style="background-image: url(<?php echo $thumb_url[0]; ?>);">

				<div class="overlay"></div>
				<!-- End overlay -->
				<div class="container">
					<div class="text-center">

						<h1 class="tlt"><?php the_title(); ?></h1>

						<div class="breadcrumbs">
							<ul class="list-none">
								<li><a href="<?php echo esc_url( home_url() ); ?>" class="animsition-link"><?php esc_html_e('Home', 'crazy'); ?></a></li>
								<?php if (is_subpage()) { ?><li><a href="<?php echo get_permalink($post->post_parent); ?>" class="animsition-link"><?php echo get_the_title($post->post_parent); ?></a></li><?php } ?>
								<li><?php the_title(); ?></li>
							</ul>
						</div>
						<!-- End breadcrumbs -->

					</div>
				</div>
				<!-- End container -->
			</div>
			<!-- End page-title -->
            <?php endwhile; ?>
			<main>
            <?php if( have_rows('blocks') ): ?>
				<!-- ************************ -->
				<!--   CONTACT INFO           -->
				<!-- ************************ -->

				<section class="pt150">
					<div class="container">
						<div class="contacts-wrap">
							<div class="borders"></div>
							<div class="row">
                            <?php while( have_rows('blocks') ) : the_row(); ?>
                                <div class="col-md-4 sm-mb40" data-sr>
									<div class="text-center">
										<div class="contact-item">
											<i class="<?php the_sub_field('icon'); ?>"></i>
											<?php the_sub_field('text'); ?>
										</div>
										<!-- End contact-item -->
									</div>
								</div>
                            <?php endwhile; ?>
							</div>
						</div>
						<!-- End contacts-wrap -->
					</div>
					<!-- End container -->
				</section>
                <?php endif; if(get_post_meta($post->ID, 'include_form', true)=="yes") { ?>
				<!-- ************************ -->
				<!--   CONTACT FORM           -->
				<!-- ************************ -->

				<section class="pt150 pb150">
					<div class="container">

						<div class="text-center mb40">
							<h2 class="uppercase" data-sr><?php echo get_post_meta($post->ID, 'header', true); ?></h2>
						</div>
					</div>
					<!-- End container -->

					<div class="container">

						<div class="row">
							<div class="col-sm-8 col-sm-offset-2" data-sr="wait .2s">

								<form
									class="contact-form form-black"
									id="contact-form"
									action="<?php echo get_template_directory_uri(); ?>/send_email.php"
									method="post"
									data-all-fields-required-msg="<?php esc_html_e('All fields are required', 'crazy'); ?>"
									data-ajax-fail-msg="<?php esc_html_e('Ajax could not set the request', 'crazy'); ?>"
									data-success-msg="<?php esc_html_e('Email successfully sent.', 'crazy'); ?>">
									<div class="col-sm-12 mb30">
										<div class="form-control">

											<input
												class="contact-form-name"
												type="text"
												name="name"
												placeholder="<?php esc_html_e('Your name:', 'crazy'); ?>">
											<div class="line-input"></div>

										</div>
									</div>
									<!-- End col-sm-12 -->
									<div class="col-sm-12 mb30">
										<div class="form-control">

											<input
												class="contact-form-email"
												type="text"
												name="email"
												placeholder="<?php esc_html_e('Your email:', 'crazy'); ?>">
											<div class="line-input"></div>

										</div>
									</div>
									<!-- End col-sm-12 -->
									<div class="col-sm-12 mb50">
										<div class="form-control">

											<textarea class="contact-form-message" name="message" placeholder="<?php esc_html_e('Message:', 'crazy'); ?>"></textarea>
											<div class="line-input"></div>

										</div>
									</div>
									<!-- End col-sm-12 -->
									<div class="col-sm-12">
										<div class="text-center">

											<button class="btn">
												<span><?php esc_html_e('Submit', 'crazy'); ?><i class="fa fa-spin fa-spinner ajax-loader" style="display: none;"></i>
												</span>
											</button>

										</div>
									</div>
									<!-- End  -->
									<div class="col-sm-12">
										<div class="text-center">
											<p class="return-msg">&nbsp;</p>
										</div>

									</div>
								</form>
								<!-- End contact-form -->

							</div>

						</div>
					</div>
					<!-- End container -->
				</section>
                <?php } if(get_post_meta($post->ID, 'insert_the_card', true)=="yes") { ?>
				<!-- ************************ -->
				<!--   GOOGLE MAP             -->
				<!-- ************************ -->

				<section>
					<div class="container-fluid">
						<div class="row">

							<div
								class="map"
								id="map"
								data-lat="<?php echo get_post_meta($post->ID, 'coordinate_1', true); ?>"
								data-lng="<?php echo get_post_meta($post->ID, 'coordinate_2', true); ?>"
								data-zoom="<?php echo get_post_meta($post->ID, 'zoom', true); ?>"></div>
							<!-- End Map -->

						</div>
					</div>
				</section>
                <?php } ?>
			</main>
            
            <!-- Google Map -->
		    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>

<?php get_footer(); ?>