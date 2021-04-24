<?php
/**
 * VW Hospital Lite: Block Patterns
 *
 * @package VW Hospital Lite
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'vw-hospital-lite',
		array( 'label' => __( 'VW Hospital Lite', 'vw-hospital-lite' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'vw-hospital-lite/banner-section',
		array(
			'title'      => __( 'Banner Section', 'vw-hospital-lite' ),
			'categories' => array( 'vw-hospital-lite' ),
			'content'    => "<!-- wp:cover {\"url\":\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/slider.png\",\"id\":3399,\"dimRatio\":40,\"overlayColor\":\"black\",\"align\":\"full\",\"className\":\"sliderbox\"} -->\n<div class=\"wp-block-cover alignfull has-background-dim-40 has-black-background-color has-background-dim sliderbox\" style=\"background-image:url(" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/slider.png)\"><div class=\"wp-block-cover__inner-container\"><!-- wp:columns {\"align\":\"full\",\"className\":\"mx-md-0 mx-1\"} -->\n<div class=\"wp-block-columns alignfull mx-md-0 mx-1\"><!-- wp:column {\"width\":\"25%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:25%\"></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"80%\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center\" style=\"flex-basis:80%\"><!-- wp:heading {\"textAlign\":\"center\",\"level\":1,\"textColor\":\"white\",\"style\":{\"typography\":{\"fontSize\":30}}} -->\n<h1 class=\"has-text-align-center has-white-color has-text-color\" style=\"font-size:30px\"><strong>LOREM IPSUM IS SIMPLY DUMMY TEXT OF PRINTING</strong></h1>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"className\":\"text-center\",\"style\":{\"typography\":{\"fontSize\":15}}} -->\n<p class=\"has-text-align-center text-center\" style=\"font-size:15px\">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"align\":\"center\"} -->\n<div class=\"wp-block-buttons aligncenter\"><!-- wp:button {\"borderRadius\":0} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link no-border-radius\">READ MORE</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"25%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:25%\"></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->",
		)
	);

	register_block_pattern(
		'vw-hospital-lite/services-section',
		array(
			'title'      => __( 'Services Section', 'vw-hospital-lite' ),
			'categories' => array( 'vw-hospital-lite' ),
			'content'    => "<!-- wp:group {\"align\":\"wide\",\"className\":\"main-service mx-0 mt-3\"} -->\n<div class=\"wp-block-group alignwide main-service mx-0 mt-3\"><div class=\"wp-block-group__inner-container\"><!-- wp:heading {\"textAlign\":\"center\",\"style\":{\"typography\":{\"fontSize\":30},\"color\":{\"text\":\"#fe6f23\"}}} -->\n<h2 class=\"has-text-align-center has-text-color\" style=\"color:#fe6f23;font-size:30px\"><strong>OUR SERVICES</strong></h2>\n<!-- /wp:heading -->\n\n<!-- wp:columns {\"align\":\"wide\",\"className\":\"mx-md-0 mx-3\"} -->\n<div class=\"wp-block-columns alignwide mx-md-0 mx-3\"><!-- wp:column {\"verticalAlignment\":\"center\",\"className\":\"service-box mb-4\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center service-box mb-4\"><!-- wp:image {\"align\":\"center\",\"id\":3186,\"sizeSlug\":\"large\",\"linkDestination\":\"none\",\"className\":\"mb-2\"} -->\n<div class=\"wp-block-image mb-2\"><figure class=\"aligncenter size-large\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/service-1.png\" alt=\"\" class=\"wp-image-3186\"/></figure></div>\n<!-- /wp:image -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"level\":3,\"className\":\"mb-0\",\"style\":{\"typography\":{\"fontSize\":25},\"color\":{\"text\":\"#fe6f23\"}}} -->\n<h3 class=\"has-text-align-center mb-0 has-text-color\" style=\"color:#fe6f23;font-size:25px\">SERVICE TITLE 1</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"className\":\"text-center mb-3\",\"fontSize\":\"small\",\"style\":{\"color\":{\"text\":\"#9e9e9e\"}}} -->\n<p class=\"has-text-align-center text-center mb-3 has-text-color has-small-font-size\" style=\"color:#9e9e9e\">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the   </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"align\":\"center\"} -->\n<div class=\"wp-block-buttons aligncenter\"><!-- wp:button {\"borderRadius\":0,\"style\":{\"color\":{\"background\":\"#fe6f23\"}},\"textColor\":\"white\"} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link has-white-color has-text-color has-background no-border-radius\" style=\"background-color:#fe6f23\">READ MORE</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"verticalAlignment\":\"center\",\"className\":\"service-box mb-4\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center service-box mb-4\"><!-- wp:image {\"align\":\"center\",\"id\":3237,\"sizeSlug\":\"large\",\"linkDestination\":\"none\",\"className\":\"mb-2\"} -->\n<div class=\"wp-block-image mb-2\"><figure class=\"aligncenter size-large\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/service-2.png\" alt=\"\" class=\"wp-image-3237\"/></figure></div>\n<!-- /wp:image -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"level\":3,\"className\":\"mb-0\",\"style\":{\"typography\":{\"fontSize\":25},\"color\":{\"text\":\"#fe6f23\"}}} -->\n<h3 class=\"has-text-align-center mb-0 has-text-color\" style=\"color:#fe6f23;font-size:25px\">SERVICE TITLE 2</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"className\":\"text-center mb-3\",\"fontSize\":\"small\",\"style\":{\"color\":{\"text\":\"#9e9e9e\"}}} -->\n<p class=\"has-text-align-center text-center mb-3 has-text-color has-small-font-size\" style=\"color:#9e9e9e\">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the   </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"align\":\"center\"} -->\n<div class=\"wp-block-buttons aligncenter\"><!-- wp:button {\"borderRadius\":0,\"style\":{\"color\":{\"background\":\"#fe6f23\"}},\"textColor\":\"white\"} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link has-white-color has-text-color has-background no-border-radius\" style=\"background-color:#fe6f23\">READ MORE</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"verticalAlignment\":\"center\",\"className\":\"service-box mb-4\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center service-box mb-4\"><!-- wp:image {\"align\":\"center\",\"id\":3238,\"sizeSlug\":\"large\",\"linkDestination\":\"none\",\"className\":\"mb-2\"} -->\n<div class=\"wp-block-image mb-2\"><figure class=\"aligncenter size-large\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/service-3.png\" alt=\"\" class=\"wp-image-3238\"/></figure></div>\n<!-- /wp:image -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"level\":3,\"className\":\"mb-0\",\"style\":{\"typography\":{\"fontSize\":25},\"color\":{\"text\":\"#fe6f23\"}}} -->\n<h3 class=\"has-text-align-center mb-0 has-text-color\" style=\"color:#fe6f23;font-size:25px\">SERVICE TITLE 3</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"className\":\"text-center mb-3\",\"fontSize\":\"small\",\"style\":{\"color\":{\"text\":\"#9e9e9e\"}}} -->\n<p class=\"has-text-align-center text-center mb-3 has-text-color has-small-font-size\" style=\"color:#9e9e9e\">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the   </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"align\":\"center\"} -->\n<div class=\"wp-block-buttons aligncenter\"><!-- wp:button {\"borderRadius\":0,\"style\":{\"color\":{\"background\":\"#fe6f23\"}},\"textColor\":\"white\"} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link has-white-color has-text-color has-background no-border-radius\" style=\"background-color:#fe6f23\">READ MORE</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"verticalAlignment\":\"center\",\"className\":\"service-box mb-4\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center service-box mb-4\"><!-- wp:image {\"align\":\"center\",\"id\":3239,\"sizeSlug\":\"large\",\"linkDestination\":\"none\",\"className\":\"mb-2\"} -->\n<div class=\"wp-block-image mb-2\"><figure class=\"aligncenter size-large\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/service-4.png\" alt=\"\" class=\"wp-image-3239\"/></figure></div>\n<!-- /wp:image -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"level\":3,\"className\":\"mb-0\",\"style\":{\"typography\":{\"fontSize\":25},\"color\":{\"text\":\"#fe6f23\"}}} -->\n<h3 class=\"has-text-align-center mb-0 has-text-color\" style=\"color:#fe6f23;font-size:25px\">SERVICE TITLE 4</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"className\":\"text-center mb-3\",\"fontSize\":\"small\",\"style\":{\"color\":{\"text\":\"#9e9e9e\"}}} -->\n<p class=\"has-text-align-center text-center mb-3 has-text-color has-small-font-size\" style=\"color:#9e9e9e\">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the   </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"align\":\"center\"} -->\n<div class=\"wp-block-buttons aligncenter\"><!-- wp:button {\"borderRadius\":0,\"style\":{\"color\":{\"background\":\"#fe6f23\"}},\"textColor\":\"white\"} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link has-white-color has-text-color has-background no-border-radius\" style=\"background-color:#fe6f23\">READ MORE</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:group -->",
		)
	);
}