<?php
include 'my-function.php';
$products = [
    "creation_site_web" => [
        "name" => "creation de site web",
        "price" => 250000,
        "weight" => 0,
        "discount" => 10,
        "picture_url" => "image\icone_multi_tab.png",
    ],
    "formule_complette" => [
        "name" => "gestion hebergeur",
        "price" => 500000,
        "weight" => 0,
        "discount" => 5,
        "picture_url" => "image\icone_int.png",
    ],
    "gestion_hebergeur" => [
        "name" => "formule complette",
        "price" => 1000000,
        "weight" => 0,
        "discount" => 5,
        "picture_url" => "image\\283403-200.png",
    ],
];
?>
<form action="item.php" method="post">
    <?php foreach($products as $product){?>
    <div>
        <img src="<?= $product["picture_url"] ?>">
        <p><?= $product["name"] ?></p>
        <p>
            <span class="barrer"><?= formatPrice($product["price"]) . " TTC " ?></span>
            <?= formatPoucent($product["discount"]) ?>
        </p>
        <p><?= formatPrice(discountPrice($product["price"], $product["discount"])) . " TTC " ?></p>
        <label for="quantite<?=$value?>">Quantité select </label>
        <select name="quantite<?=$value?>">
            <?php for ($i = 0; $i < 11; $i++) { ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php } ?>
        </select>
    </div>
    <?php } ?>
    <input type="submit" value="COMMANDER">
</form>
