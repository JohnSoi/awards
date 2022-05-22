import Cursor from '../../../../js-modules/Cursor';

$(() => {
    var minWidth = location.href.indexOf('partner') > -1 || location.href.indexOf('industry') > -1 || location.href.indexOf('arhive') > -1 || location.href.indexOf('contest') > -1 || location.href.indexOf('curators') > -1 ? 1200 : 992,
        setTimeoutTimer = false;

    if ($(window).width() > minWidth) {
        ZoneObject.create('[cursor-status]', {
            run: () => {
                var SliderCursor = new Cursor({
                    cursor: '.cursor',
                    wrap: '[cursor-status]'
                });

                SliderCursor.onMousemove = (obj) => {
                    $('.direction-item.hover').removeClass('hover');

                    if (obj.inWrap) {
                        if (obj.isLeft) {
                            $('body').removeClass('cursor-right').addClass('cursor-left');
                        } else {
                            $('body').removeClass('cursor-left').addClass('cursor-right');
                        }

                        if (obj.hoverElem.closest('[data-white]').length) {
                            $('body').addClass('cursor-black').removeClass('cursor-white');
                        } else {
                            $('body').addClass('cursor-white').removeClass('cursor-black');
                        }

                        if (obj.hoverElem.closest('.direction-item').length) {
                            obj.hoverElem.closest('.direction-item').addClass('hover');
                        }
                    }
                };

                SliderCursor.onClick = (obj) => {
                    var swiper = obj.hoverElem.closest('.swiper-container')[0].swiper;

                    if (swiper) {
                        if (obj.isLeft) {
                            swiper.slidePrev(500);
                        } else {
                            swiper.slideNext(500);
                        }

                        if (setTimeoutTimer) clearTimeout(setTimeoutTimer);

                        setTimeoutTimer = setTimeout(() => {
                            SliderCursor.triggerMousemove();
                        }, 500);
                    }
                };
            }
        });
    }
});