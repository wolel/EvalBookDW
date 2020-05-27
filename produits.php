<?php require "header_&_footer/header.php";?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produits</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--======================================================-->
    <link rel="stylesheet" href="css/produits.css">
    <link rel="stylesheet" href="css/style_drum.css">
    <!--======================================================-->
</head>
<body>


<?php

include 'class/db.php';
include 'class/User.php';
$db = new db();
$user = new User($db);
/*--------------------------*/

function check(){
    if(isset($_SESSION['pseudo']) === (isset($_POST['pseudo']))) {

    } else {
        header("Location: index.php");
        echo 'Les variables ne sont pas déclarées';
    }
}
check();

?>

<div class="containerProducts">
    <h1>Produits</h1>
    <div class="line"></div>
    <?php $products = $user->getAllProducts(); ?>
    <div class="row"> <?php
        if(count($products) > 0) :
            foreach($products as $product) : ?>
                <div class="article" id="open_content">
                    <h2>                 <?= $product['title']; ?></h2>
                    <p><b>Ville :    </b><?= $product['city']; ?></p>
                    <p><b>Posté le : </b><?= $product['date']; ?></p>
                    <!----- content image ----->
                    <div id="imgContainer">
                        <?= $product['image'];?><img id="myImg" src="upload/<?= $product['image'];?>" alt="<?= $product['title'] ? $product['title']:''?>">
                    </div>
                    <!----- content information ----->
                    <div class="txtCont">
                        <h3><b>Prix :                                 </b><?= $product['price']; ?></h3>
                        <p><b>Description :                           </b><?= $product['description']; ?></p>
                        <p>Produit proposé par :                          <b><?= $user->getProductUsername($product["product_userID"]); ?></b></p>
                        <p id="productEmail" style="display: none">Email: <b><?= $user->getProductEmail($product['product_userID'])?></b></p>
                    </div>

                    <span style="display: none" class="close">&times;</span>
                    <button id="btnShowProduct" onclick="myFunction()">Voir produit</button>

                    <!----- only available for Admin ----->
                    <?php if ($_SESSION['role'] == 'admin'): ?>
                        <div><a href="delete.php">Effacer</a></div>
                    <?php endif; ?>

                </div>
            
            <?php endforeach;
        endif ?>
    </div>
</div>



<script src="js/show-produits.js"></script>
<script src="js/modal_img.js"></script>

<?php //require "header_&_footer/footer.php";?>

</body>
</html>
