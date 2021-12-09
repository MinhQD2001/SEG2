<?php 
    include 'config.php';
    include 'includes/header.php'; 
    include 'classes/request.php';

    $request = new Request($conn);
    $request->getRequestInPending();

    //echo '<pre>' , var_dump($request->requestList[0]) , '</pre>';

?>

<h1 style="text-align: center">Welcome to Admin page</h1>
<h2 style="text-align: center">Upgrading Role Request</h2>

<div class="container mt-4">
    <div class="manager-account p-lg-3">
        <table class="table table-hover table-dark table-bordered">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">being role</th>
                <th scope="col">required role</th>
                <th scope="col">accept</th>
                <th scope="col">deny</th>
                </tr>
            </thead>
            <tbody>
                <?php $request->outputRequesList(); ?>
            </tbody>
        </table>
    </div>
</div>

<?php 
    include 'includes/footer.php'; 
?>