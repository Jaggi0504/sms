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
     
    
     $qry="DELETE FROM `student` WHERE id=$id";
     $run=mysqli_query($con,$qry);
     if($run==true)
     {
     ?>
       <script>
             alert("Data is Deleted ");
             window.locaion.href="index.php";
             </script>
            <?php
            
    

     }
}
?>
