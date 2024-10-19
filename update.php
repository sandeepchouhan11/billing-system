<?php
include 'connect.php';
$id =$_GET['updateid'];
$q="select * from `additem` where id=$id";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_assoc($result);
$item_name=$row['itemname'];
$item_code=$row['itemcode'];
$batch_no=$row['batch_no'];
$expiry_date=$row['expirydate'];
$discription=$row['discription']; 
$mrp=$row['mrp'];
$category=$row['category'];
$discount=$row['discount'];
$available_quantity=$row['availablequantity'];
$price=$row['price'];
$gst=$row['gst'];
$tax_amount=$row['texamount'];
$company_name=$row['companyname'];
$total_amount=$row['totalamount'];


if(isset($_POST['submit'])){
  $item_name=$_POST['itemname'];
  $item_code=$_POST['itemcode'];
  $batch_no=$_POST['batch_no'];
  $expiry_date=$_POST['expirydate'];
  $discription=$_POST['discription']; 
  $mrp=$_POST['mrp'];
  $category=$_POST['category'];
  $discount=$_POST['discount'];
  $available_quantity=$_POST['availablequantity'];
  $price=$_POST['price'];
  $gst=$_POST['gst'];
  $tax_amount=$_POST['texamount'];
  $company_name=$_POST['companyname'];
  $total_amount=$_POST['totalamount'];



  $q="update `additem` set id=$id,itemname='$item_name',itemcode='$item_code', batch_no='$batch_no', expirydate='$expiry_date',
   discription='$discription', mrp='$mrp', category='$category', discount='$discount', availablequantity='$available_quantity', 
   price='$price', gst='$gst', texamount='$tax_amount', companyname='$company_name', totalamount='$total_amount' where id=$id";
  $result=mysqli_query($con,$q);

  if($result){
    // echo "Data update successfully";
    header('location:itemlist.php');
  }
  else{
    die(mysqli_error($con));
  }

}





?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="Css/style.css">
<style>
table, th, td {
  
  text-align: left;
  border-spacing: 20px;
  background-color: skyblue;
}

.button1{
   background-color: gray;  
   border:1px solid black;
   margin: 0; 
   text-align: center;
}
 button{
  margin: 30px;
  width: auto;
  height: 30px;

}
</style>
</head>
<body>
<form method="post">
<table style="width:100%;height: 500px;">
 <!-- <tr class="button">
   <th><tr>Item List</tr></th> 
    <button>supplier list</button>
    <button>Department list</button>
    <button>social list</button>
    <button>state list</button> 
</tr>-->

   <tr>
       <td>item name</td><td><input value="<?php echo $item_name ?>" type='text' name="itemname" Required></td>
       <td>item code</td><td><div><input value="<?php echo $item_code ?>" type='text' name="itemcode" Required></div></td>
       
   </tr> 
   <tr>
      <td>batch no</td><td><div><input value="<?php echo $batch_no ?>" type='text' name="batch_no" Required></div></td>
      <td>expiry date</td><td><div><input value="<?php echo $expiry_date?>" type='text' name="expirydate" Required></div></td>
   </tr>
   <tr>
   <td>description</td><td><div><input value="<?php echo $discription?>" type='text' name="discription"Required></div></td>
   <td>MRP</td><td><div><input value="<?php echo $mrp?>" type='text' name="mrp" Required></div></td>
   </tr>
   <tr>
   <td>category</td><td><div><input value="<?php echo $category?>" type='text' name="category" Required ></div></td>
   <td>discount</td><td><div><input value="<?php echo $discount?>" type='text' name="discount" Required></div></td>
   </tr>
   <tr>
   <td>Available Qut.</td><td><div><input value="<?php echo $available_quantity?>" type='text' name="availablequantity" Required></div></td>
   <td>Price</td><td><div><input value="<?php echo $price?>" type='text' name="price" Required></div></td>
   </tr>
   <tr>
   <td>Tax Amount</td><td><div><input value="<?php echo $tax_amount?>" type='text' name="texamount" Required></div></td>
   <td>GST</td><td><div><input value="<?php echo $gst?>" type='text' name="gst" Required></div></td>
   </tr>
   <tr>
   <td>Company Name</td><td><div><input value="<?php echo $company_name?>" type='text' name="companyname" Required></div></td>
   <td>Total Amount</td><td><div><input value="<?php echo $total_amount?>" type='text' name="totalamount" Required></div></td>
   </tr>

 </table>

  <div class="button1">
    <tr>
     <td><button>Add</button></td>
     <td><button  type="submit" name="submit">Save</button></td>
     <td><button>Delete</button></td>
     <td><button>Search</button></td>
     <td><button>Home</button></td>
    </tr>
  </div>
  </form>
</body>
</html>