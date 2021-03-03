<?php
$sql = "SELECT * FROM `plats`";
    $rs  = $bdd->prepare($sql);
    $rs->execute(); 
    $enrs = $rs->fetchAll(); 
    ?>
<h1>Nos plats  <span class="effet">TipTop</span></h1>

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

                <form method="POST" action="./index.php?page=commande" class="form">
                <input type="hidden" name="IDPRODUIT" id="IDPRODUIT" value="<?php echo $array[0]?>"> <input type="submit" value="Commander"></input></form>
                <?php
            if(isset($_SESSION['Mail'])) 
                {
                ?>

                <form  method="POST" action="./execution/suppressionproduit.php" class="form">
                <input type="hidden" name="IDPD" id="IDPD" value="<?php echo $array[0]?>"> <input type="submit" value="Supprimer"></input></form>

                <form method="POST" action="./view/boxes/commande.php" class="form">
                <input type="hidden" name="" value="<?php echo $array[0]?>"> <input type="submit" value="Modifier"></input>
                <?php
                }
                ?>
            </div>
            </form>
            
        <?php 
        }
        ?>
    </div>
</div>

</table>
<form method="POST" action="./execution/ajouterplat.php">
 <fieldset>
 <legend>Ajout plat</legend>
 <label for="nom">Nom :</label>
 <input type="text" name="Nomplat" required>
 
 <label for="image">Image :</label>
 <input type="text" name="Imageplat" required><br><br>

 <label for="prix">Prix :</label>
 <input type="number" name="Prixplat" required><br><br>
 
 <label for="composition">Composition :</label>
 <input type="text" name="Composition" required>

 <select name="Service">
 <option value="">--Type--</option>
 <option value="Classic">Classic</option>
 <option value="Zerogachis">Zerogachis</option>
 </select><br><br>

 <button type="submit">Ajouter</button>
 </fieldset>
 </form>