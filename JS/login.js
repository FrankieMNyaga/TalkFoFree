const form = document.querySelector(".wrapper .login");
const continueBtn = form.querySelector(".button input");


form.onsubmit = (e) => {
    e.preventDefault();
    
}
continueBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../public_html/backend/login.php", true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200) {
                let data = xhr.response;
                console.log(data);
                if(data == 'Success') {
                    location.href = '../public_html/users.php';
                }
                else {
                    console.log("error");
                }
            }
       } 
    }
    let formData = new FormData(form);
    
    xhr.send(formData);
}