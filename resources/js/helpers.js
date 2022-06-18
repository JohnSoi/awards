// Склонение числовых значений
window.num_word = (number, words) => {
    return words[(number % 100 > 4 && number % 100 < 20) ? 2 : [2, 0, 1, 1, 1, 2][(number % 10 < 5) ? number % 10 : 5]];
}

// Проверка элемента в зоне видимости
window.elemInWindow = (element) => {
    var element_top = element.offset().top; // координата верхней позиции элемента
    var element_bottom = element.offset().top + element.height(); // координата нижней позиции элемента
    var w_height = $(window).height(); // высота окна
    if (($(window).scrollTop() < element_top - w_height) || ($(window).scrollTop() > element_bottom)) {
        return false;
    } else {
        return true;
    }
}