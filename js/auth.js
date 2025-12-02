let form = document.getElementById("login")
let regsiterForm = document.getElementById("register")

function showLoginPopup(){
    form.classList.toggle('hidden')
}

// form.addEventListener('click',()=>{
//     form.classList.add('hidden');
// })

// regsiterForm.addEventListener('click',()=>{
//     regsiterForm.classList.add('hidden');
// })
document.getElementById("registerFormPipe").addEventListener('click' , ()=>{
    form.classList.toggle('hidden');
    regsiterForm.classList.toggle('hidden');
})


function formHandler(idForm){

}