require('../js-modules/jquery.countdown');

ZoneObject.create('.section-award', {
    run: () => {
        function correctNumber(number) {
            var number = parseInt(number);
            return number > 9 ? number : '0' + number;
        }

        var datetime = $('[data-countdown]').attr('data-countdown');
        if (datetime) {
            $('[data-countdown]').countdown(datetime, function (event) {
                $(this).find('[data-days]').html(correctNumber(event.offset.totalDays));
                $(this).find('[data-days-text]').html(num_word(event.offset.totalDays, ['День', 'Дня', 'Дней']));
                $(this).find('[data-hours]').html(correctNumber(event.offset.hours));
                $(this).find('[data-hours-text]').html(num_word(event.offset.hours, ['Час', 'Часа', 'Часов']));
                $(this).find('[data-minutes]').html(correctNumber(event.offset.minutes));
                $(this).find('[data-minutes-text]').html(num_word(event.offset.minutes, ['Минута', 'Минуты', 'Минут']));
                $(this).find('[data-seconds]').html(correctNumber(event.offset.seconds));
                $(this).find('[data-seconds-text]').html(num_word(event.offset.seconds, ['Секунда', 'Секунды', 'Секунд']));
            });
        }
    }
});