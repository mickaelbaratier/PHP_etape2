<?php

$name = "Création de site web";
$price = 1000;
$address = "image/icone_multi_tab.png";

echo $name . " : ";
?>
<img src="<?= $address ?>" alt="image du produit">
<?php
print_r("\n" . "l'article coute " . $price . "€");
?>

