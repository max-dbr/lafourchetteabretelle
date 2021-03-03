<?php
$connection=mysqli_connect("localhost", "root", "root", "workshop");
$Ville=$_POST['Ville'];
$Adresse=$_POST['Adresse'];
$Tables=$_POST['Tables'];
$Telephone=$_POST['Tel'];


$sql = "INSERT INTO `restaurants`(`VILLE`, `ADRESSE`, `NOMBRETABLES`,`TEL`) VALUES ('$Ville','$Adresse',$Tables,'$Telephone')";
    mysqli_query($connection, $sql);
    header('Location: /index.php?page=restaurants');


?>