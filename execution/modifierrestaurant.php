<?php
	session_start();
 
    $host = 'localhost';
    $dbname = 'workshop';
    $user = 'root';
    $mdp = 'root';
    $_SESSION['IDRESTAURANT'] = $_POST['IDRESTAURANT'];
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
    if(isset($_SESSION['IDRESTAURANT'])) 
    {
        $requser = $bdd->prepare("SELECT * FROM restaurants WHERE ID = $_SESSION[IDRESTAURANT]");
        $requser->execute(array($_SESSION['IDRESTAURANT']));
        $user = $requser->fetch();

        if(isset($_POST['newville'])) 
        {
           $newville = htmlspecialchars($_POST['newville']);
           $insertville = $bdd->prepare("UPDATE restaurants SET VILLE = ? WHERE ID = $_SESSION[IDRESTAURANT]");
           $insertville->execute(array($newville));
        }
        if(isset($_POST['newadresse']) ) 
        {
           $newadresse = htmlspecialchars($_POST['newadresse']);
           $insertadresse = $bdd->prepare("UPDATE restaurants SET ADRESSE = ? WHERE ID = $_SESSION[IDRESTAURANT]");
           $insertadresse->execute(array($newadresse));
        }
        if(isset($_POST['newtel']) ) 
        {
           $newtel = htmlspecialchars($_POST['newtel']);
           $inserttel = $bdd->prepare("UPDATE restaurants SET TEL = ? WHERE ID = $_SESSION[IDRESTAURANT]");
           $inserttel->execute(array($newtel));
        }
        if(isset($_POST['newtables']) ) 
        {
           $newtables = htmlspecialchars($_POST['newtables']);
           $inserttables = $bdd->prepare("UPDATE restaurants SET NOMBRETABLES = ? WHERE ID = $_SESSION[IDRESTAURANT]");
           $inserttables->execute(array($newtables));
        }
        }
        header('Location: ../index.php?page=restaurants');
     ?>
