<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="Css/navbar.css">
<link rel="stylesheet" href="Css/style.css">
</head>
<body onload="triggerBtnClick()">
  <div class="billingHeader">
    <img src="img/billing_icon.png" width="3%" alt="">
    <b>Billing System</b>
  </div>
  <div class="conteiner">
    
    <div class="col-1">
      <ul>
      <a href="#">
        <li onclick="loadPage('cardDemo.php')" id="btn">Dashboard</li>
      </a>
      <a href="#">
        <li onclick="loadPage('paymentVouchir.php')">Payment Invoice</li>
      </a>
      <a href="#">
        <li onclick="loadPage('itemlist.php')">Item List</li>
      </a>
      <a href="#">
      <li onclick="loadPage('additems.php')">Add Items</li>
      </a>
      <a href="#">
        <li onclick="loadPage('addSupplier.php')">Add Supplier </li>
      </a>
      <a href="#">
        <li onclick="loadPage('supplierData.php')"> Supplier List</li>
      </a>

      <a href="#">
        <li ><a href="index.php" onclick='return checkdelete()'>Logout</a></li>
      </a>



      </ul>
    </div>

    <div>
      <iframe id="iframe-content" width="100%" height="100%" frameborder="0"></iframe>
    </div>
    <script>
        function loadPage(url){
            const iframe =document.getElementById("iframe-content");
            iframe.src = url;
        }
        function triggerBtnClick(){
      document.getElementById("btn").click();
      }

        function checkdelete()
        {
          return confirm('Are you sure you want to logout ??');
          
      }
    

    </script>
  </div>


</body>
</html>


