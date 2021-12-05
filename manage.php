<?php 
    include 'config.php';
    include 'includes/header.php';
    include 'classes/product.php';

    $productList = new Product($conn);
    $productList->getProductInPending();
    //echo '<pre>' , var_dump($productList->productList) , '</pre>';

    
?>

<div class="manager">
    <div class="container p-lg-4">
    <div class="card wish-list mb-3">
        <div class="card-body" id="pendingList">

          <?php $productList->outputProductInPending(); ?>

        </div>
      </div>

    </div>
</div>

 


<?php 
    include 'includes/footer.php';
?>