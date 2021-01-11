<?php
function tva($argument) {
    $horsTaxe = number_format($argument / 1.2, 2, ',', '');
    return $horsTaxe;
}

function showProducts($argument, $type) {
    $tab = array_filter($argument, function($k) use ($type) {
        return $k[0] == $type;
    });
    foreach ($tab as $key => $value) {
        echo "
        <div class='card'>
            <div class='card-header border-0'>
                <img src='img/$value[1]' alt=''>
            </div>
            <div class='card-block px-2'>
                <div id='placementTitre'>
                    <h3 class='card-title'><strong>$value[2]</strong></h3>
                    <h1  class='card-title'><strong>$value[3]€</strong></h1>
                </div>
                <div id='bot'>
                    <p class='card-text'>$value[4]</p>
                    <a href='cart.php?id=$key'><button>Ajouter au panier</button></a>
                </div>
            </div>
        </div>";
    }
}

function addToCart($id) {
    if (!empty($id)) {
        if (!isset($_SESSION['cart']))   {
            $_SESSION['cart'] = [];
        }
        $_SESSION['cart'][] = $id;
    }
}