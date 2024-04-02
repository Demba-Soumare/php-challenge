<?php

$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.
echo 'arme adverse: ' . $opponentWeapon . "<br>";

if ($opponentWeapon=='fists') {
    $stevensonWeapon='gun';
    echo 'arme de Stevenson : ' . $stevensonWeapon;
} elseif ($opponentWeapon=='whip') {
    $stevensonWeapon='fists';
    echo 'arme de Stevenson: ' . $stevensonWeapon;
} elseif ($opponentWeapon=='gun') {
    $stevensonWeapon='whip';
    echo 'arme de Stevenson : ' . $stevensonWeapon;
}




?>