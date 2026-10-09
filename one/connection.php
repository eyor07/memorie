<?php
$host = "localhost";
$username = "root";
$password = "";
$dn_name = "student";
$conn = new mysqli($host, $username, $password, $dn_name);

if($conn->connect_error){
    die("connection failed:" .$conn->connect_error);
}

?>