<?php get_header(); ?>
  <section class="banner-post"
    style="background-image: url('https://images.unsplash.com/photo-1504384764586-bb4cdc1707b0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80')">
    <div class="mask-banner-post">
      <div class="text-banner">
        <h2>Somos tu mejor aliado en performance digital</h2>
      </div>
    </div>
  </section>

  <div class="body-post">
    <div class="container padding-top-bottom">
      <div class="row">
        <div class="col-lg-8">
          <div class="detail-single-post">
            <div class="img-single-post">
              <img  src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
            </div>
            <h2 class="title-detail-post">
             <?php the_title(); ?>
            </h2>
            <ul class="list-single">
              <li><a href=""><?php the_category(); ?></a></li>
              <li>|</li>
             <!--  <li><a href="">03 Comentarios</a></li> -->
            </ul>
            <div class="description-post">
              <?php the_content(); ?>
            </div>
              <div class="comentarios">
            <div class="title"><p><strong><?php echo get_comments_number() ?> COMENTARIOS</strong></p></div>

            <?php     if ( comments_open() || get_comments_number() ) :
            comments_template();
          endif;   ?>
        </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="side-bar">
            <div class="search">
               <form action="<?php echo bloginfo('url'); ?>" id="frm_search_form" method="get" class="searchform">  
                <div class="input-search">
                  <input type="text" name="s" class="search-query" placeholder="Buscar">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </div>
                <button class="btn-general" type="submit" value="<?php echo esc_attr( FrmAppHelper::get_param( 'frm_search', '', 'get', 'sanitize_text_field' ) ); ?>"> <i class='fa fa-search' ></i></button>
              </form>
            </div>
         <!--    <div class="category search">
              <h3 class="title-sidebar">Categorías</h3>
              <ul class="list-category">
                <li>
                  <a href="">Category 1</a>
                </li>
                <li>
                  <a href="">Category 2</a>
                </li>
                <li>
                  <a href="">Category 3</a>
                </li>
                <li>
                  <a href="">Category 4</a>
                </li>
                <li>
                  <a href="">Category 5</a>
                </li>
              </ul>
            </div> -->
            <div class="post-recent search">
              <h3 class="title-sidebar">Post Recientes</h3>
                  <?php
          $args = array(
            'posts_per_page' => 6,
            'meta_key' => 'post_views',
            'orderby' => 'meta_value_num',
            'order' => 'DESC'
          );

          $popular_posts = new WP_Query( $args );
          while ( $popular_posts->have_posts() ) : $popular_posts->the_post();?>
              <div class="item-post">
                <div class="row">
                  <div class="col-lg-4 col-4">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                  </div>
                  <div class="col-lg-8 col-8">
                    <div class="detail-item-post">
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                      <p class="date"><?php the_date(); ?></p>
                    </div>
                  </div>
                </div>
              </div>
<?php endwhile;?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <?php get_footer();  ?>