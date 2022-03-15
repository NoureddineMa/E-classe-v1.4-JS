<?php
include_once 'connexion.php';

// select les infos students pour les modifier !

$result = mysqli_query($conn,"SELECT * FROM course WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);

// remplace les infos par les infos entrer sur l'input !

if(count($_POST)>0) {
mysqli_query($conn,"UPDATE course set  image='" . $_POST['image'] . "', name='" . $_POST['name'] . "', lien='" . $_POST['lien']  .  "' WHERE id='" . $_POST['id'] .  "'");}



if(isset($_POST['save'])){
  header('location:courses.php');
}
?>
<!DOCTYPE html>
<html ang="en"> 

<?php 
   $title = 'Add Student';
   include 'head.php';
?>


<body class="for-bg vh-100">
    <div class="container-fluid text-black  py-4 ">
<h2 class="text-center fw-bold">Update a  course</h2>
</div>
<div class="d-flex flex-column justify-content-center align-items-center ">
<form method="POST"  class="container w-50 bg-white px-4 rounded py-4">


<div class="form-group">
    <label for="">name of course</label>
    <input type="text" class="form-control" alt="profile picture"  name="name" value="<?php echo $row['name']; ?>">
  </div>
  <div class="form-group">
    <label for="name">Entrer Votre Photo :</label>
    <input type="file" class="form-control" name="image" id="formGroupExampleInput" value="<?php echo $row['image']; ?>" >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">lien</label>
    <input type="text" class="form-control  " name="lien" id="formGroupExampleInput2" value="<?php echo $row['lien']; ?>">
  </div>
  <div class="form-group">
      
      <input type="hidden" class="form-control"  name="id" value="<?php echo $row['id']; ?>">
</div>
  
    
  
  <div class="col-auto text-center ">
      <input type="submit" class="btn btn-info text-white mt-4  px-5 py-2 " name="save"  value="save"></input>

    </div>
</form>
</div>
</body>
</html>