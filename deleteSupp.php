<?php include "connect.php";
$id=$_GET['deleteid'];
$q="DELETE FROM suplierdata WHERE id='$id'";
$result=mysqli_query($con,$q);

if($result){
//     echo"Data Deleted Successfully";
      header('location:supplierData.php');
}
else{
    die(mysqli_error($con));
}
?>