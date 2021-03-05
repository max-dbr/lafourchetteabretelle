<?php
$NOM = $_SESSION['NOM'];
$sql = "SELECT * FROM `commandes` WHERE NOM = '$_SESSION[NOM]' ";
$rs  = $bdd->prepare($sql);
$rs->execute(); 
$enrs = $rs->fetchAll(); 

    ?>
    <div class="historique">
      <h2>MON HISTORIQUE </h2>
    </div>

<table>
<thead>
                <tr>
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
<td> <?php echo $array[4]?></td>
<td> <?php echo $array[5]?></td>
<td> <?php echo $array[7]?></td>
<td> <?php echo $array[6]?> €</td>
<td> <?php echo $array[9]?></td>

</tr>
<?php
  }
  ?>
</table>