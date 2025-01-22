
<?php
/**
 * Pro customizer section.
 * All code, unless otherwise noted, is licensed under the GNU GPL, version 2 or later. 2016 © Justin Tadlock.
 * @since  1.0.0
 * @access public
 */
class solar_renewable_energy_pro_customize_reviews_and_testimonials extends WP_Customize_Section {

    /**
     * The type of customize section being rendered.
     *
     * @since  1.0.0
     * @access public
     * @var    string
     */
    public $type = 'solar-renewable-energy-pro';

    /**
     * Custom button text to output.
     *
     * @since  1.0.0
     * @access public
     * @var    string
     */
    public $reviews_and_testimonials_text = '';

    public $description = '';

    /**
     * Custom pro button URL.
     *
     * @since  1.0.0
     * @access public
     * @var    string
     */
    public $reviews_and_testimonials_url = '';

    /**
     * Add custom parameters to pass to the JS via JSON.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function json() {
        $json = parent::json();
        $json['description'] = $this->description;
        $json['reviews_and_testimonials_text'] = $this->reviews_and_testimonials_text;
        $json['reviews_and_testimonials_url']  = esc_url( $this->reviews_and_testimonials_url );

        return $json;
    }


    /**
     * Outputs the Underscore.js template.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    protected function render_template() { ?>

        <li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }} <?php echo esc_attr( $this->section_class ); ?>">
            <h3 class="accordion-section-title">
                {{ data.title }}
                <# if ( data.reviews_and_testimonials_url ) { #>
                    <a target="_blank" href="{{ data.reviews_and_testimonials_url }}" class="button">{{ data.reviews_and_testimonials_text }}</a>
                <# } #>
            </h3>
        </li>
    <?php }    
}
