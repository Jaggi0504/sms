<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
            <style>
                body{
                    background: url('school.png');
                }
                 a:hover{
	  background-color:black !important;
  }

              .add{
	  background-color:brown;
	  color:white !important;
	  font-size:30px;
  }

  .display{
	  background-color:lightgreen;
	  color:white !important;
	  font-size:30px;	  
  }
  .update{
	  background-color:blue;
	  color:white !important;
	  font-size:30px;	  
  }
  .delete{
	  	  background-color:orange;
	  color:white !important;
	  font-size:30px;
  }

            </style>
    </head>
    <body>
        
    <h3 align="right" style="margin-right:20px"><a href="index.html">Log out</a></h3>
    
    
 
        <div class="container">
            <h1 style="color:whitesmoke;text-align: center"><b>Which Operation you want to perform</b></h1>
            <hr>
            <div class="list-group">
                <a href="addstudent.php" class="list-group-item add">Add Details of student </a><br><br>
                <a href="editstudent.php" class="list-group-item update">Edit Details of student </a><br><br>
                <a href="delete.php" class="list-group-item delete">Delete Entry of the student </a><br><br>

            </div>
        </div>
    </body>
</html>