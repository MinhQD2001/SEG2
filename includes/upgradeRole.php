<?php  
    include '../config.php';
    include '../classes/user.php';

    if (isset($_POST)) {
        $user = new User($conn);
        $user->id = $_POST['userID'];
        $user->role = $_SESSION['user_role'];
        $user->sendRequestRole($_POST['requiredRole']);
    }



?>
