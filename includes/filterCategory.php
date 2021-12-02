<?php 

    include '../config.php';
    include '../classes/category.php';


    if (isset($_POST['categoryID'])) {
        $category = new Category($conn);
        $category->id = $_POST['categoryID'];
        $category->getCategoryByID();
        $category->getProductsByFilter();
        $category->outputProductList();
    }
    else {
        $category = new Category($conn);
        $category->getList();
        $category->getAllProducts();
        $category->outputProductList();
    }

?>