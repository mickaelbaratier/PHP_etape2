<?php var_dump($_POST);
include 'header.php';
include_once 'multidimentional_catalog.php';
include_once 'my-function.php';
global $products;
$all_price = 0;
?>

<table class="table">
    <caption>Votre panier</caption>
    <thead>
    <tr>
        <th scope="col">Produits</th>
        <th scope="col">prix unitaire</th>
        <th scope="col">quantité</th>
        <th scope="col">Total</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($_POST as $key => $command) { ?>
        <?php if ($command > 0) { ?>
            <tr>
                <td><?= $products[$key]["name"] ?></td>
                <td>
                    <span class="barrer"><?php formatPrice($products[$key]["price"]) ?> </span> <br>
                    <?php formatPrice(discountPrice($products[$key]["price"], $products[$key]["discount"])) ?>
                </td>
                <td><?= $command ?></td>
                <td>
                    <?php
                    $price = $command * discountPrice($products[$key]["price"], $products[$key]["discount"]);
                    formatPrice($price);
                    $all_price = $all_price + $price;
                    ?>
                </td>
            </tr>

            <?php
        }
    }
    ?>
    <tr>
        <td></td>
        <td></td>
        <td>Total HT</td>
        <td>
            <?php
            $price_HT = priceExcludingVAT($all_price);
            formatPrice($price_HT);
            ?>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>TVA</td>
        <td>
            <?php
            $price_TVA = $all_price - priceExcludingVAT($all_price);
            formatPrice($price_TVA);
            ?>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>Total TTC</td>
        <td>
            <?php formatPrice($all_price) ?>
        </td>
    </tr>
    </tbody>
</table>
