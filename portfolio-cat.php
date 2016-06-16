			<div class="page-title jarallax" style="background-image: url(<?php  the_field('background_header', $taxonomy . '_' .$term_id); ?>);">
                <?php if(get_theme_mod('style_h')=="two") { echo '<div class="pattern-bottom"></div>'; }?>
				<div class="overlay"></div>
				<div class="container">
					<div class="text-center">
						<h1 class="tlt"><?php echo single_cat_title(); ?></h1>
                        <?php $category = get_the_category(); ?>
						<div class="breadcrumbs">
							<ul class="list-none">
								<li><a href="<?php echo esc_url( home_url() ); ?>" class="animsition-link"><?php esc_html_e('Home', 'crazy'); ?></a></li>
                                <?php 
								    if (is_subcategory($category[0]->cat_ID)) { 
									$parent_category = get_ancestors( $category[0]->cat_ID, 'category' );
									$category_link = get_category_link($parent_category);
								?>
                                <li><a href="<?php echo $category_link; ?>"><?php echo get_cat_name($parent_category);?></a></li>
                                <?php }?>
								<li><?php echo single_cat_title(); ?></li>
							</ul>
						</div>
						<!-- End breadcrumbs -->

					</div>
				</div>
				<!-- End container -->
			</div>
			<!-- End page-title -->

			<main>

				<!-- ************************ -->
				<!--   PORTFOLIO              -->
				<!-- ************************ -->

				<section class="pt150 pb150">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
                                <?php if( have_rows('flters', $taxonomy . '_' .$term_id) ):?>
								<div class="filters-wrap mb100">
									<div class="borders"></div>
									<div class="text-center">
										<ul class="list-none filters">
                                            <?php while( have_rows('flters', $taxonomy . '_' .$term_id) ) : the_row(); $fil++; ?>
                                            <li<?php if(!isset($_GET['act']) and $fil==1 or $_GET['act'] == $fil){  echo ' class="active-filter"'; }?> data-filter="<?php the_sub_field('class', $taxonomy . '_' .$term_id); ?>">
												<span><?php the_sub_field('name', $taxonomy . '_' .$term_id); ?></span>
											</li>
                                            <?php endwhile; ?>
										</ul>
										<!-- End filters -->
									</div>
								</div>
                                <?php endif; ?>
							</div>
						</div>
					</div>
					<!-- End container -->
					<div class="container">
						<div class="row">
							<div class="crazy-portfolio-masonry-wrapper" data-col="3">
								<div class="crazy-portfolio-list">
                                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $fp++; ?>
									<?php if(get_theme_mod('style_h')=="two") { ?>
                                    <div class="crazy-portfolio-item <?php echo get_post_meta($post->ID, 'class_filter', true); ?>">
										<a href="<?php the_permalink();?>" class="animsition-link">
                                            <?php $thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'portfolio-thumb', true); ?>
											<div class="image-wrap" style="background-image: url(<?php echo $thumb_url[0]; ?>);"></div>
										</a>
									</div>
                                    <?php } elseif(get_theme_mod('style_h')=="three") { ?>
                                    <div class="crazy-portfolio-item <?php echo get_post_meta($post->ID, 'class_filter', true); ?>">
										<a href="<?php the_permalink();?>" class="animsition-link">
                                            <?php $thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'portfolio-thumb', true); ?>
											<div class="image-wrap" style="background-image: url(<?php echo $thumb_url[0]; ?>);"></div>
											<div class="overlay-color"></div>
										</a>
									</div>
                                    <?php } else { ?>
									<div class="crazy-portfolio-item <?php echo get_post_meta($post->ID, 'class_filter', true); ?>">
										<a href="<?php the_permalink();?>" class="animsition-link">
                                            <?php $thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'portfolio-thumb', true); ?>
											<div class="image-wrap" style="background-image: url(<?php echo $thumb_url[0]; ?>);"></div>
											<div class="figure <?php echo figur($fp); ?>"></div>
											<div class="overlay-color"></div>
                                            <?php if( $fp > 9 ) { $fp = 0; } ?>
										</a>
									</div>
                                    <?php } ?>
                                 <?php endwhile;  ?> 
								</div>
								<!-- End crazy-portfolio-list -->
							</div>
							<!-- ENd crazy-portfolio-masonry-wrapper -->
                            <?php if (  $wp_query->max_num_pages > 1 and get_theme_mod('pogination_on')=="ajax") : ?>
                            <script>
                                 var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                                 var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
                                 var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                                 var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
								 var fp = <?php echo $fp; ?>;
                            </script>
							<div class="mt80 text-center">
								<a href="javascript:void(0);" id="true_loadmore_p" class="btn<?php if(get_theme_mod('style_h')=="three") { echo ' line-vert'; }?>" data-load="3">
									<span><?php esc_html_e('load more', 'crazy'); ?></span>
								</a>
							</div>
                            <?php endif; endif; ?>
                            <?php if(get_theme_mod('pogination_on')=="numbers") { the_posts_pagination(array('screen_reader_text' => ' ')); } ?>
						</div>
					</div>
					<!-- End container -->
				</section>

			</main>