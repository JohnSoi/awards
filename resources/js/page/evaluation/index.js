import Swiper from 'swiper/bundle';
import '../../block/animation';
import '../../block/sliderCursor';
import '../../js-modules/cursorStatus';
import options from '../../block/optionsSwiper';
require('../../js-modules/jquery.countdown');

class Evaluation {
    constructor() {
        this.swipers();
        this.countdown();
        this.photoChange();
    }

    photoChange() {
        var photoUpload = () => {
            ajax({
                url: $('#photoUpload').attr('action'),
                type: 'post',
                dataType: 'json',
                processData: false,
                contentType: false,
                queue: true,
                validate: false,
                data: new FormData($('#photoUpload')[0])
            }, (json) => {
                $('#photoUpload').trigger('reset');

                var errorText = 'Что-то пошло не так :(<br>попробуйте позже';

                if (typeof json === 'object' && json != null) {
                    if (json.success) {
                        $(document).trigger('ajax.update');
                        return false;
                    } else if (json.error) {
                        errorText = json.error;
                    } else if (json.errors) {
                        errorText = json.errors.photo[0];
                    }
                }

                modalNotify.create({
                    title: errorText,
                    btn: 'Закрыть',
                    onClickClose: true
                });

                // debug.send('isObject, no key: ' + JSON.stringify(json));
            });
        },
            photoDelete = () => {
                ajax({
                    url: $('#photoUpload').attr('action'),
                    type: 'post',
                    dataType: 'json',
                    queue: true,
                    validate: false,
                    processData: false,
                    contentType: false,
                    data: new FormData($('#photoUpload')[0])
                }, () => {
                    $(document).trigger('ajax.update');
                });
            }

        $(document)
            .on('click', '[data-photo-delete]', () => {
                photoDelete();
            })
            .on('click', '[data-photo-select]', () => {
                $('#photoUpload label').trigger('click');
            })
            .on('change', '#photoUpload [name="photo"]', () => {
                photoUpload();
            });
    }

    countdown() {
        var datetime = $('[data-countdown]').attr('data-countdown');
        if (datetime) {
            $('[data-countdown]').countdown(datetime, function (event) {
                $(this).find('[data-days]').html(event.offset.totalDays);
                $(this).find('[data-days-text]').html(num_word(event.offset.totalDays, ['День', 'Дня', 'Дней']));
                $(this).find('[data-hours]').html(event.offset.hours);
                $(this).find('[data-hours-text]').html(num_word(event.offset.hours, ['Час', 'Часа', 'Часов']));
                $(this).find('[data-minutes]').html(event.offset.minutes);
                $(this).find('[data-minutes-text]').html(num_word(event.offset.minutes, ['Минута', 'Минуты', 'Минут']));
                $(this).find('[data-seconds]').html(event.offset.seconds);
                $(this).find('[data-seconds-text]').html(num_word(event.offset.seconds, ['Секунда', 'Секунды', 'Секунд']));
            });
        }
    }

    swipers() {
        ZoneObject.create('.section-evaluation__nominations', {
            run: () => {
                // Карточки по направлениям
                new Swiper('.swiper-step', $.extend(options, {
                    slidesPerView: 'auto',
                    spaceBetween: 20,
                    breakpoints: {
                        768: {
                            slidesPerView: 'auto',
                            spaceBetween: 20
                        }
                    }
                }));

                if ($(window).width() > 570) {
                    $('[data-pc-plus]').html('2');
                }
            }
        });
    }
}

new Evaluation();