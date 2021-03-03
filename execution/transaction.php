
   <?php
   session_start();
    $connection=mysqli_connect("localhost", "root", "root", "bdd_equipier");
    $ID=$_POST['IDPRODUITVENTE'];


    $sql = "INSERT INTO `resa`(`IDACHETEUR`,`IDPRODUIT`) VALUES ($_SESSION[ID], $ID)";
    mysqli_query($connection, $sql);
    header('Location: ../index.php');

   


?>