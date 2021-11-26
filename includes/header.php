<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>TDStore</title>
    <link rel="stylesheet" href="index.css">
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->

    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="dev/css/new-prism.css" />
    <!-- Custom styles -->

  </head>
  <body>
    <header>
      <div class="site-header p-2 bg-dark text-white">
        <div class="header-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6" style="align-self: center;">
                      <i class="fas fa-box mx-2"></i> Free Shipping for orders over 50$
                    </div>
                    <div class="col-md-6">
                        <ul class="nav float-right justify-content-end">
                            <li class="nav-item"><a class="nav-link" href="">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="">Contact</a></li>
                            <li class="nav-item"><a class="nav-link" href="">Help Center</a></li>
                            <li class="nav-item"><a class="nav-link" href="">Call us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container">
          <!-- Toggle button -->
          <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars"></i>
          </button>

          <!-- Collapsible wrapper -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="index.php">
              <h2 class="font-weight-bold">TechStore</h2>
            </a>
            <form class="d-flex input-group w-auto m-3">
              <input
                type="search"
                class="form-control"
                placeholder="Search..."
                aria-label="Search"
                style="border-radius: 30px 0px 0px 30px;"
              />
              <button
                class="btn btn-outline-primary"
                type="button"
                data-mdb-ripple-color="dark" style="border-radius: 0px 30px 30px 0px;"
              >
                Search  <i class="fas fa-search"></i>
              </button>
            </form>
          </div>
          <!-- Collapsible wrapper -->

          <!-- Right elements -->

           <!-- Left links -->
            <ul class="navbar-nav flex-row d-none d-md-flex m-lg-2 mx-lg-4 gap-3">
              <li class="nav-item">
                <a class="nav-link" href="login.php"><i class="fas fa-user"></i> Log In </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-heart"></i> Favorites </a>
              </li>
            </ul>
            <!-- Left links -->

          <div class="d-flex align-items-center">
            <!-- Icon -->
            <a class="text-reset me-3" href="#">
              <i class="fas fa-shopping-cart"></i>
            </a>

            <!-- Notifications -->
            <a
              class="text-reset me-3 dropdown-toggle hidden-arrow"
              href="#"
              id="navbarDropdownMenuLink"
              role="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
            >
              <i class="fas fa-bell"></i>
              <span class="badge rounded-pill badge-notification bg-danger">1</span>
            </a>
            <ul
              class="dropdown-menu dropdown-menu-end"
              aria-labelledby="navbarDropdownMenuLink"
            >
              <li>
                <a class="dropdown-item" href="#">Some news</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Another news</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>

            <!-- Avatar -->
            <a
              class="dropdown-toggle d-flex align-items-center hidden-arrow"
              href="#"
              id="navbarDropdownMenuLink"
              role="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
            >
              <img
                src="https://steamuserimages-a.akamaihd.net/ugc/974353381258701515/67DFC214C7166FAECF380BFACC10976AA2D86D1D/?imw=1024&imh=1024&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=true"
                class="rounded-circle"
                height="25px"
                width="25px"
                alt=""
                loading="lazy"
              />
            </a>
            <ul
              class="dropdown-menu dropdown-menu-end"
              aria-labelledby="navbarDropdownMenuLink"
            >
              <li>
                <a class="dropdown-item" href="profile.php">My profile</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Settings</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Logout</a>
              </li>
            </ul>
          </div>
          <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
      </nav>
      
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #c7c7c7bd;">
        <div class="container gap-lg-5">
          <h2 class="navbar-brand mb-0" href="#" style="font-weight: lighter; ">CATEGORIES</h2> <div class="vertical"></div>
          <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars"></i>
          </button>          
          <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav gap-lg-5">
            <li class="nav-item">
              <a class="nav-link" href="ShopAll.php">Shop All</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Computer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tablets</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Drone & Camera</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Audio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Mobile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sale</a>
            </li>
          </ul>
          </div>
        </div>
      </nav>
    </header>