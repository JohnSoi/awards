var formControl = {

    init: function() {
        formControl.events();
        formControl.textCounter();
        formControl.masks();
        formControl.file();
    },

    masks: () => {
        if (typeof $.fn.mask !== 'undefined') {
            if ($('[data-mask-phone]').length) {
                $('[data-mask-phone]').mask('+7 (999) 999-99-99');
            }

            if ($('[data-mask-time]').length) {
                $('[data-mask-time]').mask('99:99');
            }
        }
    },

    events: function() {
        $(document)
            .on('change', '[data-role="select"]', formControl.selectMetro);

        $('[data-role="select"]').each(function() {
            if ($(this).find('[selected]').length) {
                $(this).trigger('change');
            }
        });
    },

    textCounter: function() {
        $(document)
            .on('mouseover', '[textarea-counter]', function() {
                $(this).find('.text-counter').addClass('active');
            })
            .on('mouseout', '[textarea-counter]', function() {
                $(this).find('.text-counter').removeClass('active');
            });
    },

    selectMetro: function() {
        var val = $(this).val(),
            title = $(this).parents('.filter-control').find('.filter-control__title'),
            elem = $(this).parents('.filter-control').find('.select-input');

        if (val.length) {
            title.hide();
            elem.addClass('active');
        } else {
            title.show();
            elem.removeClass('active');
        }
    },

    file: function() {
        var inputFile = $('.form-type-file');

        inputFile.on('click', function() {
            if (!$(this).parents('.active').length) {
                $(this).siblings('input[type="file"]').trigger('click');
            }
        });
    }

}

$(formControl.init);