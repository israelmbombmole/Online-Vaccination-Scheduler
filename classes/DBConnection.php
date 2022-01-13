<!DOCTYPE html>
<html>
<head>
    <title>MySQL connection with php</title>
</head>
<body>
    <?php
      $server_name='localhost:3325';
      $user_name='root';
      $password="";
      $database="jpos";

      $connection = new mysqli($server_name, $user_name, $password,$database);
      if ($connection->connect_error) {
        die("Unableto connect".$connection->connect_error);
      }
      echo "connection successfully"
    ?>
</body>
</html>
