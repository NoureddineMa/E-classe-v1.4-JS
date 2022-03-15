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
   
    ;
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
    <input type="file" class="form-control" alt="profile picture"  name="image">
  </div>
  <div class="form-group">
    <label for="name">Name</label>
    <br>
    <span class="text-danger"> <?php echo $err_name ?> </span>
    <input type="text" class="form-control" name="name" id="formGroupExampleInput">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Email</label> <br>
    <span class="text-danger"> <?php echo $err_email?> </span>
    <input type="text" class="form-control  " name="email" id="formGroupExampleInput2">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Phone</label> <br>
    <span class="text-danger"> <?php echo $err_phone ?> </span>
    <input type="text" class="form-control  " name="phone" id="formGroupExampleInput2">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Enroll Number</label> <br>
    <span class="text-danger"> <?php echo $err_enroll_number?> </span>
    <input type="text" class="form-control " name="enroll_number" id="formGroupExampleInput2">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Date Of Addmision</label> <br>
    <span class="text-danger"> <?php echo $err_date_of_addmision?> </span>
    <input type="date" class="form-control " name="date_of_addmision" id="formGroupExampleInput2">
  </div>
  <div class="col-auto text-center ">
      <input type="submit" class="btn btn-info text-white mt-4  px-5 py-2 " name="save"  value="save"></input>

    </div>
</form>
</div>
</body>
</html>