<?php
$sql = "SELECT * FROM `commandes`";
$rs  = $bdd->prepare($sql);
$rs->execute(); 
$enrs = $rs->fetchAll(); 

    ?>
    <h1> TOUTES LES COMMANDES </h1>

<table>
<thead>
                <tr>
                    <th>NOM</th><br>
                    <th>ADRESSE</th><br>
                    <th>TEL</th><br>
                    <th>PRODUIT</th><br>
                    <th>QUANTITE</th><br>
                    <th>MOYEN</th><br>
                    <th>PRIX PAYE</th><br>
                    <th>DATE</th><br>


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
<td> <?php echo $array[4]?></td>
<td> <?php echo $array[5]?></td>
<td> <?php echo $array[7]?></td>
<td> <?php echo $array[6]?> €</td>
<td> <?php echo $array[9]?></td>
<td><form name="form1" method="POST" action="./execution/suppressioncommande.php" class="forme"> 
    <input type="hidden" name="IDANNULATION" value="<?php echo $array[0]?>"> <input type="submit" value="ANNULER"></input> </form></td>
<td><form name="form1" method="POST" action="./index.php?page=modifiercommande" class="forme"> 
    <input type="hidden" name="IDMODIFICATION" value="<?php echo $array[0]?>"> <input type="submit" value="MODIFIER"></input> </form></td>

</tr>
<?php
  }
  ?>
</table>