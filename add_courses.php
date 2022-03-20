<!DOCTYPE html>
<html ang="en"> 

<?php 
   $title = 'Add courses';
   include 'head.php';

   


// ?>


<body class="for-bg vh-100">
    <div class="container-fluid text-black  py-4 ">
<h2 class="text-center fw-bold">ADD a New Course</h2>
</div>
<div class="d-flex flex-column justify-content-center align-items-center ">
<form method="POST" action="insert-courses.php" class="container w-50 bg-white px-4 rounded py-4" >

  <div class="form-group">
    <label for="">Nom du course</label> <br>
    <input type="text" class="form-control"   name="name" id="NameCourse" onkeyup="ValidationName()">
    <div id="ErreurNameCourse"></div>
  </div>

  <div class="form-group">
    <label for="">Entrer la photo du course </label>
    <input type="file" class="form-control" alt="course picture"  name="image" id="PhotoCourse">
    <div id="ErreurPhotoCourse"></div>
  </div>
  

  <div class="form-group">
    <label for="formGroupExampleInput2">Lien</label> <br>
    <input type="lien" class="form-control  " name="lien" id="LienCourse" >
    <div id="ErreurLienCourse"></div>
  </div>
  
  <div class="col-auto text-center ">
      <input type="submit" class="btn btn-info text-white mt-4  px-5 py-2 " name="save"  value="save"></input>

    </div>
</form>
</div>
<script src="/assets/javascript/Addcourses.js"></script>
</body>
</html>