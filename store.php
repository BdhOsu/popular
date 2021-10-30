<?php

include 'connect.php';

$item=$_POST['item'];
$supplier=$_POST['supplier'];
$invoice=$_POST['invoice'];
$unit=$_POST['unit'];
$qunt=$_POST['qunt'];
$rate=$_POST['rate'];



$sql = "INSERT INTO `purchase`(`item`, `supplier`, `invoice`, `unit`, `qunt`, `rate`) VALUES ('$item','$supplier','$invoice','$unit','$qunt','$rate')";


$store=mysqli_query($conn, $sql);


if($store){
    header('location:index.php');
}
else{
    echo "error";
}

?>