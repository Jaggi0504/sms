<!DOCTYPE html>
<html>
<head> <title> Student Management System </title>

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
<h3 align="right" text-color="black"> <a href="login.php">Admin Login </a></h3>
<h1 align="center" color="black"> Welcome to Student Management System </h1><br><br>
<form action="index1.php" method="post">
<table style="width=50%;" align="center">
<tr align="center"><br>
    <td style="font-size:25px"><b><i> Student Information </b></i><br><br></td>
</tr>
    <tr>
        <td style="font-size:20px">Choose Standard:</td>
        <td>
            <select name="std">
                <option value="1"> 1st </option>
                <option value="2"> 2nd </option>
                <option value="3"> 3rd </option>
                <option value="4"> 4th </option>
                <option value="5"> 5th </option>
                <option value="6"> 6th </option>
                <option value="7"> 7th </option>
                <option value="8"> 8th </option>
                <option value="9">9th </option>
                <option value="10"> 10th </option>
                <option value="11"> 11th</option>
                <option value="12"> 12th </option>
            </select>
        </td>
    </tr>
    <tr>
        <td style="font-size:20px"> Enter the Roll number: </td>
        <td>
            <input type="text" name="rollno" placeholder="Enter your roll number"/>
        </td>
    </tr>
    <tr>
        <td colspan="4"><input type="submit" value="Show details" name="submit1"/>
        
        </td>
    </tr>
</table>
</form>

</body>
</html>
<?php
if(isset($_POST['submit1']))
{

    $standard=$_POST['std'];
    $rollno=$_POST['rollno'];

    // echo $standard;
    // echo $rollno;
    // include "connection.php";
    include "function.php";
     showdetails($standard,$rollno);
}
?>