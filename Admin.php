<?php 
    include 'includes/header.php'; 
?>

<h1>Manager Account</h1>

<div class="container mt-4">
    <div class="manager-account p-lg-3">
        <table class="table table-hover table-dark table-bordered">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">role before</th>
                <th scope="col">role after</th>
                <th scope="col">accept</th>
                <th scope="col">deny</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>2</td>
                <td>1</td>
                <td>
                <button type="button" class="btn btn-success btn-sm">
                    <i class="fas fa-check"></i>
                </button>
                </td>
                <td>       
                <button type="button" class="btn btn-danger btn-sm">
                    <i class="fas fa-times"></i>
                </button>
                </td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>2</td>
                <td>2</td>
                <td>
                <button type="button" class="btn btn-success btn-sm">
                    <i class="fas fa-check"></i>
                </button>
                </td>
                <td>       
                <button type="button" class="btn btn-danger btn-sm">
                    <i class="fas fa-times"></i>
                </button>
                </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php 
    include 'includes/footer.php'; 
?>