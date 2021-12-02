<?php 

    include 'product.php';

    class Category {
        public $id;
        public $name;
        public $conn;
        public $productList;
        public $list = [];

        public function __construct($conn) {
            $this->conn = $conn;
        }

        public function getList() {
            $sql = "SELECT * FROM category";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $results = $stmt->get_result();
            $this->list = $results->fetch_all(MYSQLI_ASSOC);
        }

        public function outputInOption() {
            $output = '';
            foreach($this->list as $item) {
                $output .= "<option value={$item['id']}>  {$item['name']}  </option>";
            }
            echo $output;
        }

        public function outputInFilter() {
            $output = '';
            foreach($this->list as $item) {
                $output .= '
                <li class="nav-item">
                    <a class="nav-link text-black" href="#" onclick=filterByCategory(' . $item["id"] . ')>- ' . $item["name"] . ' </a>
                </li>
                ';
            }
            echo $output;
        }

        public function getAllProducts() {
            $this->productList = new Product($this->conn);
            $this->productList->getList();            
        }

        public function getProductsByFilter() {
            $this->productList = new Product($this->conn);
            $this->productList->getProductByCategory($this->id);
        }

        public function outputProductList() {
            $output = '
                <div class="title pt-lg-5" style="text-align: center;">
                    <h1 style="font-weight: inherit;">' . $this->name . '</h1>
                </div>
            ';
            $i = 1;
            foreach($this->productList->productList as $product) {
                if ($i == 1) {
                    $output .= '
                    <div class="saler-item p-lg-3">
                        <div class="row">
                            <div class="sale col-md-3">
                                <div class="bg-image hover-overlay hover-zoom"> <a href="item.php?id=' . $product[0] . '"> 
                                <img src="' . $product[6] . '" class="w-100"/>
                                </a>
                                </div>
                                <hr>
                                <div class="product-info" style="text-align: center;">
                                <p>' . $product[2] . '</p>
                                <p>Price: <span style="color: #b23cfd;"><strong>' . $product[3] . '<i class="fas fa-dollar-sign"></i></strong></span></p>
                                </div>
                            </div>
                    ';
                }
                else {
                    $output .= '
                    <div class="sale col-md-3">
                        <div class="bg-image hover-overlay hover-zoom"> 
                            <a href="item.php?id=' . $product[0] . '"> 
                                <img src="' . $product[6] . '" class="w-100"/>
                            </a>
                        </div>
                        <hr>
                        <div class="product-info" style="text-align: center;">
                            <p>' . $product[2] . '</p>
                            <p>Price: <span style="color: #b23cfd;"><strong>' . $product[3] . '<i class="fas fa-dollar-sign"></i></strong></span></p>
                        </div>
                    </div>
                    ';
                }

                if ($i == 4) {
                    $output .= '                        
                        </div>
                    </div>'
                    ;
                    $i = 0;
                }

                $i += 1;
            }
            if (count($this->productList->productList) == 0) {
                $output .= '<p><strong>THERE ARE NOT ANY PRODUCTS FOR THIS CATEGORY</strong></p>';
            }
            echo $output;
        }

        public function getCategoryByID() {
            $sql = "SELECT * FROM CATEGORY WHERE ID = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('i', $this->id);
            $stmt->execute();
            $result = $stmt->get_result()->fetch_all();
            $this->name = $result[0][1];
            $this->image = $result[0][2];
        }


        
    }

?>