<?php
/**
 * The template for displaying search forms in solar-renewable-energy-pro
 *
 * @package solar-renewable-energy-pro
 */
?>
<form role="search" method="get" class="search-form serach-page" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'solar-renewable-energy-pro' ); ?>" value="<?php echo esc_attr(the_search_query()); ?>" name="s">
    </label>
    <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'solar-renewable-energy-pro' ); ?>">
</form>