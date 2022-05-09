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
    <div>
        <img src="<?php echo $products["creation_site_web"]["picture_url"] ?>">
        <p><?php echo $products["creation_site_web"]["name"] ?></p>
        <p>
            <span class="barrer"><?php echo formatPrice($products["creation_site_web"]["price"]) . " TTC " ?></span>
            <?php echo formatPoucent($products["creation_site_web"]["discount"]) ?>
        </p>
        <p><?php echo formatPrice(discountPrice($products["creation_site_web"]["price"], $products["creation_site_web"]["discount"])) . " TTC " ?></p>
        <label for="quantite">Quantité select </label>
        <select name="quantite">
            <?php for ($i = 1; $i < 11; $i++) { ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php } ?>
        </select>
        <input type="submit" value="COMMANDER">
    </div>

</form>
