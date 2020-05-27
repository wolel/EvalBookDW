<?php
  session_start(); //permet d'ouvrir les sessions
  session_unset(); //détruit toutes les variables de la session courante.
  session_destroy(); //détruit toutes les données associées à la session courante
  header('location:../../home.php');
