let nameCourse = document.getElementById("NameCourse");
let ErreurNameCourse = document.getElementById("ErreurNameCourse");
let submit = document.getElementById("submit");
let LienCourse = document.getElementById("LienCourse");
let ErreurLienCourse = document.getElementById("ErreurLienCourse");


// name : 
submit.addEventListener("click",(e) =>{
    if(nameCourse.value == ""){
        e.preventDefault();
        nameCourse.setAttribute("style" , "color:red; border: 1px red solid ;")  ;
        ErreurNameCourse.innerText = "Name is required";
        ErreurNameCourse.setAttribute("style" , "color:red;");
    }
    else{
        nameCourse.setAttribute("style" , "color:black; border: 1px green solid ;")  ;
        ErreurNameCourse.innerText = "";
    }
})

// lien : 
submit.addEventListener("click",(e) =>{
    if(LienCourse.value == ""){
        e.preventDefault();
        LienCourse.setAttribute("style" , "color:red; border: 1px red solid ;")  ;
        ErreurLienCourse.innerText = "Name is required";
        ErreurLienCourse.setAttribute("style" , "color:red;");
    }
    else{
        LienCourse.setAttribute("style" , "color:black; border: 1px green solid ;")  ;
        ErreurLienCourse.innerText = "";
    }
})

// function Name : 

function ValidationName(){
    if(!(/^[a-z A-Z]{5,10}$/).test(nameCourse.value)){
        nameCourse.setAttribute("style" , "color:red; border: 1px red solid ;")  ;
        ErreurNameCourse.setAttribute("style" , "color:red;");
        ErreurNameCourse.innerText = "veuillez entrer un nom valid";
        }
    else{ 
        nameCourse.setAttribute("style" , "color:black; border: 1px green solid ;");
        ErreurNameCourse.innerText = ""

    }
}

// function lien :
function ValidationLien(){
    if(!(/[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*)?/gi).test(LienCourse.value)){
        LienCourse.setAttribute("style" , "color:red; border: 1px red solid ;")  ;
        ErreurLienCourse.setAttribute("style" , "color:red;");
        ErreurLienCourse.innerText = "veuillez entrer un lien valid";
        }
    else{ 
        LienCourse.setAttribute("style" , "color:black; border: 1px green solid ;");
        ErreurLienCourse.innerText = ""

    }
}



