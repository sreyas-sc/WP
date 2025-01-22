<?php
/**
 * solar-renewable-energy-pro functions and definitions
 *
 * @package solar-renewable-energy-pro
 */

if ( ! function_exists( 'solar_renewable_energy_pro_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function solar_renewable_energy_pro_setup() {
	define( 'THEME_DIR', dirname( __FILE__ ) );
	$GLOBALS['content_width'] = apply_filters( 'solar_renewable_energy_pro_content_width', 640 );
	if ( ! isset( $content_width ) ) $content_width = 640;
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'wc-product-gallery-zoom' ); 
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('solar-renewable-energy-pro-homepage-thumb',240,145,true);
	register_nav_menus( array(
		'primary'   => __( 'Primary Menu', 'solar-renewable-energy-pro' ),
		'footer-category'   => __( 'Footer category Menu', 'solar-renewable-energy-pro' ),
		'footer-link'   => __( 'Footer Link Menu', 'solar-renewable-energy-pro' ),
		'footer'   => __( 'Footer Menu', 'solar-renewable-energy-pro' ),
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );
	add_editor_style( array( 'assets/css/editor-style.css') );
	add_action( 'wp_ajax_ive-check-plugin-exists', 'check_plugin_exists' );
	add_action( 'wp_ajax_ive_install_and_activate_plugin', 'mep_install_and_activate_plugin' );
}
endif;
add_action( 'after_setup_theme', 'solar_renewable_energy_pro_setup' );

function mep_install_and_activate_plugin() {

	$post_plugin_details = $_POST['plugin_details'];
	$plugin_text_domain = $post_plugin_details['plugin_text_domain'];
	$plugin_main_file		=	$post_plugin_details['plugin_main_file'];
	$plugin_url					=	$post_plugin_details['plugin_url'];

	$plugin = array(
		'text_domain'	=> $plugin_text_domain,
		'path' 				=> $plugin_url,
		'install' 		=> $plugin_text_domain . '/' . $plugin_main_file
	);

	wp_cache_flush();

	$plugin_path = plugin_basename( trim( $plugin['install'] ) );


	$activate_plugin = activate_plugin( $plugin_path );

	if($activate_plugin) {

		echo $activate_plugin;

	} else {
		echo $activate_plugin;
	}

	$msg = 'installed';

	$response = array( 'status' => true, 'msg' => $msg );
	wp_send_json( $response );
	exit;
}

function check_plugin_exists() {
		$plugin_text_domain = $_POST['plugin_text_domain'];
		$main_plugin_file 	= $_POST['main_plugin_file'];
		$plugin_path = $plugin_text_domain . '/' . $main_plugin_file;

		$get_plugins					= get_plugins();
		$is_plugin_installed	= false;
		$activation_status 		= false;
		if ( isset( $get_plugins[$plugin_path] ) ) {
		$is_plugin_installed = true;

		$activation_status = is_plugin_active( $plugin_path );
		}
		wp_send_json_success(
		array(
		'install_status'  =>	$is_plugin_installed,
			'active_status'		=>	$activation_status,
			'plugin_path'			=>	$plugin_path,
			'plugin_slug'			=>	$plugin_text_domain
		)
		);
}


/* Theme Widgets Setup */
function solar_renewable_energy_pro_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'solar-renewable-energy-pro' ),
		'description'   => __( 'Appears on blog page sidebar', 'solar-renewable-energy-pro' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'solar-renewable-energy-pro' ),
		'description'   => __( 'Appears on page sidebar', 'solar-renewable-energy-pro' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Column 1', 'solar-renewable-energy-pro' ),
		'description'   => __( 'Appears on footer', 'solar-renewable-energy-pro' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Column 2', 'solar-renewable-energy-pro' ),
		'description'   => __( 'Appears on footer', 'solar-renewable-energy-pro' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Column 3', 'solar-renewable-energy-pro' ),
		'description'   => __( 'Appears on footer', 'solar-renewable-energy-pro' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Column 4', 'solar-renewable-energy-pro' ),
		'description'   => __( 'Appears on footer', 'solar-renewable-energy-pro' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'solar_renewable_energy_pro_widgets_init' );

/* Theme Font URL */
function solar_renewable_energy_pro_font_url() {
	$font_url = '';
	$font_family = array();	
	$font_family[] = 'Source Sans Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900';
	$font_family[] = 'PT Sans:300,400,600,700,800,900';
	$font_family[] = 'Roboto:400,700';
	$font_family[] = 'Roboto Condensed:400,700';
	$font_family[] = 'Open Sans';
	$font_family[] = 'Overpass';
	$font_family[] = 'Montserrat:300,400,600,700,800,900';
	$font_family[] = 'Playball:300,400,600,700,800,900';
	$font_family[] = 'Alegreya:300,400,600,700,800,900';
	$font_family[] = 'Julius Sans One';
	$font_family[] = 'Arsenal';
	$font_family[] = 'Slabo';
	$font_family[] = 'Lato';
	$font_family[] = 'Overpass Mono';
	$font_family[] = 'Source Sans Pro';
	$font_family[] = 'Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Merriweather';
	$font_family[] = 'Rubik';
	$font_family[] = 'Lora';
	$font_family[] = 'Ubuntu';
	$font_family[] = 'Cabin';
	$font_family[] = 'Arimo';
	$font_family[] = 'Playfair Display';
	$font_family[] = 'Quicksand';
	$font_family[] = 'Padauk';
	$font_family[] = 'Muli';
	$font_family[] = 'Inconsolata';
	$font_family[] = 'Bitter';
	$font_family[] = 'Pacifico';
	$font_family[] = 'Indie Flower';
	$font_family[] = 'VT323';
	$font_family[] = 'Dosis';
	$font_family[] = 'Frank Ruhl Libre';
	$font_family[] = 'Fjalla One';
	$font_family[] = 'Oxygen';
	$font_family[] = 'Arvo';
	$font_family[] = 'Noto Serif';
	$font_family[] = 'Lobster';
	$font_family[] = 'Crimson Text';
	$font_family[] = 'Yanone Kaffeesatz';
	$font_family[] = 'Anton';
	$font_family[] = 'Libre Baskerville';
	$font_family[] = 'Bree Serif';
	$font_family[] = 'Gloria Hallelujah';
	$font_family[] = 'Josefin Sans:100,100i,300,300i,400,400i,600,600i,700,700i&amp;subset=latin-ext,vietnamese';
	$font_family[] = 'Abril Fatface';
	$font_family[] = 'Varela Round';
	$font_family[] = 'Vampiro One';
	$font_family[] = 'Shadows Into Light';
	$font_family[] = 'Cuprum';
	$font_family[] = 'Rokkitt';
	$font_family[] = 'Vollkorn';
	$font_family[] = 'Francois One';
	$font_family[] = 'Orbitron';
	$font_family[] = 'Patua One';
	$font_family[] = 'Acme';
	$font_family[] = 'Satisfy';
	$font_family[] = 'Josefin Slab';
	$font_family[] = 'Quattrocento Sans';
	$font_family[] = 'Architects Daughter';
	$font_family[] = 'Russo One';
	$font_family[] = 'Monda';
	$font_family[] = 'Righteous';
	$font_family[] = 'Lobster Two';
	$font_family[] = 'Hammersmith One';
	$font_family[] = 'Courgette';
	$font_family[] = 'Permanent Marker';
	$font_family[] = 'Cherry Swash';
	$font_family[] = 'Cormorant Garamond';
	$font_family[] = 'Poiret One';
	$font_family[] = 'BenchNine';
	$font_family[] = 'Economica';
	$font_family[] = 'Handlee';
	$font_family[] = 'Cardo';
	$font_family[] = 'Alfa Slab One';
	$font_family[] = 'Averia Serif Libre';
	$font_family[] = 'Cookie';
	$font_family[] = 'Chewy';
	$font_family[] = 'Great Vibes';
	$font_family[] = 'Coming Soon';
	$font_family[] = 'Philosopher';
	$font_family[] = 'Days One';
	$font_family[] = 'Kanit';
	$font_family[] = 'Shrikhand';
	$font_family[] = 'Tangerine';
	$font_family[] = 'IM Fell English SC';
	$font_family[] = 'Boogaloo';
	$font_family[] = 'Bangers';
	$font_family[] = 'Fredoka One';
	$font_family[] = 'Bad Script';
	$font_family[] = 'Volkhov';
	$font_family[] = 'Shadows Into Light Two';
	$font_family[] = 'Marck Script';
	$font_family[] = 'Sacramento';
	$font_family[] = 'Poppins:100,200,300,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext';
	$font_family[] = 'PT Serif';
	$query_args = array(
		'family'	=> urlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

/* Theme enqueue scripts */
function solar_renewable_energy_pro_scripts() {

	if(is_home() || is_front_page()) {
      wp_register_style( 'home-page-style', get_stylesheet_directory_uri() . '/assets/css/homepage.css');
      wp_enqueue_style( 'home-page-style' );
    }
    wp_register_style( 'header-footer-style', get_stylesheet_directory_uri() . '/assets/css/header-footer.css');
    wp_enqueue_style( 'header-footer-style' );

    wp_register_style( 'header-footer-style', get_stylesheet_directory_uri() . '/assets/css/header-footer.css');
    wp_enqueue_style( 'header-footer-style' );

    wp_register_style( 'all-pages-style', get_stylesheet_directory_uri() . '/assets/css/all-pages.css');
    wp_enqueue_style( 'all-pages-style' );

    wp_register_style( 'media-style', get_stylesheet_directory_uri() . '/assets/css/media.css');
    wp_enqueue_style( 'media-style' );

	wp_enqueue_style( 'solar-renewable-energy-pro-font', solar_renewable_energy_pro_font_url(), array() );
	wp_enqueue_style( 'bootstrap-style', esc_url(get_template_directory_uri()).'/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'solar-renewable-energy-pro-basic-style', get_stylesheet_uri() );

	/* Inline style sheet */
	require get_parent_theme_file_path( '/inline_style.php' );
	wp_add_inline_style( 'solar-renewable-energy-pro-basic-style',$custom_css );
	
	
	wp_enqueue_style( 'animation-wow', esc_url(get_template_directory_uri()).'/assets/css/animation.css' );
	wp_enqueue_style( 'font-awesome', esc_url(get_template_directory_uri()).'/assets/css/fontawesome-all.min.css' );
	wp_enqueue_style( 'effect', esc_url(get_template_directory_uri()).'/assets/css/effect.css' );
	wp_enqueue_style( 'owl-carousel-style', esc_url(get_template_directory_uri()).'/assets/css/owl.carousel.css' );
	wp_enqueue_style( 'google-font', esc_url(get_template_directory_uri()).'/assets/css/google-font.css' );
	wp_enqueue_script( 'tether', esc_url(get_template_directory_uri()) . '/assets/js/tether.js', array('jquery'), '',true);
	wp_enqueue_script( 'bootstrap', esc_url(get_template_directory_uri()) . '/assets/js/bootstrap.min.js',array('jquery'),'',true);
	wp_enqueue_script( 'superfsh', esc_url(get_template_directory_uri()) . '/assets/js/jquery.superfish.js',array('jquery'),'',true);
	wp_enqueue_script( 'owl-carousel', esc_url(get_template_directory_uri()) . '/assets/js/owl.carousel.js',array('jquery'),'',true);
	wp_enqueue_script( 'jquery-progressbar-js', esc_url(get_template_directory_uri()) . '/assets/js/jquery-progressbar.js',array('jquery'),'',true);
	wp_enqueue_script( 'solar-renewable-energy-pro-customscripts', esc_url(get_template_directory_uri()) . '/assets/js/custom.js', array('jquery'),'', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_style('solar-renewable-energy-pro-ie', esc_url(get_template_directory_uri()).'/assets/css/ie.css', array('solar-renewable-energy-pro-basic-style'));
	wp_style_add_data( 'solar-renewable-energy-pro-ie', 'conditional', 'IE' );
}
add_action( 'wp_enqueue_scripts', 'solar_renewable_energy_pro_scripts' );

/* Implement the Custom Header feature. */
require get_parent_theme_file_path( '/inc/custom-header.php' );
/* Custom template tags for this theme. */
require get_parent_theme_file_path( '/inc/template-tags.php' );
/* Customizer additions. */
require get_parent_theme_file_path( '/inc/customizer.php' );
/* TGM. */
require get_parent_theme_file_path( '/inc/tgm.php' );
/* Get Started. */
require get_parent_theme_file_path( '/inc/getstarted/getstart.php' );

/* URL DEFINES */
define('solar_renewable_energy_pro_SITE_URL','https://www.ovationthemes.com/');

function solar_renewable_energy_pro_credit_link() {
	echo esc_html_e(' Design & Developed by','solar-renewable-energy-pro'). "<a href=".esc_url(solar_renewable_energy_pro_SITE_URL)." target='_blank'> Ovation Themes</a>";
}

/*Radio Button sanitization*/
function solar_renewable_energy_pro_sanitize_choices( $input, $setting ) {
	global $wp_customize;
	$control = $wp_customize->get_control( $setting->id );
	if ( array_key_exists( $input, $control->choices ) ) {
		return $input;
	} else {
		return $setting->default;
	}
}

 /* Breadcrumb Begin */
function solar_renewable_energy_pro_the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
			echo esc_url(home_url());
		echo '">';
			bloginfo('name');
		echo "</a> ";
		if (is_category() || is_single()) {
			the_category(', ');
			if (is_single()) {
				echo "<span> ";
					the_title();
				echo "</span> ";
			}
		} elseif (is_page()) {
			the_title();
		}
	}
}

/* Excerpt Limit Begin */
function solar_renewable_energy_pro_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

/* Excerpt Read more overwrite */
function solar_renewable_energy_pro_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}
	$link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'solar-renewable-energy-pro' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'solar_renewable_energy_pro_excerpt_more' );


define('solar_renewable_energy_pro_THEME_DOC','https://trial.ovationthemes.com/docs/ot-solar-renewable-energy-pro-doc/');
define('solar_renewable_energy_pro_FAQ','https://www.ovationthemes.com/faqs/');
define('solar_renewable_energy_pro_CONTACT','https://www.ovationthemes.com/pages/community');
define('solar_renewable_energy_pro_REVIEW','https://www.ovationthemes.com/topic/reviews-and-testimonials/');

Class My_Recent_Posts_Widget extends WP_Widget_Recent_Posts {
   function widget($args, $instance) {
           if ( ! isset( $args['widget_id'] ) ) {
           $args['widget_id'] = $this->id;
       }
       $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Recent Posts', 'solar-renewable-energy-pro' );
       /** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
       $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
       $number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;
       if ( ! $number )
           $number = 5;
       $show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;
       /**
        * Filter the arguments for the Recent Posts widget.
        *
        * @since 3.4.0
        *
        * @see WP_Query::get_posts()
        *
        * @param array $args An array of arguments used to retrieve the recent posts.
        */
       $r = new WP_Query( apply_filters( 'widget_posts_args', array(
           'posts_per_page'      => $number,
           'no_found_rows'       => true,
           'post_status'         => 'publish',
           'ignore_sticky_posts' => true
       ) ) );
       if ($r->have_posts()) :
       ?>
       <?php echo $args['before_widget']; ?>
       <?php if ( $title ) {
           echo $args['before_title'] . esc_html($title) . $args['after_title'];
       } ?>
       <ul>
         <?php while ( $r->have_posts() ) : $r->the_post(); ?>
             <li>
                 <div class="row recent-post-box">
                   <div class="post-thumb <?php if(has_post_thumbnail()) { echo 'col-md-3 col-sm-4 col-12 p-0'; } ?> ">
                       <?php the_post_thumbnail(); ?>
                   </div>
                   <div class="post-content <?php if(has_post_thumbnail()) { echo 'col-md-9 col-sm-8 col-12'; } else { echo 'col-md-12 col-sm-12 col-12'; }?>">
                       <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                     <?php if ( $show_date ) : ?>
                         <p class="post-date"><?php the_date(); ?></p>
                     <?php endif; ?>
                   </div>
                 </div>
             </li>
         <?php endwhile; 
         wp_reset_postdata(); ?>
       </ul>

       <?php echo $args['after_widget'];
       
       endif;
   }
}
function my_recent_widget_registration() {
 unregister_widget('WP_Widget_Recent_Posts');
register_widget('My_Recent_Posts_Widget');
}
add_action('widgets_init', 'my_recent_widget_registration');


// Feature Custom filed 1
function woo_add_featured_custom_fields1() {
  global $woocommerce, $post;
  echo '<div class="options_group">';
  woocommerce_wp_text_input( 
      array( 
          'id'          => 'featured-custom-field1', 
          'label'       => __( 'Enter Custom Field 1', 'solar-renewable-energy-pro' ), 
          'placeholder' => 'Enter Detail',
          'desc_tip'    => 'true' 
      )
  );
  echo '</div>';
}
add_action( 'woocommerce_product_options_general_product_data', 'woo_add_featured_custom_fields1' );

function woo_add_featured_custom_fields1_save( $post_id ){

    // Text Field
    $woocommerce_text_field = $_POST['featured-custom-field1'];
    if( !empty( $woocommerce_text_field ) )
        update_post_meta( $post_id, 'featured-custom-field1', esc_attr( $woocommerce_text_field ) );  
}
add_action( 'woocommerce_process_product_meta', 'woo_add_featured_custom_fields1_save' );

// Feature Custom filed 2

function woo_add_featured_custom_fields2() {
  global $woocommerce, $post;
  echo '<div class="options_group">';
  woocommerce_wp_text_input( 
      array( 
          'id'          => 'featured-custom-field2', 
          'label'       => __( 'Enter Custom Field 2', 'solar-renewable-energy-pro' ), 
          'placeholder' => 'Enter Detail',
          'desc_tip'    => 'true' 
      )
  );
  echo '</div>';
}
add_action( 'woocommerce_product_options_general_product_data', 'woo_add_featured_custom_fields2' );

function woo_add_featured_custom_fields2_save( $post_id ){

    // Text Field
    $woocommerce_text_field = $_POST['featured-custom-field2'];
    if( !empty( $woocommerce_text_field ) )
        update_post_meta( $post_id, 'featured-custom-field2', esc_attr( $woocommerce_text_field ) );  
}
add_action( 'woocommerce_process_product_meta', 'woo_add_featured_custom_fields2_save' );

// Best Custom filed 1
function woo_add_best_custom_fields1() {
  global $woocommerce, $post;
  echo '<div class="options_group">';
  woocommerce_wp_text_input( 
      array( 
          'id'          => 'best-custom-field1', 
          'label'       => __( 'Enter Custom Field 1', 'solar-renewable-energy-pro' ), 
          'placeholder' => 'Enter Detail',
          'desc_tip'    => 'true' 
      )
  );
  echo '</div>';
}
add_action( 'woocommerce_product_options_general_product_data', 'woo_add_best_custom_fields1' );

function woo_add_best_custom_fields1_save( $post_id ){

    // Text Field
    $woocommerce_text_field = $_POST['best-custom-field1'];
    if( !empty( $woocommerce_text_field ) )
        update_post_meta( $post_id, 'best-custom-field1', esc_attr( $woocommerce_text_field ) );  
}
add_action( 'woocommerce_process_product_meta', 'woo_add_best_custom_fields1_save' );

// Best Custom filed 2

function woo_add_best_custom_fields2() {
  global $woocommerce, $post;
  echo '<div class="options_group">';
  woocommerce_wp_text_input( 
      array( 
          'id'          => 'best-custom-field2', 
          'label'       => __( 'Enter Custom Field 2', 'solar-renewable-energy-pro' ), 
          'placeholder' => 'Enter Detail',
          'desc_tip'    => 'true' 
      )
  );
  echo '</div>';
}
add_action( 'woocommerce_product_options_general_product_data', 'woo_add_best_custom_fields2' );

function woo_add_best_custom_fields2_save( $post_id ){

    // Text Field
    $woocommerce_text_field = $_POST['best-custom-field2'];
    if( !empty( $woocommerce_text_field ) )
        update_post_meta( $post_id, 'best-custom-field2', esc_attr( $woocommerce_text_field ) );  
}
add_action( 'woocommerce_process_product_meta', 'woo_add_best_custom_fields2_save' );

// Deal Custom filed 1
function woo_add_deal_custom_fields1() {
  global $woocommerce, $post;
  echo '<div class="options_group">';
  woocommerce_wp_text_input( 
      array( 
          'id'          => 'deal-custom-field', 
          'label'       => __( 'Enter Custom Field', 'solar-renewable-energy-pro' ), 
          'placeholder' => 'Enter Detail',
          'desc_tip'    => 'true' 
      )
  );
  echo '</div>';
}
add_action( 'woocommerce_product_options_general_product_data', 'woo_add_deal_custom_fields1' );

function woo_add_deal_custom_fields1_save( $post_id ){

    // Text Field
    $woocommerce_text_field = $_POST['deal-custom-field'];
    if( !empty( $woocommerce_text_field ) )
        update_post_meta( $post_id, 'deal-custom-field', esc_attr( $woocommerce_text_field ) );  
}
add_action( 'woocommerce_process_product_meta', 'woo_add_deal_custom_fields1_save' );

// woocommerce Trim zeros in price decimals
add_filter( 'woocommerce_price_trim_zeros', '__return_true' );

add_filter('loop_shop_columns', 'solar_renewable_energy_pro_loop_columns', 999);
if (!function_exists('solar_renewable_energy_pro_loop_columns')) {
	function solar_renewable_energy_pro_loop_columns() {
		return 3;
	}
}

//Contact Widget file
require get_parent_theme_file_path( '/inc/widget/contact-widget.php' );


// woocommere filter
add_filter( 'woocommerce_prevent_automatic_wizard_redirect', '__return_true' );

//Bundle Bar 
function solar_renewable_energy_pro_boundle_bar() {
	echo '<div class="notice notice-warning is-dismissible ot-bundle">
	<div class="ot-bundle-content">
		<p>WordPress Bundle - Get 10% off on a bundle of 90+ WordPress themes <br> with coupon code "OVATION10" At Just $89. <span class="ot-bundle-btn"><a href="https://www.ovationthemes.com/products/wordpress-bundle/" target="_blank">BUY NOW</a></span></p>
	</div>
</div>'; 
}
add_action( 'admin_notices', 'solar_renewable_energy_pro_boundle_bar' );



// License key code start
	define( 'SHOPIFY_THEME_LICENCE_ENDPOINT', 'https://license.ovationthemes.com/api/public/' );

	function get_the_validation_status() {
		return get_option('solar_renewable_energy_pro_theme_validation_status', 'false' );
	}

	function set_the_validation_status($is_valid) {
		update_option('solar_renewable_energy_pro_theme_validation_status', $is_valid);
	}

	function get_the_suspension_status() {
		return get_option( 'solar_renewable_energy_pro_theme_suspension_status', 'false' );
	}

	function set_the_suspension_status( $is_suspended ) {
		update_option( 'solar_renewable_energy_pro_theme_suspension_status' , $is_suspended );
	}

	function set_the_theme_key($the_key) {
		update_option('pro_theme_license_key', $the_key);
	}

	function remove_the_theme_key() {
		delete_option('pro_theme_license_key');
	}

	function get_the_theme_key() {
		return get_option('pro_theme_license_key');
	}
	function solar_renewable_energy_pro_admin_scripts(){

		wp_enqueue_script( 'solar-renewable-energy-pro-notify-js', get_template_directory_uri() . '/assets/js/jquery.notify.min.js', array( 'jquery' ) );
		wp_register_script( 'solar-renewable-energy-pro-admin-script', get_template_directory_uri() . '/assets/js/admin_script.js', array('jquery') );

		$localize_script_arr = array(
			'ajaxurl'	=>	admin_url('admin-ajax.php'),
			'wpnonce'	=> wp_create_nonce( 'admin_script_nonce' )
		);

		wp_localize_script('solar-renewable-energy-pro-admin-script', 'localize_script_arr' ,$localize_script_arr);

		wp_enqueue_script( 'solar-renewable-energy-pro-admin-script' );
	}
	add_action( 'admin_enqueue_scripts', 'solar_renewable_energy_pro_admin_scripts' );

	function license_activate_solar_renewable_energy_pro() {
		$license_key = $_POST['solar_renewable_energy_pro_license_key'];

		$endpoint = SHOPIFY_THEME_LICENCE_ENDPOINT . 'verifyTheme';

		$body = [
			'theme_license_key'  => $license_key,
			'site_url'					 => site_url(),
			'theme_text_domain'	 => wp_get_theme()->get( 'TextDomain' )
		];
		$body = wp_json_encode( $body );
		$options = [
			'body'        => $body,
			'headers'     => [
				'Content-Type' => 'application/json',
			]
		];
		$response = wp_remote_post( $endpoint, $options );

		if ( is_wp_error( $response ) ) {
			remove_the_theme_key();
			set_the_validation_status('false');
			$response = array('status' => false, 'msg' => 'Something Went Wrong!');
			wp_send_json($response);
			exit;
		} else {
			$response_body = wp_remote_retrieve_body( $response );
			$response_body = json_decode($response_body);

			if ( $response_body->is_suspended == 1 ) {
				set_the_suspension_status( 'true' );
			} else {
				set_the_suspension_status( 'false' );
			}

			if ($response_body->status === false) {
				remove_the_theme_key();
				set_the_validation_status('false');
				$response = array('status' => false, 'msg' => $response_body->msg);
				wp_send_json($response);
				exit;
			} else {
				set_the_validation_status('true');
				set_the_theme_key($license_key);
				$response = array('status' => true, 'msg' => 'Theme Activated Successfully!');
				wp_send_json($response);
				exit;
			}
		}
	}
	add_action( 'wp_ajax_license_activate_solar_renewable_energy_pro', 'license_activate_solar_renewable_energy_pro' );

	function license_deactivate_solar_renewable_energy_pro() {

		$license_key = $_POST['solar_renewable_energy_pro_license_key'];

		if ( $license_key != '' ) {

			$endpoint = SHOPIFY_THEME_LICENCE_ENDPOINT . 'deactivateDomain';

			$body = [
				'theme_license_key'  => $license_key,
				'site_url'					 => site_url()
			];
			$body = wp_json_encode( $body );
			$options = [
				'body'        => $body,
				'headers'     => [
					'Content-Type' => 'application/json',
				]
			];
			$response = wp_remote_post( $endpoint, $options );

			if ( is_wp_error( $response ) ) {

				$response = array('status' => false, 'msg' => 'Something Went Wrong!');
				wp_send_json($response);
				exit;

			} else {

				$response_body = wp_remote_retrieve_body( $response );
				$response_body = json_decode($response_body);

				if ($response_body->status === false) {

					$response = array('status' => false, 'msg' => $response_body->msg);
					wp_send_json($response);
					exit;
				} else {
					remove_the_theme_key();
					set_the_validation_status('false');
					$response = array('status' => true, 'msg' => $response_body->msg);
					wp_send_json($response);
					exit;
				}
			}
		}

	}

	add_action( 'wp_ajax_license_deactivate_solar_renewable_energy_pro', 'license_deactivate_solar_renewable_energy_pro' );

	function solar_renewable_energy_pro_license_expiry_notice() {

		$license_key = get_the_theme_key();
		$endpoint = SHOPIFY_THEME_LICENCE_ENDPOINT . 'status';

		$body = [
			'theme_license_key'		=> $license_key,
			'site_url'				=> site_url(),
			'theme_text_domain'		=> wp_get_theme()->get( 'TextDomain' )
		];
		$body = wp_json_encode( $body );
		$options = [
			'body'        => $body,
			'headers'     => [
				'Content-Type' => 'application/json',
			]
		];

		if ( $license_key != "" ) {

			$response = wp_remote_post( $endpoint, $options );

			if ( !is_wp_error( $response ) ) {

				$response_body = wp_remote_retrieve_body( $response );
				$response_body = json_decode($response_body);

				if ( isset($response_body->status) && $response_body->status === false ) {

					set_the_validation_status('false');?>

					<div class="notice notice-success is-dismissible">
						<p><?php _e('License key is expired!', 'solar-renewable-energy-pro'); ?></p>
					</div><?php
				}

				if ( isset($response_body->is_suspended) && $response_body->is_suspended == 1 ) {
					set_the_suspension_status( 'false' );?>

					<div class="notice notice-success is-dismissible">
						<p><?php _e('License key is suspended!', 'solar-renewable-energy-pro'); ?></p>
					</div><?php
				}
			}
		}
	}
	add_action( 'admin_notices', 'solar_renewable_energy_pro_license_expiry_notice' );
	// License key code end