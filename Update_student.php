
<?php
include_once 'connexion.php';

// select les infos students pour les modifier !

$result = mysqli_query($conn,"SELECT * FROM pstudents WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);


// remplace les infos par les infos entrer sur l'input !

if(count($_POST)>0) {
mysqli_query($conn,"UPDATE pstudents set  image='" . $_POST['image'] . "', name='" . $_POST['name'] . "', 
email='" . $_POST['email'] . "' ,phone='" . $_POST['phone'] . "' , enroll_number='" . $_POST['enroll_number'] . "' ,
 date_of_addmision='" . $_POST['date_of_addmision'] .  "' WHERE id='" . $_POST['id'] .   "'");}



if(isset($_POST['save'])){
  header('location:student.php');
}
?>


<!DOCTYPE html>
<html ang="en"> 

<?php 
   $title = 'Add Student';
   include 'head.php';



   include 'form_student.php';
?>


<body class="for-bg vh-100">
    <div class="container-fluid text-black  py-4 ">
<h2 class="text-center fw-bold">Update a  Student</h2>
</div>
<div class="d-flex flex-column justify-content-center align-items-center ">
<form method="POST"  class="container w-50 bg-white px-4 rounded py-4">

<div class="form-group">
      
      <input type="hidden" class="form-control"  name="id" value="<?php echo $row['id']; ?>">
</div>
<div class="form-group">
    <label for="">Entrer Votre Photo :</label>
    <input type="file" class="form-control" alt="profile picture"  name="image" value="<?php echo $row['image']; ?>">
  </div>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" id="formGroupExampleInput" value="<?php echo $row['name']; ?>" >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Email</label>
    <input type="text" class="form-control  " name="email" id="formGroupExampleInput2" value="<?php echo $row['email']; ?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Phone</label>
    <input type="text" class="form-control  " name="phone" id="formGroupExampleInput2" value="<?php echo $row['phone']; ?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Enroll Number</label>
    <input type="text" class="form-control " name="enroll_number" id="formGroupExampleInput2" value="<?php echo $row['enroll_number']; ?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Date Of Addmision</label>
    <input type="date" class="form-control " name="date_of_addmision" id="formGroupExampleInput2" value="<?php echo $row['date_of_addmision']; ?>">
  </div>
  
    
  
  <div class="col-auto text-center ">
      <input type="submit" class="btn btn-info text-white mt-4  px-5 py-2 " name="save"  value="save"></input>

    </div>
</form>
</div>
</body>
</html>