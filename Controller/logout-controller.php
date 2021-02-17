<?php
session_start();

// Destruction de la session

session_destroy();

// Redirection à la page d'acceuil

header("Location: /fb-clone/acceuil.php");
?>