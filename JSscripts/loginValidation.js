function closeMsg() {
    document.getElementById('message').style.display = 'none';
}

function closeMsg2() {
    document.getElementById('message2').style.display = 'none';
}

const email = document.getElementById('email');
const password = document.getElementById('password');
const loginForm = document.getElementById('login');
const errorElement = document.getElementById('error');

function emailIsValid(mail) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(mail)
}

loginForm.addEventListener('submit', (e) => {
    let messages = [];

    if (email.value === '' || email.value == null) {
        messages.push('wprowadz email');
    } else if (emailIsValid(email.value) == false) {
        messages.push('zly format adresu email')
    }

    if (password.value === '' || password.value == null) {
        messages.push('podaj haslo');
    }

    if (messages.length > 0) {
        e.preventDefault();
        document.getElementById('message').style.display = 'block';
        errorElement.innerHTML = messages.join("</br>");
    }
})
    
