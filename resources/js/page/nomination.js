import Swiper from 'swiper/bundle';

import '../block/award';
import '../block/animation';
import '../block/sliderCursor';
import './js-modules/cursorStatus';
import options from '../block/swiperOptions';

window.nomination = {
    init: function() {
        nomination.swipers();
        nomination.projectContainer();
        $(window).on('resize', () => {
            nomination.projectContainer();
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
                        }
                    }
                }));
            }
        });
    },

    projectContainer: function() {
        if ($(window).width() > 1200) {
            $('.industry__illustrate').css('right', $('.container').offset().left + 15);
        } else {
            $('.industry__illustrate').css('right', 0);
        }
    }
}

$(nomination.init)