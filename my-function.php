<?php
function print_catalog($product){
    foreach ($product as $part => $value) {
        ?>
        <div>
            <h2><?php echo $product[$part]["name"] ?> </h2>
            <p>
                Prix pour une <?php echo $product[$part]["name"] ?> : <?php formatPrice($product[$part]["price"]) ?> .
                <br>Avec <?php echo $product[$part]["discount"] ?> % de reduction.
            </p>
            <img src="<?php echo $product[$part]["picture_url"] ?>" alt="<?php echo $product[$part]["name"] ?>">
        </div>
        <?php
    }
}
function formatPrice($prix){
    //$prix = floatval($prix);
    $prix = $prix/100;
    $prix = number_format($prix, 2,',',' ');
    echo $prix . ' €';
}