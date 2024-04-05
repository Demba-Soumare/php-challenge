<?php

function verifiedfillfield($fields) {
    $emptyFields = [];

    foreach ($fields as $field) {
        if (empty(trim($_POST[$field]))) {
            
            // Ajoute le nom du champ vide à la liste
            $emptyFields[] = $field;
        }
    }
return $emptyFields;}


// Liste des champs à vérifier
$verifiedFields = ['user_name', 'user_mail', 'user_tel','user_message'];

// Appelle la fonction et stocke les champs vides retournés, s'il y en a
$emptyFields = verifiedfillfield($verifiedFields);

if (empty($emptyFields)) {

    // Tous les champs sont remplis, affiche le message :
echo "merci Mr " . $_POST ['user_name'] . " de nous avoir contacté à propos de " . $_POST ['sujet'] . "<br>" . 
"un de nos conseillers vous contactera soit à l'adresse " .$_POST['user_mail'] . " ou par telephone au " . $_POST['user_tel'] . "<br>" .
"dans les plus brefs délais pour traiter votre demande : " . "<br>" .
$_POST['user_message'];

} else {
    // Certains champs sont vides
    echo "Les champs suivants doivent être remplis : " . implode(', ', $emptyFields);
}


?>