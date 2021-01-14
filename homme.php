<?php
include 'includes/header.php';
?>

<table>
    <?php
        $type = "homme";
        include 'includes/filters.php';
        showProducts($products);
    ?>
</table>

<?php
include 'includes/footer.php';
