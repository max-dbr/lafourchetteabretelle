<?php
    $host = 'jean';
    $dbname = 'workshop';
    $user = 'jeanbernard';
    $mdp = 'root';
    try
    {
        $bdd=new PDO("mysql:host=$host;dbname=$dbname", $user, $mdp);
        $bdd->exec("set names utf8");
    }
    catch(Exception $e)
    {
        echo "Erreur de connexion BDD : " . $e;
    }
?>