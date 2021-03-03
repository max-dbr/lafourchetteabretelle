<?php session_start(); ?>
<?php
if(isset($_SESSION['Pseudo'])) {
   $requser = $bdd->prepare("SELECT * FROM utilisateur WHERE PSEUDO = ?");
   $requser->execute(array($_SESSION['Pseudo']));
   $user = $requser->fetch();
}
   ?>

<div align="center">
         <h1>QUI VEUT GAGNER DES €</h1>
         <br />
         <p> Le but est simple</p>
         <br/>
         <p> Chaque jours les membres auront accées a un quizz différent</p><br>
         <p> Répondez correctement et vous gagnerez 10€ </p><br>
         <p> Donnez une mauvaise réponse et vous perdez 15€ </p><br>
         <p> Ou choisissez la sécurité et ne jouez pas </p>
         <br/>
         <p> MAIS QUI NE TENTE RIEN, N'A RIEN !!</P>
         <form method="POST" action="./execution/quizz.php">
            <table>
               <tr>
                  <td align="center">
                     <label for="quizz">La souris mange le fromage, le chat mange la souris. Qui reste-t-il ? :</label>
                  </td>
                  <td>
                  <input type="text" name="reponse" placeholder="Votre réponse" value="" />
                  </td>
               </tr>
               <td align="center">
                     <label for="quizz">Sans couvercle, serrure ou charnière je renferme pourtant un trésor doré...
Qui suis-je ? :</label>
                  </td>
                  <td>
                  <input type="text" name="reponse2" placeholder="Votre réponse" value="" />
                  </td>
               </tr>
                  <td align="center">
                     <br />
                     <input type="submit" value="C'est mon dernier mot Jean-Abdel" />
                  </td>
            </table>
        </form>
      </div>