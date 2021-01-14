<?php
include 'includes/header.php';
?>

<table>
    <?php
        include 'includes/filters.php';
        showProducts($listeBonnet, "fantasy");
    ?>
</table>

<?php
include 'includes/footer.php';
?>