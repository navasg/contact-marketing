<section class="testimonies" id="testimonies">
    <img class="particles particle-3 custom-animation" src="<?php echo get_template_directory_uri(); ?>/assets/img/particle-3.png" alt="">
    <img class="particles particle-4 custom-animation4" src="<?php echo get_template_directory_uri(); ?>/assets/img/particle-4.png" alt="">
    <img class="particles particle-7 custom-animation2" src="<?php echo get_template_directory_uri(); ?>/assets/img/particle-7.png" alt="">
    <img class="particles particle-9 custom-animation3" src="<?php echo get_template_directory_uri(); ?>/assets/img/particle-9.png" alt="">
    <div class="container padding-top-bottom">
      <h2 class="title-section">Testimonios</h2>

      <div class="flex-testimonie">
        <div class="box-testimonie">
          <div class="slider-nav">
       <?php $args = array( 'post_type' => 'testimonios', 'posts_per_page' => 100); ?>   
        <?php $loop = new WP_Query( $args ); ?>
         <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="item-testimonie">
              <div class="img-testimonie">
                <div class="testimonie-top" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
                </div>
                <div class="testimonie-bottom" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
                </div>
              </div>
            </div>
             <?php endwhile; ?>

          </div>
          <div class="slider-for">
            <?php $args = array( 'post_type' => 'testimonios', 'posts_per_page' => 100); ?>   
        <?php $loop = new WP_Query( $args ); ?>
         <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="item-testimonie">
              <div class="text-testimonie">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/quate.svg" alt="">
                <p><?php the_excerpt(); ?></p>
                <h3><?php the_title(); ?></h3>
              </div>
            </div>
            <?php endwhile; ?>
          </div>
        </div>
      </div>

    </div>
  </section>