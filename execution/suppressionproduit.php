<?php
$connection=mysqli_connect("localhost", "root", "root", "workshop");
$IDPD=$_POST['IDPD'];
$SupprimerSQL=mysqli_query($connection, "DELETE FROM `plats` WHERE ID=$IDPD");

if(!$SupprimerSQL){
    echo "<p class='alert alert-danger'>L'OBJET n'a pas été supprimé</p>";
}
else {
    header('Location: ../index.php?page=carte');
}
?>