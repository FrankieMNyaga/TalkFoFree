const form = document.querySelector(".wrapper .signup");
const continueBtn = form.querySelector(".signup .button");


form.onsubmit = (e) => {
    e.preventDefault();
    
}
continueBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../backend/signup.php");
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200) {
                let data = xhr.response;
                console.log(data);
                if(data == 'Success') {
                    location.href = '/asteroids.html';
                }
            }
        } 
    }
    let formData = new FormData(form);
    
    xhr.send(formData);
}