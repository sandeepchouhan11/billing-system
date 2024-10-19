<?php
include "connect.php";
if (isset ($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $q="delete from `additem` where id=$id";
    $result=mysqli_query($con,$q);
    if($result){
        // echo "deleted successfully";
        header("location:itemlist.php");
    }
    else{
        die(mysqli_error($con));
    }
}



?>