<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
$connect = mysqli_connect('127.0.0.1','root','','begimjan_17_pn');
$result = mysqli_query($connect, "SELECT * FROM journal");
	for($i = 0; $i<$result->num_rows; $i++){
	$res = $result->fetch_assoc();																
					
?>
<div style="display: flex; ">
<h2  style="margin-left: 10px;">
	<?php 
     echo $res['surname'];
	 ?>
</h2>
<h2 style="margin-left: 10px;">
	<?php 
     echo $res['name'];
	 ?>
</h2>

<h2 style="margin-left: 10px;">
	<?php 
     echo $res['19nov'];
	 ?>
</h2>
<h2 style="margin-left: 10px;">
	<?php 
     echo $res['20nov'];
	 ?>
</h2>
<h2 style="margin-left: 10px;">
	<?php 
     echo $res['21nov'];
	 ?>
</h2>
</div>
<?php 
}
?>
<form action="insert.php" method="POST" >
	<div style="display: flex;">
		<h2>surname</h2>
		<input type="text" name="surname"  style="margin-top: 10px; margin-left:5px; height: 30px;"><br>
	</div>
	<div style="display: flex;">
		<h2>Name</h2>
		<input type="text" name="name"  style="margin-top: 10px; margin-left:5px; height: 30px;"><br>
	</div>
	<div style="display: flex;">
		<h2>19 november</h2>
		<input type="text" name="19nov"  style="margin-top: 10px; margin-left:5px; height: 30px;"><br>
	</div>
    <div style="display: flex;">
		<h2>20 november</h2>
		<input type="text" name="20nov"  style="margin-top: 10px; margin-left:5px; height: 30px;"><br>
	</div>
	<div style="display: flex;">
		<h2>21 november</h2>
		<input type="text" name="21nov"  style="margin-top: 10px; margin-left:5px; height: 30px;"><br>
	</div>
	<button style="margin-top: 10px;">
		create
	</button>
</form>

</body>
</html>

<?php echo '<img src=""  class="w-100" alt="">' ?>