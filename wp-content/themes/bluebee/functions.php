<?php
/**
 * Bluebee Theme Functions
 *
 * @package bluebee
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'BLUEBEE_VERSION', '1.0.0' );
define( 'BLUEBEE_DIR',     get_template_directory() );
define( 'BLUEBEE_URI',     get_template_directory_uri() );

/* =========================================================
   1. THEME SETUP
   ========================================================= */

function bluebee_setup() {
	// Translations — load from /languages/
	load_theme_textdomain( 'bluebee', BLUEBEE_DIR . '/languages' );

	// Core supports
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'block-templates' ); // FSE

	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list',
		'gallery', 'caption', 'style', 'script',
	) );

	// Custom logo
	add_theme_support( 'custom-logo', array(
		'height'      => 60,
		'width'       => 200,
		'flex-width'  => true,
		'flex-height' => true,
	) );

	// Register navigation menus
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'bluebee' ),
		'footer'  => __( 'Footer Menu', 'bluebee' ),
		'social'  => __( 'Social Links Menu', 'bluebee' ),
	) );

	// Custom image sizes
	add_image_size( 'bluebee-hero',   1920, 1080, true );
	add_image_size( 'bluebee-card',    800,  600, true );
	add_image_size( 'bluebee-square',  600,  600, true );
	add_image_size( 'bluebee-wide',   1280,  720, true );
}
add_action( 'after_setup_theme', 'bluebee_setup' );

/* =========================================================
   2. ENQUEUE SCRIPTS & STYLES
   ========================================================= */

function bluebee_scripts() {
	// Google Fonts preloaded via head action — enqueue here
	$fonts_url = 'https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300;1,9..40,400&display=swap';
	wp_enqueue_style( 'bluebee-fonts', $fonts_url, array(), null );

	// Main stylesheet
	wp_enqueue_style(
		'bluebee-custom',
		BLUEBEE_URI . '/assets/css/custom.css',
		array( 'bluebee-fonts' ),
		BLUEBEE_VERSION
	);

	// Theme declaration stylesheet
	wp_enqueue_style( 'bluebee-style', get_stylesheet_uri(), array(), BLUEBEE_VERSION );

	// Main JavaScript (deferred)
	wp_enqueue_script(
		'bluebee-main',
		BLUEBEE_URI . '/assets/js/main.js',
		array(),
		BLUEBEE_VERSION,
		array( 'strategy' => 'defer', 'in_footer' => true )
	);

	// Pass translatable strings and config to JS
	wp_localize_script( 'bluebee-main', 'BluebeeConfig', array(
		'ajaxUrl'    => admin_url( 'admin-ajax.php' ),
		'nonce'      => wp_create_nonce( 'bluebee_nonce' ),
		'isFrontPage'=> is_front_page() ? true : false,
		'i18n'       => array(
			'loading'  => esc_html__( 'Loading…', 'bluebee' ),
			'sending'  => esc_html__( 'Sending…', 'bluebee' ),
			'sent'     => esc_html__( 'Message sent!', 'bluebee' ),
			'error'    => esc_html__( 'Something went wrong. Please try again.', 'bluebee' ),
			'readMore' => esc_html__( 'Read more', 'bluebee' ),
			'close'    => esc_html__( 'Close', 'bluebee' ),
		),
	) );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bluebee_scripts' );

// Editor: load fonts in block editor too
function bluebee_block_editor_assets() {
	wp_enqueue_style(
		'bluebee-editor-fonts',
		'https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300;1,9..40,400&display=swap',
		array(),
		null
	);
}
add_action( 'enqueue_block_editor_assets', 'bluebee_block_editor_assets' );

// Preconnect for font performance
function bluebee_preload_fonts() {
	echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
	echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}
add_action( 'wp_head', 'bluebee_preload_fonts', 1 );

/* =========================================================
   3. BLOCK PATTERN CATEGORIES
   ========================================================= */

function bluebee_register_pattern_categories() {
	register_block_pattern_category( 'bluebee-sections', array(
		'label'       => __( 'Bluebee — Sections', 'bluebee' ),
		'description' => __( 'Full-width marketing page sections.', 'bluebee' ),
	) );

	register_block_pattern_category( 'bluebee-components', array(
		'label'       => __( 'Bluebee — Components', 'bluebee' ),
		'description' => __( 'Reusable UI components.', 'bluebee' ),
	) );
}
add_action( 'init', 'bluebee_register_pattern_categories' );

/* =========================================================
   4. CUSTOM POST TYPES
   ========================================================= */

function bluebee_register_post_types() {

	/* --- Portfolio / Work --- */
	register_post_type( 'bb_work', array(
		'labels' => array(
			'name'               => __( 'Work',               'bluebee' ),
			'singular_name'      => __( 'Project',            'bluebee' ),
			'add_new'            => __( 'Add New',            'bluebee' ),
			'add_new_item'       => __( 'Add New Project',    'bluebee' ),
			'edit_item'          => __( 'Edit Project',       'bluebee' ),
			'new_item'           => __( 'New Project',        'bluebee' ),
			'view_item'          => __( 'View Project',       'bluebee' ),
			'search_items'       => __( 'Search Projects',    'bluebee' ),
			'not_found'          => __( 'No projects found.', 'bluebee' ),
			'not_found_in_trash' => __( 'No projects found in Trash.', 'bluebee' ),
			'menu_name'          => __( 'Portfolio',          'bluebee' ),
		),
		'public'            => true,
		'has_archive'       => true,
		'menu_icon'         => 'dashicons-portfolio',
		'menu_position'     => 5,
		'supports'          => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'page-attributes' ),
		'rewrite'           => array( 'slug' => _x( 'work', 'post type slug', 'bluebee' ) ),
		'show_in_rest'      => true,
	) );

	/* --- Services --- */
	register_post_type( 'bb_service', array(
		'labels' => array(
			'name'               => __( 'Services',           'bluebee' ),
			'singular_name'      => __( 'Service',            'bluebee' ),
			'add_new'            => __( 'Add New',            'bluebee' ),
			'add_new_item'       => __( 'Add New Service',    'bluebee' ),
			'edit_item'          => __( 'Edit Service',       'bluebee' ),
			'menu_name'          => __( 'Services',           'bluebee' ),
		),
		'public'            => true,
		'has_archive'       => false,
		'menu_icon'         => 'dashicons-awards',
		'menu_position'     => 6,
		'supports'          => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ),
		'rewrite'           => array( 'slug' => _x( 'services', 'post type slug', 'bluebee' ) ),
		'show_in_rest'      => true,
	) );

	/* --- Testimonials --- */
	register_post_type( 'bb_testimonial', array(
		'labels' => array(
			'name'               => __( 'Testimonials',          'bluebee' ),
			'singular_name'      => __( 'Testimonial',           'bluebee' ),
			'add_new'            => __( 'Add New',               'bluebee' ),
			'add_new_item'       => __( 'Add New Testimonial',   'bluebee' ),
			'edit_item'          => __( 'Edit Testimonial',      'bluebee' ),
			'menu_name'          => __( 'Testimonials',          'bluebee' ),
		),
		'public'            => false,
		'show_ui'           => true,
		'show_in_menu'      => true,
		'menu_icon'         => 'dashicons-format-quote',
		'menu_position'     => 7,
		'supports'          => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'show_in_rest'      => true,
	) );
}
add_action( 'init', 'bluebee_register_post_types' );

/* =========================================================
   5. REGISTER POST META FOR REST / BLOCK EDITOR
   ========================================================= */

function bluebee_register_meta() {
	// bb_service icon (Unicode symbol)
	register_post_meta( 'bb_service', '_bb_icon', array(
		'show_in_rest'  => true,
		'single'        => true,
		'type'          => 'string',
		'default'       => '◎',
		'auth_callback' => function() { return current_user_can( 'edit_posts' ); },
	) );

	// bb_service display order
	register_post_meta( 'bb_service', '_bb_order', array(
		'show_in_rest'  => true,
		'single'        => true,
		'type'          => 'integer',
		'default'       => 0,
		'auth_callback' => function() { return current_user_can( 'edit_posts' ); },
	) );

	// bb_testimonial author fields
	foreach ( array( '_bb_author_name', '_bb_author_title', '_bb_author_company' ) as $key ) {
		register_post_meta( 'bb_testimonial', $key, array(
			'show_in_rest'  => true,
			'single'        => true,
			'type'          => 'string',
			'default'       => '',
			'auth_callback' => function() { return current_user_can( 'edit_posts' ); },
		) );
	}

	// bb_work meta fields — required for wp:post-meta in Query Loop
	foreach ( array( '_bb_client', '_bb_year', '_bb_services', '_bb_color' ) as $key ) {
		register_post_meta( 'bb_work', $key, array(
			'show_in_rest'  => true,
			'single'        => true,
			'type'          => 'string',
			'default'       => '',
			'auth_callback' => function() { return current_user_can( 'edit_posts' ); },
		) );
	}
	register_post_meta( 'bb_work', '_bb_project_url', array(
		'show_in_rest'      => true,
		'single'            => true,
		'type'              => 'string',
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
		'auth_callback'     => function() { return current_user_can( 'edit_posts' ); },
	) );
}
add_action( 'init', 'bluebee_register_meta' );

/* =========================================================
   5. CUSTOM TAXONOMIES
   ========================================================= */

function bluebee_register_taxonomies() {
	register_taxonomy( 'bb_work_category', 'bb_work', array(
		'labels' => array(
			'name'          => __( 'Work Categories', 'bluebee' ),
			'singular_name' => __( 'Work Category',  'bluebee' ),
			'menu_name'     => __( 'Categories',      'bluebee' ),
			'all_items'     => __( 'All Categories',  'bluebee' ),
			'edit_item'     => __( 'Edit Category',   'bluebee' ),
			'add_new_item'  => __( 'Add New Category','bluebee' ),
		),
		'hierarchical'  => true,
		'public'        => true,
		'show_in_rest'  => true,
		'rewrite'       => array( 'slug' => _x( 'work-category', 'taxonomy slug', 'bluebee' ) ),
	) );
}
add_action( 'init', 'bluebee_register_taxonomies' );

/* =========================================================
   6. META BOXES
   ========================================================= */

function bluebee_add_meta_boxes() {
	add_meta_box(
		'bb_work_details',
		__( 'Project Details', 'bluebee' ),
		'bluebee_work_meta_cb',
		'bb_work', 'normal', 'high'
	);
	add_meta_box(
		'bb_testimonial_details',
		__( 'Testimonial Details', 'bluebee' ),
		'bluebee_testimonial_meta_cb',
		'bb_testimonial', 'normal', 'high'
	);
	add_meta_box(
		'bb_service_details',
		__( 'Service Details', 'bluebee' ),
		'bluebee_service_meta_cb',
		'bb_service', 'normal', 'high'
	);
}
add_action( 'add_meta_boxes', 'bluebee_add_meta_boxes' );

function bluebee_work_meta_cb( $post ) {
	wp_nonce_field( 'bb_work_meta_save', 'bb_work_meta_nonce' );
	$fields = array(
		'_bb_client'      => array( 'label' => __( 'Client Name', 'bluebee' ),                 'type' => 'text' ),
		'_bb_project_url' => array( 'label' => __( 'Live Project URL', 'bluebee' ),            'type' => 'url' ),
		'_bb_year'        => array( 'label' => __( 'Year (e.g. 2024)', 'bluebee' ),            'type' => 'text' ),
		'_bb_services'    => array( 'label' => __( 'Services (comma-separated)', 'bluebee' ),  'type' => 'text' ),
		'_bb_color'       => array( 'label' => __( 'Brand Color (HEX)', 'bluebee' ),           'type' => 'color' ),
	);
	echo '<table class="form-table">';
	foreach ( $fields as $key => $field ) {
		$val = get_post_meta( $post->ID, $key, true );
		printf(
			'<tr><th><label for="%1$s">%2$s</label></th><td><input type="%3$s" id="%1$s" name="%1$s" value="%4$s" class="widefat" /></td></tr>',
			esc_attr( $key ),
			esc_html( $field['label'] ),
			esc_attr( $field['type'] ),
			$field['type'] === 'url' ? esc_url( $val ) : esc_attr( $val )
		);
	}
	echo '</table>';
}

function bluebee_testimonial_meta_cb( $post ) {
	wp_nonce_field( 'bb_testimonial_meta_save', 'bb_testimonial_meta_nonce' );
	$fields = array(
		'_bb_author_name'    => __( 'Author Name', 'bluebee' ),
		'_bb_author_title'   => __( 'Author Title / Role', 'bluebee' ),
		'_bb_author_company' => __( 'Company', 'bluebee' ),
		'_bb_rating'         => __( 'Rating (1–5)', 'bluebee' ),
	);
	echo '<table class="form-table">';
	foreach ( $fields as $key => $label ) {
		$val = get_post_meta( $post->ID, $key, true );
		printf(
			'<tr><th><label for="%1$s">%2$s</label></th><td><input type="text" id="%1$s" name="%1$s" value="%3$s" class="widefat" /></td></tr>',
			esc_attr( $key ), esc_html( $label ), esc_attr( $val )
		);
	}
	echo '</table>';
}

function bluebee_service_meta_cb( $post ) {
	wp_nonce_field( 'bb_service_meta_save', 'bb_service_meta_nonce' );
	$icon  = get_post_meta( $post->ID, '_bb_icon', true );
	$order = get_post_meta( $post->ID, '_bb_order', true );
	echo '<table class="form-table">';
	printf(
		'<tr><th><label for="_bb_icon">%s</label></th><td><input type="text" id="_bb_icon" name="_bb_icon" value="%s" class="widefat" placeholder="e.g. ★" /></td></tr>',
		esc_html__( 'Icon / Emoji', 'bluebee' ), esc_attr( $icon )
	);
	printf(
		'<tr><th><label for="_bb_order">%s</label></th><td><input type="number" id="_bb_order" name="_bb_order" value="%s" class="small-text" /></td></tr>',
		esc_html__( 'Display Order', 'bluebee' ), esc_attr( $order )
	);
	echo '</table>';
}

function bluebee_save_meta( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

	// Work
	if ( isset( $_POST['bb_work_meta_nonce'] ) && wp_verify_nonce( $_POST['bb_work_meta_nonce'], 'bb_work_meta_save' ) ) {
		$work_fields = array( '_bb_client', '_bb_year', '_bb_services', '_bb_color' );
		foreach ( $work_fields as $key ) {
			if ( isset( $_POST[ $key ] ) ) {
				update_post_meta( $post_id, $key, sanitize_text_field( $_POST[ $key ] ) );
			}
		}
		if ( isset( $_POST['_bb_project_url'] ) ) {
			update_post_meta( $post_id, '_bb_project_url', esc_url_raw( $_POST['_bb_project_url'] ) );
		}
	}

	// Testimonial
	if ( isset( $_POST['bb_testimonial_meta_nonce'] ) && wp_verify_nonce( $_POST['bb_testimonial_meta_nonce'], 'bb_testimonial_meta_save' ) ) {
		$t_fields = array( '_bb_author_name', '_bb_author_title', '_bb_author_company', '_bb_rating' );
		foreach ( $t_fields as $key ) {
			if ( isset( $_POST[ $key ] ) ) {
				update_post_meta( $post_id, $key, sanitize_text_field( $_POST[ $key ] ) );
			}
		}
	}

	// Service
	if ( isset( $_POST['bb_service_meta_nonce'] ) && wp_verify_nonce( $_POST['bb_service_meta_nonce'], 'bb_service_meta_save' ) ) {
		if ( isset( $_POST['_bb_icon'] ) ) {
			update_post_meta( $post_id, '_bb_icon', sanitize_text_field( $_POST['_bb_icon'] ) );
		}
		if ( isset( $_POST['_bb_order'] ) ) {
			update_post_meta( $post_id, '_bb_order', intval( $_POST['_bb_order'] ) );
		}
	}
}
add_action( 'save_post', 'bluebee_save_meta' );

/* =========================================================
   7. BODY CLASSES
   ========================================================= */

function bluebee_body_classes( $classes ) {
	if ( is_front_page() )         $classes[] = 'bb-is-front-page';
	if ( is_singular( 'bb_work' )) $classes[] = 'bb-single-work';
	if ( is_singular( 'post' ))    $classes[] = 'bb-single-post';
	return $classes;
}
add_filter( 'body_class', 'bluebee_body_classes' );

/* =========================================================
   8. EXCERPT
   ========================================================= */

add_filter( 'excerpt_length', fn() => 22 );
add_filter( 'excerpt_more',   fn() => '&hellip;' );

/* =========================================================
   9. AJAX: CONTACT FORM
   ========================================================= */

function bluebee_contact_submit() {
	check_ajax_referer( 'bluebee_nonce', 'nonce' );

	$name    = sanitize_text_field( wp_unslash( $_POST['name']    ?? '' ) );
	$email   = sanitize_email(      wp_unslash( $_POST['email']   ?? '' ) );
	$message = sanitize_textarea_field( wp_unslash( $_POST['message'] ?? '' ) );

	if ( empty( $name ) || ! is_email( $email ) || empty( $message ) ) {
		wp_send_json_error( array( 'message' => esc_html__( 'Please fill in all fields correctly.', 'bluebee' ) ) );
	}

	$to      = get_option( 'admin_email' );
	$subject = sprintf(
		/* translators: %s: sender name */
		__( 'New enquiry from %s — Bluebee', 'bluebee' ),
		$name
	);
	$body    = sprintf(
		/* translators: 1: name, 2: email, 3: message */
		__( "Name: %1\$s\nEmail: %2\$s\n\nMessage:\n%3\$s", 'bluebee' ),
		$name, $email, $message
	);
	$headers = array(
		'Content-Type: text/plain; charset=UTF-8',
		'Reply-To: ' . $name . ' <' . $email . '>',
	);

	$sent = wp_mail( $to, $subject, $body, $headers );

	if ( $sent ) {
		wp_send_json_success( array( 'message' => esc_html__( 'Message sent! We\'ll be in touch soon.', 'bluebee' ) ) );
	} else {
		wp_send_json_error( array( 'message' => esc_html__( 'Something went wrong. Please try again.', 'bluebee' ) ) );
	}
}
add_action( 'wp_ajax_bluebee_contact',        'bluebee_contact_submit' );
add_action( 'wp_ajax_nopriv_bluebee_contact', 'bluebee_contact_submit' );

/* =========================================================
   10. ALLOW SVG UPLOADS
   ========================================================= */

function bluebee_allow_svg( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';
	$mimes['svgz'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'bluebee_allow_svg' );
