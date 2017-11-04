<?php
/*
 * The template for displaying home page
 */
/*
Template Name: Mainpink template
*/

get_header(); ?>
		<main id="main" class="site-main" role="main">
		<?php
		if ( have_posts() ) :
			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php
			endif;
			/* Start the Loop */
			while ( have_posts() ) : the_post();
				echo do_shortcode('[slider]');
				?>
		<!-- 		if ( has_post_thumbnail() ) {
								the_post_thumbnail();
							} -->
				<!-- thumbs ========== STRAT -->
				<div class="thumbs">
					<div class="container">
						<div class="thumbs-caption">
							<h2 class="sub-title">Lorem Ipsum is simply dummy</h2>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown</p>
						</div>
						<div class="thumbs-holder">
							<?php
								$thumbpink_query = new WP_Query( array(
											'post_type'   => 'np_specifications',
											'post_status' => 'publish',
											)
										);

								if ( $thumbpink_query->have_posts() ) : while ( $thumbpink_query->have_posts() ) : $thumbpink_query->the_post();
								?>
									<div class="thumb">
										<!-- <img src="img/beermug-big.png" alt="tickets"> -->
										<?php echo get_the_post_thumbnail( $page->ID, 'thumbnail'); ?>
										
										<div class="thumb-txt"><?php the_content(); ?></div>
										<h5 class="thumb-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
									</div>
								<?php endwhile; ?>
								<?php endif; ?>
								<?php wp_reset_postdata();
							?>
						</div>
					</div>
				</div>
				<!-- thumbs ========== END -->
				<!-- blocks ========== STRAT -->
				<div class="blocks">
					<div class="container">
						<div class="block-holder">
						<?php
							// запрос
							$postpink_query = new WP_Query(array(
								'post_type'=>'post',
								'post_status'=>'publish',
								'posts_per_page'=>-1
							));
						?>
						<?php if ( $postpink_query->have_posts() ) : ?>
							<!-- the loop -->
						    <?php while ( $postpink_query->have_posts() ) : $postpink_query->the_post(); ?>
								<div class="block clearfix">
									<h3 class="chapter-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<div class="block-foto">
										<?php echo get_the_post_thumbnail( $page->ID, array(200, 134)); ?>
									</div>
									<p><?php echo get_the_excerpt($page); ?></p>
								</div>
							<?php endwhile; ?>
						    <!-- end of the loop -->
						<?php wp_reset_postdata(); ?>
						<?php else : ?>
						    <p><?php _e( 'Извините, нет записей, соответствуюших Вашему запросу.' ); ?></p>
						<?php endif; ?>			
						</div>
					</div>
				</div>
				<!-- blocks ========== END -->				
				<?php
			endwhile;
			the_posts_navigation();
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif; ?>
	</main><!-- #main -->
<?php get_footer();

/*<ul>
	<?php foreach( $pages as $page ){ ?>
		<li>
			<?php echo get_the_post_thumbnail( $page->ID, 'thumbnail'); ?>
			<h1><?php echo get_the_title($page); ?></h1>
			<?php echo get_the_excerpt($page); ?>
		</li>
	<?php } ?>
</ul>
*/