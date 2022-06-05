$(function () {
    // Нажатие на "Войти" в блоке регистрации
    $('#regis-mane-id').on('click', function () {
        $('#reg-block').css('display', 'none');
        $('#login-block').css('display', 'block');
    });
    // Возврат из "Вйоти" в "Регистрация"
    $('#login-block-back').on('click', function () {
        $('#reg-block').css('display', 'block');
        $('#login-block').css('display', 'none');
    });
});