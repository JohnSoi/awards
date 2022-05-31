class Debug {
    constructor() {
        this.timer = false;
        this.onerror();
    }

    send(text) {
        let time = 0;
        if (this.timer) {
            time = 2000;
            clearTimeout(this.timer);
        }
        this.timer = setTimeout(function () {
            ajax({
                method: 'post',
                url: '/debug',
                data: {
                    text: text
                }
                ,
                queue: true
            })
            ;
        }, time);
    }

    isException(msg) {
        let result = false;
        if (msg) {
            ['_AutofillCallbackHandler'].forEach(exception => {
                if (msg.indexOf(exception) > -1) {
                    result = true;
                }
            });
        }
        return result;
    }

    onerror() {
        window.onerror = (msg, url, lineNo, columnNo, error) => {
            if (lineNo && columnNo && this.isException(msg) === false) {
                let text = '';
                text += navigator.userAgent + "\n";
                text += 'url: ' + url + "\n";
                text += 'msg: ' + msg + "\n";
                text += 'lineNo: ' + lineNo + "\n";
                text += 'columnNo: ' + columnNo + "\n";
                text += 'page: ' + location.href;
                if (typeof error === 'object' && error != null) {
                    text += 'error: ' + JSON.stringify(error.stack ? error.stack : error);
                }
                if (typeof user === 'object' && user != null) {
                    text += 'user: ' + JSON.stringify(user);
                }
                this.send(text);
            }
        }
    }
}

export default new Debug()