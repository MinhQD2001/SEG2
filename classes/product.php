<?php 

    class Product {
        
        public $id;
        public $id_provider;
        public $name;
        public $price;
        public $description;
        public $post_img;
        public $quantity;
        public $hide;   // 0: WAIRTING FOR ACCEPT - 1: ACCEPTED - 2: DELETED (HIDE ANY PRODUCT - DON'T DELETE IT)
        public $product;
        public $products = [];
        public $conn;
        public $errors = []; # check error in create product form.

        public function __construct($conn) {
            $this->conn = $conn;
        }

        public function getProducts($limit = 7) {
            $sql = "SELECT id, id_provider, name, price, description, post_img, quantity FROM product ORDER BY date_created DESC LIMIT ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("i", $limit);
            $stmt->execute();
            $results = $stmt->get_result();
            if (isset($results)) {
                $this->products = $results->fetch_all();
            }
        }
        
        // print list products in "Last Prodcuts" in home page. MAY BE SORT WITH MORE CONDITIONS IN DB. (EXP: NEWEST DATE_CRREATED)
        public function outputProductInList() {
            $output = "";
            foreach ($this->products as $product) {
                $output .= '
                <div class="single-product">
                    <div class="product-f-image">
                        <img src=" ' .  $product[5] . ' " alt="">
                        <div class="product-hover">
                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                            <a href="#" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                        </div>
                    </div>

                    <h2><a href="#"> ' .  $product[2] . ' </a></h2>

                    <div class="product-carousel-price">
                        <ins>' .  (string)$product[3] . ' </ins> <del> ' . (string)$product[3] . ' </del>
                    </div>
                </div>';
            }
            echo $output;
        }

        public function getProductsByOwner($user_id) {
            $sql = "SELECT p.name, p.price, p.description, p.post_img, p.quantity, c.name
            FROM product as p, product_category as pc, category as c
            WHERE p.id_provider = ? AND p.id = pc.id_product and pc.id_category = c.id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("i", $user_id);
            $stmt->execute();
            $results = $stmt->get_result();
            if (isset($results)) {
                $this->products = $results->fetch_all();
            }
        }

        public function createNewProduct($id_provider, $name, $category ,$price, $description, $quantity, $post_img) {
            $this->checkRequirement($name, $price, $quantity);
            if (!isset($errors)) {
                $sql = 'INSERT INTO product (id_provider, name, price, description, quantity, post_img) VALUES (?,?,?,?,?,?)';
                $stmt = $this->conn->prepare($sql);
                $stmt->bind_param('isisis', $id_provider, $name, $price, $description, $quantity, $post_img);
                $stmt->execute();
                $user_id = $stmt->insert_id;
                $sql = 'INSERT INTO product_category (id_product, id_category) VALUES (?,?)';
                $stmt = $this->conn->prepare($sql);
                $stmt->bind_param('ii', $user_id, $category);
                $stmt->execute();
                header("Location: saler_Products.php?post=successful");
            }
            
        }

        public function checkRequirement($name, $price, $quantity) {
            if (strlen($name) <= 2) {
                $errors['name'] = 'Name is too short!';
            }
            if ($price <= 0) {
                $errors['price'] = 'Price is not recommended';
            }
            if ($quantity <= 0) {
                $errors['quantity'] = 'Price is not recommended';
            }
        }
    }

?>