<html>
<head><title>Billing Desk</title></head>
<?php
include('connectt.php');
?>
<style>
body{
	background-color: #a6a6a6;
}
h1{
	color: black;
	font-size: 50px;
	font-style: italic;
}
.l1{
	color: black;
	font-size: 25px;
}
.b1{
	font-size: 25px;
	padding: 5px;
	cursor: pointer;
	border: none;
	border-radius: 10%;
	background-color: blue;
}
.b1:hover{
	color: white;
	background-color: black;
}
.b2{
	font-size: 30px;
	padding: 8px;
	cursor: pointer;
	border: none;
	border-radius: 10%;
	background-color: red;
	color: black;
	position: fixed;
	right: 300px;
	top:100px;
}
.b2:hover{
	color: white;
	background-color: black;
}
.b3{
	font-size: 20px;
	padding: 8px;
	cursor: pointer;
	border: none;
	border-radius: 10%;
	background-color: white;
	color: black;
	position: fixed;
	right: 100px;
	top: 10px;
}
.b3:hover{
	color: black;
	background-color: green;
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
</style>
<body>
<center><h1>BILLING DESK</h1></center><br>

<form action="finalbilling.php" method="POST">
<label class="l1">Customer Name:&nbsp&nbsp&nbsp</label> <input style="width: 300px;height:25px;" type="text" name="cn"><br><br>	
<label class="l1">Customer Phn No:&nbsp</label> <input style="height: 25px;" type="tel" name="cp"><br><br>
<input class="b3" type="button" name="lgot" value="Logout-------->" onclick="window.location.href='http://localhost/seproject/home.html'"><br><br>
<input class="b2" type="submit" name="Makebill" value="Make Bill -->"><br><br>
</form>


<form action="" method="GET">
<label class="l1">Item Name:</label> 
<select style="width: 200px;height: 25px;" name="in" id="in">
<?php 
$sql = mysqli_query($db, "SELECT Item FROM iap");
while ($row = $sql->fetch_assoc()){
echo "<option value=".$row['Item'].">" . $row['Item'] . "</option>";
}
?>
</select>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<label class="l1">Quantity:</label>
<select style="width: 200px;height: 25px;" name="quan" id="quan">
<option value="1kg">1kg</option>
<option value="500g">500g</option>
<option value="250g">250g</option>
<option value="1pc">1pc</option>
<option value="2pc">2pc</option>
<option value="3pc">3pc</option>
</select>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input class="b1" type="submit" name="Add" value="Add+">

<?php
if(isset($_GET['Add']))
{
	$in = $_GET['in'];
	$quan = $_GET['quan'];
	$query = mysqli_query($db, "SELECT Price FROM iap WHERE Item ='".$in."' ");
    $result = mysqli_fetch_assoc($query);
    $pric = $result['Price'];
    $pricf = 0;
    if ($quan == '1kg') {
    	$pricf = $pric;
    }
    elseif ($quan == '500g') {
    	$pricf = $pric/2;
    }
    elseif ($quan == '250g') {
    	$pricf = $pric/4;
    }
    elseif ($quan == '1pc') {
    	$pricf = $pric;
    }
    elseif ($quan == '2pc') {
    	$pricf = $pric*2;
    }
    elseif ($quan == '3pc') {
    	$pricf = $pric*3;
    }

	$insert = mysqli_query($db,"INSERT INTO bdb (Itemname,Quantity,Price) VALUES ('$in','$quan','$pricf')");	
}	
?> 	
</form>
<?php
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
mysqli_close($db);
?>
</body>	
</html>