class Image {

    srcOriginal(src, size) {
        if (src.indexOf('_') > -1) {
            var filename = src.split('/'),
                filename = filename[filename.length - 1],
                src_size = filename.split('_'),
                src_size = src_size[0];

            return src.replace(src_size + '_', size ? size + '_' : '');
        }

        return src;
    }

    thumb(src, size) {
        return this.srcOriginal(src, size);
    }

}

export default new Image();