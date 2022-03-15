<?php
include_once 'connexion.php';
if(isset($_POST['save']))
{	 
	 $image = $_POST['image'];
	 $name= $_POST['name'];
     $email= $_POST['email'];
     $phone= $_POST['phone'];
     $enroll_number	= $_POST['enroll_number'];
     $date_of_addmision	= $_POST['date_of_addmision'];
	 
	 $sql = "INSERT INTO pstudents (image,name,email,phone,enroll_number,date_of_addmision)
	 VALUES ('$image','$name','$email','$phone','$enroll_number','$date_of_addmision')";
	 if (mysqli_query($conn, $sql)) {
		header('location:student.php');
	} else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>