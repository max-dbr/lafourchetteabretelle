<?php
 session_start();
    $host = 'localhost';
    $dbname = 'workshop';
    $user = 'root';
    $mdp = 'root';
    $_SESSION['IDPLAT'] = $_POST['IDPLAT'];
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
if(isset($_SESSION['IDPLAT'])) 
{
        $requser = $bdd->prepare("SELECT * FROM `plats` WHERE ID = $_SESSION[IDPLAT]");
        $requser->execute(array($_SESSION['IDPLAT']));
        $user = $requser->fetch();

        if(isset($_POST['newnameplat'])) 
        {
           $newname = htmlspecialchars($_POST['newnameplat']);
           $insertname = $bdd->prepare("UPDATE `plats` SET NOM = ? WHERE ID = $_SESSION[IDPLAT]");
           $insertname->execute(array($newname));
        }
        if(isset($_POST['newprice'])) 
        {
           $newprice = htmlspecialchars($_POST['newprice']);
           $insertprice = $bdd->prepare("UPDATE `plats` SET PRIX = ? WHERE ID = $_SESSION[IDPLAT]");
           $insertprice->execute(array($newprice));
        }
    }
        header('Location: ../index.php?page=carte');
     ?>
