<?php 

    class Bill {
        public $id;
        public $fname;
        public $lname;
        public $address;
        public $email;
        public $phone;
        public $information;
        public $bill;
        public $conn;

        public function __construct($conn) {
            $this->conn = $conn;
        }

        // WHEN USER CLICK CHECKOUT AND FINISH PAYMENT, CREATE A BILL TO SAVE ALL PRODUCTS THEY CHECKOUTED
        public function createBill() {
            $sql = "INSERT INTO bill (firstName, lastName, phone, email, address, information) VALUES (?,?,?,?,?,?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('ssssss', $this->fname, $this->lname, $this->phone, $this->email, $this->address, $this->information);
            $stmt->execute();
            $this->id =$stmt->insert_id;
        }
        
    }

?>