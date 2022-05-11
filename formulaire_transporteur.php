<form action="cart.php" method="post">
    <?php
    foreach ($commands as $key => $command){
        if ($key != "transporteur"){
            ?>
            <input type="hidden" name="<?= $key ?>" value="<?= $command ?>">
    <?php }else{
    ?>
            <label for="transporteur">choix du transporteur
                <td>
                    <select name="transporteur">
                        <option value="LP">La poste</option>
                        <option value="DHL">DHL</option>
                    </select>
                </td>
                <td>
                    <input type="submit" value="VALIDER">
                </td>
            </label>
/form>
<?php
        }
    }

