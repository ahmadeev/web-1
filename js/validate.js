function disableButton() {
    var submitButton = form.querySelector('#submitButton');
    submitButton.setAttribute("disabled", "")
    
}

function pupu() {
    var submitButton = form.querySelector('#submitButton');
    var xInput = form.querySelector('input[name="xType"]:checked').value;
    var yInput = form.querySelector('[name="yType"]').value;
    var RInput = form.querySelector('input[name="RType"]:checked').value;

    if (parseFloat(yInput) <= 3 && parseFloat(yInput) >= -5 && parseFloat(yInput) != null && parseInt(xInput) != null && parseInt(RInput) != null) {
        submitButton.removeAttribute("disabled");
        
    } else {
        submitButton.setAttribute("disabled", "");
    }
    xInput = null;
    yInput = null;
    RInput = null;
}

const form = document.getElementById("form")
form.onchange = function() {pupu()};