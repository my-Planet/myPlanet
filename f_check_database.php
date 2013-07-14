<?php

$con=mysqli_connect("127.0.0.1","root","");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Create database
$sql="CREATE DATABASE IF NOT EXISTS nu_video";
if (mysqli_query($con,$sql))
  {
  echo "Database nu_video created successfully";
  }
else
  {
  echo "Error creating database: " . mysqli_error($con);
  }

?>
