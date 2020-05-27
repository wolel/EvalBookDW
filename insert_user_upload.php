<?php
/**
 * require = arrêtera l'exécution à la ligne dans laquelle l'erreur est produit
 * include = ne s'exécute pas et continuera à s'exécuter quelles que soient les erreurs
 */

    //header('Content-Type: application/json; charset=UTF-8');
    require 'class/db.php';
    include 'class/getID.php'; //classe statique qui récupère l'id de la session
    require 'class/Uploading.php';
    require 'class/User.php';
    $db = new db();

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $iduser = test_input($_POST["iduser"]);
        $title = test_input($_POST["title"]);
        $price = test_input($_POST["price"]);
        $description = test_input($_POST["description"]);
        $city = test_input($_POST["city"]);

        $produit = new User($db);

        if ($id_product = $produit->addProduct($iduser, $title, $price, $description, $city)) {

            $insert = new Uploading($db);

            $insert->insertUserUpload($id_product);
            header('Location: http://localhost:63342/projetDW/espPerso.php?success=uplodedYES');
        }
        else{
            header('Location: http://localhost:63342/projetDW/espPerso.php?error=uplodedNO');
            echo "err upload";
        }
    }


