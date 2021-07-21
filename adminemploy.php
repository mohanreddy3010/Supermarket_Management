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
  font-size: 25px;
}
th{
  padding: 10px;
  width: 400px;
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
  background:#996633 ;
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
  <a href="http://localhost/seproject/adminstock.php">Stock Update</a>
  <a class="active" href="http://localhost/seproject/adminemploy.php">Employee Update</a>
</div>
<div class="bo">
<br>
<button class="bt bt1" onclick="location.href='http://localhost/seproject/adminemployane.html'">Add new Employee</button>
<button class="bt bt2" onclick="location.href='http://localhost/seproject/adminemployree.html'">Remove existing Employee</button>
<button class="bt bt3" onclick="location.href='http://localhost/seproject/adminemployise.html'">Increase salary of an Employee</button>
<br><br><br><br>
<?php
include('connectt.php');
$r = mysqli_query($db,"SELECT * FROM employ");

echo 
"<center><table border='1' >
<tr class='tab1'>
<th>Employee ID</th>
<th>Employee Name</th>
<th>Employee Salary</th>
</tr>";

while($row = mysqli_fetch_array($r))
{
echo "<tr>";
echo "<td>" . $row['EID'] . "</td>";
echo "<td>" . $row['EName'] . "</td>";
echo "<td>" . $row['ESalary'] . "</td>";
echo "</tr>";
}
echo "</table></center>";
mysqli_close($db);
?>

</div>

</body>
</html>