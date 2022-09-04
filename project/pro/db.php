<?php  
  $host = "localhost:3306";
  $user = "root";
  $pass = "";
  $db = "chemx";

  $con = mysqli_connect($host,$user,$pass,$db);

  if(!$con){
      die("Database Connection Error");
  }
?>