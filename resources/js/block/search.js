var search = {

    init: function () {
        search.items();

        $(document)
            .on('click', '[data-filter-tag] label', function (e) {
                e.preventDefault();

                var input = $(this).prev();

                if (input.prop('checked')) {
                    input.prop('checked', false);
                } else {
                    input.prop('checked', true);
                }

                search.change();
            })
            .on('input', '[data-search-query], [data-search-tag]', search.change);

        // TODO searchTagsExpandBtn
        const searchTagsExpandBtn = document.querySelector('.search-tags-expand');
        searchTagsExpandBtn.addEventListener('click', el => {
            el.target.parentElement.querySelector('.fieldset').classList.add('expanded');
            el.target.style.display = 'none';
        });
    },

    changeTimer: false,
    change: function () {
        if (search.isQuery()) {
            if (search.changeTimer) clearTimeout(search.changeTimer);

            search.changeTimer = setTimeout(function () {
                items.update('search');
            }, 1000);
        } else {
            $('[items-list-search]').hide();
        }
    },

    isQuery: function () {
        return search.getTag() != '' || search.getQuery() != '';
    },

    getQuery: function () {
        var query = $.trim($('[data-search-query]').val());
        return query.length > 2 ? query : '';
    },

    getTag: function () {
        return $('[data-search-tag]:checked').length
            ? $('[data-search-tag]:checked').val()
            : '';
    },

    filter: function () {
        var data = {};

        if (search.getQuery() != '') {
            data.query = search.getQuery();
        }

        if (search.getTag() != '') {
            data.tag = search.getTag();
        }

        return data;
    },

    html: function (html, data) {
        var words = [];

        if (search.getQuery() != '') {
            words.push(search.getQuery());
        }

        if (search.getTag() != '') {
            words.push(search.getTag());
        }

        if (words.length) {
            $.each(words, function (i, word) {
                data.name = data.name.replace(new RegExp(word, "gi"), '<strong>' + word + '</strong>');
            });

            html.find('[html="name"]').html(data.name);
        }

        return html;
    },

    items: function () {
        items.create({
            name: 'search',
            data: search.filter,
            html: search.html,
            onPrint: function (response) {
                if (response.data.length == 0) {
                    if (search.getQuery() != '' && search.getTag() != '') {
                        $('[items-empty-search]').html('По запросу «' + search.getQuery() + '» и тегу «' + search.getTag() + '» ничего не найдено.');
                    } else if (search.getQuery() != '') {
                        $('[items-empty-search]').html('По запросу «' + search.getQuery() + '» ничего не найдено.');
                    } else if (search.getTag() != '') {
                        $('[items-empty-search]').html('По тегу «' + search.getTag() + '» ничего не найдено.');
                    }
                }
            }
        });
    }

}

$(search.init);