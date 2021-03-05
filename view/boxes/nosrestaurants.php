<?php

$sql = "SELECT * FROM `restaurants` WHERE SITUATION = 'OUVRIR'";
    $rs  = $bdd->prepare($sql);
    $rs->execute(); 
    $enrs = $rs->fetchAll(); 
    ?>
<h1>RESERVEZ DANS L'UN DE NOS RESTAURANTS</span></h1>

<div class="list_one">
    <div class="equipe">
        <?php
        // ICI : FAIRE VOTRE FOREACH POUR L'AFFICHAGE
        foreach($enrs as $array)
        { 
            ?>
            <div class="equipier">
                <img src="<?= $array[6];?>" height="150" width="300" />
                <div><?= $array[1];?></div>
                
        
                <form method="POST" action="./index.php?page=commande" class="form">
                <input type="hidden" name="IDPRODUIT" id="IDPRODUIT" value="<?php echo $array[0]?>"> <input type="submit" value="RESERVER UNE TABLE"></input></form>
            </div>
            </form>



            
        <?php 
        }
        ?>
    </div>
</div>

</table>
