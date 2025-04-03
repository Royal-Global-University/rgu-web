(function ($) {
    "use strict";
    /**
     * Project Two
     * @param {Project Style} $scope 
     * @param {*} $ 
     */
    function siderOneActive($scope, $) {
        var swiper = new Swiper(".kd-hero-1-active", {
            effect: "fade",
            watchSlidesVisibility: true,
            autoplay: {
                delay: 6000,
                disableOnInteraction: false
            },
            allowTouchMove: true,
            loop: true,
            runCallbacksOnInit: true,
            fadeEffect: {
                crossFade: true
            },
            navigation: {
                nextEl: ".kd_hero_1_next",
                prevEl: ".kd_hero_1_prev",
            }

        });


    }
    function videoSliderActive($scope, $) {
        let slider = new Swiper('.kd-video-course-1-active', {
            loop: true,
            spaceBetween: 35,
            slidesPerView: 2,
            speed: 1000,
            autoplay: {
                delay: 5000,
            },

            navigation: {
                nextEl: ".kd_video-course_1_slider_next",
                prevEl: ".kd_video-course_1_slider_prev",
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

            },
        });
    }
    function testimonialOneActive($scope, $) {
        let slider = new Swiper('.kd-testimonial-1-active', {
            loop: true,
            spaceBetween: 0,
            slidesPerView: 1,
            speed: 1000,
            autoplay: {
                delay: 5000,
            },

            navigation: {
                nextEl: ".kd_testimonial_1_slider_next",
                prevEl: ".kd_testimonial_1_slider_prev",
            },


        });
    }
    function categoryActive($scope, $) {
        let slider = new Swiper('.kd-pop-cat-1-active', {
            loop: true,
            spaceBetween: 40,
            slidesPerView: 4,
            speed: 1000,
            autoplay: {
                delay: 5000,
            },

            navigation: {
                nextEl: ".kd_pop_cat_1_next",
                prevEl: ".kd_pop_cat_1_prev",
            },

            breakpoints: {
                0: {
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
                    slidesPerView: 4,
                },


            },
        });
    }

    function serviceCarouselActive($scope, $) {
        let slider = new Swiper('.kd-services-3-active', {
            loop: true,
            spaceBetween: 30,
            slidesPerView: 4,
            speed: 1000,
            autoplay: {
                delay: 5000,
            },

            navigation: {
                nextEl: ".kd_services_3_slider_next",
                prevEl: ".kd_services_3_slider_prev",
            },

            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                576: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 2,
                },
                992: {
                    slidesPerView: 3,
                },
                1200: {
                    slidesPerView: 4,
                },

            },
        });
    }
    function courseTabActiveSlider($scope, $) {
        let slider = new Swiper('.kd-course-1-active', {
            loop: true,
            spaceBetween: 30,
            slidesPerView: 4,
            speed: 1000,
            autoplay: {
                delay: 5000,
            },

            navigation: {
                nextEl: ".kd_course_1_slider_next",
                prevEl: ".kd_course_1_slider_prev",
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


    $(window).on('elementor/frontend/init', function () {
        elementorFrontend.hooks.addAction('frontend/element_ready/go-islider.default', siderOneActive);
        elementorFrontend.hooks.addAction('frontend/element_ready/go-v-slider.default', videoSliderActive);
        elementorFrontend.hooks.addAction('frontend/element_ready/go-testimonial-id.default', testimonialOneActive);
        elementorFrontend.hooks.addAction('frontend/element_ready/go-category.default', categoryActive);
        elementorFrontend.hooks.addAction('frontend/element_ready/go-features.default', serviceCarouselActive);
        elementorFrontend.hooks.addAction('frontend/element_ready/go-course-tab.default', courseTabActiveSlider);
    });

    function content_ready_scripts() {
        $('[data-background]').each(function () {
            $(this).css('background-image', 'url(' + $(this).attr('data-background') + ')');
        });
    }

    $(window).on('elementor/frontend/init', function () {

        if (elementorFrontend.isEditMode()) {

            elementorFrontend.hooks.addAction('frontend/element_ready/widget', function () {
                content_ready_scripts();
            });

        } else {
            elementorFrontend.hooks.addAction('frontend/element_ready/widget', function () {
                content_ready_scripts();
            });
        }

    });



})(jQuery);