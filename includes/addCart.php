<?php 
    include '../config.php';
    include '../classes/cartItem.php';

    if (isset($_POST)) {
        $cart = new CartItem($conn);
        $cart->checkCartExist($_POST['userID'], $_POST['productID'], $_POST['quantity']);
        
    }

?>