<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	form
	{
		position: relative;
		left:0%;
        background-color: rgb(500,0,0);
		width:1200px;
		height:300px;
		padding:5px;
		border-radius: 100px;
	}
	input
	{
		margin-left: 10px;
	margin-bottom: 12px;
	border-radius: 4px;
	height:26px;
	margin-top: 5px;
	width: 90%;
	}
	textarea
	{
		position: absolute;
		right:10px;
		margin:10px;
	}
	label
	{
		margin-left: 10px;
	font-weight: bold;
	font-family: sans-serif;
	font-size: 20px;
	}
	</style>
</head>
<body background="login2.png">
<div class="top">
  <div class="topitems">
    <ul>
  <a class="one" > Our Services |</a>
  <a class="two" >Contact Us  |</a>
  <a class="three" >Help?</a>
  <i id="icon" class="fa fa-search"></i>
    </ul>
  </div>
<div class="topmenu">
    <ul>
    <a class="first" > Products</a>
    <a class="second" >Services</a>
    <a class="third">Other Services</a>
	<a class="fourth" >Login/Register</a>
    </ul>
  </div>
<?php
$name=$text=$cp=$sp=$image='';
if(isset($_POST['submit']))
{
	$name=$_POST['Product'];
	$text=$_POST['Cost'];
	$cp=$_POST['Adress '];
	$image=$_FILES['photo']['name'];
	$target='images/'.basename($_FILES['photo']['name']);
	$x=mysqli_connect("localhost","root","ShankiC@18");
    
	mysqli_query($x,"INSERT INTO images (Product,Cost,Adress,Upload Detailled Description) values ('$Product','$Cost','$Adress','$Upload_Detailled_Description')");
	if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
	{
		echo "image uploaded successfully";
	}
}
?>
<br><br>
<form action="index.php" method="post">

<label>Product:</label><input type="text" name="name"><br>
<label>Cost:</label><input type="number" name="Cost"><br>
<label>Adress:</label><input type="text" name="Adress" ><br>
<label>Upload Detailled  Description:</label><input type="file" name="photo"><br>
<input style="text-align: center;height:40px;" type="submit" name="submit">
</form> 
<!--<?php
$x=mysqli_connect("localhost","root","shankiC@18");
$y="SELECT * from images";
$t=mysqli_query($x,$y);
while($i=mysqli_fetch_array($t))
{
	echo "<div>";
	echo "<img src='images/".$i['image']."'> ";
	echo "<p>".$i['text']."</p>";
	echo "</div>";
}
?>
-->
</body>
</html>