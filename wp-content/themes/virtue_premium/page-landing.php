<?php
/**
 * Template Name: Landing - no header
 *
 * @package Virtue Theme
 */

?>
<div id="content" class="container <?php echo esc_attr( virtue_container_class() ); ?>">
	<div class="row">
		<div class="main <?php echo esc_attr( virtue_main_class() ); ?>" id="ktmain" role="main">
			<div class="entry-content">
				<?php get_template_part( 'templates/content', 'page' ); ?>
				</div>
			<?php
			/**
			 * Kadence Page Footer
			 *
			 * @hooked virtue_page_comments - 20
			 */
			do_action( 'kadence_page_footer' );
			do_action( 'virtue_page_footer' );
			?>
		</div><!-- /.main -->
