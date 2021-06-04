<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Add Details</title>

      <!-- Latest compiled and minified Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

</head>

<body>

      <!-- container -->
      <div class="container">

            <div class="page-header">
                  <h1>Add Details</h1>
            </div>

            <!-- html form to create product will be here -->



            <?php
		 
			

			if($_POST){
			
			// include database connection
			require_once 'config.php';
			
			try{
		
				//mysqli_select_db($connection, $mysql_db_name);            
				// insert query
				
				$query = "INSERT INTO student_details (name, email, department, mobile) VALUES(?, ?, ?, ?)";
			
				// prepare query for execution
				$stmt = $connection->prepare($query);

				// posted values
				$name=htmlspecialchars(strip_tags($_POST['name']));
				$email=htmlspecialchars(strip_tags($_POST['email']));
				$department=htmlspecialchars(strip_tags($_POST['department']));
				$mobile=htmlspecialchars(strip_tags($_POST['mobile']));

				$stmt->bind_param("ssss", $name, $email, $department, $mobile);

				// Execute the query

				if($stmt->execute()){
					echo "<div class='alert alert-success'>Record was saved.</div>";
				}else{
					echo "<div class='alert alert-danger'>Unable to save record.</div>";
				}
				
			}
			
			// show error
			catch(PDOException $exception){
				echo "Hey Ajay Errot -> " + $exception->getMessage();
				//die('ERROR: ' . $exception->getMessage());
			}
			}
			?>

            <!-- html form here where the product information will be entered -->
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                  <table class='table table-hover table-responsive table-bordered'>
                        <tr>
                              <td>Name</td>
                              <td><input type='text' name='name' class='form-control' /></td>
                        </tr>
                        <tr>
                              <td>Email ID</td>
                              <td><input type='text' name='email' class='form-control'></textarea></td>
                        </tr>
                        <tr>
                              <td>Department Name</td>
                              <td><input type='text' name='department' class='form-control' /></td>
                        </tr>
                        <tr>
                              <td>Mobile Number</td>
                              <td><input type='number' name='mobile' class='form-control' /></td>
                        </tr>
                        <tr>
                              <td></td>
                              <td>
                                    <input type='submit' value='Save' class='btn btn-primary' />
                                    <a href='index.php' class='btn btn-danger'>Back to read products</a>
                              </td>
                        </tr>
                  </table>
            </form>

      </div> <!-- end .container -->

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

      <!-- Latest compiled and minified Bootstrap JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>