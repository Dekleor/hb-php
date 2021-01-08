<?php
function tva($argument) {
    $horsTaxe = number_format($argument / 1.2, 2, ',', '');
    return $horsTaxe;
}
?>

<?php
function showProducts($argument, $type) {
    $tab = array_filter($argument, function($k) use ($type) {
        return $k[0] == $type;
        var_dump($k);
    });
    foreach ($tab as $value) {
        echo "<tr>
            <td>
                $value[1];
            </td>
            <td>";
                echo tva($value[2]);
            echo "</td>
            <td>";
                if ($value[2] < 12) {
                    echo "<span style='color:green;'>$value[2]€ </span>";
                } else {
                     echo "<span style='color:blue;'>$value[2]€ </span>";
                }
            echo "</td>
            <td>
                    $value[3];
            </td>
        </tr>";
    }
}
?>