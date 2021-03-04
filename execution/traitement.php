<?php
$connection=mysqli_connect("localhost", "root", "root", "workshop");
$Civilite=$_POST['Civilite'];
$Nom=$_POST['Nom'];
$Prenom=$_POST['Prenom'];
$Tel=$_POST['Tel'];
$Adresse=$_POST['Adresse'];
$Mail=$_POST['Mail'];
$Passe=$_POST['Passe'];


$sql = "INSERT INTO `clients`(`SEXE`, `NOM`, `PRENOM`, `TEL`, `ADRESSE`,`ADRESSEMAIL`, `MOTDEPASSE`) VALUES ('$Civilite','$Nom','$Prenom','$Tel','$Adresse','$Mail','$Passe')";
    mysqli_query($connection, $sql);
    header('Location: ../index.php?page=login');


?>