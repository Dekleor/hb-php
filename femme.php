<?php
include 'includes/header.php';
?>

<table>
    <?php
        include 'includes/filters.php';
        showProducts($listeBonnet, "femme");
    ?>
</table>

<?php
include 'includes/footer.php';
?>