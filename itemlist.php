<?php
include "connect.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/suppliyer.css">

    <!-- <title>Document</title> -->
</head>
<body>
    <form method="POST">

 
<!--------------- navbar start----------------->
<div class="container-fruit">
    <div class="container">

    

        <div class="col1">
          <select name="showitem" class="gst" >
                <option><b1>Item Name</b1></option>
             <?php
                $query ="SELECT  itemname FROM additem";
                $result = mysqli_query($con,$query) or die ('error');
                if(mysqli_num_rows($result)>0){
                  while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <option><?php echo $row['itemname']?></option>
                 <?php }
                }
                ?>
             </select>
        </div>

        <div class="col2">
             <select class="gst" name='showCompany'>
                <option>Company name</option>
                <?php
                $qwery ="select DISTINCT companyname from additem";
                $result=mysqli_query($con,$qwery) or die ("error");
                if (mysqli_num_rows($result)>0){
                    while($row= mysqli_fetch_assoc($result)){
                        ?>
                        <option><?php echo $row['companyname']?></option>
                        <?php
                    }
                }
                ?>
             </select>
        </div>

        <div class="col3">
             <select class="gst" name='viwsgst'>
                <option><b>GST</b></option>
                <?php
                $query="select DISTINCT gst from additem";
                $result=mysqli_query($con,$query);
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        ?>
                        <option><?php echo $row['gst'] ?></option>
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
          <input type="text" class="inputsup"  name="" placeholder="Search" id="myInput"  onkeyup="myFunction()">
        </div>


        <!-- <div class="col6">
             <button class="button" onclick="myFunction()" type="button"  ><b>Search</b></button>
        </div> -->
        </div> 
    <!--------------- navbar end----------------->
    <!-- ----------------------items table and supliyer start------------------>

     
    <div class="supliyertbl">
        <table id="myTable">
        <thead>
        <tr>
            <th>S No.</th>
            <th>Item Name</th>
            <th>Item ID(code)</th>
            <th>Company Name</th>
            <th>MRP</th>
            <th>Discount</th>
            <th>GST</th>
            <th>Price</th>
            <th>Tax</th>
            <th>Total Amount</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php

        
        $q="select * from `additem` ";
        $result=mysqli_query($con,$q);
        if($result){
            $count=1;
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $item_name=$row['itemname'];
                $item_id=$row['itemcode'];
                $company_name=$row['companyname'];
                $mrp=$row['mrp'];
                $discount=$row['discount'];
                $gst=$row['gst'];
                $price=$row['price'];
                $tax_amount=$row['texamount'];
                $total_amount=$row['totalamount'];
                
                echo '
                <tr>
                <th>'.$count++.'</th>
                <th>'.$item_name.'</th>
                <th>'.$item_id.'</th>
                <th>'.$company_name.'</th>
                <th>'.$mrp.'</th>
                <th>'.$discount.'</th>
                <th>'.$gst.'</th>
                <th>'.$price.'</th>
                <th>'.$tax_amount.'</th>
                <th>'.$total_amount.'</th>
                <th><button><a href="update.php? updateid='.$id.'">Update</a></button></th>
                <th><button><a href="delete.php? deleteid='.$id.'">Delete</a></button></th>
                </tr>';
 
                if (isset($_POST['viwsitem']))
                {
                   $showitem=$_POST['showitem'];
                   $showCompany=$_POST['showCompany'];
                   $viwsgst = $_POST['viwsgst'];
                   $query="SELECT * FROM `additem` where  itemname='$showitem' or companyname='$showCompany' or gst='$viwsgst'";
                   $result = mysqli_query($con,$query) or die ('error');

                   if(mysqli_num_rows($result) > 0)

                   {
                    $count=1;
                       while($row = mysqli_fetch_array($result))
                       {
                           $id=$row['id'];
                           $item_name=$row['itemname'];
                           $item_id=$row['itemcode'];
                           $company_name=$row['companyname'];
                           $mrp=$row['mrp'];
                           $discount=$row['discount'];
                           $gst=$row['gst'];
                           $price=$row['price'];
                           $tax_amount=$row['texamount'];
                           $total_amount=$row['totalamount'];
                           
                           echo '
                           <tr>
                           <th>'.$count++.'</th>
                           <th>'.$item_name.'</th>
                           <th>'.$item_id.'</th>
                           <th>'.$company_name.'</th>
                           <th>'.$mrp.'</th>
                           <th>'.$discount.'</th>
                           <th>'.$gst.'</th>
                           <th>'.$price.'</th>
                           <th>'.$tax_amount.'</th>
                           <th>'.$total_amount.'</th>
                           <th><button><a href="update.php? updateid='.$id.'">Update</a></button></th>
                           <th><button><a href="delete.php? deleteid='.$id.'">Delete</a></button></th>
                           </tr>';
                       }
                   

                   } 

                
            
                    else
                    {

                    $q="select * from `additem` ";
                    $result=mysqli_query($con,$q);
                    if($result)
                    {
                        $count=1;
                        while($row=mysqli_fetch_assoc($result)){
                            $id=$row['id'];
                            $item_name=$row['itemname'];
                            $item_id=$row['itemcode'];
                            $company_name=$row['companyname'];
                            $mrp=$row['mrp'];
                            $discount=$row['discount'];
                            $gst=$row['gst'];
                            $price=$row['price'];
                            $tax_amount=$row['texamount'];
                            $total_amount=$row['totalamount'];
                            
                            echo '
                            <tr>
                            <th>'.$count++.'</th>
                            <th>'.$item_name.'</th> 
                            <th>'.$item_id.'</th>
                            <th>'.$company_name.'</th>
                            <th>'.$mrp.'</th>
                            <th>'.$discount.'</th>
                            <th>'.$gst.'</th>
                            <th>'.$price.'</th>
                            <th>'.$tax_amount.'</th>
                            <th>'.$total_amount.'</th>
                            <th><button><a href="update.php? updateid='.$id.'">Update</a></button></th>
                            <th><button><a href="delete.php? deleteid='.$id.'">Delete</a></button></th>
                            </tr>';

                        }
                    }
                    }
                }
            }
        }    
        
        ?>
</tbody>
        </table>


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
  for (i = 0; i < tr.length; i++) {
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