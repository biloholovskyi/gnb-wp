class Cases {
  constructor() {
    this.modal = $('.case-modal');
  }

  showCases = (e) => {
    const current = $(e.currentTarget);
    const name = current.children('.name').text();
    const description = current.children('.case-hidden').children('.description').html();
    const image = current.children('img').attr('src');

    $('.case-modal .body__info .info-text .name').html(name)
    $('.case-modal .body__info .info-text .desc').html(description)
    $('.case-modal .body__info img').attr('src', image)

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