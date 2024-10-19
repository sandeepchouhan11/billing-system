<?php include 'connect.php';
if(isset($_POST['submit'])){
    $supplier_name=$_POST['suppliername'];
    $owerner_name=$_POST['owernarname'];
    $address=$_POST['address'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $zip_code=$_POST['zipcode'];
    $telephone=$_POST['phone'];
    $image=$_POST['image'];
    $supplier_id=$_POST['supplierid'];
    $gst_number=$_POST['gstnumber'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $adhar_number=$_POST['aadhar'];
    $account_number=$_POST['account'];
    $ifsc=$_POST['ifsc'];
    $bank_name=$_POST['bankname'];

$q="insert into suplierdata (suppliername,owernarname,address,state,city,zipcode,phone,image,supplierid,gstnumber,mobile,email,aadhar,account,ifsc,bankname)
values ('$supplier_name', '$owerner_name', '$address', '$state', '$city', '$zip_code', '$telephone', '$image', '$supplier_id', '$gst_number', '$mobile', '$email','$adhar_number', '$account_number', '$ifsc', '$bank_name')";
$result=mysqli_query($con,$q);
if($result){
    echo "data submit succses-full";
      header('location:supplierData.php');
}
else{
    die(mysqli_error($con));
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
    <link rel="stylesheet" href="Css/style.css">
</head>
<body>
<form method="post">
    <div class="supliyer-mainContain">
        <div class="supliyer-container">



            <div class="dividSuppliyinput">

                <div class="collabe-1"><spam >suppliyer Name</spam></div>
                <div class="subCol-1"><input type="text"   name='suppliername' Required ></div>
            </div>

            <div class="dividSuppliyinput">
                <div class="collabe-1"><spam>Owernar Name</spam></div>
                <div class="subCol-1"><input type="text"  name="owernarname" Required></div>
            </div>

            <div class="dividSuppliyinput">
            <div class="collabe-1"><spam>Adress</spam></div>
            <div class="subCol-1"><input type="text"  name="address" Required></div>
            </div>

            <div class="dividSuppliye">
                <div class="collabe-2"><spam >state</spam></div>
                <div class="collabe-3"><input type="text"  name="state" Required></div>
                <div class="collabe-4"><spam >City</spam></div>
                <div  class="collabe-5"><input type="text"  name="city" Required></div>
            </div>


            <div class="dividSuppliye">
                <spam class="collabe-2">Zip Code</spam>
                <div class="collabe-3"><input type="text"  name="zipcode" Required></div>
                <div class="collabe-4"><spam >telephone</spam></div>
                <div class="collabe-5"><input type="text"  name="phone" Required></div>
            </div>



            <div class="dividSuppliye">
                <spam class="collabe-1">Image</spam>
                <div class="subCol-1"><input type="file"   name="image" Required></div>

            </div>

            <div class="dividSuppliye">
   
                <div><input type="image"></div>
            </div>



        </div>
        <!-- right side table start -->

        <div class="suppliyetbl2">
        
            <div class="dividSuppliyinput-1">
                <div class="collabe-1"><spam>supliyer ID</spam></div>
                <div class="subCol-1"><input type="text" name="supplierid" Required></div>
            </div>


            <div class="dividSuppliyinput-1">
                <div class="collabe-1"><spam>GST Number</spam></div>
                <div class="subCol-1"><input type="text" name="gstnumber" Required></div>
            </div>

            <div class="dividSuppliyinput-1">
                <div class="collabe-1"><spam>Mobile Number</spam></div>
                <div class="subCol-1"><input type="text" name="mobile" Required></div>
            </div>

            <div class="dividSuppliyinput-1">
                <div class="collabe-1"><spam>Email Id</spam></div>
                <div class="subCol-1"><input type="text" name="email" Required></div>
            </div>

            <div class="dividSuppliyinput-1">
                <div class="collabe-1"><spam>Adhar Number</spam></div>
                <div class="subCol-1"><input type="text" name="aadhar" Required></div>
            </div>

            <div class="dividSuppliyinput-1">
                <div class="collabe-1"><spam>Account Number</spam></div>
                <div class="subCol-1"><input type="text" name="account" Required></div>
            </div>

            <div class="dividSuppliyinput-1">
                <div class="collabe-1"><spam>IFSC Code</spam></div>
                <div class="subCol-1"><input type="text" name="ifsc" Required></div>
            </div>

            <div class="dividSuppliyinput-1">
                <div class="collabe-1"><spam>Bank Name</spam></div>
                <div class="subCol-1"><input type="text" name="bankname" Required></div>
            </div>

        </div>
        <!-- right side table end -->







    </div>
        <!-- footur button start -->
    

        <div>
            <button>Add</button>
            <button type='submit' name="submit">Save</button>
            <button>Delete</button>
            <button>Search</button>
            <button>Home</button>
        </div>



        <!-- right side table end -->
</form> 
</body>
</html>