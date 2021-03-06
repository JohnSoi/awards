class Select {
    constructor() {
        $(document)
            .on('click', '[data-select-title]', (e) => {
                this.open($(e.currentTarget));
            })
            .on('click', '*', (e) => {
                e.stopPropagation();
                if ($(e.currentTarget).closest('[data-select-new]').length == 0) {
                    this.close();
                }
            })
            .on('change', '[data-select-new] [name]', (e) => {
                this.change($(e.currentTarget));
            });

        setTimeout(() => {
            $('input[type="checkbox"]').each(function () {
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
        $('[data-select-new]').removeClass('active');
    }
    change(input) {
        var label = input.parents('label');
        if (input.prop('checked')) {
            label.find('.nf-remover').css('display', 'flex');
            label.prependTo(input.parents('[data-select-new]').find('[data-select-selected]'));
        } else {
            label.find('.nf-remover').css('display', 'none');
            label.prependTo(input.parents('[data-select-new]').find('[data-select-selection]'));
        }
        this.render(input);
    }
    render(input) {
        var parent = input.parents('[data-select-new]'),
            selectedCount = parent.find('[data-select-selected] [name]:checked').length,
            selectionCount = parent.find('[data-select-selection] [name]').length;

        if (selectedCount) {
            parent.find('[data-select-title]').text('Выбрано номинаций: ' + selectedCount);
        } else {
            parent.find('[data-select-title]').text('Номинации');
        }

        if (selectedCount) {
            parent.find('[data-select-selected]').css('display', 'flex');
        } else {
            parent.find('[data-select-selected]').css('display', 'none');
        }

        if (selectionCount) {
            parent.find('[data-select-selection]').css('display', 'flex');
        } else {
            parent.find('[data-select-selection]').css('display', 'none');
        }
    }
}

new Select();