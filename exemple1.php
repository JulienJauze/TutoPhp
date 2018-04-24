<?php
$note = 17;

switch ($note)
{
    case 5 :
        echo 'nulle';
        break;
    case 7 :
    echo 'mauvais';
        break;
    case 10:
        echo 'moyen';
        break;
    case 15:
        echo 'bon';
        break;
    case 18:
        echo 'exélent';
        break;
}
?>

<?php
$pays = "aaa";

if ($pays == "France" || $pays == "Belgique")
{
    echo "Bienvenue sur notre site !";
}
else
{
    echo "Désolés, notre service n'est pas encore disponible dans votre pays !";
}


?>

<?php



for ($ligne = 0; $ligne <= 10; $ligne++){
    
    echo '<br />recopiage : '.$ligne;
}

$nligne=0;

while ($nligne <= 10){
    
    echo '<br />re-recopiage : '.$nligne;
    $nligne++;
}



?>









