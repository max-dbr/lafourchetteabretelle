<?php include('./controller/controller.php');?>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <script defer src="./asset/css/fichierjs.js"></script>
        <link rel="stylesheet" href="./asset/css/feuille_style.css">
        <link rel="icon" type="image/png" href="./asset/images/favicon.png" />
        <meta name="theme-color" content="#e87e04">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap" rel="stylesheet">
        <link href="http://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="http://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    </head>
    <body>
        <br>
    <?php
    include('./view/boxes/' .$pageActuelle);
    ?>
    
    </body>
    <footer>
    <?php include('./view/boxes/footer.php'); ?>
    </footer>
</html>