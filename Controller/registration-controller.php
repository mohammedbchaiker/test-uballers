<?php

include './../Model/User.php';

session_start();




// Initialisation des variables.

$listeDesErreurs = array();
$success = false;
$user = null;


$prenom = '';
$nom = '';
$login = '';
$login = '';
$password = '';
$jour = '';
$mois = '';
$annee = '';
$sexe = '';

if (isset($_POST['register'])){

    $sexe = $_POST["sexe"];
    $jour =$_POST["jour"];
    $mois =$_POST["mois"];
    $annee =$_POST["annee"];

    // Connexion avec la base de donnée.

    $database = mysqli_connect('localhost','root','123456789','fb') or die('Probleme lors de la connexion à la base de données');

    // Prevention des injections SQL.

    $prenom = mysqli_real_escape_string($database,$_POST["prenom"]);
    $nom = mysqli_real_escape_string($database,$_POST["nom"]);
    $login = mysqli_real_escape_string($database,$_POST["login"]);
    $login_confirm = mysqli_real_escape_string($database,$_POST["login-confirm"]);
    $password = mysqli_real_escape_string($database,$_POST["password"]);

    // Verification des inputs.

    if ((preg_match('/\s/',$prenom)) || (preg_match('/\s/',$nom)) || (preg_match('/\s/',$login)) || (preg_match('/\s/',$password))  ){
        array_push($listeDesErreurs, "Les espaces ne sont pas acceptés.");
    }
    if (empty($prenom)){
        array_push($listeDesErreurs, "Veuillez saisir votre prénom.");
    }
    if (empty($nom)){
        array_push($listeDesErreurs, "Veuillez saisir votre Nom.");
    }
    if (empty($login)){
        array_push($listeDesErreurs, "Veuillez saisir votre numéro de téléphone ou votre e-mail.");
    }
    if (empty($sexe)){
        array_push($listeDesErreurs, "Veuillez indiquer votre sexe.");
    }
    if (empty($jour) ||empty($mois) ||empty($annee)){
        array_push($listeDesErreurs, "Veuillez indiquer votre date de naissance.");
    }
    if (strlen($password) < 8){
        array_push($listeDesErreurs, "Le mot de passe doit au moins contenir 8 caracteres.");
    }
    if (!((preg_match("/^[0][0-9]{9}$/im",$login)) || filter_var($login, FILTER_VALIDATE_EMAIL)) ){
        array_push($listeDesErreurs, "Veuillez saisir un e-mail ou un numéro de téléphone valide.");
    }


    // Verifier si les login ne sont pas les même

    if ($login != $login_confirm){
        array_push($listeDesErreurs, "Veuillez saisir le même numéro de téléphone ou le même e-mail.");
    }

    // Verifier s'il y a déjà un utilisateur avec le même login.

    $verification_requete = "SELECT * FROM user WHERE login = '$login' LIMIT 1";

    $result = mysqli_query($database,$verification_requete);
    $utilisateur = mysqli_fetch_assoc($result);

    if ($utilisateur["login"] == $login){
        array_push($listeDesErreurs, "Le numéro de téléphone ou votre e-mail. fourni exciste déja dans notre base de données, Veuillez saisir un autre");
    }

    // Formtage de la date de naissance de l'utilisateur en format SQL ( yyyy-mm-dd ).

    $date = "$annee-$mois-$jour";

    if (count($listeDesErreurs) == 0){

        // Cryptage du mot de passe

        $password = md5($password);

        //Persister le nouvel utilisateur dans la base de donnée

        $flush_requete = "INSERT INTO user (nom,prenom,login,password,sexe,date) VALUES ('$nom','$prenom','$login','$password','$sexe','$date')";
        mysqli_query($database,$flush_requete);
        $success=true;



    }

    // Envoie de la liste des erreurs

    $_SESSION["listeDesErreurs"] = $listeDesErreurs;
    $_SESSION["success"] = $success;



    // Redirection à l'acceuil

    header("Location: /fb-clone/acceuil.php");


}

