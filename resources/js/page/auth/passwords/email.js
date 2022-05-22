var passwordEmail = {

    init: function () {
        $('#passwordEmailForm')
            .on('input change', '[name]', passwordEmail.validate)
            .on('submit', passwordEmail.submit);
    },

    submit: function (e) {
        e.preventDefault();

        var form = $(this),
            email = form.find('[name="email"]').val();

        ajax({
            url: form.attr('action'),
            type: 'POST',
            dataType: 'json',
            data: form.serialize()
        }, function (json) {
            if (json.message && !json.errors) {
                modalNotify.create({
                    text: 'Письмо с ссылкой для восстановления успешно отправлено на ' + '<b>' + email + '</b>',
                    btn: 'Закрыть',
                    onClickClose: true
                });

                form.trigger('reset');
            }
        }, form);
    },

    validateTimeOut: false,
    validate: function () {
        if (passwordEmail.validateTimeOut) clearTimeout(passwordEmail.validateTimeOut);

        var form = $(this).parents('form');

        passwordEmail.validateTimeOut = setTimeout(function () {
            var errors = validate.check(form, {
                email: 'required|email'
            }, true);

            if (Object.keys(errors).length) {
                form.find('.btn').addClass('opacity-50');
            } else {
                form.find('.btn').removeClass('opacity-50');
            }
        }, 100);
    }

}

$(passwordEmail.init);