<?php
declare(strict_types=1);
function print_catalog(array $products): void
{
    foreach ($products as $product) {
        ?>
        <div>
            <h2><?= $product["name"] ?> </h2>
            <p>
                Prix pour une <?= $product["name"] ?>
                : <?= formatPrice(discountPrice($product["price"], $product["discount"])) ?> TTC,
                soit <?= formatPrice(priceExcludingVAT(discountPrice($product["price"], $product["discount"]))) ?>
                Hors Taxes .
            </p>
            <p>
                Avec <?= $product["discount"] ?> % de reduction.
            </p>
            <img src="<?= $product["picture_url"] ?>" alt="<?= $product["name"] ?>">
        </div>
        <?php
    }
}

function formatPrice(float $prix): string
{
    return number_format($prix / 100, 2, ',', ' ') . ' €';
}

function priceExcludingVAT(float $TTC): float
{
    return ($TTC * 100) / (100 + 20);
}

function discountPrice(float $prix, int $solde): float
{
    return $prix - (($prix * $solde) / 100);
}

function formatPourcent(int $pourcent): string
{
    return "-" . $pourcent . "%";
}

function frais_port_la_poste(int $weight, float $price): float
{
    if ($weight < 500) {
        $price_port = 500;
    } elseif ($weight < 2000) {
        $price_port = $price * (10 / 100);
    } else {
        $price_port = 0;
    }
    return $price_port;
}

function frais_port_DHL(int $weight, float $price): float
{
    if ($weight < 1000) {
        $price_port = 1000;
    } else {
        $price_port = $price * (5 / 100);
    }
    return $price_port;
}
