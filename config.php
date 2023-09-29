<?php 
$servername = "localhost";
$username = "root";
$password = "new_password";
$daname = "guvipro";


$conn = new mysqli($servername,$username,$password,$daname);

if($conn -> connect_error){
    die("DB connection failed... ERROR = ".$conn -> connect_error);
}


?>