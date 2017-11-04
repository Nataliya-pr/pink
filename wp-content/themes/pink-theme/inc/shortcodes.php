<?php

 add_shortcode('slider', 'slider_func');
 
 function slider_func($atts, $content) {
   ob_start();

   $args = [
    'post_type' => 'np_slides',
    'post_per_page' => -1,
    'post_status' => 'publish',
   ];
   $query = new WP_Query($args);

   if ( $query-> have_posts() ) {


   ?>  
      <!-- carousel ========== START -->
      <div id="owl-demo" class="owl-carousel owl-theme">
       <?php
           while ( $query-> have_posts() ) {
             $query-> the_post();

             ?> 
             <?php
                   $image = get_post_meta(get_the_ID() , '_thumbnail_id', true);
                   $src = wp_get_attachment_image_src($image);
                   ?>
                   <!-- <img src="<?=$src[0];?>"> -->
              <!-- <div class="item" style="background-image: url('<?=get_template_directory_uri();?>/images/flowers.jpg')"> -->
              <div class="item" style="background-image: url('<?=$src[0];?>')">
                <div class="container">

                  <div class="carousel-caption">
                    <h1 class="title"><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>
                    <p> <a href="<?php echo get_post_meta(get_the_ID(), '_np_slides_link', true); ?>" target="_blank" class="carousel-link">Visit our site</a></p>
                  </div>    
                 </div>
              </div>
              <?php
                          }
                          ?>

      </div>
      <!-- carousel ========== END -->
    <?php
  }
   wp_reset_postdata(); // возвр вордпресс в исходное состояние после нашего запроса
   return ob_get_clean();
 }