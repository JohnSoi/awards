class Header {
    constructor() {
        this.events();
    }

    events() {
        $(document)
            .on('click', '[burger-open]', () => {
                this.burgerOpen();
            })
            .on('click', '[burger-close]', () => {
                this.burgerClose();
            });
    }

    burgerOpen() {
        $('.mobile-menu').addClass('is-mobile-menu-active');
        $('body').addClass('overflow-hidden');
    }

    burgerClose() {
        $('.mobile-menu').removeClass('is-mobile-menu-active');
        $('body').removeClass('overflow-hidden');
    }
}

export default new Header();