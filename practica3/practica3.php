<?php
    if(isset($_POST['precio'])){
        $precio = $_POST['precio'];
        if($precio<50) {
            echo "Los gastos de envio son 3,95";
        }else if ($precio>= 50 && $precio <75) {
            echo "Los gatos de envios son 2,95";
        }else if ($precio>= 75 && $precio <100) {
            echo "Los gatos de envios son 1,95";
        }else if($precio>=100) {
            echo "Los gastos de envio son gratis";
        }
    }
?>