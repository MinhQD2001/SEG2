<?php 
    include 'config.php';
    include 'includes/header.php'; 
    include 'classes/category.php';

    $category = new Category($conn);
    $category->getList();
    $category->getAllProducts();
    //echo '<pre>' , var_dump($category->productList->productList) , '</pre>';
?>


<style>
    .sale.col-md-3 {
    box-shadow: 0px 0px 1px black;
    }

    .col-md-2.pt-lg-5.mt-lg-5 {
    margin-top: 10%;
    margin-bottom: 10%;
    }
  </style>

  <div class="container-fluid mt-lg-3" >
  <div class="row" id="content">
  <div class="col-md-3 pt-lg-5 mt-lg-5">
    <div class="container" >
      <div>
        <h2 class="Filter m-lg-1" style="font-weight: lighter;">Filter By</h2>
          <hr>
        </div>
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button
        class="accordion-button collapsed"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#flush-collapseOne"
        aria-expanded="false"
        aria-controls="flush-collapseOne"
      >
        Collection
      </button>
    </h2>
    <div
      id="flush-collapseOne"
      class="accordion-collapse collapse"
      aria-labelledby="flush-headingOne"
      data-mdb-parent="#accordionFlushExample"
    >
      <div class="accordion-body">
      <ul class="navbar-nav m-lg-2">
        <li class="nav-item">
          <a class="nav-link text-black" href="#" onclick="getAllProducts()">- Shop All</a>
        </li>
        <?php $category->outputInFilter(); ?>
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
          <div class="col-md-9">
              <!-- Để Product dưới đây -->
            <!-- Lấy Product trong DB bỏ vào nha （￣︶￣）↗　 -->
            <!-- Gút luck (*￣3￣)╭ -->

            <div class="container bg-white" style="max-width: max-content;">
                <div class="best-sellers m-lg-2" id="category">
                <div class="title pt-lg-5" style="text-align: center;">
                    <h1 style="font-weight: inherit;">Shop All</h1>
                </div>
                <?php $category->outputProductList(); ?>
                <!-- HEREEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE  -->              
                <!-- <div class="saler-item p-lg-3">
                    <div class="row">
                    <div class="sale col-md-3">
                        <div class="bg-image hover-overlay hover-zoom"> <a href="item.php">
                        <img src="https://f34-zpg.zdn.vn/6970985277037837139/18e23740492c8272db3d.jpg" class="w-100"/>
                        </a>
                        </div>
                        <hr>
                        <div class="product-info" style="text-align: center;">
                        <p>Product name</p>
                        <p>Price: <span style="color: #b23cfd;"><strong>85<i class="fas fa-dollar-sign"></i></strong></span></p>
                        </div>
                    </div>
                    <div class="sale col-md-3">
                        <div class="bg-image hover-overlay hover-zoom"> <a href="item.php"> 
                        <img src="https://f42-zpg.zdn.vn/5462206274377075958/d5084ca932c5f99ba0d4.jpg" class="w-100"/>
                        </a>
                        </div>
                        <hr>
                        <div class="product-info" style="text-align: center;">
                        <p>Product name</p>
                        <p>Price: <span style="color: #b23cfd;"><strong>85<i class="fas fa-dollar-sign"></i></strong></span></p>
                        </div>
                    </div>
                    <div class="sale col-md-3">
                        <div class="bg-image hover-overlay hover-zoom"> <a href="item.php"> 
                        <img src="https://f41-zpg.zdn.vn/6870103725416494750/8f1890b8eed4258a7cc5.jpg" class="w-100"/>
                        </a>
                        </div>
                        <hr>
                        <div class="product-info" style="text-align: center;">
                        <p>Product name</p>
                        <p>Price: <span style="color: #b23cfd;"><strong>85<i class="fas fa-dollar-sign"></i></strong></span></p>
                        </div>
                    </div>
                    <div class="sale col-md-3">
                        <div class="bg-image hover-overlay hover-zoom"> <a href="item.php"> 
                        <img src="https://f49-zpg.zdn.vn/3866075692415587431/fede0c787214b94ae005.jpg" class="w-100"/>                        
                        </a>
                        </div>
                        <hr>
                        <div class="product-info" style="text-align: center;">
                        <p>Product name</p>
                        <p>Price: <span style="color: #b23cfd;"><strong>85<i class="fas fa-dollar-sign"></i></strong></span></p>
                        </div>
                    </div>
                    </div>
                </div> -->


                <div class="view-all p-lg-5" style="text-align: center;">
                    <button type="button" class="btn btn-secondary btn-lg btn-rounded" style="padding-left: 10%;
                    padding-right: 10%; font-weight: 100;">View All</button>
                </div>
                </div>
            </div>
          </div>
      </div>
  </div>


 
<?php 
    include 'includes/footer.php'; 
?>
