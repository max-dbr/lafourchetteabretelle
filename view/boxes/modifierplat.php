<?php
$IDAMODIFE = $_POST['MODIF'];
   $requser = $bdd->prepare("SELECT * FROM plats WHERE ID = $IDAMODIFE");
   $requser->execute(array());
   $user = $requser->fetch();

   ?>

<div align="center">
         <h2>MODIFIER LE PLAT</h2>
         <br /><br />
         <form method="POST" action="./execution/modifier.php">
            <table>
               <tr>
                  <td align="right">
                     <label for="nom">Nom :</label>
                  </td>
                  <td>
                  <input type="text" name="newplat" placeholder="Nouveau Nom" value="<?php echo $user[1]; ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="tel">Prix :</label>
                  </td>
                  <td>
                  <input type="number" name="newpice" placeholder="Nouveau prix" value="<?php echo $user[3]; ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="Composition">Composition :</label>
                  </td>
                  <td>
                  <input type="text" name="newcomposition" placeholder="Nouvelle composition" value="<?php echo $user[4]; ?>" />
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

      

