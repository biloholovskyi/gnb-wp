<?php
/*
Template Name: Cases page
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
      <div class="form-desc">Нажимая на кнопку “Отправить”, вы даете согласие на обработку персональных данных
      </div>
    </div>
  </div>
</div>

<div class="cases">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="cases__title decor-title">Кейсы</h1>
      </div>
    </div>
    <div class="row">
      <?php
      $args = array(
        'numberposts' => -1,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'cases',
        'suppress_filters' => true,
      );

      $posts = get_posts($args);

      foreach ($posts as $post) {
        setup_postdata($post);
        ?>

        <div class="col-6 col-md-12">
          <div class="cases__item bg-item">
            <div class="case-hidden">
              <div class="description"><?php the_content(); ?></div>
            </div>
            <div class="case-photo" style="<?php echo 'background-image: url(' . wp_get_attachment_url(get_post_thumbnail_id($post->ID)) . ')'; ?>"></div>
            <div class="case-text">
              <div class="name"><?php the_title(); ?></div>
              <div class="desc"><?php the_excerpt(); ?></div>
              <div class="more-btn">
                <div class="text">Подробнее</div>
                <div class="arrow"></div>
              </div>
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

<?php get_footer(); ?>
