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

				<!-- ************************ -->
				<!--   SINGLE POST            -->
				<!-- ************************ -->

				<section class="pt50 pb150">
                    <?php while (have_posts()) : the_post(); ?>
					<div class="container">
						<div class="row">
							<div class="col-sm-12">

								<div class="post-single">

									<div class="post-content">
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