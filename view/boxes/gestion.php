<?php
if (($_SESSION['ROLE'] == 1) || ($_SESSION['ROLE'] == 0))
{
?>

<form method ="POST" action="./index.php?page=profil">
<input type="submit" name="Modifier" value="MODIFIER MES INFOS" >
</form>
<form method ="POST" action="./index.php?page=historique">
<input type="submit" name="Historique" value="MES COMMANDES" >
</form>
<?php
}
else
{
header('Location: index.php?page=login');
}

?>
