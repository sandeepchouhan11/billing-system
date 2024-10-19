<?php
include "connect.php"
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Css/cardDemo.css">
<link rel="stylesheet" href="Css/suppliyer.css">
</head>
<body>

<!-- <div class="main container"> -->


<div class="row">
  <div class="column">
    <div class="card">
    <h3>Supplier Data</h3>
      <p>Some text</p>
      <div class="cardBox"><a href="supplierData.php"><h3>Views More</h3></a></div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <h3>All Company</h3>
      <p>Some text</p>
      <a href="#"><h3>Views More</h3></a>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>All Product</h3>
      <p>Some text</p>
      <a href="#"><h3>Views More</h3></a>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Pad Amount</h3>
      <p>Some text</p>
      <a href="#"><h3>Views More</h3></a>
    </div>
  </div>
</div>

<div class="supliyertbl">
        <table>
        <tr>
            <th>S No.</th>
            <th>Suppliyer Name</th>
            <th>Adress</th> 
            <th>State</th>
            <th>Suppliyer ID</th>
            <th>GST Number</th>
            <th>Mobile</th>
            <th>Acount Number</th>
            <th>IFSC CODE</th>
            
        </tr>


        <?php
        $q="select * from `suplierdata` ";
        $result=mysqli_query($con,$q);
        if($result){
            $i=1;
            while($row=mysqli_fetch_assoc($result)){
                //i++;
                $cid=$row['id'];
                $suppliername=$row['suppliername'];
                $address=$row['address'];
                $state=$row['state'];
                $supplierid=$row['supplierid'];
                $gst=$row['gstnumber'];
                $mobile=$row['mobile'];
                $account=$row['account'];
                $ifsc=$row['ifsc'];
                echo '
                <tr>
                <th>'.$i++.'</th>    
                <th>'.$suppliername.'</th>
                <th>'.$address.'</th>
                <th>'.$state.'</th>
                <th>'.$supplierid.'</th>
                <th>'.$gst.'</th>
                <th>'.$mobile.'</th>
                <th>'.$account.'</th>
                <th>'.$ifsc.'</th>
                </tr>';
            }
        }
        
        
        ?>

        </table>
        

    </div>


</body>
</html>
