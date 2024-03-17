<?php
$servername="localhost";
$username="root";
$password="";
$dbname="myform";

$conn=mysqli_connect($servername, $username, $password ,$dbname) or die("connection failed:".mysqli_connect_error());

if ($conn) {

    // echo"connection ok";
}
else{
    echo"connection faild";
}



?>