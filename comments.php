<?php if ('open' == $post-> comment_status) { ?>

				<!-- ************************ -->
				<!--   COMMENTS               -->
				<!-- ************************ -->

					<div class="comment-wrap pt100" id="respond">
						<div class="container">
							<h3 class="comment-title"><?php esc_html_e('Comments:', 'crazy'); ?></h3>
							<div class="comment-list">

<?php 
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) { die (); }
if ( post_password_required() ) { echo "<p>"; esc_html_e('You must enter your password.', 'crazy'); echo "</p>"; return; }
if (get_comments_number() == 0) { echo "<p>"; esc_html_e('No comments yet, but you can be the first', 'crazy'); echo "</p>"; }

//свой формат комментариев
function custom_comment($comment, $args, $depth) {
$GLOBALS['comment'] = $comment; ?>

<div <?php comment_class("media"); ?> id="comment-<?php comment_ID(); ?>" data-sr>
    <div class="pull-left"><?php echo get_avatar($comment, 130); ?></div>
    <div class="media-body">
        <h6><?php comment_author() ?> <span><?php comment_date('d.m.Y') ?></span></h6>
        <?php if ($comment->comment_approved == '0') : ?>
            <span class="waitmoderation"><?php esc_html_e('Your comment moderation.', 'crazy'); ?></span>
        <?php endif; ?>
        <p><?php comment_text() ?></p>
	    <div class="comment-meta">
		   <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'], 'respond_id' => 'post-comment'))); ?>
        </div>
     </div>
</div>
<?php }


function comment_add_microid($classes) {
	$c_email=get_comment_author_email();
	$c_url=get_comment_author_url();
	if (!empty($c_email) && !empty($c_url)) {
		$microid = 'microid-mailto+http:sha1:' . sha1(sha1('mailto:'.$c_email).sha1($c_url));
		$classes[] = $microid;
	}
	return $classes;	
}
add_filter('comment_class','comment_add_microid');


if ( have_comments() ) : 
	wp_list_comments('callback=custom_comment');
        else :
	       if ('open' == $post->comment_status) :
	       else : 
	    endif;
endif; 
if ('open' == $post-> comment_status) : 

the_comments_navigation();
?>

                             </div>
							<!-- End comment-list -->
						</div>
						<!-- End container -->
					</div>
					<!-- End comment-wrap -->
					<div class="container">
						<div class="text-center mt80">
							<a href="#post-comment" class="btn">
								<span><?php esc_html_e('leave a Comment', 'crazy'); ?></span>
							</a>
						</div>
					</div>
					<!-- End container -->
                    
                </section>
                
                <!-- ************************ -->
				<!--   POST COMMENT POPUP     -->
				<!-- ************************ -->
                
				<div class="remodal post-comment" data-remodal-id="post-comment">
                    <?php 
					$defaults = array(
				        'fields' => array(
						    'author' => '<div class="col-sm-12 mb30"><div class="form-control">'.'
							<input type="text" name="author" placeholder="'.esc_html__("Your name:","crazy").'"><div class="line-input"></div></div></div>',
							'email' => '<div class="col-sm-12 mb30"><div class="form-control">'.'
							<input type="text" name="email" placeholder="'.esc_html__("Your email:","crazy").'"><div class="line-input"></div></div></div>',
							'url' => ' ',
						),
				        'comment_field' => '<div class="col-sm-12 mb50"><div class="form-control"><textarea name="comment" placeholder="'.esc_html__("Comment:","crazy").'"></textarea></div></div>',
				        'comment_notes_before' => '',
				        'comment_notes_after'  => '',
				        'id_form'              => '',
				        'id_submit'            => 'submit',
				        'class_form'           => 'comment-form form-black',
				        'class_submit'         => 'btn',
				        'name_submit'          => 'submit',
				        'title_reply'          => esc_html__("Leave a Comment","crazy"),
				        'title_reply_to'       => '',
				        'title_reply_before'   => '<div class="text-center"><h3 class="comment-title">',
				        'title_reply_after'    => '</h3></div>',
				        'cancel_reply_before'  => '',
				        'cancel_reply_after'   => '',
				        'cancel_reply_link'    => esc_html__("Cancel reply","crazy"),
				        'label_submit'         => esc_html__("Submit","crazy"),
				        'submit_button'        => '<button type="submit" name="submit" class="btn"><span>'.esc_html__("Submit","crazy").'</span></button>',
				        'submit_field'         => '<p class="form-submit">%1$s %2$s</p>',
				    );
					
					comment_form($defaults);
					
					?>
					<!-- End contact-form -->
				</div>
				<!-- End post-comment-->

<?php 
endif; 
} 
?>
