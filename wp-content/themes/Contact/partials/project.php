 <section class="projects" id="projects">
    <div class="container padding-top-bottom">
      <div class="row">
        <div class="col-lg-6">
          <h2 class="title-section">Nuestros Proyectos</h2>
          <p class="subtitle-section">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus sequi
            assumenda deleniti esse iure rem
            in quia beatae </p>

<?php $args = array( 'post_type' => 'proyectos', 'posts_per_page' => 2); ?>   
        <?php $loop = new WP_Query( $args ); ?>
         <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="card-project">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class=" wow animated zoomIn"
              style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
            <div class="hover-project">
              <h3 class="title-project">
               <?php the_title(); ?>
              </h3>
              <p><?php the_excerpt(); ?>
              </p>
            </div>
          </div>
<?php endwhile; ?>
        </div>

        <div class="col-lg-6 project-last">
          <?php $args = array( 'post_type' => 'proyectos', 'posts_per_page' => 2, 'orderby' => 'meta_value_num', 'order' => 'ASC'); ?>   
        <?php $loop = new WP_Query( $args ); ?>
         <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="card-project">
            <img  src="<?php echo get_the_post_thumbnail_url(); ?>"
              alt="" class=" wow animated zoomIn"
              style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
            <div class="hover-project">
              <h3 class="title-project">
                <?php the_title(); ?>
              </h3>
              <p><?php the_excerpt(); ?>
              </p>
            </div>
          </div>
        <?php endwhile; ?>
        </div>

      </div>
    </div>
  </section>