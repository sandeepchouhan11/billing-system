<?php 
include "connect.php";
require "cognfig/cognfig.php";
?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="Css/style.css"></link>
</head>
<body>

<!-- ------------------create table for Payment invoice---------- -->
<div class="body">
<form  method='post' >
  <div class="tbl1">
    <table style="width:100%;padding: 10px;">
 

    <tr >
      <td> Receipt Number </td><td><div> <input type='text'> </div></td>
      <td> Customer Name   </td><td> <div> <input type='text'> </div></td>
      <td> Date   </td><td><div><input type='date' ></div></td>
    </tr><br>
    <tr >
      <td> Payment Mode </td><td><div><select class="inputPayment">
          <option>Case</option>
          <option>Online</option>
      </div></selct> 
      </td>
      <td>Address </td><td><div><input type='text'></div></td>
      <td>Mobile</td><td><div><input type='text'></div></td>
    </tr>
    </table>
  </div>
  <div class="tablcontainer">

    <div class="tbl2">
      <table style="width:100;">
        <tr><td>Item Name</td><td><input name="search" id="tax1" placeholder="search for Name" type="text"
        value="<?php if(isset($_POST['searchdata'])){echo $data['itemname'];}?>" ></td></tr>
        <tr><td>Item code</td><td><input   type="text" id="tax2" name="itemcode"
        value="<?php if(isset($_POST['searchdata'])){echo $data['itemcode'];}?>" readonly></td> </tr>
        <tr><td>Price</td><td><input name="price" type="text" id="tax4"
        value="<?php if(isset($_POST['searchdata'])){echo $data['price'];}?>" readonly></td> </tr>
        <tr><td>Discount</td><td><input name='discount'type="text" id="tax5"
        value="<?php if(isset($_POST['searchdata'])){echo $data['discount'];}?>" readonly></td> </tr>
        <tr><td>Expiry Date</td><td><input name="expirydate" type="text"  id="expirydate"
        value="<?php if(isset($_POST['searchdata'])){echo $data['expirydate'];}?>" readonly></td> </tr>
        <tr><td>Company Name</td><td><input name="companyname" type="text" id="companyname"
        value="<?php if(isset($_POST['searchdata'])){echo $data['companyname'];}?>" readonly></td> </tr>
        <tr><td>MRP</td><td><input name="mrp" type="text" id="mrp"
        value="<?php if(isset($_POST['searchdata'])){echo $data['mrp'];}?>" readonly></td> </tr>
        <tr><td>Quantuty</td><td><input onkeyup="Addqp()" name="availablequantity" id="tax3" type="text"></td> </tr>
        <tr><td>Tax</td><td><input name="texamount" type="text" id="tax6"
        value="<?php if(isset($_POST['searchdata'])){echo $data['texamount'];}?>" readonly></td> </tr>
        <tr><td>Amount</td><td><input type="text" id="tax7" readonly></td> </tr>
      </table>
    </div>

    <div class="tbl3" > 
      <table id="myTable">
          <tr>
            <td >Item Name</td>
            <td>Item Code</td>
            <td >Quantity</td>
            <td >Rate</td>
            <td >Discount</td>
            <td >Tax</td>
            <td >Total Price</td>
            
          </tr>  
      </table>
    </div>
  </div>



  <div class="tablefoter">

    <div class="foter1">
      <button type="submit" name="searchdata" value="Submit"   >Search</button>
      <button  type="button" onclick="myCreate();" id="btn" >add</button>
      <button>Delete</button>
      <button>Clear</button>
      <button>Home</button>     
    </div>
    <div class="foter2">
      <div style="text-align:center;">
        <span  >total Amount -</span>
        <input  type="text" placeholder="enter your total amount ">
      </div>
      <div style="text-align:center">
        <input  type="text"  placeholder="Due amount ">
        <input  type="text"  placeholder="Paid amount " >
      </div>
    </div>



  </div>

  </form>

</div>


<script>

function myCreate(){
  var taxt1 = document.getElementById('tax1').value;
  var taxt2 = document.getElementById('tax2').value;
  var taxt3 = document.getElementById('tax3').value;
  var taxt4 = document.getElementById('tax4').value;
  var taxt5 = document.getElementById('tax5').value;
  var taxt6 = document.getElementById('tax6').value;
  var taxt7 = document.getElementById('tax7').value;

  var table = document.getElementById('myTable');
  var row = table.insertRow(1);

  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);
  var cell6 = row.insertCell(5);
  var cell7 = row.insertCell(6);

  cell1.innerHTML = taxt1;
  cell2.innerHTML = taxt2;
  cell3.innerHTML = taxt3;
  cell4.innerHTML = taxt4;
  cell5.innerHTML = taxt5;
  cell6.innerHTML = taxt6;
  cell7.innerHTML = taxt7;



};
// payment invoice me mrp or quantity ka sum
function Addqp(){
var mrp = document.getElementById('mrp').value;
var qty = document.getElementById('tax3').value;
var total = mrp * qty;
document.getElementById('tax7').value=total;
};

</script>
</body>
</html>
 
