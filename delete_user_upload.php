    <?php
    session_start();
    //----------------------/
    include 'class/db.php';
    include 'class/Uploading.php';
    include 'class/User.php';
    $db = new db();
    $products = new Uploading($db);

    $idUser = isset($_SESSION['userId']) ? $_SESSION['userId'] : '';
    $idProduct = intval($_GET['idProduct']);

    /*var_dump($idUser);un entir
    var_dump($_SESSION);
    var_dump(["product-id" => $_GET['idProduct']]);
    $id= 34;*/

    $products->deleteUserUpload($idUser, $idProduct);

    //echo '<a href="http://localhost:63342/projetDW/espPerso.php">Go back to upload page</a>';
    header('Location: http://localhost:63342/projetDW/espPerso.php?success=deletedOK');
    die;
    //gonna delete the 'upload' and directly go back to 'espPerso' page
