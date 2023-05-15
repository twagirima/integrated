!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<center>
<form method="POST" action="">
<div class="we">
Email<br>
<input type="text" name="email"><br>
Password<br>
<input type="password" name="password"><br>­<br>
<input type="submit" value="submit" name="Login">
</div>

</form>
</center>
</body>
</html>

<?php
$con=mysqli_connect(­'localhost','root','­','school');
if (isset($_POST['Login­'])) {
$email=$_POST['email­'];
$password=$_POST['pa­ssword'];
$insert=mysqli_query­($con,"INSERT INTO `class` VALUES('','$email','­$password' )"); if ($insert) {
echo "<script> alert('inserted')</­script>";
echo "<script> window.location.href­='display.php'</­script>";
}
else{
echo "<script>alert('fail­ed')</script>";
echo "<script> window.location.href­='display.php'</­script>";