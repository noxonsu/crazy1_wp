            <?php if( get_theme_mod('linkto1')!="" or get_theme_mod('linkto2')!="" or get_theme_mod('linkto3')!="" or get_theme_mod('linkto4')!="" or get_theme_mod('linkto5')!="" or  get_theme_mod('copyright') and $home_h != 1) { ?> 
			<!-- ************************ -->
			<!--   FOOTER                 -->
			<!-- ************************ -->

			<footer<?php if( $home_h == 1 ) { ?> class="pt150"<?php } ?>>
                <?php if( $home_h == 1 ) { ?>
				<div class="container">

					<h2 data-sr><?php esc_html_e('contact us', 'crazy'); ?></h2>

					<div class="col-sm-8 col-sm-offset-2 pt80 pb80" data-sr="wait .2s">
						<div class="row">
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
								<!-- End col-sm-12 -->
								<div class="col-sm-12">
									<p class="return-msg">&nbsp;</p>
								</div>
								<!-- End col-sm-12 -->
							</form>
							<!-- End contact-form -->
						</div>
					</div>
				</div>
				<!-- End container -->
                <?php } ?>
                <?php if( get_theme_mod('linkto1')!="" or get_theme_mod('linkto2')!="" or get_theme_mod('linkto3')!="" or get_theme_mod('linkto4')!="" or get_theme_mod('linkto5')!="" or  get_theme_mod('copyright')) { ?> 
				<div class="footer-inner clearfix">
					<div class="container">

						<div class="footer-social mb30">
							<ul class="list-none">
								<?php if(get_theme_mod('linkto1')!="") { ?>
								<li>
									<a href="<?php echo get_theme_mod('linkto1'); ?>" target="_blank">
										<i class="fa fa-facebook fa-fw"></i>
									</a>
								</li>
                                <?php } if(get_theme_mod('linkto2')!="") { ?>
								<li>
									<a href="<?php echo get_theme_mod('linkto2'); ?>" target="_blank">
										<i class="fa fa-twitter fa-fw"></i>
									</a>
								</li>
                                <?php } if(get_theme_mod('linkto3')!="") { ?>
								<li>
									<a href="<?php echo get_theme_mod('linkto3'); ?>" target="_blank">
										<i class="fa fa-linkedin fa-fw"></i>
									</a>
								</li>
                                <?php } if(get_theme_mod('linkto4')!="") { ?>
								<li>
									<a href="<?php echo get_theme_mod('linkto4'); ?>" target="_blank">
										<i class="fa fa-behance fa-fw"></i>
									</a>
								</li>
                                <?php } if(get_theme_mod('linkto5')!="") { ?>
								<li>
									<a href="<?php echo get_theme_mod('linkto5'); ?>" target="_blank">
										<i class="fa fa-pinterest fa-fw"></i>
									</a>
								</li>
                                <?php } ?>
							</ul>
						</div>
						<!-- End footer-social -->
						<div class="footer-copy">
							<?php echo get_theme_mod('copyright'); ?>
						</div>
						<!-- End footer-copy -->
					</div>
					<!-- End container -->
				</div>
                <?php } ?>
			</footer>
            <?php } ?>