import '../../block/news';
import '../../../../../js-modules/share';

var newsShow = {
    init: function () {
        setTimeout(function () {
            newsShow.hideItem();
        }, 1000);
    },

    hideItem: function () {
        if ($(window).width() < 991) {
            $('.newsitems-block .news-item').slice(3).hide();
        }
    }
}

$(newsShow.init)