<form action="cart.php" method="post">
    <?php foreach($products as $key => $product){?>
    <div>
        <img src="<?= $product["picture_url"] ?>" alt="<?= "logo de " . $product["name"] ?>">
        <p><?= $product["name"] ?></p>
        <p>
            <span class="barrer"><?= formatPrice($product["price"]) . " TTC " ?></span>
            <?php formatPoucent($product["discount"]) ?>
        </p>
        <p><?= formatPrice(discountPrice($product["price"], $product["discount"])) . " TTC " ?></p>
        <label for="<?=$key?>">Quantité select
            <select name="<?=$key?>">
                <?php for ($i = 0; $i < 11; $i++) { ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                <?php } ?>
            </select>
        </label>
    </div>
    <?php } ?>
    <input type="submit" value="COMMANDER">
</form>