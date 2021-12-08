<?php 
  include 'config.php';
  include 'includes/header.php';
  include 'includes/profilebody.php';
  include 'classes/category.php';

  $category = new Category($conn);
  $category->getList();

  //echo '<pre>' , var_dump($_SESSION) , '</pre>';

  if (isset($_POST['post_product'])) {
    $new_Product = new Product($conn);
    $new_Product->checkRegistration($_SESSION['user_id'], $_POST['name'], $_POST['price'], $_POST['quantity'], $_POST['description'], $_POST['post_img']);

  }

?>

<style>
  button.btn.btn-secondary.btn-lg.btn-rounded.font-weight-lighter {
    padding-left: 30%;
    padding-right: 30%;
}
</style>

<hr>
<div class="container text-white">
  <h1>Product Manage</h1>
</div> <hr>
<div class="post-item pb-lg-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
              <div class="my-product text-white">
                <div class="title">
                  <h2>My Products</h2> <br>
                </div>
                <div class="products">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="bg-image hover-overlay hover-zoom"> <a href="item.php"> <!-- CHỈNH LẠI LINK NHA ( ﾟдﾟ)つ Bye -->
                        <img src="https://f36-zpg.zdn.vn/6510393195135879787/9345b28526a2edfcb4b3.jpg" class="w-100"/>
                        </a>
                      </div>
                        <hr>
                        <div class="product-info" style="text-align: center;">
                          <p>Product name</p>
                          <p>Price: <span style="color: #b23cfd;"><strong>85<i class="fas fa-dollar-sign"></i></strong></span></p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="bg-image hover-overlay hover-zoom"> <a href="item.php"> <!-- CHỈNH LẠI LINK NHA ( ﾟдﾟ)つ Bye -->
                        <img src="https://f36-zpg.zdn.vn/6510393195135879787/9345b28526a2edfcb4b3.jpg" class="w-100"/>
                        </a>
                      </div>
                        <hr>
                        <div class="product-info" style="text-align: center;">
                          <p>Product name</p>
                          <p>Price: <span style="color: #b23cfd;"><strong>85<i class="fas fa-dollar-sign"></i></strong></span></p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="bg-image hover-overlay hover-zoom"> <a href="item.php"> <!-- CHỈNH LẠI LINK NHA ( ﾟдﾟ)つ Bye -->
                        <img src="https://f36-zpg.zdn.vn/6510393195135879787/9345b28526a2edfcb4b3.jpg" class="w-100"/>
                        </a>
                      </div>
                        <hr>
                        <div class="product-info" style="text-align: center;">
                          <p>Product name</p>
                          <p>Price: <span style="color: #b23cfd;"><strong>85<i class="fas fa-dollar-sign"></i></strong></span></p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="bg-image hover-overlay hover-zoom"> <a href="item.php"> <!-- CHỈNH LẠI LINK NHA ( ﾟдﾟ)つ Bye -->
                        <img src="https://f36-zpg.zdn.vn/6510393195135879787/9345b28526a2edfcb4b3.jpg" class="w-100"/>
                        </a>
                      </div>
                        <hr>
                        <div class="product-info" style="text-align: center;">
                          <p>Product name</p>
                          <p>Price: <span style="color: #b23cfd;"><strong>85<i class="fas fa-dollar-sign"></i></strong></span></p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="bg-image hover-overlay hover-zoom"> <a href="item.php"> <!-- CHỈNH LẠI LINK NHA ( ﾟдﾟ)つ Bye -->
                        <img src="https://f36-zpg.zdn.vn/6510393195135879787/9345b28526a2edfcb4b3.jpg" class="w-100"/>
                        </a>
                      </div>
                        <hr>
                        <div class="product-info" style="text-align: center;">
                          <p>Product name</p>
                          <p>Price: <span style="color: #b23cfd;"><strong>85<i class="fas fa-dollar-sign"></i></strong></span></p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="bg-image hover-overlay hover-zoom"> <a href="item.php"> <!-- CHỈNH LẠI LINK NHA ( ﾟдﾟ)つ Bye -->
                        <img src="https://f36-zpg.zdn.vn/6510393195135879787/9345b28526a2edfcb4b3.jpg" class="w-100"/>
                        </a>
                      </div>
                        <hr>
                        <div class="product-info" style="text-align: center;">
                          <p>Product name</p>
                          <p>Price: <span style="color: #b23cfd;"><strong>85<i class="fas fa-dollar-sign"></i></strong></span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" style="margin-bottom: 20px;">
              <div class="post-product text-white">         <!-- POST PRODUCT  -->
                <div class="title">
                 <h2>Post New Product</h2> <br>
              </div>
              </div>
            <div class="post-btn" style="text-align: center;">
                <!-- Button post -->
                <button
                type="button"
                class="btn btn-secondary btn-lg btn-rounded font-weight-lighter"
                data-mdb-toggle="modal"
                data-mdb-target="#exampleModal"
                >
                POST ITEM
                </button>
            </div>


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
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button
                        type="button"
                        class="btn-close"
                        data-mdb-dismiss="modal"
                        aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">
                        <!-- POST ITEM CHỖ NÀY ~(>_<。)＼ -->
                        <form id="post"  action="postItem.php" method="POST">
                          <div class="mb-3">
                            <label for="" class="form-label">Product Name</label>
                            <input name="name" type="text" class="form-control" id="" aria-describedby="emailHelp">
                          </div>
                          <div class="mb-3">
                            <label for="" class="form-label">Category</label>
                            <select name="category">
                              <?php $category->outputInOption(); echo 'hello'; ?>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label for="" class="form-label">Enter Price</label>
                            <input name="price" type="number" class="form-control" id=""  min="1"  value="1" style="width: 100px;">
                          </div>
                          <div class="mb-3">
                            <label for="" class="form-label">Quantity</label>
                            <input name="quantity" type="number" class="form-control" id=""  min="1" name="" value="1" style="width: 100px;">
                          </div>
                          <div class="mb-3">
                            <label for="" class="form-label">Description</label>
                            <textarea name="description" rows="" cols="" type="text" class="form-control" id=""></textarea>
                          </div>
                          <div class="mb-3">
                            <label for="" class="form-label">Choose image link</label>
                            <input name='post_img' type="text" class="form-control" id="" >
                            <img id="blah" src="data:image/png;base64,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"
                            class="img-fluid" />
                          </div>
                          <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">I agree with the license</label>
                          </div>
                          <button name="post_product" type="submit" class="btn btn-primary">Submit</button>
                          <div class="float-end">
                            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                            Close
                            </button>
                        </div>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
                <hr>
                <div class="Filter-by" >
                  <div>
                    <h2 class="Filter m-lg-1 text-danger" style="font-weight: lighter;">Filter By</h2>
                      <hr>
                    </div>
                      <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingOne">
                            <button
                              class="accordion-button"
                              type="button"
                              data-mdb-toggle="collapse"
                              data-mdb-target="#flush-collapseOne"
                              aria-expanded="true"
                              aria-controls="flush-collapseOne"
                            >
                              Collection
                            </button>
                          </h2>
                          <div
                            id="flush-collapseOne"
                            class="accordion-collapse collapse show"
                            aria-labelledby="flush-headingOne"
                            data-mdb-parent="#accordionFlushExample"
                          >
                            <div class="accordion-body">
                            <ul class="navbar-nav m-lg-2">
                              <li class="nav-item">
                                <a class="nav-link text-black" href="#">- Shop All</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-black" href="#">- Computer</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-black" href="#">- Tablets</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-black" href="#">- Drone & Camera</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-black" href="#">- Audio</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-black" href="#">- Mobile</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-black" href="#">- T.V & Cinema</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-black" href="#">- Wearable Tech</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-black" href="#">- Sale</a>
                              </li>
                            </ul>                  
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                              <button
                                class="accordion-button collapsed"
                                type="button"
                                data-mdb-toggle="collapse"
                                data-mdb-target="#flush-collapseTwo"
                                aria-expanded="false"
                                aria-controls="flush-collapseTwo"
                              >
                                Prices
                              </button>
                            </h2>
                            <div
                              id="flush-collapseTwo"
                              class="accordion-collapse collapse"
                              aria-labelledby="flush-headingTwo"
                              data-mdb-parent="#accordionFlushExample"
                            >
                              <div class="accordion-body">
                              <ul class="navbar-nav m-lg-2">
                              <label class="form-label" for="customRange1">Range 50$ - 100$</label>
                                <div class="range">
                                    <input type="range" class="form-range" id="customRange1" min="50" max="100" step="5"/>
                                  </div>
                                <li class="nav-item">
                                  <a class="nav-link text-black" href="#">- High To Low</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link text-black" href="#">- Low to High</a>
                                </li>
                              </ul>           
                              </div>
                            </div>
                          </div>
                          </div>
                  </div>




            </div>
        </div>
    </div>
</div>

<script>
    imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}
</script>

<?php 
    include 'includes/footer.php';
?>