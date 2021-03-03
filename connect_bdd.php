<?php
    $host = 'localhost';
    $dbname = 'workshop';
    $user = 'root';
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