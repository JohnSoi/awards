var paddingTimer = false;

var paddingSwiperInit = false;

var paddingSwiper = () => {
    $('.swiper-wrapper').parents('.swiper-container').css('padding-left', $('.container').offset().left + 15);
    $('.swiper-wrapper').parents('.swiper-container').css('padding-right', $('.container').offset().left + 15);

    if (paddingTimer) {
        clearTimeout(paddingTimer)
    }

    if (!paddingSwiperInit) {
        paddingSwiperInit = true;
        paddingTimer = setTimeout(() => {
            window.dispatchEvent(new Event('resize'));
        }, 500);
    }
}

export default {
    longSwipes: false,
    speed: 500,
    navigation: {
        nextEl: '.arrows-nav__right',
        prevEl: '.arrows-nav__left',
    },
    on: {
        init: function (event) {
            // $($(this)[0].$el).find('[data-all-count]').html(event.slides.length);

            var slidesLength = event.slides.length ? event.slides.length : event.imagesLoaded;

            if ($($(this)[0].$el).parents('[data-swiper-group]').length) {
                $($(this)[0].$el).parents('[data-swiper-group]').find('[data-all-count]').html(slidesLength);
            } else {
                $($(this)[0].$el).find('[data-all-count]').html(slidesLength);
            }
        },
        slideChange: function (event) {
            // $($(this)[0].$el).find('[data-active-count]').html(event.activeIndex + 1);

            if ($($(this)[0].$el).parents('[data-swiper-group]').length) {
                var elem = $($(this)[0].$el).parents('[data-swiper-group]').find('[data-active-count]'),
                    activeIndex = event.activeIndex + 1;

                if (elem.attr('data-pc-plus')) {
                    activeIndex = activeIndex + parseInt(elem.attr('data-pc-plus'));
                }

                if (activeIndex > event.slides.length) {
                    activeIndex = event.slides.length;
                }
                console.log(activeIndex);
                elem.html(activeIndex);
            } else {
                $($(this)[0].$el).find('[data-active-count]').html(event.activeIndex + 1);
            }
        },
        beforeInit: paddingSwiper,
        resize: paddingSwiper,
        resizeObserver: false,
    }
}