let nameCourse = document.getElementById("NameCourse");
let ErreurNameCourse = document.getElementById("ErreurNameCourse");
let PhotoCourse = document.getElementById("PhotoCourse");
let ErreurPhotoCourse = document.getElementById("ErreurPhotoCourse");
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
        e.preventDefault();
        nameCourse.setAttribute("style" , "color:black; border: 1px green solid ;")  ;
        ErreurNameCourse.innerText = "";
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

