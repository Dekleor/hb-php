<?php
    if (isset($_GET['size'])) {
        $size = $_GET['size'];
        $products = array_filter(
            $products,
            function (Beanie $product) use ($size) {
                return $product->hasSize($size);
            }
        );
    }

    if (isset($_GET['material'])) {
        $material = $_GET['material'];
        $products = array_filter(
            $products,
            function (Beanie $product) use ($material) {
                return $product->hasMaterial($material);
            }
        );
    }
?>
<form action="" method="GET">
    <select name="size" id="size">
        <?php
        foreach (Beanie::AVAILABLE_SIZES as $size) {
            ?>
        <option value="<?= $size ?>">
            <?= $size ?>
        </option>
        <?php
        }
    ?>
    </select>
    <select name="material" id="material">
        <?php
        foreach (Beanie::AVAILABLE_MATERIALS as $translation) {
            ?>
        <option value="<?= $translation ?>">
            <?= $translation ?>
        </option>
        <?php
        }
    ?>
    </select>
    <input type="number" name="minPrice">
    <input type="number" name="maxPrice">
    <button type="submit">Valider</button>
</form>