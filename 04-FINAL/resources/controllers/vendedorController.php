<?php
    function getVendedorId($id) {
        $c = 0;
        define('i', $id);
        while($c < 3) {
            echo '<pre>';
            var_dump($id);
            echo '</pre>';
            $c++;
        }
    }

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