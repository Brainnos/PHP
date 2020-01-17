function envoyerRequete(requete, url) {
    //Envoyer une requete à la cafetière
    requete.onreadystatechange = servirCafe;
    requete.open("GET", url, true);
    requete.send(null);
}

function commanderCafe() {
    // Prendre une commande dans le formulaire web
    var nom = document.getElementById("nom").value;

    var taille = document.querySelector('input[name="taille"]:checked').value

    var boisson = document.querySelector('input[name="boisson"]:checked').value

    var divStatusCafetiere1 = document.getElementById("status-cafetiere1");
    var imgCafetiere1 = document.getElementById("img-cafetiere1");
    var status = getTexte(divStatusCafetiere1);

    if (status == "Inactive") {
        remplacerTexte(divStatusCafetiere1, "Préparation du " + taille + " " + boisson + " de " + nom);
        document.forms[0].reset();
        var url = "cafetiere.php?nom=" + escape(nom) + "&taille=" + escape(taille) + "&boisson=" + escape(boisson) + "&cafetiere=1";
        envoyerRequete(requete1, url);
        var $url2 = "cafetiere.php?nom=" + escape(nom) + "&taille=" + escape(taille) + "&boisson=" + escape(boisson) + "&cafetiere=1";
        envoyerRequete(requete3, $url2)
        imgCafetiere1.setAttribute("src", "images/photofunky.gif");
    } else {
        var divStatusCafetiere2 = document.getElementById("status-cafetiere2");
        var status = getTexte(divStatusCafetiere2);
        var imgCafetiere2 = document.getElementById("img-cafetiere2");
        if (status == "Inactive") {
            remplacerTexte(divStatusCafetiere2, "Préparation du " + taille + " " + boisson + " de " + nom);
            document.forms[0].reset();
            var url = "cafetiere.php?nom=" + escape(nom) + "&taille=" + escape(taille) + "&boisson=" + escape(boisson) + "&cafetiere=2";
            envoyerRequete(requete2, url);
            imgCafetiere2.setAttribute("src", "images/photofunky.gif");

        } else {
            alert("Désolé ! Les deux cafetières sont occupés. " + "Réessayer plus tard.");
        }
    }
}

function servirCafe() {

    // Quand la cafetière à fini , servir la boisson
    if (requete1.readyState == 4) {
        if (requete1.status === 200) {
            var reponse = requete1.responseText;
            reponseFormat = JSON.parse(reponse);


            // Determiner qui a passé la commande et quelle cafetière l'a préparé
            var quelleCafetiere = reponseFormat["cafetiere"];
            var nom = reponseFormat["nom"];
            var taille = reponseFormat["taille"];
            var boisson = reponseFormat["boisson"];
            var imgCafetiere1 = document.getElementById("img-cafetiere1");

            if (quelleCafetiere == "1") {
                var divStatusCafetiere1 = document.getElementById("status-cafetiere1");
                remplacerTexte(divStatusCafetiere1, "Inactive");
                imgCafetiere1.setAttribute("src", "images/cafetiere1.jpeg")

            } else {
                var divStatusCafetiere2 = document.getElementById("status-cafetiere2");
                remplacerTexte(divStatusCafetiere2, "Inactive");
            }
            alert(nom + ", votre " + taille + " café " + boisson + " est prêt !");
            requete1 = creerRequete();
        } else {
            alert("Erreur ! Statut de la requête = " + requete1.status);
        }
    } else if (requete2.readyState == 4) {
        if (requete2.status === 200) {
            var reponse = requete2.responseText;
            reponseFormat = JSON.parse(reponse);


            // Determiner qui a passé la commande et quelle cafetière l'a préparé
            var quelleCafetiere = reponseFormat["cafetiere"];
            var nom = reponseFormat["nom"];
            var taille = reponseFormat["taille"];
            var boisson = reponseFormat["boisson"];
            var imgCafetiere2 = document.getElementById("img-cafetiere2");
            if (quelleCafetiere == "2") {
                var divStatusCafetiere2 = document.getElementById("status-cafetiere2");
                remplacerTexte(divStatusCafetiere2, "Inactive");
                imgCafetiere2.setAttribute("src", "images/cafetiere2.jpeg")

            } else {
                var divStatusCafetiere1 = document.getElementById("status-cafetiere1");
                remplacerTexte(divStatusCafetiere1, "Inactive");
            }
            alert(nom + ", votre " + taille + " café " + boisson + " est prêt !");
            requete2 = creerRequete();
        } else {
            alert("Erreur ! Statut de la requête = " + requete2.status);
        }
    }
}