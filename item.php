<?php 
    include 'includes/header.php'; 
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
</style>

<div class="item m-lg-5 p-lg-5">
 <div class="container">
    <div class="row">
     <div class="col-sm-6">
        <div class="item-image" style="text-align: center;">
             <img class="img-fluid w-75" src="https://f36-zpg.zdn.vn/6510393195135879787/9345b28526a2edfcb4b3.jpg" alt="">
        </div>
       <div class="description">
           <p>I'm a product description. This is a great place to "sell" your product and grab buyers' attention. Describe your product clearly and concisely. Use unique keywords. Write your own description instead of using manufacturers' copy.</p>
       </div>
     </div>  
     <div class="col-sm-6">
         <div class="item-info">
             <h2 class="text-black">HKI Tech Quadcopter Drone With 360 Camera & Controller</h2>
             <p>Author: </p>
             <!-- Nếu item mình add vô db thì xuất ra Author: TechStore 👈(ﾟヮﾟ👈) -->
             <p>Price: <span style="color: #b23cfd;"><strong>85<i class="fas fa-dollar-sign"></i></strong></span></p>
             <!-- Put Price here ＼(ﾟｰﾟ＼) -->
             <p>Quantity</p>
            
         </div>
        <div class="button-option mb-lg-5">
            <div class="add-to-cart mb-lg-3">
                <button type="button" class="btn btn-secondary btn-lg btn-rounded font-weight-lighter" style="padding-left: 17%;
                padding-right: 17%; margin-right: 5px">Add to Cart</button>
                <button type="button" class="btn btn-outline-secondary btn-lg btn-rounded"><i class="fas fa-heart"></i></button>  
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
            <div class="carousel-item active" data-mdb-interval="10000">
                <div class="row">
                    <div class="col-md-4">
                    <div class="bg-image hover-overlay hover-zoom">
                        <img src="https://f20-zpg.zdn.vn/7677535584136899247/a5158116bf31746f2d20.jpg" class="w-100"/>
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
            </div>
            <div class="carousel-item" data-mdb-interval="10000">
                <div class="row">
                    <div class="col-md-4">
                    <div class="bg-image hover-overlay hover-zoom">
                        <img src="https://f20-zpg.zdn.vn/7677535584136899247/a5158116bf31746f2d20.jpg" class="w-100"/>
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
            </div>
            <div class="carousel-item" data-mdb-interval="10000">
                <div class="row">
                    <div class="col-md-4">
                    <div class="bg-image hover-overlay hover-zoom">
                        <img src="https://f20-zpg.zdn.vn/7677535584136899247/a5158116bf31746f2d20.jpg" class="w-100"/>
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
            </div>
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

<?php 
    include 'includes/footer.php'; 
?>