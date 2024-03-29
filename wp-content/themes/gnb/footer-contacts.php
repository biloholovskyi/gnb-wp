<div class="main-form main-form--contacts">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="main-form__title"><span>Остались вопросы?</span>
          <div>Оставьте заявку и мы вам перезвоним</div>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <form class="main-form__form" id="main-form">
          <label for="name">Ваше имя</label>
          <input id="name" name="name" type="text">
          <label for="phone">Номер телефона</label>
          <input id="phone" name="phone" type="text">
          <label for="name">Коментарий</label>
          <textarea id="desc" name="desc"></textarea>
          <div class="main-form__submit-block">
            <button class="main-button main-button--color" type="submit">Отправить</button>
            <div class="form-desc">Нажимая на кнопку “Отправить”, вы даете согласие на обработку персональных
              данных
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="form-alert">
  <div class="form-alert__body">
    <p>Спасибо!</p>
    <p>Сообщение отправлено</p>
  </div>
</div>
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="footer__top">
          <div class="footer__nav navigations">
            <?php
            wp_nav_menu([
              'theme_location' => 'footer',
              'menu' => '',
              'container' => '',
              'container_class' => '',
              'container_id' => '',
              'menu_class' => '',
              'menu_id' => '',
              'echo' => true,
              'fallback_cb' => 'wp_page_menu',
              'before' => '',
              'after' => '',
              'link_before' => '',
              'link_after' => '',
              'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth' => 0,
              'walker' => '',
            ]);
            ?>
          </div>
          <div class="footer__socials">
            <?php
            $args = array(
              'numberposts' => 1,
              'orderby' => 'date',
              'order' => 'DESC',
              'post_type' => 'main_contacts',
              'suppress_filters' => true,
            );

            $posts = get_posts($args);

            $political = '';

            foreach ($posts as $post) {
              setup_postdata($post);

              $political = CFS()->get('political');

              $socials = CFS()->get('socials');
              foreach ($socials as $item) {
                ?>
                <a class="social" target="_blank" href="<?php echo $item['link']; ?>">
                  <div class="social__icon"
                       style="<?php echo 'mask: url(' . $item['icon'] . ') no-repeat center; -webkit-mask: url(' . $item['icon'] . ') no-repeat center;-webkit-mask-size: contain;mask-size: contain' ?>"></div>
                </a>
                <?php
              }
            }
            wp_reset_postdata(); // сброс
            ?>
          </div>
        </div>
        <div class="footer__bottom">
          <div class="footer__coop">2021 © ООО "Управление механизации №1". Все права защищены</div>
          <a class="footer__political" href="<?php echo $political; ?>" target="_blank">Политика конфиденциальности</a>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
</body>
</html>