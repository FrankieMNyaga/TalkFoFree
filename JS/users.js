const searchbar = document.querySelector(".search input");
const searchBtn = document.querySelector(".search button");

searchBtn.onclick = () => {
    searchbar.classList.toggle("active");
    searchbar.focus();
    searchBtn.classList.toggle("active");
} 
//Run function repeatedly after 500ms
setInterval(()=> {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "../public_html/users.php", true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200) {
                let data = xhr.response;
            }
        } 
    }
    xhr.send();
}, 500)