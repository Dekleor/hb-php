<?php
include 'includes/header.php';
?>

<table>
<thead> <!-- En-tête du tableau -->
       <tr>
           <th>Bonnet</th>
           <th>Prix TTC</th>
           <th>Prix HT</th>
           <th>Description</th>
       </tr>
   </thead>
    <?php
        showProducts($listeBonnet, $fantasy);
    ?>
</table>


<?php
include 'includes/footer.php';
?>