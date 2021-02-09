<?php
require_once("dbconnection.php");
$query="select * from todo";
$result=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
<head>
<title>php+sql</title>
</head>
<body>
<h1>Insert new task</h1>
<form action="server.php" method="POST">             
<input type="text" placeholder="Insert task" name="action">
<button name="submit">Salvare</button>
</form>
<h3>What i need to do today?</h3>
<table>
<tr>
<td>#</td>
<td>Name</td>
<td>Edit</td>
<td>Edit</td>
</tr>
<?php                        
while($row=mysqli_fetch_assoc($result))
{
$id=$row['id'];
$name=$row['nume'];                               
?>
<tr>
<td><?php echo $id ?></td>
<td><?php echo $name ?></td>
<td><a href="edit.php?GetID=<?php echo $id?>">Editeaza</a></td>
<td><a href="server.php?DelID=<?php echo $id?>">Sterge</a></td>
</tr>
<?php
}
?>
</table>
</body>
</html>
