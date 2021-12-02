console.log("hello");






function addToCart() {
    var quantity = document.getElementById('quantity').value;
    var productID = document.getElementById('productID').value;
    var userID = document.getElementById('userID').value;
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "includes/addCart.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function() {
        if (this.status == 200) {            
            alert(this.responseText);
            
        }
    }
    xhr.send("productID="+productID+"&quantity="+quantity+"&userID="+userID);
}

function changeQuantity(cartID, userID) {
    var quantity = document.getElementById('quantity'+cartID).value;
    var sum = document.getElementById('summary'+cartID);
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "includes/changeCart.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function() {
        if (this.status == 200) {                        
            let value = 'SUM: $' + this.responseText;            
            sum.innerHTML = value;
            updateTotalPrice(userID);
        }
    }
    xhr.send("cartID="+cartID+"&quantity="+quantity+"&type=change");
}

function removeCartItem(cartID, userID ) {
    var cartList = document.getElementById('cartList');
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "includes/changeCart.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function() {
        if (this.status == 200) {                        
            cartList.innerHTML = this.responseText;
            updateTotalPrice(userID);
        }
    }
    xhr.send("cartID="+cartID+"&userID="+userID+"&type=delete");
}

function updateTotalPrice(userID) {
    var total1 = document.getElementById('total1');
    var total2 = document.getElementById('total2');
    
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "includes/changeCart.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function() {
        if (this.status == 200) {    
            
            total1.innerHTML = '$' + this.responseText;
            total2.innerHTML = '$' + this.responseText;
        }
    }
    xhr.send("userID="+userID+"&type=updateTotalPrice");

}

function filterByCategory(categoryID) {
    var view = document.getElementById('category');

    console.log('HELLO');
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "includes/filterCategory.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function() {
        if (this.status == 200) {    
            view.innerHTML = this.responseText;
        }
    }
    xhr.send("categoryID="+categoryID);
}

function getAllProducts() {
    var view = document.getElementById('category');
    console.log('hey');
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "includes/filterCategory.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function() {
        if (this.status == 200) {    
            view.innerHTML = this.responseText;
        }
    }
    xhr.send();
}


jQuery(document).ready(function($){
    
    // jQuery sticky Menu
    
	$(".mainmenu-area").sticky({topSpacing:0});
    
    
    $('.product-carousel').owlCarousel({
        loop:true,
        nav:true,
        margin:20,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:3,
            },
            1000:{
                items:5,
            }
        }
    });  
    
    $('.related-products-carousel').owlCarousel({
        loop:true,
        nav:true,
        margin:20,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:2,
            },
            1000:{
                items:2,
            },
            1200:{
                items:3,
            }
        }
    });  
    
    $('.brand-list').owlCarousel({
        loop:true,
        nav:true,
        margin:20,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:3,
            },
            1000:{
                items:4,
            }
        }
    });    
    
    
    // Bootstrap Mobile Menu fix
    $(".navbar-nav li a").click(function(){
        $(".navbar-collapse").removeClass('in');
    });    
    
    // jQuery Scroll effect
    $('.navbar-nav li a, .scroll-to-up').bind('click', function(event) {
        var $anchor = $(this);
        var headerH = $('.header-area').outerHeight();
        $('html, body').stop().animate({
            scrollTop : $($anchor.attr('href')).offset().top - headerH + "px"
        }, 1200, 'easeInOutExpo');

        event.preventDefault();
    });    
    
    // Bootstrap ScrollPSY
    $('body').scrollspy({ 
        target: '.navbar-collapse',
        offset: 95
    })      
});

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-10146041-21', 'auto');
  ga('send', 'pageview');


