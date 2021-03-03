
   <?php
   session_start();
    $connection=mysqli_connect("localhost", "root", "root", "bdd_equipier");
    $nomproduit=$_POST['Nomproduit'];
    $prixdevente=$_POST['Prixdevente'];
    $quantite=$_POST['Quantite'];
    $imageproduit=$_POST['Imageproduit'];
    $vendeur=$_SESSION['ID'];


    $sql = "INSERT INTO `produits`(`NOMPRODUIT`, `TARIFPRODUIT`, `QUANTITE`, `IMAGEPRODUIT`, `IDVENDEUR`) VALUES ('$nomproduit',$prixdevente,$quantite,'$imageproduit',$vendeur)";
    mysqli_query($connection, $sql);
    header('Location: ../index.php');

   


?>