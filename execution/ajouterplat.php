<?php
$connection=mysqli_connect("localhost", "root", "root", "workshop");
$Nom=$_POST['Nomplat'];
$Image=$_POST['Imageplat'];
$Prix=$_POST['Prixplat'];
$Composition=$_POST['Composition'];
$Type=$_POST['Service'];


$sql = "INSERT INTO `plats`(`NOM`, `IMAGE`, `PRIX`, `DESCRIPTION`, `TYPE`) VALUES ('$Nom','$Image',$Prix,'$Composition','$Type')";
    mysqli_query($connection, $sql);
    header('Location: ../index.php?page=carte');


?>