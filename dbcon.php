<?php
  // Connect to the database (Replace 'username', 'password', and 'database_name' with your database credentials)
  $conn = new mysqli('localhost', 'root', '', 'local_network');
  
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
      
?>