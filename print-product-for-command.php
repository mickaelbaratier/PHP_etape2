<form action="cart.php" method="post">
    <?php foreach($products as $product){?>
    <div>
        <img src="<?= $product["picture_url"] ?>" alt="<?= "logo de " . $product["name"] ?>">
        <p><?= $product["name"] ?></p>
        <p>
            <span class="barrer"><?= formatPrice($product["price"]) . " TTC " ?></span>
            <?php formatPoucent($product["discount"]) ?>
        </p>
        <p><?= formatPrice(discountPrice($product["price"], $product["discount"])) . " TTC " ?></p>
        <label for="<?=$product["name"]?>">Quantité select
            <select name="<?=$product["name"]?>">
                <?php for ($i = 0; $i < 11; $i++) { ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                <?php } ?>
            </select>
        </label>
    </div>
    <?php } ?>
    <input type="submit" value="COMMANDER">
</form>