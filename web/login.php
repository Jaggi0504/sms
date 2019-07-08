<!DOCTYPE html>
<html>
<head> <title> Admin Login Page </title>
<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

            <style>
                       body 
            {
               
                background:url('c.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-position: center;
            }
            .country { 
    background-color: blue;
    color: white; 
    padding: 8px; 
}

div {
  background-color: lightblue;
  width: 300px;
  border: 15px blue;
  padding: 50px;
  margin: 20px;
}
            </style>

</head>
<body>
</div>
            <form method="POST" action="login.php">
            <h1 style="text-align:center" class="country"><b> Admin Login </b> </h1> <br> <br> <br> <br>
            
            <div>
            <label><b> Username: </b> </label>
            <input type="text" placeholder="Enter the username" name="uname" required/> <br> <br>
            
            <label> <b> Password:  </b> </label>
            <input type="password" placeholder="Enter the password" name="pass" required/> <br> <br>
            
            <input type="submit" class="btn btn-primary" value="Login" name="submit"/>
            </div>
            </form>
            </body>
</html>
<?php
include ("connection.php");
if(isset($_POST['submit']))
{
    $username=$_POST['uname'];
    $password=$_POST['pass'];
    $qry="SELECT * FROM `admin` WHERE username='$username' AND password='$password'";
    $result=mysqli_query($con,$qry);
    $row=mysqli_num_rows($result);
    if($row<1)
    {
      ?>
      <script>
      alert('username or password do not match');
      window.open('login.php','_self');
      </script>
      <?php
    }
    else{
      header('location:admindash.php');
    }
  }
?>