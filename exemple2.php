<?php

$prenom = array("julien", "francois", "david", "julian");

for ($num = 0; $num <= 5; $num++){
    echo $prenom[$num].'<br />';
}


?>

<?php

$coordonne = array(
    
    "prenom" => "julien",
    "age" => "33 ans",
    "sexe" => "homme",
    "adresse" => "St laurent d'aigouze"
);
        
   foreach($coordonne as $cat => $info){
       echo "<br />".$cat." : ".$info;
    
   }
   
   // vérifie si la catégorie existe
   if(array_key_exists("age", $coordonne)){
       
       echo "<br /><br />l'age est présent";
   }else{
       echo "<br /><br />la valeur n'existe pas";
   }

   // vérifie si l'élément existe
   if (in_array("nico", $coordonne)){
       echo "<br /><br />la valeur existe";
   }else{
       echo "<br /><br />la valeur n'existe pas";
   }

   
   
   
   
?>

