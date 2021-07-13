<div class="container">
    <div class="h2">Checkout</div>
    <div class="">
        <div class="h4">Billing Address</div>
    </div>
    <!--in checkout page, use just customer name, email , phone , password and address-->
    <div class="row m-0 p-0">
        <div class="col-md-6">

            <form id="checkoutForm">
                <div class="my-3">
                    <label for="name">Customer Name</label>

                    <input type="text" name="name" id="name" class="form-control">
                </div>


                <div class="my-3">
                    <label for="email">Email Address</label>

                    <input type="text" name="email" id="email"  class="form-control">
                </div>


                <div class="my-3">
                    <label for="phone">Phone Number</label>

                    <input type="text" name="phone" id="phone"  class="form-control">
                </div>

                <div class="my-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password"  class="form-control">
                </div>
            </form>


        </div>
        <div class="col-md-6" id="orderCart">
            <div class="card">
                <div class="card-body">
                    <table id="productListForCheckOut" class="table table-borderless">
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <input type="checkbox" checked>
                    Cash on delivery
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-secondary fs-14 text-capitalize color4 color46" id="confirmOrder">Confirm Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>