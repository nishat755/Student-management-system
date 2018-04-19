<?php
session_start();
		if(isset($_SESSION['uid']))
		{
			echo "";
		}
		else
		{
			header('location: ../login.php');
		}
?>
<?php
	include('header.php');
	
	
?>
<form method="post" action=""  enctype="multipart/form-data">
   <table align="center" border="1" style="width:70%; margin-top:40px;">
	<tr>
    <th >Roll NO</th>
    	<td> <input type="text" name="rolno" placeholder="Enter Rollno" required></td>
    </tr>
    <tr>
    <th>Full Name</th>
    <td><input type="text" name="sname" placeholder="Enter Full name" required></td>
    </tr>
    <tr>
    <th>Initial Password</th>
    <td><input type="text" name="pass" placeholder="Initial password" required></td>
    </tr>
    <tr>
    <th>city</th>
    <td> <input type="Text" name="scity" placeholder="Enter city" required></td>
    </tr>
    <tr>
    <th>Parents Contact no</th>
    <td> <input type="Text" name="pcon" placeholder="Enter the contact no of parents" required></td>
    </tr>
    <tr>
    <th>Standerd</th>
    <td><input type="number" name="sstd" placeholder="Enter Standerd" required></td>
    </tr>
    <!-- <tr>
    <th>Image</th>
    <td><input type="file" name="simg"  ></td>
    </tr> -->
    <tr>
    	<td colspan="2" align="center"> <input type="submit" name="submit" value="submit"></td>
    </tr>
</table>

</form>

</body>
</html>
<?php

//print_r($_POST);


	if(isset($_POST['submit']))
	{
			include('../dbcon.php');

			//print_r($con); 

			$rolno= $_POST['rolno'];
			$sname = $_POST['sname'];
			$scity = $_POST['scity'];
			$pcon = $_POST['pcon'];
			$sstd = $_POST['sstd'];
			$pass = $_POST['pass'];

			$qry="INSERT INTO  student (rollno, name, password, city, pcont, standerd)
		            VALUES ('$rolno', '$sname' ,'$pass','$scity', '$pcon', '$sstd')";
			
			$run= mysqli_query($con,$qry);
			
			if (!mysqli_query($con,$qry)) {
		            	echo "error " .$qry. "<br>" . mysqli_error($con);
		            }

			if ($run == true){
			
				header('location: studentlist.php');
	
	        }

    }
	

?>