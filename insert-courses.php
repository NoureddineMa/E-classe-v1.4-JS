<?php
include_once 'connexion.php';




if(isset($_POST['save']))
{	 
	 $name = $_POST['image'];
	 $image= $_POST['name'];
     $lien= $_POST['lien'];
     
     
	 
	 $sql = "INSERT INTO course (name,image,lien)
	 VALUES ('$image','$name','$lien')";
	 if (mysqli_query($conn, $sql)) {
		header('location:courses.php');
	} else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>



