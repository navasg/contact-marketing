<?php
get_header();
?>
<section class="banner-post"
    style="background-image: url('https://images.unsplash.com/photo-1504384764586-bb4cdc1707b0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80')">
    <div class="mask-banner-post">
      <div class="text-banner">
        <h2>Busqueda para : <?php echo get_search_query(); ?></h2>
      </div>
    </div>
  </section>
<section class="shop-section space-s">
        <div class="container">
            <div class="row">
             

                 <?php if (have_posts()): while ( have_posts() ) : the_post(); global $product; ?>
                   
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
                    
                
                  <?php endwhile;    else:

    ?>
        <div>
      <h2>Post <strong>"<?php echo get_search_query(); ?>"</strong> no disponible </h2>
      <a href="<?php echo bloginfo('url');?>"><p>Volver a la pagina principal</p></a>
    </div>

  <?php endif; ?>
            </div>

        </div>
    </section>


<?php
get_footer();
?>