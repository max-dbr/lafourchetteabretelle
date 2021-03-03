<?php
$connection=mysqli_connect("localhost", "root", "root", "workshop");
$IDP=$_POST['IDRESTAURANT'];
$SupprimerSQL=mysqli_query($connection, "DELETE FROM `restaurants` WHERE ID=$IDP");

if(!$SupprimerSQL){
    echo "<p class='alert alert-danger'>L'OBJET n'a pas été supprimé</p>";
}
else {
    header('Location: /index.php?page=restaurants');
}
?>