<?php
session_start();
$con = mysqli_connect('localhost:3306','root','');
// include './database/db.php';
mysqli_select_db($con,'billingsystemdb');
if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
$q="select * from system where username='$username' AND password='$password'";
$result=mysqli_query($con,$q);
$num =mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if($num==1)
{
$_SESSION['username']=$row['username'];
header('location:http://localhost/Billing%20System/login.php');
echo '<script> alert("wrong password")</script>' ;
}
else
{
  header('location:http://localhost/Billing%20System/#home'); 
  // print "wrong password";
  echo '<script> alert("wrong password")</script>' ;
  
}
}
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>



<form  method="post">
  <div class="imgcontainer">
    <img src="img/login.jpeg" alt="Avatar" class="avatar">
  </div>

  <h2 style="text-align:center">Login Here</h2>

  <div class="container" style="text-align:center">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required><br>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required><br>
        
    <button type="submit" name="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="submit" class="cancelbtn"><a href="ragistration.php" >Registretion</a></button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>
