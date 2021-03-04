
<?php session_start(); ?>
<header class="header">

    <nav class="menu">
        <ul>
            <li><a href="./index.php"><img class="logo" src="/asset/images/la-fourchette-a-bretelles-logoV2-02.png"></a></li>
            <li><a href="./index.php">Accueil</a></li>
            <li><a href="./index.php?page=carte">Carte</a></li>
            <?php

            if(empty($_SESSION['Mail'])) 
            { ?>
            <li><a href="./index.php?page=login">Se connecter</a></li>
            
            <?php
            }
            ?>
            
            <?php
            if(isset($_SESSION['Mail'])) 
                {
                ?>
            <li><a href="./index.php?page=gestion">MON COMPTE</a></li>
            <li><a href="./execution/deconnexion.php">Déconnexion</a></li>
            <?php
            }
            ?>
            <?php
            if ($_SESSION['Mail'] == "admin@gmail.com")
            {
                ?>
            <li><a href="./index.php?page=administration">Administration</a></li>
            <?php
                }
                ?>
        </ul>
    </nav>
</header>