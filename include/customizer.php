<?php 

require_once ABSPATH.WPINC.'/class-wp-customize-control.php';

class Customize_Textarea_Control extends WP_Customize_Control {
    public $type = 'textarea';
    public function render_content() {
        ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
                <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea($this->value()); ?></textarea>
            </label>
        <?php
    }
}



add_action('customize_register',section_one);
function section_one ($customizer){
    $customizer->add_section(
        'example_section_one',
        array(
            'title' => esc_html__( 'Appearance', 'crazy' ),
            'description' => "",
            'priority' => 1,
        )
    );
    $customizer->add_setting('style_h',array('default' => 'one'));
	$customizer->add_control(
  	  'style_h',
  	   array(
   	         'type' => 'select',
             'label' => esc_html__( 'Style template', 'crazy' ),
             'section' => 'example_section_one',
             'choices' => array(
                 'one' => esc_html__( 'Main', 'crazy' ),
                 'two' => esc_html__( 'Light', 'crazy' ),
                 'three' => esc_html__( 'Dark', 'crazy' ),
             ),
      	)
    );
	$customizer->add_setting('favicon_upload');
	$customizer->add_control(
         new WP_Customize_Upload_Control(
             	$customizer,
                'favicon_upload',
                array(
           	        'label' => esc_html__( 'Favicon', 'crazy' ),
           	        'section' => 'example_section_one',
           	        'settings' => 'favicon_upload',
       	  	    )
    	  )
	  );
	$customizer->add_setting('logo_upload');
	$customizer->add_control(
         new WP_Customize_Upload_Control(
             	$customizer,
                'logo_upload',
                array(
           	        'label' => esc_html__( 'Logo', 'crazy' ),
           	        'section' => 'example_section_one',
           	        'settings' => 'logo_upload',
       	  	    )
    	  )
	  );
	  $customizer->add_setting('pogination_on',array('default' => 'ajax'));
	  $customizer->add_control(
  	  'pogination_on',
  	   array(
   	         'type' => 'select',
             'label' => esc_html__( 'Pagination', 'crazy' ),
             'section' => 'example_section_one',
             'choices' => array(
                 'ajax' => esc_html__( 'Ajax', 'crazy' ),
                 'numbers' => esc_html__( 'Page numbers', 'crazy' ),
             ),
      	)
    );
	$customizer->add_setting('index_img');
	  $customizer->add_control(
         new WP_Customize_Upload_Control(
             	$customizer,
                'index_img',
                array(
           	        'label' => esc_html__( 'The image in the index header', 'crazy' ),
           	        'section' => 'example_section_one',
           	        'settings' => 'index_img',
       	  	    )
    	  )
	  );
	  $customizer->add_setting('image_404');
	  $customizer->add_control(
         new WP_Customize_Upload_Control(
             	$customizer,
                'image_404',
                array(
           	        'label' => esc_html__( 'Image of page 404', 'crazy' ),
           	        'section' => 'example_section_one',
           	        'settings' => 'image_404',
       	  	    )
    	  )
	  );
}



add_action('customize_register',section_two);
function section_two ($customizer){
    $customizer->add_section(
        'example_section_two',
        array(
            'title' => esc_html__( 'Footer', 'crazy' ),
            'description' => "",
            'priority' => 2,
        )
    );
	$customizer->add_setting('copyright');
    $customizer->add_control(
        new Customize_Textarea_Control(
            $customizer,
             'copyright',
                  array(
                 'label' => esc_html__( 'Copyright', 'crazy' ),
                 'section' => 'example_section_two',
                 'type' => 'copyright'
             )
         )
    );
	$customizer->add_setting('background_p');
	$customizer->add_control(
         new WP_Customize_Upload_Control(
             	$customizer,
                'background_p',
                array(
           	        'label' => esc_html__( 'Background picture', 'crazy' ),
           	        'section' => 'example_section_two',
           	        'settings' => 'background_p',
       	  	    )
    	  )
	);
    $customizer->add_setting('linkto1');
	$customizer->add_control(
        'linkto1',
            array(
            'label' => esc_html__( 'Link to facebook.com', 'crazy' ),
            'section' => 'example_section_two',
            'type' => 'text',
        )
    );
    $customizer->add_setting('linkto2');
	$customizer->add_control(
        'linkto2',
            array(
            'label' => esc_html__( 'Link to twitter.com', 'crazy' ),
            'section' => 'example_section_two',
            'type' => 'text',
        )
    );
    $customizer->add_setting('linkto3');
	$customizer->add_control(
        'linkto3',
            array(
            'label' => esc_html__( 'Link to linkedin.com', 'crazy' ),
            'section' => 'example_section_two',
            'type' => 'text',
        )
    );
    $customizer->add_setting('linkto4');
	$customizer->add_control(
        'linkto4',
            array(
            'label' => esc_html__( 'Link to behance.net', 'crazy' ),
            'section' => 'example_section_two',
            'type' => 'text',
        )
    );
    $customizer->add_setting('linkto5');
	$customizer->add_control(
        'linkto5',
            array(
            'label' => esc_html__( 'Link to pinterest.com', 'crazy' ),
            'section' => 'example_section_two',
            'type' => 'text',
        )
    );
}


?>