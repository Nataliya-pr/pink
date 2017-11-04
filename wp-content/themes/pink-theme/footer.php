<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pink-theme
 */

?>

	<footer class="footer">
		<div class="container">
			<div class="footer-holder clearfix">
				<div class="list">
					<h4 class="list-title">Sub Menu</h4>
					<?php wp_nav_menu( array( 
					'theme_location' => 'footer_menu',
					'items_wrap'   => '<ul id="%1$s" class="footer-list %2$s">%3$s</ul>', 
					) ); ?>  
				</div>
				<div class="list">
					<h4 class="list-title">Sub Menu</h4>
					<?php wp_nav_menu( array( 
					'theme_location' => 'footer_menu2',
					'items_wrap'   => '<ul id="%1$s" class="footer-list %2$s">%3$s</ul>',
					 ) ); ?>  
				</div>
				<div class="list">
					<div class="footer-social">
						<a href="<?=get_option('np_footer_fb');?>" target="_blank"><i class="ico ico-1"></i></a>
						<a href="<?=get_option('np_footer_tw');?>" target="_blank"><i class="ico ico-2"></i></a>
						<a href="<?=get_option('np_footer_dribbble');?>" target="_blank"><i class="ico ico-3"></i></a>
						<a href="<?=get_option('np_footer_social');?>" target="_blank"><i class="ico ico-4"></i></a>
					</div>
					<p><?=get_option('np_footer_copy');?></p>
				</div>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
