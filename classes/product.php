<?php 

    class Product {

        public $id;
        public $id_provider;
        public $name;
        public $price;
        public $description;
        public $post_img;
        public $quantity;
        public $productList = [];
        public $product;
        public $conn;
        public $errors = [];

        public function __construct($conn) {
            $this->conn = $conn;
        }

        public function checkRegistration ($id_provider, $name, $price, $quantity, $description, $post_img) {
            $this->name = $name;
            $this->price = $price;
            $this->quantity = $quantity;
            $this->id_provider = $id_provider;
            $this->description = $description;
            $this->post_img = $post_img;

            // CHECK NAME'S LENGTH
            if (strlen($this->name) < 1) {
                $this->errors['name'] = 'Invalid Product Name';
            }

            // CHECK PRICE
            if ($this->price <= 0) {
                $this->errors['price'] = 'Invalid Price';
            }

            // CHECK QUANTITY
            if ($this->quantity <= 0) {
                $this->errors['quantity'] = 'Invalid Quantity';
            }

            if (empty($this->errors)) {
                $this->createProduct();
            }   
        }

        public function createProduct() {
            $sql = "INSERT INTO product (id_provider, name, price, description, post_img, quantity, hide) VALUES (?,?,?,?,?,?,0)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('isissi', $this->id_provider, $this->name, $this->price, $this->description, $this->post_img, $this->quantity);
            $stmt->execute();
        }

        public function getList() {
            $sql = "SELECT * FROM product WHERE hide = 0";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->get_result();
            $this->productList = $result->fetch_all();
            
        }

        public function outputProduct($list) {
            $output = '';
            foreach($list as $item) {
                $output .= '
                    <div class="col-md-2">
                        <div class="bg-image hover-overlay hover-zoom hover-shadow ripple rounded-5">
                        <img src=" ' . $item[6] . '" class="w-100"/>
                        <a href="item.php?id='. $item[0] .'">
                            <div class="mask" style="background-color: rgba(118, 148, 158, 0.2)"></div>
                        </a>
                        </div>
                        <div class="product-info" style="text-align: center;">
                        <p> ' . $item[2] . ' </p>
                        <p> ' . $item[3] . ' </p>
                        </div>
                    </div>
                ';
            }
            echo $output;
        }
    }

?>