class Tools {
  constructor() {
    this.modal = $('.case-modal');
  }

  show = (e) => {
    const current = $(e.currentTarget);
    let name = current
      .children('.info')
      .children('.info__name').text();
    const description = current.children('.tools-hidden').children('.description').html();
    let image = current.children('.image')
      .css('background-image')
      .split('url("')[1]
      .split('"')[0];

    console.log(current.children('.image').css('background-image'));
    $('.case-modal .body__info .info-text .name').html(name)
    $('.case-modal .body__info .info-text .desc').html(description)
    $('.case-modal .body__info img').attr('src', image)

    this.modal.addClass('active');

    // deactivate scroll
    $('body, html').addClass('no-scroll')
  }

  switch = (e, that) => {
    e.preventDefault();

    const categorySlug = that.attr('href').split('#')[1];
    $('.tools__nav ul li.active').removeClass('active');
    that.parent('li').addClass('active');

    if(categorySlug === 'all') {
      $('.tools__item').addClass('visible');
    } else {
      $('.tools__item').removeClass('visible');
      $('.' + categorySlug).addClass('visible');
    }
  }
}

export default Tools;