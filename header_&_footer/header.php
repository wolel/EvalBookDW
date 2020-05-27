<?php session_start(); ?>

 <script src="https://kit.fontawesome.com/aa71811ed5.js" crossorigin="anonymous"></script>

 <link rel="stylesheet" href="js/responsive_nav_Hamburger.js">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="css/style_header.css">


    <header>

        <div class="image_header">
            <img src="img/header/COV-header-01.jpg" alt="batterie">
        </div>

            <!-------if LOGIN SESSION ? includes everything in the page  H:i:s------>

        <?php if (isset($_SESSION['userId'])): ?>
            <?php if (isset($_SESSION['userId'])):
                date_default_timezone_set("Europe/Brussels"); endif?>

            <!--------show the name and date ------>
            <div class="logStatDate">
               <p id="login-status"> Connected as : <?php echo $_SESSION['userUid'].'( '.$_SESSION['role'].' )' ;?></p>
               <p id="time"><?php echo date("d/ m/ Y ");?></p>
            </div>

            <div class="topnav" id="myTopnav">
               <ul>
                   <li><a href="home.php?home=" class="active">Home</a></li>
                   <li><a href="produits.php?Produits">Produits</a></li>
                   <li><a href="actualites.php?Actualité">Actualité</a></li>

                   <!--------session conditions to open pages ------>
                   <?php if ($_SESSION['role'] == 'seller' || $_SESSION['role'] == 'admin'): ?>
                       <li><a href="espPerso.php?Espace personnel">Espace personnel</a></li>
                   <?php endif;?>

                   <!--------Dropdown informations ------>

                       <li class="dropdown" id="myDropDown">
                           <a href="javascript:void(0)" class="dropbtn" onclick ="dropdownBtn()">Informations</a>
                           <div class="dropdown-content">
                             <a href="politique_du_site.php?Conditions générales de vente">Conditions générales de vente</a>
                             <a href="vie_prive.php?Vie privée">Vie privée</a>
                             <a href="contact.php?Contact">Contact</a>
                         </div>
                       </li>

                    <!--------logout form ------>
                   <form id="logoutForm" action="login/include/logout.inc.php" method="post" class="form-group">
                       <button type="submit" name="logout_submit" Value="Submit" id="btnlogout">logout</button>
                   </form>
               </ul>

                    <!--------responsive btn ------>
               <a href="javascript:void(0);" class="icon" onclick="hamburgerDrop()">
                   <i class="fa fa-bars"></i>
               </a>


        <?php else: ?>
                    <!--------login form ------>
               <div class="login-container">
                     <form action="login/include/login.inc.php" method="post" id="loginForm" class="form-group">
                         <input  type="text"     id="maimuid"   name="mailuid" placeholder="Username/E-mail..." class="form-control">
                         <input  type="password" id="psw"       name="psw"     placeholder="Password..." class="form-control">
                         <button type="submit"  name="login_submit" class="btn btn-primary">Login</button>
                     </form>
                    <!--------logout form ------>
                     <div id="signup">
                         <p>You have no account? </p>
                         <a href="login/signup.php">Signup</a>
                     </div>
               </div>
            </div>

        <?php  endif; ?>

    </header>

<script type="text/javascript" src="js/responsive_nav_Hamburger.js"></script>




