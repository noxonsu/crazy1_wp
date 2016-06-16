<?php get_header(); ?>

			<!-- ************************ -->
			<!--   PAGE TITLE             -->
			<!-- ************************ -->
            <?php 
			    $queried_object = get_queried_object(); 
				$taxonomy = $queried_object->taxonomy;
				$term_id = $queried_object->term_id;
				if(get_field('category_type', $taxonomy . '_' .$term_id) == "portfolio") {
					include_once "portfolio-cat.php";
				} else {	
            ?>
			<div class="page-title jarallax" style="background-image: url(<?php the_field('background_header', $taxonomy . '_' .$term_id); ?>);">
                <?php if(get_theme_mod('style_h')=="two") { echo '<div class="pattern-bottom"></div>'; }?>
				<div class="overlay"></div>
				<!-- End overlay -->
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
				<!--   BLOG GRID              -->
				<!-- ************************ -->
				<section class="pt150 pb150">
					<div class="container">
						<div class="row">
							<div class="blog-masonry">
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <?php if(get_post_meta($post->ID, 'type_of_post', true)=="typ2") { ?>
                                <div class="isotope-item">
									<div class="blog-item full-img clearfix">
										<div class="post-content text-center">
											<div><span class="date"><?php the_time("d.m.Y"); ?></span></div>
											<h6><a href="<?php the_permalink();?>" class="animsition-link"><?php the_title(); ?></a></h6>
											<div class="blog-meta">
												<a href="<?php the_permalink();?>#respond"><i class="fa fa-comment-o"></i><?php comments_number("0","1","%"); ?></a>
												<?php echo getPostLikeLink(get_the_ID());?>
											</div>
										</div>
									</div>
								</div>
                                <?php } elseif(get_post_meta($post->ID, 'type_of_post', true)=="typ4") { ?>
                                <div class="isotope-item">
									<div class="blog-item clearfix">
										<div class="blog-slider">
										<?php if( have_rows('slider') ): while( have_rows('slider') ) : the_row(); ?>
											<img src="<?php the_sub_field('slide'); ?>" alt="<?php the_title(); ?>">
										<?php endwhile; endif; ?>
										</div>
									</div>
								</div>
                                <?php } elseif(get_post_meta($post->ID, 'type_of_post', true)=="typ1") { ?>
                                <div class="isotope-item">
                                    <?php $thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'category-thumb', true); ?>
									<div class="blog-item full-img clearfix" style="background-image: url(<?php echo $thumb_url[0]; ?>);">
										<div class="post-content text-center">
											<h6><a href="<?php the_permalink();?>" class="animsition-link"><?php the_title(); ?></a></h6>
											<p><?php echo get_post_meta($post->ID, 'short_description', true); ?></p>
											<div class="mt50">
												<a href="<?php echo get_post_meta($post->ID, 'link_to_vimeo', true); ?>" class="btn btn-play popup-video" data-sr>
													<span>
														<i class="fa fa-play"></i>
													</span>
												</a>
											</div>
										</div>
									</div>
								</div>
                                <?php } else { ?>
                                <div id="post-<?php the_ID(); ?>" <?php post_class('isotope-item'); ?>>
									<div class="blog-item">
										<div class="thumb">
											<a href="<?php the_permalink();?>" class="animsition-link"><?php the_post_thumbnail('category-thumb'); ?></a>
										</div>
										<div class="post-content">
											<div><span class="date"><?php the_time("d.m.Y"); ?></span></div>
											<h6><a href="<?php the_permalink();?>" class="animsition-link"><?php the_title(); ?></a></h6>
											<p><?php echo get_post_meta($post->ID, 'short_description', true); get_the_tags(); ?></p>
											<div class="blog-meta">
												<a href="<?php the_permalink();?>#respond"><i class="fa fa-comment-o"></i><?php comments_number("0","1","%"); ?></a>
                                                <?php echo getPostLikeLink(get_the_ID());?>
											</div>
										</div>
									</div>
								</div>
                                <?php } ?>
                            <?php endwhile;  ?> 
							</div>
							<!-- End blog-masonry-wrap -->
						</div>
					</div>
					<!-- End container -->
                   <?php if (  $wp_query->max_num_pages > 1 and get_theme_mod('pogination_on')=="ajax") : ?>
                   <script>
                       var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                       var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
                       var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                       var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
                   </script>
                   <div class="container">
						<div class="text-center mt80">
							<a href="javascript:void(0);" id="true_loadmore" class="btn<?php if(get_theme_mod('style_h')=="three") { echo ' line-vert'; }?>">
								<span><?php esc_html_e('load more', 'crazy'); ?></span>
							</a>
						</div>
					</div>
					<!-- End container -->    
                   <?php endif; endif; ?>
                   
                   <?php if(get_theme_mod('pogination_on')=="numbers") { the_posts_pagination(array('screen_reader_text' => ' ')); } ?>

				</section>

			</main>
            <?php } ?>
            
<?php get_footer(); ?>