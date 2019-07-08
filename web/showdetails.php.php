<?php
function showdetails($std,$rollno)
{
	include('dbcon.php');// include the connection file
	$sql = "SELECT * FROM `student` WHERE `standard` = '$std' AND `rollno` = '$rollno'";
	$run = mysqli_query($con,$sql);// run the sql query
	if(mysqli_num_rows($run)>0)// compare the num of the row of the given sql query
	{
		$data = mysqli_fetch_assoc($run);// convert the given the result into an associtative array
		// show the data in the form
		?>
		<table border="1" width="80%" align="center" style="margin-top:20px">
		<tr>
		<th colspan="3"><h2>Student Details</h2></th>
		</tr>
		<tr>
		<td rowspan="5"><img src="dataimage/<?php echo $data['image'];?>" style="max-height:150px;min-width:120px"/></td>
		<th>Roll No</th>
		<td><?php echo $data['rollno'];?></td>
		</tr>
		<tr>
		<th>Name</th>
		<td><?php echo $data['name'];?></td>
		</tr>
		<tr>
		<th>Standard</th>
		<td><?php echo $data['standard'];?></td> 
		</tr>
		<tr>
		<th>Parents Contact</th>
		<td><?php echo $data['pcont'];?></td>
		</tr>
		<tr>
		<th>City</th>
		<td><?php echo $data['city'];?></td>
		</tr>
		</table>
		<?php
	}
	else
	{
		echo "<script>window.alert('No record Found');</script>";// alert box showing message
	}

}

?>