
const password = document.getElementById("password");
const toggle = document.getElementById('toggle');

toggle.onclick = () => {
    if(password.type == "password") {
        password.type = "text";
    }
    else {
        password.type = "password";
    }
}