<!DOCTYPE html>
<html ang="en"> 

<?php 
   $title = 'Add Student';
   include 'head.php';

   $err_name='';
   $err_email='';
   $err_phone='';
   $err_enroll_number='';
   $err_date_of_addmision='';
   
   
 ?>   



<body class="for-bg vh-100">
    <div class="container-fluid text-black  py-4 ">
<h2 class="text-center fw-bold">ADD a New Student</h2>
</div>
<div class="d-flex flex-column justify-content-center align-items-center ">
<!-- il faut ajouter l'action pour effectuer -->
<form method="POST" action="insert.php" class="container w-50 bg-white px-4 rounded py-4">  
  <div class="form-group">
    <label for="">Entrer Votre Photo :</label> 
    <input type="file" class="form-control" alt="profile picture"  name="image" onkeyup="ValidateName()">
  </div>
  <div class="form-group">
    <label for="name">Name</label>
    <br>
    <input type="text" class="form-control" name="name" id="name">
    <div id="Erreurname"></div>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Email</label> <br>
    <input type="text" class="form-control  " name="email" id="Email" onkeyup="ValidateEmail()">
    <div id="Erreuremail"></div>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Phone</label> <br>
    <input type="text" class="form-control  " name="phone" id="phone">
    <div src="Erreurphone"></div>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Enroll Number</label> <br>
    <input type="text" class="form-control " name="enroll_number" id="Enumber">
    <div id="Erreurnumber"></div>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Date Of Addmision</label> <br>
    <input type="date" class="form-control " name="date_of_addmision">
  </div>
  <div class="col-auto text-center ">
      <input type="submit" class="btn btn-info text-white mt-4  px-5 py-2 " name="save"  value="save" id="submit"> </input>

    </div>
</form>
</div>

<script src="assets/javascript/addstudent.js"></script>
</body>
</html>