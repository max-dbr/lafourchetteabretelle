<?php
$connection=mysqli_connect("localhost", "root", "root", "bdd_equipier");
$ID=$_POST['ID'];
$SupprimerSQL=mysqli_query($connection, "DELETE FROM utilisateur WHERE ID=$ID");

if(!$SupprimerSQL){
    echo "<p class='alert alert-danger'>L'OBJET n'a pas été supprimé</p>";
}
else {
    session_start();
    session_destroy();
    header('Location: ../index.php');
    exit;
}
?>