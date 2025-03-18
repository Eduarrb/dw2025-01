<?php
    function callHeaderExtra($extra) {
        if($_SERVER['REQUEST_URI'] === '/' || $_SERVER['REQUEST_URI'] === '/index.php') {
            echo $extra;
        }
    }
?>