
<?php
if(empty($_SESSION['Mail']))
header('Location: index.php?page=login');
?>
<?php
$SESSION['IDPRODUIT'] = $_POST['IDPRODUIT'];

$sql = "SELECT * FROM `plats` WHERE ID = $SESSION[IDPRODUIT] ";
    $rs  = $bdd->prepare($sql);
    $rs->execute(); 
    $enr = $rs->fetchAll();

    ?>
<h1>DETAILS COMMANDE</h1>
<?php
        // ICI : FAIRE VOTRE FOREACH POUR L'AFFICHAGE
        foreach($enr as $array)
    
        { 
            ?>
    
  <form class="forme" method="POST" action="execution/validationcommande.php">
<img src="<?= $array[2];?>" height="150" width="300" />
<div><?= $array[1];?></div>
<div><?= $array[3];?> €</div>
<input type="HIDDEN" name ="NOMPLAT" value="<?php echo $array[1]; ?>">
<input type="HIDDEN" name ="PRIXPLAT" value="<?php echo $array[3]; ?>">
<label for="VILLE">Votre restaurant:</label>
<select name="VILLE" id="Ville">
    <option value="">--Choisissez--</option>
    <option value="BREST">BREST</option>
    <option value="LYON">LYON</option>
</select>
  
<label for="LIVRAISON">Un moyen:</label>
<select name="LIVRAISON" id="Livraison">
    <option value="">--Choisissez--</option>
    <option value="Livraison">Livraison</option>
    <option value="Emporté">Emporté</option>
</select>
<label for="PAIEMENT">Paiement:</label>
<select name="PAIEMENT" id="Paiement">
    <option value="">--Choisissez--</option>
    <option value="ESPECE">ESPECES</option>
    <option value="CB">PAR CB</option>
</select>
<label for="QUANTITE">QUANTITE :</label>
 <input type="number" name="QUANTITE" max="10" min="1" required>
			<button>JE VALIDE MA COMMANDE</button>
<?php
$Fid = $array[3]/10;
?>
<div> Grâce a cette commande vous gagnez <?= $Fid ?> points de fidélités </div>
<div> Beneficiez de 15% sur votre commande à 150 points </div>

<?php
}
?>

