<?php

include 'includes/header.php';

if (!isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}

foreach ($_SESSION['cart'] as $id) {
    $beanie = $listeBonnet[$id];
    var_dump($_SESSION['cart']);
    echo "
    <div id='cartList'>
        <p>$beanie->name</p>
        <p>$beanie->price €</p>
    </div>";
}
if (!empty($_GET)){
    addToCart($_GET['id']);

} elseif (empty($_SESSION['cart'])) {
    echo "<p>Votre panier est vide</p>";
} else {
    echo"
    <a href='emptyCart'>Vider mon panier</a>";
}

include 'includes/footer.php';
?>