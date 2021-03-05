<?php
 session_start();
    $host = 'localhost';
    $dbname = 'workshop';
    $user = 'root';
    $mdp = 'root';
    $_SESSION['IDCOMMANDE'] = $_POST['IDCOMMANDE'];
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
if(isset($_SESSION['IDCOMMANDE'])) 
{
        $requser = $bdd->prepare("SELECT * FROM `commandes` WHERE IDTRANSACTION = $_SESSION[IDCOMMANDE]");
        $requser->execute(array($_SESSION['IDCOMMANDE']));
        $user = $requser->fetch();

        if(isset($_POST['newnameclient'])) 
        {
           $newname = htmlspecialchars($_POST['newnameclient']);
           $insertname = $bdd->prepare("UPDATE `commandes` SET NOM = ? WHERE IDTRANSACTION = $_SESSION[IDCOMMANDE]");
           $insertname->execute(array($newname));
        }
        if(isset($_POST['newadresseclient'])) 
        {
           $newadresse = htmlspecialchars($_POST['newadresseclient']);
           $insertadresse = $bdd->prepare("UPDATE `commandes` SET ADRESSE = ? WHERE IDTRANSACTION = $_SESSION[IDCOMMANDE]");
           $insertadresse->execute(array($newadresse));
        }
        if(isset($_POST['newquantiteclient'])) 
        {
           $newquantite = htmlspecialchars($_POST['newquantiteclient']);
           $insertquantite = $bdd->prepare("UPDATE `commandes` SET QUANTITE = ? WHERE IDTRANSACTION = $_SESSION[IDCOMMANDE]");
           $insertquantite->execute(array($newquantite));
        }
        if(isset($_POST['newmoyenclient'])) 
        {
           $newmoyen = htmlspecialchars($_POST['newmoyenclient']);
           $insertmoyen = $bdd->prepare("UPDATE `commandes` SET MOYEN = ? WHERE IDTRANSACTION = $_SESSION[IDCOMMANDE]");
           $insertmoyen->execute(array($newmoyen));
        }
    }
        header('Location: ../index.php?page=lescommandes');
     ?>
