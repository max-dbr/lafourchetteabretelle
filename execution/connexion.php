<?php

session_start();

$host = 'localhost';
$dbname = 'workshop';
$user = 'root';
$mdp = 'root';
try
{
    $bdd=new PDO("mysql:host=$host;dbname=$dbname", $user, $mdp);
    $bdd->exec("set names utf8");
}
catch(Exception $e)
{
    echo "Erreur de connexion BDD : " . $e;
}
if(isset($_POST['connexion'])) { // si le bouton "Connexion" est appuyé
    // je vérifie que le champ "Pseudo" n'est pas vide
    // empty vérifie à la fois si le champ est vide et si le champ existe belle et bien
 
            $Mail = ($_POST['Mail']);
            $Passe = ($_POST['Passe']);
            //je me connecte à la base de données:
                // on fait maintenant la requête dans la base de données pour rechercher si ces données existe et correspondent:
                $sql="SELECT * FROM clients WHERE ADRESSEMAIL = '".$Mail."' AND MOTDEPASSE = '".$Passe."'";//si vous avez enregistré le mot de passe en md5() il vous suffira de faire la vérification en mettant mdp = '".md5($MotDePasse)."' au lieu de mdp = '".$MotDePasse."'
                $rs=$bdd->prepare($sql);
                $rs->bindParam(":Mail", $Mail);
                $rs->bindParam(":Passe", $Passe);
                $rs->execute();
                $enr=$rs->fetch();
                
                if (count($enr) == 1){
                    echo "not good";
                } else {
                    session_start();
                    $_SESSION['Mail'] = $Mail;
                    $_SESSION['ID'] = $enr['ID'];
                    $_SESSION['NOM'] = $enr['NOM'];
                    $_SESSION['PRENOM'] = $enr['PRENOM'];
                    $_SESSION['FIDELITE'] = $enr['FIDELITE'];
                    $_SESSION['ADRESSE'] = $enr['ADRESSE'];
                    $_SESSION['TEL'] = $enr['TEL'];


                
                    header('Location: ../index.php');
                }
            }
        
      
?>