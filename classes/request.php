<?php 

    include '../config.php';

    class Request {
        public $id;
        public $requestList = [];
        public $conn;

        public function __construct($conn) {   
            $this->conn = $conn;
        }

        public function getRequestInPending() {
            $sql = "SELECT * FROM request_role where checked = 0";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $this->requestList = $stmt->get_result()->fetch_all();
        }

        public function outputRequesList() {
            $output = "";
            foreach ($this->requestlist as $item) {

            }
            echo $output;
        }
    }

?>