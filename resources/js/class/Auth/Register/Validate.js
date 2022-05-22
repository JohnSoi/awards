class Validate {

    constructor(obj) {
        this.form = $(obj.form);

        this.errors = {};
        this.validateTimeOut = false;

        this.form.on('input change', '[name]', () => {
            this.check();
        });
    }

    rules() {
        return {
            name: 'required',
            city: 'required',
            email: 'required|email',
            password: 'required|min:8',
            password_confirmation: 'required|min:8|confirmed',
        };
    }

    isErrors() {
        return Object.keys(this.errors).length;
    }

    check() {
        if (this.validateTimeOut) clearTimeout(this.validateTimeOut);

        this.validateTimeOut = setTimeout(() => {
            this.errors = validate.check(this.form, this.rules(), {
                'city.required': 'Выберите город из списка',
                'password_confirmation.confirmed': 'Пароли не совпадают',
            }, true);

            if (this.isErrors()) {
                this.form.find('.btn').addClass('opacity-50');
            } else {
                this.form.find('.btn').removeClass('opacity-50');
            }
        }, 100);
    }

}

export default Validate;