import Suggestions from '../../../../js-modules/Suggestions';

class SubmitBlock {

    constructor() {
        this.validateTimeOut = false;
        this.section = '.section-submit';
        this.reset = false;
        this.events();
    }

    events() {
        $(document)
            .on('change', this.section + ' [name="form_type"]', (e) => {
                this.formTypeCange(e);
            })
            .on('input', this.section + ' #member_of_gildia [name]', (e) => {
                this.validateGildia(e);
            })
            .on('input', this.section + ' #prof_organization [name]', (e) => {
                this.validateProf(e);
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
                new Suggestions({ token: 'c0770f3c2963c9478b5bf202a1ed8a0d09953cea' }).city($('#prof_organization [name="geography"]'));
                new Suggestions({ token: 'c0770f3c2963c9478b5bf202a1ed8a0d09953cea' }).organization($('#prof_organization [name="organization"], #prof_organization [name="inn"]'), {
                    onSelect: (data) => {
                        this.setOrganization(data);
                    }
                });
            }
        });
    }

    setOrganization(data) {
        if (typeof data.data !== 'object') return null;

        data = data.data;

        if (data.name && data.name.full) {
            $('#prof_organization [name="organization"]').val(data.name.full);
        }

        if (data.inn) {
            $('#prof_organization [name="inn"]').val(data.inn);
        }

        if (data.kpp) {
            $('#prof_organization [name="kpp"]').val(data.kpp);
        }

        if (data.management && data.management.name) {
            $('#prof_organization [name="director"]').val(data.management.name);
        }

        $('#prof_organization [name="organization"], #prof_organization [name="inn"], #prof_organization [name="kpp"], #prof_organization [name="director"]').trigger('change').trigger('blur');
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
                name: 'required',
                deposit: 'required|max:3000',
                geography: 'required',
                email_nominee: 'required|email',
                unique: 'required|max:2000',
                phone_nominate: 'required',
                email_nominate: 'required|email',
                name_nominate: 'required',
                why_worthy: 'required|max:5000',
                industry_id: 'required',
                nomination_id: 'required',
                presentation: 'mimes:pdf,mp4,doc,docx|max:30720',
            }, {
                'industry_id.required': 'Выберите индустрию из списка',
                'nomination_id.required': 'Выберите номинацию из списка',
            }, true);

            if (Object.keys(errors).length) {
                form.find('.btn').addClass('opacity-50');
            } else {
                form.find('.btn').removeClass('opacity-50');
            }
        }, 100);
    }

    validateProf(e) {
        if (this.reset) {
            this.reset = false;
            return false;
        }

        if (this.validateTimeOut) clearTimeout(this.validateTimeOut);

        var form = $(e.currentTarget).parents('form');

        this.validateTimeOut = setTimeout(function () {
            var errors = validate.check(form, {
                organization: 'required',
                inn: 'required',
                director: 'required',
                deposit: 'required|max:3000',
                unique: 'required|max:2000',
                why_worthy: 'required|max:5000',
                geography: 'required',
                email_nominee: 'required|email',
                phone_nominate: 'required',
                email_nominate: 'required|email',
                industry_id: 'required',
                nomination_id: 'required',
                presentation: 'mimes:pdf,mp4,doc,docx|max:30720',
            }, {
                'industry_id.required': 'Выберите индустрию из списка',
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

        var form = $(e.currentTarget);

        if (typeof ym === 'function') {
            if (form.attr('action').indexOf('gildia') > -1) {
                ym(85966545, 'reachGoal', 'gildia_click');
                NotifyTG.send('Отправка ЧЛЕН ГИЛЬДИИ');
            } else {
                ym(85966545, 'reachGoal', 'org_click');
                NotifyTG.send('Отправка ОРГАНИЗАЦИЯ');
            }
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
            if (typeof json === 'object' && json != null) {
                if (json.success) {
                    modalNotify.create({
                        text: 'Заявка успешно отправлена!',
                        btn: 'Закрыть',
                        onClickClose: true
                    });

                    this.reset = true;

                    form.trigger('reset');
                    form.find('[name]').trigger('blur');
                    form.find('[data-output-count]').html(0);

                    if (typeof ym === 'function') {
                        if (form.attr('action').indexOf('gildia') > -1) {
                            ym(85966545, 'reachGoal', 'gildia_success');
                            NotifyTG.send('Заявка успешно отправлена ЧЛЕН ГИЛЬДИИ');
                        } else {
                            ym(85966545, 'reachGoal', 'org_submit');
                            NotifyTG.send('Заявка успешно отправлена ОРГАНИЗАЦИЯ');
                        }
                    }
                } else if (json.errors) {
                    debug.send('errors: ' + JSON.stringify(json));

                    if (form.attr('action').indexOf('gildia') > -1) {
                        NotifyTG.send('Ошибки в полях ЧЛЕН ГИЛЬДИИ: ' + JSON.stringify(json));
                    } else {
                        NotifyTG.send('Ошибки в полях ОРГАНИЗАЦИЯ: ' + JSON.stringify(json));
                    }
                } else if (json.error) {
                    modalNotify.create({
                        text: json.error,
                        btn: 'Закрыть',
                        onClickClose: true
                    });

                    if (form.attr('action').indexOf('gildia') > -1) {
                        NotifyTG.send('Ошибка ЧЛЕН ГИЛЬДИИ: ' + json.error);
                    } else {
                        NotifyTG.send('Ошибка ОРГАНИЗАЦИЯ: ' + json.error);
                    }
                } else {
                    modalNotify.create({
                        title: 'Что-то пошло не так :(<br>попробуйте позже',
                        btn: 'Закрыть',
                        onClickClose: true
                    });
                    debug.send('isObject, no key: ' + JSON.stringify(json));

                    if (form.attr('action').indexOf('gildia') > -1) {
                        NotifyTG.send('Что-то пошло не так: ' + JSON.stringify(json));
                    } else {
                        NotifyTG.send('Что-то пошло не так: ' + JSON.stringify(json));
                    }
                }
            } else {
                modalNotify.create({
                    title: 'Что-то пошло не так :(<br>попробуйте позже',
                    btn: 'Закрыть',
                    onClickClose: true
                });
                debug.send('isObject, no key: ' + JSON.stringify(json));

                if (form.attr('action').indexOf('gildia') > -1) {
                    NotifyTG.send('Что-то пошло не так: ' + JSON.stringify(json));
                } else {
                    NotifyTG.send('Что-то пошло не так: ' + JSON.stringify(json));
                }
            }
        }, form);
    }

    formTypeCange(e) {
        if ($(e.currentTarget).prop('checked')) {
            $('#member_of_gildia').fadeOut(() => {
                $('#prof_organization').fadeIn();
            });
        } else {
            $('#prof_organization').fadeOut(() => {
                $('#member_of_gildia').fadeIn();
            });
        }
    }

}

new SubmitBlock();