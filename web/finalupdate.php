<?php
include "connection.php";
if (isset($_POST['update1']))
{
    $id=$_POST['update1'];
    $rollno=$_POST['rollno'];
    $name=$_POST['name'];
    $city=$_POST['city'];
    $pcont=$_POST['pcont'];
    $standard=$_POST['standard'];
     
    
     $qry="UPDATE `student` SET `rollno`= $rollno, `name`= '$name', `city`= '$city', `pcont`= '$pcont', `standard`= $standard WHERE id=$id";
    
     $run=mysqli_query($con,$qry);
     if($run==true)
     {
     ?>
       <script>
             alert("Data is Updated ");
             window.locaion.href="index.php";
             </script>
            <?php
            
    

     }
}
?>
