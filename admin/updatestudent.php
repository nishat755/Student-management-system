<?php
	
include('../dbcon.php');
$updateid=$_GET['updateid'];
$qry="select * from student where id=$updateid";
$store=mysqli_query($con,$qry);
$storeddata=mysqli_fetch_array($store);
$dbrol=$storeddata['rollno'];
$dbname=$storeddata['name'];
$dbcity=$storeddata['city'];
$dbpcon=$storeddata['pcont'];
$dbstd=$storeddata['standerd'];
	
	
?>

<?php
	include('header.php');
	
	
?>

<?php

	if(isset($_POST['ssubmit']))
	{
			$rolno= $_POST['rolno'];
			$sname = $_POST['sname'];
			$scity = $_POST['scity'];
			$pcon = $_POST['pcon'];
			$sstd = $_POST['sstd'];


			$updatequery="UPDATE `student` SET `rollno`='$rolno',`name`='$sname',`city`='$scity',`pcont`='$pcon',`standerd`='$sstd' WHERE id=$updateid ";
			 $updateitem=mysqli_query($con,$updatequery);
			 if ($updateitem==true) {
      header('location:studentlist.php');
    }
		else
    {
      die("Not Possible Coz".mysqli_error($con));
    }	
			

			
	}

	

?>





<form method="post"  enctype="multipart/form-data">
   <table align="center" border="1" style="width:70%; margin-top:40px;">
	<tr>
    <th >Roll NO</th>
    	<td> <input type="text" name="rolno" value="<?php echo $dbrol ?>"></td>
    </tr>
    <tr>
    <th>Full Name</th>
    <td><input type="text" name="sname" value="<?php echo $dbname ?>"></td>
    </tr>
    <tr>
    <th>city</th>
    <td> <input type="Text" name="scity" value="<?php echo $dbcity ?>"></td>
    </tr>
    <tr>
    <th>Parents Contact no</th>
    <td> <input type="Text" name="pcon" value="<?php echo $dbpcon ?>"></td>
    </tr>
    <tr>
    <th>Standerd</th>
    <td><input type="number" name="sstd" value="<?php echo $dbstd ?>"></td>
    </tr>
    
    <tr>
    	<td colspan="2" align="center"> <input type="submit" name="ssubmit" value="submit"></td>
    </tr>
</table>

</form>

</body>
</html>


