<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Read Details</title>

      <!-- Latest compiled and minified Bootstrap CSS -->

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

      <style>
      table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
      }

      th {
            border: 1px solid #cccccc;
            text-align: left;
            padding: 8px;
            background-color: #dddddd;
      }

      td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
      }
      </style>
</head>

<body>

      <!-- container -->

      <div class="container">



            <div class="page-header">

                  <h1>Details</h1>

            </div>



            <!-- html form to create product will be here -->


            <?php
		    require_once "config.php";

		    if($connection) {

		          mysqli_select_db($connection, $mysql_db_name);
		          $sql_query = "SELECT * FROM student_details";
		          $result = mysqli_query($connection, $sql_query);
		          
		          echo "<table style='width:100%'>";
		          echo "<tr>";
		                echo "<th> ID </th>";
		                echo "<th> Name </th>";
		                echo "<th> Email </th>";
		                echo "<th> Department </th>";
		                echo "<th> Mobile Number </th>";
		          echo "</tr>";
		                while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
		                      echo "<tr>";
		                            echo "<td>" . $row['id'] . "</td>";
		                            echo "<td>" . $row['name'] . "</td>";
		                            echo "<td>" . $row['email'] . "</td>";
		                            echo "<td>" . $row['department'] . "</td>";
		                            echo "<td>" . $row['mobile'] . "</td>";
		                            //echo "<br/>";
		                      echo "</tr>";
		                }
		          
		          // close the db connection
		          mysqli_close($connection);
		    }
	      ?>

      </div> <!-- end .container -->

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

      <!-- Latest compiled and minified Bootstrap JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>