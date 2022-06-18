import { Metro, Select } from 'metro4';
import Swiper from 'swiper/bundle';

import '../block/animation';
import '../block/sliderCursor';
import '../js-modules/cursorStatus';
import options from '../block/swiperOptions';

window.competition = {
    init: function() {
        competition.swipers();
    },

    swipers: function() {
        ZoneObject.create('.section-themes', {
            run: () => {
                // Темы
                new Swiper('.swiper-1', $.extend(options, {
                    slidesPerView: 'auto',
                    spaceBetween: 0,
                    centerInsufficientSlides: true,
                    breakpoints: {
                        1200: {
                            enabled: false,
                            noSwiping: false,
                            spaceBetween: 20
                        },
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
                        }
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

        ZoneObject.create('.section-history', {
            run: () => {
                // История компании
                new Swiper('.swiper-history', $.extend(options, {
                    slidesPerView: 'auto',
                    spaceBetween: 0,
                    breakpoints: {
                        1024: {
                            slidesPerView: 'auto',
                            spaceBetween: 155
                        },
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
    }
}

$(competition.init)