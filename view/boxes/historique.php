<?php
$sql = "SELECT * FROM `commandes`";
$rs  = $bdd->prepare($sql);
$rs->execute(); 
$enrs = $rs->fetchAll(); 

    ?>
    <h1> MON HISTORIQUE </h1>

<table>
<thead>
                <tr>
                    <th>QUANTITE</th><br>
                    <th>MOYEN</th><br>


                </tr>
            </thead>

<?php
  foreach($enrs as $array)
  {
      ?>
<tr>
<td> <?php echo $array[5]?></td>
<td> <?php echo $array[7]?></td>

</tr>
<?php
  }
  ?>
</table>