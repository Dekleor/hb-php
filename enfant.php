<?php
include 'includes/header.php';
?>

<table>
    <?php
        $type = "enfant";
        include 'includes/filters.php';
        showProducts($products);
    ?>
</table>

<?php
include 'includes/footer.php';
