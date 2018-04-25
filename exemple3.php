
<?php

$phrase = "hakuna matata";

// fonction pour trouver le nombre de lettre dans une phrase
$longueur = strlen($phrase);

echo $phrase." contient ".$longueur." lettres";

// fonction pour remplacer des lettres par d'autres
$diablo = str_replace("l","f", "lalelulilo");
echo "<br />".$diablo;

// fonction pour tout passer en minuscule
$diablette = MAJUSCULE;
$diablette = strtolower($diablette);

echo "<br />".$diablette;

//fonction pour récupérer la date
$anne = date("Y");
$mois = date("m");
$jour = date("d");
$minute = date("i");
$heure = date("H");

echo '<br />Nous sommes le '.$jour."/".$mois."/".$anne." et il est ".$heure." : ".$minute;

// création d'une fonction
function coucou($nom){
    
    echo "bonjour".$nom."<br />";
}

coucou("marie");
coucou("marie1");
coucou("marie2");
coucou("marie3");
coucou("marie4");
coucou("marie5");

?>

