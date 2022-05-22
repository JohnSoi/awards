import lottie from 'lottie-web';

class Animation {

    constructor() {
        ZoneObject.create('.column-right', {
            minWidth: 991,
            run: () => {
                if (typeof this.lottie1 === 'undefined') {
                    this.lottie1 = lottie.loadAnimation({
                        container: document.getElementById('mainspring'),
                        renderer: 'svg',
                        loop: true,
                        autoplay: true,
                        path: '/json/mainspring/data.json?v=1'
                    });

                    this.lottie1.addEventListener('DOMLoaded', () => {
                        $('#mainspring svg').attr('viewBox', '139 205 800 670');
                    });
                } else {
                    this.lottie1.play();
                }
            },
            stop: () => {
                this.lottie1.stop();
            }
        });

        ZoneObject.create('.column-mobile', {
            maxWidth: 991,
            run: () => {
                if (typeof this.lottie2 === 'undefined') {
                    this.lottie2 = lottie.loadAnimation({
                        container: document.getElementById('mainspring-sm'),
                        renderer: 'svg',
                        loop: true,
                        autoplay: true,
                        path: '/json/mainspring/data.json?v=1',
                    });

                    this.lottie2.addEventListener('DOMLoaded', () => {
                        $('#mainspring-sm svg').attr('viewBox', '139 205 800 670');
                    });
                } else {
                    this.lottie2.play();
                }
            },
            stop: () => {
                this.lottie2.stop();
            }
        });

        ZoneObject.create('#postmarks', {
            minWidth: 1200,
            run: () => {
                if (typeof this.lottie_postmarks === 'undefined') {
                    this.lottie_postmarks = lottie.loadAnimation({
                        container: document.getElementById('postmarks'),
                        renderer: 'svg',
                        loop: false,
                        autoplay: true,
                        path: '/json/postmarks/data.json?v=1',
                    });
                } else {
                    this.lottie_postmarks.play()
                }
            },
            stop: () => {
                this.lottie_postmarks.stop();
            }
        });
    }
}

new Animation();