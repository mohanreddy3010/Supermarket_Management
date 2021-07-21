<?php
include('connectt.php');

if(isset($_GET['remove']))
{
  $iapid=$_GET['iapid'];
  $iapstock=$_GET['iapstock'];
  $st= mysqli_query($db,"SELECT Stock FROM iap WHERE ID='$iapid';");
  $result = mysqli_fetch_assoc($st);
  $stf = $result['Stock'];
  $stf2 = $stf - $iapstock;
  $ust = mysqli_query($db,"UPDATE iap SET Stock = '$stf2' WHERE ID = '$iapid';");
}  

mysqli_close($db);
?>

<?php

echo "<script>
alert('Stock removed from the item!');
window.location.href='http://localhost/seproject/adminstockrest.html';
</script>";

?>