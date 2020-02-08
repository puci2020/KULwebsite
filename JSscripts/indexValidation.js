function selectGenerate() {

    var optionField = "<option value='' disabled selected>Wybierz rocznik</option>";

    for (var i = 1960; i < 2000; i++) {
        optionField += "<option value='" + i + "'>" + i + "</option>"
    }

    document.getElementById('year').innerHTML = optionField;
}

mybutton = document.getElementById("myBtn");

window.onscroll = function () {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

function emailIsValid(mail) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(mail)
}

const firstName = document.getElementById('firstName');
const lastName = document.getElementById('lastName');
const email = document.getElementById('email');
const year = document.getElementById('year');
const food1 = document.getElementById('food1');
const food2 = document.getElementById('food2');
const rejForm = document.getElementById('form');
const errorElement = document.getElementById('error');

rejForm.addEventListener('submit', (e) => {
    let messages = [];

    if (firstName.value === '' || firstName.value == null) {
        messages.push('Pole Imię nie może pozostać puste');
    }

    if (lastName.value === '' || lastName.value == null) {
        messages.push('Pole Nazwisko nie może pozostać puste');
    }

    if (email.value === '' || email.value == null) {
        messages.push('Pole Email nie może pozostać puste');
    } else if (emailIsValid(email.value) == false) {
        messages.push('Zły format adresu email')
    }

    if (year.value == '') {
        messages.push('Pole Rocznik nie może pozostać puste')
    }

    if (food1.checked == false && food2.checked == false) {
        messages.push('Wybierz rodzaj diety');
    }


    if (messages.length > 0) {
        e.preventDefault();
        alert(messages.join("\n"));
    }
});

var modal = document.getElementById("myModal");

var btn = document.getElementById("popup");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = "block";
};

span.onclick = function() {
    modal.style.display = "none";
};

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};
