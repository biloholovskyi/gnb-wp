class Header {
  scrollHeader = (that) => {
    const scrollPoint = typeof that === 'number' ? that : that.scrollTop();
    const headerLogo = $('.header__logo .logo__img')
    const link = headerLogo.attr('data-link');

    const headerBlock = $('.header');
    if(scrollPoint > 300) {
      if($(window).width() > 575) {
        headerBlock.addClass('header--shadow');
      } else {
        if($('tools__nav').length === '0') {
          headerBlock.addClass('header--shadow');
        }
      }

      if(headerBlock.hasClass('main-header')) {
        headerBlock.addClass('header--content');
        headerLogo.attr('src', `${link}/media/icon/logo-color.svg`);
        $('.header__origin-button').addClass('main-button--hidden');
        $('.header__scroll-button').removeClass('main-button--hidden');
      }
    } else {
      headerBlock.removeClass('header--shadow')

      if(headerBlock.hasClass('main-header')) {
        headerBlock.removeClass('header--content');
        headerLogo.attr('src', `${link}/media/icon/logo.svg`);
        $('.header__origin-button').removeClass('main-button--hidden');
        $('.header__scroll-button').addClass('main-button--hidden');
      }
    }
  }

  scrollToForm = () => {
    // if click in button on mobile menu
    if($(window).width() < 992) {
      this.toggleMobileMenu($(this));
    }

    const top = $('.main-form').offset().top - 150;
    $('body, html').animate({scrollTop: top}, 1000);
  }

  toggleMobileMenu = () => {
    const headerNav = $('.header .navigations');
    headerNav.toggleClass('active');

    if(headerNav.hasClass('active')) {
      $('.header__humb img').attr('src', 'http://gnb16.com/wp-content/themes/gnb/media/icon/close.svg')
        .addClass('active');
      $('body, html').addClass('no-scroll')
    } else {
      $('.header__humb img').attr('src', 'http://gnb16.com/wp-content/themes/gnb/media/icon/humb.svg')
        .removeClass('active')
      $('body, html').removeClass('no-scroll')
    }
  }
}

export default Header;