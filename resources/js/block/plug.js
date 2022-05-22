$(document).on('click', '[data-plug]', function (e) {
    e.preventDefault();

    modalNotify.create({
        title: 'Раздел находится в разработке',
        text: 'Пожалуйста, загляните сюда попозже',
        btn: 'Закрыть',
        onClickClose: true
    });
})