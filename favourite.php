<?php 

    include 'config.php';
    include 'includes/header.php';
    include 'classes/product.php';


    $product = new Product($conn);
    $product->getProductFromWishList($_SESSION['user_id']);





?>


    <?php 
        $product->outputProductList();
    ?>



<?php 

    include 'includes/footer.php';

?>