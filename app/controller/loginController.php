<?php

    if(isset($_POST['submit']))
    {
        if(isset($_POST["username"]) && isset($_POST["password"]))
        {
            $username = $_POST['username'];
            $password = $_POST['password'];

            require DATABASE_PATH;
            $DB = new Database();

            $DB->query("SELECT * FROM users WHERE username = :username AND password = :password");
            $DB->bind(":username",$username);
            $DB->bind(":password",$password);
            if ($DB->rowCount() > 0)
            {
                header("Location: home");
            } else
            {
                header("Location: login");
            }
        }

    }

    require PAGES_PATH . 'login.php';

?>