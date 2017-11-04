<!-- А ниже мы для примера добавим еще один блок -->
<div class="container">
<div class="row">
		<h2>Отзывы</h2>
		<?php		
			$args = array( 'post_type' => 'testimonials', 'posts_per_page' => 10 ); // указываем тип записи и количество получаемых записей
			$loop = new WP_Query( $args ); // запрос к БД
			while( $loop->have_posts() ) : // запускаем цикл
				$loop->the_post(); ?>
				<div class="col-xs-12 col-sm-12 col-md-6">
						<?
							/*
							 * Отображаем фото с отзывом
							 * */
							if ( has_post_thumbnail() ) {
								the_post_thumbnail();
							}
						?>
						<div class="caption">
							<h4>
								<? the_title(); // заголовок ?>
							</h4>
							<p>
								<? the_content(); // текст введенный в ?>
							</p>
						</div>				
				</div>
			<? endwhile; ?>	
</div>
</div>