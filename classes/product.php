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
        public $category;

        public function __construct($conn) {
            $this->conn = $conn;
        }

        public function checkRegistration ($id_provider, $name, $price, $quantity, $description, $post_img, $category) {
            $this->name = $name;
            $this->price = $price;
            $this->quantity = $quantity;
            $this->id_provider = $id_provider;
            $this->description = $description;
            $this->post_img = $post_img;
            $this->category = $category;

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
            $productID = $stmt->insert_id;
            
            $sql = "INSERT INTO product_category (id_product, id_category) values (?,?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('ii', $productID, $this->category);
            $stmt->execute();

        }

        public function getList() {
            $sql = "SELECT * FROM product WHERE hide = 1";
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
                    $i += 1;
                }
                elseif ($i == 2 ) {
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

        public function getProductById($id) {
            $sql = 'SELECT p.id, p.name, p.price, p.description, p.post_img, u.name FROM product p JOIN user u ON u.id = p.id_provider WHERE p.id = ?';
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('i', $id);
            $stmt->execute();
            $result = $stmt->get_result();
            $this->product = $result->fetch_all();
        }
        
        public function getProductByCategory($categoryID) {
            $sql = 'SELECT p.id, p.id_provider, p.name, p.price, p.description, p.date_created, p.post_img, p.quantity, p.hide FROM product p JOIN product_category pc ON p.id = pc.id_product  JOIN category c ON pc.id_category = c.id WHERE p.hide = 1 AND c.id = ?';
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('i', $categoryID);
            $stmt->execute();
            $this->productList = $stmt->get_result()->fetch_all();
        }

        public function getProductRelated() {
            $sql = 'select pc.id_category from product p join product_category pc on p.id  = pc.id_product where p.id = ?';
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('i', $this->id);
            $stmt->execute();
            $result = $stmt->get_result()->fetch_all();

            $sql = 'select * from product p join product_category pc on p.id = pc.id_product where pc.id_category = ? and p.hide = 1';
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('i', $result[0][0]);
            $stmt->execute();
            $this->productList = $stmt->get_result()->fetch_all();
        }

        public function outputProductRelated() {
            $output = '';
            $i = 1;
            foreach ($this->productList as $item) {
                if ($i == 1) {
                    $output .= '
                        <div class="carousel-item active" data-mdb-interval="10000">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="bg-image hover-overlay hover-zoom"> 
                                        <a href="item.php?id=' . $item[0] . '">
                                            <img src="' . $item[6] . '" class="w-100"/>                        
                                        </a>
                                    </div>
                                    <div class="product-info" style="text-align: center;">
                                        <p>' . $item[2] . '</p>
                                        <p>Price: <span style="color: #b23cfd;"><strong>' . $item[3] . '<i class="fas fa-dollar-sign"></i></strong></span></p>
                                    </div>                              
                                </div>
                    ';
                    $i += 1;
                }
                elseif ($i == 2) {
                    $output .= '
                        <div class="carousel-item" data-mdb-interval="10000">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="bg-image hover-overlay hover-zoom"> 
                                        <a href="item.php?id=' . $item[0] . '">
                                            <img src="' . $item[6] . '" class="w-100"/>                        
                                        </a>
                                    </div>
                                    <div class="product-info" style="text-align: center;">
                                        <p>' . $item[2] . '</p>
                                        <p>Price: <span style="color: #b23cfd;"><strong>' . $item[3] . '<i class="fas fa-dollar-sign"></i></strong></span></p>
                                    </div>                              
                                </div>
                    ';
                }else {
                    $output .= '
                    <div class="col-md-4">
                        <div class="bg-image hover-overlay hover-zoom"> 
                            <a href="item.php?id=' . $item[0] . '">
                                <img src="' . $item[6] . '" class="w-100"/>                        
                            </a>
                        </div>
                        <div class="product-info" style="text-align: center;">
                            <p>' . $item[2] . '</p>
                            <p>Price: <span style="color: #b23cfd;"><strong>' . $item[3] . '<i class="fas fa-dollar-sign"></i></strong></span></p>
                        </div>                              
                    </div>
                    ';
                }
                if ($i == 4) {
                    $output .= '                            
                    </div>
                    </div>';
                    $i = 1;
                }
                $i += 1;
            }

            if ($i != 2) {
                $output .= '                            
                    </div>
                </div>';
            }
            echo $output;
        }

        public function addToWishList($userID) {
            $sql = "SELECT count(*) FROM wish_list WHERE userID = ? AND productID = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('ii', $userID, $this->id);
            $stmt->execute();
            $result = $stmt->get_result()->fetch_all();

            if ($result[0][0] == 0) {
                $sql = "INSERT INTO wish_list (userID, productID) VALUES (?,?)";
                $stmt = $this->conn->prepare($sql);
                $stmt->bind_param('ii', $userID, $this->id);
                $stmt->execute();
                echo 'ADDING TO WISH LIST IS SUCCESSFUL!';
            }
            else {
                $sql = "DELETE FROM wish_list WHERE userID = ? AND productID = ?";
                $stmt = $this->conn->prepare($sql);
                $stmt->bind_param('ii', $userID, $this->id);
                $stmt->execute();
                echo 'REMOVING TO WISH LIST IS SUCCESSFUL!';
            }
        }

        public function getProductFromWishList($userID) {
            $sql = "select * from product p join wish_list wl on p.id = wl.productID where wl.userID = ? and p.hide = 1";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('i', $userID);
            $stmt->execute();
            $this->productList = $stmt->get_result()->fetch_all();
        }

        // using in favourite page
        public function outputProductList() {
            $output = ' 
                <div class="title pt-lg-5" style="text-align: center;">
                    <h1 style="font-weight: inherit;"> YOUR WISH LIST</h1>
                </div>
            ';
            $i = 1;
            foreach($this->productList as $product) {
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
            if (count($this->productList) == 0) {
                $output .= '<p><strong>THERE ARE NOT ANY PRODUCTS FOR THIS CATEGORY</strong></p>';
            }
            echo $output;
        }

        public function getProductInPending() {
            $sql = "SELECT P.post_img, P.name, U.name, C.name, P.price, P.description, P.date_created, P.quantity, P.id FROM product P JOIN user U ON P.id_provider = U.id JOIN product_category PC ON P.id = PC.id_product JOIN category C ON PC.id_category = C.id WHERE hide = 0";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $this->productList = $stmt->get_result()->fetch_all();
        }

        public function outputProductInPending() {
            $output = '';
            foreach($this->productList as $product) {
                $output .= '
                <div class="row mb-4">
                <div class="col-md-5 col-lg-3 col-xl-3">
                  <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                    <img class="img-fluid w-100"
                      src=" ' . $product[0] . ' " alt="Sample">
                    <a href="#!">
                    </a>
                  </div>
                </div>
                <div class="col-md-7 col-lg-9 col-xl-9">
                  <div>
                    <div class="d-flex justify-content-between">
                      <div>
                        <h5>Product Name: ' . $product[1] . '</h5>
                        <p>Author: <span class="author-name" style="color: #b23cfd;"><strong> ' . $product[2] . '</strong></span></p>
                        <p class="mb-3 text-muted text-uppercase small"><strong>Category:</strong> ' . $product[3] . '</p>
                        <p class="mb-2 text-muted text-uppercase small"><strong>Price</strong>: $' . $product[4] . '</p>
                        <p class="mb-2 text-muted text-uppercase small"><strong>Quantity</strong>: $' . $product[7] . '</p>
                        <p class="mb-3 text-muted text-uppercase small"><strong>Description</strong>: ' . $product[5] . '</p>
                        <p class="mb-3 text-muted text-uppercase small"><strong>Date created</strong>: ' . $product[6] . '</p>  <!-- XUẤT NGÀY SẢN PHẨM ĐƯỢC TẠO -->
                      </div>
                      <div>
                      </div>
                    </div>
                <button class="btn btn-danger" onclick="confirmProduct('. $product[8] .',2)"><i class="fa fa-trash" aria-hidden="true"></i> Refuse</button>
                <button class="btn btn-success" onclick="confirmProduct('. $product[8] .',1)"><i class="fas fa-check"></i> Confirm</button>
                  </div>
                </div>
              </div>
              <hr class="mb-4">
                ';
            }
            echo $output;
        }

        public function confirmProduct($i) {
            $sql = "UPDATE product SET hide = ? WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('ii', $i, $this->id);
            $stmt->execute();
        }

        public function getProductHistory() {
            $sql = "select distinct b.id from cart c join bill b on b.id = c.billID where c.userID = ? ";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('i', $this->id);
            $stmt->execute();
            $results = $stmt->get_result()->fetch_all();        

            if (count($results) > 0) {
                foreach($results as $id) {
                    $sql = "select p.post_img, p.name, u.name, ca.name, p.price, p.description, b.date_created, c.quantity from product p join product_category pc on p.id = pc.id_product join category ca on pc.id_category = ca.id join cart c on c.productID = p.id join `user` u on p.id_provider = u.id join bill b on c.billID = b.id where c.billID = ?";
                    $stmt = $this->conn->prepare($sql);
                    $stmt->bind_param('i', $id[0]);
                    $stmt->execute();
                    $this->productList = $stmt->get_result()->fetch_all();
                    $this->outputHistory();     
                }
            }
            else {
                echo '<h1>Yo</h1>';
            }

        }

        public function outputHistory() {
            $output = '';
            foreach($this->productList as $product) {
                $output .= '
                <div class="row mb-4">
                <div class="col-md-5 col-lg-3 col-xl-3">
                  <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                    <img class="img-fluid w-100"
                      src="'. $product[0] .'" alt="Sample">
                    <a href="#!">
                    </a>
                  </div>
                </div>
                <div class="col-md-7 col-lg-9 col-xl-9">
                  <div>
                    <div class="d-flex justify-content-between">
                      <div>
                        <h5>'. $product[1] .'</h5>
                        <p>Author: <span class="author-name" style="color: #b23cfd;"><strong>'. $product[2] .'</strong></span></p>
                        <p class="mb-3 text-muted text-uppercase small">Category: '. $product[3] .'</p>
                        <p class="mb-2 text-muted text-uppercase small">Price: '. $product[4] .'</p>
                        <p class="mb-3 text-muted text-uppercase small">Description: '. $product[5] .'</p>
                        <p class="mb-3 text-muted text-uppercase small">Date: '. $product[6] .'</p> <!-- Ngày sản phẩm được mua -->
                      </div>
                      <div>
                        <div class="def-number-input number-input safari_only mb-0 w-100">
                        <p>Quantity</p>
                          <input class="quantity" min="0" name="quantity" value="'. $product[7] .'" type="number" readonly>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <hr class="mb-4">
                ';
                
            }
            echo $output;
        }

        public function getOwnProducts($userID) {
            $sql = "SELECT * FROM PRODUCT WHERE id_provider = ? and hide = 1";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('i', $userID);
            $stmt->execute();
            $this->productList = $stmt->get_result()->fetch_all();
        }

        public function outputOwnProducts() {
            $output = '';
            foreach($this->productList as $item) {
                $output .= '
                    <div class="col-md-4">
                    <div class="bg-image hover-overlay hover-zoom"> <a href="item.php"> 
                    <img src=" ' . $item[6] . '" class="w-100"/>
                    </a>
                    </div>
                    <hr>
                    <div class="product-info" >
                        <p>Product name: ' . $item[2] . '</p>
                        <p>Price: <span style="color: #b23cfd;"><strong><i class="fas fa-dollar-sign"></i>' . $item[3] . '</strong></span></p>
                    <div class="product-btn mb-5">
                        <div class="row">
                        <div class="col-md-6">
                            <!-- Button modal -->
                        <button
                            type="button"
                            class="btn btn-primary btn-block"
                            data-mdb-toggle="modal"
                            data-mdb-target="#productBtn"
                        >
                            Edit
                        </button>

                        <!-- Modal -->
                        <div
                            class="modal fade"
                            id="productBtn"
                            tabindex="-1"
                            aria-labelledby="productBtnLabel"
                            aria-hidden="true"
                        >
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="productBtnLabel">Edit Your Product</h5>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-mdb-dismiss="modal"
                                    aria-label="Close"
                                ></button>
                                </div>
                                <div class="modal-body">
                                <form id="post"  action="postItem.php" method="POST">
                                    <div class="mb-3">
                                    <label for="" class="form-label">Product Name</label>
                                    <input name="name" type="text" class="form-control" id="" aria-describedby="emailHelp" value="'. $item[2] .'">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Enter Price</label>
                                    <input name="price" type="number" class="form-control" id=""  min="1"  value="'. $item[3] .'" style="width: 100px;">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Quantity</label>
                                    <input name="quantity" type="number" class="form-control" id=""  min="1" value="'. $item[7] .'" style="width: 100px;">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Description</label>
                                    <textarea name="description" rows="" cols="" type="text" class="form-control" id="">'. $item[4] .'</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Choose image link</label>
                                    <input name="post_img" type="text" class="form-control" id="" value="'. $item[6] .'" >
                                    <img id="blah" src="'. $item[6] .'"
                                    class="img-fluid" />
                                </div>
                                <button name="save" type="submit" class="btn btn-primary">Save changes</button>
                                <div class="float-end">
                                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                                    Close
                                    </button>
                                </div>
                                <input name="id" type="text" value="'. $item[0] .'" hidden>
                                </form>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <button
                            type="button"
                            class="btn btn-danger btn-block" 
                            onclick="deleteProduct('. $item[0] .')"
                        >
                            Delete
                        </button>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                ';
            }
            echo $output;
        }

        public function deleteProduct() {
            $sql = "UPDATE product set hide = 2 where id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('i', $this->id);
            $stmt-> execute();
            echo 'successful deleting';
        }

        public function updateProduct() {
            $sql = "UPDATE product set name = ?, price = ?, description = ?, quantity = ?, post_img = ? WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('sisisi', $this->name, $this->price, $this->description, $this->quantity, $this->post_img, $this->id);
            $stmt->execute();
            echo 'sucessful updateing';
        }

    }

?>