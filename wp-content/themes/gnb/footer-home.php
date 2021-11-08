<div class="main-form">
  <img class="rect-img" alt="rect"
       src="<?php echo get_template_directory_uri(); ?>/media/icon/rect-gray.svg">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="main-form__title"><span>Остались вопросы?</span>
          <div>Оставьте заявку и мы вам перезвоним</div>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <form class="main-form__form">
          <label for="name">Ваше имя</label>
          <input id="name" name="name" type="text">
          <label for="phone">Ваше имя</label>
          <input id="phone" name="phone" type="text">
          <label for="name">Ваше имя</label>
          <textarea id="desc" name="desc"></textarea>
          <div class="main-form__submit-block">
            <button class="main-button main-button--color" type="submit">Отправить</button>
            <div class="form-desc">Нажимая на кнопку “Отправить”, вы даете согласие на обработку своих персональных
              данных
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="footer__top">
          <div class="footer__nav navigations">
            <ul>
              <li><a href="/services.pug">Услуги</a></li>
              <li class="active"><a href="/about.html">О компании</a></li>
              <li><a href="/cases.html">Наши работы</a></li>
              <li><a href="/tools.html">Спецтехника</a></li>
              <li><a href="/contacts.html">Контакты</a></li>
            </ul>
          </div>
          <div class="footer__socials">
            <a class="social" href="#">
              <div class="social__icon"
                   style="<?php echo 'mask: url(' . get_template_directory_uri() . '/media/icon/facebook.svg) no-repeat center; -webkit-mask: url(' . get_template_directory_uri() . '/media/icon/facebook.svg) no-repeat center;-webkit-mask-size: contain;mask-size: contain' ?>"></div>
            </a>
            <a class="social" href="#">
              <div class="social__icon"
                   style="<?php echo 'mask: url(' . get_template_directory_uri() . '/media/icon/telegram.svg) no-repeat center; -webkit-mask: url(' . get_template_directory_uri() . '/media/icon/telegram.svg) no-repeat center;-webkit-mask-size: contain;mask-size: contain' ?>"></div>
            </a>
            <a class="social" href="#">
              <div class="social__icon"
                   style="<?php echo 'mask: url(' . get_template_directory_uri() . '/media/icon/viber.svg) no-repeat center; -webkit-mask: url(' . get_template_directory_uri() . '/media/icon/viber.svg) no-repeat center;-webkit-mask-size: contain;mask-size: contain' ?>"></div>
            </a>
          </div>
        </div>
        <div class="footer__bottom">
          <div class="footer__coop">2021 © ООО "Управление механизацией №1". Все права защищены</div>
          <a class="footer__political" href="#" target="_blank">Политика конфиденциальности</a>
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