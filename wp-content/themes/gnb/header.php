<!DOCTYPE html>
<html lang="ru-RU">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-4-grid@3.4.0/css/grid.min.css">
  <?php wp_head(); ?>
  <title><?php the_title(); ?></title>
</head>
<body>
<div class="preloader"><img class="preloader__img" alt="hidden" src="https://wallpapercave.com/wp/wp6470963.jpg">
  <svg width="125" height="144" viewBox="0 0 125 144" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path class="preloader__loader" d="M1 36.5774L62.3538 1.1547L123.708 36.5774V107.423L62.3538 142.845L1 107.423V36.5774Z" stroke="#F3BA00" stroke-opacity="1" stroke-width="2"></path>
    <path class="preloader__fon" d="M1 36.5774L62.3538 1.1547L123.708 36.5774V107.423L62.3538 142.845L1 107.423V36.5774Z" stroke="white" stroke-opacity="0.2" stroke-width="2"></path>
    <path d="M8.854 41.2895L62.354 10.5765L115.854 41.2895V102.711L62.354 133.423L8.854 102.711V41.2895Z" stroke="white" stroke-opacity="0.2"></path>
    <path d="M65.9536 85.5664C64.6282 85.5664 63.5536 84.4919 63.5536 83.1664C63.5536 81.8409 64.6282 80.7664 65.9536 80.7664C67.2791 80.7664 68.3536 81.8409 68.3536 83.1664C68.3536 84.4919 67.2791 85.5664 65.9536 85.5664Z" fill="white"></path>
    <path d="M38.3535 85.5664C37.028 85.5664 35.9535 84.4919 35.9535 83.1664C35.9535 81.8409 37.028 80.7664 38.3535 80.7664C39.6789 80.7664 40.7534 81.8409 40.7534 83.1664C40.7534 84.4919 39.6789 85.5664 38.3535 85.5664Z" fill="white"></path>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M49.016 54L46.5601 62.0329L39.6747 59.9279L40.7273 56.4852L36.137 55.0818L35.0354 58.685L24.7074 55.5274L22.6513 62.2523C22.07 64.1536 23.1401 66.1662 25.0415 66.7475L31.4017 68.692L31.8917 69.9661H20.3537V65.1654H17.9537V72.3654H20.3535V75.9661H15.5535V79.5659H14.3535V81.9659H32.4738C32.395 82.3538 32.3536 82.7554 32.3536 83.1666C32.3536 86.4803 35.0399 89.1666 38.3536 89.1666H65.9535C69.2672 89.1666 71.9535 86.4803 71.9535 83.1666C71.9535 82.3883 71.8053 81.6446 71.5356 80.9622L90.6728 86.813L92.3538 89.1664H110.354L107.954 86.7667V80.7664H105.554V68.7665H103.154V80.7664H100.753V68.7665H98.3533V69.0839L88.3132 66.0144L86.9532 56.7665H71.9533V61.0127L49.016 54ZM74.3533 61.7464V59.1665H84.8804L85.7732 65.2379L74.3533 61.7464ZM59.1202 77.1664H34.7534V70.7208L34.3157 69.583L59.1202 77.1664ZM98.3533 73.2165V80.7664H96.0451L98.3533 73.2165ZM63.2326 60.8561L71.2656 63.312L69.5113 69.0498L61.4784 66.5939L63.2326 60.8561ZM81.5936 66.4696L73.5607 64.0137L71.8065 69.7515L79.8394 72.2074L81.5936 66.4696ZM60.9375 60.1544L59.1833 65.8922L52.2979 63.7872L54.0521 58.0493L60.9375 60.1544ZM88.4132 81.1029L89.4658 77.6602L38.973 62.223L37.9205 65.6657L88.4132 81.1029ZM91.9217 69.6272L83.8888 67.1713L82.1345 72.9091L90.1675 75.365L91.9217 69.6272ZM65.9535 79.5666H38.3536C36.3654 79.5666 34.7536 81.1784 34.7536 83.1666C34.7536 85.1548 36.3654 86.7666 38.3536 86.7666H65.9535C67.9418 86.7666 69.5535 85.1548 69.5535 83.1666C69.5535 81.1784 67.9418 79.5666 65.9535 79.5666Z" fill="white"></path>
  </svg>
  <div class="preloader__text">Управление механизацией №1</div>
</div>
<header class="header main-header">
  <div class="header__left">
    <a class="header__logo" href="/">
      <img src="" alt="GBN" class="logo__img" data-link="<?php echo get_template_directory_uri(); ?>">
      <div class="logo__text">Управление механизацией №1</div>
    </a>
    <nav class="header__nav navigations">
      <ul>
        <li class="active"><a href="/services">Услуги</a></li>
        <li><a href="/about">О компании</a></li>
        <li><a href="/cases">Наши работы</a></li>
        <li><a href="/tools">Спецтехника</a></li>
        <li><a href="/contacts">Контакты</a></li>
      </ul>
      <div class="main-button main-button--color header__navbutton btn-to-form">Связаться с нами</div>
    </nav>
  </div>
  <div class="header__right"><a class="header__number" href="tel:88001111111">8 800 111 11 11</a>
    <div class="main-button header__origin-button btn-to-form">Связаться с нами
      <div class="main-button__right-border"></div>
    </div>
    <!-- скрытая кнопка для плавной замены при скролле-->
    <div class="main-button main-button--color main-button--hidden header__scroll-button btn-to-form">Связаться с нами</div>
  </div>
  <div class="header__humb"><img src="<?php echo get_template_directory_uri(); ?>/media/icon/humb.svg" alt="menu"></div>
</header>