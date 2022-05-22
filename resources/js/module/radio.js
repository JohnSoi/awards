class Radio {
    constructor() {
        $(document)
            .on('click', '[data-radio-title]', (e) => {
                this.open($(e.currentTarget));
            })
            .on('click', '*', (e) => {
                e.stopPropagation();
                if ($(e.currentTarget).closest('[data-radio-new]').length == 0) {
                    this.close();
                }
            })
            .on('change', '[data-radio-new] [name]', (e) => {
                this.change($(e.currentTarget));
            });

        setTimeout(() => {
            $('input[type="radio"]').each(function () {
                if (!$(this).attr('checked') && $(this).prop('checked')) {
                    location.reload();
                    return false;
                }
            });
        }, 100);
    }

    open(title) {
        title.parent().toggleClass('active');
    }

    close() {
        $('[data-radio-new]').removeClass('active');
    }

    change(input) {
        var label = input.next('label'),
            group = input.parents('[data-radio-group]'),
            parent = input.parents('[data-radio-new]');

        parent.find('[data-radio-title]').html(group.find('[data-radio-group-title]').text() + ': ' + label.text());
    }
}

new Radio();