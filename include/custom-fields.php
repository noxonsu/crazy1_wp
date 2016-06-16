<?php

if(get_theme_mod('style_h')=="two") { 
    require_once("custom-fields-two.php");
} elseif(get_theme_mod('style_h')=="three") { 
   require_once("custom-fields-three.php");
} else {
	require_once("custom-fields-one.php");
}

//--------------------------------------------------------------------------------

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_settings-contact-us',
		'title' => esc_html__("Settings contact us","crazy"),
		'fields' => array (
			array (
				'key' => 'field_5731b9f046e7f',
				'label' => esc_html__("Blocks","crazy"),
				'name' => 'blocks',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_5731bb1c46e80',
						'label' => esc_html__("Icon","crazy"),
						'name' => 'icon',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_5731bb2d46e81',
						'label' => esc_html__("Text","crazy"),
						'name' => 'text',
						'type' => 'textarea',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'maxlength' => '',
						'rows' => 3,
						'formatting' => 'html',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'row',
				'button_label' => esc_html__("Add block","crazy"),
			),
			array (
				'key' => 'field_5731bc885dfc3',
				'label' => 'Insert the card?',
				'name' => 'insert_the_card',
				'type' => 'select',
				'choices' => array (
					'yes' => esc_html__("Yes","crazy"),
					'no' => esc_html__("No","crazy"),
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5731c0b75dfc5',
				'label' => esc_html__("Coordinate 1","crazy"),
				'name' => 'coordinate_1',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5731c0ca5dfc6',
				'label' => esc_html__("Coordinate 2","crazy"),
				'name' => 'coordinate_2',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5731c0ce5dfc7',
				'label' => esc_html__("Zoom","crazy"),
				'name' => 'zoom',
				'type' => 'number',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_5731c0735dfc4',
				'label' => esc_html__("Include form?","crazy"),
				'name' => 'include_form',
				'type' => 'select',
				'choices' => array (
					'yes' => 'Yes',
					'no' => 'No',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5731c0eb5dfc8',
				'label' => esc_html__("Header","crazy"),
				'name' => 'header',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-contact-us.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'excerpt',
				2 => 'custom_fields',
				3 => 'discussion',
				4 => 'comments',
				5 => 'revisions',
				6 => 'categories',
				7 => 'tags',
				8 => 'send-trackbacks',
			),
		),
		'menu_order' => 1,
	));
}

//--------------------------------------------------------------------------------

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_setting-single',
		'title' => esc_html__("Setting single","crazy"),
		'fields' => array (
			array (
				'key' => 'field_5731cf54592a9',
				'label' => esc_html__("Post","crazy"),
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_57331fb465d95',
				'label' => esc_html__("Subtitle","crazy"),
				'name' => 'subtitle',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_57331fd965d96',
				'label' => esc_html__("Upper shortcode","crazy"),
				'name' => 'upper_shortcode',
				'type' => 'textarea',
				'instructions' => "<a target='_blank' href='../wp-content/themes/the_crazy/include/shortcode.html'>".esc_html__("More in shortcode","crazy")."</a>",
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 5,
				'formatting' => 'html',
			),
			array (
				'key' => 'field_2222a650e8c5e',
				'label' => esc_html__("Background header","crazy"),
				'name' => 'background_header',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5731cf66592aa',
				'label' => esc_html__("Category","crazy"),
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5731cf72592ab',
				'label' => esc_html__("Short description","crazy"),
				'name' => 'short_description',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5731d23495389',
				'label' => esc_html__("Type of post","crazy"),
				'name' => 'type_of_post',
				'type' => 'select',
				'choices' => array (
					'typ0' => esc_html__("Default","crazy"),
					'typ1' => esc_html__("Video","crazy"),
					'typ2' => esc_html__("Without thumbnails","crazy"),
					'typ4' => esc_html__("With the slider","crazy"),
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5731d41ab1302',
				'label' => esc_html__("Slider","crazy"),
				'name' => 'slider',
				'type' => 'repeater',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5731d23495389',
							'operator' => '==',
							'value' => 'typ4',
						),
					),
					'allorany' => 'all',
				),
				'sub_fields' => array (
					array (
						'key' => 'field_5731d449b1303',
						'label' => esc_html__("Slide","crazy"),
						'name' => 'slide',
						'type' => 'image',
						'column_width' => '',
						'save_format' => 'url',
						'preview_size' => 'thumbnail',
						'library' => 'all',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'row',
				'button_label' => esc_html__("Add slide","crazy"),
			),
			array (
				'key' => 'field_5731d730fd79c',
				'label' => esc_html__("Link to vimeo.com","crazy"),
				'name' => 'link_to_vimeo',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5731d23495389',
							'operator' => '==',
							'value' => 'typ1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5732341c1ca94',
				'label' => esc_html__("Most miniature","crazy"),
				'name' => 'most_miniature',
				'type' => 'image',
				'instructions' => esc_html__("Template for the 'Home'","crazy"),
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
				array (
					'param' => 'post_format',
					'operator' => '!=',
					'value' => 'gallery',
					'order_no' => 1,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'excerpt',
				1 => 'custom_fields',
			),
		),
		'menu_order' => 1,
	));
}

//--------------------------------------------------------------------------------

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_settings-categories',
		'title' => esc_html__("Settings categories","crazy"),
		'fields' => array (
			array (
				'key' => 'field_5735a650e8c5e',
				'label' => esc_html__("Background header","crazy"),
				'name' => 'background_header',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5735a6aee8c5f',
				'label' => esc_html__("Category type","crazy"),
				'name' => 'category_type',
				'type' => 'select',
				'choices' => array (
					'default' => esc_html__("Default","crazy"),
					'portfolio' => esc_html__("Portfolio","crazy"),
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_57359f612374d',
				'label' => esc_html__("Flters","crazy"),
				'name' => 'flters',
				'type' => 'repeater',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5735a6aee8c5f',
							'operator' => '==',
							'value' => 'portfolio',
						),
					),
					'allorany' => 'all',
				),
				'sub_fields' => array (
					array (
						'key' => 'field_5735a0192374e',
						'label' => esc_html__("Name","crazy"),
						'name' => 'name',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_5735a02e2374f',
						'label' => esc_html__("Class","crazy"),
						'name' => 'class',
						'type' => 'text',
						'instructions' => esc_html__("Example: .class <br>* - All","crazy"),
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'row',
				'button_label' => esc_html__("Add filter","crazy"),
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'ef_taxonomy',
					'operator' => '==',
					'value' => 'category',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'excerpt',
				2 => 'custom_fields',
				3 => 'discussion',
				4 => 'comments',
				5 => 'revisions',
				6 => 'slug',
				7 => 'author',
				8 => 'format',
				9 => 'featured_image',
				10 => 'categories',
				11 => 'tags',
				12 => 'send-trackbacks',
			),
		),
		'menu_order' => 1,
	));
}

//--------------------------------------------------------------------------------

?>