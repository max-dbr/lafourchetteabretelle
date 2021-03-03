<?php
	session_start();
 
    $host = 'localhost';
    $dbname = 'bdd_equipier';
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
?>
<?php
    if(isset($_SESSION['Pseudo'])) 
    {
        $requser = $bdd->prepare("SELECT * FROM utilisateur WHERE PSEUDO = ?");
        $requser->execute(array($_SESSION['Pseudo']));
        $user = $requser->fetch();
        if(($_POST['reponse'] == "le chat") && ($_POST['reponse2'] == "un oeuf"))
        {
           $solde = (($_POST['reponse'])&& ($_POST['reponse2']));
           $insertsolde = $bdd->prepare("UPDATE utilisateur SET SOLDE = SOLDE +10 WHERE PSEUDO = ?");
           $insertsolde->execute(array($_SESSION['Pseudo']));
        }
        else 
        {
            $solde = (($_POST['reponse']) && ($_POST['reponse2']));
           $insertsolde = $bdd->prepare("UPDATE utilisateur SET SOLDE = SOLDE -15 WHERE PSEUDO = ?");
           $insertsolde->execute(array($_SESSION['Pseudo']));
        }

        }
        header('Location: ../index.php');
     ?>


