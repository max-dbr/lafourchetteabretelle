
<?php
if(isset($_SESSION['Pseudo'])) {
   $requser = $bdd->prepare("SELECT * FROM utilisateur WHERE PSEUDO = ?");
   $requser->execute(array($_SESSION['Pseudo']));
   $user = $requser->fetch();
}
   ?>
<html>
   <head>
      <title>Ajouts plats</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Nouveau plat</h2>
         <br /><br />
         <form method="POST" action="./execution/vente.php">
            <table>

                  <td align="right">
                     <label for="nom">Nom:</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Le nom du produit" id="Nomplat" name="Nomplat" value=""/>
                  </td>
               </tr>
                  <td align="right">
                     <label for="image">Image:</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Image produit" id="Imageplat" name="Imageplat" value="" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="prix">Prix:</label>
                  </td>
                  <td>
                     <input type="number" placeholder="Prix" id="Prix" name="Prix" value="" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="quantite">Quantite:</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Quantite" id="Quantite" name="Quantite" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="quantite">Description:</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Description" id="Description" name="" />
                  </td>
               </tr>
                  <td></td>
                  <td align="center">
                     <br />
                     <input type="submit" name="forminscription" value="JE METS EN VENTE" />
                  </td>
               </tr>
            </table>
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
      </div>
   </body>
</html>