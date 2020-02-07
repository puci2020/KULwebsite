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
        messages.push('wprowadz email');
    } else if (emailIsValid(email.value) == false) {
        messages.push('zly format adresu email')
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
        messages.push('podaj haslo');
    } else if ((password.value != '' || password.value != null) && (confirPassword.value === '' || confirPassword.value == null)) {
        messages.push('potwierdz haslo');
    } else if (confirPassword.value != password.value) {
        messages.push('hasla musza byc takie same');
    }else if(password.value.length < 8){
        messages.push('hasło musi zawierać więcej niż 8 znaków');
    }else if(password.value.length > 30){
        messages.push('przekroczono limit znaków w polu Hasło - max 30');
    }

    if (messages.length > 0) {
        e.preventDefault();
        document.getElementById('message').style.display = 'block';
        errorElement.innerHTML = messages.join("</br>");
    }
})
