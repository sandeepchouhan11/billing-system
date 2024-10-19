<?php
include 'connect.php';
$query = "select * from `additem`";
$result = mysqli_query($con, $query);
$html ='<table><tr><td>S NO</td><td>Item Name</td><td>Item Code</td><td>Company Name</td>
<td>MRP</td>
<td>Discount</td>
<td>GST</td>
<td>Price</td>
<td>Text Amount</td>
<td>Total Amount</td></tr>';
while($row=mysqli_fetch_array($result))
{
    $html.='<tr><td>'.$row['id'].'</td><td>'.$row['itemname'].'</td><td>'.$row['itemcode'].'</td>
    <td>'.$row['companyname'].'</td>
    <td>'.$row['mrp'].'</td>
    <td>'.$row['discount'].'</td>
    <td>'.$row['gst'].'</td>
    <td>'.$row['price'].'</td>
    <td>'.$row['texamount'].'</td>
    <td>'.$row['totalamount'].'</td></tr>';


}
$html.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=report.xls');
echo $html;

?>