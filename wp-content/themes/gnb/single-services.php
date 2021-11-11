<?php get_header(); ?>

<?php $banner = get_field('banner'); ?>

  <div class="main-block" style="<?php echo 'background-image: url(' . $banner . ');'; ?>">
    <img class="decor <?php echo get_field('calc') ? '' : 'decor--no-calc'; ?>"
         src="<?php echo get_template_directory_uri(); ?>/media/icon/<?php echo get_field('calc') ? 'rect2.svg' : 'rect-gray.svg'; ?>"
         alt="rect">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6">
          <h1 class="main-block__title"><?php the_title(); ?></h1>
          <div class="main-block__desc"><?php the_field('desc') ?></div>
          <div class="main-button main-button--color main-block__button">Заказать услугу</div>
        </div>
      </div>
    </div>
  </div>

<?php if (get_field('calc')) {
  ?>
  <div class="calc">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <div class="calc__title decor-title">Калькулятор</div>
          <div class="calc__desc">Расчитайте стоимость работ с помошью калькулятора</div>
        </div>
        <div class="col-12 col-md-6">
          <form class="calc__form">
            <div class="double">
              <div class="input__item input__item--select">
                <label for="material">Материал</label>
                <select id="material" name="material">
                  <option value="steel">Сталь</option>
                  <option value="plastic">Пластик</option>
                  <option value="wooden">Дерево</option>
                </select>
              </div>
              <div class="input__item input__item--placeholder">
                <label for="range">Диаметр труб</label>
                <div class="border-wrapper">
                  <input id="range" type="text" name="range" size="1" onkeydown="size=value.length+1||1"
                         onkeyup="onkeydown()">
                  <div class="placeholder">ММ</div>
                  <div class="border"></div>
                </div>
              </div>
            </div>
            <div class="double">
              <div class="input__item input__item--placeholder">
                <label for="long">Протяженность труб</label>
                <div class="border-wrapper">
                  <input id="long" type="text" name="long" size="1" onkeydown="size=value.length+1||1"
                         onkeyup="onkeydown()">
                  <div class="placeholder">ПМ</div>
                  <div class="border"></div>
                </div>
              </div>
              <div class="buttons">
                <div class="buttons__label">Требуеться сварка?</div>
                <div class="buttons__wrapper" id="hitsaus">
                  <div class="button button-yeas active">Да</div>
                  <div class="button button-no">Нет</div>
                </div>
              </div>
            </div>
          </form>
          <div class="calc__result">
            <div class="label">Итого</div>
            <div class="result"><span class="result__value">58 588 588</span><span class="result__slug"> руб</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
} ?>

  <div class="table-price <?php echo get_field('calc') ? '' : 'table-price--no-calc'; ?>">
    <img class="table-price__top-rect" src="<?php echo get_template_directory_uri(); ?>/media/icon/rect3.svg"
         alt="rect">
    <img class="table-price__bottom-rect" src="<?php echo get_template_directory_uri(); ?>/media/icon/rect3.svg"
         alt="rect">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="table-price__title"><?php echo CFS()->get('table-price_title'); ?></div>
          <div class="table-price__desc"><?php echo CFS()->get('table-price_desc'); ?></div>
          <table class="table-price__table">
            <thead>
            <tr>
              <td>
                <div class="td-body">
                  <div class="td-body__name">Диаметр трубы</div>
                  <div class="td-body__desc"></div>
                </div>
              </td>
              <td>
                <div class="td-body">
                  <div class="td-body__name">Объем работ</div>
                  <div class="td-body__desc">до 250 м.п.</div>
                </div>
              </td>
              <td>
                <div class="td-body td-body--end">
                  <div class="td-body__name"></div>
                  <div class="td-body__desc">свыше 250 м.п.</div>
                </div>
              </td>
            </tr>
            </thead>
            <tbody>
            <?php
            $prices = CFS()->get('prices');
            foreach ($prices as $item) {
              ?>
              <tr>
                <td>
                  <div class="td-body"><?php echo $item['range']; ?></div>
                </td>
                <td>
                  <div class="td-body"><?php echo $item['hardwork_small']; ?></div>
                </td>
                <td>
                  <div class="td-body"><?php echo $item['hardwork_big']; ?></div>
                </td>
              </tr>
              <?php
            }
            ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="about-service">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6">
          <div class="about-service__title decor-title"><?php echo CFS()->get('about-service_title'); ?></div>
          <div class="about-service__desc"><?php echo CFS()->get('about-service_desc'); ?></div>
          <?php
          $list = CFS()->get('about-service_list');
          foreach ($list as $item) {
            ?>
            <div class="about-service__list-item"><?php echo $item['text']; ?></div>
            <?php
          }
          ?>
        </div>
        <div class="col-6 col-lg-3">
          <img class="about-service__image about-service__image--first" alt="img"
                                         src="<?php echo CFS()->get('about-service_photo-1'); ?>"></div>
        <div class="col-6 col-lg-3">
          <img class="about-service__image" alt="img" src="<?php echo CFS()->get('about-service-photo-2'); ?>">
        </div>
      </div>
    </div>
  </div>

<?php $banner_block = get_field('block-banner_banner'); ?>
  <div class="order-now" style="<?php echo 'background-image: url(' . $banner_block . ');'; ?>">
    <img class="order-now__rect-top" alt="rect"
         src="<?php echo get_template_directory_uri(); ?>/media/icon/rect3.svg"><img
      class="order-now__rect-bottom" alt="rect" src="<?php echo get_template_directory_uri(); ?>/media/icon/rect3.svg">
    <div class="container">
      <div class="row">
        <div class="col-8 col-sm-7 col-md-10 col-lg-6">
          <div class="order-now__title"><?php the_field('block-banner_title'); ?></div>
          <div class="order-now__button main-button main-button--color">Заказать услугу</div>
        </div>
      </div>
    </div>
  </div>
  <div class="advantage">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6">
          <div class="advantage__left">
            <div class="advantage__title decor-title">Преимущества</div>
            <?php
            $adv_list = CFS()->get('advantages');
            foreach ($adv_list as $item) {
              ?>
              <div class="advantage__list-item"><?php echo $item['adv_item']; ?></div>
              <?php
            }
            ?>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="advantage__right">
            <div class="advantage__title">особенности</div>

            <?php
            $adv_list = CFS()->get('adv_next');
            foreach ($adv_list as $item) {
              ?>
              <div class="advantage__list-item"><?php echo $item['adv_next_item']; ?></div>
              <?php
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="stage-work">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="stage-work__title">Этапность работ</div>
          <div class="stage-work__tabs">
            <?php  $stage_list = CFS()->get('stage_list');?>
            <div class="tab-nav">
              <?php
              $stage_count = 0;
              foreach ($stage_list as $item) {
                $stage_count++;
                ?>
                <div class="tab-nav__item <?php echo $stage_count === 1 ? 'active' : ''; ?>" data-link="<?php echo $stage_count; ?>">
                  <span class="number">0<?php echo $stage_count; ?></span><span class="name"><?php echo $item['name']; ?></span>
                </div>
                <?php
              }
              ?>
            </div>
            <?php
            $stage_count_body = 0;
            foreach ($stage_list as $item) {
              $stage_count_body++;
              ?>
              <div class="tab-body <?php echo $stage_count_body === 1 ? 'active' : ''; ?>" id="<?php echo $stage_count_body; ?>">
                <img class="tab-body__image" src="<?php echo $item['photo']; ?>" alt="image">
                <div class="tab-body__desc"><?php echo $item['desc_stage']; ?></div>
              </div>
              <?php
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="cases-slider">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="cases-slider__title">Выполненые проекты</div>
          <div class="cases-slider__body owl-carousel owl-theme">
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

              <div class="cases-slider__item">
                <img alt="case" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>">
                <div class="name"><?php the_title(); ?></div>
                <div class="date"><?php the_field('date'); ?></div>
                <div class="case-hidden">
                  <div class="description"><?php the_content(); ?></div>
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

<?php get_footer(); ?>