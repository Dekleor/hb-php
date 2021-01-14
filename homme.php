<?php
include 'includes/header.php';
?>

<table>
    <?php
        include 'includes/filters.php';
        showProducts($listeBonnet, "homme");
    ?>
</table>

<?php
include 'includes/footer.php';
?>