<?php
include 'catalog_with_key.php';
$product = [
    "creation_site_web" => [
            foreach($creation_site_web as $part => $value){

            }
    ],
    "formule_complette" => [$formule_complette],
    "gestion_hebergeur" => [$gestion_hebergeur],
];
//var_dump($product);

foreach($product as $part => $value){
    ?>
<div>
    <h2><?php echo $product[$part]["name"]?> </h2>
    <p>
        Prix pour une <?php echo $product[$part]["name"]?> : <?php echo $product[$part]["price"]?> €.
        <br>Avec <?php echo $product[$i]["discount"]?> % de reduction.
    </p>
    <img src="<?php echo $product[$part]["picture_url"]?>" alt="<?php echo $product[$part]["name"]?>">
</div>
<?php
}