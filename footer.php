<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package appleWell
 */

?>

	</div><!-- #content -->

<?php
  if(
    has_category( array(2, 3, 4, 8, 9) ) ||
    is_category(2) ||
    is_category(3) ||
    is_category(4)
    ) {
    echo do_shortcode( '[why_we]' );
  }

require 'inc/order.php';
require 'inc/yandex-map.php';

?>

	<footer id="colophon" class="site-footer">
		<div class="container">

			<div class="site-info">
				© 2010-2018 Сервисный центр Apple-Well
			</div><!-- .site-info -->

		</div><!-- container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter49418935 = new Ya.Metrika2({ id:49418935, clickmap:true, trackLinks:true, accurateTrackBounce:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/tag.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks2"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/49418935" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</body>
</html>
