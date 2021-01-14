<?php

require_once('autoload.php');
require_once('array.php');
require_once('function.php');
session_start();
if (isset($emptyCart) && $emptyCart === true) {
    unset($_SESSION['cart']);
}

if (!empty($_POST['username']) && !empty($_POST['password']) && $_POST['password'] === $password) {
    $_SESSION['username'] = $_POST['username'];
    header("Location: index.php");
} elseif (!empty($_POST['password'])) {
    $message = "Veuillez entrer un mot de passe correct";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Bonneterie des Petits Pédestres</title>
</head>
<body>

<header>
    <h1><a href="index.php"> La Bonneterie des Petits Pédestres</a></h1>

    <nav>
        <?php
        if (!isset($_SESSION['username'])) {
            echo '<a href="login.php">Se connecter</a>';
        } else {
            echo '<a href="monCompte.php">'.$_SESSION['username'].'</a>';
        }
        ?>
        <a href="homme.php">Bonnets homme</a>
        <a href="femme.php">Bonnets femme</a>
        <a href="enfant.php">Bonnets enfant</a>
        <a href="fantasy.php">Bonnets fantaisy</a>
        <a href="contact.php">Nous contacter</a>
    </nav>
    <?php
    echo " 
    <a href='cart' id='showCart'> Mon panier (";  
    if (!empty($_SESSION['cart'])) {
        echo count($_SESSION['cart']); echo ")</a>";
    } else {
        echo "0)</a>";
    }
    ?>
</header>
<main>