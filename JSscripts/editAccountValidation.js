function closeMsg() {
    document.getElementById('message').style.display = 'none';
}

function closeMsg2() {
    document.getElementById('message2').style.display = 'none';
}

const email = document.getElementById('email');
const password = document.getElementById('password');
const confirPassword = document.getElementById('confirmPassword');
const editEmailForm = document.getElementById('edit_email');
const editPasswordForm = document.getElementById('edit_password');
const errorElement = document.getElementById('error');

function emailIsValid(mail) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(mail)
}

editEmailForm.addEventListener('submit', (e) => {
    let messages = [];

    if (email.value === '' || email.value == null) {
        messages.push('Wprowadz email!');
    } else if (emailIsValid(email.value) == false) {
        messages.push('Zły format adresu email!')
    }


    if (messages.length > 0) {
        e.preventDefault();
        document.getElementById('message').style.display = 'block';
        errorElement.innerHTML = messages.join("</br>");
    }
})

editPasswordForm.addEventListener('submit', (e) => {
    let messages = [];

    if (password.value === '' || password.value == null) {
        messages.push('Podaj hasło!');
    } else if ((password.value != '' || password.value != null) && (confirPassword.value === '' || confirPassword.value == null)) {
        messages.push('Potwierdź hasło!');
    } else if (confirPassword.value != password.value) {
        messages.push('Hasła muszą być takie same!');
    }else if(password.value.length < 8){
        messages.push('Hasło musi zawierać więcej niż 8 znaków!');
    }else if(password.value.length > 30){
        messages.push('Przekroczono limit znaków w polu Hasło - max 30!');
    }

    if (messages.length > 0) {
        e.preventDefault();
        document.getElementById('message').style.display = 'block';
        errorElement.innerHTML = messages.join("</br>");
    }
})
