<?php
$insultes = ['con', 'merde'];
$asterisque = [];
foreach ($insultes as $insulte){
    $asterisque[] = substr($insulte, 0, 1) . str_repeat('*', strlen($insulte) - 1);
}
$phrase = readline('Veuillez écrire votre commentaire : ');
$phrase = str_replace($insultes, $asterisque, $phrase);
echo $phrase;
?>




