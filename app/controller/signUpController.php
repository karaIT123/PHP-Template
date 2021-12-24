<?php

if(isset($_POST['submit']))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    require_once DATABASE_PATH;
    $DB  = new Database();

    $sql = "INSERT INTO users (firstname,lastname,username,email,password) VALUES ('$firstname','$lastname','$username','$email','$password')";

    $result = $DB->execute($sql);

    if($result >= 0){
        header("Location: login.php");
    }

}

?>