    function checkName() {
        let name = document.forms["contact-form"]["name"].value;
        let nameError = document.getElementById("name-error");

        if (name.match(/^[-'`\ a-z A-z żźćńółęąśŻŹĆĄŚĘŁÓŃäÄÖößÜüáéíóúñ]+$/)) {
            nameError.innerHTML = ""
            return true;
        } else if (name.length == 0) {
            nameError.innerHTML = "Wpisz imię i nazwisko"
            return false;
        } else {
            nameError.innerHTML = "Niedozwolone znaki";
            return false;
        }
    }

    function checkPhone() {
        let phone = document.forms["contact-form"]["phone"].value;
        let phoneError = document.getElementById("phone-error");
        let phoneWithoutSpace = phone.replace(/\s/g, "");
        if (phone.match(/^[0-9 +]+$/) && phoneWithoutSpace.length <= 12 && phoneWithoutSpace.length >= 9) {
            phoneError.innerHTML = ""
            return true;
        } else if (phoneWithoutSpace.length > 12) {
            phoneError.innerHTML = "Numer za długi"
            return false
        } else if (phoneWithoutSpace.length < 9 && phone.match(/^[0-9 +]+$/)) {
            phoneError.innerHTML = "Numer za krótki"
            return false
        }
        else {
            phoneError.innerHTML = "Wpisz cyfry";
            return false;
        }
    }
    function checkEmail() {
        let email = document.forms["contact-form"]["email"].value;
        let emailError = document.getElementById("email-error");
        if (email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
            return true;
        } else if (email.length == 0) {
            emailError.innerText = "Wpisz adres email"
            return false;
        } else {
            emailError.innerText = "Nieprawidłowy adres email"
            return false;
        }
    }

    // function checkCheckbox(){
    //     let checkbox1 = do
    // }

    





