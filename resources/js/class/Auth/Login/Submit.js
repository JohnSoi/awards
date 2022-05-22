import Validate from "./Validate";

class Submit {

    constructor(obj) {
        this.form = $(obj.form);
        this.success = obj.success;
        this.error = obj.error;

        this.validate = new Validate(obj);

        this.form.on('submit', (e) => {
            e.preventDefault();
            this.ajax();
        });
    }

    ajax() {
        if (this.validate.isErrors()) return false;

        ajax({
            url: this.form.attr('action'),
            type: 'POST',
            dataType: 'json',
            data: this.form.serialize()
        }, (json) => {
            if (typeof json === 'object' && json != null) {
                if (json.success) {
                    if (this.success) {
                        this.success(json);
                    }
                } else if (json.redirect) {
                    location.href = json.redirect;
                } else if (this.error) {
                    this.error(json);
                }
            }
        }, this.form);
    }

}

export default Submit;