const btnToggle = document.querySelector("#btnToggle");
const body = document.body;

btnToggle.addEventListener("click", ()=>{
    body.classList.toggle("dark");

    if (body.classList.contains("dark")){
        btnToggle.textContent = "Light Mode☀️";
    }else{
        btnToggle.textContent = "Dark Mode🌙";
    }
})