
<?php
$IDRMODIF = $_POST['MODIFRESTAURANT'];
$sql = "SELECT * FROM `restaurants` WHERE ID = $IDRMODIF";
$rs  = $bdd->prepare($sql);
$rs->execute(); 
$enrs = $rs->fetch(); 
 ?>

<div align="center">
         <h2>MODIFIER MES INFORMATIONS</h2>
         <br /><br />
         <form method="POST" action="./execution/modifier.php">
            <table>
               <tr>
                  <td align="right">
                     <label for="Ville">Ville :</label>
                  </td>
                  <td>
                  <input type="text" name="newville" placeholder="Nouvelles ville" value="<?php echo $enrs[1]; ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="Adresse">Adresse :</label>
                  </td>
                  <td>
                  <input type="text" name="newadresse" placeholder="Nouvelles adresse" value="<?php echo $enrs[2]; ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="Tel">Tel :</label>
                  </td>
                  <td>
                  <input type="text" name="newtel" placeholder="Nouveau tel" value="<?php echo $enrs[5]; ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="Table">Nombre de tables :</label>
                  </td>
                  <td>
                  <input type="text" name="newtables" placeholder="Nombre de tables" value="<?php echo $enrs[3]; ?>" />
                  </td>
               </tr>
                  <td align="right">
                     <br />
                     <input type="submit" value="Mettre à jour mon profil !" />
                  </td>
               </tr>
            </table>
        </form>
      </div>

      

