<?php
$connection=mysqli_connect("localhost", "root", "root", "workshop");
$Ville=$_POST['Ville'];
$Adresse=$_POST['Adresse'];
$Tables=$_POST['Tables'];
$Telephone=$_POST['Tel'];
$Image=$_POST['Image'];


$sql = "INSERT INTO `restaurants`(`VILLE`, `ADRESSE`, `NOMBRETABLES`,`TEL`,`IMAGE`) VALUES ('$Ville','$Adresse',$Tables,'$Telephone','$Image')";
    mysqli_query($connection, $sql);
    header('Location: ../index.php?page=restaurants');


?>