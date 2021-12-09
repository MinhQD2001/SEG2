<?php 

    include '../config.php';
    include '../classes/request.php';

    $request = new Request($conn);
    $request->id = $_POST['requestID']; 
    $request->confirmRequest($_POST['value'], $_SESSION['user_id'], $_POST['before'], $_POST['after']);

?>