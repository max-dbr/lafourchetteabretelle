<html>
   <head>
      <title>Nous rejoindre</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Inscription</h2>
         <br /><br />
         <form method="POST" action="./execution/traitement.php">
            <table>
            <tr>
                  <td align="right">
                     <label for="nom">Civilité :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Mr ou Mme ou Mlle" id="Civilite" name="Civilite" value=""/>
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="nom">Nom :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre nom" id="Nom" name="Nom" value=""/>
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="nom">Prenom :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre prenom" id="Prenom" name="Prenom" value=""/>
                  </td>
               </tr>
                  <td align="right">
                     <label for="passe">Telephone:</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre numéro" id="Tel" name="Tel" value="" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="nom">Adresse :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre adresse" id="Adresse" name="Adresse" value=""/>
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="nom">Code postale :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre code postale" id="Codepostale" name="Codepostale" value=""/>
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mail">Adresse mail:</label>
                  </td>
                  <td>
                     <input type="email" placeholder="Votre mail" id="Mail" name="Mail" value="" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="photos">Mot de passe :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votremdp" id="Passe" name="Passe" />
                  </td>
               </tr>
               <tr>
                  <td></td>
                  <td align="center">
                     <br />
                     <input type="checkbox" name="conditions" value="ok" checked="checked" /> J'accepte les conditions.
                  </td>
               </tr>
               <tr>
                  <td></td>
                  <td align="center">
                     <br />
                     <input type="submit" name="forminscription" value="Je m'inscris" />
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