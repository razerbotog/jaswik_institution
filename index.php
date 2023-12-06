<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/gif" href="./components/images/JIPS.png">
    <title>Jaswik Institutions</title>
    <!-- custom css -->
	<link rel="stylesheet" type="text/css" href="./components/css2/responsive.css">
	<link rel="stylesheet" type="text/css" href="./components/css2/style.css?v=7">
	<!-- custom css -->
	
	<!-- font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- font awesome -->

	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" /> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	 <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <style>
	/* container1 strt */
  
  .container1{
	width:100%;
	height:auto;
	box-sizing: border-box;
	padding:0;
	margin: 0;
	overflow-x: hidden;
	scroll-behavior: smooth;
	margin-right: 0px;
	margin-bottom: 0px;
	border: none;
	background-color:#f5f5f5;

 }
 .container1 i {
  color: #fdc632 !important;
 }

 nav .navbar{
 	height:200px;
 }
.nav .nav-item .nav-link {
    color: #fdc632;
  }
      .nav{
      border-radius:20px;
			margin-top: 0px;
 			background-color:#002347;
 			padding-right: 20px;
 			padding-left: 20px;
			box-shadow: 1px 10px 20px grey;
      }

.patti{
	color:white;
	height:40px;
/*	word-spacing:10px;*/
}
.patti a{
padding-bottom:1rem;
	text-decoration: none;
	color:#fdc632;
}
.patti span{
	padding-bottom: 10px;
}
.tagline{
	margin-top: 50px;
}

.mail{
	padding-left: 20px;
		padding-right: 20px;
}
  

.dm {
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
  border: none;
  border-radius: 0;
  padding: 0.7em;
  background-color: #f5f5f5;
 
}


.dm ul {
  list-style: none;
  padding: 0;
  transition: 0.5s ease all;

}
.dropdown-menu.show{
	display: flex;
}

.dropdown-menu.show:hover{
	/* display: flex; */
flex: wrap;
}
.dm li .di{
  color: gray;
  font-size:0.8em;
  padding: 0.5em 1em;
  transition: 0.5s ease all;
}
.dm li .di:hover {
  background-color: #f1f1f1;
}
.dm li:first-child a {
  font-weight: bold;
  font-size: 1em;
  text-transform: uppercase;
  color: #BF40BF;
}
.dm li:first-child a:hover {
  background-color: #f1f1f1;
}


#signup{
  margin-top:50px;
  background-color:#002347;
  padding-top:30px ;
  padding-bottom:30px ;
}
.signup-img{
  border-radius: 0px 40px;
/* margin-top: 50px;*/

}
.form-signup{
  background-color: white;
  padding:40px 50px 50px 40px;
/*  border-radius: 0px 20px;*/
height: 525px;
}
.form-signup input{
/*  background-color: #EDE4FF;*/
}
#signup .h2,#signup p{
  color:#fdc632;
}
.circle{
  border-radius: 50%;
/*  border: 2px solid black;*/
  height: 260px;
  width: 260px;
	background-color:#002347;
	color: #fdc632;

}
.circle-1{
  background-color: #002347;
   
}
.file{
/*  background-color: white;*/
  border-radius: 50%;
  height: 50px;
  width:50px;
  margin-top: auto;

}
.dm-1.show{
	display: inline-block;
}
.file i:hover{
transform:rotate(45deg);
}
.circle-2{
  background-color:#002347;
}
.circle-3{
  background-color:#002347;
  margin-top: 0px;
}
.circle-4{
  background-color:#002347;
}
.sidebar a{
  display: none;
}
 
.btn-enroll{
  background-color:#002347;
  color: #fdc632;
  border:none;
  width:120px;
  height: 40px;
  border-radius:20px;
  transition: 0.5s all ease;
box-shadow: 1px 10px 20px grey;
margin-right: 20px;

}
.btn-enroll:hover{
  transform: scale(1.1);
  background-color:#fdc632;
  color:#002347 ;


}
 
.btn-enroll3{
  background-color:#002347;
  color: #fdc632;
  border:none;
  width:120px;
/*  height: 40px;*/
  border-radius:20px;
  transition: 0.5s all ease;
   display: none;

}
.btn-enroll3:hover{
/*  transform: scale(1.1);*/
  background-color:#fdc632;
  color:#002347 ;


}
.btn-enroll2{
/*  margin-right:20px;*/
/*  background-color:#BF40BF;*/
  background-color:#002347;
  color: #fdc632;
  border:none;
  width:180px;
  height: 40px;
  border-radius: 5px;
  transition: 0.5s all ease;
  display: none;
}
.btn-enroll2:hover{
  transform: scale(1.1);
  background-color:#fdc632;
  color:#002347 ;

}
.btn-enroll4{
  background-color:#002347;
  color: #fdc632;
  border:none;
  width:120px;
  height: 40px;
  border-radius:20px;
  transition: 0.5s all ease;
box-shadow: 1px 10px 20px grey;
margin-right: 20px;

}
.btn-enroll4:hover{
  transform: scale(1.1);
  background-color:#fdc632;
  color:#002347 ;


}
.offcanvas-body ul li{
  display: block;
		font-size: 17px;
		font-weight:500 ;
		text-decoration: none;
		padding: 10px 15px;
		border-bottom: 1px solid white;
		color:#fdc632;
}
.offcanvas-body ul{
  padding: 0;

  list-style-type:none;
}
.section-1{
  background-image:url("./components/images/baneer  for jips 2.jpg");
/*  width:100vw;*/
  height:600px;
  background-size: cover;
  background-position:center;
  background-repeat: no-repeat;
  margin-right:0;
  padding-right: 0;
  /* margin-top: 20px; */
}
.section-2{

}
.offcanvas-body li .partner{
	color:#fdc632;
}

.offcanvas-body{
background-color: white;
}

.offcanvas-body #navbarDarkDropdownMenuLink{
   color:#fdc632;
   padding:0;
   padding-top:-10px;
}
.offcanvas-body .di-1{
  color: black;
}


.offcanvas-header{
  background-color:#002347;
}
 
.offcanvas-header .btn-close{
  color:#fdc632 ;
}

#btn-offcanvas{
  background-color:#fdc632;
}
.sanskrit{
	font-size:70px;
}
.offcanvas-body .navbar-nav li .nav-link{
	color: white;
	border-bottom:2px solid yellow;
}




.text-animate{
/*    min-height: 100vh;*/
    display:flex;
    align-items: center;
    justify-content: center;
/*    background-color: #010718;*/
    overflow:hidden;
      font-family: 'Poppins', sans-serif;
}
.text-animate{
    /* width: 246px; */
    overflow: hidden;
}
.text-animate .text{
position: relative;
color: #fdc632;
font-weight: 600;
font-size: 40px;
}
/*.text-animate .text.first-text{
color: #fff;
}
.text-animate .text.sec-text::before{
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width:100%;

    margin-right: 20px;
    background-color:transparent;
	background-color:#220554;
    border-left: 2px solid #fff;
    animation: animate 4s  steps(12) infinite;

}
@keyframes animate {
    40%,60%{
        left:calc(100% + 4px);
    }
    100%{
        left: 100%;
    }
}*/
.section-3 a{
  color: #fdc632;
}
@media screen and (max-width:1030px){
	.nav{
		width:720px;
	}
	.section-1{
	 	background-position:100%;
	 }
	
}
@media screen and (max-width:1072px){
	.nav{
/*		width: 600px;*/
		justify-content:flex-start;
		text-align: center;
	}
	.nav .nav-link{

	}
	.navbar-brand{
		width: 120px;
	}
	.btn-enroll{
		display: none;
	}
	.btn-enroll3{
		display: flex;
	}
}
@media screen and (max-width:991px){
	
	 .circle-4{
	 	margin-top:20px;
	 }
	 .signup-img{
/*	 	margin-top:100px;*/
	 	border-radius: 20px;
	 }
	 .btn-enroll{
	 	display: none;

	 }
	 .btn-enroll2{
	 	display: inline-block;
	 }
	.nav{
		padding-right: 0px;
		width:600px;
	}
	 .btn-enroll3{
	 	display: flex;
	 	text-align: center;
	 }
}
@media screen and (max-width:767px){
	.phone{
text-align: center;
		display:none;

	}
	.sanskrit{
	font-size:30px;
	margin-top: auto;
	text-align: right;
}
.gurukul{
	width:100px;

	}
	.tagline{
		justify-content: flex-end;
	}
	.navbar{
}
/*		display:none;*/
	
	.email{
		display:none;
		align-items: center;
	}
	.user{
		display: none;
	}
	#signup .form-signup{
/*		 width: 400px;*/
		 margin:0 auto;
	}
	.signup-img{
width:60%;
/*	margin-top:30px;*/
margin-bottom:30px;
	margin-left:20%;
	align-items: center;
}

	.circle{
		margin-right:10px ;
	}
	.offcanvas-body{
		display: block;
	 }
	 .form-signup{
	 	width: 60vw;
	 }
	 .circle-3{
	 	margin-top:20px;
	 }
	 .section-1{
	 	background-position:70%;
	 }
}


@media only screen and (min-width: 992px) {
	.dd:hover .dm {
	  display: flex;
	}
	.dm.show {
	  display: flex;
	}
  }

  @media only screen and (min-width: 992px) and (max-width: 1140px) {
	.dd:hover .dm {
	  width: 60vw;
	  flex-wrap: wrap;
	}
  }
  @media only screen and (max-width: 992px) {
	.dm.show {
	  flex-wrap: wrap;
	  max-height:250px;
	  overflow-y: scroll;
	}
  }
   @media screen and (max-width:500px){
       .sidebar a{
          display: flex;
        }
        .circle{
/*        	width:50%;*/
        }
        .circle-2{
        	margin-top: 20px;
        }
        .section-1{
	 	background-position:left;
	 	background-size: cover;
	 }

      }
       @media screen and (max-width:575px){
       	#signup .h2{
       		text-align: center;
       	}
       	.tagline{
       		margin-top: 0;
       	}
       	.sec-text{
       		font-size: small;
       	}
       }
       @media screen and (max-width:735px){
       	.nav{
       		display: none;
       	}
       	.sidebar a{
  display: flex;
}
.sidebar fa-bars{
	width: 100px;
}
 .navbar-brand{
 	width: 200px;
 }
 .animation .text{
 	text-align:right;
 }
       }
        @media screen and (max-width:402px){
        	.form-signup{
        		width:300px;
        	}
        	.patti{
        		font-size:smaller ;
        	}
        	.section-1{
/*	 	background-position:60%;*/
	 }
        }
/* container1 end */
  </style>
</head>
<body>
    <div class="container-fluid px-2 px-md-0" style="padding:0px;" >
      <!-- <img src="./components/BG2.jpg" alt="" class="position-fixed img-fluid" style="z-index:-2;"> -->
	<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	include('./components/home-page/section-1.php');
	// include('./components/home-page/section-2.php');
	// include('./components/home-page/section-3.php');
	include('./components/home-page/section-5.php');
	include('./components/home-page/section-6.php');

	include('./components/home-page/section-7.php');
  include('./components/home-page/aboutus.php');
	include('./components/home-page/section-8.php');
	include('./components/home-page/section-9.php');
	include('./components/home-page/section-10.php');
	include('./components/home-page/section-11.php');
	 ?>

	
    </div>
    
    <!-- // shape your carrer -->
  <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <!-- // shape your carrer -->
	<!-- bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<!-- bootstrap -->
    <!-- Swiper -->
	<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
	<!-- Swiper -->
    <!-- custom js -->
  	<!-- <script src="./components/js2/script.js"></script> -->
    <!-- custom js -->

	<script>
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
  // freeMode: true,
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
      slidesPerView: 2,
    },
    // When screen width is 768px or less
    768: {
      slidesPerView: 3,
    },
  },
  // pagination: {
  //       el: ".swiper-pagination",
  //       dynamicBullets: true,
  //     },
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
    loop: true,
    speed: 800,
    spaceBetween: 30,
    // freeMode: true,
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
      // centeredSlides: true,
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

    // const text =document.querySelector(".sec-text");
        
        // const textLoad = () =>{
        //     setTimeout(() =>{
        //         text.textContent ="A Web Developer";
        //     },0);
        //     setTimeout(() =>{
        //         text.textContent ="A Web Designer";
        //     },4000);
        //     setTimeout(() =>{
        //         text.textContent ="A Graphic Designer";
        //     },8000);
        //     setTimeout(() =>{
        //         text.textContent ="A Digital Marketer";
        //     },12000);
        //     setTimeout(() =>{
        //         text.textContent ="An Ethical Hacker";
        //     },16000);
        //     setTimeout(() =>{
        //         text.textContent ="A Data Scientist";
        //     },20000);//1s = 1000 miliseconds



        // }
        // textLoad();
        // setInterval(textLoad,24000);
      var typingEffect= new Typed(".sec-text",{
    strings : ["A Web Developer","A Web Designer","A Graphic Designer","A Digital Marketer","An Ethical Hacker","A Data Scientist"],
    loop:true,
    typeSpeed:100,
    backspeed : 80,
    backDelay:1500

  });
// shape your carrer

	</script>
</body>
</html>