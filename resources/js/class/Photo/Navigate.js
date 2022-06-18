import Image from "../Image";

class Navigate {

    constructor(obj) {
        this.elem = obj.elem;
        this.elem.modal = this.elem.modal ? this.elem.modal : '[items-modal-photo]';
        this.total = obj.total;
        this.originalSize = obj.originalSize;
        this.loadNext = obj.loadNext;

        this.events();
    }

    setTotal(total) {
        if (total) {
            this.total = total;
        }

        $(this.elem.modal).find(this.elem.total).html(this.total);
    }

    setCurrent() {
        $(this.elem.modal).find(this.elem.current).html(this.current);
    }

    loadNextItems(callback) {
        if ($(this.elem.item).eq(this.current).length == 0 && this.loadNext) {
            this.loadNext(() => {
                callback();
            });
        } else {
            callback();
        }
    }

    setImage(callback) {
        this.loadNextItems(() => {
            var next = $('[data-preload="next"]'),
                prev = $('[data-preload="prev"]'),
                image = $(this.elem.image + ' [src]:eq(1)');

            if (
                (next.length == 0 && this.way == 'next') ||
                (prev.length == 0 && this.way == 'prev')
            ) {
                callback();
                return false;
            }

            // Изменение DOM
            if (this.way == 'next') {
                next.removeAttr('data-preload');
                prev.remove();
                image.attr('data-preload', 'prev');
            } else if (this.way == 'prev') {
                prev.removeAttr('data-preload');
                next.remove();
                image.attr('data-preload', 'next');
            }

            // Плавная смена фото
            image.animate({
                opacity: 0
            }, 500, () => {
                image.hide();

                if (this.way == 'next') {
                    next.show().css('opacity', 0).animate({
                        opacity: 1
                    }, 500);
                } else if (this.way == 'prev') {
                    prev.show().css('opacity', 0).animate({
                        opacity: 1
                    }, 500);
                }
            });

            callback();
        });
    }

    getIndexSrc(index) {
        var img = $(this.elem.item + ':eq(' + index + ') [src]');
        return img.length ? Image.srcOriginal(img.attr('src'), this.originalSize) : null;
    }

    events() {
        $(document)
            .on('click', this.elem.item, (e) => {
                this.open(e);
            })
            .on('click', this.elem.btn.next, () => {
                this.next();
            })
            .on('click', this.elem.btn.prev, () => {
                this.prev();
            });
    }

    open(e) {
        this.current = $(e.currentTarget).index() + 1;
        this.setCurrent();
        this.setTotal();
        setTimeout(() => {
            this.preload();
        }, 400);
    }

    next() {
        if (this.current < this.total) {
            this.current++;

            this.way = 'next';
            this.afterChange();
        }
    }

    prev() {
        if (this.current > 1) {
            this.current--;

            this.way = 'prev';
            this.afterChange();
        }
    }

    afterChange() {
        this.setImage(() => {
            this.preload();
            this.setCurrent();
        });
    }

    preload() {
        var srcNext = this.getIndexSrc(this.current),
            srcCurrent = this.getIndexSrc(this.current - 1),
            srcPrev = this.getIndexSrc(this.current - 2);

        if (srcNext && $('[data-preload="next"]').length == 0) {
            $(this.elem.image).append('<img style="display: none" data-preload="next" src="' + srcNext + '">');
        }

        if (srcPrev && $('[data-preload="prev"]').length == 0) {
            $(this.elem.image).prepend('<img style="display: none" data-preload="prev" src="' + srcPrev + '">');
        }

        $(this.elem.modal + ' [attr="href:original"]').attr('href', srcCurrent);
    }

}

export default Navigate;