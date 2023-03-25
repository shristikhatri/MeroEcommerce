document.querySelector("#fname").addEventListener('blur', fname);

function fname(){
    let fname = document.getElementById('fname').value;
    if(fname == ""){
        document.getElementById("ername").innerHTML = "";
    }
    else if((/^[A-za-z\s]+$/.test(fname)) == false){
        document.getElementById("ername").innerHTML = "Invalid Name";
    }
    else{
        document.getElementById("ername").innerHTML = "";
    }
}

document.querySelector("#lname").addEventListener('blur', lname);

function lname(){
    let lname = document.getElementById('lname').value;
    if(lname == ""){
        document.getElementById("ername").innerHTML = "";
    }
    else if((/^[A-za-z\s]+$/.test(lname)) == false){
        document.getElementById("ername").innerHTML = "Invalid Name";
    }
    else{
        document.getElementById("ername").innerHTML = "";
    }
}

document.querySelector("#email").addEventListener('blur', mail);

function mail(){
    let email = document.getElementById('email').value;
    let filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(email == ""){
        document.getElementById("ername").innerHTML = "";
    }
    else if((filter.test(email)) == false){
        document.getElementById("ername").innerHTML = "Invalid Email";
    }
    else{
        document.getElementById("ername").innerHTML = "";
    }
}


function showpass() {
    var show = document.getElementById("password");
    var show2 = document.getElementById("confirm-password");
    if (show.type == 'password') {
        show.type = 'text';
    } else {
        show.type = 'password';

    }
    if (show2.type == 'password') {
        show2.type = 'text';
    } else {
        show2.type = 'password';

    }
}