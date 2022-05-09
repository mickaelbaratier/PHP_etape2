<?php
include 'my-function.php';
$product = [
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
<form>
    <div>
        <img src="<?php echo $product["creation_site_web"]["picture_url"] ?>">
        <p><?php echo $product["creation_site_web"]["name"] ?></p>
        <p>
            <span class="barrer"><?php echo formatPrice($product["creation_site_web"]["price"]) ?></span>
            <?php echo formatPrice(discountPrice($product["creation_site_web"]["price"], $product["creation_site_web"]["discount"])) ?>
        </p>
    </div>

</form>
