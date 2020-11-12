//Register the validate function (storing it, not executing yet) for the form submit event
let form = document.getElementById("form");
form.onsubmit = validate;

//Make all error messages invisible
function clearErrors() {
    let errors = document.getElementsByClassName("error");
    for (let i = 0; i < errors.length; i++) {
        errors[i].classList.add("d-none");
    }
}

//Validate the form
function validate() {

    clearErrors();

    //Create an error flag
    let isValid = true;

    // error check first name
    let fname = document.getElementById("fname").value;
    if (fname === "") {
        let errFname = document.getElementById("err-fname");
        errFname.classList.remove("d-none");
        isValid = false;
    }

    // error check last name
    let lname = document.getElementById("lname").value;
    if (lname === "") {
        let errLname = document.getElementById("err-lname");
        errLname.classList.remove("d-none");
        isValid = false;
    }

    //Validate email:
    let email = document.getElementById("email").value;
    //if email is not empty:
    if (email !== "") {
        let invalidEmail = document.getElementById("invalid-email");
        if (!email.includes("@")) {
            invalidEmail.classList.remove("d-none");
            isValid = false;
        }
        if (!email.includes(".")) {
            invalidEmail.classList.remove("d-none");
            isValid = false;
        }
    }

    //Validate mailing list checkbox:
    let mailingList = document.getElementById("mailingList");
    if (mailingList.checked === true) {
        if (email === "") {
            let errMailingList = document.getElementById("err-mailingList");
            errMailingList.classList.remove("d-none");
            isValid = false;
        }
    }

    //Validate LinkedIn address
    let linkedIn = document.getElementById("linkedIn").value;
    if (linkedIn !== "") {
        let errLinkedIn = document.getElementById("err-linkedIn");
        if (!linkedIn.startsWith("http")) {
            errLinkedIn.classList.remove("d-none");
            isValid = false;
        }
        if (!linkedIn.endsWith(".com")) {
            errLinkedIn.classList.remove("d-none");
            isValid = false;
        }
    }


    //Validate how we met
    let howMet = document.getElementById("met").value;
    if (howMet === "none") {
        let errMet = document.getElementById("err-met");
        errMet.classList.remove("d-none");
        isValid = false;
    }

    return isValid;
}

//show email format buttons when mailing list checkbox is checked
document.getElementById("mailingList").onclick = showEmailFormat;

function showEmailFormat() {
    let mailingList = document.getElementById("mailingList");
    let show = document.getElementById("emailFormat");
    if (mailingList.checked === true) {
        show.classList.remove("d-none");
    } else {
        show.classList.add("d-none");
    }
}

//show other textbox when other is selected from how we met dropdown
document.getElementById("met").onclick = showOther;

function showOther() {
    let met = document.getElementById("met").value;
    let show = document.getElementById("otherComment");
    if (met === "other") {
        show.classList.remove("d-none");
    } else {
        show.classList.add("d-none");
    }
}
