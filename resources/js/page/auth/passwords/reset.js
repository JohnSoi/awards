var passwordReset = {

    init: function () {
        $('#passwordResetForm')
            .on('input change', '[name]', passwordReset.validate)
            .on('submit', passwordReset.submit);
    },

    submit: function (e) {
        e.preventDefault();

        var form = $(this);

        form.find('[name="email"]').remove();
        form.append('<input type="hidden" name="email" value="' + email + '">');

        ajax({
            url: form.attr('action'),
            type: 'POST',
            dataType: 'json',
            data: form.serialize()
        }, function (json) {
            if (json.message && !json.errors) {
                modalNotify.create({
                    text: 'Пароль успешно изменен',
                    btn: 'Закрыть',
                    onClick: function () {
                        location.href = '/login';
                    }
                });
            }

            if (json.errors && json.errors.email) {
                modalNotify.create({
                    text: json.errors.email[0],
                    btn: 'Закрыть',
                    onClickClose: true
                });
            }
        }, form);
    },

    validateTimeOut: false,
    validate: function () {
        if (passwordReset.validateTimeOut) clearTimeout(passwordReset.validateTimeOut);

        var form = $(this).parents('form');

        passwordReset.validateTimeOut = setTimeout(function () {
            var errors = validate.check(form, {
                password: 'required|min:8',
                password_confirmation: 'required|min:8|confirmed'
            }, true);

            if (Object.keys(errors).length) {
                form.find('.btn').addClass('opacity-50');
            } else {
                form.find('.btn').removeClass('opacity-50');
            }
        }, 100);
    }

}

$(passwordReset.init);