<?php
include './../Model/User.php';
session_start();


if (isset($_POST['login'])) {

    // Connexion à la base de donnée

    $database = mysqli_connect('localhost', 'root', '123456789', 'fb') or die('Probleme lors de la connexion à la base de données');

    // Prevention des injections SQL.

    $username = mysqli_real_escape_string($database, $_POST["username"]);
    $password = mysqli_real_escape_string($database, $_POST["password"]);

    // Cryptage du mot de passe

    $password = md5($password);

    // Recherche de l'utilisateur avec les logins fornis

    $find_request = "SELECT * FROM user WHERE login = '$username' AND password = '$password' ";

    $result = mysqli_query($database, $find_request);

    if (mysqli_num_rows($result)) {

        // Recuperation des coordonnées de l'utlisateur

        $utilisateur = mysqli_fetch_assoc($result);

        // Création d'une nouvel instance de User

        $user = new User();
        $user->setPassword($utilisateur["password"]);
        $user->setNom($utilisateur["nom"]);
        $user->setPrenom($utilisateur["prenom"]);
        $user->setLogin($utilisateur["login"]);
        $user->setPassword($utilisateur["password"]);
        $user->setDate($utilisateur["date"]);
        $user->setSex($utilisateur["sexe"]);

        // Envoie du User

        $_SESSION["user"] = $user;

        // Redirection a la page de profil de l'utilisateur

        header("Location: /fb-clone/View/profil.php");

    } else {
        $_SESSION["value"] = true;
        header("Location: /fb-clone/acceuil.php");

    }
}

