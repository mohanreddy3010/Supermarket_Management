<?php
include('connectt.php');

$a1=mysqli_query($db,"SELECT Itemname,Quantity FROM bdb");
while($row = mysqli_fetch_array($a1)){
	$inn=$row['Itemname'];
	$iq=$row['Quantity'];
	$u1=mysqli_query($db,"SELECT Stock FROM iap WHERE Item='$inn'");
    $u2=mysqli_fetch_array($u1);
    $u3=$u2['Stock'];
    if($iq=='1kg'){
    	$u3=$u3-1;
    }
    elseif($iq=='500g'){
    	$u3=$u3-0.5;
    }
    elseif($iq=='250g'){
    	$u3=$u3-0.25;
    }
    elseif($iq=='1pc'){
    	$u3=$u3-1;
    }
    elseif($iq=='2pc'){
    	$u3=$u3-2;
    }
    elseif($iq=='3pc'){
    	$u3=$u3-3;
    }
    $update=mysqli_query($db,"UPDATE iap SET Stock='$u3' WHERE Item = '$inn' ");
}
$delbdb=mysqli_query($db,"DELETE FROM bdb");


mysqli_close($db);
?>
<?php
echo "<script>
alert('Stock Updated!');
window.location.href='http://localhost/seproject/billing.php';
</script>";
?>
