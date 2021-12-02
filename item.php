<?php 
    include 'config.php';
    include 'includes/header.php'; 
    include 'classes/product.php';

    if (isset($_GET['id'])) {
        $product = new Product($conn);
        $product->getProductById($_GET['id']);
        // echo '<pre>' , $product->product[0][0] , '</pre>';
        $product->id = $product->product[0][0];
        $product->getProductRelated();;
        
    }
    
?>

<style>
.carousel-item.active {
    text-align: -webkit-center;
    padding: 10%;
    padding-top: initial;
    padding-bottom: initial;
}

.carousel-item {
    text-align: -webkit-center;
    padding: 10%;
    padding-top: initial;
    padding-bottom: initial;
}
.col-md-4 {
    box-shadow: inset 0px 0px 0px 1px black;    
}


#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 0.4; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 650px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

.modal-content, #caption {
  animation-name: zoom;
  animation-duration: 0.6s;
}

@keyframes zoom {
  from {transform: scale(0.1)}
  to {transform: scale(1)}
}

.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}


@media only screen and (max-width: 650px){
  .modal-content {
    width: 100%;
  }
}
</style>

<div class="item m-lg-5 p-lg-5">
 <div class="container">
    <div class="row">
     <div class="col-sm-6">
        <div class="item-image" style="text-align: center;">

            <img id="myImg" src=" <?php echo $product->product[0][4]; ?>" alt="HKI Tech Quadcopter Drone With 360 Camera & Controller" width="500" height="500">

            <!-- The Modal -->
            <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
            </div>
        </div>
       <div class="description">
           <p> <?php echo $product->product[0][3]; ?> </p>
       </div>
     </div>  
     <div class="col-sm-6">
            <div class="item-info">
                <h2 class="text-black"><?php echo $product->product[0][1]; ?></h2>
                <p>Author: <span class="author-name" style="color: #b23cfd;"><strong> <?php echo $product->product[0][5]; ?> </strong></span></p>
                <!-- Nếu item mình add vô db thì xuất ra Author: TechStore 👈(ﾟヮﾟ👈) -->
                <p>Price: <span style="color: #b23cfd;"><strong><?php echo $product->product[0][2]; ?><i class="fas fa-dollar-sign"></i></strong></span></p>
                <!-- Put Price here ＼(ﾟｰﾟ＼) -->
                <p>Quantity</p>
                <input id="quantity" type="number" min="1" name="" value="1" class="btn btn-outline-dark btn-lg btn-rounded font-weight-lighter mb-lg-3" style="width: 100px;">
            </div>
            <div class="button-option mb-lg-5">
                <div class="add-to-cart mb-lg-3">
                    <input id="productID" value="<?php echo $product->product[0][0]; ?>" hidden></input>
                    <input id="userID" value="<?php echo $_SESSION['user_id']; ?>" hidden></input>
                    <button name="addToCart" type="submit" class="btn btn-secondary btn-lg btn-rounded font-weight-lighter" style="padding-left: 17%;
                    padding-right: 17%; margin-right: 5px" onclick="addToCart()">Add to Cart</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg btn-rounded" onclick="addToWishList(<?php echo $_SESSION['user_id']; ?>,<?php echo $product->product[0][0]; ?> )"><i class="fas fa-heart"></i></button>  
                </div>
                <div class="buy-now">
                    <button type="button" class="btn btn-dark btn-lg btn-rounded font-weight-lighter" style="padding-left: 25%;
                    padding-right: 25%;">Buy Now</button>
                </div>       
        </div>
        <div class="item-accordion">
        <div class="accordion" id="accordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button
                    class="accordion-button"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                >
                Product Info 
                </button>
                </h2>
                <div
                id="collapseOne"
                class="accordion-collapse collapse show"
                aria-labelledby="headingOne"
                data-mdb-parent="#accordion"
                >
                <div class="accordion-body">
                    <p>I'm a product detail. I'm a great place to add more information about your product such as sizing, material, care and cleaning instructions. This is also a great space to write what makes this product special and how your customers can benefit from this item.</p>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                <button
                    class="accordion-button collapsed"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#collapseTwo"
                    aria-expanded="false"
                    aria-controls="collapseTwo"
                >
                 Return & Refund Policy
                </button>
                </h2>
                <div
                id="collapseTwo"
                class="accordion-collapse collapse"
                aria-labelledby="headingTwo"
                data-mdb-parent="#accordion"
                >
                <div class="accordion-body">
                I’m a Return and Refund policy. I’m a great place to let your customers know what to do in case they are dissatisfied with their purchase. Having a straightforward refund or exchange policy is a great way to build trust and reassure your customers that they can buy with confidence.
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                <button
                    class="accordion-button collapsed"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#collapseThree"
                    aria-expanded="false"
                    aria-controls="collapseThree"
                >
                    Shipping Info
                </button>
                </h2>
                <div
                id="collapseThree"
                class="accordion-collapse collapse"
                aria-labelledby="headingThree"
                data-mdb-parent="#accordion"
                >
                <div class="accordion-body">
                    Something will be here
                </div>
                </div>
            </div>
            </div>
        </div>
     </div>     
    </div>
 </div>
</div>

<div class="relative-items pb-lg-5">
    <div class="container-fluid">
    <h2 class="text-black pb-4" style="text-align: center;">Related Items</h2>
        <div id="carouselInterval" class="carousel slide carousel-dark" data-mdb-ride="carousel">
        <div class="carousel-inner">
            <?php $product->outputProductRelated(); ?>
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

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
</script>

<?php 
    include 'includes/footer.php'; 
?>