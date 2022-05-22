var method = {

    init: function () {
        $('#getSpeaker')
            .on('input', '[name]', method.validate)
            .on('submit', 'form', method.submit);
    },

    submit: function (e) {
        e.preventDefault();

        var form = $(this);

        ajax({
            url: form.attr('action'),
            type: 'post',
            dataType: 'json',
            data: form.serialize()
        }, function (json) {
            if (json.success) {
                form.trigger('reset');
                form.find('[name]').trigger('blur');
                form.find('[data-output-count]').html(0);

                $('#getSpeaker').one('hidden.bs.modal', function () {
                    $('#doneSpeaker').modal('show');
                }).modal('hide');
            }
        }, form);
    },

    validateTimeOut: false,
    validate: function () {
        if (method.validateTimeOut) clearTimeout(method.validateTimeOut);

        var form = $(this).parents('form');

        method.validateTimeOut = setTimeout(function () {
            var errors = validate.check(form, {
                name: 'required',
                email: 'required|email',
                text: 'required|max:200',
                industry_id: 'required',
                links: 'required'
            }, {
                'industry_id.required': 'Выберите индустрию из списка'
            }, true);

            if (Object.keys(errors).length) {
                form.find('.btn').addClass('opacity-50');
            } else {
                form.find('.btn').removeClass('opacity-50');
            }
        }, 100);
    }

}

$(method.init);