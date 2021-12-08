<?php 

    class CartItem {
        public $id;
        public $userID;
        public $productID;
        public $quantity;
        public $status;
        public $cart;
        public $cartList = [];
        public $output = '';
        public $conn;
        public $total;

        public function __construct($conn) {
            $this->conn = $conn;
        }

        public function checkCartExist($userID, $productID, $quantity) {
            $this->userID = $userID;
            $this->productID = $productID;
            $this->quantity = $quantity;

            $sql = "SELECT * FROM cart WHERE userID = ? AND productID = ? AND status = 0";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('ii', $this->userID, $this->productID);
            $stmt->execute();
            $results = $stmt->get_result();
            $results = $results->fetch_all();            
            if (count($results) == 0) {                
                $this->addNewCart();
            }
            else {
                echo 'This Product has existed in your cart !!!';
            }
        }

        public function addNewCart() {
            $sql = "INSERT INTO cart (userID, productID, quantity) VALUES (?,?,?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('iii', $this->userID, $this->productID, $this->quantity);
            $stmt->execute();
            echo 'Adding to Your Cart is successful!';
        }

        // GET PRODUCTS STAYED IN CART WHEN USERS CLICK TO THEIR CART
        public function getProductListByUserID($id) {
            $sql = 'select U.name as AUTHOR, P.description as DESCRIPTION, P.post_img as IMAGE, P.name as NAME, C.quantity as QUANTITY, P.price as PRODUCT_PRICE, C.quantity*P.price as SUMARY, C.id, c.userID FROM CART C JOIN PRODUCT P ON  C.productID  = P.id join user U on P.id_provider  = U.id where C.userID = ? AND C.status = 0';
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('i', $id);
            $stmt->execute();
            $results = $stmt->get_result();
            $this->cartList = $results->fetch_all();
        }

        // PRINT SPECIFIC PRODUCT IN CART
        public function outputCartItem() {
            foreach($this->cartList as $item) {
                $this->output .= '
                    <div class="row mb-4">
                        <div class="col-md-5 col-lg-3 col-xl-3">
                            <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                <img class="img-fluid w-100"
                                src="' . $item[2] . '" alt="">
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-9 col-xl-9">
                            <div>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h5>' . $item[3] . '</h5>
                                        <p>Author: <span class="author-name" style="color: #b23cfd;"><strong>' . $item[0] . '</strong></span></p>
                                        <p class="mb-3 text-muted text-uppercase small">Description: ' . $item[1] . '</p>
                                    </div>
                                    <div>
                                        <p>Quantity</p>
                                        <input id="quantity' . $item[7] . '" type="number" min="1" name="" onclick="changeQuantity(' . $item[7] . "," . $item[8] . ')" value="' . $item[4] . '" class="btn btn-outline-dark btn-lg font-weight-lighter mb-lg-3" style="width: 100px;">        
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <a href="#" type="button" onclick="removeCartItem(' . $item[7] . ',' .$item[8] . ')" class="card-link-secondary small text-uppercase"><i
                                            class="fas fa-trash-alt"></i> Remove item </a>
                                        <a href="#" type="button" class="card-link-secondary small text-uppercase"><i
                                            class="fas fa-heart"></i> Move to wish list </a>
                                    </div>
                                    <p class="mb-0"><span><strong id="price">$' . $item[5] . '</strong></span></p class="mb-0">
                                </div>
                                <p class="mb-0"><span><strong id="summary' . $item[7] . '" style="float: right;">SUM: $' . $item[6] . '</strong></span></p class="mb-0">
                                
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                ';
            }
        }

        // CHANGE QUANTITY OF ANY PRODUCT WHEN USERS CLICK BUTTON TO CHANGE QUANTITY
        public function changeCart() {
            $sql = 'UPDATE cart SET quantity = ? WHERE id = ?';
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('ii', $this->quantity, $this->id);
            $stmt->execute();
            
            $sql = 'SELECT P.price*C.quantity FROM product P join cart C on C.productID = P.id WHERE C.id = ?';
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('i', $this->id);
            $stmt->execute();
            $result = $stmt->get_result()->fetch_all();
            echo $result[0][0];
        

        }

        // PRINT ALL INFORMATION OF CART INCLUDED PRODUCT IN CART
        public function outputCart() {
            $this->outputCartItem();
            $count = count($this->cartList);
            $output = '
            <div class="pt-4 wish-list" id="cartList">

                <h5 class="mb-4">Cart (<span><strong> ' . $count . '</strong></span> items)</h5>     
                
                ' . $this->output . '
    
                
                <p class="text-primary mb-0"><i class="fas fa-info-circle mr-1"></i> Do not delay the purchase, adding
                items to your cart does not mean booking them.</p>
  
            </div>
            ';
            echo $output;
        }

        // REMOVE PRODUCT IN CART
        public function deleteCartItem($userID){
            $sql = "DELETE FROM Cart WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('i', $this->id);
            $stmt->execute();

            $this->getProductListByUserID($userID);
            $this->outputCart();
        }

        // GET TOTAL PRICE FOR ALL PRODUCT IN CART
        public function getTotalPrice() {
            $sql = "select sum(c.quantity*p.price) as total from cart c join product p on c.productID = p.id where userID = ? and c.status = 0";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('i',$this->userID);
            $stmt->execute();
            $this->total = $stmt->get_result()->fetch_all()[0][0];
        }

        // WHEN THEY PRESS CHECKOUT, THESE PRODUCT IN USING CART WILL BE CHECKED 'STATUS' = 2 TO SAVE IN HISTORY AND SAVE BILL ID
        public function checkoutCart ($billID) {
            $sql = "UPDATE Cart SET status = 2, billID = ? WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            foreach ($this->cartList as $cart) {
                $stmt->bind_param('ii', $billID, $cart[7]);
                $stmt->execute();
            }
        }

        


    }

?>