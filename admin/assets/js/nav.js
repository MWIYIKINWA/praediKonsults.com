// PROSPER CODE

'use strict';

// modal variables
const modal = document.querySelector('[data-modal]');
const modalCloseBtn = document.querySelector('[data-modal-close]');
const modalCloseOverlay = document.querySelector('[data-modal-overlay]');
//modal function
const modalCloseFunc = function()
{ modal.classList.add('closed') 
}
//modal event listener
modalCloseOverlay.addEventListener("click", modalCloseFunc);
modalCloseBtn.addEventListener("click", modalCloseFunc);

//MOBILE navigation
const mobileMenuOpenBtn = document.querySelector('[data-mobile-menu-opening-btn]')
const mobileMenu = document.querySelector('[data-mobile-menu]')
const mobileMenuCloseBtn = document.querySelector('[data-mobile-close-btn]')


mobileMenuOpenBtn.addEventListener('click', function(){
    mobileMenu.classList.add('activate-mob-nav')
})

mobileMenuCloseBtn.addEventListener('click', function(){
    mobileMenu.classList.remove('activate-mob-nav')
})

//accordian
const accordianBtn = document.querySelector('[data-accordion-btn]')
const accordian = document.querySelector('[data-accordion]')

//for (let i = 0; i < accordianBtn.length; i++) {
    accordianBtn.addEventListener('click' , function(){
        accordian.classList.toggle('active')
    })
//}

// for (let i = 0; i < accordianBtn.length; i++) {

//     accordianBtn[i].addEventListener('click', function(){
//         const clickedButton = this.nextElementSibling.classList.contains('active')
//         for (let i = 0; i < accordian.length; i++) {
//               if (clickedButton)break;
//               if (accordian[i].classList.contains('active')) {
//                   accordian[i].classList.remove('active')
//                   accordianBtn[i].classList.remove('active')
//               }
            
//         }

//         this.nextElementSibling.classList.toggle('active')
//         this.classList.toggle('active')

//     })
   
    
