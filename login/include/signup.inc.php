<?php

//===================SIGNUP PAGE=================//

    if (isset($_POST['signup-submit'])){

        require '../../class/db.php';
        require '../../class/Signup.php';
        $db = new db();
        //---------------------------------
        $username = $_POST['uid'];
        $email = $_POST['mail'];
        $password = $_POST['psw'];
        $passwordRepeat = $_POST['psw-repeat'];
        $submit = $_POST['signup-submit'];
        $role = strtolower($_POST['role']);


         if (empty($username)){       // verify if empty form
             header("location:../signup.php?error=emptyfields&email=".$email);
             exit();

         }elseif (empty($email)){
            header("location:../signup.php?error=emptyfields&uid=".$username."&role=".$role);
            exit();

         }elseif (empty($password)){
            header("location:../signup.php?error=emptyfields&uid=".$username."&email=".$email."&role=".$role);
            exit();

         //If the selected 'role' is not in that array['visitor', 'seller'] => display error !
        }elseif (empty($role) || !in_array(strtolower($role), ['visitor', 'seller'])){
             header("location:../signup.php?error=emptyrole&uid=".$username."&email=".$email."&role=".$role);
             exit();
         }
         elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){     // verify booth: email/username correctitude
            //var_dump(filter_var('bob@example.com', FILTER_VALIDATE_EMAIL));
            var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
             header("location:../signup.php?error=invalidmailuid");
            exit();

        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header("location:../signup.php?error=invalidmail&uid=".$username);      // verify the email correctitude
            exit();

        }elseif(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            header("location:../signup.php?error=invaliduid&email=".$email);      // verify the username corectitude
            exit();

        }elseif($_POST['psw'] != $_POST['psw-repeat']){
            header("location:../signup.php?error=passwordcheck&uid=".$username."&email=".$email);      // verify if  password match
            exit();
        }else{               // connect to databasde and check if any matches
            $sql = new Signup($db);
            $sql->signin_Check();
        }

       //$this->mysqli->close();
    }else{
        header("location:../signup.php");
        exit();
    }


