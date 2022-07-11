import Image from "../../class/Image";
import Swiper from 'swiper/bundle';
import options from '../../block/swiperOptions';
import '../../js-modules/cursorStatus';
import '../../block/sliderCursor';

class NominationShow {

    constructor() {
        this.shortlistImages();
        this.swipers();
        this.collapse();
    }

    shortlistImages() {
        $('[data-shortlist-image]').on('click', (e) => {
            var src = $(e.currentTarget).find('[src]').attr('src'),
                src = Image.srcOriginal(src);

            $('#getPhoto img').attr('src', src);
            $('#getPhoto').modal('show');
        });
    }

    swipers() {
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
    }

    collapse() {
        $('#shortlistCollapsible').on('hide.bs.collapse', (e) => {
            var headerElem = $(e.target).parent().find('.collapse-shortlist__desc');

            if (!elemInWindow(headerElem)) {
                var duration_old = scroller.duration;
                scroller.duration = 100;
                scroller.to(headerElem, () => {
                    scroller.duration = duration_old;
                }, -70);
            }
        })
    }

}

new NominationShow()