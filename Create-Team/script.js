const form = document.querySelector("form"),
nextBtn = document.getElementById("nextBtn"),
backBtn = form.querySelector(".backBtn"),
allInput = form.querySelectorAll(".first input");

nextBtn.addEventListener("click", (event)=> {
    event.preventDefault();
    allInput.forEach(input => {
        if(input.value != ""){
            form.classList.add('secActive');
        }else{
            form.classList.remove('secActive');
        }
    })
},false);

backBtn.addEventListener("click", () => form.classList.remove('secActive'));
