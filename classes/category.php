<?php 

    class Category {
        public $id;
        public $name;
        public $conn;
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
            foreach($this->list as $product) {
                $output .= "<option value={$product['id']}>  {$product['name']}  </option>";
            }
            echo $output;
        }
    }

?>