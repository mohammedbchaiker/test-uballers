function Alert(){

    // Creation de la methode display qui affiche l'élément.

    this.display = function(message){
        let w = window.innerWidth;
        let h = window.innerHeight;

        // Récuperation du DOM.

        let erreur_box = document.getElementById('erreur-box');
        let alert = document.getElementById('alert');

        // Mise en page.

        erreur_box.style.display = "block";
        erreur_box.style.height = h+"px";
        alert.style.left = (w/2) - (550/2)+"px";
        alert.style.top = "100px";
        alert.style.display = "block";

        // Affichage

        document.getElementById('alert-body').innerHTML = message;
        document.getElementById('alert-foot').innerHTML = '<button onclick="mon_alert.close()">OK</button>';
    }

    // Creation de la methode close qui ferme l'élément.

    this.close = function(){
        document.getElementById('alert').style.display = "none";
        document.getElementById('erreur-box').style.display = "none";
    }
}

// Nouvelle instance.

var mon_alert = new Alert();
