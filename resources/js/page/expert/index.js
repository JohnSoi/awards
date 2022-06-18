items.create({
    name: 'expert',
    scroll_window: true,
    first_load: true,
    modal: {
        data: (id, callback) => {
            $.get('/expert/' + id, callback);
        }
    }
});