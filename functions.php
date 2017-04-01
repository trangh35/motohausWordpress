<?php

// Add scripts
function motohaus_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6' );
	wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
	wp_enqueue_script( 'html5shiv', get_template_directory_uri() . '/js/html5shiv.min.js', array( 'jquery' ), '3.7.2', true );
	wp_enqueue_script( 'respond', get_template_directory_uri() . '/js/respond.min.js', array( 'jquery' ), '1.4.2', true );
	wp_enqueue_script( 'motohaus', get_template_directory_uri() . '/js/motohaus.js', array( 'jquery' ));
}

add_action( 'wp_enqueue_scripts', 'motohaus_scripts' );

// Add Google Fonts
function motohaus_google_fonts() {
				wp_register_style( 'OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans' );
				wp_enqueue_style( 'OpenSans' );
				
				wp_register_style( 'Roboto', 'http://fonts.googleapis.com/css?family=Roboto' );
				wp_enqueue_style( 'Roboto' );
				
				wp_register_style( 'SourceSansPro', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro' );
				wp_enqueue_style( 'SourceSansPro' );
		}

add_action('wp_print_styles', 'motohaus_google_fonts');

// WordPress Titles
add_theme_support( 'title-tag' );

// Custom settings
function custom_settings_add_menu() {
  add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Custom Settings</h1>
    <form method="post" action="options.php">
       <?php
           settings_fields( 'section' );
           do_settings_sections( 'theme-options' );      
           submit_button(); 
       ?>          
    </form>
  </div>
<?php }

// Twitter
function setting_twitter() { ?>
  <input type="text" name="twitter" id="twitter" value="<?php echo get_option( 'twitter' ); ?>" />
<?php }

// Facebook
function setting_facebook() { ?>
  <input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>" />
<?php }

// Instagram
function setting_instagram() {?>
   <input type="text" name="instagram" id="instagram" value="<?php echo get_option('instagram'); ?>" />
<?php }

function custom_settings_page_setup() {
  add_settings_section( 'section', 'Social Links Setting', null, 'theme-options' );
  add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section' );
  add_settings_field( 'facebook', 'Facebook URL', 'setting_facebook', 'theme-options', 'section');
  add_settings_field( 'instagram', 'Instagram URL', 'setting_instagram', 'theme-options', 'section');

  register_setting('section', 'twitter');
  register_setting('section', 'facebook');
  register_setting('section', 'instagram');
  
}
add_action( 'admin_init', 'custom_settings_page_setup' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );


//Add Custom Logo
function motohaus_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'motohaus_custom_logo_setup' );


//Add Header menu with image
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

//Add Custom Background
function motohaus_custom_background_setup() {
	$defaults = array(
		'default-color'	=> '#000000',	
	);
	add_theme_support( 'custom-background', $defaults );	
}

add_action( 'after_setup_theme', 'motohaus_custom_background_setup');

//Enable widgets
function motohaus_widgets_init() {
	register_sidebar(array(
		'name' => __( 'Sidebar 1', 'quickchic' ),
		'id' => 'sidebar-1',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
	
	register_sidebar( array(
		'name' => 'Footer Sidebar 1',
		'id' => 'footer-sidebar-1',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => 'Footer Sidebar 2',
		'id' => 'footer-sidebar-2',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => 'Footer Sidebar 3',
		'id' => 'footer-sidebar-3',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}

add_action( 'init', 'motohaus_widgets_init' );