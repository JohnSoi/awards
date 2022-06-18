import PhotoNavigate from '../../class/Photo/Navigate';

var PhotoNavigateModel = null;

const navigate = (response) => {
    if (PhotoNavigateModel === null) {
        PhotoNavigateModel = new PhotoNavigate({
            total: response.total,
            elem: {
                btn: {
                    next: '[data-photo-next]',
                    prev: '[data-photo-prev]'
                },
                total: '[data-all-count]',
                current: '[data-active-count]',
                item: '[items-list-photo] [items-html-photo]',
                image: '[items-modal-photo] [data-html="image"]'
            },
            loadNext: (callback) => {
                items.loadNextData(items.model['photo'], () => {
                    callback();
                });
            }
        });
    } else {
        PhotoNavigateModel.setTotal(response.total);
    }
}

export default navigate;