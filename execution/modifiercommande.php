<?php
 session_start();
    $host = 'localhost';
    $dbname = 'workshop';
    $user = 'root';
    $mdp = 'root';
    $STP = $_POST['NOMMODIFICATION'];
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
        $requser = $bdd->prepare("SELECT * FROM `clients` WHERE NOM = ? ");
        $requser->execute(array($_SESSION['IDCOMMANDE']));
        $user = $requser->fetch();

        if(isset($_POST['newnameclient'])) 
        {
           $newname = htmlspecialchars($_POST['newnameclient']);
           $insertname = $bdd->prepare("UPDATE `clients` SET NOM = $newname WHERE ID = ?");
           $insertname->execute(array($newname));
        }
    }
        header('Location: ../index.php?page=lescommandes');
     ?>
