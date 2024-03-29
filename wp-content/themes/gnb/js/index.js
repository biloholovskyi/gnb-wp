import 'normalize.css';

import Cases from "./cases";
import Header from "./header";
import AboutMap from "./about-map";
import Tools from "./tools";
import Calc from "./calc";
import StageTabs from './stage-tabs'
import Preloader from "./preloader";
import MainBlock from "./main-block";

const mainBlock = new MainBlock();

$(document).ready((e) => {
  const cases = new Cases();
  const header = new Header();
  const aboutMap = new AboutMap();
  const tools = new Tools();
  const calc = new Calc();
  const stageTabs = new StageTabs();
  const preloader = new Preloader();

  const calcBlock = $('.calc__form');

  (function () {
    header.scrollHeader(pageYOffset)
    calcBlock.length > 0 && calc.calculate();
    preloader.setProgress(10);
  }())


  // sliders
  // cases-slider
  const casesSlider = $('.cases-slider__body');
  casesSlider.length > 0 && casesSlider.owlCarousel({
    items: 3,
    margin: 24,
    dots: false,
    nav: true,
    navText: '',
    responsive: {
      0: {
        items: 2,
        dots: true
      },
      767: {
        items: 2,
        dots: false
      },
      991: {
        items: 3,
        dots: false
      }
    }
  })

  // reviews slider
  const reviewSlider = $('.reviews__body');
  reviewSlider.length > 0 && reviewSlider.owlCarousel({
    items: 3,
    margin: 24,
    dots: false,
    nav: true,
    navText: '',
    responsive: {
      0: {
        items: 1,
        dots: true
      },
      767: {
        items: 2,
        dots: false
      },
      991: {
        items: 3,
        dots: false
      }
    }
  })

  // show mobile menu
  $('.header__humb').on('click', function() {header.toggleMobileMenu($(this))})

  // scroll to main form
  $('.btn-to-form').on('click', () => {header.scrollToForm()});

  // show case
  $('.cases__item, .cases-slider__item').on('click', (e) => cases.showCases(e))
  // close case or tools
  $('.case-modal .close').on('click', cases.closeCases)

  // close case modal after click on body
  $(document).on('click', function (e) {
    const caseModal = $('.case-modal .body, .cases__item, .cases-slider__item, .tools__item, .header__humb');
    if (!caseModal.is(e.target) && caseModal.has(e.target).length === 0) {
      cases.closeCases();
    }
  })

  // show tools
  $('.tools__item').on('click', (e) => {tools.show(e)})
  // switch category tools
  $('.tools__nav ul li a').on('click', function (e) {tools.switch(e, $(this))})

  // Switch header after scroll
  $(window).on('scroll', function () {header.scrollHeader($(this))})

  // about map
  const mapItem = $('.about-map__map path.active');
  mapItem.on('mousemove', (e) => aboutMap.moveInfo(e))
  mapItem.on('mouseenter', (e) => aboutMap.showInfo(e))
  mapItem.on('mouseleave', (e) => aboutMap.hiddenInfo(e))

  // calculating
  $('.calc__form select').on('change', function () {calc.calculate()})
  $('.calc__form input').on('input', function () {calc.calculate()})
  $('#hitsaus .button').on('click', function () {calc.switchButton($(this))})
  $('#calc-focus').on('click', function () {calc.onFocus()})

  // only number
  $('input[name="long"]').keyup(function(e)
  {
    if (/\D/g.test(this.value))
    {
      this.value = this.value.replace(/\D/g, '');
    }
  });

  // stage tab
  $('.stage-work__tabs .tab-nav__item').on('click', (e) =>  {stageTabs.switchTab(e)})

  // send form
  $('#main-form').on('submit', function (e) {
    e.preventDefault();

    const form = $(this);

    $.ajax({
      type: "POST",
      url: 'http://gnb16.com/wp-content/themes/gnb/message.php',
      data: form.serialize(),
      success: function(data)
      {
        $('.form-alert').css('display', 'flex');
        $('input').val('');
        $('textarea').val('');

        setTimeout(() => {
          $('.form-alert').css('display', 'none');
        }, 1500)
      }
    });

  })
});

$(window).resize(() => {
  mainBlock.setHeight();
});