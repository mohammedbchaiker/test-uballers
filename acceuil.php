<?php session_start();
include "Controller/registration-controller.php";
$listeDesErreurs = $_SESSION["listeDesErreurs"];
$value = $_SESSION["value"];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bienvenue !</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/script.js"></script>

</head>
<body>
<div id="erreur-box"></div>
<div id="alert">
    <div>
        <div id="alert-head"></div>
        <div id="alert-body"></div>
        <div id="alert-foot"></div>
    </div>
</div>
<div class="wrapper">
    <div class="login">

        <table class="login-content">
            <form action="Controller/login-controller.php" method="post" class="login-table">
                <tr>
                    <td><label for="username">Adresse mail ou mobile</label></td>
                    <td><label for="password">Mot de passe</label></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Votre login" name="username" required></td>
                    <td><input type="password" placeholder="Votre mot de passe" name="password" required></td>
                    <td>
                        <button type="submit" name="login" class="btn-connexion">Connexion</button>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><a href="#" class="frgt_pswd">Informations du compte oubliées ?</a></td>
                </tr>
            </form>
        </table>


    </div>
    <div class="signup">
        <div class="signup-content">
            <h2>Inscription</h2>
            <p>C'est gratuit (et ça le restera toujours)</p>
            <form action="Controller/registration-controller.php" method="post">
                <div>
                    <input type="text" placeholder="Nom" name="nom" id="nom" class="signup-input" required>
                    <input type="text" placeholder="Prenom" name="prenom" id="prenom" class="signup-input" required><br>
                </div>

                <input type="text" placeholder="Numéro de mobile ou téléphone" name="login" id="login"
                       class="signup-input" required><br>
                <input type="text" placeholder="Confirmer numéro de mobile ou téléphone" name="login-confirm"
                       id="email-confirm" class="signup-input" required><br>
                <input type="password" placeholder="Nouveau mot de passe" name="password" id="password"
                       class="signup-input" required><br>
                <table style="border-spacing: 0px 20px;">
                    <tr>
                        <td><span>Date de naissance</span></td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <select name="jour" id="jour">
                                    <option value="" selected>Jour</option>
                                    <option value="01">1</option>
                                    <option value="02">2</option>
                                    <option value="03">3</option>
                                    <option value="04">4</option>
                                    <option value="05">5</option>
                                    <option value="06">6</option>
                                    <option value="07">7</option>
                                    <option value="08">8</option>
                                    <option value="09">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                                <select name="mois" id="mois">
                                    <option value="" selected>Mois</option>
                                    <option value="01">Janvier</option>
                                    <option value="02">Fevrier</option>
                                    <option value="03">Mars</option>
                                    <option value="04">Avril</option>
                                    <option value="05">Mai</option>
                                    <option value="06">Juin</option>
                                    <option value="07">juillet</option>
                                    <option value="08">Août</option>
                                    <option value="09">Septembre</option>
                                    <option value="10">Octobre</option>
                                    <option value="11">Novembre</option>
                                    <option value="12">Decembre</option>
                                </select>
                                <select name="annee" id="annee">
                                    <option value="" selected>Année</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                    <option value="1990">1990</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div>
                                <a href="#" class="question">Pourquoi indiquer ma date de naissance ?</a>
                            </div>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>
                            <div>
                                <input type="radio" id="femme" name="sexe" value="femme">
                                <label for="femme">Femme</label>
                            </div>
                        </td>
                        <td>
                            <div>
                                <input type="radio" id="homme" name="sexe" value="homme">
                                <label for="homme">Homme</label>
                            </div>
                        </td>
                    </tr>
                </table>

                <div class="cgi">
                    En cliquant sur Inscription, vous acceptez nos <a href="#">Conditions</a> et indiquez que vous avez
                    lu notre
                    <a href="#">Politique d'utilisation des données</a>, y compris notre <a href="#">Utilisation des
                        cookies.</a> Vous pourrez recevoir des notifications par texto de la part de Facebook et pouvez
                    vous désabonner à tout moment.
                </div>
                <button type="submit" class="btn-registration" name="register">Inscription</button>
            </form>
        </div>

    </div>

    <div class="erreur" id="erreur">
        <script>
            let listeDesErreurs =  <?php echo json_encode($listeDesErreurs); ?>;
            let value = <?php echo json_encode($value); ?>;
            if (value) {
                mon_alert.display("Veuillez verifier votre login ou votre mot de passe.")
            }
            if (listeDesErreurs.length !== 0) {
                let erreurs = listeDesErreurs.map((e) => e + "<br>")
                erreurs = erreurs.toString().replace(/,/g, '')
                mon_alert.display(erreurs);
            } else {
                mon_alert.display("Felicitation vous venez de créer votre compte, connectez vous !");
            }
        </script>
    </div>
</div>


</body>
</html>
