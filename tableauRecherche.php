<?php

$T = [];
for ($i = 0; $i < 10; $i++) {
    $T[$i] = rand(40, 60);
}
foreach($T as $elt)
echo $elt." ";
// $e=true;
// for ($i = 0; $i < 10; $i++) {
//     //Recherche
//     if($T[$i]==55){
//     echo "Existe";
//     $e=false;
// }
// }

// if ($e==true) {
//     echo "n'exixte pas!!";
// }Ou par ici

$rech=in_array(55, $T);

if ($rech)
echo "Existe";
else
echo "N'existe pas";


