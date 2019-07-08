<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
            <style>
                
                 a:hover{
	  background-color:sienna !important;
  }
  body
      {
background:url('pen.jpg');

      }
  
              .add{
	  background-color:red;
	  
	
  }

  .display{
	  background-color:lightgreen;
	  color:white !important;
	  font-size:30px;	  
  }
  .update{
	  background-color:lightblue;
	  
	  font-size:20px;	  
  }
  .delete{
	  	  background-color:orange;
	  color:white !important;
	  font-size:30px;
  }
  

            </style>
           
    </head>
    <body>
        <div class="container update">
            <div class="row">
            
            <h1 style="color:white;text-align: center"><font color="black"><b>Simple CRUD Application</b></font></h1>
            <hr>
            <div class="list-group ">
            <table class="table table-bordered">
<tr style="color:blue;">
    <th>ID</th>
    <th>Roll Number</th>
    <th>Name</th>
    <th>City</th>
    <th>Parent's Contact Number</th>
    <th>Standard</th>
    <th>Image</th>
</tr>
<?php
include "connection.php";
$sql="SELECT * FROM `crud`";
$data=mysqli_query($con,$sql);
while($res = mysqli_fetch_assoc($data))
{

    ?>
    <tr style="color:red;">
        <td><?php echo $res['id'];?></td>
        <td><?php echo $res['rollno'];?></td>
        <td><?php echo $res['name'];?></td>
        <td><?php echo $res['city'];?></td>
        <td><?php echo $res['pcont'];?></td>
        <td><?php echo $res['standard'];?></td>
        <td><?php echo $res['image'];?></td>

</tr>
    <?php
}
?>
        </table>


            </div>
        </div>
    </body>
</html>