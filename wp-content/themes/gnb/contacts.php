<?php
/*
Template Name: Contacts page
*/
?>

<?php get_header('content'); ?>

  <script src="https://api-maps.yandex.ru/2.1/?apikey=<ваш API-ключ>&lang=ru_RU" type="text/javascript"></script>

  <div class="contacts">
    <img class="contacts__rect" alt="rect" src="<?php echo get_template_directory_uri(); ?>/media/icon/rect-dark.svg">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-3">
          <div class="contacts__title decor-title">Контакты</div>
          <div class="contacts__item">
            <div class="name">Телефон</div><a class="contact" href="tel:<?php echo preg_replace('![^0-9]+!', '', get_field('phone')) ?>"><?php the_field('phone'); ?></a>
          </div>
          <div class="contacts__item">
            <div class="name">E-mail</div><a class="contact" href="mailto:<?php the_field('e-mail'); ?>"><?php the_field('e-mail'); ?></a>
          </div>
          <div class="contacts__item">
            <div class="name">Адрес:</div>
            <div class="contact"><?php the_field('address'); ?></div>
          </div>
        </div>
      </div>
    </div>
    <div class="contacts__map" id="map">
      <img class="contacts__rect-map" alt="rect" src="<?php echo get_template_directory_uri(); ?>/media/icon/rect-map.svg">
      <img class="contacts__rect-map-responsive" alt="rect" src="<?php echo get_template_directory_uri(); ?>/media/icon/rect3.svg">
    </div>
  </div>

  <style>
    [class*="ymaps-2"][class*="-ground-pane"] {
      filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale");
      /* Firefox 3.5+ */
      -webkit-filter: brightness(100%) grayscale(100%) invert(80%);
      /* Chrome 19+ & Safari 6+ */
    }
  </style>

<?php get_footer('contacts'); ?>

<script>
  ymaps.ready(init);
  function init(){
    let myMap = new ymaps.Map("map", {
      center: [<?php the_field('map'); ?>],
      zoom: 12
    });

    myMap.behaviors.disable(['drag', 'scrollZoom', 'dblClickZoom']);

    myMap.controls
      .remove('trafficControl')
      .remove('fullscreenControl')
      .remove('rulerControl')
      .remove('typeSelector')
      .remove('searchControl')
      .remove('zoomControl')
      .remove('geolocationControl');

    let myPin = new ymaps.Placemark([<?php the_field('map'); ?>],
      {
      },
      {
        iconLayout: 'default#image',
        iconImageHref: '../wp-content/themes/gnb/media/icon/pin.png',
        iconImageSize: [46, 36],
        iconImageOffset: [0, 0]
      });

    myMap.geoObjects.add(myPin);
  }
</script>
