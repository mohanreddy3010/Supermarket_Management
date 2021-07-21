<?php
include('connectt.php');

if(isset($_GET['add']))
{
  $iapid=$_GET['iapid'];
  $iapitem=$_GET['iapitem'];
  $iapquantity=$_GET['iapquantity'];
  $iapprice=$_GET['iapprice'];
  $iapstock=$_GET['iapstock'];
  $insert = mysqli_query($db,"INSERT INTO iap VALUES ('$iapid','$iapitem','$iapquantity','$iapprice','$iapstock')");
}  

mysqli_close($db);
?>

<?php

echo "<script>
alert('Item Added to the list!');
window.location.href='http://localhost/seproject/adminstockadit.html';
</script>";

?>