import './bootstrap'; //non è la libreria Bootstrap CSS

import '~resources/scss/app.scss'

import * as bootstrap from 'bootstrap'

import.meta.glob([
    '../img/**'
])



// import Swiper bundle with all modules installed

const swiper = new Swiper('.swiper', {
    loop: true,
    effect: 'cards',
    cardsEffect: {
      slideShadows :false,
    },
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    // And if we need scrollbar
   
  });