$('[subscribe-form]')
    .on('submit', function (e) {
        e.preventDefault();

        var form = $(this),
            email = form.find('[name="email"]').val();

        ajax({
            url: form.attr('action'),
            type: 'post',
            dataType: 'json',
            data: form.serialize(),
            preloader_html: ''
        }, function (json) {
            if (json.success) {
                form.trigger('reset');

                $('[subscribe-success-text]').html('Успешно! На адрес <b>' + email + '</b> отправим письмо с оповещением, когда будет доступна регистрация на мероприятия.').show();
                $('[subscribe-success-btn]').show();
                $('[subscribe-default]').hide();
            }
        }, form);
    });

$('[subscribe-success-btn]').on('click', function () {
    $('[subscribe-success-text], [subscribe-success-btn]').hide();
    $('[subscribe-default]').show();
});