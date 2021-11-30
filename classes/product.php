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
            $i = 1;
            $end = false;
            foreach($list as $item) {
                if ($i == 1) {
                    $output .= '
                    <div class="carousel-item active" data-mdb-interval="10000">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="bg-image hover-overlay hover-zoom">
                            <a href="item.php?id='. $item[0] .'">
                                <img src="' . $item[6] . '" class="w-50"/>
                            </a>
                            </div>
                            <div class="product-info" style="text-align: center;">
                                <p> ' . $item[2] . ' </p>
                                <p>Price: <span style="color: #b23cfd;"><strong> ' . $item[3] . ' <i class="fas fa-dollar-sign"></i></strong></span></p>
                            </div>
                        </div>
                    ';
                    $i += 2;
                }
                if ($i == 2 ) {
                    $output .= '
                    <div class="carousel-item " data-mdb-interval="10000">
                    <div class="row"> 
                        <div class="col-lg-4">
                            <div class="bg-image hover-overlay hover-zoom">
                            <a href="item.php?id='. $item[0] .'">
                                <img src="' . $item[6] . '" class="w-50"/>
                            </a>
                            </div>
                            <div class="product-info" style="text-align: center;">
                                <p> ' . $item[2] . ' </p>
                                <p>Price: <span style="color: #b23cfd;"><strong> ' . $item[3] . ' <i class="fas fa-dollar-sign"></i></strong></span></p>
                            </div>
                        </div>
                    ';
                    $end = false;
                }
                else {
                    $output .= '
                        <div class="col-lg-4">
                            <div class="bg-image hover-overlay hover-zoom">
                            <a href="item.php?id='. $item[0] .'">
                                <img src="' . $item[6] . '" class="w-50"/>
                            </a>
                            </div>
                            <div class="product-info" style="text-align: center;">
                                <p> ' . $item[2] . ' </p>
                                <p>Price: <span style="color: #b23cfd;"><strong> ' . $item[3] . ' <i class="fas fa-dollar-sign"></i></strong></span></p>
                            </div>
                        </div>';
                }               
                if ($i == 4) {
                    $output .= '</div>
                    </div>';
                    $i = 1;
                    $end = true;
                }
                $i += 1;
            }
            if ($end == false) {
                $output .= '</div>
                    </div>';
            }
            echo $output;
        }
    }

?>