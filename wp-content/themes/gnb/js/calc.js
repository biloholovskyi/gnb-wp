class Calc {
  constructor() {
    this.material = [
      {
        name: 'steel',
        kef: [
          {k: 110, result: 3105},
          {k: 160, result: 3622.5},
          {k: 225, result: 4600},
          {k: 315, result: 5865},
          {k: 400, result: 9430},
          {k: 500, result: 12075},
          {k: 630, result: 14720},
          {k: 710, result: 21275},
          {k: 800, result: 25300},
        ]
      },
      {
        name: 'plastic',
        kef: [
          {k: 110, result: 2700},
          {k: 160, result: 3150},
          {k: 225, result: 4000},
          {k: 315, result: 5100},
          {k: 400, result: 8200},
          {k: 500, result: 10500},
          {k: 630, result: 12800},
          {k: 710, result: 18500},
          {k: 800, result: 22000},
        ]
      },
    ]

    this.hitKefList = [
      {k: 110, result: 60},
      {k: 160, result: 85},
      {k: 225, result: 138},
      {k: 315, result: 204},
      {k: 400, result: 289},
      {k: 500, result: 375},
      {k: 630, result: 468},
      {k: 710, result: 917},
      {k: 800, result: 958},
    ]

    this.materialInput = $('.calc__form #material');
    this.rangeInput = $('.calc__form #range');
    this.longInput = $('.calc__form #long');
    this.hitsaus = $('#hitsaus');

    this.result = $('.result__value');
  }

  switchButton = (that) => {
    this.hitsaus.children('.button').removeClass('active');

    that.addClass('active');

    this.calculate();
  }

  onFocus = () => {
    $('#long').focus();
  }

  calculate = () => {
    const kef = this.material.find(m => m.name === this.materialInput.val())
    const hitKef = this.hitsaus.children('.active').hasClass('button-yeas') ? +this.hitKefList.find(k => +k.k === +this.rangeInput.val()).result : 0;
    const result = kef.kef.find(k => +k.k === +this.rangeInput.val()).result * +this.rangeInput.val() * +this.longInput.val() + hitKef;
    let string = '';
    let count = 0;
    result.toString().split('').reverse().forEach(item => {
      count++;
      if(count === 4) {
        count = 1;
        string = item + ' ' + string;
      } else {
        string = item + string;
      }
    })

    this.result.text(string);
  }
}

export default Calc;