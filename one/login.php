<?php
include("connection.php");

if(isset($_POST['submit'])){
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $sql = "SELECT* FROM  login WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    
     if (!$result) {
        die("SQL Error: ".mysqli_error($conn));
     }

     $count = $result->num_rows;
     
    if($count==1){
        header("location:welcome.php");
        exit();
    }
    else{
        echo '<script>
        window.location.href = "index.php";
        alert("login failed. Invalid username or password")
        </script>';
    }
}
?>