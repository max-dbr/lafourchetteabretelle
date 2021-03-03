
<?php
$ID = $_POST['IDRESTAURANT'];
$sql = "SELECT * FROM `restaurants` WHERE ID = $ID";
$rs  = $bdd->prepare($sql);
$rs->execute(); 
$enrs = $rs->fetchAll(); 
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
                  <td align="right">
                     <br />
                     <input type="submit" value="Mettre à jour mon profil !" />
                  </td>
               </tr>
            </table>
        </form>
      </div>

      

