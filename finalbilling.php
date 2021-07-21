<html>
<head><title>FinalBilling</title></head>

<style>
body{
	background-color: #a6a6a6;
}	
.tab1{
	background-color: black;
	color: white;
	font-size: 20px;
}
th{
	padding: 10px;
	width: 300px;
}
.p1{
	font-size: 40px;
	color: black;
}
.p2{
    color: black;
    font-size: 25px;
    font-style: italic;
    font-weight: bold;
}
.b1{
	background-color: white;
	color: black;
	font-size: 30px;
	border: none;
	border-radius: 8%;
	cursor: pointer;
	padding: 5px;
	position: fixed;
	left: 200px;
}
.b2{
    background-color: white;
	color: black;
	font-size: 30px;
	border: none;
	border-radius: 8%;
	cursor: pointer;
	padding:5px;
	position: fixed;
	left: 50px;
}
.b1:hover,.b2:hover{
	background-color: yellow;
	color: black;
}
</style>
<body>

<?php
$cn = $_POST['cn'];
$cp = $_POST['cp'];
echo "<p class='p2'>Customer Name: &nbsp" . $cn . "</p>";
echo "<p class='p2'>Customer Phn.No: &nbsp" . $cp . "</p>";
?>

<?php
include('connectt.php');
$r = mysqli_query($db,"SELECT * FROM bdb");

echo 
"<table border='1' >
<tr class='tab1'>
<th>Itemname</th>
<th>Quantity</th>
<th>Price</th>
</tr>";

while($row = mysqli_fetch_array($r))
{
echo "<tr>";
echo "<td>" . $row['Itemname'] . "</td>";
echo "<td>" . $row['Quantity'] . "</td>";
echo "<td>" . $row['Price'] . "</td>";
echo "</tr>";
}
echo "</table>";

$query = mysqli_query($db,"SELECT SUM(Price) FROM bdb");
$result = mysqli_fetch_assoc($query);
$tp = $result['SUM(Price)'];
echo "<p class='p1'>Total = Rs." . $tp . "</p>";
mysqli_close($db);
?>
<form action="update.php" method="GET">
<input class="b1" type="submit" name="update" value="Update">
<input class="b2" type="button" name="print" value="Print" onclick="window.print()">
</form>


</body>	
</html>