<?php
function print_catalog(array $products)
{
    foreach ($products as $product) {
        ?>
        <div>
            <h2><?= $product["name"] ?> </h2>
            <p>
                Prix pour une <?= $product["name"] ?>
                : <?php formatPrice(discountPrice($product["price"], $product["discount"])) ?> TTC,
                soit <?php formatPrice(priceExcludingVAT(discountPrice($product["price"], $product["discount"]))) ?>
                Hors Taxes .
                <br>Avec <?= $product["discount"] ?> % de reduction.
            </p>
            <img src="<?= $product["picture_url"] ?>" alt="<?= $product["name"] ?>">
        </div>
        <?php
    }
}

function formatPrice(float $prix)
{
    //$prix = floatval($prix);
    $prix = $prix / 100;
    $prix = number_format($prix, 2, ',', ' ');
    echo $prix . ' €';
}

function priceExcludingVAT(float $TTC)
{
    $HT = ($TTC * 100) / (100 + 20);
    return $HT;
}

function discountPrice(float $prix, int $solde)
{
    $prix_final = $prix - (($prix * $solde) / 100);
    return $prix_final;
}

function formatPoucent(int $pourcent)
{
    echo "-" . $pourcent . "%";
}

function frais_port_la_poste(int $wight, float $price)
{
    if ($wight < 500) {
        $price_port = 500;
    } elseif ($wight < 2000) {
        $price_port = $price * (10 / 100);
    } else {
        $price_port = 0;
    }
    return $price_port;
}

function frais_port_DHL(int $wight, float $price)
{
    if ($wight < 1000) {
        $price_port = 1000;
    } else{
    $price_port = $price * (5 / 100);
}
    return $price_port;
}
