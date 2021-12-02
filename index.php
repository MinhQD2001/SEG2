
<?php 
    include 'config.php';
    include 'includes/header.php'; 
    include 'classes/product.php';

    $product = new Product($conn);
    $product->getList();
    
?>

<style>
  img.brand {
      padding: 20px;
  }

  .bg-image.hover-overlay.hover-zoom {
    text-align: center;
    padding: 10%;
}

</style>
<div class="Carousel">
<div
    id="carouselCrossfade"
    class="carousel slide carousel-fade"
    data-mdb-ride="carousel"
  >
    <div class="carousel-indicators">
      <button
        type="button"
        data-mdb-target="#carouselCrossfade"
        data-mdb-slide-to="0"
        class="active"
        aria-current="true"
        aria-label="Slide 1"
      ></button>
      <button
        type="button"
        data-mdb-target="#carouselCrossfade"
        data-mdb-slide-to="1"
        aria-label="Slide 2"
      ></button>
      <button
        type="button"
        data-mdb-target="#carouselCrossfade"
        data-mdb-slide-to="2"
        aria-label="Slide 3"
      ></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img
          src="https://f46-zpg.zdn.vn/4214013994893676610/1302db97f6fa3da464eb.jpg"
          class="d-block w-100"
          alt="..."
        />
        <div class="mask">
          <div class="container m-lg-5" style="padding: 8%;">
            <div class="text-black mt-5">
              <span class="badge bg-danger">Best Prices</span>
              <div class="text-title pb-lg-3"> 
                <h1>Incredible Prices</h1> 
                <h1>on All Your </h1>
                <h1>Favorite Items</h1>
              </div>
              <p style="font-weight: lighter; font-size: larger;">Get more for less on selected brands</p>
            <button type="button" class="btn btn-danger btn-lg btn-rounded font-weight-lighter" style="padding-left: 10%;
            padding-right: 10%;">Shop Now</button>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img
          src="https://f47-zpg.zdn.vn/7366610528543560644/b7786f37425a8904d04b.jpg"
          class="d-block w-100"
          alt="..."
        />
        <div class="mask">
          <div class="container m-lg-5" style="padding: 8%;">
            <div class="text-black mt-5">
              <span class="badge bg-danger">Best Prices</span>
              <div class="text-title pb-lg-3"> 
                <h1>Incredible Prices</h1> 
                <h1>on All Your </h1>
                <h1>Favorite Items</h1>
              </div>
              <p style="font-weight: lighter; font-size: larger;">Get more for less on selected brands</p>
            <button type="button" class="btn btn-info btn-lg btn-rounded font-weight-lighter" style="padding-left: 10%;
            padding-right: 10%;">Shop Now</button>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img
          src="https://f18-zpg.zdn.vn/9070865455661440720/4b2738ec1581dedf8790.jpg"
          class="d-block w-100"
          alt="..."
        />
        <div class="mask">
          <div class="container m-lg-5" style="padding: 8%;">
            <div class="text-black mt-5">
              <span class="badge bg-danger">Best Prices</span>
              <div class="text-title pb-lg-3"> 
                <h1>Incredible Prices</h1> 
                <h1>on All Your </h1>
                <h1>Favorite Items</h1>
              </div>
              <p style="font-weight: lighter; font-size: larger;">Get more for less on selected brands</p>
            <button type="button" class="btn btn-secondary btn-lg btn-rounded font-weight-lighter" style="padding-left: 10%;
            padding-right: 10%;">Shop Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button
      class="carousel-control-prev"
      type="button"
      data-mdb-target="#carouselCrossfade"
      data-mdb-slide="prev"
    >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button
      class="carousel-control-next"
      type="button"
      data-mdb-target="#carouselCrossfade"
      data-mdb-slide="next"
    >
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

</div>

<div class="body-page" style="background-color: rgb(235, 231, 231);">


<div class="Ad-area"> <!-- Ad area -->
  <div class="container pt-lg-4 pb-3" style="max-width: max-content;"> 
    <div class="row">
      <div class="col-lg-6">
        <div class="bg-image">
          <img
            src="https://f49-zpg.zdn.vn/1197879776714286550/5eb1b11c2aafe2f1bbbe.jpg"
            class="img-fluid" style="height: 60vh; margin-bottom: 10px;"
          />
          <div class="mask">
            <div class="container m-lg-5">
              <div class="text-white mt-5">
                <p>Holiday Deals</p>
                <h1>Up to </h1>
                <h1> 30% off</h1>
                <p>Selected Smartphone Brands </p>
              <button type="button" class="btn btn-danger btn-lg btn-rounded" style="padding-left: 10%;
              padding-right: 10%;">Shop</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="bg-image">
          <img
            src="https://f43-zpg.zdn.vn/2035427347813886865/f631b6b72004e85ab115.jpg"
            class="img-fluid" style="height: 60vh; margin-bottom: 10px;"
          />
          <div class="mask">
            <div class="container m-lg-5">
              <div class="text-white mt-5">
                <p>Just In</p>
                <h1>Take Your</h1>
                <h1>Sound</h1>
                <h1>Anywhere</h1>
                <p>Top Headphone Brands </p>
              <button type="button" class="btn btn-secondary btn-lg btn-rounded" style="padding-left: 10%;
              padding-right: 10%;">Shop</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
</div> <!-- End Ad area -->


  <div class="promo-area"> <!-- Promo area -->
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo1">
                    <i class="fas fa-clock"></i>
                    <p>30 Days return</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo2">
                    <i class="fa fa-truck"></i>
                    <p>Free shipping</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo3">
                    <i class="fa fa-lock"></i>
                    <p>Secure payments</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo4">
                    <i class="fa fa-gift"></i>
                    <p>New products</p>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End promo area -->
   
  <div class="sale p-lg-5"> <!-- Sale area -->
  <div class="container bg-white">
    <div class="best-sellers m-lg-2">
      <div class="title p-lg-5 pt-lg-5" style="text-align: center;">
        <h3 style="font-weight: inherit;">Best Sellers</h3>
      </div>
      <div class="saler-item">
        <div class="row">                
          <div id="carouselInterval" class="carousel slide carousel-dark" data-mdb-ride="carousel">
        <div class="carousel-inner">
            <!-- <div class="carousel-item active" data-mdb-interval="10000">
                <div class="row">
                    <div class="col-md-4">
                    <div class="bg-image hover-overlay hover-zoom">
                        <img src="https://anphat.com.vn/media/product/39874_61165_laptop_acer_gaming_aspire_7_a715_42g_r6zr_nhqaysv003_den_2021_16.jpg" class="w-100"/>
                        <a href="#">
                        </a>
                    </div>
                    <div class="product-info" style="text-align: center;">
                    <p>Product name</p>
                    <p>Price: <span style="color: #b23cfd;"><strong>85<i class="fas fa-dollar-sign"></i></strong></span></p>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="bg-image hover-overlay hover-zoom">
                        <img src="https://f32-zpg.zdn.vn/1457401252024849308/f660d163ef44241a7d55.jpg" class="w-100"/>
                        <a href="#">
                        </a>
                    </div>
                    <div class="product-info" style="text-align: center;">
                    <p>Product name</p>
                    <p>Price: <span style="color: #b23cfd;"><strong>85<i class="fas fa-dollar-sign"></i></strong></span></p>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="bg-image hover-overlay hover-zoom">
                        <img src="https://f34-zpg.zdn.vn/6970985277037837139/18e23740492c8272db3d.jpg" class="w-100"/>
                        <a href="#">
                        </a>
                    </div>
                    <div class="product-info" style="text-align: center;">
                    <p>Product name</p>
                    <p>Price: <span style="color: #b23cfd;"><strong>85<i class="fas fa-dollar-sign"></i></strong></span></p>
                    </div>
                    </div>
                </div>
            </div> -->
            <?php $product->outputProduct($product->productList); ?>
        </div>
        <button
            class="carousel-control-prev"
            data-mdb-target="#carouselInterval"
            type="button"
            data-mdb-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next"
            data-mdb-target="#carouselInterval"
            type="button"
            data-mdb-slide="next"
        >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
        </div>
      </div>
      <div class="view-all p-lg-5" style="text-align: center;">
        <button type="button" class="btn btn-secondary btn-lg btn-rounded" style="padding-left: 10%;
        padding-right: 10%; font-weight: 100;">View All</button>
      </div>
    </div>
  </div>
</div> <!-- End sale area -->
  
<div class="shop-category pb-lg-5">
  <div class="container bg-white">
    <div class="title p-lg-5" style="text-align: center;">
      <h3 style="font-weight: inherit;">Shop by Category</h3>
    </div>
    <div class="category-item pb-lg-5">
      <div class="row pb-lg-5">
        <div class="col-3" style="width: 20%;">
          <div class="bg-image hover-overlay hover-zoom hover-shadow ripple rounded-circle">
            <img src="https://f51-zpg.zdn.vn/9034500808923565390/cc5831aaf8c933976ad8.jpg" class="w-100"/>
            <a href="ShopAll.php?categoryID=1">
              <div class="mask" style="background-color: rgba(118, 148, 158, 0.2)"></div>
            </a>
          </div>
          <div class="category-name">
            <a href=""><h5>Computers</h5></a>
          </div>
        </div>
        <div class="col-3" style="width: 20%;">
          <div class="bg-image hover-overlay hover-zoom hover-shadow ripple rounded-circle">
            <img src="https://f51-zpg.zdn.vn/3823744618258217738/d740f01e327df923a06c.jpg" class="w-100"/>
            <a href="ShopAll.php?categoryID=5">
              <div class="mask" style="background-color: rgba(118, 148, 158, 0.2)"></div>
            </a>
          </div>
          <div class="category-name">
            <a href="ShopAll.php?categoryID=5"><h5>Mobile</h5></a>
          </div>
        </div>
        <div class="col-3" style="width: 20%;">
          <div class="bg-image hover-overlay hover-zoom hover-shadow ripple rounded-circle">
            <img src="https://f42-zpg.zdn.vn/4775575540781477673/84bd09d3ceb005ee5ca1.jpg" class="w-100"/>
            <a href="ShopAll.php?categoryID=3">
              <div class="mask" style="background-color: rgba(118, 148, 158, 0.2)"></div>
            </a>
          </div>
          <div class="category-name">
            <a href=""><h5>Drones & Cameras</h5></a>
          </div>
        </div>
        <div class="col-3" style="width: 20%;">
          <div class="bg-image hover-overlay hover-zoom hover-shadow ripple rounded-circle">
            <img src="https://d2gg9evh47fn9z.cloudfront.net/800px_COLOURBOX41397013.jpg" class="w-100"/>
            <a href="ShopAll.php?categoryID=8">
              <div class="mask" style="background-color: rgba(118, 148, 158, 0.2)"></div>
            </a>
          </div>
          <div class="category-name">
            <a href=""><h5>Sale</h5></a>
          </div>
        </div>
        <div class="col-3" style="width: 20%;">
          <div class="bg-image hover-overlay hover-zoom hover-shadow ripple rounded-circle">
            <img src="https://f41-zpg.zdn.vn/578486546222822239/1375a90b6c69a737fe78.jpg" class="w-100"/>
            <a href="ShopAll.php?categoryID=2">
              <div class="mask" style="background-color: rgba(118, 148, 158, 0.2)"></div>
            </a>
          </div>
          <div class="category-name">
            <a href=""><h5>Tablets</h5></a>
          </div>
        </div>
        <div class="col-3" style="width: 20%;">
          <div class="bg-image hover-overlay hover-zoom hover-shadow ripple rounded-circle">
            <img src="https://image.shutterstock.com/image-vector/ribbon-award-best-seller-gold-600w-1027703062.jpg" class="w-100"/>
            <a href="ShopAll.php?categoryID=8">
              <div class="mask" style="background-color: rgba(118, 148, 158, 0.2)"></div>
            </a>
          </div>
          <div class="category-name">
            <a href=""><h5>Best Sellers</h5></a>
          </div>
        </div>
        <div class="col-3" style="width: 20%;">
          <div class="bg-image hover-overlay hover-zoom hover-shadow ripple rounded-circle">
            <img src="https://f41-zpg.zdn.vn/8898347919529828730/da572e6fd60d1d53441c.jpg" class="w-100"/>
            <a href="ShopAll.php?categoryID=6">
              <div class="mask" style="background-color: rgba(118, 148, 158, 0.2)"></div>
            </a>
          </div>
          <div class="category-name">
            <a href=""><h5>T.V & Home Cinema</h5></a>
          </div>
        </div>
        <div class="col-3" style="width: 20%;">
          <div class="bg-image hover-overlay hover-zoom hover-shadow ripple rounded-circle">
            <img src="https://f18-zpg.zdn.vn/3602282687136771306/2c120ccff8ad33f36abc.jpg" class="w-100"/>
            <a href="7">
              <div class="mask" style="background-color: rgba(118, 148, 158, 0.2)"></div>
            </a>
          </div>
          <div class="category-name">
            <a href=""><h5>Wearable Tech</h5></a>
          </div>
        </div>
        <div class="col-3" style="width: 20%;">
          <div class="bg-image hover-overlay hover-zoom hover-shadow ripple rounded-circle">
            <img src="https://f53-zpg.zdn.vn/22429382608754329/e2676e189f7a54240d6b.jpg" class="w-100"/>
            <a href="4">
              <div class="mask" style="background-color: rgba(118, 148, 158, 0.2)"></div>
            </a>
          </div>
          <div class="category-name">
            <a href=""><h5>Speakers</h5></a>
          </div>
        </div>
        <div class="col-3" style="width: 20%;">
          <div class="bg-image hover-overlay hover-zoom hover-shadow ripple rounded-circle">
            <img src="https://f34-zpg.zdn.vn/8600259200895499528/e2f0428fb3ed78b321fc.jpg" class="w-100"/>
            <a href="ShopAll.php?categoryID=4">
              <div class="mask" style="background-color: rgba(118, 148, 158, 0.2)"></div>
            </a>
          </div>
          <div class="category-name">
            <a href=""><h5>Headphones</h5></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="laptop-discount">
  <div class="laptop-discount-info">
    <div class="lap-info float-end pt-lg-5" style="padding: 2%;">
      <div class="text-black mt-5">
        <h5> <span class="badge bg-danger">Best Prices</span> </h5>
        <div class="text-title pb-lg-3"> 
          <h1>Save up to</h1> 
          <h1 style="font-size: 10vh; font-weight: bolder;">$150</h1>
          <h1>on selected laptop</h1>
          <h1>& tablets brands</h1>
        </div>
        <p style="font-weight: lighter; font-size: larger;">Terms and conditions apply</p>
      <button type="button" class="btn btn-secondary btn-lg btn-rounded font-weight-lighter" style="padding-left: 10%;
      padding-right: 10%;">Shop Now</button>
      </div>
    </div>
  </div>
</div>


<div class="sale p-lg-5"> <!-- On Sale area -->
  <div class="container bg-white" style="max-width: max-content;">
    <div class="best-sellers m-lg-2">
      <div class="title pt-lg-5" style="text-align: center;">
        <h3 style="font-weight: inherit;">On Sale</h3>
      </div>
      <div class="saler-item p-lg-5">
        <div class="row">
          <div class="sale col-md-2">
            <div class="bg-image hover-overlay hover-zoom">
              <img src="https://f34-zpg.zdn.vn/6970985277037837139/18e23740492c8272db3d.jpg" class="w-100"/>
              <a href="#!">
              </a>
            </div>
            <hr>
            <div class="product-info" style="text-align: center;">
              <p>Product name</p>
              <p>Product Price</p>
            </div>
          </div>
          <div class="sale col-md-2">
            <div class="bg-image hover-overlay hover-zoom">
              <img src="https://f42-zpg.zdn.vn/5462206274377075958/d5084ca932c5f99ba0d4.jpg" class="w-100"/>
              <a href="#!">
              </a>
            </div>
            <hr>
            <div class="product-info" style="text-align: center;">
              <p>Product name</p>
              <p>Product Price</p>
            </div>
          </div>
          <div class="sale col-md-2">
            <div class="bg-image hover-overlay hover-zoom">
              <img src="https://f45-zpg.zdn.vn/853573744971907577/c2eec54fbb23707d2932.jpg" class="w-100"/>
              <a href="#!">
              </a>
            </div>
            <hr>
            <div class="product-info" style="text-align: center;">
              <p>Product name</p>
              <p>Product Price</p>
            </div>
          </div>
          <div class="sale col-md-2">
            <div class="bg-image hover-overlay hover-zoom">
              <img src="https://f41-zpg.zdn.vn/6870103725416494750/8f1890b8eed4258a7cc5.jpg" class="w-100"/>
              <a href="#!">
              </a>
            </div>
            <hr>
            <div class="product-info" style="text-align: center;">
              <p>Product name</p>
              <p>Product Price</p>
            </div>
          </div>
          <div class="sale col-md-2">
            <div class="bg-image hover-overlay hover-zoom">
              <img src="https://f49-zpg.zdn.vn/3866075692415587431/fede0c787214b94ae005.jpg" class="w-100"/>
              <a href="#!">
              </a>
            </div>
            <hr>
            <div class="product-info" style="text-align: center;">
              <p>Product name</p>
              <p>Product Price</p>
            </div>
          </div>
          <div class="sale col-md-2">
            <div class="bg-image hover-overlay hover-zoom">
              <img src="https://f41-zpg.zdn.vn/3603403937542937280/01959f33e15f2a01734e.jpg" class="w-100"/>
              <a href="#!">
              </a>
            </div>
            <hr>
            <div class="product-info" style="text-align: center;">
              <p>Product name</p>
              <p>Product Price</p>
            </div>
          </div>
        </div>
      </div>
      <div class="view-all p-lg-5" style="text-align: center;">
        <button type="button" class="btn btn-secondary btn-lg btn-rounded" style="padding-left: 10%;
        padding-right: 10%; font-weight: 100;">View All</button>
      </div>
    </div>
  </div>
</div> <!-- On sale area -->

<div class="drone-discount">
  <div class="drone-discount-info">
    <div class="drone-info float-start pt-lg-5" style="padding: 2%;">
      <div class="text-black mt-5">
        <h3><span class="badge bg-danger" style="font-weight: lighter;">Today's Special</span></h3>     
        <div class="text-title pb-lg-3"> 
          <h1>Best Arial View in Town</h1> 
          <h1 style="font-size: 10vh; font-weight: bolder;"><span style="color: blueviolet;">30%</span> OFF</h1>
          <h2>on professional camera drones</h2>
        </div>
        <p style="font-weight: lighter; font-size: larger;">Limited quantities.</p>
        <p style="font-weight: lighter; font-size: larger;">
          See product detail pages for availability.</p>
      <button type="button" class="btn btn-secondary btn-lg btn-rounded font-weight-lighter" style="padding-left: 10%;
      padding-right: 10%;">Shop Now</button>
      </div>
    </div>
  </div>
</div>

<div class="brands-area"> <!--Brands area -->
  <div class="container bg-white" style="max-width: max-content;">
    <div class="brands m-lg-2 pb-lg-5">
      <div class="title pt-lg-5" style="text-align: center;">
        <h2 style="font-weight: bold; color: black;">Brands</h2>
      </div>
      <div class="brand-item p-lg-5">
        <div class="row">
          <div class="brand col-md-2">
            <div class="bg-image hover-overlay hover-zoom">
              <img src="https://f43-zpg.zdn.vn/2293106579913924457/658628c8caa401fa58b5.jpg" class="brand w-100"/>
              <a href="#!">
              </a>
            </div>
          </div>
          <div class="brand col-md-2">
            <div class="bg-image hover-overlay hover-zoom">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_pX6Ejet3VKzZfvq2tEjAFve4tdVRzwmHCCltgvw7vUr7EKgOIJYKN1bBPztc-YD-zqk&usqp=CAU" class="brand w-100"/>
              <a href="#!">
              </a>
            </div>
          </div>
          <div class="brand col-md-2">
            <div class="bg-image hover-overlay hover-zoom">
              <img src="https://f34-zpg.zdn.vn/5370499978435700927/47371979fb15304b6904.jpg" class="brand w-100"/>
              <a href="#!">
              </a>
            </div>
          </div>
          <div class="brand col-md-2">
            <div class="bg-image hover-overlay hover-zoom">
              <img src="https://b-f50-zpg.zdn.vn/1512156905263740802/ffff84b79ad8518608c9.jpg" class="brand w-100"/>
              <a href="#!">
              </a>
            </div>
          </div>
          <div class="brand col-md-2">
            <div class="bg-image hover-overlay hover-zoom">
              <img src="https://f50-zpg.zdn.vn/1695676508783595845/4c833eb821d7ea89b3c6.jpg" class="brand w-100"/>
              <a href="#!">
              </a>
            </div>
          </div>
          <div class="brand col-md-2">
            <div class="bg-image hover-overlay hover-zoom">
              <img src="https://prolap.vn/wp-content/uploads/Sony-vaio-logo.png" class="brand w-100"/>
              <a href="#!">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> <!-- End brands area -->

<div class="newsletter-area pb-lg-5"> <!--newsletter area -->
    <div class="container p-lg-5" style="background-color: rgb(117,31,255)">
        <div class="title text-white" style="text-align: center;
    font-weight: lighter;">
            <h3>Newsletter</h3>
            <p>Sign up to receive updates on new arrivals and special offers</p>
        </div>
        <div class="container" style="padding-left: 15%;
                                      padding-right: 15%;">
        <form class="Email p-lg-5 ml-5 mr-5">
            <p class="text-white">Email *</p>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 m-0 p-0">
                        <input type="search" class="form-control" placeholder="Email..." name="" value="" style="border-radius: 30px 0px 0px 30px; 
                        font-size: larger">  
                    </div>
                    <div class="col-md-2 m-0 p-0">
                        <button class="btn btn-black" style="border-radius: 0px 30px 30px 0px; font-size: inherit;" type="">Subcribe</button>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
</div> <!-- End newsletter area -->







  
</div>

<?php 
    include 'includes/footer.php'; 
?>