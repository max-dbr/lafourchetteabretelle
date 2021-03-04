<?php
session_start();
$connection=mysqli_connect("localhost", "root", "root", "workshop");
$Livraison = $_POST['LIVRAISON'];
$Quantite =$_POST['QUANTITE'];
$Nom = $_SESSION['NOM'];
$Adresse = $_SESSION['ADRESSE'];
$Tel = $_SESSION['TEL'];
$Nomplat = $_POST['NOMPLAT'];
$Ville = $_POST['VILLE'];
$Prixplat = $_POST['PRIXPLAT'];
$Prixtotal = $Quantite * $Prixplat; 



$sql = "INSERT INTO `commandes`(`NOM`, `ADRESSE`, `TEL`, `NOMPRODUIT`, `QUANTITE`,`PRIXPAYE`,`MOYEN`, `VILLE`, `MOMENT`) VALUES ('$Nom','$Adresse','$Tel','$Nomplat',$Quantite,$Prixtotal,'$Livraison','$Ville',now())";
mysqli_query($connection, $sql);
    header('Location: ../index.php?page=gestion');


?>