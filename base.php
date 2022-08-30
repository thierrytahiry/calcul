<?php
$a = "a";
$a++;// affiche b

echo $a .'<br><br>';
echo "Il affiche ";
$a = 7;
$a = "Joe";
echo $a;// affiche Joe
echo " ou ";
$a = "Joe";
$a = 7;
echo $a . '<br><br>';// affiche 7

$a = "Joe";
$b = "Max";
$c = $a . $b;
echo "Il affiche de " .$c . '<br><br>';// affiche JoeMax


$capitales = array( "Singapour" => "Singapour",
"France" => "Paris", "Australie" => "Camberra", "Madagascar" => "Antananarivo". '<br/>' );
foreach($capitales as $c) {
echo "$c ";// affiche Singapour Paris Camberra
}

// $liste = array("fruit" => "banane", "legume" => "radis", "boisson" => "
// eau");
// echo $liste[1];//Affiche Undefined array key 1



$lesPrenoms[0]='Aurélien';
$lesPrenoms[1]='Olivier';
$lesPrenoms[2]='Ahmed';
for ($i = 0 ; $i <count($lesPrenoms) ; $i++) {
echo 'lesPrenoms['.$i.'] = ' .$lesPrenoms[$i]. '<br/>' ;
} //affiche: lesPrenoms[0] = Aurélien,lesPrenoms[1] = Olivier,lesPrenoms[2] = Ahmed

$lesPrenoms[0] = 'Aurélien';
$lesPrenoms[1] = 'Bérénice';
$lesPrenoms[2] = 'Ahmed';
$lesPrenoms[5] = 'Hang';
echo '<h2>affichage foreach $key => $value</h2>';
foreach ($lesPrenoms as $key => $value) {
    echo '$key : ' . $key . ' => ';
    echo '$value : ' . $value . '<br/>';
}
// affiche:affichage foreach $key => $value
// $key : 0 => $value : Aurélien
// $key : 1 => $value : Bérénice
// $key : 2 => $value : Ahmed
// $key : 5 => $value : Hang


echo '<h1>CODE PHP</h1>';
//highlight_file(basename(__FILE__)); affiche code pesent sur le classe
echo '<h1>RESULTATS</h1>';
$tab = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo '<h2>affichage tableau complet</h2>';
echo '<pre>';
print_r($tab);
echo '</pre>';
function filtreLesPairs($element)
{
    if ($element % 2 == 0) return true;
    else return false;
}
$tab_filtre = array_filter($tab, "filtreLesPairs");
echo '<h2>affichage des pairs</h2>';
echo '<pre>';
print_r($tab_filtre);
echo '</pre>';

$prix_unitaire = 11.6;
$quantite = 5;
$produit = "clé USB 32 GO";
$prix_total = $quantite * $prix_unitaire;
echo 'bonjour <br>';
echo $quantite . ' ' . $produit . ' : ' . $prix_total.'<br>';


define("CONSTANT", "Bonjour le monde.");
echo CONSTANT; // affiche "Bonjour le monde."
define('ANIMALS', array(
    'chien',
    'chat',
    'oiseaux'
));
echo ANIMALS[2].' '; // affiche "oiseaux"
define('ANIMAL', array(
    'chien' => 'Droopy',
    'chat' => 'Felix',
    'canari' => 'Titi',
));
echo ANIMAL['chien']; // affiche "Droopy"