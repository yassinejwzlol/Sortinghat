var hasNumber = /\d/;
var buttonelement = document.querySelector(".submit");
var variabelen = document.querySelectorAll(".variabele");
buttonelement.addEventListener("click", function () {
    validateMyForm();
});
function validateMyForm() {
    if (hasNumber.test(variabelen[0].value)) {
        alert("Er mogen geen getallen zitten in je voornaam.");
        return false;
    }
    if (hasNumber.test(variabelen[1].value)) {
        alert("Er mogen geen getallen zitten in je achternaam.");
        return false;
    }
    if (variabelen[2].value.toUpperCase() != "M" &&
        variabelen[2].value.toUpperCase() != "V" &&
        variabelen[2].value.toUpperCase() != "X") {
        alert("Het geslacht wordt op X gezet omdat je een onbestaand geslacht hebt ingevoerd.")
        variabelen[2].value = "x".toUpperCase();
        return false;
    }

    if (variabelen[4].value > 122) {
        alert("De leeftijd is naar 12 gezet aangezien je geen normale leeftijd kan invullen.");
        variabelen[4].value = "12";
        return false;
    }
    if (!telefooncheck(variabelen[5].value)) {
        alert("Vul een geldig belgisch telefoonnummer in.");
        return false;
    }
    return true;
}

function telefooncheck(nummer) {
    var re = /^(((\+|00)32[ ]?(?:\(0\)[ ]?)?)|0){1}(4(60|[789]\d)\/?(\s?\d{2}\.?){2}(\s?\d{2})|(\d\/?\s?\d{3}|\d{2}\/?\s?\d{2})(\.?\s?\d{2}){2})$/;
    return re.test(nummer);
}
