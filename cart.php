<?php var_dump($_POST);
include_once 'multidimentional_catalog.php';
?>

<table>
    <caption>Votre panier</caption>
    <tr>
        <th>Produits</th>
        <th>prix unitaire</th>
        <th>quantité</th>
        <th>Total</th>
    </tr>
    <?php foreach ($_POST as $command){ ?>
    <tr>
        <td><?= $command ?></td>
        <td>
    <tr class="barrer"><?= formatPrice($products[$command]["price"]) . " TTC " ?></tr>
    <tr><?= formatPrice(discountPrice($products[$command]["price"], $products[$command]["discount"])) ?></tr>
    </td>
    </tr>
    <?php } ?>
</table>
