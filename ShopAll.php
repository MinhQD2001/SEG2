<?php 
    include 'includes/header.php'; 
?>


<style>
    .sale.col-md-3 {
    box-shadow: 0px 0px 1px black;
    }
  </style>

  <div class="container">
      <div class="row">
          <div class="col-md-2 pt-lg-5">
            
          </div>
          <div class="col-md-10">
              <!-- Để Product dưới đây -->
            <!-- Lấy Product trong DB bỏ vào nha （￣︶￣）↗　 -->
            <!-- Gút luck (*￣3￣)╭ -->

            <div class="container bg-white">
                <div class="best-sellers m-lg-2">
                <div class="title pt-lg-5" style="text-align: center;">
                    <h1 style="font-weight: inherit;">Shop All</h1>
                </div>
                <div class="saler-item p-lg-5">
                    <div class="row">
                    <div class="sale col-md-3">
                        <div class="bg-image hover-overlay hover-zoom">
                        <img src="https://f34-zpg.zdn.vn/6970985277037837139/18e23740492c8272db3d.jpg" class="w-100"/>
                        <a href="#!">
                        </a>
                        </div>
                        <div class="product-info" style="text-align: center;">
                        <p>Product name</p>
                        <p>Product Price</p>
                        </div>
                    </div>
                    <div class="sale col-md-3">
                        <div class="bg-image hover-overlay hover-zoom">
                        <img src="https://f42-zpg.zdn.vn/5462206274377075958/d5084ca932c5f99ba0d4.jpg" class="w-100"/>
                        <a href="#!">
                        </a>
                        </div>
                        <div class="product-info" style="text-align: center;">
                        <p>Product name</p>
                        <p>Product Price</p>
                        </div>
                    </div>
                    <div class="sale col-md-3">
                        <div class="bg-image hover-overlay hover-zoom">
                        <img src="https://f41-zpg.zdn.vn/6870103725416494750/8f1890b8eed4258a7cc5.jpg" class="w-100"/>
                        <a href="#!">
                        </a>
                        </div>
                        <div class="product-info" style="text-align: center;">
                        <p>Product name</p>
                        <p>Product Price</p>
                        </div>
                    </div>
                    <div class="sale col-md-3">
                        <div class="bg-image hover-overlay hover-zoom">
                        <img src="https://f49-zpg.zdn.vn/3866075692415587431/fede0c787214b94ae005.jpg" class="w-100"/>
                        <a href="#!">
                        </a>
                        </div>
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
          </div>
      </div>
  </div>









  <script>
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-green";
  } else { 
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-green", "");
  }
}

function myDropFunc() {
  var x = document.getElementById("demoDrop");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-green";
  } else { 
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-green", "");
  }
}
</script>


<?php 
    include 'includes/footer.php'; 
?>
