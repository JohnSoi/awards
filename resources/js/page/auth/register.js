import Submit from '../../class/Auth/Register/Submit';
import Suggestions from '../../js-modules/Suggestions';

new Submit({
    form: '#registerForm',
    success: () => {
        modalNotify.create({
            text: 'Вы успешно зарегистрированы!<br>На вашу почту отправлено письмо для<br>подтверждения учётной записи. ',
            btn: 'В личный кабинет',
            onClick: function () {
                location.href = '/';
            }
        });
    }
});

new Suggestions({ token: 'c0770f3c2963c9478b5bf202a1ed8a0d09953cea' }).city($('[name="city"]'));