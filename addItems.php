<?php include 'connect.php';
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

   $query="insert into additem(itemname,itemcode,batch_no,expirydate,discription,mrp,category,discount,availablequantity,price,gst,texamount,companyname,totalamount) 
   values('$item_name','$item_code','$batch_no','$expiry_date','$discription','$mrp','$category','$discount','$available_quantity','$price','$gst','$tax_amount','$company_name','$total_amount')";
  
   $result=mysqli_query($con,$query);
   if($result){
     ?>
       <script type ="text/javascript">
        alert("Data saved Successfully")
        window.open("http://localhost/Billing%20system/itemlist.php","_self");
       </script>
     <?php
    }
       else{
         ?>
          <script type="text/javascript">
             alert("Please Try Again")
          </script>
         <?php
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
  background-color: #A7BEAE;;
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
<script src="js/removeGST.js"></script>
</head>
<body>
<form method="post">
<table style="width:100%;height: 400px;"> 


   <tr>
       <td>Item Name</td><td><input type='text' name="itemname" Required></td>
       <td> Company Name</td><td><div><input type='text' name="companyname"></div></td>
       
   </tr> 
   <tr>
      <td>Batch No </td><td><div><input type='text' name="batch_no"></div></td>
      <td>Item code</td><td><div><input type='text' name="itemcode"></div></td>
   </tr>
   <tr>
   <td>Description</td><td><div><input type='text' name="discription"></div></td>
   <td>Expiry date </td><td><div><input type='text' name="expirydate"></div></td>
   </tr>
   <tr>
   <td>Category</td><td><div><input type='text' name="category"></div></td>
   <td>MRP</td><td><div><input type='text'  name="mrp"  id="mrp"  onChange="RemovGStAmount()"></div></td>
   </tr>
   <tr>
   <td>Available Qut.</td><td><div><input type='text' onChange="RemovGStAmount()" id='qty'  name="availablequantity" value="1"></div></td>
   <td>Price</td><td><div><input type='text'  id='price' name="price" onChange="RemovGStAmount()" readonly></div></td>
   </tr>
   <tr>
   <td>GST %</td><td><div><input type='text' id='gst'  placeholder=" %" name="gst" onChange="RemovGStAmount()"></div></td>
   <!-- <td>GST</td><td><div><input type='text' name="gst"></div></td> -->
   <td> Tax Amount</td><td><div><input type='text' id='taxRate' name="texamount" readonly></div></td>

   </tr>
   <tr>
   <td>Discount</td><td><div><input type='text' name="discount"></div></td>
   <td>Total Amount</td><td><div><input type='text' id='totalAmount' name="totalamount"  readonly></div></td>
   </tr>

 </table>

  <div class="button1">
    <tr>
     <td><button type="submit" name="submit">Add</button></td>
     <td><button>Save</button></td>
     <td><button>Delete</button></td>
     <td><button>Search</button></td>
     <td><button>Home</button></td>
    </tr>
  </div>
  </form>


  <script>

// ###################  Remove gst function  #####################

function RemovGStAmount()
{
  var mrp = document.getElementById('mrp').value;

  var gst = document.getElementById('gst').value;
  document.getElementById('price');
  
  var actual_Price = ((mrp) / ( +(100) + +(gst) )) * (100) ;
  document.getElementById('price').value=actual_Price;


// ###################   gst plus   #####################

  var qty = document.getElementById('qty').value;

  var taxRate = document.getElementById('taxRate').value;
  
  var total = actual_Price * qty;

  var GstRate= actual_Price * gst/ 100;
  document.getElementById('taxRate').value=GstRate;
  var totalqwtRate = (GstRate) * (qty)
  var add = +(totalqwtRate) +  +(total);
  document.getElementById('totalAmount').value=add;
};



</script>




</body>
</html>