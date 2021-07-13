<div class="">
    <div class="row m-0 p-0">
        <div class="col-md-6">
            <div class="card">
                <div class="card-title">
                    <div class="h3 font-weight-bold p-3 bg-light border-bottom">Add new Product</div>
                </div>
                <div class="card-body">
                    <form id="addProductForm">

                        <div class="my-3">
                            <label for="category" class="font-weight-bold h5">Product Name</label>
                            <select type="text" name="category" id="category" class="form-control">
                                <option value="Electronics">Electronics</option>
                            </select>
                        </div>


                        <div class="my-3">
                            <label for="name" class="font-weight-bold h5">Product Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>


                        <div class="my-3">
                            <label for="details" class="font-weight-bold h5">Product Details</label>
                            <input type="text" name="details" id="details" class="form-control">
                        </div>



                        <div class="my-3">
                            <label for="price" class="font-weight-bold h5">Product Price</label>
                            <input type="number" name="price" id="price" class="form-control">
                        </div>


                        <div class="my-3">
                            <label for="image" class="font-weight-bold h5">Product Image</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="card-footer d-flex justify-content-center align-items-center">
                    <div class="mx-2">
                        <button class="btn btn-info" id="reset" ">Reset</button>
                    </div>
                    <div class="mx-2">
                        <button class="btn btn-success" id="save">Save <i class="fa fa-save"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><h2>Product List</h2></div>
                <div class="card-body">
                    <table class="table table-bordered" id="productListTable">
                        <tbody id="tbodyList"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>