<?php
   $IDCOMMANDE = $_POST['IDCOMMANDE'];
   $requser = $bdd->prepare("SELECT * FROM `commandes` WHERE IDTRANSACTION = $IDCOMMANDE");
   $requser->execute(array());
   $user = $requser->fetch();

   ?>

<div align="center">
         <h2>MODIFIER LA COMMANDE DE <?php echo $user[1]; ?> </h2>
         <br /><br />
         <input type="HIDDEN" name ="IDCOMMANDE" value="<?php echo $user[0]; ?>">
         <form method="POST" action="./execution/modifiercommande.php">
            <table>
               <tr>
                  <td align="right">
                     <label for="nom">Nom client :</label>
                  </td>
                  <td>
                  <input type="text" name="newnameclient" placeholder="Nouveau Nom" value="<?php echo $user[1]; ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="tel">Quantite commandé :</label>
                  </td>
                  <td>
                  <input type="number" name="newquantite" placeholder="Nouveau prix" value="<?php echo $user[5]; ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="Moyen">Moyen :</label>
                  </td>
                  <td>
                  <input type="text" name="newmoyen" placeholder="Nouvelle composition" value="<?php echo $user[7]; ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="Adresse">Adresse :</label>
                  </td>
                  <td>
                  <input type="text" name="newadressecommande" placeholder="Nouvelle composition" value="<?php echo $user[2]; ?>" />
                  </td>
               </tr>
                  <td align="right">
                     <br />
                     <input type="submit" value="Valider la modification !" />
                  </td>
               </tr>
            </table>
        </form>
      </div>

      

