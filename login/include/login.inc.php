<?php

    if(isset($_POST['login_submit'])) {
        require '../../class/db.php';
        require '../../class/Login.php';
        $db = new db();
        //---------------------------------
        $mailuid = $_POST['mailuid'];
        $password = $_POST['psw'];

        if(empty($mailuid) || empty($password)){
            header("location:../../home.php?error=emptyfields");
            exit();
            }
            else{
                $sql = new Login($db);
                $sql->login_Check();
            }
        }
    else {
        header("location:../../home.php");
        exit();
    }


