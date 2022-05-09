<?php
function print_catalog(array $products){
    foreach ($products as $product) {
        ?>
        <div>
            <h2><?php echo $product["name"] ?> </h2>
            <p>
                Prix pour une <?php echo $product["name"] ?> : <?php formatPrice(discountPrice($product["price"],$product["discount"])) ?> TTC,
                soit <?php formatPrice(priceExcludingVAT(discountPrice($product["price"],$product["discount"]))) ?> Hors Taxes .
                <br>Avec <?php echo $product["discount"] ?> % de reduction.
            </p>
            <img src="<?php echo $product["picture_url"] ?>" alt="<?php echo $product["name"] ?>">
        </div>
        <?php
    }
}
function formatPrice(float $prix){
    //$prix = floatval($prix);
    $prix = $prix/100;
    $prix = number_format($prix, 2,',',' ');
    echo $prix . ' €';
}
function priceExcludingVAT(float $TTC){
    $HT = ($TTC * 100)/(100 + 20);
    return $HT;
}
function discountPrice(float $prix,int $solde){
    $prix_final = $prix - (($prix * $solde)/100);
    return $prix_final;
}
function formatPoucent(int $pourcent)
{
    echo "-" . $pourcent . "%";
}

