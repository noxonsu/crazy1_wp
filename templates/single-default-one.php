<?php get_header(); ?>

			<!-- ************************ -->
			<!--   PAGE TITLE             -->
			<!-- ************************ -->
            <?php while (have_posts()) : the_post(); ?>
			<div class="page-title jarallax" style="background-image: url(<?php echo get_field( "background_header" ); ?>);">
				<div class="overlay"></div>
				<!-- End overlay -->
				<div class="container">
					<div class="text-center">
						<h1 class="tlt"><?php the_title(); ?></h1>
                        <?php $category = get_the_category($post->ID); ?>
						<div class="breadcrumbs">
							<ul class="list-none">
								<li><a href="<?php echo esc_url( home_url() ); ?>" class="animsition-link"><?php esc_html_e('Home', 'crazy'); ?></a></li>
								<li><a href="<?php echo get_category_link($category[0]->cat_ID); ?>" class="animsition-link"><?php echo  get_cat_name($category[0]->cat_ID) ?></a></li>
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

				<!-- ************************ -->
				<!--   SINGLE POST            -->
				<!-- ************************ -->

				<section class="pt150 pb150">
                    <?php while (have_posts()) : the_post(); ?>
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="post-single">
                                    <?php echo apply_filters('the_content', get_post_meta($post->ID, 'upper_shortcode', true)); ?>
									<div class="post-content">
										<?php if(get_post_meta($post->ID, 'subtitle', true) != "") { ?>
										    <h6><?php echo get_post_meta($post->ID, 'subtitle', true); ?></h6>
                                        <?php } ?>
										<div class="blog-meta">
											<span class="date"><?php the_time("d.m.Y"); ?></span>
										</div>
										<div class="blog-meta">
											<a href="#respond"><i class="fa fa-comment-o"></i><?php comments_number("0","1","%"); ?></a>
											<?php echo getPostLikeLink(get_the_ID());?>
										</div>
										<div class="clearfix"></div>

										<?php the_content(); ?>
                                        <?php wp_link_pages(); ?>

									</div>
									<!-- End post-content -->
								</div>
								<!-- End blog-item -->

							</div>
						</div>
					</div>
					<!-- End container -->

				   <?php comments_template( '', true ); ?>
                    
                   <?php endwhile; ?>
                    
				<?php if ('open' != $post-> comment_status) { echo "</section>"; }?>

			</main>
            
<?php get_footer(); ?>