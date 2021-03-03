<?php
$sql = "SELECT * FROM `restaurants`";
$rs  = $bdd->prepare($sql);
$rs->execute(); 
$enrs = $rs->fetchAll(); 

    ?>
    <h1> Mes restaurants </h1>

<table>
<thead>
                <tr>
                    <th>Ville</th><br>
                    <th>Adresse</th><br>
                    <th>Nombre tables</th>
                    <th>Telephone</th>
                    <th>Situation</th>

                </tr>
            </thead>

<?php
  foreach($enrs as $array)
  {
      ?>
<tr>
<td> <?php echo $array[1]?></td>
<td> <?php echo $array[2]?></td>
<td> <?php echo $array[3]?></td>
<td> <?php echo $array[5]?></td>
<td> <?php echo $array[4]?></td>
<td><form name="form1" method="POST" action="./execution/suppressionrestaurant.php" class="form"> 
    <input type="hidden" name="IDRESTAURANT" value="<?php echo $array[0]?>"> <input type="submit" value="SUPPRIMER"></input> </form></td>
<td><form name="form1" method="POST" action="./view/boxes/modifierrestaurant.php" class="form"> 
    <input type="hidden" name="IDRESTAURANT" value="<?php echo $array[0]?>"> <input type="submit" value="MODIFIER"></input> </form></td>

<?php
$Situation = "";
if ($array[4] == "FERMER")
{
    $Situation = "OUVRIR";
}
else
{
    $Situation = "FERMER";
}
?>
<td><form name="form1" method="POST" action="./execution/suppressionrestaurant.php" class="form"> 
    <input type="hidden" name="IDRESTAURANT" value="<?php echo $array[0]?>"> <input type="submit" value="<?php echo $Situation?>"></input> </form></td>

</tr>
<?php
  }
  ?>
</table>
<form method="POST" action="./execution/ajoutrestaurant.php">
 <fieldset>
 <legend>Ajouter un restaurant</legend>
 <label for="ville">Ville :</label>
 <input type="text" name="Ville" required>
 
 <label for="adresse">Adresse :</label>
 <input type="text" name="Adresse" required><br><br>

 <label for="Tel">Tel :</label>
 <input type="text" name="Tel" required><br><br>
 
 <label for="nbrTables">Nombre de tables :</label>
 <input type="number" name="Tables" max="10" min="1" required>
 <button type="submit">Ajouter</button>
 </fieldset>
 </form>