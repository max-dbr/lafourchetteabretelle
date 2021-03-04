<?php
$connection=mysqli_connect("localhost", "root", "root", "workshop");
$IDCOMMANDE=$_POST['IDANNULATION'];
$SupprimerSQL=mysqli_query($connection, "DELETE FROM `commandes` WHERE IDTRANSACTION=$IDCOMMANDE");

if(!$SupprimerSQL){
    echo "<p class='alert alert-danger'>L'OBJET n'a pas été supprimé</p>";
}
else {
    session_start();
    header('Location: ../index.php?page=lescommandes');
    exit;
}
?>