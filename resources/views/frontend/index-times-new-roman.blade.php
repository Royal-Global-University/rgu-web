@extends('frontend.master')
@push('styles')
    <style>
        .headd1 {
                font-family: 'Times New Roman', Times, serif !important;
                font-size: 45px;
            }

            .headd2 {
                font-family: 'Times New Roman', Times, serif !important;
                font-size: 35px;
            }

            .para1 {
                font-family: 'Times New Roman', Times, serif !important;
                font-size: 18px;
            }

            .headd3 {
                font-family: 'Times New Roman', Times, serif !important;
                font-size: 22px;
            }
    </style>
    <!-- for mobile  -->
    <style>
        .mobile-headd1 {
            font-family: 'Times New Roman', Times, serif !important;
            font-size: 2.3rem;
            /* 32px */
            font-weight: 700;
        }

        .mobile-headd2 {
            font-family: 'Times New Roman', Times, serif !important;
            font-size: 1.6rem;
            /* 24px */
            font-weight: 600;
        }

        .mobile-headd3 {
            font-family: 'Times New Roman', Times, serif !important;
            font-size: 1.25rem;
            /* 20px */
            font-weight: 500;
        }

        .mobile-para1 {
            font-family: 'Times New Roman', Times, serif !important;
            font-size: 1.1rem;
            /* 16px */
            font-weight: 400;

        }

        .mobile-caption {
            font-family: 'Times New Roman', Times, serif !important;
            font-size: 0.875rem;
            /* 14px */
            font-weight: 400;
        }
    </style>

@endpush
@section('content')

    <section class="mobile">

        <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/yourphonenumber" class="whatsapp-float" target="_blank">
       <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
    </a>

       <!-- Floating Section with Frosted Background -->
       <div class="container">
    <div class="floating-wrapper" style="
       position: fixed; bottom: 20px; left: 50%; transform: translateX(-50%);
       width: 90%; max-width: 400px; z-index: 800;
       backdrop-filter: blur(30px);
       background: #27467A; /* Frosty effect */
       border-radius: 10px;
       box-shadow: 0 1px 1px #ffffff97;
       border: 1px solid #27467A;
       padding: 15px;">

       <div class="d-flex align-items-center justify-content-between" style="gap: 10px;">
           <span class="mobile-para1" style="
               font-weight: bold; font-size: 18px; line-height: 1.3;
               color: #fff; flex-grow: 1;">
              Admission open for 2025 - 2026
           </span>

           <a href="https://admissions.rgu.ac" target="_blank"
               class="btn mobile-para1 pulse-btn" style="
               background-color: #ffb300; color: #fff;
               font-weight: bold; padding: 10px 14px; border-radius: 5px;
               text-decoration: none; white-space: nowrap;">
               Apply Now
           </a>
       </div>
    </div>
       </div>


    <!-- menu  -->
    <div class="navbar">
    <button class="menu-toggle"><i class="fas fa-bars"></i></button>
    <div class="logo">
       <img style="height: 70px;" src="sarang/logo/logo-dark.png" alt="Logo">
    </div>
    <div style="background-color: #27467A; color: #fff; border-radius: 8px;" class="call-icon p-2"><i class="fas fa-phone-alt"></i></div>
    </div>

    <div class="menu-overlay"></div>

    <nav class="menu">
    <div class="d-flex align-items-center">
       <img style="width: 200px;" src="sarang/logo/logo-dark.png" alt="">
       <button class="close-menu"><i class="fas fa-times"></i></button>
    </div>

    <hr>

    <ul>

       <li onclick="toggleSubmenu('discover')" style="display: flex; align-items: center; justify-content: space-between;">
           <span class="mobile-headd3 text-dark">DISCOVER RGU</span>
           <i class="fas fa-chevron-down" style="margin-left: auto;"></i>
       </li>
           <ul class="submenu mobile-para1" id="discover">

               <h2 class="mobile-headd3 pt-3 fw-bold" style="color: #e68900;">ABOUT US</h2>

              <a class="mobile-para1" style="color: #27467A;" href="preface.html"><li>PREFACE</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="leadership.html"><li>LEADERSHIP TEAM</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="officers.html"><li>OFFICERS</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="vision_mission.html"><li>VISION AND MISSION</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="Statutes_Ordinance.html"><li>STATUTES, ORDINANCE AND POLICIES</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="facilities.html"><li>FACILITIES</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="Social_Outreach.html"><li>SOCIAL OUTREACH</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="footprints.html"><li>ROYAL FOOTPRINTS</li></a>


              <h2 class="mobile-headd3 pt-3 fw-bold" style="color: #e68900;">WHAT SET US APART</h2>

              <a class="mobile-para1" style="color: #27467A;" href="recognition.html"><li>RECOGNITION AND ACCREDITATION</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="Association_&_Tieup.html"><li>ASSOCIATIONS AND TIE UPS</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="award.html"><li>AWARDS AND HONORS</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="recruiters.html"><li>TOP RECRUITERS</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="#!"><li>SUCCESS STORIES</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="360tour.html"><li>360 TOUR</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="diversechoices.html"><li>DIVERSE CHOICES</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="diversity-inclusion.html"><li>DIVERSITY AND INCLUSION</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="location.html"><li>STRATEGIC LOCATION</li></a>

              <h2 class="mobile-headd3 pt-3 fw-bold" style="color: #e68900;">STATUTORY BODIES</h2>

              <a class="mobile-para1" style="color: #27467A;" href="governing-body.html"><li>GOVERNING BODY</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="board_of_management.html"><li>BOARD OF MANAGEMENT</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="academic-council1.html"><li>ACADEMIC COUNCIL</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="finance-committee.html"><li>FINANCE COMMITTEE</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="Internal-Complaints.html"><li>INTERNAL COMPLAINTS COMMITTEE</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="equal-opportunities-cell.html"><li>EQUAL OPPORTUNITIES CELL</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="proctorial.html"><li>PROCTORAL BOARD</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="organogram-planning.html"><li>ORGANOGRAM AND PLANNING</li></a>

           </ul>


       <li onclick="toggleSubmenu('academics')" style="display: flex; align-items: center; justify-content: space-between;">
           <span class="mobile-headd3 text-dark">ACADEMICS</span>
           <i class="fas fa-chevron-down" style="margin-left: auto;"></i>
       </li>
           <ul class="submenu mobile-para1" id="academics">


              <a class="mobile-para1" style="color: #27467A;" href="schools-rgu.html"><li>OUR SCHOOLS AND FACULTIES</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="Deans.html"><li>DEANS</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="doctoral-programme.html"><li>DOCTORAL PROGRAMME</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="achievements.html"><li>ACHIEVEMENTS</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="Academic-Calendar.html"><li>ACADEMIC CALENDAR</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="Academics_Guest_Lectures_Workshops.html"><li>GUEST LECTURES/ WORKSHOPS</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="innovation-ICC.html"><li>INSTITUTION'S INNOVATION COUNCIL (IIC-RGU)</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="Library-Resources.html"><li>LIBRARY</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="laboratories.html"><li>LABORATORIES</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="teaching-practice.html"><li>TEACHING PRACTICES</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="hrdc.html"><li>ROYAL CENTERE FOR HUMAN RESOURCE DEVELOPMENT (RCHRD)</li></a>

           </ul>


       <li onclick="toggleSubmenu('admission')" style="display: flex; align-items: center; justify-content: space-between;">
           <span class="mobile-headd3 text-dark">ADMISSION</span>
           <i class="fas fa-chevron-down" style="margin-left: auto;"></i>
       </li>
           <ul class="submenu mobile-para1" id="admission">


              <a class="mobile-para1" style="color: #27467A;" href="admission-faq.html"><li>ADMISSION FAQs</li></a>
              <a class="mobile-para1 text-danger" style="color: #27467A;" href="https://admissions.rgu.ac/"><li>APPLY NOW!</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="doctoral-programme.html"><li>COURSE FEE</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="achievements.html"><li>ELIGIBILITY AND SELECTION CRITERIA</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="Academic-Calendar.html"><li>GENERAL ELECTIVE</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="Academics_Guest_Lectures_Workshops.html"><li>HOW TO APPLY?</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="#"><li>PROGRAMMES</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="Library-Resources.html"><li>SCHOLARSHIP AND FUNDING</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="#"><li>DEAN'S LISTER</li></a>
              <a class="mobile-para1" style="color: #27467A;" href="teaching-practice.html"><li>SCHEMES FOR DIFFERENTLY-ABLED</li></a>

           </ul>

    </ul>
    </nav>

    <script>
    document.querySelector('.menu-toggle').addEventListener('click', function() {
       document.querySelector('.menu').classList.toggle('open');
       document.querySelector('.menu-overlay').style.display = 'block';
    });

    document.querySelector('.menu-overlay').addEventListener('click', function() {
       document.querySelector('.menu').classList.remove('open');
       document.querySelector('.menu-overlay').style.display = 'none';
    });

    document.querySelector('.close-menu').addEventListener('click', function() {
       document.querySelector('.menu').classList.remove('open');
       document.querySelector('.menu-overlay').style.display = 'none';
    });

    function toggleSubmenu(id) {
       var submenu = document.getElementById(id);
       if (submenu.style.display === "block") {
           submenu.style.display = "none";
       } else {
           submenu.style.display = "block";
       }
    }

    window.addEventListener('scroll', function() {
       var navbar = document.querySelector('.navbar');
       if (window.scrollY > 50) {
           navbar.classList.add('scrolled');
       } else {
           navbar.classList.remove('scrolled');
       }
    });
    </script>

    <!-- Mobile Video -->
    <div class="mobile-video" style="position: relative; width: 100%; height: auto;">
    <img src="mob-thumb.png" id="video-thumbnail" alt="Video Thumbnail"
       style="width: 100%; height: auto; position: absolute; top: 0; left: 0; object-fit: cover; z-index: 1; transition: opacity 1s ease;">

    <video playsinline autoplay loop muted id="video-bg" oncanplay="showVideo()"
       style="width: 100%; height: auto; display: block;">
       <source src="mobile-assets/index/Websitemobilevideooo.mp4" type="video/mp4">
    </video>
    </div>
    <!-- Mobile Video -->

    <script>
    function showVideo() {
       let thumbnail = document.getElementById("video-thumbnail");
       thumbnail.style.opacity = "0";  // Fade out
       setTimeout(() => {
           thumbnail.style.display = "none";  // Remove after transition
       }, 1000);  // Matches transition duration
    }
    </script>



       <!-- slider banners  -->
       <div id="carouselExample" class="carousel slide mobile-image-slider" data-bs-ride="carousel">
           <div class="carousel-inner">
             <div class="carousel-item active">
               <img src="mobile-assets/new-details/research-web.png" class="d-block w-100" alt="...">
             </div>
             <div class="carousel-item">
               <img src="mobile-assets/new-details/about-web.png" class="d-block w-100" alt="...">
             </div>

           </div>
       </div>
       <!-- slider banners  -->

       <!-- discover rgu -->
       <div style="background-image: url(mobile-assets/index/bg-explorergu-new.png); background-size: cover; height: 90vh; width: 100%;">
           <div class="p-3">
               <h2 class="mobile-headd1" style="color: #27467A; font-weight: 500; font-size: 40px;">Explore <span style="font-weight: 900; color: #27467A;">RGU</span></h2>
               <h2 class="mobile-headd3 pb-1" style="color: #e68900; font-weight: 500; font-size: 22px;">About Our <span style="font-weight: 900; color: #e68900;">University</span></h2>

               <p style="color: #27467A; text-align: justify; line-height: 1.4;" class="mobile-para1">The Assam Royal Global University (RGU), one of the premium universities in India, has continuously acted as a leadership platform that aligns interests of industries, entrepreneurs, and the youth since its establishment in 2017. Aimed at creating and sustaining an environment wherein employment and entrepreneurship can flourish with collaborative efforts amongst an extensive network of influential corporates, individual members, and academic institutes, The Assam Royal Global University has been able to provide necessary resources, knowledge, and support to create effective employment and entrepreneurship opportunities.</p>
           </div>
       </div>
       <!-- discover rgu -->

       <!-- happening at rgu  -->
       <section style="padding: 30px; background-image: url(mobile-assets/index/bg.svg);">

           <h2 class="mobile-headd1 pb-4" style="color: #27467A;">In and Around at <span style="font-weight: 500; color: #EF991F;">RGU</span></h2>

           <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">

               <div class="carousel-inner">
                 <div class="carousel-item active">
                   <img src="events/mob1.png" class="d-block w-100 rounded" alt="...">
                 </div>
                 <div class="carousel-item">
                   <img src="events/mob2.jpeg" class="d-block w-100 rounded" alt="...">
                 </div>
                 <div class="carousel-item">
                   <img src="events/mob3.jpeg" class="d-block w-100 rounded" alt="...">
                 </div>
               </div>

           </div>
       </section>
       <!-- happening at rgu  -->

       <!-- mobile Notifications -->
       <div class="container mt-3">
       <div class="row mobile-marquee-row align-items-center">
       <!-- Left Side: Marquee -->
       <div class="col-9 overflow-hidden">
           <div class="mobile-marquee">
               <span class="mobile-headd3">📢 International Seminar by The Assam Royal Global University in association with ELTAI, September, 2024 | 🎓 Advertisement No. : DST-SERB-01/2024 | 🏆 East Zone Vice Chancellors' Meet, 2023 on 'Integrating Bharatiya Knowledge System (BKS) with Higher Education' </span>
           </div>
       </div>

       <!-- Right Side: Button -->
       <div class="col-3 text-end">
          <a href=""> <button class="btn mobile-para1 mobile-btn">View All</button></a>
       </div>
       </div>
       </div>
       <!-- mobile Notifications -->

       <!-- fast facts mobile  -->
       <section style="padding: 0px 30px;"
       class="elementor-section elementor-top-section pt-3  elementor-element elementor-element-943e56e elementor-section-boxed elementor-section-height-default elementor-section-height-default pb-5"
       data-id="943e56e" data-element_type="section">
       <div class="elementor-container elementor-column-gap-default">
           <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-23f6d50"
               data-id="23f6d50" data-element_type="column">
               <div class="elementor-widget-wrap elementor-element-populated">
                   <div class="elementor-element elementor-element-6cdc10e elementor-widget elementor-widget-go-s-heading"
                       data-id="6cdc10e" data-element_type="widget"
                       data-widget_type="go-s-heading.default">
                       <div class="elementor-widget-container">
                           <div class="prthalign">

                               <h6 class="mobile-headd2 kd-subtitle-1 kd-subtitle-ani-1 elementor-kadu-sub">
                                   <img style="width: 40x; height: 40px;" src="mobile-assets/index/cap.svg" alt="">
                                   Info
                               </h6>
                               <h2 class="mobile-headd1 elementor-gt-heading kd-title-ani kd-split-text" style="color: #27467A;">Fast <span style="font-weight: 600; color: #EF991F;">facts</span></h2>
                               <div class="mobile-para1 elementor-gt-desc kd-para-1 disc wow" data-splitting>
                                   Transformative and Multidisciplinary Education</span>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-878c6de"
               data-id="878c6de" data-element_type="column">
               <div class="elementor-widget-wrap elementor-element-populated">
                   <div class="elementor-element elementor-element-4923d22 elementor-widget elementor-widget-go-category"
                       data-id="4923d22" data-element_type="widget" data-widget_type="go-category.default">
                       <div class="elementor-widget-container">
                           <div class="kd-pop-cat-1-slider">
                               <div class="swiper-container fix kd-pop-cat-1-active">
                                   <div class="swiper-wrapper">
                                       <div class="swiper-slide">
                                           <div class="kd-pop-cat-1-item text-center">
                                               <div class="icon d-flex align-items-center justify-content-center"
                                                   style="background-color: antiquewhite;">
                                                   <h3 class="text-dark fw-bold">22</h3>
                                               </div>
                                               <h4 class="title kd-heading-1 has-clr-white kd-font-700 has-bg-1"
                                                   style="background-color: #27467a;">
                                                   <a href="" aria-label="name"> Years Of Education </a>
                                               </h4>
                                           </div>
                                       </div>
                                       <div class="swiper-slide">
                                           <div class="kd-pop-cat-1-item text-center">
                                               <div class="icon d-flex align-items-center justify-content-center"
                                                   style="background-color: antiquewhite;">
                                                   <h3 class="text-dark fw-bold">8000+</h3>
                                               </div>
                                               <h4 class="title kd-heading-1 has-clr-white kd-font-700 has-bg-1"
                                                   style="background-color: #27467a;">
                                                   <a aria-label="name"> Students </a>
                                               </h4>
                                           </div>
                                       </div>
                                       <div class="swiper-slide">
                                           <div class="kd-pop-cat-1-item text-center">
                                               <div class="icon d-flex align-items-center justify-content-center"
                                                   style="background-color: antiquewhite;">
                                                   <h3 class="text-dark fw-bold">460+</h3>
                                               </div>
                                               <h4 class="title kd-heading-1 has-clr-white kd-font-700 has-bg-1"
                                                   style="background-color: #27467a;">
                                                   <a aria-label="name"> Faculty Members </a>
                                               </h4>
                                           </div>
                                       </div>
                                       <div class="swiper-slide">
                                           <div class="kd-pop-cat-1-item text-center">
                                               <div class="icon d-flex align-items-center justify-content-center"
                                                   style="background-color: antiquewhite;">
                                                   <h3 class="text-dark fw-bold">23</h3>
                                               </div>
                                               <h4 class="title kd-heading-1 has-clr-white kd-font-700 has-bg-1"
                                                   style="background-color: #27467a;">
                                                   <a aria-label="name"> Schools</a>
                                               </h4>
                                           </div>
                                       </div>
                                       <div class="swiper-slide">
                                           <div class="kd-pop-cat-1-item text-center">
                                               <div class="icon d-flex align-items-center justify-content-center"
                                                   style="background-color: antiquewhite;">
                                                   <h3 class="text-dark fw-bold">800+</h3>
                                               </div>
                                               <h4 class="title kd-heading-1 has-clr-white kd-font-700 has-bg-1"
                                                   style="background-color: #27467a;">
                                                   <a aria-label="name"> Research Publications </a>
                                               </h4>
                                           </div>
                                       </div>
                                       <div class="swiper-slide">
                                           <div class="kd-pop-cat-1-item text-center">
                                               <div class="icon d-flex align-items-center justify-content-center"
                                                   style="background-color: antiquewhite;">
                                                   <h3 class="text-dark fw-bold">100+</h3>
                                               </div>
                                               <h4 class="title kd-heading-1 has-clr-white kd-font-700 has-bg-1"
                                                   style="background-color: #27467a;">
                                                   <a aria-label="name"> Hi-Tech Labs </a>
                                               </h4>
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
       <!-- fast facts mobile  -->

       <!--campus life-->

       <!--campus life-->

       <!-- explore our courses at rgu  -->
       <section style="padding: 30px;">
           <h2 class="mobile-headd1 pb-4" style="color: #27467A; font-weight: 800;">Explore Our <span style="font-weight: 500; color: #EF991F;">Courses</span></h2>

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

       </section>
       <!-- explore our courses at rgu  -->

       <!--Labs-->
       <div style="padding: 20px; background-color: #FFF8F0;">
           <h2 class="mobile-headd1 pb-3" style="color: #27467A;">Laboratories <span style="font-weight: 500; color: #EF991F;">and Studio</span></h2>

           <div id="mobile-carouselExample" class="carousel slide" data-bs-ride="carousel">
               <div class="carousel-inner">

                   <div class="carousel-item active">

                        <a href="lab-electrical.html"><div class="card d-flex flex-column shadow-sm rounded" style="background-color: #fff; height: 450px; border: none;">
                           <div class="p-3">
                               <img style="height: 300px; width: 100%;" src="mobile-assets/index/electric1.jpg" class="d-block w-100" alt="..." style="border-radius: 10px;">
                           </div>
                           <div class="card-body d-flex flex-column flex-grow-1">
                               <h2 class="mobile-headd1" style="color: #27467A; text-align: left;">Electrical <span style="font-weight: 500; color: #27467A;">Lab</span></h2>
                               <h2 class="mobile-headd3" style="color: #27467A; font-weight: 800; text-align: left;">Explore <span style="font-weight: 500; color: #27467A;">More</span></h2>

                           </div>
                   </div></a>

                   </div>

                   <div class="carousel-item">

                      <a href="lab-architecture.html"><div class="card d-flex flex-column shadow-sm" style="background-color: #fff; border: none; height: 450px; border-radius: 20px;">
                           <div class="p-3">
                             <img style="height: 300px; width: 100%;" src="mobile-assets/index/architecture1.jpg" class="img-fluid rounded"/>
                           </div>
                           <div class="card-body d-flex flex-column flex-grow-1">
                               <h2 class="mobile-headd1" style="color: #27467A; text-align: left;">Architecture <span style="font-weight: 500; color: #27467A;">Lab</span></h2>
                               <h2 class="mobile-headd3" style="color: #27467A; font-weight: 800; text-align: left;">Explore <span style="font-weight: 500; color: #27467A;">More</span></h2>

                           </div>
                   </div></a>

                   </div>

                   <div class="carousel-item">

                       <a href="lab-computer.html"><div class="card d-flex flex-column shadow-sm" style="background-color: #fff; border: none; height: 450px; border-radius: 20px;">
                           <div class="p-3">
                             <img style="height: 300px; width: 100%;" src="mobile-assets/index/computer1.jpg" class="img-fluid rounded"/>
                           </div>
                           <div class="card-body d-flex flex-column flex-grow-1">
                               <h2 class="mobile-headd1" style="color: #27467A; text-align: left;">Computer <span style="font-weight: 500; color: #27467A;">Lab</span></h2>
                               <h2 class="mobile-headd3" style="color: #27467A; font-weight: 800; text-align: left;">Explore <span style="font-weight: 500; color: #27467A;">More</span></h2>

                           </div>
                   </div></a>

                   </div>

                   <div class="carousel-item">

                       <a href="lab-engineering_drawing.html"><div class="card d-flex flex-column shadow-sm" style="background-color: #fff; border: none; height: 450px; border-radius: 20px;">
                           <div class="p-3">
                             <img style="height: 300px; width: 100%;" src="mobile-assets/index/engineering1.jpg" class="img-fluid rounded"/>
                           </div>
                           <div class="card-body d-flex flex-column flex-grow-1">
                               <h2 class="mobile-headd1" style="color: #27467A; text-align: left;">Engineering <span style="font-weight: 500; color: #27467A;">Lab</span></h2>
                               <h2 class="mobile-headd3" style="color: #27467A; font-weight: 800; text-align: left;">Explore <span style="font-weight: 500; color: #27467A;">More</span></h2>

                           </div>
                   </div></a>

                   </div>



                   <div class="carousel-item">

                       <a href="lab-foodteach.html"><div class="card d-flex flex-column shadow-sm" style="background-color: #fff; border: none; height: 450px; border-radius: 20px;">
                           <div class="p-3">
                             <img style="height: 300px; width: 100%;" src="mobile-assets/index/foodtech1.jpg" class="img-fluid rounded"/>
                           </div>
                           <div class="card-body d-flex flex-column flex-grow-1">
                               <h2 class="mobile-headd1" style="color: #27467A; text-align: left;">Food Tech <span style="font-weight: 500; color: #27467A;">Lab</span></h2>
                               <h2 class="mobile-headd3" style="color: #27467A; font-weight: 800; text-align: left;">Explore <span style="font-weight: 500; color: #27467A;">More</span></h2>

                           </div>
                   </div></a>

                   </div>



                   <div class="carousel-item">

                       <a href="lab-language-lab.html"><div class="card d-flex flex-column shadow-sm" style="background-color: #fff; border: none; height: 450px; border-radius: 20px;">
                           <div class="p-3">
                             <img style="height: 300px; width: 100%;" src="mobile-assets/index/language1.jpg" class="img-fluid rounded"/>
                           </div>
                           <div class="card-body d-flex flex-column flex-grow-1">
                               <h2 class="mobile-headd1" style="color: #27467A; text-align: left;">Language <span style="font-weight: 500; color: #27467A;">Lab</span></h2>
                               <h2 class="mobile-headd3" style="color: #27467A; font-weight: 800; text-align: left;">Explore <span style="font-weight: 500; color: #27467A;">More</span></h2>

                           </div>
                   </div></a>

                   </div>

                   <div class="carousel-item">

                       <a href="lab-physics.html"><div class="card d-flex flex-column shadow-sm" style="background-color: #fff; border: none; height: 450px; border-radius: 20px;">
                           <div class="p-3">
                             <img style="height: 300px; width: 100%;" src="mobile-assets/index/physics1.jpg" class="img-fluid rounded"/>
                           </div>
                           <div class="card-body d-flex flex-column flex-grow-1">
                               <h2 class="mobile-headd1" style="color: #27467A; text-align: left;">Physics <span style="font-weight: 500; color: #27467A;">Lab</span></h2>
                               <h2 class="mobile-headd3" style="color: #27467A; font-weight: 800; text-align: left;">Explore <span style="font-weight: 500; color: #27467A;">More</span></h2>

                           </div>
                   </div></a>

                   </div>


               </div>

           </div>
       </div>
       <!--Labs-->

       <!-- new advantage -->
       <section style="padding: 80px 30px 0px 30px; background-color: #13223b;"
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
                                   <img decoding="async" class="rounded" style="height: 400px !important;"
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
                                               style="font-weight: 400; font-size: 30px;"
                                               class="text mobile-para1">Affordable</span>
                                       </button>
                                   </div>
                                   <div id="collapse449027-a06e874"
                                       class="accordion-collapse collapse show"
                                       aria-labelledby="heading449027-a06e874"
                                       data-bs-parent="#accordionExample_449027">
                                       <div class="item-body">
                                           <p class="kd-para-2 disc has-para-sm mobile-para1">Highly affordable
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
                                               style="font-weight: 400; font-size: 30px;"
                                               class="text mobile-para1">Hi-Tech and Vibrant Campus</span>
                                       </button>
                                   </div>
                                   <div id="collapse449027-c4b748f" class="accordion-collapse collapse "
                                       aria-labelledby="heading449027-c4b748f"
                                       data-bs-parent="#accordionExample_449027">
                                       <div class="item-body">
                                           <p class="kd-para-2 disc has-para-sm mobile-para1">Most Hi-Tech and
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
                                               class="text mobile-para1">Research</span>
                                       </button>
                                   </div>
                                   <div id="collapse449027-d109252" class="accordion-collapse collapse "
                                       aria-labelledby="heading449027-d109252"
                                       data-bs-parent="#accordionExample_449027">
                                       <div class="item-body">
                                           <p class="kd-para-2 disc has-para-sm mobile-para1">Research intensive
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
                                               class="text mobile-para1">Worldwide Students</span>
                                       </button>
                                   </div>
                                   <div id="collapse449027-c4b7489" class="accordion-collapse collapse "
                                       aria-labelledby="heading449027-c4b7489"
                                       data-bs-parent="#accordionExample_449027">
                                       <div class="item-body">
                                           <p class="kd-para-2 disc has-para-sm mobile-para1">Students from 6
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
                                               class="text mobile-para1">Location</span>
                                       </button>
                                   </div>
                                   <div id="collapse449027-c4b7486" class="accordion-collapse collapse "
                                       aria-labelledby="heading449027-c4b7486"
                                       data-bs-parent="#accordionExample_449027">
                                       <div class="item-body">
                                           <p class="kd-para-2 disc has-para-sm mobile-para1">Centrally Located
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
                                               class="text mobile-para1">Rich Capital</span>
                                       </button>
                                   </div>
                                   <div id="collapse449027-c4b7485" class="accordion-collapse collapse "
                                       aria-labelledby="heading449027-c4b7485"
                                       data-bs-parent="#accordionExample_449027">
                                       <div class="item-body">
                                           <p class="kd-para-2 disc has-para-sm mobile-para1">Rich Intellectual
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

       <!--Mobile Footprint-->
       <img src="mobile-assets/index/footprints2.png" alt="">
       <!--Mobile Footprint end  -->

       <!--Mobile Testimonial-->
       <section style="padding: 40px 30px; background-image: url(mobile-assets/index/s2-bg-img-1.webp);">
           <h6 class="mobile-headd3 text-center kd-subtitle-1 kd-subtitle-ani-1 elementor-kadu-sub">
               <img style="width: 40x; height: 40px;" src="mobile-assets/index/cap.svg" alt="">
               RGU Testimonials
           </h6>
           <h2 class="mobile-headd1 pb-4 pt-3" style="color: #27467A;">They Speak <span style="font-weight: 500; color: #EF991F;">About Us</span></h2>

               <div class="row" style="display: flex; flex-direction: column;">
                   <a href="success.html"><img class="pb-3" src="mobile-assets/index/alumni-student.png" /></a>
                   <a href="recruiters.html"><img class="pb-3" src="mobile-assets/index/recruiters.png" /></a>
                   <a href="footprints.html"><img class="pb-3" src="mobile-assets/index/dignitaries.png" /></a>
               </div>

       </section>
       <!--Mobile Testimonial end -->

    </section>

    <section class="website">
    <div id="page" class="site site_wrapper">


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

       <!-- new nav bar  -->
       <nav class="navbar navbar-expand-lg" style="background-color: transparent; padding: 10px 100px; box-shadow: none; position: absolute !important;">
           <div class="container-fluid">

               <a class="navbar-brand" href="#">
                   <img  src="mobile-assets/logo/light_logo.png" alt="Logo" style="height: 100px;">
               </a>

               <div class="collapse navbar-collapse" id="navbarNav">
                   <ul class="navbar-nav" style="width: 100%; justify-content: space-around;">

                       <!-- Discover RGU -->
                       <li class="nav-item dropdown" style="position: relative;">
                           <a class="nav-link dropdown-toggle para1" href="#" style="color: white; font-weight: 600; font-size: 16px;">DISCOVER RGU</a>

                           <ul class="dropdown-menu p-3" style="display: none; position: absolute; top: 100%; left: 0; background: white; border-radius: 0; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: opacity 0.3s ease, transform 0.3s ease; opacity: 0; transform: translateY(10px); width: 800px; overflow: hidden; border-top: 3px solid #e68900;">
                               <div class="row" style="display: flex;">
                                   <div class="col-lg-4 p-2">
                                       <h2 class="para1 fw-bold text-center" style="color: #e68900;">ABOUT US</h2>
                                       <hr>
                                       <li><a class="dropdown-item para1" href="preface.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">PREFACE</a></li>
                                       <li><a class="dropdown-item para1" href="leadership.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">LEADERSHIP TEAM</a></li>
                                       <li><a class="dropdown-item para1" href="officers.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">OFFICERS</a></li>
                                       <li><a class="dropdown-item para1" href="vision-mission.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">VISION AND MISSION</a></li>
                                       <li><a class="dropdown-item para1" href="statutes-ordinance-policies.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">STATUTES, ORDINANCE <br> AND POLICIES</a></li>
                                       <li><a class="dropdown-item para1" href="facilities.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">FACILITIES</a></li>
                                       <li><a class="dropdown-item para1" href="social-outreach.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">SOCIAL OUTREACH</a></li>
                                       <li><a class="dropdown-item para1" href="footprints.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">ROYAL FOOTPRINTS</a></li>
                                   </div>

                                   <div class="col-lg-4 p-2">
                                       <h2 class="para1 fw-bold text-center" style="color: #e68900;">WHAT SETS US APART</h2>
                                       <hr>
                                       <li><a class="dropdown-item para1" href="recognition-accreditation.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">RECOGNITION AND <br> ACCREDITATION</a></li>
                                       <li><a class="dropdown-item para1" href="association-tieup.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">ASSOCIATIONS AND <br> TIE UPS</a></li>
                                       <li><a class="dropdown-item para1" href="award.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">AWARDS AND HONORS</a></li>
                                       <li><a class="dropdown-item para1" href="top-recruiters.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">TOP RECRUITERS</a></li>
                                       <li><a class="dropdown-item para1" href="success.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">SUCCESS STORIES</a></li>
                                       <li><a class="dropdown-item para1" href="360-tour.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">360° TOUR</a></li>
                                       <li><a class="dropdown-item para1" href="diversechoices.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">DIVERSE CHOICES</a></li>
                                       <li><a class="dropdown-item para1" href="diversity-inclusion.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">DIVERSITY AND INCLUSION</a></li>
                                       <li><a class="dropdown-item para1" href="strategic-location.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">STRATEGIC LOCATION</a></li>

                                   </div>

                                   <div class="col-lg-4 p-2">
                                       <h2 class="para1 fw-bold text-center" style="color: #e68900;">STATUTORY BODIES</h2>
                                       <hr>
                                       <li><a class="dropdown-item para1" href="governing-body.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">GOVERNING BODY</a></li>
                                       <li><a class="dropdown-item para1" href="board-of-management.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">BOARD OF MANAGEMENT</a></li>
                                       <li><a class="dropdown-item para1" href="academic-council.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">ACADEMIC COUNCIL</a></li>
                                       <li><a class="dropdown-item para1" href="finance-committee.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">FINANCE COMMITTEE</a></li>
                                       <li><a class="dropdown-item para1" href="internal-complaints-committee.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">INTERNAL COMPLAINTS <br> COMMITTEE</a></li>
                                       <li><a class="dropdown-item para1" href="anti-ragging.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">ANTI RAGGING <br> COMMITTEE</a></li>
                                       <li><a class="dropdown-item para1" href="equal-opportunities-cell.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">EQUAL OPPORTUNITIES <br> CELL</a></li>
                                       <li><a class="dropdown-item para1" href="proctorial.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">PROCTORAL BOARD</a></li>
                                       <li><a class="dropdown-item para1" href="organogram-planning.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">ORGANOGRAM AND <br> PLANNING</a></li>
                                   </div>
                               </div>

                           </ul>
                       </li>

                       <!-- Academics -->
                       <li class="nav-item dropdown" style="position: relative;">
                           <a class="nav-link dropdown-toggle para1" href="#" style="color: white; font-weight: 600; font-size: 16px;">ACADEMICS</a>
                           <ul class="dropdown-menu p-3" style="display: none; position: absolute; top: 100%; left: 0; background: white; border-radius: 0; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: opacity 0.3s ease, transform 0.3s ease; opacity: 0; transform: translateY(10px); width: 600px; overflow: hidden; border-top: 3px solid #e68900;">
                               <div class="row" style="display: flex;">
                                   <div class="col-lg-6 p-2">

                                       <li><a class="dropdown-item para1" href="schools-rgu.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">OUR SCHOOLS AND <br> FACULTIES</a></li>
                                       <li><a class="dropdown-item para1" href="deans.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">DEANS</a></li>
                                       <li><a class="dropdown-item para1" href="phd.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">DOCTORAL PROGRAMME</a></li>
                                       <li><a class="dropdown-item para1" href="achievements.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">ACHIEVEMENTS</a></li>
                                       <li><a class="dropdown-item para1" href="academic-calendar.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">ACADEMIC CALENDAR</a></li>
                                       <li><a class="dropdown-item para1" href="workshops-guest-lectures.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">GUEST LECTURES/ <br> WORKSHOPS</a></li>

                                   </div>

                                   <div class="col-lg-6 p-2">

                                       <li><a class="dropdown-item para1" href="innovation.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">INSTITUTION'S INNOVATION <br> COUNCIL (IIC-RGU)</a></li>
                                       <li><a class="dropdown-item para1" href="library-Resources.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">LIBRARY</a></li>
                                       <li><a class="dropdown-item para1" href="laboratories.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">LABORATORIES</a></li>
                                       <li><a class="dropdown-item para1" href="teaching-practice.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">TEACHING PRACTICES</a></li>
                                       <li><a class="dropdown-item para1" href="human-resource-development-centre.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">ROYAL CENTRE FOR HUMAN <br> RESOURCE DEVELOPMENT <br> (RCHRD)</a></li>

                                   </div>


                               </div>

                           </ul>
                       </li>

                       <!-- Admissions -->
                       <li class="nav-item dropdown" style="position: relative;">
                           <a class="nav-link dropdown-toggle para1" href="#" style="color: white; font-weight: 600; font-size: 16px;">ADMISSION</a>
                           <ul class="dropdown-menu" style="display: none; position: absolute; top: 100%; left: 0; background: white; border-radius: 0; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: opacity 0.3s ease, transform 0.3s ease; opacity: 0; transform: translateY(10px); width: 250px; border-top: 3px solid #e68900;">

                               <li><a class="dropdown-item para1" href="admission-faq.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">ADMISSION FAQs</a></li>
                               <li><a class="dropdown-item para1" target="_blank" href="https://admissions.rgu.ac/" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4; color: tomato;">APPLY NOW!</a></li>
                               <li><a class="dropdown-item para1" href="admission-programs-fees-structure.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">COURSE FEE</a></li>
                               <li><a class="dropdown-item para1" href="admission-general-elective.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">GENERAL ELECTIVE</a></li>
                               <li><a class="dropdown-item para1" href="admission-how-to-apply.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">HOW TO APPLY?</a></li>
                               <li><a class="dropdown-item para1" href="Programs.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">PROGRAMME</a></li>
                               <li class="dropdown-submenu" style="position: relative;">
                                   <a class="dropdown-item dropdown-toggle para1" href="#" style="font-size: 16px; font-weight: 500; padding: 10px 20px; line-height: 1.4;">SCHOLARSHIP AND <br> FUNDING</a>
                                   <ul class="dropdown-menu" style="display: none; position: absolute; top: 0; left: 100%; background: white; opacity: 0; transform: translateX(10px); transition: opacity 0.3s ease, transform 0.3s ease;">
                                       <li><a class="dropdown-item para1" href="scholarships.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px;">SCHOLARSHIPS</a></li>
                                       <li><a class="dropdown-item para1" href="deans-listers.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px;">DEAN'S LISTER</a></li>
                                   </ul>
                               </li>
                               <li><a class="dropdown-item para1" href="schemes-differently-abled.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">SCHEMES FOR <br> DIFFERENTLY-ABLED</a></li>

                           </ul>
                       </li>

                        <!-- Convocation -->
                        <li class="nav-item dropdown" style="position: relative;">
                           <a class="nav-link dropdown-toggle para1" href="#" style="color: white; font-weight: 600; font-size: 16px;">CONVOCATION</a>
                           <ul class="dropdown-menu" style="display: none; position: absolute; top: 100%; left: 0; background: white; border-radius: 0; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: opacity 0.3s ease, transform 0.3s ease; opacity: 0; transform: translateY(10px); width: 250px; border-top: 3px solid #e68900;">

                               <li><a class="dropdown-item para1" href="convocation-fourth.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">CONVOCATION FOUR</a></li>
                               <li><a class="dropdown-item para1" href="convocation-third.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">CONVOCATION THREE</a></li>
                               <li><a class="dropdown-item para1" href="convocation-second.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">CONVOCATION TWO</a></li>
                               <li><a class="dropdown-item para1" href="convocation-first.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">CONVOCATION ONE</a></li>

                           </ul>
                       </li>

                       <!-- Campus Life with Submenu -->
                       <li class="nav-item dropdown" style="position: relative;">
                           <a class="nav-link dropdown-toggle para1" href="#" style="color: white; font-weight: 600; font-size: 16px;">CAMPUS LIFE</a>
                           <ul class="dropdown-menu" style="display: none; position: absolute; top: 100%; left: -40%; background: white; border-radius: 0; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: opacity 0.3s ease, transform 0.3s ease; opacity: 0; transform: translateY(10px); width: 250px; border-top: 3px solid #e68900;">

                               <li class="dropdown-submenu" style="position: relative;">
                                   <a class="dropdown-item dropdown-toggle para1" href="#" style="font-size: 16px; font-weight: 500; padding: 10px 20px; line-height: 1.4;">AMENITIES</a>
                                   <ul class="dropdown-menu" style="display: none; position: absolute; top: 0; left: 100%; background: white; opacity: 0; transform: translateX(10px); transition: opacity 0.3s ease, transform 0.3s ease;">
                                       <li><a class="dropdown-item para1" href="banking-services.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px;">BANKING SERVICE</a></li>
                                       <li><a class="dropdown-item para1" href="department-store.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px;">DEPARTMENTAL STORE</a></li>
                                       <li><a class="dropdown-item para1" href="hangout.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px;">HANGOUT</a></li>
                                       <li><a class="dropdown-item para1" href="medical-facility.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px;">MEDICAL FACILITY</a></li>
                                       <li><a class="dropdown-item para1" href="counselling-cell.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px;">COUNSELLING CELL</a></li>
                                       <li><a class="dropdown-item para1" href="laundry.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px;">LAUNDRY</a></li>
                                       <li><a class="dropdown-item para1" href="salon.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px;">SALON</a></li>
                                       <li><a class="dropdown-item para1" href="stationary-store.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px;">STATIONARY STORE</a></li>
                                       <li><a class="dropdown-item para1" href="student-gallery.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px;">STUDENT GALLERY</a></li>
                                       <li><a class="dropdown-item para1" href="guest-house.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px;">GUEST HOUSE</a></li>
                                   </ul>
                               </li>

                               <li class="dropdown-submenu" style="position: relative;">
                                   <a class="dropdown-item dropdown-toggle para1" href="#" style="font-size: 16px; font-weight: 500; padding: 10px 20px; line-height: 1.4;">EVENTS</a>
                                   <ul class="dropdown-menu" style="display: none; position: absolute; top: 0; left: 100%; background: white; opacity: 0; transform: translateX(10px); transition: opacity 0.3s ease, transform 0.3s ease;">
                                       <li><a class="dropdown-item para1" href="happy-happening.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; line-height: 1.4;">HAPPY AND <br> HAPPENING CAMPUS</a></li>
                                       <li><a class="dropdown-item para1" href="royal-fests.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px;">ROYAL FEST</a></li>
                                   </ul>
                               </li>

                               <li><a class="dropdown-item para1" href="games&sports.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">GAMES AND SPORTS</a></li>

                               <li class="dropdown-submenu" style="position: relative;">
                                   <a class="dropdown-item dropdown-toggle para1" href="#" style="font-size: 16px; font-weight: 500; padding: 10px 20px; line-height: 1.4;">HOSTEL</a>
                                   <ul class="dropdown-menu" style="display: none; position: absolute; top: 0; left: 100%; background: white; opacity: 0; transform: translateX(10px); transition: opacity 0.3s ease, transform 0.3s ease;">
                                       <li><a class="dropdown-item para1" href="hostel-life.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px;">HOSTEL LIFE</a></li>
                                       <li><a class="dropdown-item para1" target="_blank" href="{{ asset('assets/img/pdf/Hostel Policy Rules 2024.pdf.html')}} style="font-size: 16px; font-weight: 500; padding: 10px 20px;">HOSTEL POLICY</a></li>
                                   </ul>
                               </li>

                               <li><a class="dropdown-item para1" href="infrastructure.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">INFRASTRUCTURE</a></li>
                               <li><a class="dropdown-item para1" href="clubs.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">CLUBS</a></li>
                               <li><a class="dropdown-item para1" href="student-affairs.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">STUDENT AFFAIRS</a></li>


                           </ul>
                       </li>

                       <!-- Placements -->
                       <li class="nav-item dropdown" style="position: relative;">
                           <a class="nav-link dropdown-toggle para1" href="#" style="color: white; font-weight: 600; font-size: 16px;">PLACEMENT</a>
                           <ul class="dropdown-menu" style="display: none; position: absolute; top: 100%; left: -30%; background: white; border-radius: 0; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: opacity 0.3s ease, transform 0.3s ease; opacity: 0; transform: translateY(10px); width: 250px; border-top: 3px solid #e68900;">

                               <li><a class="dropdown-item para1" href="placements-introduction.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">INTRODUCION</a></li>
                               <li><a class="dropdown-item para1" href="placements-activities.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">ACTIVITES UNDERTAKEN</a></li>
                               <li><a class="dropdown-item para1" href="placements-facilities.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">FACILITIES AVAILABLE</a></li>
                               <li><a class="dropdown-item para1" href="placements-process.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">PLACEMENT PROCESS</a></li>
                               <li><a class="dropdown-item para1" href="placements-events.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">RCCR EVENTS</a></li>
                               <li><a class="dropdown-item para1" href="top-recruiters.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">RECRUITERS</a></li>
                               <li><a class="dropdown-item para1" href="success.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">TESTIMONIAL</a></li>
                               <li><a class="dropdown-item para1" href="placement-contacts.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">CONTACTS</a></li>

                           </ul>
                       </li>

                       <!-- International -->
                       <li class="nav-item dropdown" style="position: relative;">
                           <a class="nav-link dropdown-toggle para1" href="#" style="color: white; font-weight: 600; font-size: 16px;">INTERNATIONAL</a>
                           <ul class="dropdown-menu" style="display: none; position: absolute; top: 100%; left: -30%; background: white; border-radius: 0; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: opacity 0.3s ease, transform 0.3s ease; opacity: 0; transform: translateY(10px); width: 250px; border-top: 3px solid #e68900;">

                               <li><a class="dropdown-item para1" href="international-fee-structure" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">COURSE FEE</a></li>
                               <li><a class="dropdown-item para1" href="international-faq.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">INTERNATIONAL FAQs</a></li>
                               <li><a class="dropdown-item para1" href="frro-process.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">FRRO PROCESS</a></li>
                               <li><a class="dropdown-item para1" href="how-to-apply-international.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">HOW TO APPLY?</a></li>
                               <li><a class="dropdown-item para1" href="international-student-helpline.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">INTERNATIONAL STUDENT <br> HELPLINE</a></li>
                               <li><a class="dropdown-item para1" href="campus-job.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">ON CAMPUS JOB</a></li>
                               <li><a class="dropdown-item para1" href="pre-arrival.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">PRE-ARRIVAL, POST-ARRIVAL</a></li>
                               <li><a class="dropdown-item para1" href="scholarship-international.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">SCHOLARSHIP FOR <br> INTERNATIONAL STUDENTS</a></li>
                               <li><a class="dropdown-item para1" href="visa-information.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">VISA INFORMATION</a></li>
                               <li><a class="dropdown-item para1" href="why-india.html" style="font-size: 16px; font-weight: 500; padding: 10px 20px; transition: background 0.3s ease; line-height: 1.4;">WHY INDIA?</a></li>

                           </ul>
                       </li>

                   </ul>
               </div>

           </div>
       </nav>

       <script>
           document.addEventListener("DOMContentLoaded", function() {
               document.querySelectorAll(".nav-item.dropdown").forEach(function(el) {
                   el.addEventListener("mouseenter", function() {
                       let dropdown = this.querySelector(".dropdown-menu");
                       if (dropdown) {
                           dropdown.style.display = "block";
                           setTimeout(() => {
                               dropdown.style.opacity = "1";
                               dropdown.style.transform = "translateY(0)";
                           }, 10);
                       }
                   });

                   el.addEventListener("mouseleave", function() {
                       let dropdown = this.querySelector(".dropdown-menu");
                       if (dropdown) {
                           dropdown.style.opacity = "0";
                           dropdown.style.transform = "translateY(10px)";
                           setTimeout(() => {
                               dropdown.style.display = "none";
                           }, 300);
                       }
                   });
               });

               document.querySelectorAll(".dropdown-submenu").forEach(function(el) {
                   el.addEventListener("mouseenter", function() {
                       let submenu = this.querySelector(".dropdown-menu");
                       if (submenu) {
                           submenu.style.display = "block";
                           setTimeout(() => {
                               submenu.style.opacity = "1";
                               submenu.style.transform = "translateX(0)";
                           }, 10);
                       }
                   });

                   el.addEventListener("mouseleave", function() {
                       let submenu = this.querySelector(".dropdown-menu");
                       if (submenu) {
                           submenu.style.opacity = "0";
                           submenu.style.transform = "translateX(10px)";
                           setTimeout(() => {
                               submenu.style.display = "none";
                           }, 300);
                       }
                   });
               });
           });


       </script>
       <!-- new nav bar  -->

       <section>
           <header>
               <div>



                   <div>

                       <!-- Carousel container for 4-image slider -->
                       <div id="imageCarousel" class="carousel slide carousel-container" data-bs-ride="carousel"
                           data-pause="false" data-interval="2000">

                           <!-- admission banner  -->
                           <section class="container border mb-3" style="background-color: #ffffff1c; box-shadow: -1px 3px 5px 0px rgba(255, 255, 255, 0.2); border-radius: 20px;  backdrop-filter: blur(20px);">

                               <div class="row" style="display: flex; align-items: center; justify-content: center; padding: 20px 10px;">

                                   <div class="col-lg-9">
                                       <h2 style="color: #fff; font-size: 30px;" class="headd3 fw-bold">
                                           Applications are now open for Admission in 2025 - 2026
                                       </h2>
                                       <p class="para1 text-white" style="font-size: 22px">
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
                                   <img src="home-banner/about-web-times.png" alt="Slide 1">
                               </div>
                               <div class="carousel-item">
                                   <img src="home-banner/research-web-times.png" alt="Slide 2">
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

           <img src="home-banner/dis-rgu-times.png" alt="">



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
                                           style="font-family:Georgia, 'Times New Roman', Times, serif !important; font-size: 22px;">
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
