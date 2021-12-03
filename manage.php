<?php 
    include 'config.php';
    include 'includes/header.php';

    
?>


      <div class="card wish-list mb-3">
        <div class="card-body">

          <h5 class="mb-4">Date: </h5> 

          <div class="row mb-4">
            <div class="col-md-5 col-lg-3 col-xl-3">
              <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                <img class="img-fluid w-100"
                  src="https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-do-new-2-600x600.jpg" alt="Sample">
                <a href="#!">
                </a>
              </div>
            </div>
            <div class="col-md-7 col-lg-9 col-xl-9">
              <div>
                <div class="d-flex justify-content-between">
                  <div>
                    <h5>Product Name</h5>
                    <p>Author: <span class="author-name" style="color: #b23cfd;"><strong>Admin</strong></span></p>
                    <p class="mb-3 text-muted text-uppercase small">Category</p>
                    <p class="mb-2 text-muted text-uppercase small">Price</p>
                    <p class="mb-3 text-muted text-uppercase small">Description</p>
                    <p class="mb-3 text-muted text-uppercase small">Date created: </p>  <!-- XUẤT NGÀY SẢN PHẨM ĐƯỢC TẠO -->
                  </div>
                  <div>
                    <div class="def-number-input number-input safari_only mb-0 w-100">
                    <p>Quantity</p>
                      <input class="quantity" min="0" name="quantity" value="1" type="number">
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <!-- Button refuse modal -->
                    <button
                    type="button"
                    class="btn btn-danger"
                    data-mdb-toggle="modal"
                    data-mdb-target="#denyModal"
                    >
                    <a href="#!" type="button" class="card-link-secondary small text-uppercase mr-3 text-white"><i
                        class="fas fa-trash-alt"></i> Refuse </a>
                    </button>

                    <!-- Modal -->
                    <div
                    class="modal fade"
                    id="denyModal"
                    tabindex="-1"
                    aria-labelledby="denyModalLabel"
                    aria-hidden="true"
                    >
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" style="color: red;" id="denyModalLabel">Alert</h5>
                            <button
                            type="button"
                            class="btn-close"
                            data-mdb-dismiss="modal"
                            aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body">
                            <h4>Do you want to refuse this product?</h4>
                            <p>This product is not accepted and a notice will be sent to the author</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                            Close
                            </button>
                            <button type="button" class="btn btn-danger">refuse</button>
                        </div>
                        </div>
                    </div>
                    </div> <!-- End of refuse btn -->
                        
                     <!-- Button confirm modal -->
                     <button
                    type="button"
                    class="btn btn-primary"
                    data-mdb-toggle="modal"
                    data-mdb-target="#confirmModal"
                    >
                    <a href="#!" type="button" class="card-link-secondary small text-uppercase mr-3 text-white"><i
                        class="fas fa-trash-alt"></i> Confirm </a>
                    </button>

                    <!-- Modal -->
                    <div
                    class="modal fade"
                    id="confirmModal"
                    tabindex="-1"
                    aria-labelledby="confirmModalLabel"
                    aria-hidden="true"
                    >
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" style="color: blue;" id="confirmModalLabel">Confirm</h5>
                            <button
                            type="button"
                            class="btn-close"
                            data-mdb-dismiss="modal"
                            aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body">
                            <h4>Do you want to confirm this product?</h4>
                            <p>This product will be posted on your website</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                            Close
                            </button>
                            <button type="button" class="btn btn-primary">confirm</button>
                        </div>
                        </div>
                    </div>
                    </div> <!-- End of confirm btn -->
                  </div>
                  <p class="mb-0"><span><strong>$17.99</strong></span></p>
                </div>
              </div>
            </div>
          </div>
          <hr class="mb-4">
          <div class="row mb-4">
            <div class="col-md-5 col-lg-3 col-xl-3">
              <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                <img class="img-fluid w-100"
                  src="https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-do-new-2-600x600.jpg" alt="Sample">
                <a href="#!">
                </a>
              </div>
            </div>
            <div class="col-md-7 col-lg-9 col-xl-9">
              <div>
                <div class="d-flex justify-content-between">
                  <div>                 
                    <h5>Product Name</h5>
                    <p>Author: <span class="author-name" style="color: #b23cfd;"><strong>Admin</strong></span></p>
                    <p class="mb-3 text-muted text-uppercase small">Category: </p>
                    <p class="mb-2 text-muted text-uppercase small">Price: </p>
                    <p class="mb-3 text-muted text-uppercase small">Description: </p>
                    <p class="mb-3 text-muted text-uppercase small">Date created: </p>  <!-- XUẤT NGÀY SẢN PHẨM ĐƯỢC TẠO -->
                  </div>
                  <div>
                    <div class="def-number-input number-input safari_only mb-0 w-100">
                    <p>Quantity</p>
                      <input class="quantity" min="0" name="quantity" value="1" type="number">
                      
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>

                    <!-- Button refuse modal -->
                    <button
                    type="button"
                    class="btn btn-danger"
                    data-mdb-toggle="modal"
                    data-mdb-target="#denyModal"
                    >
                    <a href="#!" type="button" class="card-link-secondary small text-uppercase mr-3 text-white"><i
                        class="fas fa-trash-alt"></i> Refuse </a>
                    </button>

                    <!-- Modal -->
                    <div
                    class="modal fade"
                    id="denyModal"
                    tabindex="-1"
                    aria-labelledby="denyModalLabel"
                    aria-hidden="true"
                    >
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" style="color: red;" id="denyModalLabel">Alert</h5>
                            <button
                            type="button"
                            class="btn-close"
                            data-mdb-dismiss="modal"
                            aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body">
                            <h4>Do you want to refuse this product?</h4>
                            <p>This product is not accepted and a notice will be sent to the author</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                            Close
                            </button>
                            <button type="button" class="btn btn-danger">refuse</button>
                        </div>
                        </div>
                    </div>
                    </div> <!-- End of refuse btn -->
                        
                     <!-- Button confirm modal -->
                     <button
                    type="button"
                    class="btn btn-primary"
                    data-mdb-toggle="modal"
                    data-mdb-target="#confirmModal"
                    >
                    <a href="#!" type="button" class="card-link-secondary small text-uppercase mr-3 text-white"><i
                        class="fas fa-trash-alt"></i> Confirm </a>
                    </button>

                    <!-- Modal -->
                    <div
                    class="modal fade"
                    id="confirmModal"
                    tabindex="-1"
                    aria-labelledby="confirmModalLabel"
                    aria-hidden="true"
                    >
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" style="color: blue;" id="confirmModalLabel">Confirm</h5>
                            <button
                            type="button"
                            class="btn-close"
                            data-mdb-dismiss="modal"
                            aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body">
                            <h4>Do you want to confirm this product?</h4>
                            <p>This product will be posted on your website</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                            Close
                            </button>
                            <button type="button" class="btn btn-primary">confirm</button>
                        </div>
                        </div>
                    </div>
                    </div> <!-- End of confirm btn -->


                  </div>
                  <p class="mb-0"><span><strong>$35.99</strong></span></p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- Card -->



<?php 
    include 'includes/footer.php';
?>