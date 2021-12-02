<?php 

    include '../config.php';
    include '../classes/product.php';

    if (isset($_POST)) {
        $product = new Product($conn);
        $product->id = $_POST['productID'];
        $product->addToWishList($_POST['userID']);
        
    }

?>