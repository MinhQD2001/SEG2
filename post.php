<?php 

    include 'config.php';  
    include 'classes/product.php';

    if (isset($_POST['submit'])) {
        $product = new Product($conn);
        $product->createNewProduct($_SESSION['user_id'], $_POST['name'], $_POST['category'], $_POST['price'], $_POST['description'], $_POST['quantity'], $_POST['post_img']);
    }

?>

    <div class="container">
        <form action="post.php" method="post">          
            <input class="col-md-12 mt-2" type="text" name="name" placeholder="input the name of product">
            <select name="category">
                <option value="1">iPhone</option>
                <option value="2">Samsung</option>
                <option value="3">Oppo</option>
                <option value="4">Xiaomi</option>
            </select>
            <input class="col-md-12 mt-2" type="number" name="price" placeholder="input the price of this product">
            <input class="col-md-12 mt-2" type="text" name="description" placeholder="input the description">
            <input class="col-md-12 mt-2" type="number" name="quantity" placeholder="input the number of products">
            <input class="col-md-12 mt-2" type="text" name="post_img" placeholder="Input the IMAGE URL">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

<?php
    
?>
