<?php 

    include 'config.php';
    include 'classes/user.php';

    if ((isset($_GET['id']))) {
        $user = new User($conn);
        $user->id = $_GET['id'];
        $user->getUser();
    }

    if (isset($_POST['update'])) {
        $user = new User($conn);
        $user->id = $_SESSION['user_id'];
        var_dump($user);
        if (isset($_POST['password'])) { // Update Password
            $user->updateUser($_POST['name'], $_POST['password'], $_POST['re_password'], $_POST['phone'], $_POST['address'], $_POST['dob']);
        } else {
            $user->updateUser($_POST['name'], null, null, $_POST['phone'], $_POST['address'], $_POST['dob']);
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_profile.css">
    <title>TDStore -Technology</title>
</head>
<body>
<div class="wrapper bg-white mt-sm-5">
    <form action="profile.php" method="post">
        <h4 class="pb-4 border-bottom">Account settings</h4>
        <a href="index.php"><button type="button" class="btn btn-outline-dark mt-3 mb-2" ">Back To Home</button></a>
        <div class="d-flex align-items-start py-3 border-bottom"> <img src="https://images.pexels.com/photos/1037995/pexels-photo-1037995.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img" alt="">
            <div class="pl-sm-4 pl-2" id="img-section"> <b>Profile Photo</b>
                <p>Accepted file type .png. Less than 1MB</p> <button class="btn button border"><b>Upload</b></button>
            </div>
        </div>
        <div class="py-2">
            <div class="row py-2">
                <div class="col-md"> <label for="username">Username</label> 
                <input name="name" type="text" class="bg-light form-control" value="<?php if ($user->user['name']) echo htmlspecialchars($user->user['name']);?>"></div>
            </div>
            <div class="row py-2">
                <div class="col-md-6"> <label for="email">Email Address</label> <input type="text" name="email" class="bg-light form-control" value="<?php if ($user->user['email']) echo htmlspecialchars($user->user['email']); ?>" disabled > </div>
                <div class="col-md-6 pt-md-0 pt-3"> <label for="phone">Phone Number</label> <input name="phone" type="tel" class="bg-light form-control" value="<?php if ($user->user['phone']) echo htmlspecialchars($user->user['phone']); ?>"> </div>
            </div>
            <div class="row py-2">
                <div class="col">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="bg-light form-control" value="<?php if ($user->user['addr']) echo htmlspecialchars($user->user['addr']); ?>">
                </div>
            </div>
            <div class="row py-2">
                <div class="col-md-6">
                    <label for="dob">Day of birth</label>
                    <input type="date" class="bg-light form-control" name="dob" value="<?php if ($user->user['dob']) echo htmlspecialchars($user->user['dob']); ?>">  <!--NOT YET SET VALUE;-->
                </div>
                <div class="col-md-6">
                    <label for="role">Your Account</label>
                    <label for="role" class="bg-light form-control" name="role">Customer</label>
                </div>
            </div>
            <div class="row py-2">
                <div class="col">
                    <button id="changePW" type="button" onclick="changePassword" class="btn btn-primary">Change Password</button>
                </div>
            </div>
            <div class="row py-2 dynamicChange"></div> 
            <div class="py-3 pb-4 border-bottom"> <button type="submit" name="update" class="btn btn-primary mr-3">Save Changes</button> <button class="btn border button">Cancel</button> </div>
        </div>
    </form>
</div>
<script src="js/changepw.js"></script>
</body>
</html>