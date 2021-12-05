<?php 
    include 'config.php';
    include 'includes/header.php'; 
    include 'includes/profilebody.php'; 
?>

<div class="container">
    <h1 class="text-white">Your Profile</h1>
    <hr>
</div>
<!-- AVATAR ĐANG LÀM (_　_)。゜zｚＺ -->
<!-- MẤY CÁI NHƯ NAME, EMAIL CÓ SẴN TRONG DB THÌ CỨ XUẤT RA CÒN CÁI NÀO CHƯA CÓ THÌ ĐỂ USER TỰ BỔ SUNG -->
<div class="profile bg-light mb-5">
    <div class="container p-lg-5">
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
            <input type="text" id="form6Example4" class="form-control" />
            <label class="form-label" for="form6Example4">Address</label>
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="email" id="form6Example5" class="form-control" />
            <label class="form-label" for="form6Example5">Email</label>
        </div>

        <!-- date of birth input -->
        Date of birth
        <div class="form-outline mb-4">
            <input type="date" id="form6Example5" class="form-control"/>
            <label class="form-label" for="form6Example9"></label>
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

        <!-- Submit button -->
        <!-- Button trigger modal -->
        <button
        type="button"
        class="btn btn-primary btn-block"
        data-mdb-toggle="modal"
        data-mdb-target="#exampleModal"
        >
        Save
        </button>

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
                <h5 class="modal-title" id="exampleModalLabel">This will change your information, are you sure?</h5>
                <button
                type="button"
                class="btn-close"
                data-mdb-dismiss="modal"
                aria-label="Close"
                ></button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                Close
                </button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>
        </form>
    </div>
</div>

   
<?php 
    include 'includes/footer.php'; 
?>


