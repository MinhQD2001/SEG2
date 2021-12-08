
<style>
    .user-area{
        background-image: url(https://f34-zpg.zdn.vn/8054507240989752783/c0652711070fcc51951e.jpg);
        height: 50vh;
        background-size: cover;
        background-repeat: no-repeat;
        border-radius: 30px;
    }

    .profile {
    margin-left: 20%;
    margin-right: 20%;
    }


</style>

    <div class="Profile-info bg-dark">
        <div class="container pt-lg-3 pb-lg-3">
            <div class="background-photo">
                <div class="user-area">
                    <div>
                        <div class="profile position bottom-0 start-0">
                            <!-- <img
                             src=""
                             class="rounded-circle"
                             height="125px"
                             width="125px"
                             alt=""
                             loading="lazy"
                            /> -->
                        </div>
                    </div>
                </div>
              <div class="nav-list">
              <nav class="navbar navbar-expand-lg rounded-5">
                <div class="container-fluid">
                    <button
                    class="navbar-toggler"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#navList"
                    aria-controls="navList"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                    >
                    <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navList">
                    <ul class="navbar-nav gap-4">
                        <li class="nav-item">
                        <a class="nav-link" href="ShopAll.php">My Orders</a>
                        </li>
                        <hr>
                        <?php if($_SESSION['user_role'] < 3): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="postItem.php">Post Item</a>
                            </li>
                            <hr>
                        <?php endif; ?>
                        <li class="nav-item">
                        <a class="nav-link" href="profile.php">My Account</a>
                        </li>
                        <hr>
                        <li class="nav-item">
                        <a class="nav-link" href="history.php">My history</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
