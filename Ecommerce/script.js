const form=document.querySelector('#register');
const firstnameInput=document.querySelector('#firstname');
const lastnameInput=document.querySelector('#lastname');
const emailInput=document.querySelector('#email');
const passwordInput=document.querySelector('#firstname');
const confirmPasswordInput=document.querySelector('#confirm.Password');

form.addEventListener('submit',(Event)=>{
    //Event.preventDafault();//

    validateForm();

});

function validateForm(){
    if(firstnameInput.value.trim()==''){
        setError(firstnameInput,'Name can not be empty');
    }else if(firstnameInput.value.trim().length<5||firstnameInput.value.trim().length>15){
        setError(firstnameInput,'Name must be min 5 and max 15 characters');
    }else{
        setSucess(firstnameInput);
    }

    if(lastnameInput.value.trim()==''){
        setError(lastnameInput,'Name can not be empty');
    }else if(lastnameInput.value.trim().length<5||lastnameInput.value.trim().length>15){
        setError(lastnameInput,'Name must be min 5 and max 15 characters');
    }else{
        setSucess(lastnameInput);
    }
    if(emailInput.value.trim()==''){
        setError(emailInput,'provide email address');
    }else if(isEmailValid(emailInput.value)){
        setSucess(emailInput);

    }else{
        setError(emailInput,'provide valid email address');
    }
    

    if(passwordInput.value.trim()==''){
        setError(passwordInput,'password can not be empty');
    }else if(passwordInput.value.trim().length<6||passwordInput.value.trim().length>20){
        setError(passwordInput,'password min 6 and max 20 characters');
}else{
    setSucess(passwordInput);
} 

if(confirmPasswordInput.value.trim()==''){
    setError(confirmPasswordInput,'password can not be empty');
}else if(confirmPasswordInput.value!=passwordInput.value){
    setError(confirmPasswordInput,'password doesnot match');
}else{
    setSucess(confirmPasswordInput);
}
}

function setError(element,errorMessage){
    const parent=element.parentElement;
    if(parent.classList.contains('success')){
        parent.classList.remove('success');
    }
    parent.classList.add('error');

}
function setSucess(element){
    const parent=element.parentElement;
    if(parent.classList.contains('error')){
        parent.classList.remove('error');
    }
    parent.classList.add('success');
}
function isEmailValid(email){
    const reg=/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\0-9]+\.)+[a-zA-Z]{2,}))$/;
    return reg.test(email);
}





//login

const form=document.querySelector('#login');
const emailInput=document.querySelector('#email');
const passwordInput=document.querySelector('#firstname');


form.addEventListener('submit',(Event)=>{
    //Event.preventDafault();//

    validateForm();

});

function validateForm(){
    
    if(emailInput.value.trim()==''){
        setError(emailInput,'provide email address');
    }else if(isEmailValid(emailInput.value)){
        setSucess(emailInput);

    }else{
        setError(emailInput,'provide valid email address');
    }
    

    if(passwordInput.value.trim()==''){
        setError(passwordInput,'password can not be empty');
    }else if(passwordInput.value.trim().length<6||passwordInput.value.trim().length>20){
        setError(passwordInput,'password min 6 and max 20 characters');
}else{
    setSucess(passwordInput);
} 


}

function setError(element,errorMessage){
    const parent=element.parentElement;
    if(parent.classList.contains('success')){
        parent.classList.remove('success');
    }
    parent.classList.add('error');

}
function setSucess(element){
    const parent=element.parentElement;
    if(parent.classList.contains('error')){
        parent.classList.remove('error');
    }
    parent.classList.add('success');
}
function isEmailValid(email){
    const reg=/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\0-9]+\.)+[a-zA-Z]{2,}))$/;
    return reg.test(email);
}





