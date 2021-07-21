<?php
include('connectt.php');

if(isset($_GET['add']))
{
  $eid=$_GET['eid'];
  $ename=$_GET['ename'];
  $esalary=$_GET['esalary'];
  $insert = mysqli_query($db,"INSERT INTO employ VALUES ('$eid','$ename','$esalary')");
}  

mysqli_close($db);
?>

<?php

echo "<script>
alert('Employee Added to the list!');
window.location.href='http://localhost/seproject/adminemployane.html';
</script>";

?>