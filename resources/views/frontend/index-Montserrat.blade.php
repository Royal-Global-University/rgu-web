@extends('frontend.master')
@push('styles')
    <style>
        .headd1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 45px;
        }

        .headd2 {
            font-family: 'Montserrat', sans-serif;
            font-size: 35px;
        }

        .para1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 18px;
        }

        .headd3 {
            font-family: 'Montserrat', sans-serif;
            font-size: 22px;
        }
    </style>

    <!-- for mobile  -->
    <style>
        .mobile-headd1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 2.3rem;
            /* 32px */
            font-weight: 700;
        }

        .mobile-headd2 {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.6rem;
            /* 24px */
            font-weight: 600;
        }

        .mobile-headd3 {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.25rem;
            /* 20px */
            font-weight: 500;
        }

        .mobile-para1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.1rem;
            /* 16px */
            font-weight: 400;

        }

        .mobile-caption {
            font-family: 'Montserrat', sans-serif;
            font-size: 0.875rem;
            /* 14px */
            font-weight: 400;
        }
    </style>

@endpush
@section('content')

    <section class="website">
    <div id="page" class="site site_wrapper">

       <div class="scroll-top">
           <div class="scroll-top-wrap">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="injected-svg"
                   data-src="https://static.elfsight.com/icons/app-back-to-top-arrow-3.svg"
                   xmlns:xlink="http://www.w3.org/1999/xlink">
                   <path
                       d="m7.997 10 3.515-3.79a.672.672 0 0 1 .89-.076l.086.075L16 10l-3 .001V18h-2v-7.999L7.997 10z">
                   </path>
               </svg>
           </div>
       </div>

       <!-- admission button floating  -->
       <!-- <a href="https://admissions.rgu.ac/" class="text-center" style="
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #EF991F;
    color: #fff;
    padding: 12px 20px;
    font-size: 20px;
    font-weight: bold;
    line-height: 1.3;
    text-decoration: none;
    border-radius: 30px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    z-index: 1000;
    overflow: hidden;
    animation: pulse 2s infinite;
    ">
    <span style="
    position: absolute;
    top: 0;
    left: -75%;
    width: 50%;
    height: 100%;
    background: linear-gradient(120deg, rgba(255,255,255,0.4), rgba(255,255,255,0));
    transform: skewX(-25deg);
    animation: shine 2s infinite;
    "></span>
    Admission Open <br> Apply Now
       </a> -->

       <style>
    @keyframes pulse {
    0% { transform: scale(1); box-shadow: 0 0 0 rgba(230, 57, 70, 0.4); }
    50% { transform: scale(1.05); box-shadow: 0 0 15px rgba(230, 57, 70, 0.6); }
    100% { transform: scale(1); box-shadow: 0 0 0 rgba(230, 57, 70, 0.4); }
    }

    @keyframes shine {
    0% { left: -75%; }
    100% { left: 125%; }
    }
       </style>
       <!-- admission button floating  -->


       <section>
           <header>
               <div>
                @include('frontend/components/iheader')
                   <div>

                       <!-- Carousel container for 4-image slider -->
                       <div id="imageCarousel" class="carousel slide carousel-container" data-bs-ride="carousel"
                           data-pause="false" data-interval="2000">

                           <!-- admission banner  -->
                           <section class="container border mb-3" style="background-color: #ffffff1c; box-shadow: -1px 3px 5px 0px rgba(255, 255, 255, 0.2); border-radius: 20px;  backdrop-filter: blur(20px);">

                               <div class="row" style="display: flex; align-items: center; justify-content: center; padding: 20px 10px;">

                                   <div class="col-lg-9">
                                       <h2 style="color: #fff; font-size: 26px;" class="headd3 fw-bold">
                                           Applications are now open for Admission in 2025 - 2026
                                       </h2>
                                       <p class="para1 text-white">
                                           Explore the full range of graduate courses that are accepting applications
                                       </p>
                                   </div>

                                   <div class="col-lg-3">
                                       <div>
                                           <a href="https://admissions.rgu.ac/" style="
    position: fixed;
    bottom: 35px;
    right: 50px;
    background-color: #ef991f;
    color: #fff;
    padding: 12px 20px;
    font-size: 18px;
    font-weight: bold;
    text-decoration: none;
    border-radius: 20px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    z-index: 1000;
    overflow: hidden;
    animation: pulse 2s infinite;
    ">
    <span style="
    position: absolute;
    top: 0;
    left: -75%;
    width: 50%;
    height: 100%;
    background: linear-gradient(120deg, rgba(255,255,255,0.4), rgba(255,255,255,0));
    transform: skewX(-25deg);
    animation: shine 2s infinite;
    "></span>
    APPLY NOW
                                       </a>
                                       <style>
    @keyframes pulse {
    0% { transform: scale(1); box-shadow: 0 0 0 rgba(228, 206, 208, 0.4); }
    50% { transform: scale(1.05); box-shadow: 0 0 15px rgba(228, 206, 208, 0.6); }
    100% { transform: scale(1); box-shadow: 0 0 0 rgba(228, 206, 208, 0.4); }
    }

    @keyframes shine {
    0% { left: -75%; }
    100% { left: 125%; }
    }
                                       </style>
                                       </div>
                                   </div>

                               </div>
                           </section>
                           <!-- admission banner  -->

                           <div class="carousel-inner pt-3" >
                               <div class="carousel-item active">
                                   <img src="home-banner/about-web-mont.png" alt="Slide 1">
                               </div>
                               <div class="carousel-item">
                                   <img src="home-banner/research-web-mont.png" alt="Slide 2">
                               </div>
                               <!-- <div class="carousel-item">
                                   <img src="sarang/s3.png" alt="Slide 3">
                               </div> -->
                           </div>


                           <!-- Controls for the carousel -->
                           <!-- <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                           <span class="visually-hidden">Previous</span>
                         </button>
                         <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                           <span class="carousel-control-next-icon" aria-hidden="true"></span>
                           <span class="visually-hidden">Next</span>
                         </button> -->



                       </div>

                       <!-- Video Container -->
    <div class="video-container" style="position: relative; width: 100%; height: auto;">
    <img src="web-thumb.png" id="video-thumbnail2" alt="Video Thumbnail"
       style="width: 100%; height: auto; position: absolute; top: 0; left: 0; object-fit: cover; z-index: 1; transition: opacity 1s ease;">

    <video autoplay loop muted id="video-bg2" oncanplay="showVideo2()"
       style="width: 100%; height: auto; display: block;">
       <source src="https://d20cs3cmzywuh.cloudfront.net/v-2.mp4" type="video/mp4">
    </video>
    </div>
    <!-- Video Container -->

    <script>
    function showVideo2() {
       let thumbnail = document.getElementById("video-thumbnail2");
       thumbnail.style.opacity = "0";  // Fade out smoothly
       setTimeout(() => {
           thumbnail.style.display = "none";  // Remove after transition
       }, 1000);  // Matches transition duration
    }
    </script>

                   </div>
               </div>
           </header>

       </section>

        <!--Event Section-->
           <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">

           <img src="home-banner/dis-rgu-montserret.png" alt="">

           <div class="container" style="padding: 30px 0px;">
           <div class="row">
               <div class="col-lg-7" style="display: flex; flex-direction: column;">


                 <div id="slider" style="width: 620px; overflow: hidden; margin: auto; position: relative;">
                   <h2 class="headd2 fw-bold pb-3" style="color: #27467A; font-weight: 900; font-size: 40px;">
                       News and<span style="color: #FF9A1E; font-weight: 500;"> Events</span></h2>

                   <div id="slides" style="display: flex; transition: transform 0.5s ease;">
                     <img class="zoomable" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/events/may-01.jpeg" style="width:400px; height: 530px; margin-right: 20px; border: 2px solid #e68900; border-radius: 10px;">
                     <img class="zoomable" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/events/e04.jpeg" style="width:400px; height: 530px; margin-right: 20px; border: 2px solid #e68900; border-radius: 10px;">
                     <img class="zoomable" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/events/may-2.jpeg" style="width:400px; height: 530px; margin-right: 20px; border: 2px solid #e68900; border-radius: 10px;">
                   </div>
                 </div>

                 <div style="text-align:center; margin-top:10px;">
                   <button onclick="prevSlide()" style="padding:5px 10px; background-color: #27467A; color: #fff; border-radius: 3px;"><</button>
                   <button onclick="nextSlide()" style="padding:5px 10px; background-color: #27467A; color: #fff; border-radius: 3px;">></button>
                 </div>

                 <div id="lightbox" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.9); justify-content:center; align-items:center; z-index:1000;">
                   <img id="lightbox-img" style="max-width:90%; max-height:90%; border-radius:10px;">
                 </div>

                 <script>
                   const zoomableImages = document.querySelectorAll('.zoomable');
                   const lightbox = document.getElementById('lightbox');
                   const lightboxImg = document.getElementById('lightbox-img');

                   zoomableImages.forEach(img => {
                     img.style.cssText = 'width:400px; height:530px; margin-right:20px; border:2px solid #e68900; border-radius:10px; cursor:pointer;';
                     img.addEventListener('click', () => {
                       lightbox.style.display = 'flex';
                       lightboxImg.src = img.src;
                     });
                   });

                   lightbox.addEventListener('click', () => {
                     lightbox.style.display = 'none';
                   });
                 </script>

                 <script>
                   const slideWidth = 320; // 300px image + 20px margin
                   const slider = document.getElementById("slider");
                   const slides = document.getElementById("slides");
                   let index = 0;
                   let isTransitioning = false;

                   // Clone first few slides and append
                   const cloneSlides = () => {
                     const children = slides.children;
                     for (let i = 0; i < 2; i++) {
                       const clone = children[i].cloneNode(true);
                       slides.appendChild(clone);
                     }
                   };

                   cloneSlides();

                   function nextSlide() {
                     if (isTransitioning) return;
                     isTransitioning = true;
                     index++;
                     slides.style.transition = "transform 0.5s ease";
                     slides.style.transform = `translateX(-${index * slideWidth}px)`;

                     setTimeout(() => {
                       if (index >= slides.children.length - 2) {
                         slides.style.transition = "none";
                         index = 0;
                         slides.style.transform = `translateX(0px)`;
                       }
                       isTransitioning = false;
                     }, 600);
                   }

                   function prevSlide() {
                     if (isTransitioning) return;
                     isTransitioning = true;
                     if (index <= 0) {
                       index = slides.children.length - 3;
                       slides.style.transition = "none";
                       slides.style.transform = `translateX(-${(index + 1) * slideWidth}px)`;
                       setTimeout(() => {
                         slides.style.transition = "transform 0.5s ease";
                         prevSlide();
                       }, 20);
                       return;
                     }
                     index--;
                     slides.style.transition = "transform 0.5s ease";
                     slides.style.transform = `translateX(-${index * slideWidth}px)`;
                     setTimeout(() => isTransitioning = false, 600);
                   }

                   setInterval(nextSlide, 3000); // Auto-slide
                 </script>
               </div>

               <div class="col-lg-5">
                   <h2 class="headd2 fw-bold pb-3" style="color: #27467A; font-size: 40px;">Notification</h2>

                   <div class="card" style="height: 530px; overflow: hidden; position: relative; background-color: #faebd7;">
                     <div class="notification-wrapper" style="position: absolute; top: 100%; width: 100%; animation: scrollUp 20s linear infinite;">
                       <div class="notification-item text-dark para1">
                         <a href="#" style="display: block; padding: 15px; border-bottom: 1px solid #ddd; text-decoration: none; color: inherit;"><img style="width: 30px;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/admission/output-onlinegiftools.gif" alt=""> 4th Convocation - Registration Open </a>
                       </div>
                       <div class="notification-item text-dark para1">
                         <a href="#" style="display: block; padding: 15px; border-bottom: 1px solid #ddd; text-decoration: none; color: inherit;"><img style="width: 30px;" src="assets/img/event-img/arrow-new.png" alt=""> International Seminar by Royal Global University in association with ELTAI, September, 2024 </a>
                       </div>
                       <div class="notification-item text-dark para1">
                         <a href="#" style="display: block; padding: 15px; border-bottom: 1px solid #ddd; text-decoration: none; color: inherit;"><img style="width: 30px;" src="assets/img/event-img/arrow-new.png" alt=""> Advertisement No. : DST-SERB-01/2024 </a>
                       </div>
                       <div class="notification-item text-dark para1">
                         <a href="#" style="display: block; padding: 15px; border-bottom: 1px solid #ddd; text-decoration: none; color: inherit;">Viksit Bharat 2047</a>
                       </div>
                       <div class="notification-item text-dark para1">
                         <a href="#" style="display: block; padding: 15px; border-bottom: 1px solid #ddd; text-decoration: none; color: inherit;">East Zone Vice Chancellors' Meet, 2023 on 'Integrating Bharatiya Knowledge System (BKS) with Higher Education'</a>
                       </div>

                       <div class="notification-item text-dark para1 pt-5">
                         <a href="#" style="display: block; padding: 15px; border-bottom: 1px solid #ddd; text-decoration: none; color: inherit;"><img style="width: 30px;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/admission/output-onlinegiftools.gif" alt=""> 4th Convocation - Registration Open </a>
                       </div>
                       <div class="notification-item text-dark para1">
                         <a href="#" style="display: block; padding: 15px; border-bottom: 1px solid #ddd; text-decoration: none; color: inherit;"><img style="width: 30px;" src="assets/img/event-img/arrow-new.png" alt=""> International Seminar by Royal Global University in association with ELTAI, September, 2024 </a>
                       </div>
                       <div class="notification-item text-dark para1">
                         <a href="#" style="display: block; padding: 15px; border-bottom: 1px solid #ddd; text-decoration: none; color: inherit;"><img style="width: 30px;" src="assets/img/event-img/arrow-new.png" alt=""> Advertisement No. : DST-SERB-01/2024 </a>
                       </div>
                       <div class="notification-item text-dark para1">
                         <a href="#" style="display: block; padding: 15px; border-bottom: 1px solid #ddd; text-decoration: none; color: inherit;">Viksit Bharat 2047</a>
                       </div>
                       <div class="notification-item text-dark para1">
                         <a href="#" style="display: block; padding: 15px; border-bottom: 1px solid #ddd; text-decoration: none; color: inherit;">East Zone Vice Chancellors' Meet, 2023 on 'Integrating Bharatiya Knowledge System (BKS) with Higher Education'</a>
                       </div>

                       <div class="notification-item text-dark para1 pt-5">
                         <a href="#" style="display: block; padding: 15px; border-bottom: 1px solid #ddd; text-decoration: none; color: inherit;"><img style="width: 30px;" src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/admission/output-onlinegiftools.gif" alt=""> 4th Convocation - Registration Open </a>
                       </div>
                       <div class="notification-item text-dark para1">
                         <a href="#" style="display: block; padding: 15px; border-bottom: 1px solid #ddd; text-decoration: none; color: inherit;"><img style="width: 30px;" src="assets/img/event-img/arrow-new.png" alt=""> International Seminar by Royal Global University in association with ELTAI, September, 2024 </a>
                       </div>
                       <div class="notification-item text-dark para1">
                         <a href="#" style="display: block; padding: 15px; border-bottom: 1px solid #ddd; text-decoration: none; color: inherit;"><img style="width: 30px;" src="assets/img/event-img/arrow-new.png" alt=""> Advertisement No. : DST-SERB-01/2024 </a>
                       </div>
                       <div class="notification-item text-dark para1">
                         <a href="#" style="display: block; padding: 15px; border-bottom: 1px solid #ddd; text-decoration: none; color: inherit;">Viksit Bharat 2047</a>
                       </div>
                       <div class="notification-item text-dark para1">
                         <a href="#" style="display: block; padding: 15px; border-bottom: 1px solid #ddd; text-decoration: none; color: inherit;">East Zone Vice Chancellors' Meet, 2023 on 'Integrating Bharatiya Knowledge System (BKS) with Higher Education'</a>
                       </div>


                     </div>
                   </div>
                  <a href="https://rgu.ac/notifications"> <h2 class="para1 fw-bold pt-3 text-center" style="color: #27467A;">View All Notifications -></h2> </a>
                 </div>

                 <style>
                   @keyframes scrollUp {
                     0% {
                       top: 100%;
                     }
                     100% {
                       top: -100%;
                     }
                   }

                   /* Pause the animation when hovering over the notification-wrapper */
                   .notification-wrapper:hover {
                     animation-play-state: paused;
                   }

                   /* Add hover effect for links */
                   .notification-item a:hover {
                     text-decoration: underline;
                   }
                 </style>

               </div>
           </div>
           </div>
           <!--End Event-->

           <!--campus life-->
           <section
                   class="elementor-section elementor-top-section elementor-element elementor-element-f03cf62 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                   data-id="f03cf62" data-element_type="section"
                   data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                   <div class="elementor-container elementor-column-gap-no">
                       <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8bd58a9"
                           data-id="8bd58a9" data-element_type="column">
                           <div class="elementor-widget-wrap elementor-element-populated">
                               <div class="elementor-element elementor-element-2d6d76a elementor-widget elementor-widget-go-content-tab"
                                   data-id="2d6d76a" data-element_type="widget"
                                   data-widget_type="go-content-tab.default">
                                   <div class="elementor-widget-container">
                                       <div class="kd-course-3-area p-relative pt-105 pb-60 fix">
                                           <div class="kd-course-1-bg-img img-cover fix">
                                               <img decoding="async" src="mobile-assets/index/head2.svg" alt="">
                                           </div>
                                           <div class="container kd-container-1 txaa-slide-down-1">
                                               <!-- sectiont-title -->
                                               <div class="kd-course-1-scn-title">
                                                   <div class="left">
                                                       <!-- <h6
                                                       class="kd-subtitle-1 kd-subtitle-ani-1 has-clr-2 elementor-kadu-sub para1">
                                                       <img style="width: 40x; height: 40px;" src="assets/img/cap.svg"
                                                           alt="">

                                                       RGU Campus
                                                   </h6> -->
                                                       <h1 style="color: #FF9A1E; font-weight: 800;"
                                                           class="elementor-gt-heading kd-section-title-1 kd-title-ani kd-split-text has-clr-white headd1 ">
                                                           Our Campus Life</h1>
                                                   </div>

                                                   <div class="right txaa-fade-right">
                                                       <ul class="kd-course-1-tabs-btn" id="myTab" role="tablist">
                                                           <li class="nav-item" role="presentation">
                                                               <button
                                                                   class="nav-link active kd-heading-1 para1 fw-bold text-dark"
                                                                   id="home-tab0" data-bs-toggle="tab"
                                                                   data-bs-target="#home0" type="button" role="tab"
                                                                   aria-controls="home0"
                                                                   aria-selected="true">Campus</button>
                                                           </li>
                                                           <li class="nav-item" role="presentation">
                                                               <button class="nav-link  kd-heading-1 para1 text-dark"
                                                                   id="home-tab1" data-bs-toggle="tab"
                                                                   data-bs-target="#home1" type="button" role="tab"
                                                                   aria-controls="home1" aria-selected="true">Residence
                                                                   Life</button>
                                                           </li>
                                                           <li class="nav-item" role="presentation">
                                                               <button class="nav-link  kd-heading-1 para1 text-dark"
                                                                   id="home-tab2" data-bs-toggle="tab"
                                                                   data-bs-target="#home2" type="button" role="tab"
                                                                   aria-controls="home2" aria-selected="true">Sports &
                                                                   Exercise</button>
                                                           </li>
                                                           <li class="nav-item" role="presentation">
                                                               <button class="nav-link  kd-heading-1 para1 text-dark"
                                                                   id="home-tab3" data-bs-toggle="tab"
                                                                   data-bs-target="#home3" type="button" role="tab"
                                                                   aria-controls="home3"
                                                                   aria-selected="true">Amenities</button>
                                                           </li>

                                                       </ul>
                                                   </div>
                                               </div>

                                               <!-- tabs-content -->
                                               <div class="tab-content kd-course-3-tabs-content-wrap txaa-slide-down-1-item"
                                                   id="myTabContent">

                                                   <div class="tab-pane fade animated fadeInUp show active" id="home0"
                                                       role="tabpanel" aria-labelledby="home-tab0">
                                                       <div class="kd-course-3-tabs-content">
                                                           <div class="left-content">
                                                               <h4 class="kd-heading-1 kd-font-900 headd1 item-title">
                                                                   Campus Life</h4>

                                                               <div class="para1 muted" style="text-align: justify;" >
                                                                   <p style="color: #323232 !important;">Recognized as
                                                                       the best private university in Assam,
                                                                       The Assam Royal Global University offers a
                                                                       vibrant and dynamic
                                                                       campus life
                                                                       that significantly enhances the educational
                                                                       experience. Our campus is bustling with a
                                                                       variety of
                                                                       extracurricular
                                                                       activities, including cultural festivals,
                                                                       academic
                                                                       clubs, sports teams, and volunteer
                                                                       organizations.
                                                                       These activities
                                                                       provide students with opportunities to develop
                                                                       essential life skills such as leadership,
                                                                       teamwork,
                                                                       and time management,
                                                                       while also allowing them to explore their
                                                                       interests
                                                                       and passions beyond the classroom.</p>
                                                               </div>

                                                           </div>

                                                           <!-- right -->
                                                           <div class="right-content">
                                                               <div class="rounded">
                                                                   <div class="kd-price-4-content">
                                                                       <div id="carouselExampleControls"
                                                                           class="carousel slide"
                                                                           data-bs-ride="carousel">
                                                                           <div class="carousel-inner">
                                                                               <div class="carousel-item active">
                                                                                  <a href="campus-life-departmental-store.html"><img src="mobile-assets/index/1.svg"
                                                                                       class="d-block rounded"
                                                                                       style="width: 100%;" alt="..."></a>
                                                                               </div>
                                                                               <div class="carousel-item">
                                                                                 <a href="infrastructure.html"><img src="mobile-assets/index/5.svg"
                                                                                       class="d-block rounded"
                                                                                       style="width: 100%;" alt="..."></a>
                                                                               </div>
                                                                               <div class="carousel-item">
                                                                                  <a href="game.html"> <img src="mobile-assets/index/7.svg"
                                                                                       class="d-block rounded"
                                                                                       style="width: 100%;" alt="..."></a>
                                                                               </div>
                                                                               <div class="carousel-item">
                                                                                  <a href="clubs.html"><img src="mobile-assets/index/4.svg"
                                                                                       class="d-block rounded"
                                                                                       style="width: 100%;" alt="..."></a>
                                                                               </div>
                                                                               <div class="carousel-item">
                                                                                  <a href="hostel-life.html"> <img src="mobile-assets/index/3.svg"
                                                                                       class="d-block rounded"
                                                                                       style="width: 100%;" alt="..."></a>
                                                                               </div>
                                                                               <div class="carousel-item">
                                                                                  <a href="Student_Affairs.html"> <img src="mobile-assets/index/6.svg"
                                                                                       class="d-block rounded"
                                                                                       style="width: 100%;" alt="..."></a>
                                                                               </div>
                                                                               <div class="carousel-item">
                                                                                 <a href="Royal_Fests.html"><img src="mobile-assets/index/2.svg"
                                                                                       class="d-block rounded"
                                                                                       style="width: 100%;" alt="..."></a>
                                                                               </div>
                                                                           </div>
                                                                           <button class="carousel-control-prev"
                                                                               type="button"
                                                                               data-bs-target="#carouselExampleControls"
                                                                               data-bs-slide="prev">
                                                                               <span class="carousel-control-prev-icon"
                                                                                   aria-hidden="true"></span>
                                                                               <span
                                                                                   class="visually-hidden">Previous</span>
                                                                           </button>
                                                                           <button class="carousel-control-next"
                                                                               type="button"
                                                                               data-bs-target="#carouselExampleControls"
                                                                               data-bs-slide="next">
                                                                               <span class="carousel-control-next-icon"
                                                                                   aria-hidden="true"></span>
                                                                               <span
                                                                                   class="visually-hidden">Next</span>
                                                                           </button>
                                                                       </div>
                                                                   </div>
                                                               </div>

                                                               <!-- <div class="kd-course-3-tabs-content-action text-center">
                                                               <h5
                                                                   class="kd-heading-1 kd-font-700 has-clr-white action-link">
                                                                   get your quality skills certificate from RGU</h5>
                                                               <a href="#" aria-label="name"
                                                                   class="kd-pr-btn-1 text-uppercase">
                                                                   <span class="text" data-back="get started now"
                                                                       data-front="get started now"></span>
                                                               </a>
                                                           </div> -->
                                                               <!-- <div class="kd-course-3-tabs-content-il-1">
                                                               <img decoding="async"
                                                                   src="https://themexriver.com/wp/kadu/wp-content/uploads/2024/06/course-3-il-1.webp"
                                                                   alt="">
                                                           </div> -->

                                                           </div>

                                                       </div>
                                                   </div>
                                                   <div class="tab-pane fade animated fadeInUp " id="home1"
                                                       role="tabpanel" aria-labelledby="home-tab1">
                                                       <div class="kd-course-3-tabs-content">
                                                           <div class="left-content">
                                                               <h4 class="kd-heading-1 kd-font-900 headd1 item-title">
                                                                   Residence Life</h4>

                                                               <div class="para1" style="text-align: justify;">
                                                                   <p class="para1 text-dark"> The Assam Royal Global University residence halls
                                                                       aim at
                                                                       enhancing the educational experience of students
                                                                       by
                                                                       providing all the
                                                                       comforts and conveniences they need to succeed.
                                                                       Beautifully situated in the midst of an
                                                                       eco-friendly
                                                                       and green campus,
                                                                       the separate in-house hostels for boys and girls
                                                                       are
                                                                       equipped with adequate facilities for holistic
                                                                       mental and physical
                                                                       growth. The hostel environment will help each
                                                                       boarder get the most out of their time during
                                                                       the
                                                                       period of stay. Close proximity
                                                                       of the hostels to the academic buildings
                                                                       facilitates
                                                                       frequent interactions between studentsand the
                                                                       faculties even during
                                                                       periods of vacation and on holidays.</p>
                                                               </div>
                                                               <div class="">
                                                                   <a href="hostel-life.html" rel="nofollow"
                                                                       aria-label="name"
                                                                       class="kd-pr-btn-1 text-uppercase has-pr-clr">
                                                                       <span class="text" data-back="explore"
                                                                           data-front="Explore"></span>
                                                                       <span class="icon">
                                                                           <i class="fa-solid fa-arrow-right"></i>
                                                                       </span>
                                                                   </a>
                                                               </div>

                                                           </div>

                                                           <!-- right -->
                                                           <div class="right-content">
                                                               <div
                                                                   class="kd-course-3-tabs-content-video img-cover fix">
                                                                   <img decoding="async"
                                                                       src="mobile-assets/index/residence.jpg"
                                                                       alt="">

                                                               </div>
                                                           </div>

                                                       </div>
                                                   </div>
                                                   <div class="tab-pane fade animated fadeInUp " id="home2"
                                                       role="tabpanel" aria-labelledby="home-tab2">
                                                       <div class="kd-course-3-tabs-content">
                                                           <div class="left-content">
                                                               <h4 class="kd-heading-1 kd-font-900 headd1 item-title">
                                                                   Games & Sports</h4>

                                                               <div class="para1" style="text-align: justify;">
                                                                   <p class="para1 text-dark">There are multiple sport facilities to keep our
                                                                       students engaged and physically fit. Our campus
                                                                       has
                                                                       outdoor game
                                                                       facilities like Cricket, Football, Basketball,
                                                                       tennis, baseball, athletics and so on. Its
                                                                       international standard indoor
                                                                       sports complex “The Cube” offers a variety of
                                                                       indoor
                                                                       games including badminton courts, squash,
                                                                       billiards,
                                                                       and table
                                                                       tennis. Fitness conscious students can go for a
                                                                       jog
                                                                       around the scenic university campus or work out
                                                                       at
                                                                       the well-equipped
                                                                       gymnasium available both at the Boys and Girls
                                                                       hostel. The Gymnasium is equipped with various
                                                                       equipment like treadmills,
                                                                       dumbbells & plates, weights, shoulder press,
                                                                       leg-pull, leg extension, incline shoulder,
                                                                       double
                                                                       twisters, etc.</p>
                                                               </div>
                                                               <div class="">
                                                                   <a href="sports.html" rel="nofollow"
                                                                       aria-label="name"
                                                                       class="kd-pr-btn-1 text-uppercase has-pr-clr">
                                                                       <span class="text" data-back="explore"
                                                                           data-front="Explore"></span>
                                                                       <span class="icon">
                                                                           <i class="fa-solid fa-arrow-right"></i>
                                                                       </span>
                                                                   </a>
                                                               </div>
                                                           </div>

                                                           <!-- right -->
                                                           <div class="right-content">
                                                               <div
                                                                   class="kd-course-3-tabs-content-video img-cover fix">
                                                                   <img decoding="async"
                                                                       src="mobile-assets/index/sports.jpg" alt="">

                                                               </div>

                                                           </div>

                                                       </div>
                                                   </div>
                                                   <div class="tab-pane fade animated fadeInUp " id="home3"
                                                       role="tabpanel" aria-labelledby="home-tab3">
                                                       <div class="kd-course-3-tabs-content">
                                                           <div class="left-content">
                                                               <h4 class="kd-heading-1 kd-font-900 headd1 item-title">
                                                                   Amenities</h4>

                                                               <div class="para1" style="text-align: justify;">
                                                                   <p class="para1 text-dark">A sensational rejuvenation and beauty experience.
                                                                       Kurls and Spykes, Guwahati, is a wellness and
                                                                       beauty
                                                                       lounge for both
                                                                       men and women. It offers an unmatched array of
                                                                       services designed to renew, refresh and
                                                                       replenish
                                                                       one’s soul. As a
                                                                       leading hair studio, Kurls and Spykes offer warm
                                                                       hospitality, an inviting atmosphere and
                                                                       top-notch
                                                                       services to wide and
                                                                       varied client base which also includes business
                                                                       and
                                                                       leisure travellers. It offers non exhaustive
                                                                       range
                                                                       of services
                                                                       including a host of hair services such as
                                                                       haircut,
                                                                       hair colour, creative makeover, keratin and
                                                                       bridal
                                                                       makeup services
                                                                       using some internationally renowned brands.</p>
                                                               </div>

                                                               <div class="">
                                                                   <a href="salon-new.html" rel="nofollow"
                                                                       aria-label="name"
                                                                       class="kd-pr-btn-1 text-uppercase has-pr-clr">
                                                                       <span class="text" data-back="explore"
                                                                           data-front="Explore"></span>
                                                                       <span class="icon">
                                                                           <i class="fa-solid fa-arrow-right"></i>
                                                                       </span>
                                                                   </a>
                                                               </div>

                                                           </div>

                                                           <!-- right -->
                                                           <div class="right-content">
                                                               <div
                                                                   class="kd-course-3-tabs-content-video img-cover fix">
                                                                   <img decoding="async"
                                                                       src="mobile-assets/index/amenities.jpg"
                                                                       alt="">

                                                               </div>
                                                           </div>

                                                       </div>
                                                   </div>

                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
           </section>
           <!--campus life-->

           <!--Courses-->
           <div data-elementor-type="wp-page" data-elementor-id="2266" class="elementor elementor-2266 m-0 p-0">
                   <section
                       class="elementor-section elementor-top-section elementor-element elementor-element-63fb9c7 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                       data-id="63fb9c7" data-element_type="section">
                       <div class="elementor-column-gap-default"
                           style="padding-left: 50px; padding-right: 50px; padding-bottom: 50px;">
                           <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-aa60b72"
                               data-id="aa60b72" data-element_type="column">
                               <div class="elementor-widget-wrap elementor-element-populated">
                                   <div class="elementor-element elementor-element-9b5574a elementor-widget elementor-widget-go-s-heading text-center"
                                       data-id="9b5574a" data-element_type="widget"
                                       data-widget_type="go-s-heading.default">
                                       <div class="elementor-widget-container">
                                           <div class="prthalign">
                                               <!-- <h6 class="kd-subtitle-1 kd-subtitle-ani-1 elementor-kadu-sub"
                                           style="font-family:Georgia, 'Montserrat', sans-serif !important; font-size: 22px;">
                                               <img style="width: 40x; height: 40px;" src="assets/img/cap.svg" alt="">

                                               RGU Programmes
                                           </h6> -->
                                           <h2 class="headd1 pb-4" style="color: #27467A; font-size: 50px; font-weight: 700;">Explore Our <span style="font-weight: 500; color: #EF991F;">Courses</span></h2>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="elementor-element elementor-element-cbc3c3f elementor-widget elementor-widget-go-course-item"
                                       data-id="cbc3c3f" data-element_type="widget"
                                       data-widget_type="go-course-item.default">
                                       <div class="elementor-widget-container">
                                           <div class="row txaa-slide-down-1">

                                               <div class="col-lg-4 col-md-6 txaa-slide-down-1-item">
                                                   <a href="doctoral-programme.html">
                                                       <div class="kd-course-2-card"
                                                           style="border: solid 2px rgb(225, 225, 225);">
                                                           <div class="main-img fix img-cover">
                                                               <img fetchpriority="high" decoding="async" width="357"
                                                                   height="220" src="mobile-assets/index/c6.svg"
                                                                   class="attachment-kadu-357x220 size-kadu-357x220 wp-post-image"
                                                                   alt="" />
                                                           </div>
                                                       </div>
                                                   </a>
                                               </div>

                                               <div class="col-lg-4 col-md-6 txaa-slide-down-1-item">
                                                   <a href="programs.html">
                                                       <div class="kd-course-2-card"
                                                           style="border: solid 2px rgb(225, 225, 225);">
                                                           <div class="main-img fix img-cover">
                                                               <img decoding="async" width="357" height="220"
                                                                   src="mobile-assets/index/c7.svg"
                                                                   class="attachment-kadu-357x220 size-kadu-357x220 wp-post-image"
                                                                   alt="" />
                                                           </div>
                                                       </div>
                                                   </a>
                                               </div>
                                               <div class="col-lg-4 col-md-6 txaa-slide-down-1-item">
                                                   <a href="programs.html">
                                                       <div class="kd-course-2-card"
                                                           style="border: solid 2px rgb(225, 225, 225);">
                                                           <div class="main-img fix img-cover">
                                                               <img decoding="async" width="357" height="220"
                                                                   src="mobile-assets/index/c8.svg"
                                                                   class="attachment-kadu-357x220 size-kadu-357x220 wp-post-image"
                                                                   alt="" />
                                                           </div>
                                                       </div>
                                                   </a>
                                               </div>
                                           </div>

                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </section>
           </div>
           <!--End Courses-->

           <!--Labs-->
           <section class="container-fluid" style="background-image: url('mobile-assets/index/lab-new1.png'); background-size: cover;">
               <div class="elementor-column-gap-default pt-5 pb-5">
                   <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-818362c"
                       data-id="818362c" data-element_type="column">
                       <div class="elementor-widget-wrap">


                           <div class="elementor-element elementor-element-bf98367 elementor-widget elementor-widget-go-features"
                               data-id="bf98367" data-element_type="widget" data-widget_type="go-features.default">
                               <div class="row">
                                   <div class="col-lg-3">

                                   </div>
                                   <div class="col-lg-1"></div>
                                   <div class="col-lg-8 text-center" style="overflow: hidden; padding: 52px 0px 0px 0px;">
                                       <div class="elementor-element elementor-element-e22f91b elementor-widget elementor-widget-go-s-heading"
                               data-id="e22f91b" data-element_type="widget"
                               data-widget_type="go-s-heading.default">
                               <div class="elementor-widget-container">
                                   <div class="prthalign">
                                       <h1 style="font-weight: 900; color: #27467A;"
                                       class="elementor-gt-heading kd-title-ani kd-split-text headd1">
                                       LABORATORIES AND <span style="font-weight: 500; color: #EF991F;">STUDIOS</span></h1>
                                   </div>
                               </div>
                           </div>
                                       <div class="elementor-widget-container pt-4">
                                           <div class="kd-course-4-slider p-relative">
                                               <div class="swiper-container kd-course-4-active">
                                                   <div class="swiper-wrapper" style="margin-right: 0px !important; padding: 0px !important;">
                                                       <div class="swiper-slide" style="margin-right: 0px !important; padding: 0px !important;">
                                                           <div class="kd-course-4-item" style="margin: 0px !important; padding: 0px !important;">
                                                               <div style="background-color: #ffffff;"
                                                                   class="kd-course-2-card shadow-sm">
                                                                   <div class="main-img fix img-cover">

                                                                       <img decoding="async"
                                                                           src="mobile-assets/index/computer1.jpg" alt="List">

                                                                       <!-- <span class="item-duration kd-heading-1">1h 33m</span>

                                                                               <span class="item-student kd-heading-1">34,000
                                                                                   students</span> -->
                                                                   </div>

                                                                   <div class="card-content">
                                                                       <h4 class="title kd-heading-1 kd-font-900 para1">
                                                                           <a href="lab-computer.html" aria-label="name">Computer Lab</a>
                                                                       </h4>
                                                                       <a href="lab-computer.html" aria-label="name"
                                                                           class="item-btn para1 text-capitalize">
                                                                           <i class="fa-solid fa-angles-right"></i>
                                                                           Read More </a>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="swiper-slide" >
                                                           <div class="kd-course-4-item" style="margin-right: 0px !important; padding: 0px !important">
                                                               <div style="background-color: #ffffff;"
                                                                   class="kd-course-2-card shadow-sm">
                                                                   <div class="main-img fix img-cover">

                                                                       <img decoding="async"
                                                                           src="mobile-assets/index/electric1.jpg" alt="List">

                                                                       <!-- <span class="item-duration kd-heading-1">1h 33m</span>

                                                                               <span class="item-student kd-heading-1">34,000
                                                                                   students</span> -->

                                                                   </div>

                                                                   <div class="card-content">
                                                                       <h4 class="title kd-heading-1 kd-font-900 para1">
                                                                           <a href="lab-electrical.html" aria-label="name">Electrical Lab</a>
                                                                       </h4>
                                                                       <a href="lab-electrical.html" aria-label="name"
                                                                           class="item-btn para1 text-capitalize">
                                                                           <i class="fa-solid fa-angles-right"></i>
                                                                           Read More </a>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>

                                                       <div class="swiper-slide" style="margin-right: 0px !important; padding: 0px !important">
                                                           <div class="kd-course-4-item">
                                                               <div style="background-color: #ffffff;"
                                                                   class="kd-course-2-card shadow-sm">
                                                                   <div class="main-img fix img-cover">

                                                                       <img decoding="async"
                                                                           src="mobile-assets/index/language1.jpg" alt="List">

                                                                       <!-- <span class="item-duration kd-heading-1">1h 33m</span>

                                                                               <span class="item-student kd-heading-1">34,000 -->
                                                                       students</span>

                                                                   </div>

                                                                   <div class="card-content">
                                                                       <h4 class="title kd-heading-1 kd-font-900 para1">
                                                                           <a href="lab-language-lab.html" aria-label="name">Language Lab</a>
                                                                       </h4>
                                                                       <a href="lab-language-lab.html" aria-label="name"
                                                                           class="item-btn para1 text-capitalize">
                                                                           <i class="fa-solid fa-angles-right"></i>
                                                                           Read More </a>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>



                                                       <div class="swiper-slide" style="margin-right: 0px !important;">
                                                           <div class="kd-course-4-item">
                                                               <div style="background-color: #ffffff;"
                                                                   class="kd-course-2-card shadow-sm">
                                                                   <div class="main-img fix img-cover">

                                                                       <img decoding="async"
                                                                           src="mobile-assets/index/physicalchem1.jpg"
                                                                           alt="List">



                                                                   </div>

                                                                   <div class="card-content">
                                                                       <h4 class="title kd-heading-1 kd-font-900 para1">
                                                                           <a href="lab-chemistry.html" aria-label="name">Chemistry Lab</a>
                                                                       </h4>
                                                                       <a href="lab-chemistry.html" aria-label="name"
                                                                           class="item-btn para1 text-capitalize">
                                                                           <i class="fa-solid fa-angles-right"></i>
                                                                           Read More </a>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="swiper-slide" style="margin-right: 0px !important;">
                                                           <div class="kd-course-4-item">
                                                               <div style="background-color: #ffffff;"
                                                                   class="kd-course-2-card shadow-sm">
                                                                   <div class="main-img fix img-cover">

                                                                       <img decoding="async"
                                                                           src="mobile-assets/index/physics1.jpg" alt="List">



                                                                   </div>

                                                                   <div class="card-content">
                                                                       <h4 class="title kd-heading-1 kd-font-900 para1">
                                                                           <a href="lab-physics.html" aria-label="name">Physics Lab</a>
                                                                       </h4>
                                                                       <a href="lab-physics.html" aria-label="name"
                                                                           class="item-btn para1 text-capitalize">
                                                                           <i class="fa-solid fa-angles-right"></i>
                                                                           Read More </a>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>

                                                       <div class="swiper-slide" style="margin-right: 0px !important;">
                                                           <div class="kd-course-4-item">
                                                               <div style="background-color: #ffffff;"
                                                                   class="kd-course-2-card shadow-sm">
                                                                   <div class="main-img fix img-cover">

                                                                       <img decoding="async"
                                                                           src="mobile-assets/index/architecture1.jpg"
                                                                           alt="List">
                                                                   </div>

                                                                   <div class="card-content">
                                                                       <h4 class="title kd-heading-1 kd-font-900 para1">
                                                                           <a href="lab-architecture.html" aria-label="name">Architecture
                                                                               Lab</a>
                                                                       </h4>
                                                                       <a href="lab-architecture.html" aria-label="name"
                                                                           class="item-btn para1 text-capitalize">
                                                                           <i class="fa-solid fa-angles-right"></i>
                                                                           Read More </a>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>


                                                   </div>
                                               </div>
                                           </div>
                                           <div class="elementor-element elementor-element-de83d2a elementor-widget elementor-widget-ft-btn mt-5"
                           data-id="de83d2a" data-element_type="widget" data-widget_type="ft-btn.default">
                           <div class="elementor-widget-container">
                               <div class="prthalign">
                                   <a href="laboratories.html" rel="nofollow" aria-label="name"
                                       class="kd-pr-btn-1 text-uppercase has-pr-clr">
                                       <span class="text para1" style="font-size: 15px;" data-back="Explore All Labs"
                                           data-front="Explore All Labs"></span>
                                       <span class="icon">
                                           <i class="fa-solid fa-arrow-right"></i>
                                       </span>
                                   </a>
                               </div>
                           </div>
                       </div>
                                       </div>
                                   </div>
                               </div>



                           </div>
                       </div>
                   </div>
               </div>
           </section>
           <!--End Labs-->

           <!-- new advantage -->
           <section style="padding: 50px 0px 0px 0px; background-color: #13223b;"
                   class=" elementor-section elementor-top-section elementor-element elementor-element-5b53581 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                   data-id="5b53581" data-element_type="section"
                   data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                   <div class="elementor-container elementor-column-gap-default">
                       <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-d665cde"
                           data-id="d665cde" data-element_type="column">
                           <div class="elementor-widget-wrap elementor-element-populated">
                               <div class="elementor-element elementor-element-dbbd17f elementor-widget elementor-widget-go-img--bx"
                                   data-id="dbbd17f" data-element_type="widget" data-widget_type="go-img--bx.default">
                                   <div class="elementor-widget-container">
                                       <div class="kd-about-4-left ">
                                           <div class="mb-5 fix img-cover">
                                               <img decoding="async" style="height: 600px !important;"
                                                   src="mobile-assets/index/mobileadvpic.png" alt="">
                                           </div>
                                           <div class="kd-about-4-img-2 fix img-cover txxa-add-class">
                                               <img decoding="async" style="height: 600px !important;"
                                                   src="mobile-assets/index/mobileyellow.png" alt="">

                                           </div>


                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-be85421"
                           data-id="be85421" data-element_type="column">
                           <div class="elementor-widget-wrap elementor-element-populated">
                               <div class="elementor-element elementor-element-f5f1b7b elementor-widget elementor-widget-go-s-heading"
                                   data-id="f5f1b7b" data-element_type="widget"
                                   data-widget_type="go-s-heading.default">
                                   <div class="elementor-widget-container">

                                       <div class="prthalign">
                                           <h1 style="font-weight: 700;" class="mobile-headd1 text-light">RGU Advantages</h1>
                                           <div class="elementor-gt-desc kd-para-2 scn-disc"></div>
                                       </div>
                                   </div>
                               </div>
                               <div class="elementor-element elementor-element-3c95150 elementor-widget elementor-widget-go-kadu-accordion"
                                   data-id="3c95150" data-element_type="widget"
                                   data-widget_type="go-kadu-accordion.default">
                                   <div class="elementor-widget-container">
                                       <div class="kd-about-4-according mb-60" id="accordionExample_449027">
                                           <div class="kd-about-4-according-item mb-20">
                                               <div class="item-header" id="heading449027-a06e874">
                                                   <button class="item-title kd-heading-2 kd-font-700 " type="button"
                                                       data-bs-toggle="collapse"
                                                       data-bs-target="#collapse449027-a06e874" aria-expanded="false"
                                                       aria-controls="collapse449027-a06e874">
                                                       <span style="background-color:#FF9A1E;" class="icon">
                                                           <i aria-hidden="true" class="flaticon flaticon-star"></i>
                                                       </span>
                                                       <span
                                                           style="font-weight: 400; font-size: 25px;"
                                                           class="text headd2">Affordable</span>
                                                   </button>
                                               </div>
                                               <div id="collapse449027-a06e874"
                                                   class="accordion-collapse collapse show"
                                                   aria-labelledby="heading449027-a06e874"
                                                   data-bs-parent="#accordionExample_449027">
                                                   <div class="item-body">
                                                       <p class="kd-para-2 disc has-para-sm mobile-headd3">Highly affordable
                                                           Fees.</p>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="kd-about-4-according-item mb-20">
                                               <div class="item-header" id="heading449027-c4b748f">
                                                   <button class="item-title kd-heading-2 kd-font-700 collapsed"
                                                       type="button" data-bs-toggle="collapse"
                                                       data-bs-target="#collapse449027-c4b748f" aria-expanded="false"
                                                       aria-controls="collapse449027-c4b748f">
                                                       <span style="background-color:#FF9A1E;" class="icon">
                                                           <i aria-hidden="true" class="flaticon flaticon-star"></i>
                                                       </span>
                                                       <span
                                                           style="font-weight: 400; font-size: 25px;"
                                                           class="text headd2">Hi-Tech and Vibrant Campus</span>
                                                   </button>
                                               </div>
                                               <div id="collapse449027-c4b748f" class="accordion-collapse collapse "
                                                   aria-labelledby="heading449027-c4b748f"
                                                   data-bs-parent="#accordionExample_449027">
                                                   <div class="item-body">
                                                       <p class="kd-para-2 disc has-para-sm mobile-headd3">Most Hi-Tech and
                                                           Vibrant Campus with culturally diverse community in the
                                                           North-East with fully air-conditioned built-up area</p>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="kd-about-4-according-item mb-20">
                                               <div class="item-header" id="heading449027-d109252">
                                                   <button class="item-title kd-heading-2 kd-font-700 collapsed"
                                                       type="button" data-bs-toggle="collapse"
                                                       data-bs-target="#collapse449027-d109252" aria-expanded="false"
                                                       aria-controls="collapse449027-d109252">
                                                       <span style="background-color:#FF9A1E;" class="icon">
                                                           <i aria-hidden="true" class="flaticon flaticon-star"></i>
                                                       </span>
                                                       <span
                                                           style="font-weight: 400; font-size: 30px;"
                                                           class="text headd2">Research</span>
                                                   </button>
                                               </div>
                                               <div id="collapse449027-d109252" class="accordion-collapse collapse "
                                                   aria-labelledby="heading449027-d109252"
                                                   data-bs-parent="#accordionExample_449027">
                                                   <div class="item-body">
                                                       <p class="kd-para-2 disc has-para-sm headd3">Research intensive
                                                           and Updated Curriculum.</p>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="kd-about-4-according-item mb-20">
                                               <div class="item-header" id="heading449027-c4b7489">
                                                   <button class="item-title kd-heading-2 kd-font-700 collapsed"
                                                       type="button" data-bs-toggle="collapse"
                                                       data-bs-target="#collapse449027-c4b7489" aria-expanded="false"
                                                       aria-controls="collapse449027-c4b748f">
                                                       <span style="background-color:#FF9A1E;" class="icon">
                                                           <i aria-hidden="true" class="flaticon flaticon-star"></i>
                                                       </span>
                                                       <span
                                                           style="font-weight: 400; font-size: 30px;"
                                                           class="text headd2">Worldwide Students</span>
                                                   </button>
                                               </div>
                                               <div id="collapse449027-c4b7489" class="accordion-collapse collapse "
                                                   aria-labelledby="heading449027-c4b7489"
                                                   data-bs-parent="#accordionExample_449027">
                                                   <div class="item-body">
                                                       <p class="kd-para-2 disc has-para-sm headd3">Students from 6
                                                           Countries</p>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="kd-about-4-according-item mb-20">
                                               <div class="item-header" id="heading449027-c4b7486">
                                                   <button class="item-title kd-heading-2 kd-font-700 collapsed"
                                                       type="button" data-bs-toggle="collapse"
                                                       data-bs-target="#collapse449027-c4b7486" aria-expanded="false"
                                                       aria-controls="collapse449027-c4b748f">
                                                       <span style="background-color:#FF9A1E;" class="icon">
                                                           <i aria-hidden="true" class="flaticon flaticon-star"></i>
                                                       </span>
                                                       <span
                                                           style="font-weight: 400; font-size: 30px;"
                                                           class="text headd2">Location</span>
                                                   </button>
                                               </div>
                                               <div id="collapse449027-c4b7486" class="accordion-collapse collapse "
                                                   aria-labelledby="heading449027-c4b7486"
                                                   data-bs-parent="#accordionExample_449027">
                                                   <div class="item-body">
                                                       <p class="kd-para-2 disc has-para-sm headd3">Centrally Located
                                                           in Guwahati City with easy access to all modern amenities.
                                                       </p>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="kd-about-4-according-item mb-20">
                                               <div class="item-header" id="heading449027-c4b7485">
                                                   <button class="item-title kd-heading-2 kd-font-700 collapsed"
                                                       type="button" data-bs-toggle="collapse"
                                                       data-bs-target="#collapse449027-c4b7485" aria-expanded="false"
                                                       aria-controls="collapse449027-c4b748f">
                                                       <span style="background-color:#FF9A1E;" class="icon">
                                                           <i aria-hidden="true" class="flaticon flaticon-star"></i>
                                                       </span>
                                                       <span
                                                           style="font-weight: 400; font-size: 30px;"
                                                           class="text headd2">Rich Capital</span>
                                                   </button>
                                               </div>
                                               <div id="collapse449027-c4b7485" class="accordion-collapse collapse "
                                                   aria-labelledby="heading449027-c4b7485"
                                                   data-bs-parent="#accordionExample_449027">
                                                   <div class="item-body">
                                                       <p class="kd-para-2 disc has-para-sm headd3">Rich Intellectual
                                                           Capital with strong distinguished academicians and domain
                                                           experts.</p>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
           </section>
           <!-- new advantage end-->

           </div>
           <!--Innovation & Publication end-->

           <!--Footprint-->
           <img src="mobile-assets/index/footprint.jpeg" alt="">
           <!-- footprint end  -->

       <!--Testimonial-->
       <div style="background-image: url(mobile-assets/index/s2-bg-img-1.webp);"
       class="pt-5 elementor-element elementor-element-41f1d73 elementor-widget elementor-widget-go-s-heading"
          data-id="41f1d73" data-element_type="widget" data-widget_type="go-s-heading.default">
          <div class="elementor-widget-container" style="padding-left: 50px;">
              <div class="prthalign text-center">
                  <h6 class=" kd-subtitle-1 kd-subtitle-ani-1 elementor-kadu-sub headd3">
                      <img style="width: 40x; height: 40px;" src="mobile-assets/index/cap.svg" alt="">
                      RGU Testimonials
                  </h6>
                  <h1 style="font-weight: 700;"
                      class="elementor-gt-heading text-dark kd-title-ani kd-split-text headd1">
                      They Speak About Us</h1>
              </div>
          </div>

      <div class="hover01 column row" style="padding-left: 1px;">
         <div class="col-lg-4" style="padding: 0px !important; margin: 0px !important; ">
              <figure> <a href="success.html"><img style="border: 2px solid #fff;" src="mobile-assets/index/alumni-student.png" /></a></figure>
          </div>

          <div class="col-lg-4" style="padding: 0px !important; margin: 0px !important;">
              <figure><a href="recruiters.html"><img style="border: 2px solid #fff;" src="mobile-assets/index/recruiters.png" /></a></figure>

          </div>
          <div class="col-lg-4" style="padding: 0px !important; margin: 0px !important;">
              <figure><a href="footprints.html"><img style="border: 2px solid #fff;" src="mobile-assets/index/dignitaries.png" /></a></figure>

          </div>
      </div>
       </div>
       <!-- testimonial end -->

    </div>
    </section>
@endsection
