<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "offices";

  // Data Source Network
$conn = mysqli_connect($servername ,$username, $password, $dbname);

 if($conn){
  //  echo "connection ok";
 }
 else{
 //   echo "connection failed".mysqli_connect_error();
 }
 
?>