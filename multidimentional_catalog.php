<?php
include 'catalog_with_key.php';
$product = [
    "creation_site_web" => [
        "name" => "creation de site web",
        "price" => 2500,
        "weight" => 0,
        "discount" => 10,
        "picture_url" => "image\icone_multi_tab.png",
    ],
    "formule_complette" => [
        "name" => "gestion hebergeur",
        "price" => 5000,
        "weight" => 0,
        "discount" => 0,
        "picture_url" => "image\icone_int.png",
    ],
    "gestion_hebergeur" => [
        "name" => "formule complette",
        "price" => 10000,
        "weight" => 0,
        "discount" => 5,
        "picture_url" => "image\\283403-200.png",
    ],
];
//var_dump($product);

foreach ($product as $part => $value) {
    ?>
    <div>
        <h2><?php echo $product[$part]["name"] ?> </h2>
        <p>
            Prix pour une <?php echo $product[$part]["name"] ?> : <?php echo $product[$part]["price"] ?> €.
            <br>Avec <?php echo $product[$part]["discount"] ?> % de reduction.
        </p>
        <img src="<?php echo $product[$part]["picture_url"] ?>" alt="<?php echo $product[$part]["name"] ?>">
    </div>
    <?php
}