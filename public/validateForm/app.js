var username = document.querySelector('#username');
var email = document.querySelector('#email');
var password = document.querySelector('#password');
var confirmPassword = document.querySelector('#confirm-password');
var form = document.querySelector('form');

function showError(input, message){
    let parent = input.parentElement;
    let small = parent.querySelector('small')
    parent.classList.add('error');
    small.innerText = message;
}

function showSuccess(input) {
    let parent = input.parentElement;
    let small = parent.querySelector('small');
    parent.classList.remove('error');
    small.innerText = '';
}



function checkEmptyError(listInput) {
    listInput.forEach(input => {
        input.value = input.value.trim();
        if(!input.value) {
            showError(input, 'Vui lòng nhập thông tin');
        }
    });
}

function checkEmail(input) {
    const regexEmail =  /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    input.value = input.value.trim();
    let isEmail = regexEmail.test(input.value);
    if(!isEmail) {
        showError(input, 'Email không đúng định dạng!!!');
    }
}

function checkLength(input,name, min, max) {
    input.value = input.value.trim();
    if(input.value.length < min) {
        showError(input, ` Độ dài ${name} tối thiểu là ${min}`);
    }
    if(input.value.length > max) {
        showError(input, ` Độ dài ${name} tối đa là ${max}`);
    }
}

function checkConfirmPassword(password, confirmPassword) {
    password.value = password.value.trim();
    confirmPassword.value = confirmPassword.value.trim();
    if(!(password.value == confirmPassword.value)) {
        showError(confirmPassword, 'Password nhập lại không khớp!!!');
        confirmPassword.value = '';
    }
}

form.addEventListener('submit', function(e) {
    e.preventDefault();
    showSuccess(username);
    showSuccess(email);
    showSuccess(password);
    showSuccess(confirmPassword);


    checkEmptyError([username, email, password, confirmPassword]);
    checkEmail(email);
    checkLength(username,'Username', 3, 10);
    checkLength(password,'Password', 3, 10);
    checkLength(confirmPassword,'Password', 3, 10);

    checkConfirmPassword(password,confirmPassword )

    
});