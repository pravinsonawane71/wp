// Custom Development
/*include the external css for custom wordpress theme*/

function speckpump_css_style(){
	wp_enqueue_style('exo-font','https://fonts.googleapis.com/css?family=Exo:400,500,600');
	wp_enqueue_style('speckpump-bootstrap-min',get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style('speckpump-owl-carousel',get_template_directory_uri().'/css/owl.carousel.min.css');
	wp_enqueue_style('speckpump-owl-theme-default',get_template_directory_uri().'/css/owl.theme.default.min.css');
	wp_enqueue_style('speckpump-animate-css',get_template_directory_uri().'/css/animate.css');
	wp_enqueue_style('speckpump-sidebar',get_template_directory_uri().'/css/sidebar.css');
	wp_enqueue_style('speckpump-simplelightbox',get_template_directory_uri().'/css/simplelightbox.css');
	wp_enqueue_style('speckpump-style',get_template_directory_uri().'/css/main.css');
	wp_enqueue_style('speckpump-dd',get_template_directory_uri().'/css/responsive.css');
	wp_enqueue_style('fancybox-css', get_template_directory_uri().'/css/jquery.fancybox.css');
}
add_action('wp_enqueue_scripts','speckpump_css_style');

/*include the external JS for custom wordpress theme*/
function speckpump_js_scripts(){
	wp_enqueue_script('speckpump-modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js');
	wp_enqueue_script('speckpump-fontawesome', 'https://use.fontawesome.com/releases/v5.8.1/js/all.js');
	if ( !is_home() && ! is_front_page() ) {
		wp_enqueue_script('jquery');
	}
	wp_enqueue_script('speckpump-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js');
	wp_enqueue_script('speckpump-tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js');
	wp_enqueue_script('speckpump-bootstrap',get_template_directory_uri().'/js/bootstrap.min.js');
	wp_enqueue_script('speckpump-owl-carousel',get_template_directory_uri().'/js/owl.carousel.js');
	wp_enqueue_script('speckpump-wow-js',get_template_directory_uri().'/js/wow.js');
	wp_enqueue_script('speckpump-custom-js',get_template_directory_uri().'/js/custom.js');
	wp_enqueue_script('jquery-fancybox-js',get_template_directory_uri().'/js/jquery.fancybox.js');
	wp_enqueue_script('jquery-simplelightbox-js',get_template_directory_uri().'/js/simple-lightbox.js');

}
add_action('wp_enqueue_scripts','speckpump_js_scripts');

// add excerpt support to pages
add_post_type_support( 'page', 'excerpt' );

/*Add new setting to customizer*/

add_action('customize_register','speckpump_customizer_options');
/*
 * Add in our custom Accent Color setting and control to be used in the Customizer in the Colors section
 *
 */
function speckpump_customizer_options( $wp_customize ) {

$wp_customize->add_section( 'speckpump_footer_section', 
									array(
										'title'          => 'Site contact',
										'priority'       => 35,
										)
							);
$wp_customize->add_setting( 'speckpump_copyright_text', 
								array( 'default' => '© Speck Pumps-Pool Products, Inc., 8125 Bayberry Road, Jacksonville, FL 32256 USA.',
									'type'       => 'theme_mod',
									'capability' => 'edit_theme_options', 
								)
							);
$wp_customize->add_control(  'speckpump_copyright_text_custom', 
								array(
									 'label' => __( 'Add Copyright content here', 'twentysixteen' ),
									 'section' => 'speckpump_footer_section',
									 'settings' => 'speckpump_copyright_text',
									)
								
							);
$wp_customize->add_setting( 'speckpump_contact_no', 
								array( 'default' => '#',
									'type'       => 'theme_mod',
									'capability' => 'edit_theme_options',
								)
							);
$wp_customize->add_control(  'speckpump_contact_no_custom',
								array(
									 'label' => __( 'Add  contact no here', 'twentysixteen' ),
									 'section' => 'speckpump_footer_section',
									 'settings' => 'speckpump_contact_no'
									)
							);
$wp_customize->add_setting( 'speckpump_facebook_link', 
								array( 'default' => '#',
									'type'       => 'theme_mod',
									'capability' => 'edit_theme_options',
								)
							);
$wp_customize->add_control(  'speckpump_facebook_link_custom',
								array(
									 'label' => __( 'Add facebook link here', 'twentysixteen' ),
									 'section' => 'speckpump_footer_section',
									 'settings' => 'speckpump_facebook_link'
									)
							);

$wp_customize->add_setting( 'speckpump_instagram_link', 
								array( 'default' => '#',
									'type'       => 'theme_mod',
									'capability' => 'edit_theme_options',
								)
							);
$wp_customize->add_control(  'speckpump_instagram_link_custom',
								array(
									 'label' => __( 'Add instagram link here', 'twentysixteen' ),
									 'section' => 'speckpump_footer_section',
									 'settings' => 'speckpump_instagram_link'
									)
							);

$wp_customize->add_setting( 'speckpump_youtube_link', 
								array( 'default' => '#',
									'type'       => 'theme_mod',
									'capability' => 'edit_theme_options',
								)
							);
$wp_customize->add_control(  'speckpump_youtube_link_custom',
								array(
									 'label' => __( 'Add youtube link here', 'twentysixteen' ),
									 'section' => 'speckpump_footer_section',
									 'settings' => 'speckpump_youtube_link'
									)
							);

$wp_customize->add_setting( 'speckpump_twitter_link', 
								array( 'default' => '#',
									'type'       => 'theme_mod',
									'capability' => 'edit_theme_options',
								)
							);
$wp_customize->add_control(  'speckpump_twitter_link_custom',
								array(
									 'label' => __( 'Add twitter it link here', 'twentysixteen' ),
									 'section' => 'speckpump_footer_section',
									 'settings' => 'speckpump_twitter_link'
									)
							);
}
/* custom widget*/

add_action( 'widgets_init', 'speckpump_widgets_init' );
function speckpump_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Custom Sidebar', 'speckpump' ),
        'id'            => 'sidebar-4',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
 
}

/* creating custom post */

function speckpmp_pool_pump_init() {
  register_post_type( 'pool-pump',array(
		'labels' => array(
			'name' 					=> __('Pool Pump'),
			'singular_name' 		=> __('Pool Pump'),
			'add_new' 				=> __('Add New'),
			'add_new_item' 			=> __('Add New Pool Pump'),
			'edit_item' 			=> __('Edit Pool Pump'),
			'new_item' 				=> __('New Pool Pump'),
			'view_item' 			=> __('View Pool Pump'),
			'search_items' 			=> __('Search Pool Pump'),
			'not_found' 			=>  __('No Pool Pump found'),
			'not_found_in_trash' 	=> __('No Pool Pump found in Trash'),
			'parent_item_colon' 	=> '',
			'menu_name' 			=> 'Pool Pump'
		),
	    'public' 				=> false,
	    'publicly_queryable' 	=> false,
	    'show_ui' 				=> true,
	    'show_in_menu' 			=> true,
	    'query_var' 			=> true,
	    'rewrite' 				=> array('slug'=>'pool-pump'),
	    'capability_type' 		=> 'post',
	    'has_archive' 			=> 'Pool Pump',
	    'hierarchical' 			=> true,
	    'supports'				 => array('title','editor','author','thumbnail','excerpt','page-attributes')
		)
	);
}
add_action('init','speckpmp_pool_pump_init');

function speckpmp_career_init() {
  register_post_type( 'career',array(
		'labels' => array(
			'name' 					=> __('Career'),
			'singular_name' 		=> __('Career'),
			'add_new' 				=> __('Add New'),
			'add_new_item' 			=> __('Add New Career'),
			'edit_item' 			=> __('Edit Career'),
			'new_item' 				=> __('New Career'),
			'view_item' 			=> __('View Career'),
			'search_items' 			=> __('Search Career'),
			'not_found' 			=>  __('No Career found'),
			'not_found_in_trash' 	=> __('No Career found in Trash'),
			'parent_item_colon' 	=> '',
			'menu_name' 			=> 'Career'
		),
	    'public' 				=> true,
	    'publicly_queryable' 	=> true,
	    'show_ui' 				=> true,
	    'show_in_menu' 			=> true,
	    'query_var' 			=> true,
	    'rewrite' 				=> array('slug'=>'career'),
	    'capability_type' 		=> 'post',
	    'has_archive' 			=> 'Career',
	    'hierarchical' 			=> true,
	    'menu_icon'  			=> 'dashicons-welcome-learn-more', 
	    'supports'				 => array('title','editor','author','thumbnail','excerpt','page-attributes')
		)
	);
}
add_action('init','speckpmp_career_init');


/*Register custom taxonomy*/
add_action( 'init', 'midas_custom_taxonomy' );

function midas_custom_taxonomy() {
	register_taxonomy(
		'pool-pump-cat',
		'pool-pump',
		array(
			'label' => __( 'Pool Pump Cat' ),
			'rewrite' => array( 'with_front'=>true,'slug' => 'pool-pump-cat' ),
			'hierarchical' => true,
		)
	);
	// flush_rewrite_rules();
}

/*Adding autocad files*/
function custom_upload_mimes ( $existing_mimes=array() ) {
$existing_mimes['dwg'] = 'application/dwg';
$existing_mimes['skp'] = 'application/skp';
$existing_mimes['rfa'] = 'application/rfa';
$existing_mimes['dwf'] = 'application/dwf';
$existing_mimes['vwx'] = 'application/vwx';
$existing_mimes['stp'] = 'application/stp';
$existing_mimes['igs'] = 'application/igs';
return $existing_mimes;
}
add_filter('upload_mimes','custom_upload_mimes');

/**
 * Speckpump ask a question form submit for each product
 */
add_action('wp_ajax_nopriv_speckpump_ask_question_submit','speckpump_ask_question_submit');
add_action('wp_ajax_speckpump_ask_question_submit','speckpump_ask_question_submit');

function speckpump_ask_question_submit() {
	$form_data = array();
	parse_str($_POST['data'], $form_data);
	$speckpump_cat_name 	= $form_data['speckpump_cat_name'];
	$speckpump_subject 		= $form_data['speckpump_subject'];
	$speckpump_your_name 	= $form_data['your_name'];
	$speckpump_your_email 	= $form_data['your_email'];
	$speckpump_your_message = $form_data['your_message'];
	$speckpump_your_phone 	= $form_data['your_phone'];
	include "inc/global_phpmailer.php";
	$message 		= '<html><body>';
	$message 		.= '<table rules="all" style="border-color: #666;" cellpadding="10">';
	$message 		.= "<tr style='background: #eee;'><td><strong>Question From:</strong> </td><td>" . strip_tags($speckpump_cat_name) . "</td></tr>";
	$message 		.= "<tr style='background: #eee;'><td><strong>Product Name:</strong> </td><td>" . strip_tags($speckpump_subject) . "</td></tr>";
	$message 		.= "<tr><td><strong>Name:</strong> </td><td>" . strip_tags($speckpump_your_name) . "</td></tr>";
	$message 		.= "<tr><td><strong>Mobile No:</strong> </td><td>" . strip_tags($speckpump_your_phone) . "</td></tr>";
	$message 		.= "<tr><td><strong>Email :</strong> </td><td>" . strip_tags($speckpump_your_email) . "</td></tr>";
	$message 		.= "<tr><td><strong>Message:</strong> </td><td>" . strip_tags($speckpump_your_message) . "</td></tr>";
	// $to = 'info.usa@speck-pumps.com';
	$to = 'ds.developer25@gmail.com';
	// $headers = array('Content-Type: text/html; charset=UTF-8');
	$check	= false;
	// $check = wp_mail( $to, $speckpump_subject, $message, $headers );
	$check = send_email( $to, $speckpump_subject, $message );
	var_dump($check);
	die();
}

/**
 * Speckpump quote form submit for each product
 */
add_action('wp_ajax_nopriv_speckpump_quote_submit','speckpump_quote_submit');
add_action('wp_ajax_speckpump_quote_submit','speckpump_quote_submit');

function speckpump_quote_submit() {
	$form_data = array();
	parse_str($_POST['data'], $form_data);
	$speckpump_cat_name 	= $form_data['speckpump_cat_name'];
	$speckpump_subject 		= $form_data['speckpump_subject'];
	$speckpump_your_name 	= $form_data['your_name'];
	$speckpump_your_email 	= $form_data['your_email'];
	$speckpump_your_message = $form_data['your_message'];
	$speckpump_your_phone 	= $form_data['your_phone'];
	include "inc/global_phpmailer.php";
	$message 		= '<html><body>';
	$message 		.= '<table rules="all" style="border-color: #666;" cellpadding="10">';
	$message 		.= "<tr style='background: #eee;'><td><strong>Quote From:</strong> </td><td>" . strip_tags($speckpump_cat_name) . "</td></tr>";
	$message 		.= "<tr style='background: #eee;'><td><strong>Product Name:</strong> </td><td>" . strip_tags($speckpump_subject) . "</td></tr>";
	$message 		.= "<tr><td><strong>Name:</strong> </td><td>" . strip_tags($speckpump_your_name) . "</td></tr>";
	$message 		.= "<tr><td><strong>Mobile No:</strong> </td><td>" . strip_tags($speckpump_your_phone) . "</td></tr>";
	$message 		.= "<tr><td><strong>Email :</strong> </td><td>" . strip_tags($speckpump_your_email) . "</td></tr>";
	$message 		.= "<tr><td><strong>Message:</strong> </td><td>" . strip_tags($speckpump_your_message) . "</td></tr>";
	// $to = 'info.usa@speck-pumps.com';
	$to = 'ds.developer25@gmail.com';
	// $headers = array('Content-Type: text/html; charset=UTF-8');
	$check	= false;
	// $check = wp_mail( $to, $speckpump_subject, $message, $headers );
	$check = send_email( $to, $speckpump_subject, $message );
	var_dump($check);
	die();
}

/**
 * Speckpump share form submit
 */
add_action('wp_ajax_nopriv_speckpump_share_submit','speckpump_share_submit');
add_action('wp_ajax_speckpump_share_submit','speckpump_share_submit');

function speckpump_share_submit() {
	$form_data = array();
	parse_str($_POST['data'], $form_data);
	$speckpump_subject 		= 'Speckpump Share Link';
	$speckpump_your_name 	= $form_data['your_name'];
	$speckpump_your_email 	= $form_data['your_email'];
	$speckpump_your_message = $form_data['your_message'];
	$speckpump_product_link = $form_data['product_link'];
	include "inc/global_phpmailer.php";
	$message 		= '<html><body>';
	$message 		.= '<table rules="all" style="border-color: #666;" cellpadding="10">';
	$message 		.= "<tr style='background: #eee;'><td><strong>Subject:</strong> </td><td>" . strip_tags($speckpump_subject) . "</td></tr>";
	$message 		.= "<tr><td><strong>Name:</strong> </td><td>" . strip_tags($speckpump_your_name) . "</td></tr>";
	$message 		.= "<tr><td><strong>Message:</strong> </td><td>" . strip_tags($speckpump_your_message) . "</td></tr>";
	$message .= "<tr><td><strong>Go to page:</strong> </td><td><a href='$speckpump_product_link'>Click Here</a></td></tr>";
	// $to = 'info.usa@speck-pumps.com';
	$to = $speckpump_your_email;
	// $headers = array('Content-Type: text/html; charset=UTF-8');
	$check	= false;
	// $check = wp_mail( $to, $speckpump_subject, $message, $headers );
	$check = send_email( $to, $speckpump_subject, $message );
	var_dump($check);
	die();
}

/**
 * Download zip function to donwload all product files
 */
if( ( isset( $_GET['product_id'] ) ) && isset( $_GET['product_name'] ) ) {
	$product_id = $_GET['product_id'];
	$zip_name 	= $_GET['product_name'];
	zip_files_download($product_id, $zip_name);
}

function zip_files_download( $product_id, $zip_name ) {
	if( have_rows('add_files', $product_id) ): 
        while( have_rows('add_files', $product_id) ): the_row();
        	$brochure 		= ( !empty( get_sub_field('brochure') ) ) ? get_sub_field('brochure')['url'] : '';
        	$performance_curves = ( !empty( get_sub_field('performance_curves') ) ) ? get_sub_field('performance_curves')['url'] : '';
        	$spare_parts 	= ( !empty( get_sub_field('spare_parts') ) ) ? get_sub_field('spare_parts')['url'] : '';
        	$list_price 	= ( !empty( get_sub_field('list_price') ) ) ? get_sub_field('list_price')['url'] : '';
        	$owners_manual 	= ( !empty( get_sub_field('owners_manual') ) ) ? get_sub_field('owners_manual')['url'] : '';
        	$cad_drawing 	= ( !empty( get_sub_field('cad_drawing') ) ) ? get_sub_field('cad_drawing')['url'] : '';
        	$all_files = array($brochure, $performance_curves, $spare_parts, $list_price, $owners_manual, $cad_drawing );
        	$file_names = array_filter( $all_files );
            endwhile; ?>
  <?php endif;
	var_dump($all_files);
	var_dump($file_names);
	$upload_dir = wp_upload_dir();
	$file = $upload_dir['path'] . "/" .'test.zip';
	$zip = new ZipArchive;
	if ($zip->open($file, ZIPARCHIVE::CREATE )!==TRUE) {
		exit("cannot open <$file>\n");
	}
	foreach($file_names as $files) {
		$download_file = file_get_contents($files);
		$check = $zip->addFromString(basename($files),$download_file);
	}
	if ($zip->close() === false) {
		exit("Error creating ZIP file");
	}
	if (file_exists($file)) {
		set_time_limit(0);
		header('Connection: Keep-Alive');
		header('Content-Description: File Transfer');
		header('Content-Type: application/zip');
		header('Content-Length: ' . filesize($file));
		header('Content-Disposition: attachment; filename='.$zip_name.'.zip');
		header("Pragma: no-cache"); 
		header("Expires: 0");
		ob_clean();
		flush();
		readfile($file);
		unlink($file);
		exit();
	} else {
		exit("Could not find Zip file to download");
	}
}
/*Store locator plugin custom function*/
add_filter( 'wpsl_store_meta', 'custom_store_meta', 10, 2 );

function custom_store_meta( $store_meta, $store_id ) {
    $terms = wp_get_post_terms( $store_id, 'wpsl_store_category' );
    $store_meta['terms'] = '';  
    if ( $terms ) {
        if ( !is_wp_error( $terms ) ) {
            if ( count( $terms ) > 1 ) {
                $location_terms = array();

                foreach ( $terms as $term ) {
                    $location_terms[] = $term->name;
                }

                $store_meta['terms'] = implode( ', ', $location_terms );
            } else {
                $store_meta['terms'] = $terms[0]->name;    
            }
        }
    }
    return $store_meta;
}
