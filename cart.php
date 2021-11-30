<?php 
    include 'congfig.php';
    include 'includes/header.php';
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
        <div class="pt-4 wish-list">

          <h5 class="mb-4">Cart (<span><strong>2</strong></span> items)</h5>           <!-- ĐỂ SỐ LƯỢNG ITEM Ở ĐÂY -->

          <div class="row mb-4">
            <div class="col-md-5 col-lg-3 col-xl-3">
              <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                <img class="img-fluid w-100"
                  src="https://f32-zpg.zdn.vn/1457401252024849308/f660d163ef44241a7d55.jpg" alt="">
              </div>
            </div>
            <div class="col-md-7 col-lg-9 col-xl-9">
              <div>
                <div class="d-flex justify-content-between">
                  <div>
                    <h5>Product Name</h5>
                    <p>Author: <span class="author-name" style="color: #b23cfd;"><strong> admin</strong></span></p>
                    <p class="mb-3 text-muted text-uppercase small">Description: </p>
                  </div>
                  <div>
                    <p>Quantity</p>
                    <input type="number" min="1" name="" value="1" class="btn btn-outline-dark btn-lg font-weight-lighter mb-lg-3" style="width: 100px;">        
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <a href="#" type="button" class="card-link-secondary small text-uppercase"><i
                        class="fas fa-trash-alt"></i> Remove item </a>
                    <a href="#" type="button" class="card-link-secondary small text-uppercase"><i
                        class="fas fa-heart"></i> Move to wish list </a>
                  </div>
                  <p class="mb-0"><span><strong id="summary">$17.99</strong></span></p class="mb-0">
                </div>
              </div>
            </div>
          </div>
          <hr class="mb-4">
          <div class="row mb-4">
            <div class="col-md-5 col-lg-3 col-xl-3">
              <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                <img class="img-fluid w-100"
                  src="https://f36-zpg.zdn.vn/6510393195135879787/9345b28526a2edfcb4b3.jpg" alt="">
              </div>
            </div>
            <div class="col-md-7 col-lg-9 col-xl-9">
            <div>
                <div class="d-flex justify-content-between">
                  <div>
                    <h5>Product Name</h5>
                    <p>Author: <span class="author-name" style="color: #b23cfd;"><strong> admin</strong></span></p>
                    <p class="mb-3 text-muted text-uppercase small">Description: </p>
                  </div>
                  <div>
                    <p>Quantity</p>
                    <input type="number" min="1" name="" value="1" class="btn btn-outline-dark btn-lg font-weight-lighter mb-lg-3" style="width: 100px;">        
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <a href="#" type="button" class="card-link-secondary small text-uppercase"><i
                        class="fas fa-trash-alt"></i> Remove item </a>
                    <a href="#" type="button" class="card-link-secondary small text-uppercase"><i
                        class="fas fa-heart"></i> Move to wish list </a>
                  </div>
                  <p class="mb-0"><span><strong id="summary">$17.99</strong></span></p class="mb-0">
                </div>
              </div>
            </div>
          </div>
          <p class="text-primary mb-0"><i class="fas fa-info-circle mr-1"></i> Do not delay the purchase, adding
            items to your cart does not mean booking them.</p>

        </div>
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
      <div class="mb-3">
        <div class="pt-4">

          <h5 class="mb-3">The total amount of</h5>

          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
              Temporary amount
              <span>$25.98</span>
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
              <span><strong>$53.98</strong></span>
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
                <form>
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">
                        <div class="col">
                        <div class="form-outline">
                            <input type="text" id="form6Example1" class="form-control" />
                            <label class="form-label" for="form6Example1">First name</label>
                        </div>
                        </div>
                        <div class="col">
                        <div class="form-outline">
                            <input type="text" id="form6Example2" class="form-control" />
                            <label class="form-label" for="form6Example2">Last name</label>
                        </div>
                        </div>
                    </div>

                    <!-- Text input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="form6Example3" class="form-control" />
                        <label class="form-label" for="form6Example3">Company name</label>
                    </div>

                    <!-- Text input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="form6Example4" class="form-control" />
                        <label class="form-label" for="form6Example4">Address</label>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="form6Example5" class="form-control" />
                        <label class="form-label" for="form6Example5">Email</label>
                    </div>

                    <!-- Number input -->
                    <div class="form-outline mb-4">
                        <input type="number" id="form6Example6" class="form-control" />
                        <label class="form-label" for="form6Example6">Phone</label>
                    </div>

                    <!-- Message input -->
                    <div class="form-outline mb-4">
                        <textarea class="form-control" id="form6Example7" rows="4"></textarea>
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
                    <button type="submit" class="btn btn-primary btn-block mb-2">Make Purchase</button>
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