<?php
include('connectt.php');

if(isset($_GET['add']))
{
  $iapid=$_GET['iapid'];
  $iapstock=$_GET['iapstock'];
  $st= mysqli_query($db,"SELECT Stock FROM iap WHERE ID='$iapid';");
  $result = mysqli_fetch_assoc($st);
  $stf = $result['Stock'];
  $stf2 = $iapstock + $stf;
  $ust = mysqli_query($db,"UPDATE iap SET Stock = '$stf2' WHERE ID = '$iapid';");
}  

mysqli_close($db);
?>

<?php

echo "<script>
alert('Stock added to the item!');
window.location.href='http://localhost/seproject/adminstockadst.html';
</script>";

?>