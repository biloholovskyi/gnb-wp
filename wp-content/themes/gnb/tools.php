<?php
/*
Template Name: Tools page
*/
?>

<?php get_header('content'); ?>

  <div class="case-modal">
    <div class="body">
      <div class="close"></div>
      <div class="body__info">
        <img src="" alt="image">
        <div class="info-text">
          <div class="name">Название обьекта</div>
          <div class="desc"></div>
        </div>
      </div>
      <div class="body__form">
        <div class="title-form">Закажите похожий проект прямо сейчас</div>
        <form>
          <div class="label">Ваше имя</div>
          <input type="text" name="name" placeholder="Ваше имя">
          <div class="label">Номер телефона</div>
          <input type="text" name="phone" placeholder="Номер телефона">
          <button class="main-button main-button--color main-button--dark main-button--small" type="submit">Отправить
          </button>
        </form>
        <div class="form-desc">Нажимая на кнопку “Отправить”, вы даете согласие на обработку своих персональных данных
        </div>
      </div>
    </div>
  </div>

  <div class="tools">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="tools__title decor-title">Спецтехника</h1>
        </div>
        <div class="col-12 col-lg-3">
          <div class="tools__nav">
            <ul>
              <li class="active"><a href="#all">Вся спецтехника</a>

                <?php
                $args = array(
                  'numberposts' => -1,
                  'orderby' => 'date',
                  'order' => 'ASC',
                  'post_type' => 'tools-category',
                  'suppress_filters' => true,
                );

                $posts = get_posts($args);

                foreach ($posts as $post) {
                setup_postdata($post);
                ?>
              <li><a href="#<?php echo $post->ID; ?>"><?php the_title(); ?></a></li>
              <?php
              }
              wp_reset_postdata(); // сброс
              ?>
            </ul>
          </div>
        </div>
        <div class="col-12 col-lg-9">
          <div class="tools__list">
            <?php
            $args = array(
              'numberposts' => -1,
              'orderby' => 'date',
              'order' => 'ASC',
              'post_type' => 'tools',
              'suppress_filters' => true,
            );

            $posts = get_posts($args);

            foreach ($posts as $post) {
              setup_postdata($post);
              $category = get_field('category');
              $chars = CFS()->get('chars');
              ?>

              <div class="tools__item visible <?php echo $category->ID; ?>">
                <div class="tools-hidden">
                  <div class="description"><?php the_content(); ?></div>
                </div>
                <div class="image"
                     style="<?php echo 'background-image: url(' . wp_get_attachment_url(get_post_thumbnail_id($post->ID)) . ')'; ?>">
                  <img class="image__rect" src="<?php echo get_template_directory_uri(); ?>/media/icon/rect-img.svg"
                       alt="rect"></div>
                <div class="info">
                  <div class="info__name"><?php the_title(); ?></div>


                  <?php
                  foreach ($chars as $item) {
                    ?>
                    <div class="info__line">
                      <span class="line__name"><?php echo $item['name']; ?></span>

                      <span class="line__value"><?php echo $item['value']; ?></span>
                    </div>
                    <?php
                  }
                  ?>

                  <div class="info__price"><?php the_field('price'); ?></div>
                  <div class="info__more"><span>Подробнее</span>
                    <div class="icon"></div>
                  </div>
                </div>
              </div>

              <?php
            }
            wp_reset_postdata(); // сброс
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>


<?php get_footer(); ?>