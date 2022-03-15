<?php
include_once 'connexion.php';
$sql = "DELETE FROM pstudents WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    header('location:student.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);


