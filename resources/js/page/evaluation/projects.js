import { Metro, Select } from 'metro4';
require('../../module/select');
require('../../module/radio');

class EvaluationProjects {

    constructor() {
        this.sort_key = false;
        this.sort_val = false;
        this.items_name = $(window).width() > 1199 ? 'project' : 'project-mobile';

        $(document)
            .on('change', '[name="nomination_id"], [name="is_organization"]', () => {
                items.update(this.items_name);
            })
            .on('change', '[name="sort"]', (e) => {
                this.sortMobile($(e.currentTarget));
            })
            .on('click', '[data-sort]', (e) => {
                this.sort($(e.currentTarget));
            })
            .on('click', '[data-project-url] *', (e) => {
                var elem = $(e.currentTarget).closest('[data-project-url]'),
                    url = elem.attr('data-project-url');

                if (url) {
                    location.href = url;
                }
            })
            .on('click', '[data-btn-is-top]', (e) => {
                this.top_toggle($(e.currentTarget));
            })
            .on('click', '[data-btn-accept]', (e) => {
                this.accept_toggle($(e.currentTarget));
            })
            .on('click', '[data-btn-delete]', (e) => {
                this.deleteConfirm($(e.currentTarget));
            });

        this.items();
    }

    top_toggle(btn) {
        var id = btn.attr('data-btn-is-top');

        ajax({
            url: '/evaluation/project_top_toggle/' + id,
            type: 'post',
            dataType: 'json',
            queue: true,
            data: {
                _token: csrf_token
            }
        }, (json) => {
            if (json.add) {
                btn.addClass('active');
            }

            if (json.remove) {
                btn.removeClass('active');
            }
        });
    }

    accept_toggle(btn) {
        var id = btn.attr('data-btn-accept');

        ajax({
            url: '/evaluation/project_accept_toggle/' + id,
            type: 'post',
            dataType: 'json',
            queue: true,
            data: {
                _token: csrf_token
            }
        }, (json) => {
            if (json.add) {
                btn.addClass('active');
            }

            if (json.remove) {
                btn.removeClass('active');
            }
        });
    }

    deleteConfirm(btn) {
        var parent = btn.parents('[items-html-' + this.items_name + ']'),
            name = parent.find('[html="name_nominate"]').html();

        modalNotify.create({
            text: 'Вы уверены, что хотите удалить заявку<br>«' + name + '»?',
            btn: 'Удалить',
            onClickClose: true,
            btnClose: true,
            onClick: () => {
                this.delete(btn);
            }
        });
    }

    delete(btn) {
        var id = btn.attr('data-btn-delete'),
            parent = btn.parents('[items-html-' + this.items_name + ']');

        ajax({
            url: '/evaluation/project_delete/' + id,
            type: 'post',
            dataType: 'json',
            queue: true,
            data: {
                _token: csrf_token
            }
        }, () => {
            parent.remove();
        });
    }

    sortMobile(input) {
        var val = input.val().split(':');
        this.sort_key = val[0];
        this.sort_val = val[1];

        items.update(this.items_name);
    }

    sort(elem) {
        this.sort_key = elem.attr('data-sort');
        this.sort_val = this.sort_val == 'desc' ? 'asc' : 'desc';

        items.update(this.items_name);
    }

    filter() {
        var data = { 'nomination_id': [] };

        $('[name="nomination_id"]:checked').each((i, item) => {
            data.nomination_id.push($(item).val());
        });

        if ($('[name="is_organization"]').prop('checked')) {
            data.is_organization = 1;
        }

        if (this.sort_key) {
            data.sort_key = this.sort_key;
            data.sort_val = this.sort_val;
        }

        return data;
    }

    items() {
        var data = {
            name: this.items_name,
            data: () => {
                return this.filter();
            },
            scroll_window: true,
            first_load: true,
        }

        if (user.group_id == 5) {
            var htmlEvalItem = `
                <div class="col-12">
                    <div class="evaluation-textblock">
                        <div class="evaluation-textblock__title" data-user-name></div>
                        <div class="evaluation-textblock__description opacity-70" data-comment></div>
                    </div>
                </div>
            `;

            data.modal = {
                selector: '.nominees-item__number, .nominees-item__title, .nominees-item__nomination, .nominees-item__eval, .nominees-item__score, .nominees-item__comment',
                data: (id, callback) => {
                    ajax({
                        url: '/evaluation/project/' + id,
                        type: 'get',
                        queue: true
                    }, callback);
                },
                html: (html, data, i) => {
                    html.find('[data-evals]').html('');

                    if (data.evaluations) {
                        $.each(data.evaluations, (i, item) => {
                            if (item.comment) {
                                var htmlItem = $(htmlEvalItem).clone();
                                htmlItem.find('[data-user-name]').html(item.user.name);
                                htmlItem.find('[data-comment]').html(item.comment);
                                console.log(htmlItem);
                                html.find('[data-evals]').append(htmlItem);
                            }
                        });
                    }

                    return html;
                }
            }

            data.html = (html, data, i) => {
                if (data.is_top) {
                    html.find('[attr="data-btn-is-top:id"]').addClass('active');
                }

                if (data.is_accept) {
                    html.find('[attr="data-btn-accept:id"]').addClass('active');
                }

                return html
            }
        }

        items.create(data);
    }

}

new EvaluationProjects();