<?php include "connect.php";
$cid=$_GET['updateid'];
$q="select * from suplierdata where id='$cid'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_assoc($result);

        $suppliername=$row['suppliername'];
        $ownername=$row['owernarname'];
        $address=$row['address'];
        $state=$row['state'];
        $city=$row['city'];
        $zipcode=$row['zipcode'];
        $telephone=$row['phone'];
        $file=$row['image'];
        $supplier_id=$row['supplierid'];
        $gst=$row['gstnumber'];
        $mobile=$row['mobile'];
        $email=$row['email'];
        $aadhar_no=$row['aadhar'];
        $account_no=$row['account'];
        $ifsc=$row['ifsc'];
        $bankname=$row['bankname'];

 if(isset($_POST['submit'])){
    $suppliername=$_POST['suppliername'];
    $ownername=$_POST['owernarname'];
    $address=$_POST['address'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $zipcode=$_POST['zipcode'];
    $telephone=$_POST['phone'];
    $file=$_POST['image'];
    $supplier_id=$_POST['supplierid'];
    $gst=$_POST['gstnumber'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $aadhar_no=$_POST['aadhar'];
    $account_no=$_POST['account'];
    $ifsc=$_POST['ifsc'];
    $bankname=$_POST['bankname'];

 $q="update suplierdata set id=$cid,suppliername='$suppliername',owernarname='$ownername',address='$address',state='$state',city='$city',
 zipcode='$zipcode',phone='$telephone',image='$file',supplierid='$supplier_id',gstnumber='$gst',mobile='$mobile',email='$email',aadhar='$aadhar_no',
 account='$account_no',ifsc='$ifsc',bankname='$bankname' where id=$cid";
 $result=mysqli_query($con,$q);
 if($result){
    
        // echo "Data update successfully";
        header('location:supplierData.php');
      }
      else{
        die(mysqli_error($con));
      }
}
?>
 
 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
    <link rel="stylesheet" href="Css/style.css">
    <style>
      .button1{
            background-color: #808080;  
            border:1px solid black;
            margin: 1px; 
            text-align:center;
            width: 100%;
            padding-bottom: 50px;
        }
        button{
          margin: 1px;
          width: auto;
          height: 25px;
        }
    </style>
</head>
<body>
    <form method="POST">
  <table style="width:100%">
   

    <div class="supliyer-mainContain">
        <div class="supliyer-container">
         <div class="dividSuppliye">

                <div class="col-1"><spam >Supplier Name</spam></div>
                <div ><input value="<?php echo $suppliername ?>"
                type="text" name="suppliername" class="inputbox2"></div>
            </div>

            <div class="dividSuppliye">
                <div class="col-1"><spam>Owner Name</spam></div>
                <div><input value="<?php echo $ownername ?>"
                type="text" name="owernarname" class="inputbox2"></div>
            </div>

            <div class="dividSuppliye">
            <div class="col-1"><spam>Address</spam></div>
            <div><input value="<?php echo $address ?>"
            type="text" name="address" class="inputbox2"></div>
            </div>

            <div class="dividSuppliye">
                <div class="col-1"><spam >State</spam></div>
                <div class="col-2"> <input value="<?php echo $state ?>"
                type="text" name="state" class="inputbox "></div>
                <div class="col-3"><spam >City</spam></div>
                <div><input value="<?php echo $city ?>"
                 type="text" name="city" class="inputbox"></div>
            </div>


            <div class="dividSuppliye">
                <spam class="col-1">Zipcode</spam>
                <div class="col-2"><input value="<?php echo $zipcode ?>"
                type="text" name="zipcode" class="inputbox"></div>
                <div class="col-3"><spam >Telephone</spam></div>
                <div><input value="<?php echo $telephone ?>" 
                type="text" name="phone" class="inputbox"></div>
            </div>



            <div class="dividSuppliye">
                <spam class="col-1">Image</spam>
                <div class="col-2"><input type="text"  class="inputbox"></div>
                <div><input  type="file" value="<?php echo $file ?>" name="image" class="inputbox2"></div>

            </div>



        </div>

        <div class="suppliyetbl2">
        
            <div class="dividSuppliye">
                <div class="col-1"><spam>Supplier ID</spam></div>
                <div><input value="<?php echo $supplier_id ?>"
                 type="text" name="supplierid" ></div>
            </div>


            <div class="dividSuppliye">
                <div class="col-1"><spam>GST</spam></div>
                <div><input value="<?php echo $gst ?>"
                type="text" name="gstnumber"></div>
            </div>

            <div class="dividSuppliye">
                <div class="col-1"><spam>Mobile</spam></div>
                <div><input value="<?php echo $mobile ?>"
                type="text" name="mobile"></div>
            </div>

            <div class="dividSuppliye">
                <div class="col-1"><spam>Email</spam></div>
                <div><input value="<?php echo $email ?>"
                type="text" name="email"></div>
            </div>

            <div class="dividSuppliye">
                <div class="col-1"><spam>Aadhar No</spam></div>
                <div><input value="<?php echo $aadhar_no ?>"
                type="text" name="aadhar"></div>
            </div>
            <div class="dividSuppliye">
                <div class="col-1"><spam>Account No</spam></div>
                <div><input value="<?php echo $account_no ?>"
                type="text" name="account"></div>
            </div>
            <div class="dividSuppliye">
                <div class="col-1"><spam>IFSC</spam></div>
                <div><input value="<?php echo $ifsc ?>"
                type="text" name="ifsc"></div>
            </div>
            <div class="dividSuppliye">
                <div class="col-1"><spam>Bank Name</spam></div>
                <div><input value="<?php echo $bankname ?>"
                type="text" name="bankname"></div>

            </div>

        </div>

    </div>
    
    <div class="button1">
    <tr>
     <td><button>Add</button></td>
     <td><button type="submit" name="submit">Save</button></td>
     <td><button>Delete</button></td>
     <td><button>Search</button></td>
     <td><button>Home</button></td>
    </tr>
  </div>
</form>

</table>    
    
</body>
</html>