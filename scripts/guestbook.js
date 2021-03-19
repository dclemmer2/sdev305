document.getElementById("mailingList").onclick = showEmailFormat;

//show email format buttons when mailing list checkbox is checked
function showEmailFormat() {
    let mailingList = document.getElementById("mailingList");
    let show = document.getElementById("emailFormat");
    if (mailingList.checked === true) {
        show.classList.remove("d-none");
    } else {
        show.classList.add("d-none");
    }
}


document.getElementById("met").onclick = showOther;

//show other textbox when other is selected from how we met dropdown
function showOther() {
    let met = document.getElementById("met");
    let selectedValue = met.options[met.selectedIndex].value;
    let otherDiv = document.getElementById("otherComment");
    if (selectedValue === "other") {
        otherDiv.classList.remove("d-none");
    } else {
        otherDiv.classList.add("d-none");
    }
}

window.onload = loadOtherBox;

//This function will show the "other" textbox if there is text in it and "other" is selected in the dropdown
function loadOtherBox() {
    let met = document.getElementById("met");
    let selectedValue = met.options[met.selectedIndex].value;
    let otherDiv = document.getElementById("otherComment");
    if (selectedValue === "other") {
        otherDiv.classList.remove("d-none");
    }
}