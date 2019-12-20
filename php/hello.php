<?php

echo "Hello world!";

// Variable
$ville = 'Strasbourg'; // texte
$prix = 17.50; // nombre décimal
$age = 15; // nombre;
$ville_copy = $ville;
$recap = $ville.$age.$prix; // concaténation
$date = date('d/m/Y'); // via retour d'une fonction
$todo_list = ['courses','ménage', 'cuisine', 'manifestation']; // tableau

// Condition
if($age >= 18) {
    $adult = TRUE;
    echo "Vous êtes adulte";
}
else {
    $adult = FALSE;
    echo "Vous n'êtes pas un adulte";
}

if($age >= 18) {
	$qualificatif = 'Adulte';
}
elseif($age < 18 && $age >= 14 ) {
	$qualificatif = 'Ado relou';
}
else{
	$qualificatif = 'Enfant ou bébé';
}

echo $qualificatif;

// Switch
$page = "Accueil";

switch ($page)
{
	case "Accueil":
		echo "Vous avez choisi Accueil";
		break;
	case "À propos":
		echo "Vous avez choisi À propos";
		break;
	case "Nouvelles":
		echo "Vous avez choisi Nouvelles";
		break;
		case "Se connecter":
		echo "Vous avez choisi Se connecter";
		break;
		case "Liens":
		echo "Vous avez choisi Liens";
        break;
    }


// Boucle for
for ($a=0; $a <= 5; $a++) {
    echo $a. "<br>";
}

// Tableau
//$mon_tableau = ['Lundi', 'Mardi', 'Mercredi'];

// Tableau associatif
$mon_tableau = [
    'jour_01' => 'Lundi',
    'Jour_02' => 'Mardi',
    'jour_03' => 'Mercredi'
  ];

  // Deux façon d'afficher le tableau, la 2e affiche la longueur du string
  print_r($mon_tableau);
  //var_dump($mon_tableau);
      
// Parcourir un tableau, Habituez vous au FOREACH!
  foreach($mon_tableau as $cle => $valeur){
    echo "<br><br>";
	echo 'la clé '.$cle;
	echo 'la valeur '.$valeur;
}

// Function
function repeteTout3Fois($phrase = ''){
    echo "<br>";
    echo $phrase.'<br>';
    echo $phrase.'<br>';
    echo $phrase.'<br>';
  }

repeteTout3Fois("Il fait beau ce matin");






?>