<?php
$servername = "localhost";
$username   = "root";
$password   = "password123";
$database  =  "roots";

$conn = mysqli_connect($servername,$username, $password, $database);
// if(!$conn){
//    die("sorry we failed to connect" .mysqli_connect_error());
// }
// else{
//     echo "connection was successful";
// }

?>