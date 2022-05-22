import Submit from "../../class/Auth/Login/Submit";

new Submit({
    form: '#loginForm',
    success: () => {
        location.reload();
    }
});