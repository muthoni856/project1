require('./bootstrap');

const prevBtns=document.querySelectorAll(".btn-prev");
const nextBtns=document.querySelectorAll(".btn-next");
const progress=document.queryElementId(".progress");
const formSteps=document.querySelectorAll(".form-step");

 let formstepsNum=0;
 console.log(formstepsNum);
 const btn=document.getElementsByClassName("btn btn-next");


    btn.addEventListener("click",()=>{
formstepsNum++;

window.alert(formstepsNum);


updateFormSteps();
    });



prevBtns.forEach((btn)=>{
    btn.addEventListener("click",()=>{
formstepsNum--;
updateFormSteps();
    });
});
function updateFormSteps(){
    formSteps.forEach(formStep=>{
        formStep.classList.contains("form-step-active")&&
        formStep.classList.remove("form-step-active");
    });
    formSteps[formstepsNum].classList.add("form-step-active");
}
