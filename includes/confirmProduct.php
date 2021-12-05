<?php 

    include '../config.php';
    include '../classes/product.php';

    if (isset($_POST)) {
        $product = new Product($conn);
        $product->id = $_POST['productID'];
        if ($_POST['confirm'] == 1) {
            $product->confirmProduct(1); // hide = 1 => show
        } else {
            $product->confirmProduct(2); // hide = 2 => hide

        }
        $product->getProductInPending();
        $product->outputProductInPending();
    }

?>