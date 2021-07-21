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
.p1{
	font-size: 80px;
	color: black;
	font-family: cursive;
}
.p2{
	font-size: 25px;
	color: black;
	font-family: monospace;
}
.bo{
    background-color: #008080;
    position: fixed;
    bottom: 0px;
    top:147px;
    height: 82%;
    width: 100%;
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
  <a class="active" href="http://localhost/seproject/admin.php">Home</a>
  <a href="http://localhost/seproject/adminstock.php">Stock Update</a>
  <a href="http://localhost/seproject/adminemploy.php">Employee Update</a>
</div>
<div class="bo">
<br><br><br><br><br>	
<center><p class="p1">Welcome to the Admin!</p></center>
<center><p class="p2">You can update the stock and employee list from here....</p></center>
</div>
</body>
</html>