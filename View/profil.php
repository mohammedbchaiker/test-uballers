<?php
include './../Model/User.php';

session_start();

// Recupération de l'instance User

$user = $_SESSION["user"];?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bienvenue Monsieur <?php echo $user->getPrenom(); ?></title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="../assets/js/script.js"></script>
</head>
<body>

<?php
if (isset($_SESSION["user"])):?>
<div class="wrapper">
    <div class="profil">
        <h4 style="margin-left:30px; ">Votre profil :</h4>
        <a href="./../Controller/logout-controller.php" class="btn-logout">Se déconnecter</a>
    </div>
    <div class="content">
        <?php
        if ($user->getSex() == "femme"){
            $sex = "née";
            $m="Madame";
        }else{
            $sex = "né";
            $m="Monsieur";
        }
        ?>
        <p>
            <?php echo "Vous êtes $m ".$user->getPrenom()." ".$user->getPrenom." vous êtes $sex le ".$user->getDate()."."?>
        </p>
    </div>
</div>

<?php endif ?>
</body>
</html>