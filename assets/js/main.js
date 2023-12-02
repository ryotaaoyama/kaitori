/**
* Template Name: Impact - v1.1.1
* Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/


// $(document).on('wpcf7submit', function()  {
//   let tel_judge = document.querySelector('[name="tel"]').value.replace(/[━.*‐.*―.*－.*\-.*ー.*\-]/gi,'');
//   if (!tel_judge.match(/^(0[5-9]0[0-9]{8}|0[1-9][1-9][0-9]{7})$/)) {
//     alert("電話番号を正しく入力してください");
//     return false;
//   }else{
//     return true;
//   }
//   });

//   $(document).on('wpcf7submit', function()  {
//     let tel_judge = document.querySelector('[name="tel"]').value;
//     if (tel_judge.match(/^(0{1}\d{9,10})$/)){
//       alert("電話番号をハイフン有りで入力してください");
//       return false;
//     }
//       else{
//       return true;
//     }
//     });
    

let accordionDetails = '.js-details';
let accordionSummary = '.js-details-summary';
let accordionContent = '.js-details-content';
let speed = 300

$(accordionSummary).each(function() {
  $(this).on("click", function(event) {
  	// デフォルトの挙動を無効化
    event.preventDefault();
    // summaryにis-activeクラスを切り替え
    $(this).toggleClass("is-active");

    if ($(this).parent($(accordionDetails)).attr("open")) {
      // アコーディオンを閉じるときの処理
      $(this).nextAll($(accordionContent)).slideUp(speed, function() {
        // アニメーションの完了後にopen属性を取り除く
        $(this).parent($(accordionDetails)).removeAttr("open");
      });
    } else {
      // アコーディオンを開くときの処理
      // open属性を付ける
      $(this).parent($(accordionDetails)).attr("open", "true");
      // いったんdisplay:none;してからslideDownで開く
      $(this).nextAll($(accordionContent)).hide().slideDown(speed);
    }
  })
});


// document.querySelector(".details-summary").onclick = function () {
//   const bg = document.querySelector(".details-summary");
//   bg.classList.add("flash")
  
  
//   // 50ミリ秒後に外す
//   setTimeout(function() {
//     bg.classList.remove('flash');
//   }, 50);
  
// };

$(document).ready(function() {
  $(".more").on('click', function(){
	    $(this).unwrap();
	  	$(this).toggleClass("on-click");
	     $(this).prev().slideToggle(500);
	  	    $(this).wrap("<p></p>");
  });
});

$(window).on('load', function() {
		$(".nameBtn").unwrap();
	 $(".cv-bound").next("br").remove();
		
});

// $(document).ready(function() {
//   $(".more").on('click', function(){
// 	  	$(this).toggleClass("on-click");
// 	     $(this).prev().slideToggle(500);
//   });
// });



document.addEventListener('DOMContentLoaded', () => {
  "use strict";

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = document.querySelectorAll('#navbar a');

  function navbarlinksActive() {
    navbarlinks.forEach(navbarlink => {

      if (!navbarlink.hash) return;

      let section = document.querySelector(navbarlink.hash);
      if (!section) return;

      let position = window.scrollY + 200;

      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active');
      } else {
        navbarlink.classList.remove('active');
      }
    })
  }
  window.addEventListener('load', navbarlinksActive);
  document.addEventListener('scroll', navbarlinksActive);

  /**
   * Mobile nav toggle
   */
  const mobileNavShow = document.querySelector('.mobile-nav-show');
  const mobileNavHide = document.querySelector('.mobile-nav-hide');

  document.querySelectorAll('.mobile-nav-toggle').forEach(el => {
    el.addEventListener('click', function (event) {
      event.preventDefault();
      mobileNavToogle();
    })
  });

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavShow.classList.toggle('d-none');
    mobileNavHide.classList.toggle('d-none');
  }

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navbar a').forEach(navbarlink => {

    if (!navbarlink.hash) return;

    let section = document.querySelector(navbarlink.hash);
    if (!section) return;

    navbarlink.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });

  });

  /**
   * Toggle mobile nav dropdowns
   */
  const navDropdowns = document.querySelectorAll('.navbar .dropdown > a');

  navDropdowns.forEach(el => {
    el.addEventListener('click', function (event) {
      if (document.querySelector('.mobile-nav-active')) {
        event.preventDefault();
        this.classList.toggle('active');
        this.nextElementSibling.classList.toggle('dropdown-active');

        let dropDownIndicator = this.querySelector('.dropdown-indicator');
        dropDownIndicator.classList.toggle('bi-chevron-up');
        dropDownIndicator.classList.toggle('bi-chevron-down');
      }
    })
  });

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Scroll top button
   */
  const scrollTop = document.querySelector('.scroll-top');
  if (scrollTop) {
    const togglescrollTop = function () {
      window.scrollY >100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
    window.addEventListener('load', togglescrollTop);
    document.addEventListener('scroll', togglescrollTop);
    scrollTop.addEventListener('click', window.scrollTo({
      top: 0,
      behavior: 'smooth'
    }));
  }

  /**
   * Initiate Pure Counter
   */
  new PureCounter();

  /**
   * Clients Slider
   */
  new Swiper('.clients-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 40
      },
      480: {
        slidesPerView: 3,
        spaceBetween: 60
      },
      640: {
        slidesPerView: 4,
        spaceBetween: 80
      },
      992: {
        slidesPerView: 6,
        spaceBetween: 120
      }
    }
  });

  /**
   * Init swiper slider with 1 slide at once in desktop view
   */
  new Swiper('.slides-1', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });

  /**
   * Init swiper slider with 3 slides at once in desktop view
   */
  new Swiper('.slides-3', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 40
      },

      1200: {
        slidesPerView: 3,
      }
    }
  });

  /**
   * Porfolio isotope and filter
   */
  let portfolionIsotope = document.querySelector('.portfolio-isotope');

  if (portfolionIsotope) {

    let portfolioFilter = portfolionIsotope.getAttribute('data-portfolio-filter') ? portfolionIsotope.getAttribute('data-portfolio-filter') : '*';
    let portfolioLayout = portfolionIsotope.getAttribute('data-portfolio-layout') ? portfolionIsotope.getAttribute('data-portfolio-layout') : 'masonry';
    let portfolioSort = portfolionIsotope.getAttribute('data-portfolio-sort') ? portfolionIsotope.getAttribute('data-portfolio-sort') : 'original-order';

    window.addEventListener('load', () => {
      let portfolioIsotope = new Isotope(document.querySelector('.portfolio-container'), {
        itemSelector: '.portfolio-item',
        layoutMode: portfolioLayout,
        filter: portfolioFilter,
        sortBy: portfolioSort
      });

      let menuFilters = document.querySelectorAll('.portfolio-isotope .portfolio-flters li');
      menuFilters.forEach(function (el) {
        el.addEventListener('click', function () {
          document.querySelector('.portfolio-isotope .portfolio-flters .filter-active').classList.remove('filter-active');
          this.classList.add('filter-active');
          portfolioIsotope.arrange({
            filter: this.getAttribute('data-filter')
          });
          if (typeof aos_init === 'function') {
            aos_init();
          }
        }, false);
      });

    });

  }

  /**
   * Animation on scroll function and init
   */
  function aos_init() {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', () => {
    aos_init();
  });

});



// PC用フォーム
// let meka = document.querySelector('[name="Meka"]');
// let CarName = document.querySelector('[name="CarName"]');
// let caryear = document.querySelector('[name="caryear"]');
// let carmet = document.querySelector('[name="carmet"]');
// let tel =document.querySelector('[name="tel"]');


// meka.addEventListener('change', function () {
//   console.log(meka.value);
//   if (meka.value === "")  {
//     meka.classList.add("is-focus");
//     caryear.classList.remove("is-focus");
//     carmet.classList.remove("is-focus");
//     CarName.classList.remove("is-focus")
//   }
// });

// meka.addEventListener('change', function () {
//   console.log(meka.value);
//   if (meka.value !== "") {
//     meka.classList.remove("is-focus");
//     caryear.classList.remove("is-focus");
//     carmet.classList.remove("is-focus");
//     CarName.classList.add("is-focus")
//   }
// });
// meka.addEventListener('change', function () {
//   if (CarName.value !== ""&&meka.value ===""&&caryear.value !== ""&&carmet.value !== ""&&tel.value==="") {
//     meka.classList.add("is-focus");
//     caryear.classList.remove("is-focus");
//     carmet.classList.remove("is-focus");
//     CarName.classList.remove("is-focus")
//     tel.classList.remove("is-focus");
//   }
// });


// CarName.addEventListener('change', function () {
//   if (CarName.value === "")  {
//     meka.classList.remove("is-focus");
//     caryear.classList.remove("is-focus");
//     carmet.classList.remove("is-focus");
//     CarName.classList.add("is-focus")
//   }
// });

// CarName.addEventListener('change', function () {
//   if (CarName.value !== ""&&meka.value !== "") {
//     meka.classList.remove("is-focus");
//     caryear.classList.add("is-focus");
//     carmet.classList.remove("is-focus");
//     CarName.classList.remove("is-focus")
//   }
// });

// CarName.addEventListener('change', function () {
//   if (CarName.value !== ""&&meka.value === "") {
//     meka.classList.add("is-focus");
//     caryear.classList.remove("is-focus");
//     carmet.classList.remove("is-focus");
//     CarName.classList.remove("is-focus")
//   }
// });

// // 車種を選択変えた時に、車種、メーカー、年式が空じゃない場合、
// CarName.addEventListener('change', function () {
//   if (CarName.value !== ""&&meka.value !==""&&caryear.value !== "") {
//     meka.classList.remove("is-focus");
//     caryear.classList.remove("is-focus");
//     carmet.classList.add("is-focus");
//     CarName.classList.remove("is-focus")
//   }
// });

// // 車種を選択変えた時に、車種、メーカー、走行距離が空じゃなく、年式のみ空の場合、
// CarName.addEventListener('change', function () {
//   if (CarName.value !== ""&&meka.value !==""&&caryear.value === ""&&carmet.value !=="") {
//     meka.classList.remove("is-focus");
//     caryear.classList.add("is-focus");
//     carmet.classList.remove("is-focus");
//     CarName.classList.remove("is-focus")
//   }
// });

// // 車種を選択変えた時に、車種、メーカー、年式が空じゃない場合、
// CarName.addEventListener('change', function () {
//   if (CarName.value !== ""&&meka.value !==""&&caryear.value !== ""&&carmet.value !== "") {
//     meka.classList.remove("is-focus");
//     caryear.classList.remove("is-focus");
//     carmet.classList.remove("is-focus");
//     CarName.classList.remove("is-focus")
//   }
// });
// // 車種を選択変えた時に、車種、メーカー、年式が空じゃない場合、
// CarName.addEventListener('change', function () {
//   if (CarName.value !== ""&&meka.value !==""&&caryear.value !== ""&&carmet.value !== ""&&tel.value!=="") {
//     meka.classList.remove("is-focus");
//     caryear.classList.remove("is-focus");
//     carmet.classList.remove("is-focus");
//     CarName.classList.remove("is-focus");
//     tel.classList.remove("is-focus");
//   }
// });

// CarName.addEventListener('change', function () {
//   if (CarName.value !== ""&&meka.value !==""&&caryear.value !== ""&&carmet.value !== ""&&tel.value==="") {
//     meka.classList.remove("is-focus");
//     caryear.classList.remove("is-focus");
//     carmet.classList.remove("is-focus");
//     CarName.classList.remove("is-focus");
//     tel.classList.add("is-focus");
//   }
// });
// CarName.addEventListener('change', function () {
//   if (CarName.value !== ""&&meka.value !==""&&caryear.value !== ""&&carmet.value !== ""&&tel.value!=="") {
//     meka.classList.remove("is-focus");
//     caryear.classList.remove("is-focus");
//     carmet.classList.remove("is-focus");
//     CarName.classList.remove("is-focus");
//     tel.classList.add("is-focus");

//   }
// });

// // 年式が空の場合、年式に赤枠を向ける
// caryear.addEventListener('change', function () {
//   if (caryear.value === "")  {
//     meka.classList.remove("is-focus");
//     caryear.classList.add("is-focus");
//     carmet.classList.remove("is-focus");
//     CarName.classList.remove("is-focus")
//   }
// });

// // 年式、メーカー、車種が空じゃない場合、走行距離が赤くなる
// caryear.addEventListener('change', function () {
//   if (caryear.value !== ""&&CarName.value !== ""&& meka.value !== "") {
//     meka.classList.remove("is-focus");
//     caryear.classList.remove("is-focus");
//     carmet.classList.add("is-focus");
//     CarName.classList.remove("is-focus")
//   }
// });

// // 年式、メーカー、車種が空じゃない場合、走行距離が赤くなる
// caryear.addEventListener('change', function () {
//   if (caryear.value !== ""&&CarName.value !== ""&& meka.value !== ""&& carmet.value !== "") {
//     meka.classList.remove("is-focus");
//     caryear.classList.remove("is-focus");
//     carmet.classList.remove("is-focus");
//     CarName.classList.remove("is-focus")
//   }
// });

// // 年式、メーカー、車種が空じゃない場合、走行距離が赤くなる
// caryear.addEventListener('change', function () {
//   if (caryear.value !== ""&&CarName.value === ""&& meka.value !== ""&& carmet.value !== "") {
//     meka.classList.remove("is-focus");
//     caryear.classList.remove("is-focus");
//     carmet.classList.remove("is-focus");
//     CarName.classList.add("is-focus")
//   }
// });

// // 車種を選択変えた時に、車種、メーカー、年式が空じゃない場合、
// caryear.addEventListener('change', function () {
//   if (CarName.value !== ""&&meka.value !==""&&caryear.value !== ""&&carmet.value !== ""&&tel.value!=="") {
//     meka.classList.remove("is-focus");
//     caryear.classList.remove("is-focus");
//     carmet.classList.remove("is-focus");
//     CarName.classList.remove("is-focus");
//     tel.classList.remove("is-focus");
//   }
// });

// caryear.addEventListener('change', function () {
//   if (CarName.value !== ""&&meka.value !==""&&caryear.value !== ""&&carmet.value !== ""&&tel.value==="") {
//     meka.classList.remove("is-focus");
//     caryear.classList.remove("is-focus");
//     carmet.classList.remove("is-focus");
//     CarName.classList.remove("is-focus");
//     tel.classList.add("is-focus");

//   }
// });

// caryear.addEventListener('change', function () {
//   if (CarName.value !== ""&&meka.value !==""&&caryear.value !== ""&&carmet.value !== ""&&tel.value!=="") {
//     meka.classList.remove("is-focus");
//     caryear.classList.remove("is-focus");
//     carmet.classList.remove("is-focus");
//     CarName.classList.remove("is-focus");
//     tel.classList.add("is-focus");

//   }
// });

// // 年式、メーカー、車種が空じゃない場合、走行距離が赤くなる
// carmet.addEventListener('change', function () {
//   if (caryear.value !== ""&&CarName.value !== ""&& meka.value !== ""&& carmet.value !== ""&& tel.value === "") {
//     meka.classList.remove("is-focus");
//     caryear.classList.remove("is-focus");
//     carmet.classList.remove("is-focus");
//     CarName.classList.remove("is-focus")
//     tel.classList.add("is-focus");
//   }
// });

// // 年式、メーカー、車種が空じゃない場合、走行距離が赤くなる
// carmet.addEventListener('change', function () {
//   if (caryear.value !== ""&&CarName.value !== ""&& meka.value !== ""&& carmet.value === ""&& tel.value !== "") {
//     meka.classList.remove("is-focus");
//     caryear.classList.remove("is-focus");
//     carmet.classList.add("is-focus");
//     CarName.classList.remove("is-focus")
//   }
// });

// // 車種を選択変えた時に、車種、メーカー、年式が空じゃない場合、
// carmet.addEventListener('change', function () {
//   if (CarName.value !== ""&&meka.value !==""&&caryear.value !== ""&&carmet.value !== ""&&tel.value!=="") {
//     meka.classList.remove("is-focus");
//     caryear.classList.remove("is-focus");
//     carmet.classList.remove("is-focus");
//     CarName.classList.remove("is-focus");
//     tel.classList.remove("is-focus");
//   }
// });

// carmet.addEventListener('change', function () {
//   if (CarName.value !== ""&&meka.value !==""&&caryear.value !== ""&&carmet.value !== ""&&tel.value==="") {
//     meka.classList.remove("is-focus");
//     caryear.classList.remove("is-focus");
//     carmet.classList.remove("is-focus");
//     CarName.classList.remove("is-focus");
//     tel.classList.add("is-focus");
//   }
// });
// carmet.addEventListener('change', function () {
//   if (CarName.value !== ""&&meka.value !==""&&caryear.value !== ""&&carmet.value !== ""&&tel.value!=="") {
//     meka.classList.remove("is-focus");
//     caryear.classList.remove("is-focus");
//     carmet.classList.remove("is-focus");
//     CarName.classList.remove("is-focus");
//     tel.classList.add("is-focus");
//   }
// });

// // 年式、メーカー、車種が空じゃない場合、走行距離が赤くなる
// tel.addEventListener('change', function () {
//   if (caryear.value !== ""&&CarName.value !== ""&& meka.value !== ""&& carmet.value !== ""&& tel.value !== "") {
//     meka.classList.remove("is-focus");
//     caryear.classList.remove("is-focus");
//     carmet.classList.remove("is-focus");
//     CarName.classList.remove("is-focus")
//     tel.classList.remove("is-focus");  

// }});

// // 年式、メーカー、車種が空じゃない場合、走行距離が赤くなる
// tel.addEventListener('change', function () {
//   if (caryear.value !== ""&&CarName.value !== ""&& meka.value !== ""&& carmet.value !== ""&& tel.value === "") {
//     meka.classList.remove("is-focus");
//     caryear.classList.remove("is-focus");
//     carmet.classList.remove("is-focus");
//     CarName.classList.remove("is-focus")
//     tel.classList.add("is-focus");
//   }
// });


// // SP用フォーム
// let meka2 = document.querySelector('[name="Meka2"]');
// let CarName2 = document.querySelector('[name="CarName2"]');
// let caryear2 = document.querySelector('[name="caryear2"]');
// let carmet2 = document.querySelector('[name="carmet2"]');
// let tel2 =document.querySelector('[name="tel2"]');

// meka2.addEventListener('change', function () {
//   if (meka2.value === "")  {
//     meka2.classList.add("is-focus");
//     caryear2.classList.remove("is-focus");
//     carmet2.classList.remove("is-focus");
//     CarName2.classList.remove("is-focus")
//   }
// });

// meka2.addEventListener('change', function () {
//   if (meka2.value !== "") {
//     meka2.classList.remove("is-focus");
//     caryear2.classList.remove("is-focus");
//     carmet2.classList.remove("is-focus");
//     CarName2.classList.add("is-focus")
//   }
// });
// meka2.addEventListener('change', function () {
//   if (CarName2.value !== ""&&meka2.value ===""&&caryear2.value !== ""&&carmet2.value !== ""&&tel2.value==="") {
//     meka2.classList.add("is-focus");
//     caryear2.classList.remove("is-focus");
//     carmet2.classList.remove("is-focus");
//     CarName2.classList.remove("is-focus")
//     tel2.classList.remove("is-focus");
//   }
// });


// CarName2.addEventListener('change', function () {
//   if (CarName2.value === "")  {
//     meka2.classList.remove("is-focus");
//     caryear2.classList.remove("is-focus");
//     carmet2.classList.remove("is-focus");
//     CarName2.classList.add("is-focus")
//   }
// });

// CarName2.addEventListener('change', function () {
//   if (CarName2.value !== ""&&meka2.value !== "") {
//     meka2.classList.remove("is-focus");
//     caryear2.classList.add("is-focus");
//     carmet2.classList.remove("is-focus");
//     CarName2.classList.remove("is-focus")
//   }
// });

// CarName2.addEventListener('change', function () {
//   if (CarName2.value !== ""&&meka2.value === "") {
//     meka2.classList.add("is-focus");
//     caryear2.classList.remove("is-focus");
//     carmet2.classList.remove("is-focus");
//     CarName2.classList.remove("is-focus")
//   }
// });

// // 車種を選択変えた時に、車種、メーカー、年式が空じゃない場合、
// CarName2.addEventListener('change', function () {
//   if (CarName2.value !== ""&&meka2.value !==""&&caryear2.value !== "") {
//     meka2.classList.remove("is-focus");
//     caryear2.classList.remove("is-focus");
//     carmet2.classList.add("is-focus");
//     CarName2.classList.remove("is-focus")
//   }
// });

// // 車種を選択変えた時に、車種、メーカー、走行距離が空じゃなく、年式のみ空の場合、
// CarName2.addEventListener('change', function () {
//   if (CarName2.value !== ""&&meka2.value !==""&&caryear2.value === ""&&carmet2.value !=="") {
//     meka2.classList.remove("is-focus");
//     caryear2.classList.add("is-focus");
//     carmet2.classList.remove("is-focus");
//     CarName2.classList.remove("is-focus")
//   }
// });

// // 車種を選択変えた時に、車種、メーカー、年式が空じゃない場合、
// CarName2.addEventListener('change', function () {
//   if (CarName2.value !== ""&&meka2.value !==""&&caryear2.value !== ""&&carmet2.value !== "") {
//     meka2.classList.remove("is-focus");
//     caryear2.classList.remove("is-focus");
//     carmet2.classList.remove("is-focus");
//     CarName2.classList.remove("is-focus")
//   }
// });

// CarName2.addEventListener('change', function () {
//   if (CarName2.value !== ""&&meka2.value !==""&&caryear2.value !== ""&&carmet2.value !== ""&&tel2.value!=="") {
//     meka2.classList.remove("is-focus");
//     caryear2.classList.remove("is-focus");
//     carmet2.classList.remove("is-focus");
//     CarName2.classList.remove("is-focus");
//     tel2.classList.remove("is-focus");
//   }
// });

// CarName2.addEventListener('change', function () {
//   if (CarName2.value !== ""&&meka2.value !==""&&caryear2.value !== ""&&carmet2.value !== ""&&tel2.value==="") {
//     meka2.classList.remove("is-focus");
//     caryear2.classList.remove("is-focus");
//     carmet2.classList.remove("is-focus");
//     CarName2.classList.remove("is-focus");
//     tel2.classList.add("is-focus");
//   }
// });



// // 年式が空の場合、年式に赤枠を向ける
// caryear2.addEventListener('change', function () {
//   if (caryear2.value === "")  {
//     meka2.classList.remove("is-focus");
//     caryear2.classList.add("is-focus");
//     carmet2.classList.remove("is-focus");
//     CarName2.classList.remove("is-focus")
//   }
// });

// // 年式、メーカー、車種が空じゃない場合、走行距離が赤くなる
// caryear2.addEventListener('change', function () {
//   if (caryear2.value !== ""&&CarName2.value !== ""&& meka2.value !== "") {
//     meka2.classList.remove("is-focus");
//     caryear2.classList.remove("is-focus");
//     carmet2.classList.add("is-focus");
//     CarName2.classList.remove("is-focus")
//   }
// });

// // 年式、メーカー、車種が空じゃない場合、走行距離が赤くなる
// caryear2.addEventListener('change', function () {
//   if (caryear2.value !== ""&&CarName2.value === ""&& meka2.value !== ""&& carmet2.value !== "") {
//     meka2.classList.remove("is-focus");
//     caryear2.classList.remove("is-focus");
//     carmet2.classList.remove("is-focus");
//     CarName2.classList.add("is-focus")
//   }
// });

// // 年式、メーカー、車種が空じゃない場合、走行距離が赤くなる
// caryear2.addEventListener('change', function () {
//   if (caryear2.value !== ""&&CarName2.value !== ""&& meka2.value !== ""&& carmet2.value !== "") {
//     meka2.classList.remove("is-focus");
//     caryear2.classList.remove("is-focus");
//     carmet2.classList.remove("is-focus");
//     CarName2.classList.remove("is-focus")
//   }
// });

// // 車種を選択変えた時に、車種、メーカー、年式が空じゃない場合、
// caryear2.addEventListener('change', function () {
//   if (CarName2.value !== ""&&meka2.value !==""&&caryear2.value !== ""&&carmet2.value !== ""&&tel2.value!=="") {
//     meka2.classList.remove("is-focus");
//     caryear2.classList.remove("is-focus");
//     carmet2.classList.remove("is-focus");
//     CarName2.classList.remove("is-focus");
//     tel2.classList.remove("is-focus");
//   }
// });

// caryear2.addEventListener('change', function () {
//   if (CarName2.value !== ""&&meka2.value !==""&&caryear2.value !== ""&&carmet2.value !== ""&&tel2.value==="") {
//     meka2.classList.remove("is-focus");
//     caryear2.classList.remove("is-focus");
//     carmet2.classList.remove("is-focus");
//     CarName2.classList.remove("is-focus");
//     tel2.classList.add("is-focus");
//   }
// });
// caryear2.addEventListener('change', function () {
//   if (CarName2.value !== ""&&meka2.value !==""&&caryear2.value !== ""&&carmet2.value === ""&&tel2.value==="") {
//     meka2.classList.remove("is-focus");
//     caryear2.classList.remove("is-focus");
//     carmet2.classList.add("is-focus");
//     CarName2.classList.remove("is-focus");
//     tel2.classList.remove("is-focus");
//   }
// });



// // 年式、メーカー、車種が空じゃない場合、走行距離が赤くなる
// carmet2.addEventListener('change', function () {
//   if (caryear2.value !== ""&&CarName2.value !== ""&& meka2.value !== ""&& carmet2.value !== "") {
//     meka2.classList.remove("is-focus");
//     caryear2.classList.remove("is-focus");
//     carmet2.classList.remove("is-focus");
//     CarName2.classList.remove("is-focus")
//   }
// });

// // 年式、メーカー、車種が空じゃない
// carmet2.addEventListener('change', function () {
//   if (caryear2.value !== ""&&CarName2.value !== ""&& meka2.value !== ""&& carmet2.value === "") {
//     meka2.classList.remove("is-focus");
//     caryear2.classList.remove("is-focus");
//     carmet2.classList.add("is-focus");
//     CarName2.classList.remove("is-focus")
//   }
// });

// // 車種を選択変えた時に、車種、メーカー、年式が空じゃない場合、
// carmet2.addEventListener('change', function () {
//   if (CarName2.value !== ""&&meka2.value !==""&&caryear2.value !== ""&&carmet2.value !== ""&&tel2.value!=="") {
//     meka2.classList.remove("is-focus");
//     caryear2.classList.remove("is-focus");
//     carmet2.classList.remove("is-focus");
//     CarName2.classList.remove("is-focus");
//     tel2.classList.remove("is-focus");
//   }
// });

// carmet2.addEventListener('change', function () {
//   if (CarName2.value !== ""&&meka2.value !==""&&caryear2.value !== ""&&carmet2.value !== ""&&tel2.value==="") {
//     meka2.classList.remove("is-focus");
//     caryear2.classList.remove("is-focus");
//     carmet2.classList.remove("is-focus");
//     CarName2.classList.remove("is-focus");
//     tel2.classList.add("is-focus");
//   }
// });


// // 年式、メーカー、車種が空じゃない場合、走行距離が赤くなる
// tel2.addEventListener('change', function () {
//   if (caryear2.value !== ""&&CarName2.value !== ""&& meka2.value !== ""&& carmet2.value !== ""&& tel2.value !== "") {
//     meka2.classList.remove("is-focus");
//     caryear2.classList.remove("is-focus");
//     carmet2.classList.remove("is-focus");
//     CarName2.classList.remove("is-focus")
//     tel2.classList.remove("is-focus");
//   }
// });

// // 年式、メーカー、車種が空じゃない場合、走行距離が赤くなる
// tel2.addEventListener('change', function () {
//   if (caryear2.value !== ""&&CarName2.value !== ""&& meka2.value !== ""&& carmet2.value !== ""&& tel2.value === "") {
//     meka2.classList.remove("is-focus");
//     caryear2.classList.remove("is-focus");
//     carmet2.classList.remove("is-focus");
//     CarName2.classList.remove("is-focus")
//     tel2.classList.add("is-focus");
//   }
// });


//お客様情報の入力表示/非表示
// document.querySelector(".customer_info").style.display ="none";

// function clickBtn1(){
// 	const info = document.querySelector(".customer_info");

// 	if(info.style.display=="block"){
// 		// noneで非表示
// 		info.style.display ="none";
// 	}else{
// 		// blockで表示
// 		info.style.display ="block";
// 	}
// }

// // ポップアップのセッティング処理
// function popupSetting(){
//   let popup = document.getElementById('popup');
//   if(!popup) return;

//   let bgBlack = document.getElementById('bg-black2');
//   let closeBtn = document.getElementById('close-btn');
//   let showBtn = document.getElementById('show-btn');

//   // ポップアップ
//   popUp(bgBlack);
//   popUp(closeBtn);
//   popUp(showBtn);

//   // ポップアップ処理
//   function popUp(elem){
//     if(!elem) return;
  
//     elem.addEventListener('click', function(){
//       popup.classList.toggle('is-show');
//     });
//   }
// }

// // ポップアップのセッティング
// popupSetting();