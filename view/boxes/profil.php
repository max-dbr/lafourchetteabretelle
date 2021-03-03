<?php
if(isset($_SESSION['Mail'])) {
   $requser = $bdd->prepare("SELECT * FROM clients WHERE ADRESSEMAIL = ?");
   $requser->execute(array($_SESSION['Mail']));
   $user = $requser->fetch();
}
   ?>

<div align="center">
         <h2>MODIFIER MES INFORMATIONS</h2>
         <br /><br />
         <form method="POST" action="./execution/modifier.php">
            <table>
               <tr>
                  <td align="right">
                     <label for="nom">Adresse :</label>
                  </td>
                  <td>
                  <input type="text" name="newadresse" placeholder="Nouvelles adresse" value="<?php echo $user[5]; ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="tel">Telephone :</label>
                  </td>
                  <td>
                  <input type="text" name="newphone" placeholder="Nouveau numéro" value="<?php echo $user[4]; ?>" />
                  </td>
               </tr>
                  <td align="right">
                     <label for="mail">Mail</label>
                  </td>
                  <td>
                  <input type="text" name="newmail" placeholder="Mail" value="<?php echo $user[6]; ?>" />
                  </td>
               </tr>
               </tr>
                  <td align="right">
                     <label for="passe">Mot de passe</label>
                  </td>
                  <td>
                  <input type="text" name="newpasse" placeholder="Passe" value="<?php echo $user[7]; ?>" />
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

      

