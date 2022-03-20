
// declaration des variables : 

let names = document.getElementById("name");
let email = document.getElementById("email");
let password = document.getElementById("password");
let repassword = document.getElementById("confirmpassword");
let submit = document.getElementById("submit");
let err = document.getElementById("erreur");
let errEmail = document.getElementById("erreurMail");
let errPassword = document.getElementById("erreurPassword");
let erreurcpassword = document.getElementById("erreurcpassword");


// name : 
submit.addEventListener("click",(e) =>{
    if(names.value == ""){
        e.preventDefault();
        names.setAttribute("style" , "color:red; border: 1px red solid ;")  ;
        err.innerText = "Name is required"
        err.setAttribute("style" , "color:red;");
    }
    else{
        
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
        
        password.setAttribute("style" , "color:black; border: 1px green solid ;")  ;
       
    }
})

// confirmation password : 
submit.addEventListener("click",(ec) =>{
    if (!(repassword.value == password.value)){
        ec.preventDefault();
        repassword.setAttribute("style" , "color:red; border: 1px red solid ;")  ;
        erreurcpassword.innerText = "Password is not valide ! retry again"
        erreurcpassword.setAttribute("style" , "color:red;");
    }
    else{
        repassword.setAttribute("style" , "color:black; border: 1px green solid ;")  ;
        erreurcpassword.innerText = "";
    }
})






// creation des fonctions : // --------------------------------_----------------


// regulary expression : 

// input name : 

function ValidateName(){
    if(!(/^[a-z A-Z]{3,}$/).test(names.value)){
        names.setAttribute("style" , "color:red; border: 1px red solid ;")  ;
        err.setAttribute("style" , "color:red;");
        err.innerText = "veuillez entrer un nom valid";
        }
    else{ 
        names.setAttribute("style" , "color:black; border: 1px green solid ;");
        err.innerText = "";

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
        erreurMail.innerText = "";

    }
}

//input password : 
function ValidatePassword(){
    if(!(/^[-a-zA-Z0-9@:%._#]{3,32}$/).test(password.value)){
        password.setAttribute("style" , "color:red; border: 1px red solid ;");
        errPassword.setAttribute("style" , "color:red;");
        errPassword.innerText = "veuillez entrer un valid password";
    }
    else{ 
        password.setAttribute("style" , "color:black; border: 1px green solid ;");
        errPassword.innerText = "";

    }
}

//input confirmation du  password : 
function ValidatecPassword(){
    if(!(/^[-a-zA-Z0-9@:%._#]{3,32}$/) &&  password !== repassword){
        repassword.setAttribute("style" , "color:red; border: 1px red solid ;")  ;
        erreurcpassword.setAttribute("style" , "color:red;");
        erreurcpassword.innerText = "veuillez entrer un valid password";
    }
    else{ 
        repassword.setAttribute("style" , "color:black; border: 1px green solid ;");
        erreurcpassword.innerText = "";

    }
}
