<?php
include('connectt.php');

if(isset($_GET['remove']))
{
  $eid=$_GET['eid'];
  $remove = mysqli_query($db,"DELETE FROM employ WHERE EID='$eid'");
}  

mysqli_close($db);
?>

<?php

echo "<script>
alert('Employee removed from the list!');
window.location.href='http://localhost/seproject/adminemployree.html';
</script>";

?>