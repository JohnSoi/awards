import Admined from 'admined';

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
    editAction: false,
    addAction: false,
    deleteAction: false,
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