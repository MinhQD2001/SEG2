<?php 
    include 'config.php';
    include 'includes/header.php'; 
    include 'includes/profilebody.php'; 
    include 'classes/user.php';

    $user = new User($conn);
    $user->id = $_SESSION['user_id'];
    $user->getUser();
    echo '<pre>' , var_dump($_SESSION) , '</pre>';
    $role = '';
    if ($user->user['role'] >= 3) {
        $role = 'Your role is normal user!';
    } elseif ($user->user['role'] == 2) {
        $role = 'Your role is seller!';
    } elseif ($user->user['role'] == 1) {
        $role = 'Your role is manager';
    } elseif ($user->user['role'] == 0) {
        $role = 'Hello admin';
    }

    if (isset($_POST['save'])) {
        $updatedUser = new User($conn);
        $updatedUser->id = $_SESSION['user_id'];
        $updatedUser->name = $_POST['username'];
        $updatedUser->addr = $_POST['addr'];
        $updatedUser->dob = $_POST['dob'];
        $updatedUser->phone = $_POST['phone'];
        $updatedUser->information = $_POST['information'];
        $updatedUser->updateProfile();
    }
?>

<div class="container">
    <h1 class="text-white">Your Profile - <?php echo $role; ?></h1>
    <hr>
</div>
<!-- AVATAR ĐANG LÀM (_　_)。゜zｚＺ -->
<!-- MẤY CÁI NHƯ NAME, EMAIL CÓ SẴN TRONG DB THÌ CỨ XUẤT RA CÒN CÁI NÀO CHƯA CÓ THÌ ĐỂ USER TỰ BỔ SUNG -->
<div class="profile bg-light mb-5">
    <div class="container p-lg-5">
        <?php if($_SESSION['user_role'] == 3): ?>
            <button  class="btn btn-primary" onclick="upgradeRole(<?php echo $_SESSION['user_id']; ?>, 2)">Request To Upgrade Role To Seller </button>
            <button  class="btn btn-primary" onclick="upgradeRole(<?php echo $_SESSION['user_id']; ?>, 1)">Request To Upgrade Role To Manager </button>
        <?php elseif ($_SESSION['user_role'] == 2): ?>
            <button  class="btn btn-primary" onclick="upgradeRole(<?php echo $_SESSION['user_id']; ?>, 1)">Request To Upgrade Role To Manager </button>
            <button  class="btn btn-primary" onclick="upgradeRole(<?php echo $_SESSION['user_id']; ?>, 3)">Request To Upgrade Role To Normal User </button>
        <?php endif; ?>
        <form class="mt-4" id="profile" action="profile.php" method="POST">

            <!-- Text input -->
        <div class="form-outline mb-4">
            <input name="username" type="text" id="form6Example4" class="form-control" value="<?php echo $user->user['name']; ?>" />
            <label class="form-label" for="form6Example4">Username</label>
        </div>

        <!-- Text input -->
        <div class="form-outline mb-4">
            <input name="addr" type="text" name="username" id="form6Example4" class="form-control"  value="<?php echo $user->user['addr']; ?>" />
            <label class="form-label" for="form6Example4">Address</label>
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
            <input name="email" type="email" id="form6Example5" class="form-control"  value="<?php echo $user->user['email']; ?>" readonly/>
            <label class="form-label" for="form6Example5">Email</label>
        </div>

        <!-- date of birth input -->
        <div class="form-outline mb-4">
            <input name="dob" type="date" id="form6Example5" class="form-control" value="<?php if (isset($user->user['dob'])) echo $user->user['dob']; else echo '0001-01-01'; ?>" />
            <label class="form-label" for="form6Example9">Date of birth</label>
        </div>

        <!-- Number input -->
        <div class="form-outline mb-4">
            <input name="phone" type="text" id="form6Example6" class="form-control"  value="<?php echo $user->user['phone']; ?>" />
            <label class="form-label" for="form6Example6">Phone</label>
        </div>

        <!-- Message input -->
        <div class="form-outline mb-4">
            <textarea name="information" class="form-control" id="form6Example7" rows="4"> <?php echo $user->user['information'];?></textarea>
            <label class="form-label" for="form6Example7">Additional information</label>
        </div>

        <!-- Submit button -->
        <!-- Button trigger modal -->
        <button
        type="button"
        class="btn btn-primary btn-block"
        data-mdb-toggle="modal"
        data-mdb-target="#exampleModal"
        >
        Save
        </button>

        <!-- Modal -->
        <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
        >
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">This will change your information, are you sure?</h5>
                <button
                type="button"
                class="btn-close"
                data-mdb-dismiss="modal"
                aria-label="Close"
                ></button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                Close
                </button>
                <button name="save" type="submit" class="btn btn-primary" onclick="refreshPage()">Save changes</button>
            </div>
            </div>
        </div>
        </div>
        </form>
    </div>
</div>

   
<?php 
    include 'includes/footer.php'; 
?>


