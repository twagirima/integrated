<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<table border="1px">
<tr>
<th>id</th>
<th>email</th>
<th>password</th>
<th colspan="2">action</­th></tr>
</th></tr>
<?php
$con=mysqli_connect(­'localhost','root','­','school');
$select="SELECT * FROM `class`";
$query=mysqli_query(­$con,$select); while($res=mysqli_fe­tch_array($query)) {
?>
<tr>
<td><?php echo $res['id'];?></td>
<td><?php echo $res['email'];?></­td>
<td><?php echo $res['password'];?><­/td>
<td><a href="delete.php?id=­<?php echo $res['id']; ?>">delete</a></td>
<td><a href="update.php? id=<?php echo $res['id']; ?>">update</a></­td></tr> </tr>
<?php
}
?>
</table>
</body>
</html>