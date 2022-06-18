import lottie from 'lottie-web';

class Animation {

    constructor() {
        ZoneObject.create('.section-for__right', {
            minWidth: 0,
            run: () => {
                if (typeof this.lottie_spring === 'undefined') {
                    this.lottie_spring = lottie.loadAnimation({
                        container: document.getElementById('mainspring'),
                        renderer: 'svg',
                        loop: true,
                        autoplay: true,
                        path: '/json/mainspring/data.json?v=1',
                    });
                } else {
                    this.lottie_spring.play()
                }
            },
            stop: () => {
                this.lottie_spring.stop();
            }
        });

        ZoneObject.create('.section-for__animated', {
            minWidth: 0,
            run: () => {
                if (typeof this.lottie_television === 'undefined') {
                    this.lottie_television = lottie.loadAnimation({
                        container: document.getElementById('television'),
                        renderer: 'svg',
                        loop: true,
                        autoplay: true,
                        path: '/json/industries/1/data.json?v=1',
                    });
                } else {
                    this.lottie_television.play()
                }
            },
            stop: () => {
                this.lottie_television.stop();
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