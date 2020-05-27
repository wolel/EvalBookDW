    <?php
    $errors = [];
    if(!array_key_exists('name', $_POST) || $_POST['name'] == ''){
        $errors['name'] = "Write your name please";
    }

    if (!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){//
        $errors['email'] = "Please write a valid email";

        //ou mettre ca à la place de FILTER_VALIDATE_EMAIL:
        /*if(!preg_match("/^[a-z0-9\-_.]+@[a-z0-9\-_.].[a-z]{2,3}$/i", $email)){
        $valid = false;
        echo "Email non valide";
        }*/
    }

    if (!array_key_exists('message', $_POST) || $_POST['message'] == ''){
        $errors['message'] = 'Write your message please';
    }

    session_start();
    if(!empty($errors)){
        $_SESSION['errors'] = $errors;
        $_SESSION['input'] = $_POST;
        echo '<script language="Javascript">document.location.replace("contact.php");</script>';
        //header_&_footer('Location:contact.php');
    }else{
        $_SESSION['success'] = 1;
        $mail_to = 'wolaelena2@gmail.com';
        $name = $_POST['name'];
        $message = $_POST['message'];
        $headers = 'FROM:'.$name;// rajoute des arguments au mail
        mail($mail_to,'contact form', $message, $headers);
        echo '<div class="alert alert-success">message sent!</div>';
        echo '<script language="Javascript">document.location.replace("contact.php");</script>';
     }
    ?>
    <!-----------CSS + Bootstrap---------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/contact.css">
    <!------------------------------------>


