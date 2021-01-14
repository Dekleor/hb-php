<?php
function tva($argument) {
    $horsTaxe = number_format($argument / 1.2, 2, ',', '');
    return $horsTaxe;
}

function showProducts($argument, $type)
{
    $tab = array_filter($argument, function($k) use ($type) {
        return $k->cat == $type;
    });
    foreach ($tab as $key => $beanie) {
        echo "
        <div class='card'>
            <div class='card-header border-0'>
                <img src='img/$beanie->pic' alt=''>
            </div>
            <div class='card-block px-2'>
                <div id='placementTitre'>
                    <h3 class='card-title'><strong>$beanie->pic</strong></h3>
                    <h1  class='card-title'><strong>$beanie->price €</strong></h1>
                </div>
                <div id='bot'>
                    <p class='card-text'>$beanie->desc</p>
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