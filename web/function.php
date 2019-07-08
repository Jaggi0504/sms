<?php

function showdetails($standard,$rollno)
{
  //  echo "Hello";
include "connection.php";
$sql="SELECT * FROM `student` WHERE `standard` = $standard AND `rollno`= $rollno ";
// echo $sql;
$run=mysqli_query($con,$sql);
//echo mysqli_num_rows($run);
if(mysqli_num_rows($run)>0)
{
    
    $data=mysqli_fetch_assoc($run);
  
?>
<table border="1" width="80%" align="center">
<tr>
    
    <td><?php echo $data['rollno'];?></td>
    <td><?php echo $data['name'];?></td>
    <td><?php echo $data['city'];?></td>
    <td><?php echo $data['pcont'];?></td>
    <td><?php echo $data['standard'];?></td>
    <td><img src="../../../image/<?php echo $data['image'];?>"</td>

</tr>
</table>
<?php
}
else
{
echo "NO DATA FOUND";
}
}