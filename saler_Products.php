<?php 

    include 'config.php';
    include 'includes/header.php'; 
    include 'classes/product.php';

    $user_id = $_SESSION['user_id'];
    $list_Product = new Product($conn);
    $list_Product->getProductsByOwner($user_id);
    echo '<pre>' , var_dump($list_Product->products) , '</pre>';

?>

    <button><a href="post.php">Request to Post Product</a></button>
    
    <!-- Luyen review outputProductsInList() in product.php To design TABLE and PUT Value in this. USING $list_Product->products TO GET VALUE IN THE ARRAY -->


<?php
    include 'includes/footer.php';
?>
