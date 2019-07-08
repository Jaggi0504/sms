<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
            <style>
            body {

                background:url('ss.jpg');
            }
                    
            
                </style>
</head>
<body>
    <div class="container-fluid">
<div class="list group">
<h3 align="right" style="margin-right:20px"><a href="index.html">Log out</a></h3>

    <h1 style="color:white;text-align: center"><font color="black"><b>Edit Student Details</b></font></h1><br><br>

    <table class="table table-bordered">
        <tr style="color:blue; ">
            <th> <b> Id </b> </th>
            <th> <b> Roll Number </b> </th>
            <th> <b> Name </b> </th>
            <th> <b> City </b> </th>
            <th> <b> Parent's Contact Number </b> </th>
            <th> <b> Standard </b> </th>
            <th> <b> Image </b> </th>
            <th> <b> Update </b> </th>
        </tr>
<?php
include"connection.php";
$qry="SELECT *FROM `student`";

$result=mysqli_query($con,$qry);
while($row = mysqli_fetch_assoc($result))
{

    ?>
    <tr>
        <td><?php echo $row['id']?></td> 
        <td><?php echo $row['rollno']?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['city']?></td>
        <td><?php echo $row['pcont']?></td>
        <td><?php echo $row['standard']?></td>
        <td><?php echo $row['image']?></td>
        <td><a href="updatestudent.php?id=<?php echo $row['id']?>">Edit</a></td>
</tr>
<?php
    
    }
?>
</table>
    </div>
</div>
</body>
</html>
