<?php
$IDCOMMANDE = $_POST['IDMODIFICATION'];
$sql = "SELECT * FROM `commandes` WHERE IDTRANSACTION = $IDCOMMANDE";
$rs  = $bdd->prepare($sql);
$rs->execute(); 
$enrs = $rs->fetch(); 
 ?>

<div align="center">
         <h2>MODIFIER LA COMMANDE DE <?php echo $enrs[1]; ?> </h2>
         <br /><br />
         <form method="POST" action="./execution/modifiercommande.php">
            <table>
               <tr>
                  <td align="right">
                     <label for="nom">Nom client :</label>
                  </td>
                  <td>
                  <input type="HIDDEN" name ="IDCOMMANDE" value="<?php echo $enrs[0]; ?>">
                  <input type="text" name="newnameclient" placeholder="Nouveau Nom" value="<?php echo $enrs[1]; ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="Adresse">Adresse client :</label>
                  </td>
                  <td>
                  <input type="text" name="newadresseclient" placeholder="Nouvelle quantite" value="<?php echo $enrs[2]; ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="quantite">Quantite :</label>
                  </td>
                  <td>
                  <input type="text" name="newquantiteclient" placeholder="Nouvelle quantite" value="<?php echo $enrs[5]; ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="Moyen">Moyen :</label>
                  </td>
                  <td>
                  <input type="text" name="newmoyenclient" placeholder="Nouveau moyen" value="<?php echo $enrs[7]; ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <br />
                     <input type="submit" value="Valider la modification !" />
                  </td>
               </tr>
            </table>
        </form>
      </div>

      

