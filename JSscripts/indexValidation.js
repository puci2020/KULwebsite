function selectGenerate() {

    var optionField = "<option value='' disabled selected>Wybierz rok</option>";

    for (var i = 1950; i < 2020; i++) {
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
const check1 = document.getElementById('check1');
const check2 = document.getElementById('check2');
const check3 = document.getElementById('check3');
const check4 = document.getElementById('check4');
const rodo = document.getElementById('rodo');
const care = document.getElementById('care');
const rejForm = document.getElementById('form');
const errorElement = document.getElementById('error');

function showOptions1(){
        care.style.display = "block";
}

function hideOptions1(){
    care.style.display = "none";
}

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
    } else if (emailIsValid(email.value) === false) {
        messages.push('Zły format adresu email')
    }

    if (year.value === '') {
        messages.push('Pole Rocznik nie może pozostać puste')
    }

    if(check1.checked === false && check2.checked === false){
        messages.push('Zaznacz czy jesteś osobą niepełnosprawną')
    }

    if(check2.checked === true){
        if(check3.checked === false && check4.checked === false){
            messages.push('Zaznacz czy potrzebujesz osoby do pomocy')
        }
    }

    if (rodo.checked === false){
        messages.push('Musisz zaakceptować klauzule RODO')
    }

    if (messages.length > 0) {
        e.preventDefault();
        alert(messages.join("\n"));
    }
});

var modal = document.getElementById("myModal");
var modal2 = document.getElementById("myModal2");

var btn = document.getElementById("popup");
var btn2 = document.getElementById("popup2");

var span = document.getElementsByClassName("close")[0];
var span2 = document.getElementsByClassName("close")[1];


btn.onclick = function() {
    modal.style.display = "block";
};

btn2.onclick = function() {
    modal2.style.display = "block";
};

span.onclick = function() {
    modal.style.display = "none";
};
span2.onclick = function() {
    modal2.style.display = "none";
};


window.onclick = function(event) {
    if (event.target === modal) {
        modal.style.display = "none";
    }
    if (event.target === modal2) {
        modal2.style.display = "none";
    }
};


