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

<div class="admintitle">
<h4><a href="logout.php" style="float:right; margin-right:50px; color:#fff; font-size:30px;">logout</a></h4>
<h1 align="center">Welcome to Admin Dashboard</h1>
</div>

<div class="dashboard">
<table style="width:50%;" align="center">
	<tr>
    <td>1.</td><td><a href="addstudent.php" style="color: white;">Insert Student Details</a></td>
    <tr>
    <td>2.</td><td><a href="studentlist.php" style="color: white;">student list</a></td>
    </tr>
    </tr>
    <!-- <tr>
    <td>2.</td><td><a href="updatestudent.php">Update Student Details</a></td>
    </tr>
    <tr>
    <td>3.</td><td><a href="deletestudent.php">Delete Student Details</a></td>
    </tr> -->
</table>

</div>
</body>
</html>