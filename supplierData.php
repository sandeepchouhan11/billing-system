<?php
include "connect.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/suppliyer.css">

</head>
<body>

<div class="container-fruit">
<div class="container">

    

<div class="col1">
    <form method='POST'>
  <select name="showsupliername" class="gst" >
        <option><b1>Item Name</b1></option>
     <?php
        $query ="SELECT  suppliername FROM suplierdata";
        $result = mysqli_query($con,$query) or die ('error');
        if(mysqli_num_rows($result)>0){
          while($row = mysqli_fetch_assoc($result)){
            ?>
            <option><?php echo $row['suppliername']?></option>
         <?php }
        }
        ?>
     </select>
</div>

<div class="col2">
     <select class="gst" name='showsupplierid'>
        <option>Company name</option>
        <?php
        $qwery ="select DISTINCT supplierid from suplierdata";
        $result=mysqli_query($con,$qwery) or die ("error");
        if (mysqli_num_rows($result)>0){
            while($row= mysqli_fetch_assoc($result)){
                ?>
                <option><?php echo $row['supplierid']?></option>
                <?php
            }
        }
        ?>
     </select>
</div>

<div class="col3">
     <select class="gst" name='showgstnumber'>
        <option><b>GST</b></option>
        <?php
        $query="select DISTINCT gstnumber from suplierdata";
        $result=mysqli_query($con,$query);
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                ?>
                <option><?php echo $row['gstnumber'] ?></option>
                <?php
            }
        }
        ?>

     </select>
</div >

<div class="col4">
     <button type='submit' name='viwsitem' class="buttonview" ><b>View Items</b></button>
</div>
<!-- </form> -->
<div class="col5">
  <input type="text" class="inputsup"  name="" placeholder="Search" id="myInput"  >
</div>


<div class="col6">
     <button class="button" onclick="myFunction()" type="button"  ><b>Search</b></button>
</div>
</div> 


    <div class="supliyertbl">
        <table id="myTable">
        <tr>
            <th>S No.</th>
            <th>Suppliyer Name</th>
            <th>owernarname Name</th>
            <th>Adress</th> 
            <th>State</th>
            <th>Suppliyer ID</th>
            <th>GST Number</th>
            <th>Mobile</th>
            <th>Email ID</th>
            <th>Aadhar </th>
            <th>Acount Number</th>
            <th>IFSC CODE</th>
            <th>Delete</th>
            <th>Update</th>
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
                $owernarname=$row['owernarname'];
                $address=$row['address'];
                $state=$row['state'];
                $supplierid=$row['supplierid'];
                $gst=$row['gstnumber'];
                $mobile=$row['mobile'];
                $email=$row['email'];
                $aadhar=$row['aadhar'];
                $account=$row['account'];
                $ifsc=$row['ifsc'];
                echo '
                <tr>
                <th>'.$i++.'</th>    
                <th>'.$suppliername.'</th>
                <th>'.$owernarname.'</th>
                <th>'.$address.'</th>
                <th>'.$state.'</th>
                <th>'.$supplierid.'</th>
                <th>'.$gst.'</th>
                <th>'.$mobile.'</th>
                <th>'.$email.'</th>
                <th>'.$aadhar.'</th>
                <th>'.$account.'</th>
                <th>'.$ifsc.'</th>
                <th><button><a href="deleteSupp.php? deleteid='.$cid.'">Delete</a></button></th>
                <th><button><a href="updateSup.php? updateid='.$cid.'">UPDATE</a></button></th>
                </tr>';


                if(isset($_POST['viwsitem']))
                {
                 $showsupliername=$_POST['showsupliername'];
                 $showsupplierid=$_POST['showsupplierid'];
                 $showgstnumber=$_POST['showgstnumber'];
                 $query="select * from `suplierdata` where  suppliername='$showsupliername' or supplierid='$showsupplierid' or gstnumber='$showgstnumber'";
                 $result=mysqli_query($con,$query);

                 if (mysqli_num_rows($result)>0)
                 {
                    while($row= mysqli_fetch_array($result)){
                        $cid=$row['id'];
                        $suppliername=$row['suppliername'];
                        $owernarname=$row['owernarname'];
                        $address=$row['address'];
                        $state=$row['state'];
                        $supplierid=$row['supplierid'];
                        $gst=$row['gstnumber'];
                        $mobile=$row['mobile'];
                        $email=$row['email'];
                        $aadhar=$row['aadhar'];
                        $account=$row['account'];
                        $ifsc=$row['ifsc'];
                        echo '
                        <tr>
                        <th>'.$i++.'</th>    
                        <th>'.$suppliername.'</th>
                        <th>'.$owernarname.'</th>
                        <th>'.$address.'</th>
                        <th>'.$state.'</th>
                        <th>'.$supplierid.'</th>
                        <th>'.$gst.'</th>
                        <th>'.$mobile.'</th>
                        <th>'.$email.'</th>
                        <th>'.$aadhar.'</th>
                        <th>'.$account.'</th>
                        <th>'.$ifsc.'</th>
                        <th><button><a href="deleteSupp.php? deleteid='.$cid.'">Delete</a></button></th>
                        <th><button><a href="updateSup.php? updateid='.$cid.'">UPDATE</a></button></th>
                        </tr>';


                    }
                 }
                }
            }
        }
        
        
        ?>

        </table>
        
        </form>
    </div>



<!-- update select buttuns -->
<div class="futer-btn">
    <div class="btn1"><button>Update Select</button></div>
    <div class="btn2"><a href="export.php"><button type="button" >Export As CSV</button></a></div>
    <div class="btn3"><button >Previous</button></div>
    <div class="btn3"><button >Next</button></div>
</div>



</div>


<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 1; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("th")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1)
    {
        tr[i].style.display = "";
    }
     else 
    {
        tr[i].style.display = "none";
    }
    }
}
}


</script>

</body>
</html>