<?php
session_start();
$connection=mysqli_connect("localhost", "root", "root", "workshop");
$Livraison = $_POST['Livraison'];
$Quantite =$_POST['Quantite'];
$Nom = $_SESSION['NOM'];
$Adresse = $_SESSION['ADRESSE'];
$Tel = $_SESSION['TEL'];


$sql = "INSERT INTO `commandes`(`NOM`, `ADRESSE`, `TEL`,`NOMPRODUIT`, `QUANTITE`,`MOYEN`) VALUES ('$Nom','$Adresse','$Tel','$_SESSION[NOMPRODUIT]',$Quantite,'$Livraison')";
    mysqli_query($connection, $sql);
    header('Location: ../index.php');


?>