			<!-- ************************ -->
			<!--   PAGE TITLE             -->
			<!-- ************************ -->

			<div class="title-home jarallax" style="background-image: url(<?php echo get_field( "background_image0" ); ?>);">

				<div class="overlay"></div>
				<!-- End overlay -->

				<div class="container">
					<div class="text-center">

						<h1 class="typed" data-sr>&nbsp;</h1>

						<em data-sr><?php echo get_post_meta($post->ID, 'text0', true); ?></em>

						<div class="buttons mt40 mb150">
                        <?php if( have_rows('button0') ): while( have_rows('button0') ) : the_row(); ?>
                            <a href="<?php the_sub_field('link0'); ?>" class="btn btn-white animsition-link" data-sr>
								<span><?php the_sub_field('text_u0'); ?></span>
							</a>
                        <?php endwhile; endif; ?>
						</div>

					</div>
				</div>
				<!-- End container -->

				<div class="container">
					<div class="text-center">
						<div class="goto" data-sr>

							<div class="border-top"></div>
                            
                            <?php if( have_rows('menu_portfolio') ): while( have_rows('menu_portfolio') ) : the_row(); $act++; ?>
                            <a href="<?php the_sub_field('link00'); ?>?act=<?php echo $act; ?>" class="animsition-link"><?php the_sub_field('text_u00'); ?></a>
                            <?php endwhile; endif; ?>

						</div>
						<!-- End goto -->
					</div>
				</div>
				<!-- End container -->
			</div>

			<main>
                <?php if(get_post_meta($post->ID, 'display_unit1', true)=="show") { ?>
				<!-- ************************ -->
				<!--   SECTION ABOUT          -->
				<!-- ************************ -->

				<section class="pt150">

					<div class="container">
						<div class="section-title">
							<h2 data-sr><?php echo get_post_meta($post->ID, 'header1', true); ?></h2>

							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<em data-sr="wait .2s"><?php echo get_post_meta($post->ID, 'subtitle1', true); ?></em>
								</div>
							</div>

						</div>
						<!-- End section-title -->
					</div>
					<!-- End container -->

					<div class="container">
						<div class="row">

							<div class="info-block-wrap clearfix">

								<div
									class="image-block col-md-7"
									style="background-image: url(<?php echo get_field( "picture1" ); ?>);"></div>
								<!-- End image-block -->
								<div class="col-md-7">
									<div class="info-block sm-mb30">
                                        <?php echo the_field('text1', false, false); ?>
                                        <?php if(get_post_meta($post->ID, 'link1', true) != "") { ?>
										<div class="mt40">
											<a href="<?php echo get_post_meta($post->ID, 'link1', true); ?>" class="btn btn-white animsition-link">
												<span><?php esc_html_e('read more', 'crazy'); ?></span>
											</a>
										</div>
                                        <?php } ?>
									</div>
									<!-- End info-block -->

								</div>

							</div>
							<!-- End info-block-wrap -->
						</div>

					</div>
					<!-- End container -->

					<div class="container">

						<div class="love-block">
							<h2 data-sr><?php echo apply_filters('the_content', get_post_meta($post->ID, 'text11', true)); ?></h2>
						</div>
						<!-- End love-block -->

					</div>
					<!-- End container -->
				</section>
                <?php  } if(get_post_meta($post->ID, 'display_unit2', true)=="show") { ?>
				<!-- ************************ -->
				<!--   SECTION FEATURES       -->
				<!-- ************************ -->

				<section class="features pt100 pb100">

					<div class="container">
						<div class="row">
                        <?php if( have_rows('blocks2') ): while( have_rows('blocks2') ) : the_row(); ?>
                            <div class="feature-item sm-mb40" data-sr>
								  <div class="col-md-3 col-sm-6">
									  <div class="item-head">
                                          <i class="<?php the_sub_field('icon2'); ?>"></i>
									  </div>
									  <h6><?php the_sub_field('header2'); ?></h6>
									  <p><?php the_sub_field('text2'); ?></p>
								  </div>
							  </div>
							  <!-- End features-item --> 
                        <?php endwhile; endif; ?>
						</div>
					</div>
					<!-- End container -->

				</section>
                <?php  } if(get_post_meta($post->ID, 'display_unit3', true)=="show") { ?>
				<!-- ************************ -->
				<!--   SECTION SERVICES       -->
				<!-- ************************ -->

				<section class="pt150 pb150">
					<div class="container">

						<div class="section-title">
							<h2 data-sr><?php echo get_post_meta($post->ID, 'header3', true); ?></h2>

							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<em data-sr="wait .2s"><?php echo get_post_meta($post->ID, 'text3', true); ?></em>
								</div>
							</div>

						</div>
					</div>
					<!-- End container -->

					<div class="container">
						<div class="sep-with-icon">
							<i class="cr-heart"></i>
							<span></span>
						</div>
					</div>
					<!-- End container -->

					<div class="container">
						<div class="row">
							<div class="owl-services">
                            <?php if( have_rows('slider3') ): while( have_rows('slider3') ) : the_row(); ?>
                            	<div class="owl-item">
									<div class="col-md-5">
										<img src="<?php the_sub_field('picture3'); ?>" alt="<?php the_sub_field('header33'); ?>">
									</div>
									<div class="col-md-6 col-md-offset-1">
										<h2 class="uppercase"><?php the_sub_field('header33'); ?></h2>
                                        <?php the_sub_field('text333'); ?>
                                        <?php if(get_sub_field('link3') != "") { ?>
										<div class="mt40">
											<a href="<?php the_sub_field('link3'); ?>" class="btn animsition-link">
												<span><?php esc_html_e('view works', 'crazy'); ?></span>
											</a>
										</div>
                                        <?php } ?>
									</div>
								</div>
								<!-- End owl-item -->
                            <?php endwhile; endif; ?>
							</div>
							<!-- End owl-services -->

						</div>
					</div>
					<!-- End container -->
					<div class="container">

						<div class="services-nav">
							<i class="lnr lnr-arrow-left"></i>
							<i class="lnr lnr-arrow-right"></i>
						</div>

					</div>
					<!-- End container -->
				</section>
                <?php  } if(get_post_meta($post->ID, 'display_unit4', true)=="show") { ?>
				<!-- ************************ -->
				<!--   VIDEO SECTION          -->
				<!-- ************************ -->

				<section
					class="video-section jarallax pt150 pb150"
					style="background-image: url(<?php echo get_field( "background_image4" ); ?>);">
					<div class="overlay"></div>
					<div class="container">
						<div class="row">
							<div class="col-sm-10 col-sm-offset-1">

								<h2 data-sr><?php echo get_post_meta($post->ID, 'header4', true); ?></h2>
								<em data-sr="wait .2s">
                                    <?php echo get_post_meta($post->ID, 'text4', true); ?>
								</em>
								<div class="mt90">
									<a href="<?php echo get_post_meta($post->ID, 'video4', true); ?>"
										class="btn btn-white btn-play popup-video"
										data-sr>
										<span>
											<i class="fa fa-play"></i>
										</span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- End container -->
				</section>
                <?php  } if(get_post_meta($post->ID, 'display_unit5', true)=="show") { ?>
				<!-- ************************ -->
				<!--   OUR WORKS              -->
				<!-- ************************ -->

				<section class="pt150 pb150">
					<div class="container">

						<div class="section-title">
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
							<div class="crazy-portfolio-masonry-wrapper" data-col="3">
								<div class="crazy-portfolio-list">
                                <?php query_posts('cat='.get_post_meta($post->ID, 'id_column5', true).'&showposts='.get_post_meta($post->ID, 'number_of_posts1', true)); if ( have_posts() ) : while ( have_posts() ) : the_post(); $fp++; ?>
                                    <div class="crazy-portfolio-item <?php echo get_post_meta($post->ID, 'class_filter', true); ?>">
										<a href="<?php the_permalink();?>" class="animsition-link">
                                            <?php $thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'portfolio-thumb', true); ?>
											<div class="image-wrap" style="background-image: url(<?php echo $thumb_url[0]; ?>);"></div>
											<div class="figure <?php echo figur($fp); ?>"></div>
											<div class="overlay-color"></div>
                                            <?php if( $fp > 9 ) { $fp = 0; } ?>
										</a>
									</div>
                                <?php endwhile; endif; wp_reset_query(); ?>
								</div>
								<!-- End crazy-portfolio-list -->
							</div>
							<!-- ENd crazy-portfolio-masonry-wrapper -->
                            <?php if(get_post_meta($post->ID, 'text_button5', true) !="") { ?>
							<div class="text-center mt80">
								<a href="<?php echo get_post_meta($post->ID, 'link5', true); ?>" class="btn animsition-link" data-sr>
									<span><?php echo get_post_meta($post->ID, 'text_button5', true); ?></span>
								</a>
							</div>
                            <?php } ?>

						</div>
					</div>
					<!-- End container -->

				</section>
                <?php  } if(get_post_meta($post->ID, 'display_unit6', true)=="show") { ?>
				<!-- ************************ -->
				<!--   COUNTERS               -->
				<!-- ************************ -->

				<section class="counters pt100 pb100">

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
                <?php  } if(get_post_meta($post->ID, 'display_unit7', true)=="show") { ?>
				<!-- ************************ -->
				<!--   TESTIMONIAL            -->
				<!-- ************************ -->

				<section class="pt150 pb150">

					<div class="container">
						<div class="row">

							<div class="testimonial-wrap clearfix">

								<div class="testimonial-image col-md-5">
									<img src="<?php echo get_field( "picture7" ); ?>" alt="image">
								</div>
								<!-- End testimonial-image -->

								<div class="col-md-8 col-md-offset-4">
									<div class="quote-block">
										<div class="owl-testimonial-slider">
                                         <?php if( have_rows('blocks7') ): while( have_rows('blocks7') ) : the_row(); ?>
                                             <div class="owl-item">
												<?php the_sub_field('text7'); ?>
											  </div>
											  <!-- End owl-item -->
                                         <?php endwhile; endif; ?>
										</div>
									</div>
									<!-- End quote-block -->

									<div class="testimonial-nav">
										<i class="lnr lnr-arrow-left"></i>
										<i class="lnr lnr-arrow-right"></i>
									</div>
									<!-- End testimonial-nav -->

								</div>
							</div>
							<!-- End testimonial-wrap -->
						</div>
					</div>
					<!-- End container -->

				</section>
                <?php  } if(get_post_meta($post->ID, 'display_unit8', true)=="show") { ?>
				<!-- ************************ -->
				<!--   CLIENTS                -->
				<!-- ************************ -->

				<section
					class="clients jarallax pt90 pb90"
					style="background-image: url(<?php echo get_field( "background_image8" ); ?>);">
					<div class="overlay"></div>
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
                <?php  } if(get_post_meta($post->ID, 'display_unit9', true)=="show") { ?>
				<!-- ************************ -->
				<!--   BLOG                   -->
				<!-- ************************ -->

				<section class="pt150 pb150">
					<div class="container">
						<div class="section-title">
							<h2 data-sr><?php echo get_post_meta($post->ID, 'header9', true); ?></h2>

							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<em data-sr="wait .2s"><?php echo get_post_meta($post->ID, 'text9', true); ?></em>
								</div>
							</div>

						</div>
					</div>
					<!-- End container -->

					<div class="container">
						<div class="row">
                        <?php query_posts('cat='.get_post_meta($post->ID, 'id_column9', true).'&showposts='.get_post_meta($post->ID, 'number_of_posts2', true)); if ( have_posts() ) : while ( have_posts() ) : the_post(); $post_home++; ?>
                             <?php if($post_home == 1) { ?>
                                 <div class="col-md-12">
								      <div class="row">
                                          <div class="blog-item large" data-sr>
										       <div class="col-md-8">
											       <div class="thumb">
												       <a href="<?php the_permalink();?>" class="animsition-link">
                                                       <?php if(get_field( "most_miniature" )!="") { ?>
													       <img src="<?php echo get_field( "most_miniature" ); ?>" alt="<?php the_title(); ?>">
                                                       <?php } else { ?>
                                                           <?php the_post_thumbnail('category-thumb-home'); ?>
                                                       <?php } ?>
												       </a>
											       </div>
										       </div>
										       <div class="col-md-4">
											       <div class="post-content">
												       <div><span class="date"><?php the_time("d.m.Y"); ?></span></div>
												       <h6><a href="<?php the_permalink();?>" class="animsition-link"><?php the_title(); ?></a></h6>
												       <p><?php echo get_post_meta($post->ID, 'short_description', true); ?></p>
												       <div class="blog-meta">
													       <a href="<?php the_permalink();?>#respond"><i class="fa fa-comment-o"></i><?php comments_number("0","1","%"); ?></a>
													       <?php echo getPostLikeLink(get_the_ID());?>
												        </div>
											        </div>
										        </div>
									        </div>
								        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="col-md-4">
								        <div class="blog-item" data-sr>
									        <div class="thumb">
										        <a href="<?php the_permalink();?>" class="animsition-link">
											        <?php the_post_thumbnail('category-thumb'); ?>
										        </a>
									        </div>
									        <div class="post-content">
										        <div><span class="date"><?php the_time("d.m.Y"); ?></span></div>
										        <h6><a href="<?php the_permalink();?>" class="animsition-link"><?php the_title(); ?></a></h6>
										        <p><?php echo get_post_meta($post->ID, 'short_description', true); ?></p>
										        <div class="blog-meta">
											        <a href="<?php the_permalink();?>#respond"><i class="fa fa-comment-o"></i><?php comments_number("0","1","%"); ?></a>
											        <?php echo getPostLikeLink(get_the_ID());?>
										        </div>
									        </div>
								        </div>
							        </div>
                                <?php } ?>
                            <?php endwhile; endif; wp_reset_query(); ?>
						</div>
					</div>
					<!-- End container -->
                    
                    <?php if(get_post_meta($post->ID, 'text_button9', true) !="") { ?>
					<div class="container mt70">
						<div class="text-center">
							<a href="<?php echo get_post_meta($post->ID, 'link9', true); ?>" class="btn animsition-link" data-sr>
								<span><?php echo get_post_meta($post->ID, 'text_button9', true); ?></span>
							</a>
						</div>
					</div>
					<!-- End container -->
                    <?php } ?>

				</section>
                <?php  } ?>

			</main>