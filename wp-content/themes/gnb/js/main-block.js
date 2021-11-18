class MainBlock {

  scrollEffect = () => {

  }

  setHeight = () => {
    const mainBlock = $('.main-block');
    if(mainBlock.length > 0) {
      const height = $(window).height() + $('.main-block .decor').height();
      mainBlock.css('min-height', height + 'px');
    }
  }

}

export default MainBlock;