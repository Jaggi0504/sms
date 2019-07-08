<?php
$id=$_GET['id'];
include "connection.php";
$qry="SELECT * FROM `student` where id = $id";
$result=mysqli_query($con,$qry);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
    
        </head>

        <body>
        <h3 align="right" style="margin-right:20px"><a href="index.html">Log out</a></h3>
            <div class="conatiner">
                
<div class="panel panel-primary">
    <div class="panel-heading">Update Student Details</div>
    <form method="post" action="finalupdate.php" enctype="multipart/form-data">
    <div class="form-group">
        <div class="panel panel-default">

        <input type="hidden" value="<?php echo $row['id']?>" name="update1"/>   

        <label for="rollno" <span class="input-group-addon"></span><b>Roll Number </b></label>
      <input type="text" class="form-control" id="id" placeholder="Enter the Roll Number" name="rollno" value="<?php echo $row['rollno']?>"/><br>

    <label for="name" <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><b> Name:</b></label>
    <input type="text" class="form-control" id="name" placeholder="Enter the name" name="name" value="<?php echo $row['name']?>"/>
      
      <label for="city"<span class="input-group-addon"></span> <b>City:</b></label>
      <input type="text" class="form-control" id="city" placeholder="Enter the City" name="city" value="<?php echo $row['city']?>"/>

      <label for="number" <span class=" input-group-addon"><i class="glyphicon glyphicon-phone"></i></span><b>Parent's Contact Number:</b></label>
      <input type="text" class="form-control" id="number" placeholder="Enter the Parent's Contact Number" name="pcont" value="<?php echo $row['pcont']?>"/>


      <label for="standard" <span class="input-group-addon"></span><b> Standard:</b></label>
      <input type="text" class="form-control" id="standard" placeholder="Enter the Standard" name="standard" value="<?php echo $row['standard']?>"/>
         
      <label for="image" <span class="input-group-addon"></span><b>Image:</b></label>
      <input type="file" class="form-control" id="image" placeholder="Image" name="image"/> 


            <button type="submit" class="btn btn-primary" name="submit">UPDATE</button>

</div>
</div>

    </form>
    </div>

</body>
</html>
<?php
if(isset($_POST['submit']))
{
     include "connection.php";
     $rollno = $_POST['rollno'];
     $name = $_POST['name'];
     $city = $_POST['city'];
     $pcont = $_POST['pcont'];
     $standard = $_POST['standard'];
     print_r($_FILES['image']);
     $name=$_FILES['image']['name'];
     $tmp_name=$_FILES['image']['tmp_name'];
     $destination="../../../image/".$name;
     if(move_uploaded_file($tmp_name,$destination))
     echo "File uploaded";
    
     $qry = "INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `standard`) VALUES ($rollno,'$name','$city','$pcont',$standard )";
     
     $result = mysqli_query($con,$qry);
     if($result == true)
     {
      echo "Data Saved";
             
     
 
      }
    }
?>