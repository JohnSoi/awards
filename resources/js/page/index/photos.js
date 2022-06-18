import photoNavigate from '../photos/navigate';
import photoHtml from '../photos/html';
import photoModal from '../photos/modal';
import photoMasonry from '../photos/masonry';
import photoLoaded from '../photos/photoLoaded';

ZoneObject.create('.section-photos', {
    run: () => {
        items.create({
            name: 'photo',
            first_load: true,
            html: photoHtml,
            modal: photoModal,
            onPrint: (response) => {
                photoNavigate(response);
                photoLoaded(photoMasonry);
            }
        });
    }
});