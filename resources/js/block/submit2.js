import Suggestions from '../../../../js-modules/Suggestions';

class SubmitBlock2 {

    constructor() {
        this.validateTimeOut = false;
        this.section = '.section-submit';
        this.reset = false;
        this.submitAjax = false;
        this.events();
    }

    events() {
        $(document)
            .on('input', this.section + ' #member_of_gildia [name]', (e) => {
                this.validateGildia(e);
            })
            .on('submit', this.section + ' #member_of_gildia', (e) => {
                this.submit(e);
            })
            .on('submit', this.section + ' #prof_organization', (e) => {
                this.submit(e);
            });

        ZoneObject.create('.section-submit', {
            run: () => {
                new Suggestions({ token: 'c0770f3c2963c9478b5bf202a1ed8a0d09953cea' }).city($('#member_of_gildia [name="geography"]'));
            }
        });
    }

    validateGildia(e) {
        if (this.reset) {
            this.reset = false;
            return false;
        }

        if (this.validateTimeOut) clearTimeout(this.validateTimeOut);

        var form = $(e.currentTarget).parents('form');

        this.validateTimeOut = setTimeout(function () {
            var errors = validate.check(form, {
                name_nominate: 'required|max:255',
                deposit: 'required|max:3000',
                geography: 'required|max:255',
                nomination_id: 'required',
                presentation: 'mimes:pdf,mp4,doc,docx|max:30720',
                phone_nominee: 'max:255',
                email_nominee: 'required|email|max:255',
                unique: 'required|max:2000',
                why_worthy: 'required|max:5000'
            }, {
                'nomination_id.required': 'Выберите номинацию из списка',
            }, true);

            if (Object.keys(errors).length) {
                form.find('.btn').addClass('opacity-50');
            } else {
                form.find('.btn').removeClass('opacity-50');
            }
        }, 100);
    }

    submit(e) {
        e.preventDefault();

        if (this.submitAjax) {
            return false;
        }

        this.submitAjax = true;

        var form = $(e.currentTarget);

        if (typeof ym === 'function') {
            ym(85966545, 'reachGoal', 'gildia_click');
            NotifyTG.send('Отправка ЧЛЕН ГИЛЬДИИ');
        }

        ajax({
            url: form.attr('action'),
            type: 'post',
            dataType: 'json',
            processData: false,
            contentType: false,
            data: new FormData(form[0]),
            queue: true
        }, (json) => {
            this.submitAjax = false;

            if (typeof json === 'object' && json != null) {
                if (json.success) {
                    modalNotify.create({
                        text: 'Заявка успешно отправлена!',
                        btn: 'Закрыть',
                        onClickClose: true
                    });

                    this.reset = true;

                    form.trigger('reset');
                    form.find('[data-output-count]').html(0);

                    if (typeof ym === 'function') {
                        ym(85966545, 'reachGoal', 'gildia_success');
                        NotifyTG.send('Заявка успешно отправлена ЧЛЕН ГИЛЬДИИ');
                    }
                } else if (json.errors) {
                    debug.send('errors: ' + JSON.stringify(json));

                    NotifyTG.send('Ошибки в полях ЧЛЕН ГИЛЬДИИ: ' + JSON.stringify(json));
                } else if (json.error) {
                    modalNotify.create({
                        text: json.error,
                        btn: 'Закрыть',
                        onClickClose: true
                    });

                    NotifyTG.send('Ошибка ЧЛЕН ГИЛЬДИИ: ' + json.error);
                } else {
                    modalNotify.create({
                        title: 'Что-то пошло не так :(<br>попробуйте позже',
                        btn: 'Закрыть',
                        onClickClose: true
                    });
                    debug.send('isObject, no key: ' + JSON.stringify(json));

                    NotifyTG.send('Что-то пошло не так: ' + JSON.stringify(json));
                }
            } else {
                modalNotify.create({
                    title: 'Что-то пошло не так :(<br>попробуйте позже',
                    btn: 'Закрыть',
                    onClickClose: true
                });
                debug.send('isObject, no key: ' + JSON.stringify(json));

                NotifyTG.send('Что-то пошло не так: ' + JSON.stringify(json));
            }
        }, form);
    }

}

new SubmitBlock2();