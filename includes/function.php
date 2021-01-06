<?php
function tva($argument) {
    $horsTaxe = number_format($argument / 1.2, 2, ',', '');
    return $horsTaxe;
}
?>

<?php
function showProducts($argument) {
    foreach ($argument as $value) {
        echo "<tr>
            <td>
                $value[0]
            </td>
            <td>";
                echo tva($value[1]);
            echo "</td>
            <td>";
                if ($value[1] < 12) {
                    echo "<span style='color:green;'>$value[1]€ </span>";
                } else {
                     echo "<span style='color:blue;'>$value[1]€ </span>";
                }
            echo "</td>
            <td>
                    $value[2]
            </td>
        </tr>";
    }
}
?>