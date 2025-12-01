let form = document.getElementById("login")
let regsiterForm = document.getElementById("register")

function showLoginPopup(){
    form.classList.toggle('hidden')
}


document.getElementById("registerFormPipe").addEventListener('click' , ()=>{
    form.classList.toggle('hidden');
    regsiterForm.classList.toggle('hidden');
})