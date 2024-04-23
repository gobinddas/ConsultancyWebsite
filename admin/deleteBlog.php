<?php

include('../config/constants.php');


$id = $_GET['id'];
$blogImage = $_GET['blogImage'];


// delete image
if($blogImage!="")
{
     $path="blog/img/".$blogImage;

     $remove = unlink($path);

     if($remove==false){
          echo 'Failed to remove image';
          header('location'.SITEURL.'admin/manage_blog.php');
          die();
     }
}
    

// delete the data
$sql = "DELETE FROM blogs WHERE id=$id";

$res = mysqli_query($conn, $sql);

if($res==true)
   {
     header("Location: manage_blog.php");
}
else{
     echo "ERROR...Failed to delete the data";
}
?>