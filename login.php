<?php
include 'includes/header.php';

    echo '<form action="" method="post">  
        <div class="container">   
            <label>Nom d"utilisateur : </label>   
            <input type="text" placeholder="Entrez votre nom d\'utilisateur" name="username" required>  
            <label>Mot de passe : </label>   
            <input type="password" placeholder="Entrez votre mot de passe" name="password" required>  
            <button type="submit">Se connecter</button>   
            <div>Se souvenir de moi ? <input type="checkbox" checked="checked"></div>
            <a href="#"> Mot de passe oublié ? </a>   
        </div>   
    </form>';

include 'includes/footer.php';
?>