<?php $u = $_GET["uname"]; ?>
<?php $p = $_GET["pass"]; ?>
<?php
if ($u=="admin" and $p=="admin0123") {
  header("Location:http://localhost/seproject/admin.php");
}
elseif ($u=="billing" and $p=="billing0123") {
  header("Location:http://localhost/seproject/billing.php");
}
else{
  echo "details not matched";	
}
?>
