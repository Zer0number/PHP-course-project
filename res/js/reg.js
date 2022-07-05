$(document).ready(() => {

    let correct1 = false;
    let correct2 = true;
    let correct3 = true;
    let correct4 = true;

    let regExp1 = /^[a-zA-Z][a-zA-Z0-9_\-\.]{5,15}$/;
    let regExp2 = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[_\-\.])[a-zA-Z][a-zA-Z0-9_\-\.]{6,}$/;
    let regExp3 = /^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/;

    $('#login').blur(() => {
        let loginValue = $('#login').val();
        console.log(loginValue);
        if(regExp1.test(loginValue)){
            console.log('correct');
            $.ajax({
                type: 'POST',
                url: '/kursach/resta/ajax_check_login',
                data: 'login=' + loginValue,
                success: function(result){
                    console.log(result);
                    if(result === 'занят'){
                        $('#login-error').html('Login already taken');
                        correct1 = false;
                    }
                    else {
                        $('#login-error').html('');
                        correct1 = true;
                    }
                }
            })
        }
        else {
            console.log('failed');
            $('#login-error').html('Invalid login');
        }
    });

    $('#submit').click(() => {
        if(correct1 === true && correct2 === true &&
            correct3 === true && correct4 === true){
            $('#regform').attr('onsubmit', 'return true');
        }
        else {
            let blockMessage = 'Form contains invalid data\n';
            alert(blockMessage);
        }
    })
});