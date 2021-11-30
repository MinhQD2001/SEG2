<?php 

    class CartItem {
        public $id;
        public $userID;
        public $productID;
        public $quantity;
        public $status;
        public $cart;
        public $cartList = [];
        public $conn;

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

        public function getListByUserID() {
            
        }
    }

?>