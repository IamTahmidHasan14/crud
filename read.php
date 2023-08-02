<?php
	require "db_connector.php";
?>
        
<table border="1">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Action</th>
	</tr>

<?php
    $read_query=mysqli_query($conn,"Select * from student");
    while($row=mysqli_fetch_array($read_query))
 	{ ?>
	  <tr>
		<td><?php echo $row["name"];?></td>
		<td><?php echo $row["email"];?></td>
		<td><?php echo $row["mobile"];?></td>
		<td><a href="update.php?id=<?php echo $row["id"];?>" target="_blank">Update</a> or <a href="delete.php?id=<?php echo $row["id"];?>" target="_blank">Delete</a></td>
	  </tr>

<?php }  ?>

</table>


<br><br>

<?php

	$read_query=mysqli_query($conn,"Select * from student");
	echo '<table border="1">
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Mobile</th>
				<th>Action</th>
			</tr>';
  	while($row=mysqli_fetch_array($read_query))
    {
    	echo '<tr>
				<td>'.$row["name"].'</td>
				<td>'.$row["email"].'</td>
				<td>'.$row["mobile"].'</td>
				<td>Update/Delete</td>
			</tr>';
    }		
	echo '</table>';

?>