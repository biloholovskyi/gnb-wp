class AboutMap {
  constructor() {
    this.infoBlock = $('.about-map__info')
  }

  moveInfo = (e) => {
    this.infoBlock.css({
      left: e.clientX - 8,
      top: e.clientY + 30
    })
  }

  showInfo = (e) => {
    const current = $(e.currentTarget);
    const count = +current.attr('data-projects') === 1 ? `${current.attr('data-projects')} выполненый проект` : `${current.attr('data-projects')} выполненых проекта`;
    this.infoBlock.children('.name').text(current.attr('data-name'));
    this.infoBlock.children('.count').text(count);
    this.infoBlock.addClass('active')
  }

  hiddenInfo = () => {
    this.infoBlock.removeClass('active')
  }
}

export default AboutMap;