<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script src="<?php echo base_url(); ?>/assets/js/splide-extension-auto-scroll.js"></script>
<script src="path-to-the-script/splide-extension-auto-scroll.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
 <style>
    .img {
  object-fit: cover;
  width: 350px;
  height: 350px;
}
.swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>
 <div class="container" style="margin-top:60px">
    <div class="row ">
    <div class="swiper mySwiper">
    <swiper-container class="mySwiper"
    class="mySwiper"   
    autoplay-delay="1000" autoplay-disable-on-interaction="false"
    
    navigation="true"  slides-per-view="3" pagination="true" pagination-clickable="true">
    <swiper-slide></swiper-slide>
    <swiper-slide></swiper-slide>
    <swiper-slide> </swiper-slide>
    <swiper-slide></swiper-slide>
    <swiper-slide> </swiper-slide>
    <swiper-slide> </swiper-slide>
    <swiper-slide> </swiper-slide>
    <swiper-slide></swiper-slide>
    <swiper-slide></swiper-slide>
  </swiper-container>

 </div>  </div>
 </div>
 
 
 
 
 
 
 <div class="container">
  <div class="row">
  <section class="splide" id="brandSlider" aria-label="Splide Basic HTML Example">
  <div class="splide__track">
		<ul class="splide__list">
			<li class="splide__slide">
      <img class="img" src="<?php echo base_url() ?>assets/img/doctors/14.jpeg" alt="" style="max-width:100%">
      </li>
			<li class="splide__slide">
      <img class="img"  src="<?php echo base_url() ?>assets/img/doctors/2.jpeg" alt="" style="max-width:100%">
      </li>
			<li class="splide__slide">
      <img class="img" src="<?php echo base_url() ?>assets/img/doctors/10.jpeg" alt="" style="max-width:100%">
      </li>
			<li class="splide__slide">
      <img class="img" src="<?php echo base_url() ?>assets/img/doctors/17.jpeg" alt="" style="max-width:100%">
      </li>
			<li class="splide__slide">
      <img class="img" src="<?php echo base_url() ?>assets/img/doctors/18.jpeg" alt="" style="max-width:100%">
      </li>
			<li class="splide__slide">
      <img class="img" src="<?php echo base_url() ?>assets/img/doctors/6.jpeg" alt="" style="max-width:100%">
      </li>
			<li class="splide__slide">
      <img  class="img" src="<?php echo base_url() ?>assets/img/doctors/11.jpeg" alt="" style="max-width:100%">
      </li>
			<li class="splide__slide">
      <img class="img" src="<?php echo base_url() ?>assets/img/doctors/20.jpeg" alt="" style="max-width:100%">
      </li>
			<li class="splide__slide">
      <img class="img" src="<?php echo base_url() ?>assets/img/doctors/4.jpeg" alt="" style="max-width:100%">
      </li>
		</ul>
  </div>
</section>
  </div>
 </div>
 
 
 <script>
  document.addEventListener('DOMContentLoaded', function() {
 new Splide("#brandSlider", {
      mediaQuery: "min",
      type: "loop",
      breakpoints: {
        240: {
          perPage: 1,
        },
        640: {
          perPage: 2,
        },
        767: {
          perPage: 3,
        },
        1024: {
          perPage: 3,
        },
      },
      autoScroll: {
        speed: 1,
      },
      focus: "center",
      autoplay:"play",
    }).mount( window.splide.Extensions);
  });
 </script>
  