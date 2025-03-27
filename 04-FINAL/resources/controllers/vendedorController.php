<?php
    function get_selectVendedor($id) {
        $res = query("SELECT * FROM vendedor");
        while($row = arrayAssoc($res)) {
            if($row['id'] === $id){
                ?>
                    <option value="<?php echo $row['id']; ?>" selected>
                        <?php echo $row['nombres'] . " " . $row['apellidos']; ?>
                    </option>
            <?php } else {
                ?>
                    <option value="<?php echo $row['id']; ?>">
                        <?php echo $row['nombres'] . " " . $row['apellidos']; ?>
                    </option>
            <?php }
        }    
    }
?>