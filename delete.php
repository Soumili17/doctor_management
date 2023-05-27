<?php
include "db.php";
if($_GET['delete']){
    $delete_id=$_GET['delete'];
    $sql="DELETE FROM `doctor` WHERE `doctor`.`id`='$delete_id'";
    $delete_data=mysqli_query($conn,$sql);
    header("location:doctor.php");
}
?>

