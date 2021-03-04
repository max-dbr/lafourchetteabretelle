<?php
 
    $host = 'localhost';
    $dbname = 'workshop';
    $user = 'root';
    $mdp = 'root';
    $_POST['IDCOMMANDE']  = $_SESSION['IDCOMMANDE'];

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
        $requser = $bdd->prepare("SELECT * FROM commandes WHERE IDTRANSACTION = $_SESSION[IDCOMMANDE]");
        $requser->execute(array($_SESSION['IDCOMMANDE']));
        $user = $requser->fetch();

        if(isset($_POST['newnameclient'])) 
        {
           $newnameclient = htmlspecialchars($_POST['newnameclient']);
           $insertnewnameclient = $bdd->prepare("UPDATE commandes SET NOM = ? WHERE IDTRANSACTION = $IDCOMMANDE");
           $insertnewnameclient->execute(array($newnameclient));
        }
        if(isset($_POST['newquantite']) ) 
        {
           $newquantite = htmlspecialchars($_POST['newquantite']);
           $insertnewquantite = $bdd->prepare("UPDATE commandes SET QUANTITE = ? WHERE IDTRANSACTION = $IDCOMMANDE");
           $insertnewquantite->execute(array($newquantite));
        }
        if(isset($_POST['newmoyen']) ) 
        {
           $newmoyen= htmlspecialchars($_POST['newmoyen']);
           $insertnewmoyen = $bdd->prepare("UPDATE commandes SET MOYEN = ? WHERE IDTRANSACTION = $IDCOMMANDE");
           $insertnewmoyen->execute(array($newmoyen));
        }
        if(isset($_POST['newadressecommande']) ) 
        {
           $newadressecommande = htmlspecialchars($_POST['newadressecommande']);
           $insertnewadressecommande = $bdd->prepare("UPDATE commandes SET ADRESSE = ? WHERE IDTRANSACTION = $IDCOMMANDE");
           $insertnewadressecommande->execute(array($newadressecommande));
        }
        }
        header('Location: ../index.php?page=lescommandes');
     ?>
