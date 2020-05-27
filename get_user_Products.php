<?php session_start();

/**
 * Methode used to get posted informations. Thoses will be showed in 'epace_pero' table
 * Get with: Ajax
 */
    include 'class/db.php';
    include 'class/Uploading.php';
    $db = new db();
    $get = new Uploading($db);
//----------------------/

    $request_method = $_SERVER['REQUEST_METHOD']; //Récupère la méthode qui a été envoyé

    switch ($request_method){
        case 'GET':
            $id= isset($_SESSION['userId']) ? $_SESSION['userId'] : ''; // If session exist, get the user id (ternary)
            $get->getUserUpload($id);
            break;

            default: header("HTTP/1.0 405 Method not allowed");
            break;
    }
