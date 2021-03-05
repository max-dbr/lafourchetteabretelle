<?php
$IDPLAT = $_POST['MODIF'];
$sql = "SELECT * FROM `plats` WHERE ID = $IDPLAT";
$rs  = $bdd->prepare($sql);
$rs->execute(); 
$enrs = $rs->fetch(); 
 ?>

<div align="center">
         <h2>MODIFIER LE PLAT <?php echo $enrs[1]; ?> </h2>
         <br /><br />
         <form method="POST" action="./execution/modifierplat.php">
            <table>
               <tr>
                  <td align="right">
                     <label for="nom">Nom du plat :</label>
                  </td>
                  <td>
                  <input type="HIDDEN" name ="IDPLAT" value="<?php echo $enrs[0]; ?>">
                  <input type="text" name="newnameplat" placeholder="Nouveau Nom" value="<?php echo $enrs[1]; ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="Prix">Prix plat :</label>
                  </td>
                  <td>
                  <input type="text" name="newprice" placeholder="Nouveau prix" value="<?php echo $enrs[3]; ?>" />
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

      

