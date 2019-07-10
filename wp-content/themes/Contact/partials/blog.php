 <section class="blog " id="blog">
    <div class="container padding-top-bottom">
      <h2 class="title-section">Blog</h2>
      <p class="subtitle-section">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus sequi
        assumenda deleniti esse iure rem
        in quia beatae </p>
      <div class="row">
      <?php $args = array( 'posts_per_page' => 3); ?>   
        <?php $loop = new WP_Query( $args ); ?>
         <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="col-lg-4">
          <div class="item-blog  wow animated fadeIn"
            style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
            <div class=" img-post">
              <img
                src="<?php echo get_the_post_thumbnail_url(); ?>"
                alt="">
            </div>
            <div class="detail-post">
              <div class="extra-post">
                <p class="user"><i class="fa fa-user-o" aria-hidden="true"></i>
                  <?php the_author(); ?> </p>
                <p class="date">
                  <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                  <?php the_date(); ?>
                </p>
              </div>
              <h3 class="title-post"><?php the_title(); ?></h3>
              <a class="btn-general" href="<?php the_permalink(); ?>">Leer Más > </a>
            </div>
          </div>
        </div>

        <?php endwhile; ?>
      </div>
    </div>
  </section>