<?php
	session_start();
 
    $host = 'localhost';
    $dbname = 'workshop';
    $user = 'root';
    $mdp = 'root';
    $IDRMODIF = $_POST['MODIFRESTAURANT']
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
    if(isset($_SESSION['Mail'])) 
    {
        $requser = $bdd->prepare("SELECT * FROM restaurants WHERE ID = $IDRMODIF");
        $requser->execute(array($_SESSION['Mail']));
        $user = $requser->fetch();

        if(isset($_POST['newville'])) 
        {
           $newville = htmlspecialchars($_POST['newville']);
           $insertville = $bdd->prepare("UPDATE restaurants SET VILLE = ? WHERE ID = $IDRMODIF");
           $insertville->execute(array($newville, $_SESSION['Mail']));
        }
        if(isset($_POST['newadresse']) ) 
        {
           $newadresse = htmlspecialchars($_POST['newadresse']);
           $insertadresse = $bdd->prepare("UPDATE restaurants SET ADRESSE = ? WHERE ID = $IDRMODIF");
           $insertadresse->execute(array($newadresse, $_SESSION['Mail']));
        }
        if(isset($_POST['newtel']) ) 
        {
           $newtel = htmlspecialchars($_POST['newtel']);
           $inserttel = $bdd->prepare("UPDATE restaurants SET TEL = ? WHERE ID = $IDRMODIF");
           $inserttel->execute(array($newtel, $_SESSION['Mail']));
        }
        if(isset($_POST['newtables']) ) 
        {
           $newtables = htmlspecialchars($_POST['newtables']);
           $inserttables = $bdd->prepare("UPDATE restaurants SET NOMBRETABLES = ? WHERE ID = $IDRMODIF");
           $inserttables->execute(array($newtables, $_SESSION['Mail']));
        }
        }
        header('Location: ../index.php');
     ?>
