var paddingTimer = false;

var paddingSwiper = () => {
    $('.swiper-wrapper').parents('.swiper-container').css('padding-left', $('.container').offset().left + 15);
    $('.swiper-wrapper').parents('.swiper-container').css('padding-right', $('.container').offset().left + 15);

    if (paddingTimer) {
        clearTimeout(paddingTimer)
    }

    paddingTimer = setTimeout(() => {
        window.dispatchEvent(new Event('resize'));
    }, 500);
}

export default {
    longSwipes: false,
    speed: 500,
    navigation: {
        nextEl: '.arrows-nav__right',
        prevEl: '.arrows-nav__left',
    },
    on: {
        init: function(event) {
            // $($(this)[0].$el).find('[data-all-count]').html(event.slides.length);
            $($(this)[0].$el).parents().find('[data-all-count]').html(event.slides.length);
        },
        slideChange: function(event) {
            // $($(this)[0].$el).find('[data-active-count]').html(event.activeIndex + 1);

            if ($($(this)[0].$el).parents('[data-swiper-group]').length) {
                var elem = $($(this)[0].$el).parents('[data-swiper-group]').find('[data-active-count]'),
                    activeIndex = event.activeIndex + 1;

                if (elem.attr('data-pc-plus') && $(window).width() > 570) {
                    activeIndex = activeIndex + parseInt(elem.attr('data-pc-plus'));
                }

                elem.html(activeIndex);
            } else {
                $($(this)[0].$el).parents().find('[data-active-count]').html(event.activeIndex + 1);
            }
        },
        beforeInit: paddingSwiper,
        resize: paddingSwiper,
        resizeObserver: false,
    }
}