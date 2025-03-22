<?php 
    function get_selectVendedor() {
        $res = query("SELECT * FROM vendedor");
        while($row = arrayAssoc($res)) {
            ?>
            <option value="<?php echo $row['id']; ?>">
                <?php echo $row['nombres'] . " " . $row['apellidos']; ?>
            </option>
        <?php }
    }
?>