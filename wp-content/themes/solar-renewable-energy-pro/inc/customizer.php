<?php
/**
 * solar-renewable-energy-pro Theme Customizer
 *
 * @package solar-renewable-energy-pro
 */
/**
 * Loads custom control for layout settings
 */
function solar_renewable_energy_pro_custom_controls() {
    require_once get_template_directory() . '/inc/custom-controls.php';

     // Inlcude the Alpha Color Picker control file.
    require_once get_template_directory() . '/inc/alpha-color-picker.php';
    get_stylesheet_directory_uri() . '/assets/js/alpha-color-picker.js';
    get_stylesheet_directory_uri() . '/assets/css/alpha-color-picker.css';

    
}
add_action( 'customize_register', 'solar_renewable_energy_pro_custom_controls' );
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function solar_renewable_energy_pro_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

    $wp_customize->selective_refresh->add_partial( 'blogname', array(
        'selector' => '.logo a',
        'render_callback' => 'twentyfifteen_customize_partial_blogname',
    ) );
    $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
        'selector' => '.site-description',
        'render_callback' => 'twentyfifteen_customize_partial_blogdescription',
    ) );

    $wp_customize->add_setting('solar_renewable_energy_pro_display_title',array(
        'default' => 'false',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_display_title',array(
        'type' => 'checkbox',
        'label' => __('Show Title','solar-renewable-energy-pro'),
        'section' => 'title_tagline',
    ));
    $wp_customize->add_setting('solar_renewable_energy_pro_display_tagline',array(
        'default' => 'false',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_display_tagline',array(
        'type' => 'checkbox',
        'label' => __('Show Tagline','solar-renewable-energy-pro'),
        'section' => 'title_tagline',
    ));
    
    //add home page setting pannel
    $wp_customize->add_panel( 'solar_renewable_energy_pro_panel_id', array(
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Theme Settings', 'solar-renewable-energy-pro' ),
        'description' => __( 'Description of what this panel does.', 'solar-renewable-energy-pro' ),
    ) );
    $font_array = array(
        '' => __( 'No Fonts', 'solar-renewable-energy-pro' ),
        'Abril Fatface' => __( 'Abril Fatface', 'solar-renewable-energy-pro' ),
        'Acme' => __( 'Acme', 'solar-renewable-energy-pro' ),
        'Anton' => __( 'Anton', 'solar-renewable-energy-pro' ),
        'Architects Daughter' => __( 'Architects Daughter', 'solar-renewable-energy-pro' ),
        'Arimo' => __( 'Arimo', 'solar-renewable-energy-pro' ),
        'Arsenal' => __( 'Arsenal', 'solar-renewable-energy-pro' ),
        'Arvo' => __( 'Arvo', 'solar-renewable-energy-pro' ),
        'Alegreya' => __( 'Alegreya', 'solar-renewable-energy-pro' ),
        'Alfa Slab One' => __( 'Alfa Slab One', 'solar-renewable-energy-pro' ),
        'Averia Serif Libre' => __( 'Averia Serif Libre', 'solar-renewable-energy-pro' ),
        'Bangers' => __( 'Bangers', 'solar-renewable-energy-pro' ),
        'Boogaloo' => __( 'Boogaloo', 'solar-renewable-energy-pro' ),
        'Bad Script' => __( 'Bad Script', 'solar-renewable-energy-pro' ),
        'Bitter' => __( 'Bitter', 'solar-renewable-energy-pro' ),
        'Bree Serif' => __( 'Bree Serif', 'solar-renewable-energy-pro' ),
        'BenchNine' => __( 'BenchNine', 'solar-renewable-energy-pro' ),
        'Cabin' => __( 'Cabin', 'solar-renewable-energy-pro' ),
        'Cardo' => __( 'Cardo', 'solar-renewable-energy-pro' ),
        'Courgette' => __( 'Courgette', 'solar-renewable-energy-pro' ),
        'Cherry Swash' => __( 'Cherry Swash', 'solar-renewable-energy-pro' ),
        'Cormorant Garamond' => __( 'Cormorant Garamond', 'solar-renewable-energy-pro' ),
        'Crimson Text' => __( 'Crimson Text', 'solar-renewable-energy-pro' ),
        'Cuprum' => __( 'Cuprum', 'solar-renewable-energy-pro' ),
        'Cookie' => __( 'Cookie', 'solar-renewable-energy-pro' ),
        'Chewy' => __( 'Chewy', 'solar-renewable-energy-pro' ),
        'Days One' => __( 'Days One', 'solar-renewable-energy-pro' ),
        'Dosis' => __( 'Dosis', 'solar-renewable-energy-pro' ),
        'Economica' => __( 'Economica', 'solar-renewable-energy-pro' ),
        'Fredoka One' => __( 'Fredoka One', 'solar-renewable-energy-pro' ),
        'Fjalla One' => __( 'Fjalla One', 'solar-renewable-energy-pro' ),
        'Francois One' => __( 'Francois One', 'solar-renewable-energy-pro' ),
        'Frank Ruhl Libre' => __( 'Frank Ruhl Libre', 'solar-renewable-energy-pro' ),
        'Gloria Hallelujah' => __( 'Gloria Hallelujah', 'solar-renewable-energy-pro' ),
        'Great Vibes' => __( 'Great Vibes', 'solar-renewable-energy-pro' ),
        'Handlee' => __( 'Handlee', 'solar-renewable-energy-pro' ),
        'Hammersmith One' => __( 'Hammersmith One', 'solar-renewable-energy-pro' ),
        'Inconsolata' => __( 'Inconsolata', 'solar-renewable-energy-pro' ),
        'Indie Flower' => __( 'Indie Flower', 'solar-renewable-energy-pro' ),
        'IM Fell English SC' => __( 'IM Fell English SC', 'solar-renewable-energy-pro' ),
        'Julius Sans One' => __( 'Julius Sans One', 'solar-renewable-energy-pro' ),
        'Josefin Slab' => __( 'Josefin Slab', 'solar-renewable-energy-pro' ),
        'Josefin Sans' => __( 'Josefin Sans', 'solar-renewable-energy-pro' ),
        'Kanit' => __( 'Kanit', 'solar-renewable-energy-pro' ),
        'Lobster' => __( 'Lobster', 'solar-renewable-energy-pro' ),
        'Lato' => __( 'Lato', 'solar-renewable-energy-pro' ),
        'Lora' => __( 'Lora', 'solar-renewable-energy-pro' ),
        'Libre Baskerville' => __( 'Libre Baskerville', 'solar-renewable-energy-pro' ),
        'Lobster Two' => __( 'Lobster Two', 'solar-renewable-energy-pro' ),
        'Merriweather' => __( 'Merriweather', 'solar-renewable-energy-pro' ),
        'Monda' => __( 'Monda', 'solar-renewable-energy-pro' ),
        'Montserrat' => __( 'Montserrat', 'solar-renewable-energy-pro' ),
        'Muli' => __( 'Muli', 'solar-renewable-energy-pro' ),
        'Marck Script' => __( 'Marck Script', 'solar-renewable-energy-pro' ),
        'Noto Serif' => __( 'Noto Serif', 'solar-renewable-energy-pro' ),
        'Open Sans' => __( 'Open Sans', 'solar-renewable-energy-pro' ),
        'Overpass' => __( 'Overpass', 'solar-renewable-energy-pro' ),
        'Overpass Mono' => __( 'Overpass Mono', 'solar-renewable-energy-pro' ),
        'Oxygen' => __( 'Oxygen', 'solar-renewable-energy-pro' ),
        'Orbitron' => __( 'Orbitron', 'solar-renewable-energy-pro' ),
        'Patua One' => __( 'Patua One', 'solar-renewable-energy-pro' ),
        'Pacifico' => __( 'Pacifico', 'solar-renewable-energy-pro' ),
        'Padauk' => __( 'Padauk', 'solar-renewable-energy-pro' ),
        'Playball' => __( 'Playball', 'solar-renewable-energy-pro' ),
        'Playfair Display' => __( 'Playfair Display', 'solar-renewable-energy-pro' ),
        'PT Sans' => __( 'PT Sans', 'solar-renewable-energy-pro' ),
        'Philosopher' => __( 'Philosopher', 'solar-renewable-energy-pro' ),
        'Permanent Marker' => __( 'Permanent Marker', 'solar-renewable-energy-pro' ),
        'Poiret One' => __( 'Poiret One', 'solar-renewable-energy-pro' ),
        'Quicksand' => __( 'Quicksand', 'solar-renewable-energy-pro' ),
        'Quattrocento Sans' => __( 'Quattrocento Sans', 'solar-renewable-energy-pro' ),
        'Raleway' => __( 'Raleway', 'solar-renewable-energy-pro' ),
        'Rubik' => __( 'Rubik', 'solar-renewable-energy-pro' ),
        'Rokkitt' => __( 'Rokkitt', 'solar-renewable-energy-pro' ),
        'Russo One' => __( 'Russo One', 'solar-renewable-energy-pro' ),
        'Righteous' => __( 'Righteous', 'solar-renewable-energy-pro' ),
        'Slabo' => __( 'Slabo', 'solar-renewable-energy-pro' ),
        'Source Sans Pro' => __( 'Source Sans Pro', 'solar-renewable-energy-pro' ),
        'Shadows Into Light Two' => __( 'Shadows Into Light Two', 'solar-renewable-energy-pro'),
        'Shadows Into Light' => __( 'Shadows Into Light', 'solar-renewable-energy-pro' ),
        'Sacramento' => __( 'Sacramento', 'solar-renewable-energy-pro' ),
        'Shrikhand' => __( 'Shrikhand', 'solar-renewable-energy-pro' ),
        'Tangerine' => __( 'Tangerine', 'solar-renewable-energy-pro' ),
        'Ubuntu' => __( 'Ubuntu', 'solar-renewable-energy-pro' ),
        'VT323' => __( 'VT323', 'solar-renewable-energy-pro' ),
        'Varela Round' => __( 'Varela Round', 'solar-renewable-energy-pro' ),
        'Vampiro One' => __( 'Vampiro One', 'solar-renewable-energy-pro' ),
        'Vollkorn' => __( 'Vollkorn', 'solar-renewable-energy-pro' ),
        'Volkhov' => __( 'Volkhov', 'solar-renewable-energy-pro' ),
        'Yanone Kaffeesatz' => __( 'Yanone Kaffeesatz', 'solar-renewable-energy-pro' )
    );

    require_once get_template_directory() . '/inc/customizer-seperator/class/customizer-seperator.php';
    require get_template_directory() . '/inc/customize-repeater/customize-repeater.php';

    //general Settings
    require get_template_directory() . '/inc/customizer-custom-variables.php';
    //Header
    require get_template_directory() . '/inc/customizer-part-header.php';
    //Slider
    require get_template_directory() . '/inc/customizer-part-slide.php';
    //Home page sections
    require get_template_directory() . '/inc/customizer-part-home.php';
     //Social Icon
    require get_template_directory() . '/inc/customizer-part-social-icons.php';
    //Footer
    require get_template_directory() . '/inc/customizer-part-footer.php';
}
add_action( 'customize_register', 'solar_renewable_energy_pro_customize_register' );
//Integer
function solar_renewable_energy_pro_sanitize_integer( $input ) {
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}



/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class solar_renewable_energy_pro_customize {
    /**
     * Returns the instance.
     *
     * @since  1.0.0
     * @access public
     * @return object
     */
    public static function get_instance() {
        static $instance = null;
        if ( is_null( $instance ) ) {
            $instance = new self;
            $instance->setup_actions();
        }
        return $instance;
    }

    /**
     * Constructor method.
     *
     * @since  1.0.0
     * @access private
     * @return void
     */
    private function __construct() {}

    /**
     * Sets up initial actions.
     *
     * @since  1.0.0
     * @access private
     * @return void
     */
    private function setup_actions() {
        // Register panels, sections, settings, controls, and partials.
        add_action( 'customize_register', array( $this, 'sections' ) );
        // Register scripts and styles for the controls.
        add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
    }

    /**
     * Sets up the customizer sections.
     *
     * @since  1.0.0
     * @access public
     * @param  object  $manager
     * @return void
     */
    public function sections( $manager ) {
        // Load custom sections.
        load_template( trailingslashit( get_template_directory() ) . '/inc/review-section.php' );

        // Register custom section types.
        $manager->register_section_type( 'solar_renewable_energy_pro_customize_reviews_and_testimonials' );

        // Register review and testimonial section.
        $manager->add_section(
            new solar_renewable_energy_pro_customize_reviews_and_testimonials(
                $manager,
                'example_1',
                array(
                    'title'    => esc_html__( 'Review & Testimonial', 'solar-renewable-energy-pro' ),
                    'reviews_and_testimonials_text' => esc_html__( 'Rate Us', 'solar-renewable-energy-pro' ),
                    'reviews_and_testimonials_url'  => 'https://www.ovationthemes.com/topic/reviews-and-testimonials/',
                    'priority' => '1',
                    'section_class' => 'review-testimonial-section' // Add a unique CSS class for this section
                )
            )
        );

        // Register bundle link section.
        $manager->add_section(
            new solar_renewable_energy_pro_customize_reviews_and_testimonials(
                $manager,
                'bundle_link_section',
                array(
                    'title'    => esc_html__( 'WordPress Theme Bundle - Get All Our Themes In Single Package At Just $89', 'adventure-trekking-camp-pro' ),
                    'reviews_and_testimonials_text' => esc_html__( 'Get Bundle', 'adventure-trekking-camp-pro' ),
                    'reviews_and_testimonials_url'  => 'https://www.ovationthemes.com/products/wordpress-bundle',
                    'priority' => '0',
                    'section_class' => 'bundle-link-section' // Add a unique CSS class for this section
                )
            )
        );
    }

    /**
     * Loads theme customizer CSS.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function enqueue_control_scripts() {
        wp_enqueue_script( 'solar-renewable-energy-pro-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );
        wp_enqueue_style( 'solar-renewable-energy-pro-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customizer.css' );
    }
}

// Ensure the customizer class is loaded.
solar_renewable_energy_pro_customize::get_instance();