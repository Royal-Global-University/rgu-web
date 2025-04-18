/*
	Author: themexriver
	Version: 1.0
*/


(function ($) {
"use strict";


//3D Animation / Tilt Js
$('.js-tilt').tilt({})

// smoooth scroll activation start
const lenis = new Lenis({
	duration: 1.2,	
})

function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}

requestAnimationFrame(raf)


// preloader
document.addEventListener("DOMContentLoaded", function () {

	let preloader = document.querySelector("#preloader");

	window.addEventListener('load', function(){

		if (preloader) {
			preloader.classList.add("preloaded");
			setTimeout(function () {
				  preloader.remove();
			}, 1000 ) ;

		}

		Splitting();

		// h1-start
		if($('.kd-hero-1-active').length) {
			function splitTextFunction(sliderDOM) {
				const slideActive = sliderDOM.querySelector(".swiper-slide-active");
				const slideCaption = slideActive.querySelector(".kd-hero-1-item-content .title");
				const oldActive = sliderDOM.querySelectorAll(".swiper-slide-prev, .swiper-slide-duplicate-prev");
				const oldCaptions = Array.from(oldActive).map(slide => slide.querySelector(".kd-hero-1-item-content .title"));
	
				gsap.set(oldCaptions, { autoAlpha: 0 });
				gsap.set(slideCaption, { autoAlpha: 1 });
				const split = new SplitText(slideCaption, { type: "words,chars" });
	
				gsap.from(split.chars, {
					opacity: 0,
					y: 50,
					ease: "back",
					duration: .5,
					delay: 1,
					stagger: {
						from: "start",
						each: 0.05
					},
					onComplete: function() {
						split.revert();
					}
				});
			}
			splitTextFunction(document.querySelector(".kd-hero-1-active"));
		}

		// h2-start
		const kdh2tl = gsap.timeline();

		kdh2tl.from(".kd-hero-2-content .kd-subtitle-1 " , {  x: 100 , duration:1, ease: "easeInOut", opacity:0 , delay: 1.5 })
		      .from(".kd-hero-2-content .disc " , {  x: 100 , duration:1, ease: "easeInOut", opacity:0  }, "<.5")
		      .from(".kd-hero-2-img " , {  duration:1, ease: "easeInOut", stagger: .2, opacity:0  }, "<.5")
		      .from(".kd-hero-2-img " , { borderRadius: "0", duration:1, ease: "easeInOut", } , "<1")
		      .from(".kd-hero-2-form " , {  x: -100 , duration:1, ease: "easeInOut", opacity:0 }, "<.5")


		// h3-start
		const kdh3tl = gsap.timeline();

		kdh3tl.from(".kd-hero-3-img " , {  yPercent: 100 , duration:1, ease: "easeInOut", opacity:0 , stagger: .5, delay: 1})
			  .from(".kd-hero-3-il-1 " , {  scale: 1.5 , duration:.5, ease: "easeInOut", opacity:0})
			  .from(".kd-hero-3-il-2 " , {  scale: 1.5 , duration:.5, ease: "easeInOut", opacity:0})
			  .from(".kd-hero-3-il-3 " , {  scale: 1.5 , duration:.5, ease: "easeInOut", opacity:0})
			  .from(".kd-hero-3-il-4 " , {  scale: 1.5 , duration:.4, ease: "easeInOut", opacity:0})

		// h4-start
		const kdh4tl = gsap.timeline();
		kdh4tl.fromTo(".kd-hero-4-content .kd-subtitle-2  " , {  clipPath: "polygon(0 0, 0 0, 0 100%, 0% 100%"  }, {  clipPath: "polygon(0 0, 100% 0, 100% 100%, 0% 100%)" ,duration:1, ease: "easeInOut", delay: 1 })
		kdh4tl.from(".kd-hero-4-content .btn-wrap " , {  yPercent: 100 , opacity: 0, duration:1, ease: "easeInOut",  })
		kdh4tl.from(".kd-hero-1-bg-img " , {  scaleX: 2 , duration:1, ease: "easeInOut",  }, "<-1")
		kdh4tl.from(".kd-hero-4-img img " , {  yPercent: 100 , duration:1, ease: "easeInOut",  },"<1" )
		
		
	})

});

// sticky-header
function glystickyHeader() {
    var $window = $(window);
    var lastScrollTop = 0;
    var $header = $('.txa_sticky_header');
    var headerHeight = $header.outerHeight() + 30;

    $window.scroll(function () {
      var windowTop = $window.scrollTop();

      if (windowTop >= headerHeight) {
        $header.addClass('txa_sticky');
      } else {
        $header.removeClass('txa_sticky');
        $header.removeClass('txa_sticky_show');
      }

      if ($header.hasClass('txa_sticky')) {
        if (windowTop < lastScrollTop) {
          $header.addClass('txa_sticky_show');
        } else {
          $header.removeClass('txa_sticky_show');
        }
      }

      lastScrollTop = windowTop;
    });
}

glystickyHeader();
  


// mobile-menu-start
jQuery(".mobile-main-navigation li.dropdown").append('<span class="dropdown-btn"><i class="fa-solid fa-angle-right"></i></span>'),
	jQuery(".mobile-main-navigation li .dropdown-btn").on("click", function () {
		jQuery(this).hasClass("active")
		? (jQuery(this).closest("ul").find(".dropdown-btn.active").toggleClass("active"), jQuery(this).closest("ul").find(".dropdown-menu.active").toggleClass("active").slideToggle())
		: (jQuery(this).closest("ul").find(".dropdown-btn.active").toggleClass("active"),
			jQuery(this).closest("ul").find(".dropdown-menu.active").toggleClass("active").slideToggle(),
			jQuery(this).toggleClass("active"),
			jQuery(this).parent().find("> .dropdown-menu").toggleClass("active"),
			jQuery(this).parent().find("> .dropdown-menu").slideToggle());
	});


// search-popup-start
$('.search_btn_toggle').on('click', function() {
	$('.overlay, .search_1_popup_active').addClass('active');
});
$('.overlay, .search_1_popup_close').on('click', function() {
	$('.search_1_popup_active').removeClass('active');
	$('.overlay').removeClass('active');
})



// mobile-menu-toggle-start
gsap.registerPlugin(ScrollTrigger);
gsap.config({
	nullTargetWarn: false,
});
var menuToggle = document.getElementById("menuToggle")
var menuToggle2 = document.getElementById("menuToggle2")
if (menuToggle2) {

	var menuBar = gsap.timeline();
	menuBar.reverse();
	var menubgline = gsap.timeline({ paused: true });
	
	menubgline.to('.mobile-menu' , {
		display: "block",
		ease: 'Expo.easeInOut'
	});
	menubgline.from('.mobile-menu-bg span' , {
		duration: 1,
		width: 0,
		stagger: 0.1,
		ease: 'Expo.easeInOut'
	});
	menubgline.from('.mobile-menu-logo' , {
		xPercent: -50,
		opacity: 0,
		ease: 'Expo.easeInOut',
		duration: 1,
	}, "<" );
	menubgline.from('.mobile-menu-close' , {
		duration: 1,
		xPercent: 50,
		rotate: 360,
		ease: 'Expo.easeInOut',
		opacity: 0,

	}, "<");
	menubgline.from('.mobile-main-navigation ' , {
		duration: .5,
		opacity: 0,
		y: 50,
	},"<.5");
	menubgline.from('.mobile-menu-search-bar' , {
		opacity: 0,
		y: 50,
	}, "<");

	menubgline.from('.mobile-menu-right' , {
		opacity: 0,
		visibility: "hidden",
		y: 50,
	});

	menubgline.from('.mobile-menu-socail-link' , {
		opacity: 0,
		x: 50,
	});


	
	menubgline.reverse();
	menuToggle.addEventListener('click', function(){
		menubgline.reversed(!menubgline.reversed());
	});
	menuToggle2.addEventListener('click', function(){
		menubgline.reversed(!menubgline.reversed());
	});
	
}

// hero-2-start
$(window).on('load',function(){
	var st = $(".kd-h2-split-text");

	if(st.length == 0) return; gsap.registerPlugin(SplitText); st.each(function(index, el) {

	  el.split = new SplitText(el, { 
		type: "lines,words,chars",
		linesClass: "split-line"
	  });

	  gsap.set(el, { perspective: 400 });
	
	  if( $(el).hasClass('kd-h2-title-ani') ){
		gsap.set(el.split.chars, {
		  opacity: 1,
		  color:'#005e4f',
		  x: "50",
		  ease: "Back.easeOut",
		});
	  }
	  
	
	  el.anim = gsap.to(el.split.chars, {
		scrollTrigger: {
		  trigger: el,
		  start: "top 90%",
		},
		x: "0",
		y: "0",
		color: 'inherit',
		opacity: 1,
		duration: 1, 
		stagger: 0.02,
		delay: .5
	  });

	});
})

// title-start
$(window).on('load',function(){
	var st = $(".kd-split-text");

	if(st.length == 0) return; gsap.registerPlugin(SplitText); st.each(function(index, el) {

	  el.split = new SplitText(el, { 
		type: "lines,words,chars",
		linesClass: "split-line"
	  });

	  gsap.set(el, { perspective: 400 });
	
	  if( $(el).hasClass('kd-title-ani') ){
		gsap.set(el.split.chars, {
		  opacity: 1,
		  color:'#005e4f',
		  x: "50",
		  ease: "Back.easeOut",
		});
	  }
	  
	
	  el.anim = gsap.to(el.split.chars, {
		scrollTrigger: {
		  trigger: el,
		  start: "top 90%",
		},
		x: "0",
		y: "0",
		color: 'inherit',
		opacity: 1,
		duration: 1, 
		stagger: 0.02,
	  });

	});
})



const txaafadeinright = gsap.utils.toArray('.txaa-fade-right');
const txaaslideinright = gsap.utils.toArray('.txaa-slide-right');
const txaafadeinleft = gsap.utils.toArray('.txaa-fade-left');
const txaascaleup = gsap.utils.toArray('.txaa-scale-up');
const txaascalexup = gsap.utils.toArray('.txaa-scalex-up');
const txaascalexdown = gsap.utils.toArray('.txaa-scalex-down');


txaafadeinright.forEach((box, i) => {
	const anim = gsap.fromTo(box, {autoAlpha: 0, stagger: 1 , x: 50}, {duration: 1, stagger: 1 , autoAlpha: 1, x: 0});
	ScrollTrigger.create({
		trigger: box,
		start: "top 85%",
		animation: anim,
		toggleActions: 'play none none reverse',
		once: false,
	});
});

txaafadeinleft.forEach((box, i) => {
	const anim = gsap.fromTo(box, {autoAlpha: 0,  x: -50}, {duration: 1, stagger: 0.2 , autoAlpha: 1, x: 0});
	ScrollTrigger.create({
		trigger: box,
		start: "top 85%",
		animation: anim,
		toggleActions: 'play none none reverse',
		once: false,
	});
});

txaaslideinright.forEach((box, i) => {
	const anim = gsap.fromTo(box, { xPercent: 100}, {duration: 1, xPercent: 0});
	ScrollTrigger.create({
		trigger: box,
		start: "top 85%",
		animation: anim,
		toggleActions: 'play none none reverse',
		once: false,
	});
});

txaascaleup.forEach((box, i) => {
	const anim = gsap.fromTo(box, { scale: .5}, {duration: 1, scale: 1});
	ScrollTrigger.create({
		trigger: box,
		start: "top 85%",
		animation: anim,
		toggleActions: 'play none none reverse',
		once: false,
	});
});

txaascalexup.forEach((box, i) => {
	const anim = gsap.fromTo(box, { scaleX: 0, transformOrigin: "center" }, {duration: 3, scaleX: 1});
	ScrollTrigger.create({
		trigger: box,
		start: "top 85%",
		animation: anim,
		toggleActions: 'play none none reverse',
		once: false,
	});
});

txaascalexdown.forEach((box, i) => {
	const anim = gsap.fromTo(box, { scaleX: "150%", transformOrigin: "center" }, {duration: 1, scaleX: "100%"});
	ScrollTrigger.create({
		trigger: box,
		start: "top 85%",
		animation: anim,
		toggleActions: 'play none none reverse',
		once: false,
	});
});

// txaa-slide-down-1
gsap.utils.toArray('.txaa-slide-down-1').forEach((container, index) => { 
    let images = gsap.utils.toArray(container.querySelectorAll('.txaa-slide-down-1-item'));

    let tl1 = gsap.timeline({
        scrollTrigger: {
            trigger: container,
            start: "top 85%",
            toggleActions: "play none none reverse",
        }
    });

    tl1.from(images, {  opacity:0, yPercent: 100, stagger: 0.2 , duration:1, ease: "circ.out",});
});

// txaa-roteted-1
gsap.utils.toArray('.txaa-roteted-1').forEach((container, index) => { 
    let images = gsap.utils.toArray(container.querySelectorAll('img'));

    let tl1 = gsap.timeline({
        scrollTrigger: {
            trigger: container,
			scrub: 1,
            start: "top 85%",
            toggleActions: "play none none reverse",
            markers: false
        }
    });

    tl1.from(images, {  rotate: 360, duration:1, ease: "circ.out",});
});

// img-1
gsap.utils.toArray('.kd-img-ani-1').forEach((container, index) => { 
    let images = gsap.utils.toArray(container.querySelectorAll('img'));

    let tl1 = gsap.timeline({
        scrollTrigger: {
            trigger: container,
            start: "top 80%",
            toggleActions: "play none none reverse",
            markers: false
        }
    });

    tl1.from(images, { opacity: 0, yPercent: -100,  filter: "blur(30px)", duration:1, ease: "circ.out",});
});

// subtitle-1
gsap.utils.toArray('.kd-subtitle-ani-1').forEach((container, index) => { 
    let images = gsap.utils.toArray(container.querySelectorAll('img'));

    let tl1 = gsap.timeline({
        scrollTrigger: {
            trigger: container,
            start: "top 80%",
			end: "top 0%",
			scrub: 1,
            toggleActions: "play none none reverse",
            markers: false
        }
    });

    tl1.from(images, { rotate: 360, duration:1, ease: "circ.out",});
});


// class-add
const txaaddclass = gsap.utils.toArray('.txxa-add-class');
txaaddclass.forEach(img => {
	gsap.to(img, {
		scrollTrigger: {
			trigger: img,
			scrub: 1,
			start: "top 90%",
			toggleClass: "active",
			toggleActions: "play reverse play reverse",
			markers: false
		}
	});
});


// price-1
var kdprice1 = gsap.timeline({

	scrollTrigger: {
	  animation: kdprice1,
	  trigger: '.kd-price-1-area',
	  start: "top 80%",
	  end: "top 50%",
	  scrub: 2,
	  toggleActions: "play reverse play reverse",
	  markers: false
	}
});
	
kdprice1.from(".kd-price-1-bg-img" , {     height: "calc(100% - 0px)" ,  duration:1 })

// shape-animation
gsap.to(".kd-hero-4-il-1 svg .path-1", 1, {
    x: 30,
	y: -30,
    repeat: -1,
    yoyo: true,
    ease: Power2.easeInOut
});
gsap.to(".kd-hero-4-il-1 svg .path-3", 1, {
    x: -30,
	y: 30,
    repeat: -1,
    yoyo: true,
    ease: Power2.easeInOut
});

gsap.to(".kd-category-4-il-1 svg .path", 1, {
	opacity: 0,
    repeat: -1,
	stagger: .5,
    yoyo: true,
    ease: Power2.easeInOut
});

gsap.to(".kd-category-4-il-1 svg .path", 1, {
	opacity: 0,
    repeat: -1,
	stagger: .5,
    yoyo: true,
    ease: Power2.easeInOut
});

gsap.to(".kd-services-4-il-1  svg path", 1, {
	opacity: 0,
    repeat: -1,
	stagger: .3,
    yoyo: true,
    ease: Power2.easeInOut
});

gsap.to(".kd-services-4-il-2  svg path", 1, {
	opacity: 0,
    repeat: -1,
	stagger: .1,
    yoyo: true,
    ease: Power2.easeInOut
});

gsap.to(".kd-course-4-il svg path", 2, {
	opacity: 0,
    repeat: -1,
	stagger: .3,
    yoyo: true,
    ease: Power2.easeInOut
});

gsap.to(".kd-choose-4-il svg path", 2, {
	opacity: 0,
    repeat: -1,
	stagger: .3,
    yoyo: true,
    ease: Power2.easeInOut
});

gsap.to(".kd-team-4-il-3 svg path", 2, {
	opacity: 0,
    repeat: -1,
	stagger: .3,
    yoyo: true,
    ease: Power2.easeInOut
});

gsap.to(".kd-team-4-il-2 svg path", 2, {
	opacity: 0,
    repeat: -1,
	stagger: .3,
    yoyo: true,
    ease: Power2.easeInOut
});

gsap.to(".kd-team-4-il-1 svg path", 2, {
	opacity: 0,
    repeat: -1,
	stagger: .3,
    yoyo: true,
    ease: Power2.easeInOut
});

gsap.to(".kd-event-4-il svg path", 1.5, {
	opacity: 0,
    repeat: -1,
	stagger: .3,
    yoyo: true,
    ease: Power2.easeInOut
});

gsap.to(".kd-testimonial-4-il svg path", 1.5, {
	opacity: 0,
    repeat: -1,
	stagger: .3,
    yoyo: true,
    ease: Power2.easeInOut
});

gsap.to(".kd-testimonial-4-il-2 svg path", 1.5, {
	opacity: 0,
    repeat: -1,
	stagger: .3,
    yoyo: true,
    ease: Power2.easeInOut
});


// testimonial-4-slider
if($('.kd-testimonial-4-active').length) {
	let slider = new Swiper('.kd-testimonial-4-active', {
		loop: true,
		spaceBetween: 40,
		slidesPerView: 1,
		speed: 1000,
		autoplay: {
			delay: 5000,
		},

		navigation: {
			nextEl: ".kd-testimonial-4-slider-next",
			prevEl: ".kd-testimonial-4-slider-prev",
		},

	});
}
  

// client-1-slider
if($('.kd-client-2-active').length) {
	let slider = new Swiper('.kd-client-2-active', {
		loop: true,
		spaceBetween: 0,
		slidesPerView: 6,
		speed: 1000,
		autoplay: {
			delay: 5000,
		},



		breakpoints: {
			0: {
				slidesPerView: 2,
			},
			576: {
				slidesPerView: 3,
			},
			768: {
				slidesPerView: 4,
			},
			992: {
				slidesPerView: 5,
			},
			1200: {
				slidesPerView: 6,
			},

		},
	});
}

  

// course-4-slider
if($('.kd-course-4-active').length) {
	let slider = new Swiper('.kd-course-4-active', {
		loop: true,
		spaceBetween: 30,
		slidesPerView: 4,
		speed: 1000,
		autoplay: {
			delay: 5000,
		},

		navigation: {
			nextEl: ".kd_course_4_slider_next",
			prevEl: ".kd_course_4_slider_prev",
		},
		
		breakpoints: {
			0: {
				slidesPerView: 1,
			},
			576: {
				slidesPerView: 1,
			},
			768: {
				slidesPerView: 2,
			},
			992: {
				slidesPerView: 3,
			},

		},
	});
}
  
  

// course-5-slider
if($('.kd-course-5-active').length) {
	let slider = new Swiper('.kd-course-5-active', {
		loop: true,
		spaceBetween: 30,
		slidesPerView: 3,
		speed: 1000,
		autoplay: {
			delay: 5000,
		},

		navigation: {
			nextEl: ".kd_course_5_slider_next",
			prevEl: ".kd_course_5_slider_prev",
		},
		
		breakpoints: {
			0: {
				slidesPerView: 1,
			},
			576: {
				slidesPerView: 1,
			},
			768: {
				slidesPerView: 2,
			},
			992: {
				slidesPerView: 3,
			},

		},
	});
}
  

// course-5-slider
if($('.kd-services-4-active').length) {
	let slider = new Swiper('.kd-services-4-active', {
		loop: true,
		spaceBetween: 0,
		slidesPerView: 4,
		speed: 1000,
		autoplay: {
			delay: 5000,
		},

		navigation: {
			nextEl: ".kd_services_1_slider_next",
			prevEl: ".kd_services_1_slider_prev",
		},
		
		breakpoints: {
			0: {
				slidesPerView: 1,
			},
			576: {
				slidesPerView: 1,
			},
			768: {
				slidesPerView: 2,
			},
			992: {
				slidesPerView: 2,
			},
			1200: {
				slidesPerView: 3,
			},
			1400: {
				slidesPerView: 3,
			},
			1600: {
				slidesPerView: 4,
			},

		},
	});
}



// team-4
if($('.kd-team-4-slide-main-active').length) {

	
	let s3_thumb = new Swiper('.kd-team-4-slide-prview-active', {
		spaceBetween: 30,
		loop: true,
		speed: 1000,
		centeredSlides: false,
		watchSlidesProgress: true,

		autoplay: {
			delay: 5000,
		},

		breakpoints: {
			320: {
				slidesPerView: 1,
			},
			576: {
				slidesPerView: 2,

			},
			768: {
				slidesPerView: 3,

			},
			992: {
				slidesPerView: 3,
			},
			1200: {
				slidesPerView: 3,
			},
		}
	});

	let slider = new Swiper('.kd-team-4-slide-main-active', {
		loop: true,
		spaceBetween: 0,
		speed: 1000,
		rtl: false,
		slidesPerView: 1,
		effect: 'fade',
		fadeEffect: {
			crossFade: true
		},

		thumbs: {
			swiper: s3_thumb,
		},
	});

	

}

// event-4
if($('.kd-event-4-active').length) {
	
	let slider = new Swiper('.kd-event-4-active', {
		spaceBetween: 30,
		loop: true,
		speed: 1000,
		autoplay: {
			delay: 50000000,
		},
		
		navigation: {
			nextEl: ".kd_event_4_slider_next",
			prevEl: ".kd_event_4_slider_prev",
		},

		breakpoints: {
			320: {
				slidesPerView: 1,
			},
			576: {
				slidesPerView: 1,

			},
			768: {
				slidesPerView: 2,

			},
			992: {
				slidesPerView: 2,
			},
			1200: {
				slidesPerView: 3,
			},
			1400: {
				slidesPerView: 3,
			},
			1600: {
				slidesPerView: 4,
			},
		}
	});


}


// gallery-3-marquee
if($('.gellary-3-marquee').length) {
	$('.gellary-3-marquee').marquee({
		duration: 25000,
		gap: 0,
		delayBeforeStart: 0,
		startVisible:true,
	  	pauseOnHover: true,
		direction: 'left',
		duplicated: true
	});
}




/* 
 	price-1-active-class
*/
$(".kd-price-1-table-feature-item").on("click", function(){
	var current_class = document.getElementsByClassName("kd-price-1-table-feature-item active");
	current_class[0].className = current_class[0].className.replace(" active", "");
	this.className += " active";
});


  
/*
mouse-move-animation
====start====
*/

document.addEventListener("mousemove" , parallax);
function parallax(e){

	document.querySelectorAll(".txa-mm-elm").forEach(function(move){

		var moving_value = move.getAttribute("data-value");
		var x = (e.clientX * moving_value) /250;
		var y = (e.clientY * moving_value) /250;

		move.style.transform = "translateX(" + x + "px) translateY(" + y +"px)";
	})

}


// bootstrap-toltip
$(function () {
	$('[data-toggle="tooltip"]').tooltip()
})

/* back-to-top */
var backtotop = $('.scroll-top');

$(window).scroll(function() {
	if ($(window).scrollTop() > 300) {
	backtotop.addClass('show');
	} else {
	backtotop.removeClass('show');
	}
});

backtotop.on('click', function(e) {
	e.preventDefault();
	$('html, body').animate({scrollTop:0}, '700');
});


/* counter */
$('.counter').counterUp({
	delay: 10,
	time: 3000
});

/* data-bg-activition */
$("[data-background]").each(function(){
	$(this).css("background-image","url("+$(this).attr("data-background") + ") ")
})


// wow-activation
if($('.wow').length){
	var wow = new WOW(
	{
		boxClass:     'wow',
		animateClass: 'animated',
		offset:       0,
		mobile:       true,
		live:         true
	}
	);
	wow.init();
};


/*
popup-video-activition
====start====
*/

if($('.popup-video').length) {
	$('.popup-video').magnificPopup({
		type: 'iframe'
	});
}


/*
popup-img-activition
====start====
*/

if($('.popup_img').length) {
	$('.popup_img').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true,
		},
	});
}

/*
popup-img-activition
====start====
*/
if($('.nice-select').length) {
	$('.nice-select select').niceSelect();
}

// parallax-img
$('.parallax-img').parallaxie({  
	speed: 0.5,    
});

/*mouse-over-scale*/
if($('.txaa-tilt_scale').length) {
	$('.txaa-tilt_scale').tilt({
		glare: false,
		maxGlare: .5
	})
}

if($('.txaa-tilt_glare').length) {
	$('.txaa-tilt_glare').tilt({
		glare: true,
		maxGlare: .5
	})
}




})(jQuery);