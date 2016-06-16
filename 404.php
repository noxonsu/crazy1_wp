<?php get_header(); ?>

			<div class="page-title jarallax" style="background-image: url(<?php echo get_theme_mod('image_404'); ?>);">
				<div class="overlay"></div>
				<div class="container">
					<div class="text-center">
						<h1 class="tlt"><?php esc_html_e('Error 404', 'crazy'); ?></h1>
						<div class="breadcrumbs">
							<ul class="list-none">
								<li><a href="<?php echo esc_url( home_url() ); ?>" class="animsition-link"><?php esc_html_e('Home', 'crazy'); ?></a></li>
								<li><?php esc_html_e('Error 404', 'crazy'); ?></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
            <main>
				<section class="pt50 pb150">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="post-single">
									<div class="post-content">
                                        <h2 style="text-align:center;"><?php esc_html_e('This page does not exist!', 'crazy'); ?></h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</main>

<?php get_footer(); ?>