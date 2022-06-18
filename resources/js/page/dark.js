import Swiper from 'swiper/bundle';

import '../block/animation';
import '../block/sliderCursor';
import '../js-modules/cursorStatus';
import options from '../block/swiperOptions';
import '../block/award';
require('../js-modules/modalVideoStop');
import './index/photos';

window.index = {
    init: function() {
        index.swipers();
        index.parallax();
        index.projectContainer();
        $(window).on('resize', () => {
            index.projectContainer();
        });
    },

    swipers: function() {

        ZoneObject.create('.section-jury', {
            run: () => {
                // Жюри
                new Swiper('.swiper-jury', $.extend(options, {
                    slidesPerView: 'auto',
                    spaceBetween: 16,
                    breakpoints: {
                        768: {
                            slidesPerView: 'auto',
                            spaceBetween: 20
                        }
                    }
                }));
            }
        });

        ZoneObject.create('.section-expert', {
            run: () => {
                // Жюри
                new Swiper('.swiper-expert', $.extend(options, {
                    slidesPerView: 'auto',
                    spaceBetween: 16,
                    breakpoints: {
                        768: {
                            slidesPerView: 'auto',
                            spaceBetween: 20
                        }
                    }
                }));
            }
        });

        ZoneObject.create('.section-incards', {
            run: () => {
                // Карточки по направлениям
                new Swiper('.swiper-incards', $.extend(options, {
                    slidesPerView: 'auto',
                    spaceBetween: 20,
                    breakpoints: {
                        768: {
                            slidesPerView: 'auto',
                            spaceBetween: 20
                        }
                    }
                }));
            }
        });

        ZoneObject.create('.section-industries', {
            run: () => {
                // Карточки по направлениям
                new Swiper('.swiper-project', $.extend(options, {
                    slidesPerView: 'auto',
                    spaceBetween: 20,
                    breakpoints: {
                        1200: {
                            enabled: false,
                            noSwiping: false,
                            slidesPerView: 'auto',
                            spaceBetween: 20
                        },
                        768: {
                            slidesPerView: 'auto',
                            spaceBetween: 20
                        },
                        0: {
                            init: false,
                        },
                    }
                }));
            }
        });

        ZoneObject.create('.section-step', {
            run: () => {
                // Карточки по направлениям
                new Swiper('.swiper-step', $.extend(options, {
                    slidesPerView: 'auto',
                    spaceBetween: 20,
                    breakpoints: {
                        768: {
                            slidesPerView: 'auto',
                            spaceBetween: 20
                        }
                    }
                }));
            }
        });

        ZoneObject.create('.section-service', {
            run: () => {
                // Экосистема сервисов
                new Swiper('.swiper-eco', $.extend(options, {
                    slidesPerView: 'auto',
                    spaceBetween: 0,
                    breakpoints: {
                        768: {
                            slidesPerView: 'auto',
                            spaceBetween: 20
                        },
                        320: {
                            spaceBetween: 20
                        }
                    }
                }));
            }
        });
    },

    parallax: function() {
        if ($(window).width() >= 1200) {
            var timer = false;

            $('.header, .section-main, .section-cta').on('mousemove', function(e) {
                if (!timer) {
                    timer = setTimeout(function() {
                        var x = e.clientX / window.innerWidth,
                            y = e.clientY / window.innerHeight;

                        $('#postmarks svg > g > g:eq(0)').css('transform', 'translate(-' + x * 9 + 'px, -' + y * 9 + 'px)');
                        $('#postmarks svg > g > g:eq(1)').css('transform', 'translate(-' + x * 21 + 'px, -' + y * 21 + 'px)');
                        $('#postmarks svg > g > g:eq(2)').css('transform', 'translate(-' + x * 13 + 'px, -' + y * 13 + 'px)');
                        $('#postmarks svg > g > g:eq(3)').css('transform', 'translate(-' + x * 28 + 'px, -' + y * 28 + 'px)');
                        $('#postmarks svg > g > g:eq(4)').css('transform', 'translate(-' + x * 18 + 'px, -' + y * 18 + 'px)');

                        // change colors

                        timer = false;
                    }, 12);
                }
            });

            var top_old = 0;

            $(window).on('scroll', function() {
                var top_new = $(window).scrollTop() > 200 ? 65 : 0;

                if (top_new != top_old) {
                    top_old = top_new;
                    $('#postmarks').stop().animate({
                        top: top_new
                    }, 250, "swing");
                }
            });
        }
    },

    projectContainer: function() {
        if ($(window).width() > 1200) {
            $('.industry__illustrate').css('right', $('.container').offset().left + 15);
        } else {
            $('.industry__illustrate').css('right', 0);
        }
    }
}

$(index.init)