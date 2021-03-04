<?php include('./view/boxes/menu.php');
    include('./connect_bdd.php');

if(isset($_GET['page']) == true)
{
if ($_GET['page'] == "login")
    {
        $pageActuelle = 'login.php';
    }
    else if ($_GET['page'] == "inscription")
    {
        $pageActuelle = 'inscription.php';
    }
    else if ($_GET['page'] == "administration")
    {
        $pageActuelle = 'administration.php';
    }
    else if ($_GET['page'] == "profil")
    {
        $pageActuelle = 'profil.php';
    }
    else if ($_GET['page'] == "quizz")
    {
        $pageActuelle = 'quizz.php';
    }
    else if ($_GET['page'] == "carte")
    {
        $pageActuelle = 'carte.php';
    }
    else if ($_GET['page'] == "gestion")
    {
        $pageActuelle = 'gestion.php';
    }
    else if ($_GET['page'] == "vente")
    {
        $pageActuelle = 'vente.php';
    }
    else if ($_GET['page'] == "historique")
    {
        $pageActuelle = 'historique.php';
    }
    else if ($_GET['page'] == "restaurants")
    {
        $pageActuelle = 'restaurants.php';
    }
    else if ($_GET['page'] == "commande")
    {
        $pageActuelle = 'commande.php';
    }
    else if ($_GET['page'] == "modplat")
    {
        $pageActuelle = 'modifierplat.php';
    }
    else if ($_GET['page'] == "modifrestaut")
    {
        $pageActuelle = 'modifierrestaurant.php';
    }
    else if ($_GET['page'] == "lescommandes")
    {
        $pageActuelle = 'lescommandes.php';
    }

}
else
{
    $pageActuelle = 'accueil.php';
}
?>