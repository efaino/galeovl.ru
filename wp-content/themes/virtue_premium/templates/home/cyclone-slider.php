<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
	global $virtue_premium;

?>
<div class="sliderclass cyclone_home_slider">
<?php echo do_shortcode( $virtue_premium['home_cyclone_slider'] );
	if(isset($virtue_premium['above_header_slider_arrow']) && $virtue_premium['above_header_slider_arrow'] == 1) {
        	echo '<div class="kad_fullslider_arrow"><a href="#home_slider_bottom"><i class="icon-arrow-down"></i></a></div>';
    }
	?>
</div><!--sliderclass-->
<div id="home_slider_bottom"></div>