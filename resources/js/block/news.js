ZoneObject.create('[data-section-news-block]', {
    run: () => {
        items.create({
            name: 'news-block',
            first_load: true,
            data: {
                paginate: 4
            },
            html: function (html, data) {
                html.find('[html-img]').html('<img src="' + data.image + '">');

                return html;
            }
        });
    }
});

ZoneObject.create('[data-section-news]', {
    run: () => {
        items.create({
            name: 'news',
            first_load: true,
            scroll_window: true,
            data: {
                paginate: 8
            },
            html: function (html, data) {
                html.find('[html-img]').html('<img src="' + data.image + '">');

                return html;
            }
        });
    }
});