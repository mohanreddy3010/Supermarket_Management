<html>
<head>
	<title>Admin Page</title>
</head>
<style>
body{
	background-color: #cccccc;
	margin: 0;
}
h1{
	font-size: 50px;
	font-style: italic;
}
.topnav {
  background-color: #595959;
  overflow: hidden;
}
.topnav {
  background-color: #595959;
  overflow: hidden;
}
.topnav a {
  float: left;
  color: black;
  text-align: center;
  padding: 14px 80px;
  text-decoration: none;
  font-size: 25px;
  font-weight: bold;
}
.topnav a:hover {
  background-color: #4d0099;
  color: black;
} 
.topnav a.active {
  background-color: black;
  color: white;
}
.bo{
    background-color: #008080;
    position: fixed;
    bottom: 0px;
    top:147px;
    height: 82%;
    width: 100%;
}
.tab1{
  background-color: black;
  color: white;
  font-size: 20px;
}
th{
  padding: 10px;
  width: 270px;
}
.bt{
  font-size: 25px;
  padding: 12px;
  border: none;
  border-radius: 12px;
  cursor: pointer;
  background: linear-gradient(to bottom right, #999966 -1%, #666633 100%);
}
.bt:hover{
  background:#996633;
  color: black;
}
.bt1{
position: fixed;
left: 100px;
}
.bt2{
position: fixed;
left: 600px;
}
.bt3{
position: fixed;
right: 100px;
}
.lgb{
  font-size: 20px;
  padding: 8px;
  cursor: pointer;
  border: none;
  border-radius: 10%;
  background-color: black;
  color: white;
  position: fixed;
  right: 100px;
  top: 10px;
}
.lgb:hover{
  color: black;
  background-color: red;
 } 
</style>
<body>
<center><h1>--Admin--</h1></center>
<button class="lgb" onclick="window.location.href='http://localhost/seproject/home.html'">Logout--------></button>
<div class="topnav">
  <a href="http://localhost/seproject/admin.php">Home</a>
  <a class="active" href="http://localhost/seproject/adminstock.php">Stock Update</a>
  <a href="http://localhost/seproject/adminemploy.php">Employee Update</a>
</div>
<div class="bo">
<br>
<button class="bt bt1" onclick="location.href='http://localhost/seproject/adminstockadit.html'">Add new item to the list</button>
<button class="bt bt2" onclick="location.href='http://localhost/seproject/adminstockadst.html'">Add stock to the existing items</button>
<button class="bt bt3" onclick="location.href='http://localhost/seproject/adminstockrest.html'">Remove stock from the existing items</button>
<br><br><br><br>
<?php
include('connectt.php');
$r = mysqli_query($db,"SELECT * FROM iap");

echo 
"<center><table border='1' >
<tr class='tab1'>
<th>ID</th>
<th>Itemname</th>
<th>Quantity</th>
<th>Price</th>
<th>Stock</th>
</tr>";

while($row = mysqli_fetch_array($r))
{
echo "<tr>";
echo "<td>" . $row['ID'] . "</td>";
echo "<td>" . $row['Item'] . "</td>";
echo "<td>" . $row['Quantity'] . "</td>";
echo "<td>" . $row['Price'] . "</td>";
echo "<td>" . $row['Stock'] . "</td>";
echo "</tr>";
}
echo "</table></center>";
mysqli_close($db);
?>

</div>

</body>
</html>