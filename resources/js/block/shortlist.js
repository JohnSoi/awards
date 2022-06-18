
var width = $(window).width();

if (width <= 576) {
    $('.industries-list__item').slice(2).hide();
} else if (width < 991) {
    $('.industries-list__item').slice(4).hide();
}

$(document).on('click', '[show-objects]', (e) => {
    $(e.currentTarget).parents('section:eq(0)').find('.industries-list__item').slideDown("slow");
    $(e.currentTarget).parent().hide("slow");
});