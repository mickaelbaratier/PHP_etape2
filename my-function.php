<?php
function print_catalog($products){
    foreach ($products as $value) {
        var_dump($value);
        ?>
        <div>
            <h2><?php echo $value["name"] ?> </h2>
            <p>
                Prix pour une <?php echo $value["name"] ?> : <?php formatPrice(discountPrice($value["price"],$value["discount"])) ?> TTC,
                soit <?php formatPrice(priceExcludingVAT(discountPrice($value["price"],$value["discount"]))) ?> Hors Taxes .
                <br>Avec <?php echo $value["discount"] ?> % de reduction.
            </p>
            <img src="<?php echo $value["picture_url"] ?>" alt="<?php echo $value["name"] ?>">
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
function priceExcludingVAT($TTC){
    $HT = ($TTC * 100)/(100 + 20);
    return $HT;
}
function discountPrice($prix, $solde){
    $prix_final = $prix - (($prix * $solde)/100);
    return$prix_final;
}
function formatPoucent($pourcent)
{
    echo "-" . $pourcent . "%";
}

