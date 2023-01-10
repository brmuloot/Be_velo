function submitForm() {
    let pseudo = document.getElementById("pseudo").value;
    let message = document.getElementById("message").value;
    document.getElementById("response-pseudo").innerHTML = "Pseudo: " + pseudo;
    document.getElementById("response-message").innerHTML = "Message: " + message;
    document.getElementById("response-box").style.display = "block";
}