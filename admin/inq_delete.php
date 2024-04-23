<?php

include('../config/constants.php');


$id = $_GET['id'];



// delete the data
$sql = "DELETE FROM inquiry WHERE id=$id";

$res = mysqli_query($conn, $sql);

if($res==true)
   {
     header("Location: inquiry.php");
}
else{
     echo "ERROR...Failed to delete the data";
}
?>