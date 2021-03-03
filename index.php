<?php include('./controller/controller.php');?>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <script defer src="./asset/css/fichierjs.js"></script>
        <link rel="stylesheet" href="./asset/css/feuille_style.css">
        <link rel="icon" type="image/png" href="./asset/images/favicon.png" />
        <meta name="theme-color" content="#e87e04">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap" rel="stylesheet">

    </head>
    <body>
        <br>
    <?php
    include('./view/boxes/' .$pageActuelle);
    ?>
    
    </body>
</html>