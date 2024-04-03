<?php

function writeSecretSentence (string $animal,string $something) {
    return $animal . 's\'incline face à ' . $something;
}

$secretSentence= writeSecretSentence('dog','moon');

echo $secretSentence;

?>