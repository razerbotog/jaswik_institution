//  var swiper = new Swiper(".mySwiper1", {
//       autoplay: true,
//       speed: 800,
//       slidesPerView: 4,
//       spaceBetween: 30,
//       pagination: {
//         el: ".swiper-pagination",
//         clickable: true,
//       },
//          autoplay: {
//       delay: 300, // Time between each slide change (in ms)
//       // disableOnInteraction: false, // Continue autoplay even when user interacts with swiper
//       },
//     });
var swiper = new Swiper(".mySwiper1", {
  autoplay: true,
  speed: 800,
  spaceBetween: 30,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  slidesPerView: 1,
  autoplay: {
    delay: 300, // Time between each slide change (in ms)
    // disableOnInteraction: false, // Continue autoplay even when user interacts with swiper
  },
  breakpoints: {
    // When screen width is 330px or less
    330: {
      slidesPerView: 1,
    },
    // When screen width is 420px or less
    420: {
      slidesPerView: 2,
    },
    // When screen width is 576px or less
    576: {
      slidesPerView: 2,
    },
    // When screen width is 768px or less
    768: {
      slidesPerView: 3,
    },
  },
});

  // var swiper = new Swiper(".mySwiper2", {
  //     autoplay: true,
  //     speed: 800,
  //     slidesPerView: 5,
  //     spaceBetween: 30,
  //     pagination: {
  //       el: ".swiper-pagination",
  //       clickable: true,
  //     },
  //        autoplay: {
  //     delay: 800, // Time between each slide change (in ms)
  //     disableOnInteraction: false, // Continue autoplay even when user interacts with swiper
  //     },
  //   });
  var swiper = new Swiper(".mySwiper2", {
    autoplay: true,
    speed: 800,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    slidesPerView: 1,
    autoplay: {
      delay: 300, // Time between each slide change (in ms)
      disableOnInteraction: false, // Continue autoplay even when user interacts with swiper
    },
    breakpoints: {
       // When screen width is 330px or less
    330: {
      slidesPerView: 1,
    },
      // When screen width is 420px or less
      420: {
        slidesPerView: 2,
      },
      // When screen width is 576px or less
      576: {
        slidesPerView: 5,
      },
      // When screen width is 768px or less
      768: {
        slidesPerView: 5,
      },
    },
  });
// var swiper = new Swiper(".mySwiper1", {
//   autoplay: true,
//   speed: 800,
//   spaceBetween: 30,
//   pagination: {
//     el: ".swiper-pagination",
//     clickable: true,
//   },
//   slidesPerView: 4,
//   autoplay: {
//     delay: 300, // Time between each slide change (in ms)
//     // disableOnInteraction: false, // Continue autoplay even when user interacts with swiper
//   },
//   breakpoints: {
//     // When screen width is 420px or less
//     420: {
//       slidesPerView: 2,
//     },
//     // When screen width is 576px or less
//     576: {
//       slidesPerView: 2,
//     },
//     // When screen width is 768px or less
//     768: {
//       slidesPerView: 3,
//     },
//   },
// });

 // const swiper = new Swiper('.mySwiper', {
 //    loop: true, // Enables infinite loop
 //    slidesPerView: 3, // Number of visible slides at once
 //    spaceBetween: 14, // Space between slides
 //    navigation: {
 //      nextEl: '.swiper-button-next',
 //      prevEl: '.swiper-button-prev',
 //    },
 //    speed: 800, // Control slide transition speed (in ms)
 //    autoplay: {
 //      delay: 0, // Time between each slide change (in ms)
 //      disableOnInteraction: false, // Continue autoplay even when user interacts with swiper
 //    },
 //  });


// shape your carrer
        const text =document.querySelector(".sec-text");
        
        const textLoad = () =>{
            setTimeout(() =>{
                text.textContent ="A Web Developer";
            },0);
            setTimeout(() =>{
                text.textContent ="A Web Designer";
            },4000);
            setTimeout(() =>{
                text.textContent ="A Graphic Designer";
            },8000);
            setTimeout(() =>{
                text.textContent ="A Digital Marketer";
            },12000);
            setTimeout(() =>{
                text.textContent ="An Ethical Hacker";
            },16000);
            setTimeout(() =>{
                text.textContent ="A Data Scientist";
            },20000);//1s = 1000 miliseconds



        }
        textLoad();
        setInterval(textLoad,60000);rer
// shape your carrer
