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
                  <input type="HIDDEN" name ="NOMMODIFICATION" value="<?php echo $enrs[1]; ?>">
                  <input type="text" name="newnameclient" placeholder="Nouveau Nom" value="<?php echo $enrs[1]; ?>" />
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

      

