<form action="cart.php" method="post">
    <div class="form-group row">
        <?php foreach ($products as $key => $product) { ?>
            <div class="">
                <div class="">
                    <img class="logo" src="<?= $product["picture_url"] ?>" alt="<?= "logo de " . $product["name"] ?>">
                </div>
                <div class="">
                    <p><?= $product["name"] ?></p>
                </div>
                <div class="">
                    <p>
                        <span class="barrer"><?= formatPrice($product["price"]) . " TTC " ?></span>
                        <?= formatPourcent($product["discount"]) ?>
                    </p>
                </div>
                <div class="">
                    <p><?= formatPrice(discountPrice($product["price"], $product["discount"])) . " TTC " ?></p>
                </div>
                <div class="">
                    <label for="<?= $key ?>">Quantité select
                        <select name="<?= $key ?>">
                            <?php for ($i = 0; $i < 11; $i++) { ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                        </select>
                    </label>
                </div>
            </div>
        <?php } ?>
    </div>
    <input type="hidden" name="transporteur" value="LP">
    <input type="submit" value="COMMANDER">
</form>