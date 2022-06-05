$(function (){
    $('#regis-mane-id') .on('click', function (){
        $('#reg-block').css('display', 'none');
        $('#login-block').css('display', 'block');
    })
    $('#login-block-back') .on('click', function (){
        $('#reg-block').css('display', 'block');
        $('#login-block').css('display', 'none');
    })
})