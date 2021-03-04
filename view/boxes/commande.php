
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
        echo $SESSION['NOMPRODUIT'];
    
        { 
            ?>
    
  <form class="forme" method="POST" action="execution/validationcommande.php">
<img src="<?= $array[2];?>" height="150" width="300" />
<div><?= $array[3];?></div>
<div><?= $array[5];?></div><br>
  
<label for="Livraison">Un moyen:</label>
<select name="Livraison" id="Livraison">
    <option value="">--Choisissez--</option>
    <option value="Livraison">Livraison</option>
    <option value="Emporté">Emporté</option>
</select>
<label for="Paiement">Paiement:</label>
<select name="Paiement" id="Paiement">
    <option value="">--Choisissez--</option>
    <option value="ESPECE">ESPECES</option>
    <option value="CB">PAR CB</option>
</select>
<label for="Quantite">QUANTITE :</label>
 <input type="number" name="Quantite" max="10" min="1" required>
			<button>JE VALIDE MA COMMANDE</button>
<?php
$Fid = $array[3]/10;
?>
<div> Grâce a cette commande vous gagnez <?= $Fid ?> points de fidélités </div>
<div> Beneficiez de 15% sur votre commande à 150 points </div>

<?php
}
?>

