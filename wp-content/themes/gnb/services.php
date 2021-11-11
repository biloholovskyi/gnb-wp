<?php
/*
Template Name: Services page
*/
?>

<?php get_header('content'); ?>

  <div class="services">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="services__title">Услуги</div>
        </div>
      </div>
    </div>
    <div class="pallet-services">
      <div class="container">
        <div class="row">
          <?php
          $args = array(
            'numberposts' => -1,
            'orderby' => 'date',
            'order' => 'ASC',
            'post_type' => 'services',
            'suppress_filters' => true,
          );

          $posts = get_posts($args);

          $services_count = 0;

          foreach ($posts as $post) {
            setup_postdata($post);
            $services_count++;

            ?>

            <div class="<?php echo $services_count < 2 ? 'col-12' : 'col-12 col-lg-4'; ?>">
              <a class="<?php echo $services_count < 2 ? 'big-plate' : 'small-plate'; ?>"
                 href="<?php the_permalink(); ?>"
                 style="<?php echo 'background-image: url(' . wp_get_attachment_url(get_post_thumbnail_id($post->ID)) . ')'; ?>">
                <div
                  class="<?php echo $services_count < 2 ? 'big-plate__name' : 'small-plate__name'; ?>"><?php the_title(); ?></div>
                <div class="pallet-services__more"><span>Подробнее</span>
                  <div class="icon"></div>
                </div>
              </a>
            </div>

            <?php
          }
          wp_reset_postdata(); // сброс
          ?>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>