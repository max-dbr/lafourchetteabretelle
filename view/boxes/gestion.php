
<div id="compte">
    <h2>Mon Compte</h2>
    <br>
    <span>Bienvenue <?php echo $_SESSION['PRENOM'], " " , $_SESSION['NOM'] ?></span>
    <br><br><br>
    <span>Vous avez <?php echo $_SESSION['FIDELITE'] ?> points</span>
    <br>
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
    </div><br>
    <span>Tous les 1000 points, recevez une remise de 5€ sur votre prochaine commande</span>
</div>

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
