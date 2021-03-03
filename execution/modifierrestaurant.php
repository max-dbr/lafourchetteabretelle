<?php
	session_start();
 
    $host = 'localhost';
    $dbname = 'workshop';
    $user = 'root';
    $mdp = 'root';
    $IDP=$_POST['IDPRODUIT'];
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
        $requser = $bdd->prepare("SELECT * FROM clients WHERE ADRESSEMAIL = ?");
        $requser->execute(array($_SESSION['Mail']));
        $user = $requser->fetch();

        if(isset($_POST['newadresse'])) 
        {
           $newadresse = htmlspecialchars($_POST['newadresse']);
           $insertadresse = $bdd->prepare("UPDATE clients SET ADRESSE = ? WHERE ADRESSEMAIL = ?");
           $insertadresse->execute(array($newadresse, $_SESSION['Mail']));
        }
        if(isset($_POST['newphone']) ) 
        {
           $newphone = htmlspecialchars($_POST['newphone']);
           $insertphone = $bdd->prepare("UPDATE clients SET TEL = ? WHERE ADRESSEMAIL = ?");
           $insertphone->execute(array($newphone, $_SESSION['Mail']));
        }
        if(isset($_POST['newmail']) ) 
        {
           $newmail = htmlspecialchars($_POST['newmail']);
           $insertmail = $bdd->prepare("UPDATE clients SET ADRESSEMAIL = ? WHERE ADRESSEMAIL = ?");
           $insertmail->execute(array($newmail, $_SESSION['Mail']));
        }
        if(isset($_POST['newpasse']) ) 
        {
           $newpasse = htmlspecialchars($_POST['newpasse']);
           $insertpasse = $bdd->prepare("UPDATE clients SET MOTDEPASSE = ? WHERE ADRESSEMAIL = ?");
           $insertpasse->execute(array($newpasse, $_SESSION['Mail']));
        }
        }
        header('Location: ../index.php');
     ?>
