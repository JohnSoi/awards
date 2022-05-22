var opacity = {
    init: function() {
        opacity.wrapper();
        opacity.filter();
        opacity.faveBtn();
    },

    wrapper: function() {
        var elem = $('.wrapper');
        $(document).each(function() {
            elem.animate({
                opacity: 1
            }, 400);
        });
    },

    filter: function() {
        var elem = $('.filter');
        $(document).each(function() {
            elem.animate({
                opacity: 1
            }, 200);
        });
    },

    faveBtn: function() {
        var elem = $('.pulse-text, .pulse-text-off');
        $(document).each(function() {
            elem.animate({
                opacity: 1
            }, 200);
        });
    }
}

$(opacity.init)