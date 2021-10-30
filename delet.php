<!-- Main action for delet data from database -->
<?php
include 'connect.php';

$id = $_GET['id'];

$del = mysqli_query($conn, "DELETE FROM `purchase` WHERE `purchase`.`id` = $id");
//this query is fetch from database directly

// $del = mysqli_query($conn, "DELET FROM names where id = '$id'");
// $sql = "DELET fROM names WHERE id='$id'";
// $result = mysqli_query($conn, $sql);
if($del){
    mysqli_close($conn);
    header("location:index.php");
    exit;
}
else
{
    echo"error deleting data";
}
?>