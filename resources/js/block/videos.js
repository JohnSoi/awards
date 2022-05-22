var videos = {

    init: function () {
        videos.items();
        videos.entryModal();
        $('[data-videos] [name]').on('change', () => {
            items.update('video');
        });
    },

    entryModal: function () {
        entryModal.set({
            name: 'video',
            pushState: false,
            data: function (id, callback) {
                callback(JSON.parse($('[video-open="' + id + '"]').attr('data-json')));
            }
        });

        $('[entry-modal="video"]').on('hidden.bs.modal', function () {
            $(this).find('[video-html]').html('');
        });
    },

    filter: function () {
        var data = {};

        if ($('[data-videos] [name="date"]:checked').length) {
            data.date = $('[data-videos] [name="date"]:checked').val();
        } else {
            data.date = $('[data-videos] [name="date"]').val();
        }

        if ($('[data-videos] [name="location_id"]:checked').length) {
            data.location_id = $('[data-videos] [name="location_id"]:checked').val();
        } else {
            data.location_id = $('[data-videos] [name="location_id"]').val();
        }

        if ($('[data-videos] [name="industry_id"]:checked').length) {
            data.industry_id = $('[data-videos] [name="industry_id"]:checked').val();
        } else {
            data.industry_id = $('[data-videos] [name="industry_id"]').val();
        }

        if (location.href.indexOf('/video') > -1) {
            data.paginate = 8;
        }

        return data;
    },

    html: function (html, data) {
        if (data.location && data.location.industry) {
            html.find('[html-industry-name]')
                .html(data.location.industry.name)
                .prev().css('background-color', data.location.industry.color);
        } else {
            html.find('[html-industry-name]')
                .html('Все индустрии')
                .prev().addClass('bg-border-gray');
        }

        html.attr({
            'video-open': data.id,
            'data-json': JSON.stringify(data)
        });

        return html;
    },

    items: function () {
        items.create({
            name: 'video',
            data: videos.filter,
            first_load: true,
            html: videos.html,
            scroll_window: location.href.indexOf('/video') > -1
        });
    }

}

$(videos.init);