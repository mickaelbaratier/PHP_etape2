<?php
$creation_site_web = [
    "name" => "creation de site web",
    "price" => 2500,
    "weight" => 0,
    "discount" => 10,
    "picture_url" => "image\icone_multi_tab.png",
];
$formule_complette = [
    "name" => "formule complette",
    "price" => 10000,
    "weight" => 0,
    "discount" => 5,
    "picture_url" => "image\\283403-200.png",
];
$gestion_hebergeur = [
    "name" => "gestion hebergeur",
    "price" => 5000,
    "weight" => 0,
    "discount" => 0,
    "picture_url" => "image\icone_int.png",
];
?>
<div>
    <h2><?php echo $creation_site_web["name"]?> </h2>
    <p>
        Prix pour une <?php echo $creation_site_web["name"]?> : <?php echo $creation_site_web["price"]?> €.
        <br>Avec <?php echo $creation_site_web["discount"]?> % de reduction.
    </p>
    <img src="<?php echo $creation_site_web["picture_url"]?>">
</div>
<div>
    <h2><?php echo $gestion_hebergeur["name"]?> </h2>
    <p>
        Prix pour une <?php echo $gestion_hebergeur["name"]?> : <?php echo $gestion_hebergeur["price"]?> €.
        <br>Avec <?php echo $gestion_hebergeur["discount"]?> % de reduction.
    </p>
    <img src="<?php echo $gestion_hebergeur["picture_url"]?>">
</div>
<div>
    <h2><?php echo $formule_complette["name"]?> </h2>
    <p>
        Prix pour une <?php echo $formule_complette["name"]?> : <?php echo $formule_complette["price"]?> €.
        <br>Avec <?php echo $formule_complette["discount"]?> % de reduction.
    </p>
    <img src="<?php echo $formule_complette["picture_url"]?>">
</div>