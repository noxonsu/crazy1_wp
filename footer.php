		<?php     
                 if(get_theme_mod('style_h')=="two") { 
                     require_once("templates/footer-two.php");
                 } elseif(get_theme_mod('style_h')=="three") { 
                     require_once("templates/footer-three.php");
                 } else {
					 require_once("templates/footer-one.php");
				 }
		?>
        
        </div>
		<!-- End animsition -->
        
		<!-- ************************ -->
		<!--   SCRIPTS                -->
		<!-- ************************ -->

		<script src="<?php echo get_template_directory_uri(); ?>/vendors/jquery-1.12.0.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/scripts/libs.js"></script>
        
        <!-- Custom -->
		<script src="<?php echo get_template_directory_uri(); ?>/vendors/vlthemes-ptf.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/scripts/crazy.js"></script>
        
        <script>
		jQuery.noConflict()(function ($) {
            function tlt(){
                $('.tlt').css({'visibility':'visible'}).textillate({
                    autoStart: true,
                        in: { 
                        effect: 'fadeInDown'
                    }
                });
                $("<?php if(get_theme_mod('style_h')=="three"){echo ".typed-two";}else{echo ".typed";} ?>").typed({
                    strings: [
					<?php if( have_rows('changing_titles') ): while( have_rows('changing_titles') ) : the_row(); $ih++; ?>
                        "<?php the_sub_field('header'); ?>",
                    <?php endwhile; endif; ?>
                    ],
                    typeSpeed: 50,
                    backSpeed: 20,
                    loop: true,
                    backDelay: 2500,
                    showCursor: false
                });
            }
			$(".animsition").animsition({
                inClass: 'fade-in',
                outClass: 'fade-out',
                inDuration: 1000,
                outDuration: 800,
                linkElement: '.animsition-link',
                loading: true,
                loadingParentElement: 'body',
                loadingClass: 'animsition-loading',
                loadingInner: '<div class="crazy-loading"></div>',
                timeout: false,
                timeoutCountdown: 5000,
                onLoadEvent: true,
                browser: ['animation-duration', '-webkit-animation-duration', '-o-animation-duration'],
                overlay: false,
                overlayClass: 'animsition-overlay-slide',
                overlayParentElement: 'body',
                transition: function(url) { window.location.href = url; }
            });
            $(".animsition").on('animsition.inEnd', function() { tlt(); });
	    });
        </script>
        
        <?php wp_footer(); ?>
	</body>
</html>