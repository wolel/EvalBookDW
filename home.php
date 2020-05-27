<?php
require 'header_&_footer/header.php';
require 'class/db.php';
require 'class/User.php';
$db = new db();
$user = new User($db);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="css/style_home.css">
</head>
<body>

<?php if(isset($_SESSION['userId'])): ?>
    <?php  //session_start();  ?>

    <div class="container">
        <div class="title-home">
            <h1>Bienvenue sur Covidsell&get</h1>
            <p>Ceci est un site de partage, de recherche et de vente d'objet artisanales dédié au combat contre
                les infections viarles</p>
        </div>

        <div class="row row1">
            <span class="img img1"><img src="img/masque/masque_3.jpg"></span>

            <div class="txt_row1 txt">
                <h1>Pourquoi acheter un masque?</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Blanditiis dolor, eius esse impedit ipsam libero non
                    pariatur quibusdam reprehenderit suscipit tempora, unde.
                    ssumenda consequatur error molestiae nobis quia repudiandae unde.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Blanditiis dolor, eius esse impedit ipsam libero non
                    pariatur quibusdam reprehenderit suscipit tempora, unde.
                    Assumenda consequatur error molestiae nobis quia repudiandae unde</p>
                <a class="link" href="http://localhost:63342/projetDW/actualites.php">Plus d\'info</a>
                <!--<img src="img/pages/Asset.jpg">-->
            </div>
        </div>

        <div class="title-home">
            <h1>Contenu du site</h1>
        </div>

        <div class="row row2">
            <span class="img img2"><img src="img/pages/product/img-1.jpg"></span>

            <div class="txt_row2 txt">
                <h1>la page produits</h1>
                <p>Cette page contiendra des annonces de vente de produits artisanales,
                    fait maison. Si un masque ou une visières vous plait,Vous pourrez les
                    contacter l\'annonceurvia ou liu envoyer un message
                    pariatur quibusdam reprehenderit suscipit tempora, unde.
                    ssumenda consequatur error molestiae nobis quia repudiandae unde.</p>
                <a class="link" href="http://localhost:63342/projetDW/produits.php?Produits">Vers la page produits</a>
                <!--<img src="img/pages/Asset.jpg">-->
            </div>
        </div>

        <div class="row row3">
            <span class="img img3"><img src="img/pages/product/sanitary-products.jpg"></span>

            <div class="txt_row3 txt">
                <h1>la page actualité</h1>
                <p>Cette page contiendra des articles d\'artisant, d\'internautes
                    fait maison. Si un masque ou une visières vous plait,
                    Vous pourrez Vous pourrez les contacter via l\'onglet contactez l\'annonceur
                    pariatur quibusdam reprehenderit suscipit tempora, unde.
                    ssumenda consequatur error molestiae nobis quia repudiandae unde.</p>
                <a class="link" href="http://localhost:63342/projetDW/actualites.php">Vers la page news</a>
                <!--<img src="img/pages/Asset.jpg">-->
            </div>
        </div>


        <div class="row row4">
            <span class="img img4"><img src="img/pages/home/masque_5.jpg"></span>
            <div class="txt_row4 txt">
                <h1>la page personnelle</h1>
                <p>Dans cette page vous pourrez publier des articles /produits/annonces
                    fait maison. Vous aurez un espace personnel avec tout vos posts.
                    Vous pourrez Vous pourrez les contacter via l\'onglet contactez l\'annonceur
                    pariatur quibusdam reprehenderit suscipit tempora, unde.
                    ssumenda consequatur error molestiae nobis quia repudiandae unde.</p>
               <?php  if ($_SESSION['role'] == 'seller' && $_SESSION['role'] === 'admin'): ?>
                <a class="link" href="http://localhost:63342/projetDW/espPerso.php?Espace%20personnel">Vers la page news</a>
               <?php endif;?>
            </div>

        </div>

    </div>


<?//php require 'header_&_footer/footer.php';?>
<?php else: ?>

    <p class="login-status">You are logged out!</p>

    <!--Check and show login errors to user------------------------------>
    <?php
    if(isset($_GET['error'])){
        if($_GET['error'] === 'wroongpassword'){
            echo '<p class="loginerror">Sorry, wrong password</p>';
        }elseif($_GET['error'] == 'nouser'){
            echo '<p class="loginerror">Sorry, we have no user with this name</p>';
        }elseif ($_GET['error'] === 'emptyfields'){
            echo '<p class="loginerror">Empty fields. fill up all fields!</p>';
        }
    }
    ?>
    <!----------------------------->

    <div class="titleNologin">
        <h1>Bienvenue sur Covidsell&get</h1>
        <p>Ceci est un site de partage, de recherche et de vente d'objet artisanales dédié au combat contre
            les infections viarles</p>
        <h3>Sur ce site,  vous pourrez voir :</h3>
        <div></div>
    </div>

    <div class="containerStart">
        <div class="wrapper">
            <span><i class="fas fa-theater-masks"></i></span>
            <h3>Produits</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Ea excepturi exercitationem illum laudantium non, ratione soluta vero.
                Alias consequatur esse id laboriosam non nulla optio perspiciatis
                tempore tenetur voluptatem. Nulla.
            </p>
            <div></div>
        </div>

        <div class="wrapper">
            <span><i class="fas fa-theater-masks"></i></span>
            <h3>Actualités</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Ea excepturi exercitationem illum laudantium non, ratione soluta vero.
                Alias consequatur esse id laboriosam non nulla optio perspiciatis
                tempore tenetur voluptatem. Nulla.
            </p>
            <div></div>
        </div>

        <div class="wrapper">
            <span><i class="fas fa-user-shield"></i></span>
            <h3>Espace personnel</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Ea excepturi exercitationem illum laudantium non, ratione soluta vero.
                Alias consequatur esse id laboriosam non nulla optio perspiciatis
                tempore tenetur voluptatem. Nulla.
            </p>
            <div></div>
            <h3 id="msgtxt">Pour y avoir accès , il faudra vous connecter</h3>
        </div>
    </div>

<?php endif;?>

</body>
</html>


