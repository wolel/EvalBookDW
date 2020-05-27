<link rel="stylesheet" href="css/style_footer.css">
<script src="https://kit.fontawesome.com/aa71811ed5.js" crossorigin="anonymous"></script>

<!-------------------------------------------FOOTER------------------------------------------->

        <footer>
            <div class="wrapper">
                <nav>
                    <a href="https://www.instagram.com/accounts/login/?hl=fr"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.facebook.com/login/device-based/regular/login/?login_attempt=1&lwv=110"><i class="fab fa-facebook-square"></i></a>
                    <a href="https://accounts.google.com/signin/v2/identifier?service=m"><i class="far fa-envelope"></i></a>
                </nav>

                <ul>
                    <li><a href="home.php?home=">Home</a></li>
                    <li><a href="produits.php?Produits">Produits</a></li>
                    <li><a href="actualites.php?Actualité">Actualité</a></li>
                    <?php if ($_SESSION['role'] == 'seller'): ?>
                        <li><a href="espPerso.php?Espace personnel">Espace personnel</a></li>
                    <?php endif;?>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn">Informations</a>
                        <div class="dropdown-content">
                            <a href="politique_du_site.php?Conditions générales de vente">Conditions générales de vente</a>
                            <a href="vie_prive.php?Vie privée">Vie privée</a>
                            <a href="contact.php?Contact">Contact</a>
                        </div>
                    </li>

                    <form id="logoutForm" action="login/include/logout.inc.php" method="post" class="form-group">
                        <button type="submit" name="logout_submit" Value="Submit" id="btnlogout">logout</button>
                    </form>
                </ul>

            </div>
        </footer>

