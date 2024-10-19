<?php
include 'connect.php';
error_reporting(0);
if(isset($_POST['searchdata'])){
  $search = $_POST['search'];
  $query="select * from additem where itemname='$search'";
  $result=mysqli_query($con,$query);
  $data=mysqli_fetch_assoc($result);
  // $name=$data['price'];
  // echo $name;
}
?>