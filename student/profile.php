<?php 
	session_start();
	$id=$_SESSION['id'];
	include('../dbcon.php');
	$sql="SELECT * from student where id='$id'";
	$query=mysqli_query($con,$sql);

	if (isset($_POST['update'])) {
		$rollno=$_POST['rollno'];
		$name=$_POST['name'];
		$pass=$_POST['password'];
		$city=$_POST['city'];
		$pcont=$_POST['pcont'];
		$standerd=$_POST['standerd']; 

		$update="UPDATE student SET rollno='$rollno', name = '$name', password = '$pass', city = '$city', pcont = '$pcont' , standerd = '$standerd' WHERE id = '$id'";
				$queryUpdate=mysqli_query($con,$update);
		// if (!mysqli_query($con,$queryUpdate)) {
		//     echo "error " .$queryUpdate. "<br>" . mysqli_error($con);
		//     }

		header('location:success.php');


	}



 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body style="background-color: linen;">
<h2 style="text-align: center; background-color: orange; padding-bottom: 30px; margin-right: 150px;margin-left: 150px">Update Profile</h2>
	
<?php
        while ($insert=mysqli_fetch_array($query)) {
            ?>

    <form action="" method="post">
    	
       
	<table align="center">
		
	
		<tr>
			<td>ID :</td>
			<td><input type="text" name="rollno" value="<?php echo $insert['rollno']; ?>" readonly></td>
		</tr>
		<tr>
			<td>Name :</td>
			<td><input type="text" name="name" value="<?php echo $insert['name']; ?>" readonly></td>
		</tr>
		<tr>
			<td>Password :</td>
			<td><input type="text" name="password" value="<?php echo $insert['password']; ?>" ></td>
		</tr>
		<tr>
			<td>City :</td>
			<td><input type="text" name="city" value="<?php echo $insert['city']; ?>" ></td>
		</tr>
		<tr>
			<td>Parent Contact :</td>
			<td><input type="text" name="pcont" value="<?php echo $insert['pcont']; ?>" ></td>
		</tr>
		<tr>
			<td>Standerd :</td>
			<td><input type="text" name="standerd" value="<?php echo $insert['standerd']; ?>" ></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="update" value="update"></td>
		</tr>
		

            <?php
            }
        ?>
        </table>
           </form>  



