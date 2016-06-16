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
                <?php if(get_post_meta($post->ID, 'display_unit2', true)=="show") { ?>
				<!-- ************************ -->
				<!--   SECTION FEATURES       -->
				<!-- ************************ -->

				<section class="features pt100 pb100">

					<div class="container">
						<div class="row">
                        <?php if( have_rows('blocks1') ): while( have_rows('blocks1') ) : the_row(); ?>
                            <div class="feature-item sm-mb40" data-sr>
								<div class="col-md-3 col-sm-6">
									<div class="item-head">
										<i class="<?php the_sub_field('icon1'); ?>"></i>
									</div>
									<h6><?php the_sub_field('header1'); ?></h6>
									<p><?php the_sub_field('text1'); ?></p>
								</div>
							</div>
							<!-- End features-item -->
                        <?php endwhile; endif; ?>
						</div>
					</div>
					<!-- End container -->

				</section>
                <?php } if(get_post_meta($post->ID, 'display_unit1', true)=="show") { ?>
				<!-- ************************ -->
				<!--   SECTION ABOUT          -->
				<!-- ************************ -->

				<section class="pt50">

					<div class="container">
						<div class="row">
							<div class="info-block-wrap clearfix">

								<div
									class="image-block col-md-7"
									style="background-image: url(<?php echo get_field( "picture0" ); ?>);"></div>
								<div class="col-md-7">

									<div class="info-block sm-mb30">

										<div class="owl-about-slider">
									    <?php if( have_rows('texts') ): while( have_rows('texts') ) : the_row(); ?>
                                            <div class="owl-item">
												<?php the_sub_field('text0'); ?>
											</div>
											<!-- End owl-item -->
                                        <?php endwhile; endif; ?>
										</div>
										<!-- End owl-slider-two -->

									</div>
									<!-- End info-block -->

								</div>

								<!-- End image-block -->

							</div>
							<!-- End info-block-wrap -->

						</div>

					</div>
					<!-- End container -->

					<div class="container">

						<div class="love-block">
							<h2 data-sr><?php echo apply_filters('the_content', get_post_meta($post->ID, 'text00', true)); ?></h2>
						</div>
						<!-- End love-block -->

					</div>
					<!-- End container -->
				</section>

				<!-- ************************ -->
				<!--   SEPARATOR              -->
				<!-- ************************ -->

				<div class="container">
					<div class="sep-line"></div>
				</div>
				<!-- End container -->
                <?php  } if(get_post_meta($post->ID, 'display_unit3', true)=="show") { ?>
				<!-- ************************ -->
				<!--   OUR SKILLS             -->
				<!-- ************************ -->

				<section class="pt150 pb150">

					<div class="container">

						<div class="section-title-sm">
							<h2 data-sr><?php echo get_post_meta($post->ID, 'header2', true); ?></h2>

							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<em data-sr="wait .2s"><?php echo get_post_meta($post->ID, 'text2', true); ?></em>
								</div>
							</div>

						</div>
					</div>
					<!-- End container -->

					<div class="container">
						<div class="row">
							<div class="col-sm-6 sm-mb30">
								<ul class="progress-bar">
                                <?php if( have_rows('progress_bar1') ): while( have_rows('progress_bar1') ) : the_row(); ?>
                                    <li data-sr>
										<p><strong><?php the_sub_field('description3'); ?></strong> <i><?php the_sub_field('progress3'); ?></i>%</p>
										<div class="bar-wrap"><span data-width="<?php the_sub_field('progress3'); ?>"></span></div>
									</li>
                                <?php endwhile; endif; ?>
								</ul>
								<!-- End progress-bar -->
							</div>
							<div class="col-sm-6">
								<ul class="progress-bar">
                                <?php if( have_rows('progress_bar2') ): while( have_rows('progress_bar2') ) : the_row(); ?>
                                    <li data-sr>
										<p><strong><?php the_sub_field('description33'); ?></strong> <i><?php the_sub_field('progress33'); ?></i>%</p>
										<div class="bar-wrap"><span data-width="<?php the_sub_field('progress33'); ?>"></span></div>
									</li>
                                <?php endwhile; endif; ?>
								</ul>
								<!-- End progress-bar -->
							</div>
						</div>
					</div>
					<!-- End container -->

				</section>
                <?php  } if(get_post_meta($post->ID, 'display_unit6', true)=="show") { ?>
				<!-- ************************ -->
				<!--   COUNTERS               -->
				<!-- ************************ -->

				<section
					class="counters jarallax pt100 pb100"
					style="background-image: url(<?php echo get_field( "background_image6" ); ?>);">
					<div class="overlay"></div>

					<div class="container">
						<div class="row">
                        <?php if( have_rows('blocks6') ): while( have_rows('blocks6') ) : the_row(); ?>
                            <div class="counter-item sm-mb40" data-sr>
								<div class="col-md-3 col-sm-6">
									<div class="item-head">
										<i class="<?php the_sub_field('icon6'); ?>"></i>
									</div>
									<h6><?php the_sub_field('number6'); ?></h6>
									<p><?php the_sub_field('text6'); ?></p>
								</div>
							</div>
							<!-- End counter-item -->
                        <?php endwhile; endif; ?>
						</div>
					</div>
					<!-- End container -->

				</section>
                <?php  } if(get_post_meta($post->ID, 'display_unit5', true)=="show") { ?>
				<!-- ************************ -->
				<!--   OUR TEAM               -->
				<!-- ************************ -->

				<section class="pt150 pb150">

					<div class="container">

						<div class="section-title-sm">
							<h2 data-sr><?php echo get_post_meta($post->ID, 'header5', true); ?></h2>

							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<em data-sr="wait .2s"><?php echo get_post_meta($post->ID, 'text5', true); ?></em>
								</div>
							</div>

						</div>
					</div>
					<!-- End container -->

					<div class="container">
						<div class="row">
						<?php if( have_rows('blocks5') ): while( have_rows('blocks5') ) : the_row(); ?>
                            <div class="col-sm-4">
								<div class="team-item sm-mb40" data-sr>
									<div class="team-header">
										<img src="<?php the_sub_field('picture5'); ?>" alt="<?php the_sub_field('header55'); ?>">
										<div class="social-wrap">
											<ul class="list-none">
                                            <?php if(get_sub_field('link_to_facebook5')!="") { ?>
												<li>
													<a href="<?php the_sub_field('link_to_facebook5'); ?>">
														<i class="fa fa-fw fa-facebook"></i>
													</a>
												</li>
                                            <?php } if(get_sub_field('link_to_dribbble5')!="") { ?>
												<li>
													<a href="<?php the_sub_field('link_to_dribbble5'); ?>">
														<i class="fa fa-fw fa-dribbble"></i>
													</a>
												</li>
                                            <?php } if(get_sub_field('link_on_twitter5')!="") { ?>
												<li>
													<a href="<?php the_sub_field('link_on_twitter5'); ?>">
														<i class="fa fa-fw fa-twitter"></i>
													</a>
												</li>
                                            <?php } ?>
											</ul>
										</div>
										<!-- End social-wrap -->
									</div>
									<!-- End team-header -->
									<div class="team-footer">
										<h6><?php the_sub_field('header55'); ?></h6>
										<p><?php the_sub_field('text55'); ?></p>
									</div>
									<!-- End team-footer -->
								</div>
								<!-- End team-item -->
							</div>
                        <?php endwhile; endif; ?>
						</div>
					</div>
					<!-- End container -->

				</section>
                <?php  } if(get_post_meta($post->ID, 'display_unit7', true)=="show") { ?>
				<!-- ************************ -->
				<!--   TESTIMONIAL            -->
				<!-- ************************ -->
               
				<section
					class="testimonial-wrap jarallax pt150 pb150"
					style="background-image: url(<?php echo get_field( "picture777" ); ?>);">
					<div class="overlay"></div>
					<div class="container-fluid">
						<div class="row">
							<div class="owl-testimonial-slider">
								<?php if( have_rows('reviews7') ): while( have_rows('reviews7') ) : the_row(); ?>
                                <div class="owl-item" data-sr>
									<div class="avatar-wrap">
										<img src="<?php the_sub_field('picture77'); ?>" alt="avatar">
									</div>
									<?php the_sub_field('recall7'); ?>
								</div>
								<!-- End owl-item -->
                            <?php endwhile; endif; ?>
							</div>
							<!-- End owl-testimonial-slider -->
						</div>
					</div>
					<!-- End container-fluid -->

					<div class="testimonial-nav">
						<i class="lnr lnr-arrow-left pull-left"></i>
						<i class="lnr lnr-arrow-right pull-right"></i>
					</div>
					<!-- End testimonial-nav -->

				</section>
                <?php  } if(get_post_meta($post->ID, 'display_unit8', true)=="show") { ?>
				<!-- ************************ -->
				<!--   CLIENTS                -->
				<!-- ************************ -->

				<section class="clients pt90 pb90">
					<div class="container">
						<div class="row">
                        <?php if( have_rows('logos8') ): while( have_rows('logos8') ) : the_row(); ?>
							<div class="col-sm-6 col-md-3 sm-mb40" data-sr>
								<div class="text-center">
									<img src="<?php the_sub_field('logo8'); ?>" alt="client">
								</div>
							</div>
							<!-- End col-sm-6 col-md-3 -->
                        <?php endwhile; endif; ?>
						</div>
					</div>
					<!-- End container -->

				</section>
                <?php  } ?>
			</main>