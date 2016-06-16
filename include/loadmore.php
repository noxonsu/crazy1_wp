<?php

function true_load_posts(){
	$args = unserialize(stripslashes($_POST['query']));
	$args['paged'] = $_POST['page'] + 1;
	$args['post_status'] = 'publish';
	$q = new WP_Query($args);
	if( $q->have_posts() ): while($q->have_posts()): $q->the_post(); global $post; 
    
	
        if ($_POST['template'] == 1) { ?>
        
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
                                <div class="isotope-item">
									<div class="blog-item">
										<div class="thumb">
											<a href="<?php the_permalink();?>" class="animsition-link"><?php the_post_thumbnail('category-thumb'); ?></a>
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
           
        <?php } else {  ?>
        
									<?php $_POST['sch']++; if(get_theme_mod('style_h')=="two") { ?>
                                    <div class="crazy-portfolio-item <?php echo get_post_meta($post->ID, 'class_filter', true); ?>">
										<a href="<?php the_permalink();?>" class="animsition-link">
                                            <?php $thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'portfolio-thumb', true); ?>
											<div class="image-wrap" style="background-image: url(<?php echo $thumb_url[0]; ?>);"></div>
										</a>
									</div>
                                    <?php } if(get_theme_mod('style_h')=="three") { ?>
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
											<div class="figure <?php echo figur($_POST['sch']); ?>"></div>
											<div class="overlay-color"></div>
                                            <?php if( $_POST['sch'] > 9 ) { $_POST['sch'] = 0; } ?>
										</a>
									</div>
                                    <?php } ?>

          
        <?php }  ?>
        
            
<?php endwhile; endif; wp_reset_postdata(); die(); }
add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');

?>