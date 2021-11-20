class Cases {
  constructor() {
    this.modal = $('.case-modal');
  }

  showCases = (e) => {
    const current = $(e.currentTarget);
    let name = current.children('.name').text();
    const description = current.children('.case-hidden').children('.description').html();
    let image = current.children('img').attr('src');

    if(current.hasClass('bg-item')) {
      image = current
        .children('.case-photo')
        .css('background-image')
        .split('url("')[1]
        .split('"')[0];

      name = current
        .children('.case-text')
        .children('.name')
        .text();
    }

    $('.case-modal .body__info .info-text .name').html(name)
    $('.case-modal .body__info .info-text .desc').html(description)
    $('.case-modal .body__info img').attr('src', image)

    $('.case-modal .body__form .title-form').text('Нужна консультация? Напишите нам');

    this.modal.addClass('active');

    // deactivate scroll
    $('body, html').addClass('no-scroll')
  }

  closeCases = () => {
    this.modal.removeClass('active');

    // activate scroll
    $('body, html').removeClass('no-scroll')
  }
}

export default Cases;