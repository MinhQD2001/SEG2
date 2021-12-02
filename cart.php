<?php 
    include 'config.php';
    include 'includes/header.php';
    include 'classes/cartItem.php';
    include 'classes/bill.php';

    $cartList = new CartItem($conn);
    $cartList->getProductListByUserID($_SESSION['user_id']);
    $cartList->userID = $_SESSION['user_id'];
    $cartList->getTotalPrice();

    // echo '<pre>' , var_dump($cartList->cartList) , '</pre>';

    // $cartList->cartList
    // 0: provider Name;
    // 1: product description;
    // 2: productimage;
    // 3: product name;
    // 4: product quantity;
    // 5: product price;
    // 6: product summary;
    // 7: cart ID;
    // 8: user ID;

    if (isset($_POST['checkout'])) {
      $bill = new Bill($conn);
      $bill->fname = $_POST['fname'];
      $bill->lname = $_POST['lname'];
      $bill->email = $_POST['email'];
      $bill->phone = $_POST['phone'];
      $bill->information = $_POST['information'];
      $bill->address = $_POST['address'];
      $bill->createBill();
      $cartList->checkoutCart($bill->id);
    }
    
?>

<style>
a.card-link-secondary.small.text-uppercase {
    margin-right: 30px;
}

.check-out {
    box-shadow: 1px 1px 5px black;
    border-radius: 20px;
}

</style>

<div class="cart">
    <div class="container pt-lg-5">

<!--Section: Block Content-->
<section>

  <!--Grid row-->
  <div class="row">

    <!--Grid column-->
    <div class="col-md-8">

      <!-- Card -->
      <div class="mb-3">
        <?php $cartList->outputCart(); ?>
      </div>
      <!-- Card -->

      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4">

          <h5 class="mb-4">Expected shipping delivery</h5>

          <p class="mb-0"> Thu., 12.03. - Mon., 16.03.</p>
        </div>
      </div>
      <!-- Card -->

      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4">

          <h5 class="mb-4">We accept</h5>

          <img class="mr-2" width="45px"
            src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
            alt="Visa">
          <img class="mr-2" width="45px"
            src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
            alt="American Express">
          <img class="mr-2" width="45px"
            src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
            alt="Mastercard">
          <img class="mr-2" width="45px"
            src="https://mdbootstrap.com/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.png"
            alt="PayPal acceptance mark">
        </div>
      </div>
      <!-- Card -->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-4">
    <div class="container check-out pb-4">   
      <!-- Card -->
      <div class="mb-3 mt-5">
        <div class="pt-4">

          <h5 class="mb-3">The total amount of</h5>

          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
              Temporary amount
              <span id='total1'><?php echo "$" . $cartList->total; ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
              Shipping
              <span>Gratis</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
              <div>
                <strong>The total amount of</strong>
                <strong>
                  <p class="mb-0">(including VAT)</p>
                </strong>
              </div>
              <span><strong id="total2"><?php echo '$' . $cartList->total; ?></strong></span>
            </li>
          </ul>

          <!-- Button trigger check out -->
            <button
            type="button"
            class="btn btn-lg btn-block btn-primary"
            data-mdb-toggle="modal"
            data-mdb-target="#CheckOut"
            >
            Go To CheckOut
            </button>

            <!-- Modal -->
            <div
            class="modal fade"
            id="CheckOut"
            tabindex="-1"
            aria-labelledby="CheckOutLabel"
            aria-hidden="true"
            >
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CheckOutLabel">Modal title</h5>
                    <button
                    type="button"
                    class="btn-close"
                    data-mdb-dismiss="modal"
                    aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                <form id="post"  action="cart.php" method="POST">
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">
                        <div class="col">
                        <div class="form-outline">
                            <input name="fname" type="text" id="form6Example1" class="form-control" />
                            <label class="form-label" for="form6Example1">First name</label>
                        </div>
                        </div>
                        <div class="col">
                        <div class="form-outline">
                            <input name="lname" type="text" id="form6Example2" class="form-control" />
                            <label class="form-label" for="form6Example2">Last name</label>
                        </div>
                        </div>
                    </div>

                    <!-- Text input -->
                    <div class="form-outline mb-4">
                        <input name="address" type="text" id="form6Example4" class="form-control" />
                        <label class="form-label" for="form6Example4">Address</label>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input name="email" type="email" id="form6Example5" class="form-control" />
                        <label class="form-label" for="form6Example5">Email</label>
                    </div>

                    <!-- Number input -->
                    <div class="form-outline mb-4">
                        <input name="phone" type="text" id="form6Example6" class="form-control" />
                        <label class="form-label" for="form6Example6">Phone</label>
                    </div>

                    <!-- Message input -->
                    <div class="form-outline mb-4">
                        <textarea name="information" class="form-control" id="form6Example7" rows="4"></textarea>
                        <label class="form-label" for="form6Example7">Additional information</label>
                    </div>

                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-center mb-4">
                        <input
                        class="form-check-input me-2"
                        type="checkbox"
                        value=""
                        id="form6Example8"
                        checked
                        />
                        <label class="form-check-label" for="form6Example8"> Confirm the payment? </label>
                    </div>

                    <!-- Submit button -->
                    <button name="checkout" type="submit" class="btn btn-primary btn-block mb-2">Make Purchase</button>
                    </form>                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                    Close
                    </button>
                </div>
                </div>
            </div>
            </div>

        </div>
      </div>
      <!-- Card -->

      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4">

          <a class="dark-grey-text d-flex justify-content-between" data-toggle="collapse" href="#collapseCart"
            aria-expanded="false" aria-controls="collapseCart">
            Add a discount code (optional)
            <span><i class="fas fa-chevron-down pt-1"></i></span>
          </a>

          <div class="collapsed" id="collapseCart">
            <div class="mt-3">
              <div class="md-form md-outline mb-0">
                <input type="text" id="discount-code" class="form-control font-weight-light"
                  placeholder="Enter discount code">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Card -->
      </div>

    </div>
    <!--Grid column-->

  </div>
  <!-- Grid row -->

</section>
<!--Section: Block Content-->

        
</div>
</div>




<?php 
    include 'includes/footer.php';
?>