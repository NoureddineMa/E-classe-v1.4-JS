<?php
$servername = "localhost";
$username = "root";
$password = "maher_db";
$database="e_classe_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
//  echo " <h1> Connexion avec succés </h1>";
?>