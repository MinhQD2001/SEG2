<?php 
    include '../config.php';
    include '../classes/cartItem.php';


    if ($_POST['type'] == 'change') {
        $cart = new CartItem($conn);
        $cart->id = $_POST['cartID'];
        $cart->quantity = $_POST['quantity'];
        $cart->changeCart();
    }
    elseif ($_POST['type'] == 'delete') {
        $cart = new CartItem($conn);
        $cart->id = $_POST['cartID'];
        $cart->userID = $_POST['userID'];
        $cart->deleteCartItem($cart->userID);    
    }
    elseif ($_POST['type'] == 'updateTotalPrice') {
        $cart = new CartItem($conn);
        $cart->userID = $_POST['userID'];
        $cart->getTotalPrice();
        echo $cart->total;
    }

?>