<?php

include 'includes/header.php';

foreach ($_SESSION['cart'] as $id) {
        $value = $listeBonnet[$id];    
        echo "
        <p>$value[2]</p>
        <p>$value[3]€</p>";
    }

if (!empty($_GET)){
    addToCart($_GET['id']);
    header( "refresh:0;url = cart.php");
} elseif (empty($_SESSION['cart'])) {
    echo "Votre panier est vide";
}

echo"
<a href='emptyCart'>Vider mon panier</a>";

include 'includes/footer.php';
?>