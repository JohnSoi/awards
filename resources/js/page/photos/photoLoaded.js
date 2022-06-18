var imagesLoaded = require('imagesloaded');

export default (msnry) => {
    $('[items-preloader-photo]').show();

    imagesLoaded(document.querySelector('[items-list-photo]')).on('always', () => {
        msnry.reloadItems();
        msnry.layout();

        $('[items-list-photo]').css('opacity', 1);
        $('[items-preloader-photo]').hide();
    });
}