<?php
$mysql_server_name = "mysql";
$mysql_user_name = $_ENV["USER"];
$mysql_password = $_ENV["PASSWORD"];
$mysql_db_name = "my_db";

$connection = new mysqli($mysql_server_name, $mysql_user_name, $mysql_password, $mysql_db_name);


if($connection->connect_error) {
      echo "Connection_Error ..........".$connection->connect_error;
} else {
      echo "<h1> Database Connection Success </h1>";
}
?>