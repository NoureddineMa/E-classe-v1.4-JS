let names = document.getElementById("name");
let email = document.getElementById("email");
let password = document.getElementById("password");
let submit = document.getElementById("submit");
let err = document.getElementById("erreur");
let errEmail = document.getElementById("erreurMail");
let errPassword = document.getElementById("erreurPassword");
// name : 
submit.addEventListener("click",(e) =>{
    if(names.value == ""){
        e.preventDefault();
        names.setAttribute("style" , "color:red; border: 1px red solid ;")  ;
        err.innerText = "Name is required"
        err.setAttribute("style" , "color:red;");
    }
    else{
        e.preventDefault();
        names.setAttribute("style" , "color:black; border: 1px green solid ;")  ;
        err.innerText = "";
    }
})

// email : 
submit.addEventListener("click",(e) =>{
    if(email.value == ""){
        e.preventDefault();
        email.setAttribute("style" , "color:red; border: 1px red solid ;")  ;
        errEmail.innerText = "email is required"
        errEmail.setAttribute("style" , "color:red;");
    }
    else{
        e.preventDefault();
        email.setAttribute("style" , "color:black; border: 1px green solid ;")  ;
        errEmail.innerText = "";
    }
})
// password : 
submit.addEventListener("click",(e) =>{
    if(password.value == ""){
        e.preventDefault();
        password.setAttribute("style" , "color:red; border: 1px red solid ;")  ;
        errPassword.innerText = "password is required"
        errPassword.setAttribute("style" , "color:red;");
    }
    else{
        e.preventDefault();
        password.setAttribute("style" , "color:black; border: 1px green solid ;")  ;
        errPassword.innerText = "";
    }
})





// creation des fonctions : 

// regulary expression : 

// input name : 

function ValidateName(){
    if(!(/^[a-z A-Z]{5,10}$/).test(names.value)){
        names.setAttribute("style" , "color:red; border: 1px red solid ;")  ;
        err.setAttribute("style" , "color:red;");
        err.innerText = "veuillez entrer un nom valid";
        }
    else{ 
        names.setAttribute("style" , "color:black; border: 1px green solid ;");
        err.innerText = ""

    }
}

// input email : 

function ValidateEmail(){
    if(!(/^[a-zA-Z_0-9]{3,}@[a-zA-Z]{3,}[.]{1}[a-z]{2,4}$/).test(email.value)){
        email.setAttribute("style" , "color:red; border: 1px red solid ;")  ;
        erreurMail.setAttribute("style" , "color:red;");
        erreurMail.innerText = "veuillez entrer un email valid";
    }
    else{ 
        email.setAttribute("style" , "color:black; border: 1px green solid ;");
        erreurMail.innerText = ""

    }
}

//input password : 
function ValidateEmail(){
    if(!(/^[a-zA-Z_0-9]{3,8}@[a-zA-Z]{3,8}[.]{1}[a-z]{2,4}$/).test(password.value)){
        password.setAttribute("style" , "color:red; border: 1px red solid ;")  ;
        errPassword.setAttribute("style" , "color:red;");
        errPassword.innerText = "veuillez entrer un email valid";
    }
    else{ 
        password.setAttribute("style" , "color:black; border: 1px green solid ;");
        errPassword.innerText = ""

    }
}
