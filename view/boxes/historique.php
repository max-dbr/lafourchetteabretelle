<?php
$sql = "SELECT * FROM `clients`";
$rs  = $bdd->prepare($sql);
$rs->execute(); 
$enrs = $rs->fetchAll(); 

    ?>
    <h1> Les Ienclis </h1>

<table>
<thead>
                <tr>
                    <th>Civilite</th><br>
                    <th>Nom</th><br>
                    <th>Prenom</th>
                    <th>Code postale</th>
                    <th>Mail</th>

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
<td> <?php echo $array[6]?></td>
<td> <?php echo $array[7]?></td>
<td><form name="form1" method="POST" action="./execution/suppressionproduit.php" class="form"> 
    <input type="hidden" name="IDPRODUIT" value="<?php echo $array[0]?>"> <input type="submit" value="RETIRER"></input> </form></td>
</tr>
<?php
  }
  ?>
</table>