<?php
include 'includes/header.php';
?>

<table>
    <?php
        $type = "enfant";
        $products = array_filter($listeBonnet, function($k) use ($type) {
            return $k->cat == $type;
        });
        include 'includes/filters.php';
        showProducts($products);
    ?>
</table>

<?php
include 'includes/footer.php';
?>