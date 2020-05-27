<?php
require 'header_&_footer/header.php';
require 'class/db.php';
require 'class/User.php';
$db = new db();
$user = new User($db);
//=============================================//

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <link rel="stylesheet" href="css/style_home.css">
</head>
<body>


<?php if(isset($_SESSION['userId'])): ?>

     <div class="container">
          <div class="title-home">
             <h1>Bienvenue sur Covidsell&get</h1>
             <p>Ceci est un site de partage, de recherche et de vente d\'objet artisanales dédié au combat contre le virus</p>
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
             <a class="link" href="#">Plus d\'info</a>
             <!--<img src="img/pages/Asset.jpg">-->  
          </div>                            
        </div>
        
        <div class="title-home">
          <h1>Contenu du site</h1> 
        </div>          
        
        <div class="row row2">                    
          <span class="img img2"><img src="img/pages/product/img-1.jpg"></span>
          
          <div class="txt_row2 txt">              
             <h1>la page Annonces</h1>                        
             <p>Cette page contiendra des annonce de vente de produits artisanales,
             fait maison. Si un masque ou une visières vous plait,Vous pourrez les
             contacter l\'annonceurvia ou liu envoyer un message
             pariatur quibusdam reprehenderit suscipit tempora, unde.
             ssumenda consequatur error molestiae nobis quia repudiandae unde.</p>                        
             <a class="link" href="#">Vers la page produits</a>
             <!--<img src="img/pages/Asset.jpg">-->  
          </div>                            
        </div>
        
        <div class="row row3">     
           <span class="img img3"><img src="img/pages/product/sanitary-products.jpg"></span>                       
       
          <div class="txt_row3 txt">               
             <h1>la page news</h1>                        
             <p>Cette page contiendra des articles d\'artisant, d\'internautes
             fait maison. Si un masque ou une visières vous plait,
             Vous pourrez Vous pourrez les contacter via l\'onglet contactez l\'annonceur
             pariatur quibusdam reprehenderit suscipit tempora, unde.
             ssumenda consequatur error molestiae nobis quia repudiandae unde.</p>                        
             <a class="link" href="#">Vers la page news</a>
             <!--<img src="img/pages/Asset.jpg">-->  
          </div>     
        </div>
        
        
        <div class="row row4">    
        <span class="img img4"><img src="img/masque/masque-barriere-afnor-coton-bandana-rouge.jpg"></span>          
          <div class="txt_row4 txt">               
             <h1>la page produits</h1>                        
             <p>Cette page contiendra des articles d\'artisant, d\'internautes
             fait maison. Si un masque ou une visières vous plait,
             Vous pourrez Vous pourrez les contacter via l\'onglet contactez l\'annonceur
             pariatur quibusdam reprehenderit suscipit tempora, unde.
             ssumenda consequatur error molestiae nobis quia repudiandae unde.</p>                        
             <a class="link" href="#">Vers la page news</a>
             <!--<img src="img/pages/Asset.jpg">-->  
          </div>    
                               
        </div>

       </div>
<?php else: ?>
    <h1 class="login-status" style="color: white; margin-left: 20%">You are logged out!</h1>
<?php endif ?>


<?php //require 'header_&_footer/footer.php';?>

</body>
</html>
