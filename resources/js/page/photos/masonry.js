var Masonry = require('masonry-layout');

const msnry = new Masonry(document.querySelector('[items-list-photo]'), {
    itemSelector: '[items-html-photo]',
    transitionDuration: 0,
    gutter: 20
});

$(document).on('webp.gocanas', () => {
    msnry.reloadItems();
    msnry.layout();
});

export default msnry;