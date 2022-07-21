require('admined');

function getDatetime() {
    var date = new Date();
    var month = date.getMonth() + 1,
        day = date.getDate(),
        datetime = '';
    datetime += date.getFullYear() + '-';
    datetime += (month < 10 ? '0' + month : month) + '-';
    datetime += (day < 10 ? '0' + day : day) + ' ';
    datetime += date.toLocaleTimeString().slice(0, -3);
    return datetime;
}

Admined.page('post', 'Новости', {
    form: [
        {
            name: 'name',
            placeholder: 'Название'
        },
        {
            name: 'description',
            placeholder: 'Описание',
            type: 'text'
        },
        {
            name: 'text',
            placeholder: 'Текст',
            type: 'texteditor'
        },
        {
            name: 'image',
            placeholder: 'Картинка',
            thumb: 620,
            type: 'file'
        },
        {
            name: 'published',
            placeholder: 'Опубликован',
            type: 'switch'
        },
        {
            name: 'created_at',
            placeholder: 'Дата',
            type: 'datetime',
            value: getDatetime
        },
    ]
});

Admined.page('project', 'Проекты', {
    form: [
        {
            name: 'id',
            placeholder: 'ID',
            center: true,
            readonly: true
        },
        {
            name: 'image',
            placeholder: 'Картинка',
            thumb: 266,
            type: 'file'
        },
        {
            name: 'is_winner',
            placeholder: 'Победитель',
            type: 'switch'
        },
        {
            name: 'is_top',
            placeholder: 'Топ',
            type: 'switch'
        },
        {
            name: 'name_nominate',
            placeholder: 'ФИО/Название проекта',
        },
        {
            name: 'deposit',
            placeholder: 'Вклад',
            type: 'texteditor'
        },
        {
            name: 'geography',
            placeholder: 'География'
        },
        {
            name: 'nomination_id',
            placeholder: 'Номинация',
            type: 'select'
        },
        {
            name: 'presentation',
            placeholder: 'Презентация',
            type: 'file'
        },
        {
            name: 'phone_nominee',
            placeholder: 'Телефон номинируемого'
        },
        {
            name: 'email_nominee',
            placeholder: 'Email номинируемого'
        },
        {
            name: 'unique',
            placeholder: 'Уникальность',
            type: 'text'
        },
        {
            name: 'social_url',
            placeholder: 'Соц. сеть',
        },
        {
            name: 'why_worthy',
            placeholder: 'Почему достоин',
            type: 'text'
        },
        {
            name: 'created_at',
            placeholder: 'Дата',
            type: 'datetime',
            readonly: true
        },
        {
            name: 'shortlist_texts',
            placeholder: 'Контент для шорт-лист',
            type: 'array',
            fields: [
                {
                    name: 'shortlist_texts[title][]',
                    placeholder: 'Заголовок'
                },
                {
                    name: 'shortlist_texts[text][]',
                    placeholder: 'Текст',
                    type: 'text'
                }
            ]
        },
        {
            name: 'shortlist_image',
            placeholder: 'Фотография',
            type: 'file',
            thumb: 800,
            filter: false,
        },
        {
            name: 'shortlist_video',
            placeholder: 'Код видео',
            type: 'text',
            filter: false,
        }
    ]
});

Admined.page('is_lk', 'Личный кабинет', {
    parent: 'project',
    form: [
        {
            name: 'id',
            placeholder: 'ID',
            center: true,
            readonly: true
        },
        {
            name: 'name_nominate',
            placeholder: 'ФИО/Название проекта',
        },
        {
            name: 'deposit',
            placeholder: 'Вклад',
            type: 'texteditor'
        },
        {
            name: 'geography',
            placeholder: 'География'
        },
        {
            name: 'nomination_id',
            placeholder: 'Номинация',
            type: 'select'
        },
        {
            name: 'presentation',
            placeholder: 'Презентация',
            type: 'file'
        },
        {
            name: 'phone_nominee',
            placeholder: 'Телефон номинируемого'
        },
        {
            name: 'email_nominee',
            placeholder: 'Email номинируемого'
        },
        {
            name: 'unique',
            placeholder: 'Уникальность',
            type: 'text'
        },
        {
            name: 'social_url',
            placeholder: 'Соц. сеть',
        },
        {
            name: 'why_worthy',
            placeholder: 'Почему достоин',
            type: 'text'
        },
        {
            name: 'created_at',
            placeholder: 'Дата',
            type: 'datetime',
            readonly: true
        },
        {
            name: 'status',
            placeholder: 'Статус заявки',
            type: 'select',
        },
    ]
});

Admined.page('form2', 'Форма 2', {
    parent: 'project',
    form: [
        {
            name: 'id',
            placeholder: 'ID',
            center: true,
            readonly: true
        },
        {
            name: 'name_nominate',
            placeholder: 'ФИО/Название проекта',
        },
        {
            name: 'deposit',
            placeholder: 'Вклад',
            type: 'texteditor'
        },
        {
            name: 'geography',
            placeholder: 'География'
        },
        {
            name: 'nomination_id',
            placeholder: 'Номинация',
            type: 'select'
        },
        {
            name: 'presentation',
            placeholder: 'Презентация',
            type: 'file'
        },
        {
            name: 'phone_nominee',
            placeholder: 'Телефон номинируемого'
        },
        {
            name: 'email_nominee',
            placeholder: 'Email номинируемого'
        },
        {
            name: 'unique',
            placeholder: 'Уникальность',
            type: 'text'
        },
        {
            name: 'social_url',
            placeholder: 'Соц. сеть',
        },
        {
            name: 'why_worthy',
            placeholder: 'Почему достоин',
            type: 'text'
        },
        {
            name: 'created_at',
            placeholder: 'Дата',
            type: 'datetime',
            readonly: true
        },
    ]
});

Admined.page('gildia', 'Член гильдии', {
    parent: 'project',
    form: [
        {
            name: 'id',
            placeholder: 'ID',
            center: true,
            readonly: true
        },
        {
            name: 'name',
            placeholder: 'ФИО'
        },
        {
            name: 'industry_id',
            placeholder: 'Индустрия',
            type: 'select'
        },
        {
            name: 'phone_nominate',
            placeholder: 'Телефон',
        },
        {
            name: 'email_nominate',
            placeholder: 'Email',
        },
        {
            name: 'name_nominate',
            placeholder: 'ФИО/Название проекта',
        },
        {
            name: 'deposit',
            placeholder: 'Вклад',
            type: 'texteditor'
        },
        {
            name: 'geography',
            placeholder: 'География'
        },
        {
            name: 'nomination_id',
            placeholder: 'Номинация',
            type: 'select'
        },
        {
            name: 'presentation',
            placeholder: 'Презентация',
            type: 'file'
        },
        {
            name: 'phone_nominee',
            placeholder: 'Телефон номинируемого'
        },
        {
            name: 'email_nominee',
            placeholder: 'Email номинируемого'
        },
        {
            name: 'unique',
            placeholder: 'Уникальность',
            type: 'text'
        },
        {
            name: 'why_worthy',
            placeholder: 'Почему достоин',
            type: 'text'
        },
        {
            name: 'created_at',
            placeholder: 'Дата',
            type: 'datetime',
            readonly: true
        },
    ]
});

Admined.page('organization', 'Организации', {
    parent: 'project',
    form: [
        {
            name: 'id',
            placeholder: 'ID',
            center: true,
            readonly: true
        },
        {
            name: 'name',
            placeholder: 'Организация'
        },
        {
            name: 'director',
            placeholder: 'Директор'
        },
        {
            name: 'phone_nominate',
            placeholder: 'Телефон',
        },
        {
            name: 'inn',
            placeholder: 'ИНН',
        },
        {
            name: 'industry_id',
            placeholder: 'Индустрия',
            type: 'select'
        },
        {
            name: 'email_nominate',
            placeholder: 'Email',
        },
        {
            name: 'name_nominate',
            placeholder: 'ФИО/Проект',
        },
        {
            name: 'deposit',
            placeholder: 'Вклад',
            type: 'text'
        },
        {
            name: 'geography',
            placeholder: 'География'
        },
        {
            name: 'nomination_id',
            placeholder: 'Номинация',
            type: 'select'
        },
        {
            name: 'presentation',
            placeholder: 'Презентация',
            type: 'file'
        },
        {
            name: 'phone_nominee',
            placeholder: 'Телефон номинируемого'
        },
        {
            name: 'email_nominee',
            placeholder: 'Email номинируемого'
        },
        {
            name: 'unique',
            placeholder: 'Уникальность',
            type: 'text'
        },
        {
            name: 'why_worthy',
            placeholder: 'Почему достоин',
            type: 'text'
        },
        {
            name: 'created_at',
            placeholder: 'Дата',
            type: 'datetime',
            readonly: true
        },
    ]
});

Admined.page('mailing', 'Рассылка', {
    form: [
        {
            name: 'id',
            placeholder: 'ID',
            center: true,
            readonly: true
        },
        {
            name: 'name',
            placeholder: 'Название'
        },
        {
            name: 'stat',
            placeholder: 'Отправлено',
            readonly: true,
            filter: 'readonly'
        },
        {
            name: 'sort',
            placeholder: 'Сортировка'
        },
        {
            name: 'view',
            placeholder: 'Файл',
            type: 'select'
        },
        {
            name: 'status_id',
            placeholder: 'Статус',
            type: 'select'
        },
        {
            name: 'users_filter',
            placeholder: 'Фильтр'
        },
        {
            name: 'email_list',
            placeholder: 'Email список'
        },
        {
            name: 'created_at',
            placeholder: 'Дата',
            type: 'datetime',
            readonly: true
        },
    ]
});

Admined.page('user', 'Пользователи', {
    form: [
        {
            name: 'id',
            placeholder: 'ID',
            center: true,
            readonly: true
        },
        {
            name: 'photo',
            placeholder: 'Фотография',
            type: 'file',
            thumb: 500
        },
        {
            name: 'name',
            placeholder: 'ФИО'
        },
        {
            name: 'email',
            placeholder: 'Email'
        },
        {
            name: 'phone',
            placeholder: 'Телефон'
        },
        {
            name: 'contacts',
            placeholder: 'Доп. контакты'
        },
        {
            name: 'position',
            placeholder: 'Должность'
        },
        {
            name: 'group_id',
            placeholder: 'Группа',
            type: 'select'
        },
        {
            name: 'password',
            placeholder: 'Пароль',
            filter: false
        },
        {
            name: 'password_confirmation',
            placeholder: 'Повторите пароль',
            filter: false
        },
        {
            name: 'created_at',
            placeholder: 'Дата',
            type: 'datetime',
            readonly: true
        },
    ]
});

Admined.page('block_user', 'Блок экспертов', {
    form: [
        {
            name: 'id',
            placeholder: 'ID',
            center: true,
            readonly: true
        },
        {
            name: 'block_id',
            placeholder: 'Группа',
            type: 'select'
        },
        {
            name: 'user_id',
            placeholder: 'Пользователь',
            type: 'select'
        },
        {
            name: 'sort',
            placeholder: 'Сортировка'
        },
        {
            name: 'created_at',
            placeholder: 'Дата',
            type: 'datetime',
            readonly: true
        },
    ]
});

Admined.page('evaluation', 'Оценки', {
    form: [
        {
            name: 'user_name',
            placeholder: 'ФИО',
            with: 'user',
            text_key: 'name',
            readonly: true
        },
        {
            name: 'project_name_nominate',
            placeholder: 'Проект',
            with: 'project',
            text_key: 'name_nominate',
            readonly: true
        },
        {
            name: 'comment',
            placeholder: 'Комментарий',
            type: 'text',
            readonly: true
        },
        {
            name: 'total',
            placeholder: 'Оценка',
            readonly: true
        },
        {
            name: 'updated_at',
            placeholder: 'Дата',
            type: 'datetime',
            readonly: true,
        }
    ],
    editAction: false,
    addAction: false,
    deleteAction: false,
});

Admined.page('expert', 'Эксперты', {
    form: [
        {
            name: 'name',
            placeholder: 'ФИО',
            with: 'user',
            text_key: 'name',
            readonly: true
        },
        {
            name: 'email',
            placeholder: 'Email',
            with: 'user',
            text_key: 'email',
            readonly: true
        },
        {
            name: 'last_online_at',
            placeholder: 'Последнее посещение',
            with: 'user',
            text_key: 'last_online_at',
            type: 'datetime',
            readonly: true
        },
        {
            name: 'stat',
            placeholder: 'Оценено',
            filter: 'readonly',
            readonly: true,
            href: '/admin?url=evaluation&user_name={user.name}',
            target: '_blank'
        }
    ],
    parent: 'evaluation',
    editAction: false,
    addAction: false,
    deleteAction: false,
});

Admined.page('photo', 'Фотографии', {
    form: [
        {
            name: 'file',
            placeholder: 'Фотография',
            type: 'file',
            thumb: 422,
            multiple: true,
            upload_queue: true
        },
        {
            name: 'is_home',
            placeholder: 'На главной',
            type: 'switch'
        },
        {
            name: 'sort',
            placeholder: 'Сортировка',
            value: 500,
        },
        {
            name: 'date',
            placeholder: 'Дата фотографии',
        }
    ]
});

Admined.page('nomination', 'Номинации', {
    form: [
        {
            name: 'name',
            placeholder: 'Название'
        },
        {
            name: 'description',
            placeholder: 'Описание',
            type: 'text'
        },
        {
            name: 'title',
            placeholder: 'Заголовок'
        },
        {
            name: 'about',
            placeholder: 'О номинации',
            type: 'text'
        }
    ],
    deleteAction: false,
    addAction: false
});

Admined.page('criteria', 'Критерии оценки', {
    form: [
        {
            name: 'name',
            placeholder: 'Название'
        }
    ]
});

Admined.page('region', 'Регионы', {
    form: [
        {
            name: 'name',
            placeholder: 'Название'
        }
    ]
});