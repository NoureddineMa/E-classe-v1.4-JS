let names = document.getElementById("name");
let email = document.getElementById("Email");
let phone = document.getElementById("phone");
let number = document.getElementById("Enumber");
let ErreurNames = document.getElementById("Erreurname");
let Erreuremail = document.getElementById("Erreuremail");
let Erreurphone = document.getElementById("Erreurphone");
let Erreurnumber = document.getElementById("Erreurnumber");
let submit = document.getElementById("submit");
// name : 
submit.addEventListener("click",(e) =>{
    if(names.value == ""){
        e.preventDefault();
        names.setAttribute("style" , "color:red; border: 1px red solid ;")  ;
        ErreurNames.innerText = "Name is required"
        ErreurNames.setAttribute("style" , "color:red;");
    }
    else{
        names.setAttribute("style" , "color:black; border: 1px green solid ;")  ;
        err.innerText = "";
    }
})
// email  : 
submit.addEventListener("click",(e) =>{
    if(email.value == ""){
        e.preventDefault();
        email.setAttribute("style" , "color:red; border: 1px red solid ;")  ;
        Erreuremail.innerText = "Email is required"
        Erreuremail.setAttribute("style" , "color:red;");
    }
    else{
        
        email.setAttribute("style" , "color:black; border: 1px green solid ;")  ;
        Erreuremail.innerText = "";
    }
})
// phone : 
submit.addEventListener("click",(e) =>{
    if(phone.value == ""){
        e.preventDefault();
        phone.setAttribute("style" , "color:red; border: 1px red solid ;")  ;
        Erreurphone.innerText = "phone is required"
        Erreurphone.setAttribute("style" , "color:red;");
    }
    else{
        
        phone.setAttribute("style" , "color:black; border: 1px green solid ;")  ;
        Erreurphone.innerText = "";
    }
})
// number : 
submit.addEventListener("click",(e) =>{
    if(number.value == ""){
        e.preventDefault();
        number.setAttribute("style" , "color:red; border: 1px red solid ;")  ;
        Erreurnumber.innerText = "Email is required"
        Erreurnumber.setAttribute("style" , "color:red;");
    }
    else{
        
        number.setAttribute("style" , "color:black; border: 1px green solid ;")  ;
        Erreurnumber.innerText = "";
    }
})
 // function : 
// Name : 
function ValidateName(){
    if(!(/^[a-z0-9]{3,10}$/).test(names.value)){
        names.setAttribute("style" , "color:red; border: 1px red solid ;")  ;
        ErreurNames.setAttribute("style" , "color:red;");
        ErreurNames.innerText = "veuillez entrer un nom valid";
        }
    else{ 
        names.setAttribute("style" , "color:black; border: 1px green solid ;");
        ErreurNames.innerText = "";

    }
}
// Email : 
function ValidateEmail(){
    if(!(/^[a-zA-Z_0-9]{3,}@[a-zA-Z]{3,}[.]{1}[a-z]{2,4}$/).test(email.value)){
        email.setAttribute("style" , "color:red; border: 1px red solid ;")  ;
        Erreuremail.setAttribute("style" , "color:red;");
        Erreuremail.innerText = "veuillez entrer un email valid";
        }
    else{ 
        email.setAttribute("style" , "color:black; border: 1px green solid ;");
        Erreuremail.innerText = "";

    }
}
// phone : 
function ValidatePhone(){
    if(!(/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/).test(phone.value)){
        phone.setAttribute("style" , "color:red; border: 1px red solid ;")  ;
        Erreurphone.setAttribute("style" , "color:red;");
        Erreurphone.innerText = "veuillez entrer un Numero valid !";
        }
    else{ 
        phone.setAttribute("style" , "color:black; border: 1px green solid ;");
        Erreurphone.innerText = "";
    }
}
// number : 
function ValidateNumber(){
    if(!(/^[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/).test(number.value)){
        number.setAttribute("style" , "color:red; border: 1px red solid ;")  ;
        Erreurnumber.setAttribute("style" , "color:red;");
        Erreurnumber.innerText = "veuillez entrer un Numero Enroll valid !";
        }
    else{ 
        number.setAttribute("style" , "color:black; border: 1px green solid ;");
        Erreurnumber.innerText = "";

    }
}
