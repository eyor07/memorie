<?php
include("connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compitabele" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id ="form">
        <h1>login form</h1><br><br>
    <form class="contact-info" name="form" action="login.php" onsubmit="return isvalid()" method ="POST">
        <label >username</label>
        <input type="text" id ="user" name="user"><br><br>

        <label >password</label>
        <input type="password" id ="pass" name ="pass"><br><br>

        <input type="submit" id ="btn" value ="login" name ="submit">
    </form>
</div>
<script>
    function isvalid(){
        var user = document.form.user.value;
         var pass = document.form.pass.value;
         if(user.length== 0 && pass.length== 0){
            alert("username and password failed is empty!!!");
            return false
         }
         
             if(user.length== 0){
            alert("username is empty!!!");
            return false
         }
         
             if(pass.length== 0){
            alert("password is empty!!!");
            return false
         }
         return true;
    }
</script>
</body>
</html>