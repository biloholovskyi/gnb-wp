<?php
/*
Template Name: Home page
*/
?>

<?php get_header(); ?>

<?php $banner = get_field('banner'); ?>

  <div class="main-block" style="<?php echo 'background-image: url(' . $banner . ');'; ?>">
    <img class="decor" src="<?php echo get_template_directory_uri(); ?>/media/icon/rect2.svg" alt="rect">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-8">
          <h1 class="main-block__title"><?php the_field('title'); ?></h1>
          <div class="main-block__desc"><?php the_field('subtitle') ?></div>
          <div class="main-button main-button--color main-block__button">Заказать услугу</div>
        </div>
      </div>
    </div>
  </div>
  <div class="services services--index">
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

            <div class="<?php echo $services_count < 2 ? 'col-12' :  'col-12 col-lg-4'; ?>">
              <a class="<?php echo $services_count < 2 ? 'big-plate' :  'small-plate'; ?>" href="<?php the_permalink(); ?>"
                 style="<?php echo 'background-image: url(' . wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) . ')'; ?>">
                <div class="<?php echo $services_count < 2 ? 'big-plate__name' :  'small-plate__name'; ?>"><?php the_title(); ?></div>
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
  <div class="cases-slider cases-slider--index"><img class="cases-slider__rect" alt="rect"
                                                     src="../media/icon/rect3.svg">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="cases-slider__title">Выполненые проекты</div>
          <div class="cases-slider__body owl-carousel owl-theme">
            <div class="cases-slider__item"><img alt="case" src="../media/image/cases/2.jpg">
              <div class="name">Название обьекта</div>
              <div class="date">ГНБ, 2018</div>
            </div>
            <div class="cases-slider__item"><img alt="case" src="../media/image/cases/3.jpg">
              <div class="name">Название обьекта</div>
              <div class="date">ГНБ, 2018</div>
            </div>
            <div class="cases-slider__item"><img alt="case" src="../media/image/cases/4.jpg">
              <div class="name">Название обьекта</div>
              <div class="date">ГНБ, 2018</div>
            </div>
            <div class="cases-slider__item"><img alt="case" src="../media/image/cases/1.jpg">
              <div class="name">Название обьекта</div>
              <div class="date">ГНБ, 2018</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="case-modal">
    <div class="body">
      <div class="close"></div>
      <div class="body__info"><img src="../media/image/cases/1.jpg" alt="image">
        <div class="info-text">
          <div class="name">Название обьекта</div>
          <div class="desc">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Arcu dui vivamus arcu felis bibendum ut tristique. Sed augue lacus viverra vitae. Ut
              pharetra sit amet aliquam id. Nisl nisi scelerisque eu ultrices vitae auctor eu. Sit amet tellus cras
              adipiscing enim eu.</p>
            <p>Tincidunt augue interdum velit euismod in pellentesque massa. Posuere sollicitudin aliquam ultrices
              sagittis orci a scelerisque. Pharetra sit amet aliquam id diam maecenas ultricies mi eget. Eleifend donec
              pretium vulputate sapien nec sagittis aliquam malesuada. Leo vel fringilla est ullamcorper. Nisi
              scelerisque eu ultrices vitae auctor eu.</p>
          </div>
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

<?php get_footer('home'); ?>