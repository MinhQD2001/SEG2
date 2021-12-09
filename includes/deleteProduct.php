<?php 

    include '../config.php';
    include '../classes/product.php';

    $product = new Product($conn);
    $product->id = $_POST['productID'];
    $product->deleteProduct();

?>