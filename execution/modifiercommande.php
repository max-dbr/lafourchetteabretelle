<?php
 session_start();
    $host = 'localhost';
    $dbname = 'workshop';
    $user = 'root';
    $mdp = 'root';
    $_SESSION['IDCOMMANDE'] = $_POST['IDMODIFICATION'];
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
           $insertname = $bdd->prepare("UPDATE commandes SET NOM = $newname WHERE IDTRANSACTION = $_SESSION[IDCOMMANDE]");
           $insertname->execute(array($newname));
        }
        }
        header('Location: ../index.php?page=lescommandes');
     ?>
