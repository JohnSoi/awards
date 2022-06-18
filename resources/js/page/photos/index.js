import { Metro, Select } from 'metro4';

import photoHtml from './html';
import photoFilter from './filter';
import photoNavigate from './navigate';
import photoModal from './modal';
import photoMasonry from './masonry';
import photoLoaded from './photoLoaded';

items.create({
    name: 'photo',
    scroll_window: true,
    first_load: true,
    data: photoFilter,
    html: photoHtml,
    modal: photoModal,
    onPrint: (response) => {
        photoNavigate(response);
        photoLoaded(photoMasonry);
    }
});