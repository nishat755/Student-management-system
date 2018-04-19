<?php

include('../dbcon.php');
$singledata=$_GET['delid'];
$qry="delete from student where id=$singledata";
$store=mysqli_query($con,$qry);
if ($store==true) {
	header('location:studentlist.php');
	echo "Record deleted successfully";
}
?>