<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pink-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="header">
		<div class="container">
			<div class="header-holder clearfix">
			<?php the_custom_logo(); ?>
				<a href="#" class="login">Login</a>
				<?php
		        	wp_nav_menu( array( 
				      'theme_location' => 'header_menu',
		               'items_wrap'   => '<ul id="%1$s" class="nav-header %2$s">%3$s</ul>',

		    		) )
		        ?>
			</div>
		</div>
	</header>
	<?php while ( have_posts() ) : the_post(); ?>
			<?php
				echo get_post_meta(get_the_ID(), '_np_testimonials_link', true);
			?>
			<?php the_content(); ?>
	<?php endwhile; ?>
	<!-- carousel ========== START -->
	<!-- <div id="owl-demo" class="owl-carousel owl-theme">
		<div class="item" style="background-image: url('img/flowers.jpg')">
			<div class="container">
				<div class="carousel-caption">
					<h1 class="title">Welcome to Pink</h1>
					<p>A multi purpose theme</p>
				</div>		
			 </div>
		</div>
		<div class="item" style="background-image: url('img/red-flowers.jpg')">
			<div class="container">
				<div class="carousel-caption">
					<h1 class="title">Welcome to Pink</h1>
					<p>A multi purpose theme</p>
				</div>		
		 	</div>
		 </div>
		 <div class="item" style="background-image: url('img/item.png')">
			 <div class="container">
				<div class="carousel-caption">
					<h1 class="title">Welcome to Pink</h1>
					<p>A multi purpose theme</p>
				</div>		
			 </div>
		 </div>
	</div> -->
	<!-- carousel ========== END -->

