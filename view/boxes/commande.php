<?php
if(empty($_SESSION['Mail']))
header('Location: index.php?page=login');
?>
<?php
$ID= $_POST['IDPRODUIT'];
$sql = "SELECT * FROM `plats` WHERE ID = $ID ";
    $rs  = $bdd->prepare($sql);
    $rs->execute(); 
    $enrs = $rs->fetchAll(); 
    ?>
<h1>Recapitulatir commande</h1>

<div class="list_one">
    <div class="equipe">
        <?php
        // ICI : FAIRE VOTRE FOREACH POUR L'AFFICHAGE
        foreach($enrs as $array)
        { 
            ?>
            <div class="equipier">
                <img src="<?= $array[2];?>" height="150" width="300" />
                <div><?= $array[1];?></div>
                <div><?= $array[3];?> Euros</div>
                <div><?= $array[5];?></div><br>

                <form name="form1" method="POST" action="./execution/suppression.php" class="form">
                <input type="hidden" name="ID" value="<?php echo $array[0]?>"> <input type="submit" value="Commander"></input>
            </div>
            </form>
            
        <?php 
        }
        ?>
    </div>
</div>
<?php
$Fid = $array[3]/10;
?>
<div> Grâce a cette commande vous gagnez <?= $Fid ?> points de fidélités </div>

