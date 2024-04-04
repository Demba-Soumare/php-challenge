<?php
$_POST['user_name'];
$_POST['subject'];
$_POST['user_mail'];
$_POST['user_tel'];
echo "merci Mr " . $_POST ['user_name'] . " de nous avoir contacté à propos de " . $_POST ['sujet'] . "<br>" . 
"un de nos conseillers vous contactera soit à l'adresse " .$_POST['user_mail'] . " ou par telephone au " . $_POST['user_tel'] . "<br>" .
"dans les plus brefs délais pour traiter votre demande : " . "<br>" .
$_POST['user_message'];










?>