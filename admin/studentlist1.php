<?php

include('header.php');
include('../dbcon.php');
$qry="SELECT * FROM `student`";
$store=mysqli_query($con,$qry);
?>


<!DOCTYPE html>

<html>

<head>

<style>

table {

    font-family: arial, sans-serif;

    border-collapse: collapse;

    width: 100%;

}

​

td, th {

    border: 1px solid #dddddd;

    text-align: left;

    padding: 8px;

}

​

tr:nth-child(even) {

    background-color: #dddddd;

}

</style>

</head>

<body>

​



​

<table>
	<thead>

  <tr>

    <th>id</th>
    <th>rollno</th>
    <th>name</th>
    <th>city</th>
    <th>parents contact number</th>
    <th>standerd</th>

  </tr>
  </thead>
 <tbody>
 <?php $i=1;
    while($realdata=mysqli_fetch_array($store))
   {
 ?>
      <tr>
      	<?php $iid=$realdata['id'] ?>
      	<td><?php echo $i;?></td>
        <td><?php echo $realdata['rollno'];?></a></td>
        <td><?php echo $realdata['name'];?></a></td>
         <td><?php echo $realdata['city'];?></a></td>
          <td><?php echo $realdata['pcont'];?></a></td>
           <td><?php echo $realdata['standerd'];?></a></td>
      
       
        </tr>
 <?php
   $i++;
   }
 ?>
    </tbody>

  

</table>

​

</body>

</html>

​

