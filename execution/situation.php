<?php
	session_start();
 
    $host = 'localhost';
    $dbname = 'workshop';
    $user = 'root';
    $mdp = 'root';
    $IDR=$_POST['IDRESTAURANT'];
    $SIT=$_POST['SITUATION'];
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
        $requser = $bdd->prepare("UPDATE restaurants SET SITUATION = '$SIT' WHERE ID = $IDR");
        $requser->execute(array());
        $user = $requser->fetch();

        
        header('Location: ../index.php?page=restaurants');
     ?>
