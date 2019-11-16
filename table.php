<?php
$connect=new mysqli('localhost','root','', 'mydb');
$query= "select * from student";
$result=$connect->query($query);
?>


<!doctype html>
<html>
<title>
<head>fetch data from database</head>

</title>
<body>
<table align="center" border="1px" style="width:600px; line height:40px">
<tr>
<th colspan="4"><h2>student record</h2></th>
</tr>
<tr>
<th>id</th>
<th>admission_no</th>
<th>assignment</th>
<th>test</th>
<th>exam</th>
<th>total</th>
<th>grade</th>
</tr>
<?php
while($rows=mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $rows['id'];?> </td>
<td><?php echo $rows['admission_no'];?> </td>
<td><?php echo $rows['assignment'];?> </td>
<td><?php echo $rows['test'];?> </td>
<td><?php echo $rows['exam'];?> </td>
<td><?php echo $rows['total'];?> </td>
<td><?php echo $rows['grade'];?> </td>
</tr>
<?php
}
?>
</table>
</body>
</html>