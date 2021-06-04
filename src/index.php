<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Docker Assignment</title>

      <!-- Latest compiled and minified Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

</head>

<body>

      <?php
            require "config.php";
            
            $exists = $connection->query("Select 1 from student_details");

            if($exists !== FALSE)
            {
                  echo("This table exists");
            }else{
                  echo("This table doesn't exist ");

                  $sql = "CREATE TABLE student_details (
                              id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                              name VARCHAR(30) NOT NULL,
                              email VARCHAR(30) NOT NULL,
                              department VARCHAR(50),
                              mobile VARCHAR(50)
                              )";

                  if (!$connection->query($sql) )
			{
    				echo "Table creation failed: (" . $connection->errno . ") " . $connection->error;
			}
            }
            
      ?>
      <!-- container -->
      <div class="container">

            <div class="page-header">
                  <h1>Docker Assignment</h1>
            </div>

            <!-- html form to create product will be here -->

      </div> <!-- end .container -->

      <div class="container">

            <a href='create.php' class='btn btn-primary'>Add New Details</a>
            <a href='read.php' class='btn btn-danger'>Read All Details</a>

      </div>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

      <!-- Latest compiled and minified Bootstrap JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>