<?php 
    include 'config.php';
    include 'includes/header.php'; 
    include 'includes/profilebody.php'; 
    include 'classes/product.php';
    include 'classes/bill.php';
    include 'classes/cartItem.php';

    $list = new Product($conn);
    $list->id = $_SESSION['user_id'];
?>

<div class="container">
    <h1 class="text-white"><i class="fa fa-history" aria-hidden="true"></i> History</h1>
    <hr>
</div>

<div class="manager">
    <div class="container p-lg-4">
    <div class="card wish-list mb-3">
        <div class="card-body">      
          <?php $list->getProductHistory(); ?>
        </div>
      </div>

    </div>
</div>

 
   
<?php 
    include 'includes/footer.php'; 
?>
