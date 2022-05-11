<?php
setcookie(
        'cart',
    $_POST,
);
include 'header.php';
include_once 'multidimentional_catalog.php';
include_once 'my-function.php';
global $products;
$all_price = 0;
$all_weight = 0;
if (isset($_POST)) {
    $commands = $_POST;
} elseif (isset($_COOKIE)){
    $commands = $_COOKIE['cart'];
    }else{
    echo "/!\une erreur c'est produit. Recommencer votre selection de produit/!\ ";
}
?>

<table class="table table-striped">
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
    <?php

    foreach ($commands as $key => $command) {
        if ($key != "transporteur") {
            if ($command > 0) { ?>
                <tr>
                    <td><?= $products[$key]["name"] ?></td>
                    <td>
                        <span class="barrer"><?= formatPrice($products[$key]["price"]) ?> </span> <br>
                        <?= formatPrice(discountPrice($products[$key]["price"], $products[$key]["discount"])) ?>
                    </td>
                    <td><?= $command ?></td>
                    <td>
                        <?php
                        $price = $command * discountPrice($products[$key]["price"], $products[$key]["discount"]);
                        echo formatPrice($price);
                        $all_price = $all_price + $price;
                        $all_weight = $all_weight + $products[$key]["weight"];
                        ?>
                    </td>
                </tr>

                <?php
            }
        }
    }
    ?>
    <tr>
        <td></td>
        <td></td>
        <td>Total HT</td>
        <td>
            <?= formatPrice(priceExcludingVAT($all_price)) ?>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>TVA</td>
        <td>
            <?= formatPrice($all_price - priceExcludingVAT($all_price)) ?>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <?php include 'formulaire_transporteur.php' ?>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>Transporteur choisie</td>
        <td>
            <?php
            if($commands["transporteur"] === "LP"){
                echo "La poste";
            } elseif ($commands["transporteur"] === "DHL"){
                echo "DHL";
            }else{
                echo "aucun transporteur selectionner";
            }?>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>prix du transport</td>
        <td>
            <?php
            if ($commands["transporteur"] === "LP") {
                $transport_price = frais_port_la_poste($all_weight, $all_price);
            } else {
                $transport_price = frais_port_DHL($all_weight, $all_price);
            }
            echo formatPrice($transport_price);
            ?>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>Total TTC</td>
        <td>
            <?= formatPrice($all_price + $transport_price) ?>
        </td>
    </tr>
    </tbody>
</table>
