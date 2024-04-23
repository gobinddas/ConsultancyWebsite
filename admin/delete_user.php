<?php

include('../config/constants.php');


$id = $_GET['id'];



// delete the data
$sql = "DELETE FROM users WHERE id=$id";

$res = mysqli_query($conn, $sql);

if($res==true)
   {
     header("Location: manage_admin.php");
}
else{
     echo "ERROR...Failed to delete the data";
}
?>