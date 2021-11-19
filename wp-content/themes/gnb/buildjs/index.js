(()=>{"use strict";var n={705:n=>{n.exports=function(n){var e=[];return e.toString=function(){return this.map((function(e){var t="",o=void 0!==e[5];return e[4]&&(t+="@supports (".concat(e[4],") {")),e[2]&&(t+="@media ".concat(e[2]," {")),o&&(t+="@layer".concat(e[5].length>0?" ".concat(e[5]):""," {")),t+=n(e),o&&(t+="}"),e[2]&&(t+="}"),e[4]&&(t+="}"),t})).join("")},e.i=function(n,t,o,a,i){"string"==typeof n&&(n=[[null,n,void 0]]);var r={};if(o)for(var s=0;s<this.length;s++){var c=this[s][0];null!=c&&(r[c]=!0)}for(var l=0;l<n.length;l++){var d=[].concat(n[l]);o&&r[d[0]]||(void 0!==i&&(void 0===d[5]||(d[1]="@layer".concat(d[5].length>0?" ".concat(d[5]):""," {").concat(d[1],"}")),d[5]=i),t&&(d[2]?(d[1]="@media ".concat(d[2]," {").concat(d[1],"}"),d[2]=t):d[2]=t),a&&(d[4]?(d[1]="@supports (".concat(d[4],") {").concat(d[1],"}"),d[4]=a):d[4]="".concat(a)),e.push(d))}},e}},738:n=>{n.exports=function(n){return n[1]}},735:(n,e,t)=>{t.d(e,{Z:()=>s});var o=t(738),a=t.n(o),i=t(705),r=t.n(i)()(a());r.push([n.id,'/*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */\n\n/* Document\n   ========================================================================== */\n\n/**\n * 1. Correct the line height in all browsers.\n * 2. Prevent adjustments of font size after orientation changes in iOS.\n */\n\nhtml {\n  line-height: 1.15; /* 1 */\n  -webkit-text-size-adjust: 100%; /* 2 */\n}\n\n/* Sections\n   ========================================================================== */\n\n/**\n * Remove the margin in all browsers.\n */\n\nbody {\n  margin: 0;\n}\n\n/**\n * Render the `main` element consistently in IE.\n */\n\nmain {\n  display: block;\n}\n\n/**\n * Correct the font size and margin on `h1` elements within `section` and\n * `article` contexts in Chrome, Firefox, and Safari.\n */\n\nh1 {\n  font-size: 2em;\n  margin: 0.67em 0;\n}\n\n/* Grouping content\n   ========================================================================== */\n\n/**\n * 1. Add the correct box sizing in Firefox.\n * 2. Show the overflow in Edge and IE.\n */\n\nhr {\n  box-sizing: content-box; /* 1 */\n  height: 0; /* 1 */\n  overflow: visible; /* 2 */\n}\n\n/**\n * 1. Correct the inheritance and scaling of font size in all browsers.\n * 2. Correct the odd `em` font sizing in all browsers.\n */\n\npre {\n  font-family: monospace, monospace; /* 1 */\n  font-size: 1em; /* 2 */\n}\n\n/* Text-level semantics\n   ========================================================================== */\n\n/**\n * Remove the gray background on active links in IE 10.\n */\n\na {\n  background-color: transparent;\n}\n\n/**\n * 1. Remove the bottom border in Chrome 57-\n * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari.\n */\n\nabbr[title] {\n  border-bottom: none; /* 1 */\n  text-decoration: underline; /* 2 */\n  text-decoration: underline dotted; /* 2 */\n}\n\n/**\n * Add the correct font weight in Chrome, Edge, and Safari.\n */\n\nb,\nstrong {\n  font-weight: bolder;\n}\n\n/**\n * 1. Correct the inheritance and scaling of font size in all browsers.\n * 2. Correct the odd `em` font sizing in all browsers.\n */\n\ncode,\nkbd,\nsamp {\n  font-family: monospace, monospace; /* 1 */\n  font-size: 1em; /* 2 */\n}\n\n/**\n * Add the correct font size in all browsers.\n */\n\nsmall {\n  font-size: 80%;\n}\n\n/**\n * Prevent `sub` and `sup` elements from affecting the line height in\n * all browsers.\n */\n\nsub,\nsup {\n  font-size: 75%;\n  line-height: 0;\n  position: relative;\n  vertical-align: baseline;\n}\n\nsub {\n  bottom: -0.25em;\n}\n\nsup {\n  top: -0.5em;\n}\n\n/* Embedded content\n   ========================================================================== */\n\n/**\n * Remove the border on images inside links in IE 10.\n */\n\nimg {\n  border-style: none;\n}\n\n/* Forms\n   ========================================================================== */\n\n/**\n * 1. Change the font styles in all browsers.\n * 2. Remove the margin in Firefox and Safari.\n */\n\nbutton,\ninput,\noptgroup,\nselect,\ntextarea {\n  font-family: inherit; /* 1 */\n  font-size: 100%; /* 1 */\n  line-height: 1.15; /* 1 */\n  margin: 0; /* 2 */\n}\n\n/**\n * Show the overflow in IE.\n * 1. Show the overflow in Edge.\n */\n\nbutton,\ninput { /* 1 */\n  overflow: visible;\n}\n\n/**\n * Remove the inheritance of text transform in Edge, Firefox, and IE.\n * 1. Remove the inheritance of text transform in Firefox.\n */\n\nbutton,\nselect { /* 1 */\n  text-transform: none;\n}\n\n/**\n * Correct the inability to style clickable types in iOS and Safari.\n */\n\nbutton,\n[type="button"],\n[type="reset"],\n[type="submit"] {\n  -webkit-appearance: button;\n}\n\n/**\n * Remove the inner border and padding in Firefox.\n */\n\nbutton::-moz-focus-inner,\n[type="button"]::-moz-focus-inner,\n[type="reset"]::-moz-focus-inner,\n[type="submit"]::-moz-focus-inner {\n  border-style: none;\n  padding: 0;\n}\n\n/**\n * Restore the focus styles unset by the previous rule.\n */\n\nbutton:-moz-focusring,\n[type="button"]:-moz-focusring,\n[type="reset"]:-moz-focusring,\n[type="submit"]:-moz-focusring {\n  outline: 1px dotted ButtonText;\n}\n\n/**\n * Correct the padding in Firefox.\n */\n\nfieldset {\n  padding: 0.35em 0.75em 0.625em;\n}\n\n/**\n * 1. Correct the text wrapping in Edge and IE.\n * 2. Correct the color inheritance from `fieldset` elements in IE.\n * 3. Remove the padding so developers are not caught out when they zero out\n *    `fieldset` elements in all browsers.\n */\n\nlegend {\n  box-sizing: border-box; /* 1 */\n  color: inherit; /* 2 */\n  display: table; /* 1 */\n  max-width: 100%; /* 1 */\n  padding: 0; /* 3 */\n  white-space: normal; /* 1 */\n}\n\n/**\n * Add the correct vertical alignment in Chrome, Firefox, and Opera.\n */\n\nprogress {\n  vertical-align: baseline;\n}\n\n/**\n * Remove the default vertical scrollbar in IE 10+.\n */\n\ntextarea {\n  overflow: auto;\n}\n\n/**\n * 1. Add the correct box sizing in IE 10.\n * 2. Remove the padding in IE 10.\n */\n\n[type="checkbox"],\n[type="radio"] {\n  box-sizing: border-box; /* 1 */\n  padding: 0; /* 2 */\n}\n\n/**\n * Correct the cursor style of increment and decrement buttons in Chrome.\n */\n\n[type="number"]::-webkit-inner-spin-button,\n[type="number"]::-webkit-outer-spin-button {\n  height: auto;\n}\n\n/**\n * 1. Correct the odd appearance in Chrome and Safari.\n * 2. Correct the outline style in Safari.\n */\n\n[type="search"] {\n  -webkit-appearance: textfield; /* 1 */\n  outline-offset: -2px; /* 2 */\n}\n\n/**\n * Remove the inner padding in Chrome and Safari on macOS.\n */\n\n[type="search"]::-webkit-search-decoration {\n  -webkit-appearance: none;\n}\n\n/**\n * 1. Correct the inability to style clickable types in iOS and Safari.\n * 2. Change font properties to `inherit` in Safari.\n */\n\n::-webkit-file-upload-button {\n  -webkit-appearance: button; /* 1 */\n  font: inherit; /* 2 */\n}\n\n/* Interactive\n   ========================================================================== */\n\n/*\n * Add the correct display in Edge, IE 10+, and Firefox.\n */\n\ndetails {\n  display: block;\n}\n\n/*\n * Add the correct display in all browsers.\n */\n\nsummary {\n  display: list-item;\n}\n\n/* Misc\n   ========================================================================== */\n\n/**\n * Add the correct display in IE 10+.\n */\n\ntemplate {\n  display: none;\n}\n\n/**\n * Add the correct display in IE 10.\n */\n\n[hidden] {\n  display: none;\n}\n',""]);const s=r},379:n=>{var e=[];function t(n){for(var t=-1,o=0;o<e.length;o++)if(e[o].identifier===n){t=o;break}return t}function o(n,o){for(var i={},r=[],s=0;s<n.length;s++){var c=n[s],l=o.base?c[0]+o.base:c[0],d=i[l]||0,u="".concat(l," ").concat(d);i[l]=d+1;var h=t(u),f={css:c[1],media:c[2],sourceMap:c[3],supports:c[4],layer:c[5]};if(-1!==h)e[h].references++,e[h].updater(f);else{var m=a(f,o);o.byIndex=s,e.splice(s,0,{identifier:u,updater:m,references:1})}r.push(u)}return r}function a(n,e){var t=e.domAPI(e);return t.update(n),function(e){if(e){if(e.css===n.css&&e.media===n.media&&e.sourceMap===n.sourceMap&&e.supports===n.supports&&e.layer===n.layer)return;t.update(n=e)}else t.remove()}}n.exports=function(n,a){var i=o(n=n||[],a=a||{});return function(n){n=n||[];for(var r=0;r<i.length;r++){var s=t(i[r]);e[s].references--}for(var c=o(n,a),l=0;l<i.length;l++){var d=t(i[l]);0===e[d].references&&(e[d].updater(),e.splice(d,1))}i=c}}},569:n=>{var e={};n.exports=function(n,t){var o=function(n){if(void 0===e[n]){var t=document.querySelector(n);if(window.HTMLIFrameElement&&t instanceof window.HTMLIFrameElement)try{t=t.contentDocument.head}catch(n){t=null}e[n]=t}return e[n]}(n);if(!o)throw new Error("Couldn't find a style target. This probably means that the value for the 'insert' parameter is invalid.");o.appendChild(t)}},216:n=>{n.exports=function(n){var e=document.createElement("style");return n.setAttributes(e,n.attributes),n.insert(e,n.options),e}},565:(n,e,t)=>{n.exports=function(n){var e=t.nc;e&&n.setAttribute("nonce",e)}},795:n=>{n.exports=function(n){var e=n.insertStyleElement(n);return{update:function(t){!function(n,e,t){var o="";t.supports&&(o+="@supports (".concat(t.supports,") {")),t.media&&(o+="@media ".concat(t.media," {"));var a=void 0!==t.layer;a&&(o+="@layer".concat(t.layer.length>0?" ".concat(t.layer):""," {")),o+=t.css,a&&(o+="}"),t.media&&(o+="}"),t.supports&&(o+="}");var i=t.sourceMap;i&&"undefined"!=typeof btoa&&(o+="\n/*# sourceMappingURL=data:application/json;base64,".concat(btoa(unescape(encodeURIComponent(JSON.stringify(i))))," */")),e.styleTagTransform(o,n,e.options)}(e,n,t)},remove:function(){!function(n){if(null===n.parentNode)return!1;n.parentNode.removeChild(n)}(e)}}}},589:n=>{n.exports=function(n,e){if(e.styleSheet)e.styleSheet.cssText=n;else{for(;e.firstChild;)e.removeChild(e.firstChild);e.appendChild(document.createTextNode(n))}}}},e={};function t(o){var a=e[o];if(void 0!==a)return a.exports;var i=e[o]={id:o,exports:{}};return n[o](i,i.exports,t),i.exports}t.n=n=>{var e=n&&n.__esModule?()=>n.default:()=>n;return t.d(e,{a:e}),e},t.d=(n,e)=>{for(var o in e)t.o(e,o)&&!t.o(n,o)&&Object.defineProperty(n,o,{enumerable:!0,get:e[o]})},t.o=(n,e)=>Object.prototype.hasOwnProperty.call(n,e),(()=>{var n=t(379),e=t.n(n),o=t(795),a=t.n(o),i=t(569),r=t.n(i),s=t(565),c=t.n(s),l=t(216),d=t.n(l),u=t(589),h=t.n(u),f=t(735),m={};function p(n,e,t){return e in n?Object.defineProperty(n,e,{value:t,enumerable:!0,configurable:!0,writable:!0}):n[e]=t,n}m.styleTagTransform=h(),m.setAttributes=c(),m.insert=r().bind(null,"head"),m.domAPI=a(),m.insertStyleElement=d(),e()(f.Z,m),f.Z&&f.Z.locals&&f.Z.locals;const b=function n(){var e=this;!function(n,e){if(!(n instanceof e))throw new TypeError("Cannot call a class as a function")}(this,n),p(this,"showCases",(function(n){var t=$(n.currentTarget),o=t.children(".name").text(),a=t.children(".case-hidden").children(".description").html(),i=t.children("img").attr("src");t.hasClass("bg-item")&&(i=t.children(".case-photo").css("background-image").split('url("')[1].split('"')[0],o=t.children(".case-text").children(".name").text()),$(".case-modal .body__info .info-text .name").html(o),$(".case-modal .body__info .info-text .desc").html(a),$(".case-modal .body__info img").attr("src",i),e.modal.addClass("active"),$("body, html").addClass("no-scroll")})),p(this,"closeCases",(function(){e.modal.removeClass("active"),$("body, html").removeClass("no-scroll")})),this.modal=$(".case-modal")};function g(n,e,t){return e in n?Object.defineProperty(n,e,{value:t,enumerable:!0,configurable:!0,writable:!0}):n[e]=t,n}const v=function n(){var e=this;!function(n,e){if(!(n instanceof e))throw new TypeError("Cannot call a class as a function")}(this,n),g(this,"scrollHeader",(function(n){var e="number"==typeof n?n:n.scrollTop(),t=$(".header__logo .logo__img"),o=t.attr("data-link"),a=$(".header");e>300?(($(window).width()>575||"0"===$("tools__nav").length)&&a.addClass("header--shadow"),a.hasClass("main-header")&&(a.addClass("header--content"),t.attr("src","".concat(o,"/media/icon/logo-color.svg")),$(".header__origin-button").addClass("main-button--hidden"),$(".header__scroll-button").removeClass("main-button--hidden"))):(a.removeClass("header--shadow"),a.hasClass("main-header")&&(a.removeClass("header--content"),t.attr("src","".concat(o,"/media/icon/logo.svg")),$(".header__origin-button").removeClass("main-button--hidden"),$(".header__scroll-button").addClass("main-button--hidden")))})),g(this,"scrollToForm",(function(){$(window).width()<992&&e.toggleMobileMenu($(e));var n=$(".main-form").offset().top-150;$("body, html").animate({scrollTop:n},1e3)})),g(this,"toggleMobileMenu",(function(){var n=$(".header .navigations");n.toggleClass("active"),n.hasClass("active")?($(".header__humb img").attr("src","http://gnb16.com/wp-content/themes/gnb/media/icon/close.svg").addClass("active"),$("body, html").addClass("no-scroll")):($(".header__humb img").attr("src","http://gnb16.com/wp-content/themes/gnb/media/icon/humb.svg").removeClass("active"),$("body, html").removeClass("no-scroll"))}))};function _(n,e,t){return e in n?Object.defineProperty(n,e,{value:t,enumerable:!0,configurable:!0,writable:!0}):n[e]=t,n}const w=function n(){var e=this;!function(n,e){if(!(n instanceof e))throw new TypeError("Cannot call a class as a function")}(this,n),_(this,"moveInfo",(function(n){e.infoBlock.css({left:n.clientX-8,top:n.clientY+30})})),_(this,"showInfo",(function(n){var t=$(n.currentTarget),o=1==+t.attr("data-projects")?"".concat(t.attr("data-projects")," выполненый проект"):"".concat(t.attr("data-projects")," выполненых проекта");e.infoBlock.children(".name").text(t.attr("data-name")),e.infoBlock.children(".count").text(o),e.infoBlock.addClass("active")})),_(this,"hiddenInfo",(function(){e.infoBlock.removeClass("active")})),this.infoBlock=$(".about-map__info")};function y(n,e,t){return e in n?Object.defineProperty(n,e,{value:t,enumerable:!0,configurable:!0,writable:!0}):n[e]=t,n}const C=function n(){var e=this;!function(n,e){if(!(n instanceof e))throw new TypeError("Cannot call a class as a function")}(this,n),y(this,"show",(function(n){var t=$(n.currentTarget),o=t.children(".info").children(".info__name").text(),a=t.children(".tools-hidden").children(".description").html(),i=t.children(".image").css("background-image").split('url("')[1].split('"')[0];console.log(t.children(".image").css("background-image")),$(".case-modal .body__info .info-text .name").html(o),$(".case-modal .body__info .info-text .desc").html(a),$(".case-modal .body__info img").attr("src",i),e.modal.addClass("active"),$("body, html").addClass("no-scroll")})),y(this,"switch",(function(n,e){n.preventDefault();var t=e.attr("href").split("#")[1];$(".tools__nav ul li.active").removeClass("active"),e.parent("li").addClass("active"),"all"===t?$(".tools__item").addClass("visible"):($(".tools__item").removeClass("visible"),$("."+t).addClass("visible"))})),this.modal=$(".case-modal")};function k(n,e,t){return e in n?Object.defineProperty(n,e,{value:t,enumerable:!0,configurable:!0,writable:!0}):n[e]=t,n}const x=function n(){var e=this;!function(n,e){if(!(n instanceof e))throw new TypeError("Cannot call a class as a function")}(this,n),k(this,"switchButton",(function(n){e.hitsaus.children(".button").removeClass("active"),n.addClass("active"),e.calculate()})),k(this,"onFocus",(function(){$("#long").focus()})),k(this,"calculate",(function(){var n=e.longInput.val();/\D/g.test(n)&&(n=n.replace(/\D/g,""));var t=e.material.find((function(n){return n.name===e.materialInput.val()})),o=e.hitsaus.children(".active").hasClass("button-yeas")?+e.hitKefList.find((function(n){return+n.k==+e.rangeInput.val()})).result:0;"steel"===e.materialInput.val()?($(".calc__form .double .buttons").addClass("buttons--hidden"),$(".calc__form .double .input__item--placeholder").css("width","calc(50% - 12px)"),o=0):($(".calc__form .double .buttons").removeClass("buttons--hidden"),$(".calc__form .double .input__item--placeholder").css("width","50%")),$(window).width()<768&&$(".calc__form .double .input__item--placeholder").css("width","100%"),+n<1&&(o=0);var a=t.kef.find((function(n){return+n.k==+e.rangeInput.val()})).result*+e.rangeInput.val()*+n+o,i="",r=0;a.toString().split("").reverse().forEach((function(n){4==++r?(r=1,i=n+" "+i):i=n+i})),e.result.text(i)})),this.material=[{name:"steel",kef:[{k:110,result:3105},{k:160,result:3622.5},{k:225,result:4600},{k:315,result:5865},{k:400,result:9430},{k:500,result:12075},{k:630,result:14720},{k:710,result:21275},{k:800,result:25300}]},{name:"plastic",kef:[{k:110,result:2700},{k:160,result:3150},{k:225,result:4e3},{k:315,result:5100},{k:400,result:8200},{k:500,result:10500},{k:630,result:12800},{k:710,result:18500},{k:800,result:22e3}]}],this.hitKefList=[{k:110,result:60},{k:160,result:85},{k:225,result:138},{k:315,result:204},{k:400,result:289},{k:500,result:375},{k:630,result:468},{k:710,result:917},{k:800,result:958}],this.materialInput=$(".calc__form #material"),this.rangeInput=$(".calc__form #range"),this.longInput=$(".calc__form #long"),this.hitsaus=$("#hitsaus"),this.result=$(".result__value")},E=function n(){var e,t;!function(n,e){if(!(n instanceof e))throw new TypeError("Cannot call a class as a function")}(this,n),t=function(n){var e=$(n.currentTarget),t=e.attr("data-link");$(".stage-work__tabs .tab-nav__item").removeClass("active"),e.addClass("active"),$(".stage-work__tabs .tab-body").removeClass("active"),$(".stage-work__tabs #".concat(t)).addClass("active")},(e="switchTab")in this?Object.defineProperty(this,e,{value:t,enumerable:!0,configurable:!0,writable:!0}):this[e]=t};function I(n,e,t){return e in n?Object.defineProperty(n,e,{value:t,enumerable:!0,configurable:!0,writable:!0}):n[e]=t,n}const T=function n(){!function(n,e){if(!(n instanceof e))throw new TypeError("Cannot call a class as a function")}(this,n),I(this,"scrollEffect",(function(){})),I(this,"setHeight",(function(){var n=$(".main-block");if(n.length>0){var e=$(window).height()+$(".main-block .decor").height();n.css("min-height",e+"px")}}))};function z(n,e,t){return e in n?Object.defineProperty(n,e,{value:t,enumerable:!0,configurable:!0,writable:!0}):n[e]=t,n}var S=new T;const O=function n(){var e=this;!function(n,e){if(!(n instanceof e))throw new TypeError("Cannot call a class as a function")}(this,n),z(this,"setProgress",(function(){var n=[];$("div").each((function(){var e=$(this).css("background-image");e&&"none"!==e&&n.push(e)})),e.images_total_count+=n.length;for(var t=0;t<e.images.length;t++){var o=new Image;o.onload=e.image_loaded,o.onerror=e.image_loaded,o.src=e.images[t].src}n.forEach((function(n){var t=n.split("url(")[1].split(")")[0].split('"')[1],o=new Image;o.src=t,o.onload=e.image_loaded,o.onerror=e.image_loaded}))})),z(this,"image_loaded",(function(){e.images_loaded_count++,(e.images_loaded_count===e.images_total_count||e.images_loaded_count>e.images_total_count)&&(S.setHeight(),setTimeout((function(){$(".preloader").css({opacity:0}),setTimeout((function(){$(".preloader").remove()}),500)}),500))})),this.loader=$(".preloader__loader"),this.images=$("img"),this.images_total_count=this.images.length,this.images_loaded_count=0,this.percent=0};var j=new T;$(document).ready((function(n){var e=new b,t=new v,o=new w,a=new C,i=new x,r=new E,s=new O,c=$(".calc__form");t.scrollHeader(pageYOffset),c.length>0&&i.calculate(),s.setProgress(10);var l=$(".cases-slider__body");l.length>0&&l.owlCarousel({items:3,margin:24,dots:!1,nav:!0,navText:"",responsive:{0:{items:2,dots:!0},767:{items:2,dots:!1},991:{items:3,dots:!1}}});var d=$(".reviews__body");d.length>0&&d.owlCarousel({items:3,margin:24,dots:!1,nav:!0,navText:"",responsive:{0:{items:1,dots:!0},767:{items:2,dots:!1},991:{items:3,dots:!1}}}),$(".header__humb").on("click",(function(){t.toggleMobileMenu($(this))})),$(".btn-to-form").on("click",(function(){t.scrollToForm()})),$(".cases__item, .cases-slider__item").on("click",(function(n){return e.showCases(n)})),$(".case-modal .close").on("click",e.closeCases),$(document).on("click",(function(n){var t=$(".case-modal .body, .cases__item, .cases-slider__item, .tools__item, .header__humb");t.is(n.target)||0!==t.has(n.target).length||e.closeCases()})),$(".tools__item").on("click",(function(n){a.show(n)})),$(".tools__nav ul li a").on("click",(function(n){a.switch(n,$(this))})),$(window).on("scroll",(function(){t.scrollHeader($(this))}));var u=$(".about-map__map path.active");u.on("mousemove",(function(n){return o.moveInfo(n)})),u.on("mouseenter",(function(n){return o.showInfo(n)})),u.on("mouseleave",(function(n){return o.hiddenInfo(n)})),$(".calc__form select").on("change",(function(){i.calculate()})),$(".calc__form input").on("input",(function(){i.calculate()})),$("#hitsaus .button").on("click",(function(){i.switchButton($(this))})),$("#calc-focus").on("click",(function(){i.onFocus()})),$('input[name="long"]').keyup((function(n){/\D/g.test(this.value)&&(this.value=this.value.replace(/\D/g,""))})),$(".stage-work__tabs .tab-nav__item").on("click",(function(n){r.switchTab(n)})),$("#main-form").on("submit",(function(n){n.preventDefault();var e=$(this);$.ajax({type:"POST",url:"http://gnb16.com/wp-content/themes/gnb/message.php",data:e.serialize(),success:function(n){$(".form-alert").css("display","flex"),$("input").val(""),$("textarea").val(""),setTimeout((function(){$(".form-alert").css("display","none")}),1500)}})}))})),$(window).resize((function(){j.setHeight()}))})()})();