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
				<!--   SINGLE WORK            -->
				<!-- ************************ -->
                <?php while (have_posts()) : the_post(); ?>
				<section class="pt150">

					<div class="container">
						<div class="vl-portfolio-masonry-wrapper">
							<div class="vl-portfolio-list">
                            <?php if( have_rows('gallery') ): while( have_rows('gallery') ) : the_row(); ?>
                                <article class="vl-portfolio-item<?php if(get_sub_field('size')=="average"){echo" tall";}elseif(get_sub_field('size')=="big"){echo" large";}?>">
									<div class="vl-image-wrap" style="background-image: url(<?php the_sub_field('picture'); ?>);"></div>
								</article>    
                            <?php endwhile; endif; ?>
							</div>

						</div>

					</div>

					<!-- End container -->

					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="single-work-wrap mt80 mb100">
									<div class="borders"></div>
									<div class="row">
                                    <?php if( have_rows('blocks') ): while( have_rows('blocks') ) : the_row(); ?>
                                    	<div class="work-meta col-md-3 col-sm-6 sm-mb40" data-sr>
											<div class="text-center">
												<h6><?php the_sub_field('text_1'); ?><span><?php the_sub_field('text_2'); ?></span></h6>
											</div>
										</div>
                                    <?php endwhile; endif; ?>
									</div>
								</div>
								<!-- End single-work-wrap -->
							</div>

							<div class="col-md-12">
								<?php the_content(); ?>
							</div>

						</div>

					</div>
					<!-- End container -->

				</section>
                <?php endwhile; ?>
				<!-- ************************ -->
				<!--   RELATED WORKS          -->
				<!-- ************************ -->

				<section class="pt150 pb150">

					<div class="container">

						<div class="section-title-sm">
							<h2 data-sr><?php esc_html_e('related works', 'crazy'); ?></h2>
						</div>

					</div>
					<!-- End container -->
                    <?php
                       $posttags = get_the_tags();
                       if ($posttags) {
                         foreach($posttags as $tag) {
                           $metki_e .= $tag->slug.",";
                         }
                       }
                       global $wp_query; 
                       $postid = $wp_query->post->ID;
					   $result_filter = array('post__not_in'=>array($postid), 'cat'=>$category[0]->cat_ID, 'showposts'=>9,'tag'=>$metki_e, 'order'=>RAND);
                    ?>
					<div class="container">
						<div class="owl-related-works">
                        <?php query_posts($result_filter); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<div class="crazy-portfolio-item">
								<a href="<?php the_permalink();?>" class="animsition-link">
                                     <?php $thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'portfolio-thumb', true); ?>
									<div class="image-wrap" style="background-image: url(<?php echo $thumb_url[0]; ?>);"></div>
                                    <div class="overlay-color"></div>
								</a>
							</div>
						<?php endwhile; endif; wp_reset_query(); ?>
						</div>
					</div>
					<!-- End container -->

				</section>
			</main>
            
<?php get_footer(); ?>