<?php
$emptyCart = true;
include 'includes/header.php';

echo "
<p id='deco'> Votre panier est maintenant vide !</p>";
header( "refresh:2;url=monCompte.php");

include 'includes/footer.php';
?>