<?php
/**
 * Footer Template
 *
 * @version 4.6.2
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

 		/**
		* @hooked virtue_footer_markup - 10
		*/
		do_action( 'virtue_footer' );
		?>
		</div><!--Wrapper-->

<a href="#x" class="overlay" id="zapis"></a>
  <div class="popup">
	  <div class="form_title">Онлайн-запись</div>
    <?php echo do_shortcode('[forminator_form id="2022"]'); ?>
    <a class="closer" title="Закрыть" href="#close"><i class="icon-close"></i></a>
  </div>



		<?php wp_footer();



        ?>
<!--<script src="https://widget.gravi.org/code/index.js" data-grv-id="486" data-grv-key="o4x0axsael2jof50u" async></script>-->
<!-- Pixel -->
<!--<script type="text/javascript">
    (function (d, w) {
        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script");
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://qoopler.ru/index.php?ref="+d.referrer+"&page=" + encodeURIComponent(w.location.href);
            n.parentNode.insertBefore(s, n);
    })(document, window);
</script>-->
<!-- /Pixel -->
	</body>
</html>