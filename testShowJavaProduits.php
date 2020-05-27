<?php require "header_&_footer/header.php";?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produits</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/show-produits.js"></script>
    <!--======================================================-->
    <link rel="stylesheet" href="css/produits.css">
    <link rel="stylesheet" href="css/style_drum.css">
    <!--======================================================-->
</head>
<body>

    <?php
    include 'class/db.php';
    include 'class/Uploading.php';
    $db = new db();
    $user = new Uploading($db);
    $id = $_SESSION['userId'];
    /*--------------------------------*/

    function check(){
        if(isset($_SESSION['pseudo']) === (isset($_POST['pseudo']))) {

        }else {
            header("Location: index.php");
            echo 'Les variables ne sont pas déclarées';
        }
    }
    check();

    ?>

    <div class="containerDrum">
        <h1>Produits</h1>

        <form enctype="multipart/form-data" action="#" method="post">
            <div class="row row1">
                <div class="art1 article" id="open_img_a1">
                    <div class="get-txtDrum"><?php $user->getUserUpload(1)?></div>
                    <div class="get-imgDrum"><?php $user->getUserUploadimage(8);?></div>
                    <button type="button" class="seeProd"></button>
                </div>

                <div class="art1 article a2" id="open_img_a2">
                    <div class="get-txtDrum"><?php $user->getUserUpload(2)?></div>
                    <div class="get-imgDrum"><?php $user->getUserUploadimage(8);?></div>
                </div>

                <div class="art1 article a3" id="open_img_a3">
                    <div class="get-txtDrum"><?php $user->getUserUpload(3)?></div>
                    <div class="get-imgDrum"><?php $user->getUserUploadimage(8);?></div>
                </div>

                <div class="art1 article a4" id="open_img_a4">
                    <div class="get-txtDrum"><?php $user->getUserUpload(4)?></div>
                    <div class="get-imgDrum"><?php $user->getUserUploadimage(8);?></div>
                </div>
            </div>

             <div class="row row2">
                 <div class="art1 article" id="open_img_a1">
                     <div class="get-txtDrum"><?php $user->getUserUpload(1)?></div>
                     <div class="get-imgDrum"><?php $user->getUserUploadimage(8);?></div>
                 </div>

                 <div class="art1 article a2" id="open_img_a2">
                    <div class="get-txtDrum"><?php $user->getUserUpload(2)?></div>
                    <div class="get-imgDrum"><?php $user->getUserUploadimage(8);?></div>
                 </div>

                 <div class="art1 article a3" id="open_img_a3">
                     <div class="get-txtDrum"><?php $user->getUserUpload(3)?></div>
                     <div class="get-imgDrum"><?php $user->getUserUploadimage(8);?></div>
                 </div>

                 <div class="art1 article a4" id="open_img_a4">
                     <div class="get-txtDrum"><?php $user->getUserUpload(4)?></div>
                     <div class="get-imgDrum"><?php $user->getUserUploadimage(8);?></div>
                 </div>
             </div>
        </form>
    </div>

    <!--- The Modal --->

    <div class="container">
        <span class="close">X</span>
        <div class="c2">
          <p><?php $user->getUserUpload(7)?></p>
          <div class="seeProdimg"><?php $user->getUserUploadimage(8);?></div>
        </div>
    </div>

</body>
</html>
