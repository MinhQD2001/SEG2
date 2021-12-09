<?php 

    class Request {
        public $id;
        public $requestList = [];
        public $conn;

        public function __construct($conn) {   
            $this->conn = $conn;
        }

        public function getRequestInPending() {
            $sql = "SELECT u.name, rr.roleBefore, rr.requiredRole, rr.id FROM request_role rr join user u on u.id = rr.userID where checked = 0";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $this->requestList = $stmt->get_result()->fetch_all();
        }

        public function outputRequesList() {
            $output = "";
            $i = 1;
            foreach ($this->requestList as $item) {
                $output .= '
                <tr>
                    <th scope="row">'. $i .'</th>
                    <td>'. $item[0] .'</td>
                    <td>'. $item[1] .'</td>
                    <td>'. $item[2] .'</td>
                    <td>
                    <button type="button" class="btn btn-success btn-sm" onclick="confirmRequest('. $item[3] .', 0, '. $item[1].', '. $item[2].')">
                        <i class="fas fa-check"></i>
                    </button>
                    </td>
                    <td>       
                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmRequest('. $item[3] .', 1, '. $item[1].', '. $item[2].')">
                        <i class="fas fa-times"></i>
                    </button>
                    </td>
                </tr>
                ';
                $i += 1;
            }
            echo $output;
        }

        public function confirmRequest($value, $adminID, $before, $after) {
            $sql = "UPDATE request_role set roleAfter = ?, checked = 1, adminID = ? WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            if ($value == 0) {
                $stmt->bind_param('iii', $after, $adminID, $this->id);
            } else {
                    $stmt->bind_param('iii', $before, $adminID, $this->id);
                }
            $stmt->execute();

            $sql = "SELECT userID, roleAfter FROM request_role WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('i', $this->id);
            $stmt->execute();
            $result = $stmt->get_result()->fetch_all();

            $sql = "UPDATE user SET role = ? WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('ii', $result[0][1], $result[0][0]);
            $stmt->execute();
            echo 'Susscessful Confirming!!!';
        }
    }

?>