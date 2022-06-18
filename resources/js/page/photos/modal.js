import Image from '../../class/Image';

export default {
    data: function (id, callback) {
        var src = $('[items-html-photo="' + id + '"] [src]').attr('src'),
            src = Image.srcOriginal(src);

        callback({
            src: src
        });
    }
}