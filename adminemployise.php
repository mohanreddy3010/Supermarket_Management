<?php
include('connectt.php');

if(isset($_GET['increase']))
{
  $eid=$_GET['eid'];
  $isalary=$_GET['isalary'];
  $sal= mysqli_query($db,"SELECT ESalary FROM employ WHERE EID='$eid'");
  $result = mysqli_fetch_assoc($sal);
  $salf = $result['ESalary'];
  $salf2 = $salf + $isalary ;
  $ust = mysqli_query($db,"UPDATE employ SET ESalary = '$salf2' WHERE EID = '$eid'");
}  

mysqli_close($db);
?>

<?php

echo "<script>
alert('Employee salary increased!');
window.location.href='http://localhost/seproject/adminemployise.html';
</script>";

?>