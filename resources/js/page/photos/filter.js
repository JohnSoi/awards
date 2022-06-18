var year = location.href.indexOf(2020) > -1 ? 2020 : 2021;

history.pushState(false, false, location.href.replace('?year=2020', ''));

const showYear = () => {
    $('[data-filter] [data-select-year]').hide();
    $('[data-filter] [data-select-year="' + year + '"]').show();
}

$(document)
    .on('change', '[data-filter] [name]', () => {
        var select_year = parseInt($('[data-filter] [name="year"]:checked').val());

        if (select_year != year) {
            year = select_year;
            showYear();
        }

        $('[items-list-photo]').css('opacity', 0);

        items.update('photo');
    });

$('[data-filter] [name="year"][value="' + year + '"]').prop('checked', true);

showYear();

export default () => {
    var data = {};

    if ($('[data-select-year="' + year + '"] [name="date"]').length) {
        if ($('[data-select-year="' + year + '"] [name="date"]:checked').length) {
            data.date = $('[data-select-year="' + year + '"] [name="date"]:checked').val();
        } else {
            data.date = $('[data-select-year="' + year + '"] [name="date"]').val();
        }
    } else {
        if ($('[data-filter] [name="date"]:checked').length) {
            data.date = $('[data-filter] [name="date"]:checked').val();
        } else {
            data.date = $('[data-filter] [name="date"]').val();
        }
    }

    if ($('[data-filter] [name="year"]:checked').length) {
        data.year = $('[data-filter] [name="year"]:checked').val();
    } else {
        data.year = $('[data-filter] [name="year"]').val();
    }

    if ($('[data-select-year="' + year + '"] [name="location_id"]').length) {
        if ($('[data-select-year="' + year + '"] [name="location_id"]:checked').length) {
            data.location_id = $('[data-select-year="' + year + '"] [name="location_id"]:checked').val();
        } else {
            data.location_id = $('[data-select-year="' + year + '"] [name="location_id"]').val();
        }
    } else {
        if ($('[data-filter] [name="location_id"]:checked').length) {
            data.location_id = $('[data-filter] [name="location_id"]:checked').val();
        } else {
            data.location_id = $('[data-filter] [name="location_id"]').val();
        }
    }

    return data;
}