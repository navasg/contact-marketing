 <section class="clients" id="clients">
    <div class="container padding-top-bottom">
      <h2 class="title-section">Clientes</h2>
      <p class="subtitle-section">Conoce algunos de nuestros clientes </p>
      <div class="slick-clients">
      <?php $args = array( 'post_type' => 'aliados'); ?>   
        <?php $loop = new WP_Query( $args ); ?>
         <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="item-client">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
        </div>
        <?php endwhile; ?>  
      </div>
    </div>
  </section>