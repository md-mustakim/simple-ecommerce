<!--slider-->

<div class="hero-slider position-relative">
    <div class="header-slider header-slider-preloader">
        <div class="animation-slide owl-carousel owl-theme ">
            <div class="item slider-item bg-img-hero d-flex align-items-center justify-content-center">
                <a href="http://bdtask.com">
                    <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/slider/156c27224ff4389c0bbe6ca8e3daeb7c.png">
                </a>
            </div>
            <div class="item slider-item bg-img-hero d-flex align-items-center justify-content-center">
                <a href="http://bdtask.com">
                    <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/slider/c1c7140f4146c8d083042e49465f0c62.png">
                </a>
            </div>
            <div class="item slider-item bg-img-hero d-flex align-items-center justify-content-center">
                <a href="http://bdtask.com">
                    <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/slider/a306c6a84a161de39e219011a9315d20.png">
                </a>
            </div>
        </div>
    </div>

    <div class="slider_preloader" style="height: 400px;">
        <div class="slider_preloader_status">&nbsp;</div>
    </div>
</div>
<!--end slider-->




<div class="feature-product py-4">
    <div class="container">
        <div class="row align-items-center justify-content-center justify-content-sm-between mb-5 mb-sm-0">
            <div class="col-12 col-sm-auto text-center text-sm-left mb-2 mb-sm-0">
                <a href="https://isshue.bdtask.com/isshue_v4_demo1/category/p/Electronics/XMK67BYX89D8GRQ" class="text-black"><h3 class="category-headding fs-23">Electronics</h3></a>
            </div>
            <div class="col-8 col-sm-5 col-md-4 col-lg-3">
                <form action="https://isshue.bdtask.com/isshue_v4_demo1/web/Category/search_catproduct" method="GET" accept-charset="utf-8">
                    <div class="input-group-overlay">
                        <div class="input-group-prepend-overlay">
                            <button class="input-group-text" type="submit"><i data-feather="search"></i></button>
                        </div>
                        <input class="form-control prepended-form-control appended-form-control" name="product_name" type="text" placeholder="Search...." />
                        <input type="hidden" name="category_id" value="XMK67BYX89D8GRQ">
                    </div>
                </form> </div>
        </div>
        <div class="headding-border position-relative mb-4 d-none d-sm-block"></div>
        <div class="row">
        <?php

        if (count((array)$data) == 0){ ?>

            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                <div class="deals-item-inner deals-item-all bg-white overflow-hidden border position-absolute top-0 left-0 right-0 bottom-0 d-flex align-items-center text-center">
                    <div>
                        <h3 class="fs-18 mb-3">No Items Available</h3>
                        <a href="https://isshue.bdtask.com/isshue_v4_demo1/category/p/Electronics/XMK67BYX89D8GRQ" class="btn btn-primary btn-sm text-white font-weight-500">View All<i data-feather="arrow-right"></i></a>
                    </div>
                </div>
            </div>


        <?php }
        else{
            foreach ($data as $item){
            ?>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                    <div class="feature-card card border-0 border">
                        <div class="card-body">
                            <a href="<?php echo base_url()."index.php/home/show/".$item['id']."/".$item['slug']?>" class="product-img d-block">
                                <img class="img-fluid" src="<?php echo base_url()."uploads/". $item['image']?>" alt="image">
                            </a>

                            <h3 class="product-name fs-15 font-weight-600 overflow-hidden mt-2">
                                <a href="<?php echo base_url()."index.php/home/show/".$item['id']."/".$item['slug']?>" class="text-black"><?php echo $item['name'];?></a>
                            </h3>
                            <div class="star-rating">
                                <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                            <div class="product-price font-weight-bolder font-italic">
                                $<?php echo $item['price']?> / Unit </div>
                        </div>
                    </div>
                </div>

            <?php } } ?>



          <!--  <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                <div class="deals-item-inner deals-item-all bg-white overflow-hidden border position-absolute top-0 left-0 right-0 bottom-0 d-flex align-items-center text-center">
                    <div>
                        <h3 class="fs-18 mb-3">12 + Items Available</h3>
                        <a href="https://isshue.bdtask.com/isshue_v4_demo1/category/p/Electronics/XMK67BYX89D8GRQ" class="btn btn-primary btn-sm text-white font-weight-500">View All<i data-feather="arrow-right"></i></a>
                    </div>
                </div>
            </div>-->


        </div>
    </div>
</div>

<div class="bg-gray py-5">
    <div class="container">
        <div class="row align-items-center justify-content-center justify-content-sm-between mb-5 mb-sm-2">
            <div class="col-12 col-sm-auto text-center text-sm-left mb-2 mb-sm-0">
                <a href="#" class="text-black"><h3 class="category-headding fs-23">Women&#039;s Fashion</h3></a>
            </div>
            <div class="col-8 col-sm-5 col-md-4 col-lg-3">
                <form action="https://isshue.bdtask.com/isshue_v4_demo1/web/Category/search_catproduct" method="GET" accept-charset="utf-8">
                    <div class="input-group-overlay">
                        <div class="input-group-prepend-overlay">
                            <button class="input-group-text" type="submit"><i data-feather="search"></i></button>
                        </div>
                        <input class="form-control prepended-form-control appended-form-control" name="product_name" type="text" placeholder="Search...." />
                        <input type="hidden" name="category_id" value="IB54ZL4TANNOGJ4">
                    </div>
                </form> </div>
        </div>
        <div class="headding-border position-relative mb-4 d-none d-sm-block"></div>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="display-item_one" role="tabpanel" aria-labelledby="display-item_one--tab">
                <div class="row">
                    <div class="col-md-5 col-lg-6">
                        <div class="img-area position-relative bg-white border p-4 p-lg-5 mb-3 mb-md-0">
                            <div class="img-area_header mb-2">
                                <p class="mb-1">Women&#039;s Fashion</p>
                                <h3 class="img-area_header--title fs-27 mb-0">Wireless Audio System Multiroom 360 degree F Scarf</h3>
                                <div class="product-offer-label d-flex align-items-center justify-content-center text-white flex-column position-absolute shadow">
                                    <span class="font-weight-500 fs-23 mb-1">10%</span>
                                    <small class="fs-16">Offers</small>
                                </div>
                            </div>
                            <div class="img">
                                <a href="#">
                                    <img class="img-fluid" src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/e1476eb285bbd620735761058a64510e.jpg" alt="Wireless Audio System Multiroom 360 degree F Scarf">
                                </a>
                            </div>
                            <div class="text-block">
                                <p class="body-copy  text-block_des fs-17 text-black-50 overflow-hidden">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla imperdiet magna erat. Nullam at ex ex. Donec convallis pulvinar lorem, finibus rutrum ante tincidunt nec. Phasellus quam ex, venenatis nec est in, malesuada tempus magna. Quisque quis varius turpis, sed vestibulum nisl. Vivamus quis mauris vel lacus volutpat facilisis. Nam vel erat blandit dolor commodo bibendum. Morbi eu nibh eget urna tincidunt vestibulum.  </p>
                                <div class="link"><a href="#" class="link-text font-weight-500 text-uppercase">Details</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-6">
                        <div class="list-area">
                            <div class="item position-relative bg-white border text-center float-left mb-3">
                                <div class="img">
                                    <a href="#">
                                        <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/40ae99a9d9526b369372d47035867706.png" alt="image">
                                    </a>
                                </div>
                                <div class="info-area">
                                    <div class="model-name">
                                        <a href="#">High hill -Calvin Klein Women&#039;s Brady Pump</a>
                                    </div>
                                    <div class="star-rating justify-content-center mt-3">
                                        <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>

                                    <div class="price-area d-flex align-items-center justify-content-center mb-2">
                                        <div class="purchase-price">
                                            <div class="price font-weight-500">$130.00</div>
                                        </div>
                                        <div class="product-price ml-2">
                                            <del class="price"><span class="d-none">Previous price</span>
                                                $250.00
                                            </del>
                                            <div class="legal">Save $120.00 </div>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)" class="btn btn-soft-primary btn-pill add-to-cart font-weight-500 d-inline-flex align-items-center mt-2 color412" onclick="if (!window.__cfRLUnblockHandlers) return false; add_to_cart_item('77231921', 'High-hill-Calvin-Klein-Women-s-Brady-Pump', 'C2YDWB5SBR58GW5', 0)" data-cf-modified-0b2c8973815113064629515a-="">
                                        <i data-feather="shopping-cart" class="mr-2"></i>Add To Cart </a>
                                </div>
                            </div>
                            <div class="item position-relative bg-white border text-center float-left mb-3">
                                <div class="img">
                                    <a href="#">
                                        <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/2a033b6d0097cad6824e15deb9169dca.jpg" alt="image">
                                    </a>
                                </div>
                                <div class="info-area">
                                    <div class="model-name">
                                        <a href="#">Tops - Samsung Galaxy S9 Plus 128GB</a>
                                    </div>
                                    <div class="star-rating justify-content-center mt-3">
                                        <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>

                                    <div class="price-area d-flex align-items-center justify-content-center mb-2">
                                        <div class="purchase-price">
                                            <div class="price font-weight-500">$450.00</div>
                                        </div>
                                        <div class="product-price ml-2">
                                            <del class="price"><span class="d-none">Previous price</span>
                                                $500.00
                                            </del>
                                            <div class="legal">Save $50.00 </div>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)" class="btn btn-soft-primary btn-pill add-to-cart font-weight-500 d-inline-flex align-items-center mt-2 color412" onclick="if (!window.__cfRLUnblockHandlers) return false; add_to_cart_item('91479379', 'Tops-Samsung-Galaxy-S9-Plus-128GB', 'C2YDWB5SBR58GW5', 0)" data-cf-modified-0b2c8973815113064629515a-="">
                                        <i data-feather="shopping-cart" class="mr-2"></i>Add To Cart </a>
                                </div>
                            </div>
                            <div class="item position-relative bg-white border text-center float-left mb-3">
                                <div class="img">
                                    <a href="#">
                                        <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/89f830b59f96befd90acffcea62ffaf0.png" alt="image">
                                    </a>
                                </div>
                                <div class="info-area">
                                    <div class="model-name">
                                        <a href="#">Cap -Custom 3D Embroidery Promotional Baseball Caps</a>
                                    </div>
                                    <div class="star-rating justify-content-center mt-3">
                                        <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>

                                    <div class="price-area d-flex align-items-center justify-content-center mb-2">
                                        <div class="purchase-price">
                                            <div class="price font-weight-500">$400.00</div>
                                        </div>
                                        <div class="product-price ml-2">
                                            <del class="price"><span class="d-none">Previous price</span>
                                                $500.00
                                            </del>
                                            <div class="legal">Save $100.00 </div>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)" class="btn btn-soft-primary btn-pill add-to-cart font-weight-500 d-inline-flex align-items-center mt-2 color412" onclick="if (!window.__cfRLUnblockHandlers) return false; add_to_cart_item('69634993', 'Cap-Custom-3D-Embroidery-Promotional-Baseball-Caps', 'C2YDWB5SBR58GW5', 0)" data-cf-modified-0b2c8973815113064629515a-="">
                                        <i data-feather="shopping-cart" class="mr-2"></i>Add To Cart </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--
<div class="feature-product py-4">
    <div class="container">
        <div class="row align-items-center justify-content-center justify-content-sm-between mb-5 mb-sm-0">
            <div class="col-12 col-sm-auto text-center text-sm-left mb-2 mb-sm-0">
                <a href="https://isshue.bdtask.com/isshue_v4_demo1/category/p/Winter-Collection/DMSZDB93WOH4Z6V" class="text-black"><h3 class="category-headding fs-23">Winter Collection</h3></a>
            </div>
            <div class="col-8 col-sm-5 col-md-4 col-lg-3">
                <form action="https://isshue.bdtask.com/isshue_v4_demo1/web/Category/search_catproduct" method="GET" accept-charset="utf-8">
                    <div class="input-group-overlay">
                        <div class="input-group-prepend-overlay">
                            <button class="input-group-text" type="submit"><i data-feather="search"></i></button>
                        </div>
                        <input class="form-control prepended-form-control appended-form-control" name="product_name" type="text" placeholder="Search...." />
                        <input type="hidden" name="category_id" value="DMSZDB93WOH4Z6V">
                    </div>
                </form> </div>
        </div>
        <div class="headding-border position-relative mb-4 d-none d-sm-block"></div>
        <div class="row">
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                <div class="feature-card card border-0 border">
                    <div class="card-body">
                        <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/Winter-Jaket-4-AORIWEI-Hot-Sale-Long-Sleeve-Winter-jacket-Thermal-Parka-Men-Winter-Coats/54867669" class="product-img d-block">
                            <img class="img-fluid" src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/2296e36664ab70249977a958fcc92e78.jpg" alt="image">
                        </a>
                        <h3 class="product-name fs-15 font-weight-600 overflow-hidden mt-2">
                            <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/Winter-Jaket-4-AORIWEI-Hot-Sale-Long-Sleeve-Winter-jacket-Thermal-Parka-Men-Winter-Coats/54867669" class="text-black">Winter Jaket 4 - AORIWEI Hot Sale Long Sleeve Winter jacket Thermal Parka Men Winter Coats</a>
                        </h3>
                        <div class="star-rating">
                            <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                        <div class="product-price font-weight-bolder font-italic">
                            $1,800.00 / Unit </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                <div class="feature-card card border-0 border">
                    <div class="card-body">
                        <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/Red-Winter-Pot-Winter-Warm-Black-Puffer-Jacket-Red-Sleeveless-Coat-Women-Men-s-Vest-Bomber-Cotton-Jacket/53995722" class="product-img d-block">
                            <img class="img-fluid" src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/13a7921930d59b15e61cff19b5d9e0b4.png" alt="image">
                        </a>
                        <h3 class="product-name fs-15 font-weight-600 overflow-hidden mt-2">
                            <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/Red-Winter-Pot-Winter-Warm-Black-Puffer-Jacket-Red-Sleeveless-Coat-Women-Men-s-Vest-Bomber-Cotton-Jacket/53995722" class="text-black">Red Winter Pot - Winter Warm Black Puffer Jacket Red Sleeveless Coat Women Men&#039;s Vest Bomber Cotton Jacket</a>
                        </h3>
                        <div class="star-rating">
                            <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                        <div class="product-price font-weight-bolder font-italic">
                            $2,200.00 / Unit </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                <div class="feature-card card border-0 border">
                    <div class="card-body">
                        <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/Men-jacket-Election-And-Promotion-Dry-Fit-O-Neck-T-Shirt-With-Full-Color-Sublimation-Printing-Wholesale-OEM-ODM-Made-In-China/98173651" class="product-img d-block">
                            <img class="img-fluid" src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/22c05bb6fe6d48e246e9090e414c70ec.png" alt="image">
                        </a>
                        <h3 class="product-name fs-15 font-weight-600 overflow-hidden mt-2">
                            <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/Men-jacket-Election-And-Promotion-Dry-Fit-O-Neck-T-Shirt-With-Full-Color-Sublimation-Printing-Wholesale-OEM-ODM-Made-In-China/98173651" class="text-black">Men jacket - Election And Promotion Dry Fit O-Neck T Shirt With Full Color Sublimation Printing Wholesale OEM &amp;ODM Made In China </a>
                        </h3>
                        <div class="star-rating">
                            <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                        <div class="product-price font-weight-bolder font-italic">
                            $1,450.00 / Unit </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                <div class="feature-card card border-0 border">
                    <div class="card-body">
                        <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/Fashion-Jacket-Apperloth-Faux-Suede-Jackets/65381321" class="product-img d-block">
                            <img class="img-fluid" src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/545eea34fd5b86640e90d1161a76a1f3.png" alt="image">
                        </a>
                        <h3 class="product-name fs-15 font-weight-600 overflow-hidden mt-2">
                            <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/Fashion-Jacket-Apperloth-Faux-Suede-Jackets/65381321" class="text-black">Fashion Jacket - Apperloth Faux Suede Jackets</a>
                        </h3>
                        <div class="star-rating">
                            <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                        <div class="product-price font-weight-bolder font-italic">
                            $800.00 / Unit </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                <div class="feature-card card border-0 border">
                    <div class="card-body">
                        <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/Electric-jacket-Lifting-Tools-2Ton-Hydraulic-Trolley/17939817" class="product-img d-block">
                            <img class="img-fluid" src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/13cd039dfd20a66b80a9e07fdc364598.png" alt="image">
                        </a>
                        <h3 class="product-name fs-15 font-weight-600 overflow-hidden mt-2">
                            <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/Electric-jacket-Lifting-Tools-2Ton-Hydraulic-Trolley/17939817" class="text-black">Electric jacket - Lifting Tools 2Ton Hydraulic Trolley</a>
                        </h3>
                        <div class="star-rating">
                            <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                        <div class="product-price font-weight-bolder font-italic">
                            $90.00 / Unit </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                <div class="feature-card card border-0 border">
                    <div class="card-body">
                        <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/Winter-Jaket-AORIWEI-Hot-Sale-Long-Sleeve-Winter-jacket-Thermal-Parka-Men-Winter-Coats/46268983" class="product-img d-block">
                            <img class="img-fluid" src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/0a58449478ff97a189a996021453a94a.png" alt="image">
                        </a>
                        <h3 class="product-name fs-15 font-weight-600 overflow-hidden mt-2">
                            <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/Winter-Jaket-AORIWEI-Hot-Sale-Long-Sleeve-Winter-jacket-Thermal-Parka-Men-Winter-Coats/46268983" class="text-black">Winter Jaket - AORIWEI Hot Sale Long Sleeve Winter jacket Thermal Parka Men Winter Coats</a>
                        </h3>
                        <div class="star-rating">
                            <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                        <div class="product-price font-weight-bolder font-italic">
                            $1,800.00 / Unit </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                <div class="feature-card card border-0 border">
                    <div class="card-body">
                        <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/Winter-Jaket-7-AORIWEI-Hot-Sale-Long-Sleeve-Winter-jacket-Thermal-Parka-Men-Winter-Coats/76828927" class="product-img d-block">
                            <img class="img-fluid" src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/04bbed37d2e4ad4d5a3ce69f12d87ed6.jpg" alt="image">
                        </a>
                        <h3 class="product-name fs-15 font-weight-600 overflow-hidden mt-2">
                            <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/Winter-Jaket-7-AORIWEI-Hot-Sale-Long-Sleeve-Winter-jacket-Thermal-Parka-Men-Winter-Coats/76828927" class="text-black">Winter Jaket 7 - AORIWEI Hot Sale Long Sleeve Winter jacket Thermal Parka Men Winter Coats</a>
                        </h3>
                        <div class="star-rating">
                            <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                        <div class="product-price font-weight-bolder font-italic">
                            $780.00 / Unit </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                <div class="feature-card card border-0 border">
                    <div class="card-body">
                        <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/Royal-Watch-Smael-brand-SL9062-wristwatches-3ATM-waterproof/32868964" class="product-img d-block">
                            <img class="img-fluid" src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/d47b780ea37c3775e266f581b79aed8a.jpg" alt="image">
                        </a>
                        <h3 class="product-name fs-15 font-weight-600 overflow-hidden mt-2">
                            <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/Royal-Watch-Smael-brand-SL9062-wristwatches-3ATM-waterproof/32868964" class="text-black">Royal Watch - Smael brand SL9062 wristwatches 3ATM waterproof </a>
                        </h3>
                        <div class="star-rating">
                            <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                        <div class="product-price font-weight-bolder font-italic">
                            $50.00 / Unit </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                <div class="feature-card card border-0 border">
                    <div class="card-body">
                        <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/Winter-Jaket-6-AORIWEI-Hot-Sale-Long-Sleeve-Winter-jacket-Thermal-Parka-Men-Winter-Coats/51812632" class="product-img d-block">
                            <img class="img-fluid" src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/a51823c73277a712874ef59f507ef727.jpg" alt="image">
                        </a>
                        <h3 class="product-name fs-15 font-weight-600 overflow-hidden mt-2">
                            <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/Winter-Jaket-6-AORIWEI-Hot-Sale-Long-Sleeve-Winter-jacket-Thermal-Parka-Men-Winter-Coats/51812632" class="text-black">Winter Jaket 6 - AORIWEI Hot Sale Long Sleeve Winter jacket Thermal Parka Men Winter Coats</a>
                        </h3>
                        <div class="star-rating">
                            <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                        <div class="product-price font-weight-bolder font-italic">
                            $2,300.00 / Unit </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                <div class="feature-card card border-0 border">
                    <div class="card-body">
                        <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/Winter-Jaket-8-AORIWEI-Hot-Sale-Long-Sleeve-Winter-jacket-Thermal-Parka-Men-Winter-Coats/55157441" class="product-img d-block">
                            <img class="img-fluid" src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/0dcd8df53d90893ddb3e760195b07f6c.jpg" alt="image">
                        </a>
                        <h3 class="product-name fs-15 font-weight-600 overflow-hidden mt-2">
                            <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/Winter-Jaket-8-AORIWEI-Hot-Sale-Long-Sleeve-Winter-jacket-Thermal-Parka-Men-Winter-Coats/55157441" class="text-black">Winter Jaket 8 - AORIWEI Hot Sale Long Sleeve Winter jacket Thermal Parka Men Winter Coats</a>
                        </h3>
                        <div class="star-rating">
                            <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                        <div class="product-price font-weight-bolder font-italic">
                            $1,500.00 / Unit </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                <div class="feature-card card border-0 border">
                    <div class="card-body">
                        <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/leather-Jacket-AORIWEI-Hot-Sale-Long-Sleeve-Winter-jacket-Thermal-Parka-Men-Winter-Coats/48933223" class="product-img d-block">
                            <img class="img-fluid" src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/fce752d95a021d79c5f236c49525a7e1.jpg" alt="image">
                        </a>
                        <h3 class="product-name fs-15 font-weight-600 overflow-hidden mt-2">
                            <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/leather-Jacket-AORIWEI-Hot-Sale-Long-Sleeve-Winter-jacket-Thermal-Parka-Men-Winter-Coats/48933223" class="text-black">leather Jacket - AORIWEI Hot Sale Long Sleeve Winter jacket Thermal Parka Men Winter Coats</a>
                        </h3>
                        <div class="star-rating">
                            <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                        <div class="product-price font-weight-bolder font-italic">
                            $80.00 / Unit </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                <div class="deals-item-inner deals-item-all bg-white overflow-hidden border position-absolute top-0 left-0 right-0 bottom-0 d-flex align-items-center text-center">
                    <div>
                        <h3 class="fs-18 mb-3">12 + Items Available</h3>
                        <a href="https://isshue.bdtask.com/isshue_v4_demo1/category/p/Winter-Collection/DMSZDB93WOH4Z6V" class="btn btn-primary btn-sm text-white font-weight-500">View All<i data-feather="arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-gray py-5">
    <div class="container">
        <div class="row align-items-center justify-content-center justify-content-sm-between mb-5 mb-sm-2">
            <div class="col-12 col-sm-auto text-center text-sm-left mb-2 mb-sm-0">
                <a href="https://isshue.bdtask.com/isshue_v4_demo1/category/p/Gadget-Gear/6KY55FHDA3V7858" class="text-black"><h3 class="category-headding fs-23">Gadget &amp; Gear</h3></a>
            </div>
            <div class="col-8 col-sm-5 col-md-4 col-lg-3">
                <form action="https://isshue.bdtask.com/isshue_v4_demo1/web/Category/search_catproduct" method="GET" accept-charset="utf-8">
                    <div class="input-group-overlay">
                        <div class="input-group-prepend-overlay">
                            <button class="input-group-text" type="submit"><i data-feather="search"></i></button>
                        </div>
                        <input class="form-control prepended-form-control appended-form-control" name="product_name" type="text" placeholder="Search...." />
                        <input type="hidden" name="category_id" value="6KY55FHDA3V7858">
                    </div>
                </form> </div>
        </div>
        <div class="headding-border position-relative mb-4 d-none d-sm-block"></div>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="display-item_one" role="tabpanel" aria-labelledby="display-item_one--tab">
                <div class="row">
                    <div class="col-md-5 col-lg-6">
                        <div class="img-area position-relative bg-white border p-4 p-lg-5 mb-3 mb-md-0">
                            <div class="img-area_header mb-2">
                                <p class="mb-1">Gadget &amp; Gear</p>
                                <h3 class="img-area_header--title fs-27 mb-0">E-book Reader - Now with a Built-in Front Light - White</h3>
                            </div>
                            <div class="img">
                                <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/E-book-Reader-Now-with-a-Built-in-Front-Light-White/28318441">
                                    <img class="img-fluid" src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/a2409844ed7e4bb149e3ff838f0c2e5f.png" alt="E-book Reader - Now with a Built-in Front Light - White">
                                </a>
                            </div>
                            <div class="text-block">
                                <p class="body-copy  text-block_des fs-17 text-black-50 overflow-hidden">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et fermentum dui. Ut orci quam, ornare sed lorem sed, hendrerit auctor dolor. Nulla viverra, nibh quis ultrices malesuada, ligula ipsum vulputate diam, aliquam egestas nibh ante vel dui. Sed in tellus interdum eros vulputate placerat sed non enim. Pellentesque eget justo porttitor urna dictum fermentum sit amet sed mauris. Praesent molestie vestibulum erat ac rhoncus. Aenean nunc risus, accumsan nec ipsum et, convallis sollicitudin dui. Proin dictum quam a semper malesuada. Etiam porta sit amet risus quis porta. Nulla facilisi. Cras at interdum ante. Ut gravida pharetra ligula vitae malesuada. </p>

                                <div class="link"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product/E-book-Reader-Now-with-a-Built-in-Front-Light-White/28318441" class="link-text font-weight-500 text-uppercase">Details</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-6">
                        <div class="list-area">
                            <div class="item position-relative bg-white border text-center float-left mb-3">
                                <div class="img">
                                    <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/Game-Console-Indoor-Game-Player-620-Games-Console/18369515">
                                        <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/9b86512a3ce304ab393ad5aa58264c38.png" alt="image">
                                    </a>
                                </div>
                                <div class="info-area">
                                    <div class="model-name">
                                        <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/Game-Console-Indoor-Game-Player-620-Games-Console/18369515">Game Console -Indoor Game Player 620 Games Console</a>
                                    </div>
                                    <div class="star-rating justify-content-center mt-3">
                                        <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>

                                    <div class="price-area d-flex align-items-center justify-content-center mb-2">
                                        <div class="purchase-price">
                                            <div class="price font-weight-500">$90.00</div>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)" class="btn btn-soft-primary btn-pill add-to-cart font-weight-500 d-inline-flex align-items-center mt-2 color412" onclick="if (!window.__cfRLUnblockHandlers) return false; add_to_cart_item('18369515', 'Game-Console-Indoor-Game-Player-620-Games-Console', '4ESRUABZ92EFI6V', 0)" data-cf-modified-0b2c8973815113064629515a-="">
                                        <i data-feather="shopping-cart" class="mr-2"></i>Add To Cart </a>
                                </div>
                            </div>
                            <div class="item position-relative bg-white border text-center float-left mb-3">
                                <div class="img">
                                    <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/Game-Controller-Indoor-Game-Player-620-Games-Console/16568891">
                                        <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/a62ee17a0def37e45c544130d1cdb666.jpg" alt="image">
                                    </a>
                                </div>
                                <div class="info-area">
                                    <div class="model-name">
                                        <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/Game-Controller-Indoor-Game-Player-620-Games-Console/16568891">Game Controller - Indoor Game Player 620 Games Console </a>
                                    </div>
                                    <div class="star-rating justify-content-center mt-3">
                                        <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>

                                    <div class="price-area d-flex align-items-center justify-content-center mb-2">
                                        <div class="purchase-price">
                                            <div class="price font-weight-500">$500.00</div>
                                        </div>
                                        <div class="product-price ml-2">
                                            <del class="price"><span class="d-none">Previous price</span>
                                                $800.00
                                            </del>
                                            <div class="legal">Save $300.00 </div>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)" class="btn btn-soft-primary btn-pill add-to-cart font-weight-500 d-inline-flex align-items-center mt-2 color412" onclick="if (!window.__cfRLUnblockHandlers) return false; add_to_cart_item('16568891', 'Game-Controller-Indoor-Game-Player-620-Games-Console', 'C2YDWB5SBR58GW5', 0)" data-cf-modified-0b2c8973815113064629515a-="">
                                        <i data-feather="shopping-cart" class="mr-2"></i>Add To Cart </a>
                                </div>
                            </div>
                            <div class="item position-relative bg-white border text-center float-left mb-3">
                                <div class="img">
                                    <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/Sound-Factory-GH-192B-solar-power-ultrasonic-sound-bird-monkey-repellent/18762763">
                                        <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/7081f32efdd4d9e7d3d1cc72eb674b15.jpg" alt="image">
                                    </a>
                                </div>
                                <div class="info-area">
                                    <div class="model-name">
                                        <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/Sound-Factory-GH-192B-solar-power-ultrasonic-sound-bird-monkey-repellent/18762763">Sound Factory - GH-192B solar power ultrasonic sound bird monkey repellent</a>
                                    </div>
                                    <div class="star-rating justify-content-center mt-3">
                                        <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>

                                    <div class="price-area d-flex align-items-center justify-content-center mb-2">
                                        <div class="purchase-price">
                                            <div class="price font-weight-500">$80.00</div>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)" class="btn btn-soft-primary btn-pill add-to-cart font-weight-500 d-inline-flex align-items-center mt-2 color412" onclick="if (!window.__cfRLUnblockHandlers) return false; add_to_cart_item('18762763', 'Sound-Factory-GH-192B-solar-power-ultrasonic-sound-bird-monkey-repellent', 'GQ3DZ3N6QB2URPY', 0)" data-cf-modified-0b2c8973815113064629515a-="">
                                        <i data-feather="shopping-cart" class="mr-2"></i>Add To Cart </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="pt-5 pb-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 mb-3 mb-md-0">
                <h3 class="category-headding">Best sale Product</h3>
                <div class="headding-border"></div>
                <div class="feature-category owl-carousel owl-theme">
                    <div class="feature-item widget"> <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Head-Phone-2020-High-Quality-New-Products-earphone-cheap/76592233">
                                <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/715c8ee7e3b095cf46722310670d5f58.png" alt="image" width="64">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Head-Phone-2020-High-Quality-New-Products-earphone-cheap/76592233" class="d-block">Head Phone - 2020 High Quality New Products earphone cheap</a></h6>
                                <div class="star-rating">
                                    <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                                <p class="entry-meta">
                                    $500.00
                                </p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Outdoor-Chair-Leisure-garden-chair-outdoor/85245819">
                                <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/2621b70d0565e4dc5d498e916f80b9fa.png" alt="image" width="64">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Outdoor-Chair-Leisure-garden-chair-outdoor/85245819" class="d-block">Outdoor Chair - Leisure garden chair outdoor </a></h6>
                                <div class="star-rating">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i> </div>
                                <p class="entry-meta">
                                    $250.00
                                </p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Royal-Watch-Smael-brand-SL9062-wristwatches-3ATM-waterproof/32868964">
                                <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/d47b780ea37c3775e266f581b79aed8a.jpg" alt="image" width="64">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Royal-Watch-Smael-brand-SL9062-wristwatches-3ATM-waterproof/32868964" class="d-block">Royal Watch - Smael brand SL9062 wristwatches 3ATM waterproof </a></h6>
                                <div class="star-rating">
                                    <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                                <p class="entry-meta">
                                    $50.00
                                </p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Game-Controller-Indoor-Game-Player-620-Games-Console/16568891">
                                <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/a62ee17a0def37e45c544130d1cdb666.jpg" alt="image" width="64">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Game-Controller-Indoor-Game-Player-620-Games-Console/16568891" class="d-block">Game Controller - Indoor Game Player 620 Games Console </a></h6>
                                <div class="star-rating">
                                    <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                                <p class="entry-meta">
                                    $500.00
                                </p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Originals-Sound-Box-new-gadgets-31mm-4ohm-3w-soundbox-speaker-driver/65531224">
                                <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/e4c4218cb91ec0d1f0ce479bf3d596d5.jpg" alt="image" width="64">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Originals-Sound-Box-new-gadgets-31mm-4ohm-3w-soundbox-speaker-driver/65531224" class="d-block">Originals Sound Box - new gadgets 31mm 4ohm 3w soundbox speaker driver</a></h6>
                                <div class="star-rating">
                                    <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                                <p class="entry-meta">
                                    $35.00
                                </p>
                            </div>
                        </div>
                    </div> <div class="feature-item widget"> <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Arduino-Nano-V3-0-Board-ATmega328P-5V-16M-Micro-Controller-Board-Compatible-with-Arduino/46836733">
                                <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/27cacb1fa5e01f9c26b01417e30dc683.jpg" alt="image" width="64">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Arduino-Nano-V3-0-Board-ATmega328P-5V-16M-Micro-Controller-Board-Compatible-with-Arduino/46836733" class="d-block">Arduino Nano V3.0 - Board ATmega328P 5V 16M Micro-Controller Board Compatible with Arduino</a></h6>
                                <div class="star-rating">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i> </div>
                                <p class="entry-meta">
                                    $300.00
                                </p>
                            </div>
                        </div>
                    </div> </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-3 mb-md-0">
                <h3 class="category-headding ">New Product</h3>
                <div class="headding-border"></div>
                <div class="feature-category owl-carousel owl-theme">
                    <div class="feature-item widget"> <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Intel-Core-i7-4500U-Slim-Laptop-Win10-System-8GB-RAM-Metal-Cover-Computer-With-Backlight-Keyboard/98972651">
                                <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/82d41bf57d0e0c120d6e60d71437dbee.png" alt="image" width="64">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Intel-Core-i7-4500U-Slim-Laptop-Win10-System-8GB-RAM-Metal-Cover-Computer-With-Backlight-Keyboard/98972651" class="d-block">Intel Core i7 4500U Slim Laptop Win10 System 8GB RAM Metal Cover Computer With Backlight Keyboard</a></h6>
                                <div class="star-rating">
                                    <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                                <p class="entry-meta">
                                    $15,000.00 </p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Original-Lenovo-Yoga-C940-14IIL-Laptops-Core-i7-1065G7-1-3GHz-16GB-1TB-Shared-Win10-14inch-UHD-computer/59589485">
                                <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/a6fee10e6ffdc33b6bf0a7edc5fb48ba.jpg" alt="image" width="64">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Original-Lenovo-Yoga-C940-14IIL-Laptops-Core-i7-1065G7-1-3GHz-16GB-1TB-Shared-Win10-14inch-UHD-computer/59589485" class="d-block">Original Lenovo Yoga C940 14IIL Laptops Core i7-1065G7 1.3GHz 16GB 1TB Shared Win10 14inch UHD computer</a></h6>
                                <div class="star-rating">
                                    <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                                <p class="entry-meta">
                                    $12,000.00 </p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/gaming-pc-i7-gtx-1080-desktop-all-in-one-computer-24inch-computer-gamer-aio-curved-led-ips-pc/31248349">
                                <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/c7893e414b718b1bf91172aace35f22e.png" alt="image" width="64">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/gaming-pc-i7-gtx-1080-desktop-all-in-one-computer-24inch-computer-gamer-aio-curved-led-ips-pc/31248349" class="d-block">gaming pc i7 gtx 1080 desktop all in one computer 24inch computer gamer aio curved led ips pc</a></h6>
                                <div class="star-rating">
                                    <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                                <p class="entry-meta">
                                    $1,000.00 </p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/computer-monoblock-i7-i5-i3-computer-pc-desktop-all-in-one-23-8-inch-curved-surface-i9-desktop-without-cpu-ssd-ram-diy-computer/62453719">
                                <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/23c804c0001c2a0f635238f89a65ab3f.png" alt="image" width="64">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/computer-monoblock-i7-i5-i3-computer-pc-desktop-all-in-one-23-8-inch-curved-surface-i9-desktop-without-cpu-ssd-ram-diy-computer/62453719" class="d-block">computer monoblock i7 i5 i3 computer pc desktop all in one 23.8 inch curved surface i9 desktop without cpu ssd ram diy computer</a></h6>
                                <div class="star-rating">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                                <p class="entry-meta">
                                    $3,000.00 </p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Salad-Bars-and-Work-Tables/82893452">
                                <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/c7dc228e9f0032751a9f0d05358b6736.png" alt="image" width="64">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Salad-Bars-and-Work-Tables/82893452" class="d-block">Salad Bars and Work Tables</a></h6>
                                <div class="star-rating">
                                    <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                                <p class="entry-meta">
                                    $1,000.00 </p>
                            </div>
                        </div>
                    </div> <div class="feature-item widget"> <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Merchandising-Stand-Merchandise-Display-Stands-Fashion-Merchandising-Metal-Rack-Hanging-Hook/39353115">
                                <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/22a53b1e93120ba7c2d0ceb67798fd47.png" alt="image" width="64">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Merchandising-Stand-Merchandise-Display-Stands-Fashion-Merchandising-Metal-Rack-Hanging-Hook/39353115" class="d-block">Merchandising Stand Merchandise Display Stands Fashion Merchandising Metal Rack Hanging Hook</a></h6>
                                <div class="star-rating">
                                    <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                                <p class="entry-meta">
                                    $1,000.00 </p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Grocery-Store-Iron-Gondola-Grocery-Store-Shelving-Dimensions/27663572">
                                <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/b38ac1ec2ece369c86f099ba48a149be.jpg" alt="image" width="64">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Grocery-Store-Iron-Gondola-Grocery-Store-Shelving-Dimensions/27663572" class="d-block">Grocery Store Iron Gondola Grocery Store Shelving Dimensions</a></h6>
                                <div class="star-rating">
                                    <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                                <p class="entry-meta">
                                    $500.00 </p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Trolley-Equipment-s-Trolley-Supermarket-Equipment-Supermarket-Equipment-s-Gondola-Shelves-Shopping-Trolley/23477235">
                                <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/364804d8f35f6a9668503e137d3a5a2e.png" alt="image" width="64">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Trolley-Equipment-s-Trolley-Supermarket-Equipment-Supermarket-Equipment-s-Gondola-Shelves-Shopping-Trolley/23477235" class="d-block">Trolley - Equipment&#039;s Trolley Supermarket Equipment Supermarket Equipment&#039;s Gondola Shelves Shopping Trolley</a></h6>
                                <div class="star-rating">
                                    <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                                <p class="entry-meta">
                                    $100,000.00 </p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Baseball-Baseball-Gloves-Cheap-Custom-Logo-Professional-PVC-Leather-Training-Baseball/47747193">
                                <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/20251a614c0d5005e4d3858c4845b93a.jpg" alt="image" width="64">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Baseball-Baseball-Gloves-Cheap-Custom-Logo-Professional-PVC-Leather-Training-Baseball/47747193" class="d-block">Baseball Baseball Gloves Cheap Custom Logo Professional PVC Leather Training Baseball</a></h6>
                                <div class="star-rating">
                                    <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                                <p class="entry-meta">
                                    $150,000.00 </p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Smart-watch-Y20-Waterproof-Sport-Smart-Bracelet-Heart-Rate-Blood-Presue-Sleep-Monitor-Fitness-Tracker-phone-Wrist-Watch/84996479">
                                <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/790fce0a6fdde117ec583234c4bd5ec2.png" alt="image" width="64">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Smart-watch-Y20-Waterproof-Sport-Smart-Bracelet-Heart-Rate-Blood-Presue-Sleep-Monitor-Fitness-Tracker-phone-Wrist-Watch/84996479" class="d-block">Smart watch Y20 Waterproof Sport Smart Bracelet Heart Rate Blood Presue Sleep Monitor Fitness Tracker phone Wrist Watch</a></h6>
                                <div class="star-rating">
                                    <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                                <p class="entry-meta">
                                    $5,000.00 </p>
                            </div>
                        </div>
                    </div> <div class="feature-item widget"> <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Snowflake-Multi-Tool-19-in-1-Stainless-Steel-EDC-Multitool-Keychain-Outdoor-Travel-Cam/33415324">
                                <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/788b50b1ae7e16e593b36c02b0b042e9.png" alt="image" width="64">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Snowflake-Multi-Tool-19-in-1-Stainless-Steel-EDC-Multitool-Keychain-Outdoor-Travel-Cam/33415324" class="d-block">Snowflake Multi Tool 19-in-1 Stainless Steel EDC Multitool Keychain Outdoor Travel Cam</a></h6>
                                <div class="star-rating">
                                    <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                                <p class="entry-meta">
                                    $11,000.00 </p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/China-wholesale-mountain-bike-steel-frame-mountain-bike-sport-cycling/83467874">
                                <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/2335ea7bccce41ea32d2775edd8edba7.png" alt="image" width="64">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/China-wholesale-mountain-bike-steel-frame-mountain-bike-sport-cycling/83467874" class="d-block">China wholesale mountain bike steel frame mountain bike sport cycling</a></h6>
                                <div class="star-rating">
                                    <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                                <p class="entry-meta">
                                    $5,000.00 </p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Home-Garden-Hot-Selling-European-Elegant-Gold-Metal-Pots-Flower-Planter/72965577">
                                <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/699c4c52cc671bcb27d913e71e6654ed.jpg" alt="image" width="64">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Home-Garden-Hot-Selling-European-Elegant-Gold-Metal-Pots-Flower-Planter/72965577" class="d-block">Home Garden Hot Selling European Elegant Gold Metal Pots Flower Planter</a></h6>
                                <div class="star-rating">
                                    <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                                <p class="entry-meta">
                                    $10,000.00 </p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Grow-Smart-Garden-Harvest-Indoor-Hydroponic-Garden/72863649">
                                <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/a02828a6aceac6260b48301869f56756.jpg" alt="image" width="64">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Grow-Smart-Garden-Harvest-Indoor-Hydroponic-Garden/72863649" class="d-block">Grow Smart Garden Harvest Indoor Hydroponic Garden</a></h6>
                                <div class="star-rating">
                                    <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                                <p class="entry-meta">
                                    $2,000.00 </p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Gaming-Chair-Office-Chair-Racing-Chair-with-Lumbar-Support/98639285">
                                <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/5f5be551eb5c943acff3264617b981ad.png" alt="image" width="64">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Gaming-Chair-Office-Chair-Racing-Chair-with-Lumbar-Support/98639285" class="d-block">Gaming Chair Office Chair Racing Chair with Lumbar Support</a></h6>
                                <div class="star-rating">
                                    <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                                <p class="entry-meta">
                                    $2,000.00 </p>
                            </div>
                        </div>
                    </div> </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <h3 class="category-headding ">Most Popular Product</h3>
                <div class="headding-border"></div>
                <div class="feature-category owl-carousel owl-theme">
                    <div class="feature-item widget"> <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Bangless-5-Nine-West-Silver-Tone-and-Floater-Quisque-de-imperdiet-massa-nec-pretium-faucibus-Sed-sodales-nisl-eget-eros-hendrerit-vel-vestibulum-nisl-rhoncus-Donec-eu-rhoncus-tellus-ut-pharetra-tellus-Fusce-eu-suscipit-eros-liquam-mollis-tortor-sed/59854261">
                                <img width="64" src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/c276a59e90fe88f07076a43924206411.jpg" alt="image">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Bangless-5-Nine-West-Silver-Tone-and-Floater-Quisque-de-imperdiet-massa-nec-pretium-faucibus-Sed-sodales-nisl-eget-eros-hendrerit-vel-vestibulum-nisl-rhoncus-Donec-eu-rhoncus-tellus-ut-pharetra-tellus-Fusce-eu-suscipit-eros-liquam-mollis-tortor-sed/59854261" class="d-block">Bangless 5 -Nine West Silver-Tone and Floater Quisque de imperdiet massa nec pretium faucibus. Sed sodales nisl eget eros hendrerit, vel vestibulum nisl rhoncus. Donec eu rhoncus tellus, ut pharetra tellus. Fusce eu suscipit eros liquam mollis tortor sed </a></h6>
                                <div class="star-rating">
                                    <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                                <p class="entry-meta">
                                    <del class="text-muted mr-1">
                                        $597.00 </del>
                                    $597.00
                                </p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Baby-Toyes-VTech-Baby-Lil-Critters-Moosical-Beads-Amazon/28625844">
                                <img width="64" src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/0cb0c551264126e77099f84fa517be9c.png" alt="image">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Baby-Toyes-VTech-Baby-Lil-Critters-Moosical-Beads-Amazon/28625844" class="d-block">Baby Toyes -VTech Baby Lil&#039; Critters Moosical Beads Amazon</a></h6>
                                <div class="star-rating">
                                    <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                                <p class="entry-meta">
                                    $4,200.00
                                </p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/baby-Walker-Factory-wholesale-baby-walker-china-simple-baby-walker-china-cheap-car-walker-for-baby/72891796">
                                <img width="64" src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/4b4ce65a9645a7eef6aa20490c23edf7.png" alt="image">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/baby-Walker-Factory-wholesale-baby-walker-china-simple-baby-walker-china-cheap-car-walker-for-baby/72891796" class="d-block">baby Walker -Factory wholesale baby walker china simple baby walker china cheap car walker for baby </a></h6>
                                <div class="star-rating">
                                    <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                                <p class="entry-meta">
                                    $1,700.00
                                </p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Hot-Winter-Jaket-Winter-Warm-Black-Puffer-Jacket-Red-Sleeveless-Coat-Women-Men-s-Vest-Bomber-Cotton-Jacket/28282842">
                                <img width="64" src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/0ce51d413c45f4ae2b401124fb5f6ff2.png" alt="image">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Hot-Winter-Jaket-Winter-Warm-Black-Puffer-Jacket-Red-Sleeveless-Coat-Women-Men-s-Vest-Bomber-Cotton-Jacket/28282842" class="d-block">Hot Winter Jaket Winter Warm Black Puffer Jacket Red Sleeveless Coat Women Men&#039;s Vest Bomber Cotton Jacket</a></h6>
                                <div class="star-rating">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> </div>
                                <p class="entry-meta">
                                    <del class="text-muted mr-1">
                                        $1,200.00 </del>
                                    $1,200.00
                                </p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Winter-Jaket-4-AORIWEI-Hot-Sale-Long-Sleeve-Winter-jacket-Thermal-Parka-Men-Winter-Coats/54867669">
                                <img width="64" src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/2296e36664ab70249977a958fcc92e78.jpg" alt="image">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Winter-Jaket-4-AORIWEI-Hot-Sale-Long-Sleeve-Winter-jacket-Thermal-Parka-Men-Winter-Coats/54867669" class="d-block">Winter Jaket 4 - AORIWEI Hot Sale Long Sleeve Winter jacket Thermal Parka Men Winter Coats</a></h6>
                                <div class="star-rating">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> </div>
                                <p class="entry-meta">
                                    $1,800.00
                                </p>
                            </div>
                        </div>
                    </div> <div class="feature-item widget"> <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Winter-Jaket-8-AORIWEI-Hot-Sale-Long-Sleeve-Winter-jacket-Thermal-Parka-Men-Winter-Coats/55157441">
                                <img width="64" src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/0dcd8df53d90893ddb3e760195b07f6c.jpg" alt="image">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Winter-Jaket-8-AORIWEI-Hot-Sale-Long-Sleeve-Winter-jacket-Thermal-Parka-Men-Winter-Coats/55157441" class="d-block">Winter Jaket 8 - AORIWEI Hot Sale Long Sleeve Winter jacket Thermal Parka Men Winter Coats</a></h6>
                                <div class="star-rating">
                                    <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                                <p class="entry-meta">
                                    $1,500.00
                                </p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/polo-tshirt-1-High-quality-cotton-polo-t-shirt-with-logo/22472558">
                                <img width="64" src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/5b82e8d448a26f2b67a4d229f00af149.png" alt="image">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/polo-tshirt-1-High-quality-cotton-polo-t-shirt-with-logo/22472558" class="d-block">polo tshirt 1- High quality cotton polo t shirt with logo</a></h6>
                                <div class="star-rating">
                                    <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                                <p class="entry-meta">
                                    <del class="text-muted mr-1">
                                        $300.00 </del>
                                    $300.00
                                </p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/New-Head-Phone-Custom-Ear-detection-mobile-phone-charging-head-headphones-earphones-wireless-earbud-true/13327715">
                                <img width="64" src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/16265e8f8beda0efe3ee0d53918178d9.png" alt="image">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/New-Head-Phone-Custom-Ear-detection-mobile-phone-charging-head-headphones-earphones-wireless-earbud-true/13327715" class="d-block">New Head Phone - Custom Ear detection mobile phone charging head headphones earphones wireless earbud true </a></h6>
                                <div class="star-rating">
                                    <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                                <p class="entry-meta">
                                    $450.00
                                </p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Arduino-Uno-R3-China-Board-ATmega328P-5V-16M-Micro-Controller-Board-Compatible-with-Arduino/13927825">
                                <img width="64" src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/6791f133abeb4a97d7f720a11932cc47.jpg" alt="image">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Arduino-Uno-R3-China-Board-ATmega328P-5V-16M-Micro-Controller-Board-Compatible-with-Arduino/13927825" class="d-block">Arduino Uno R3 (China) - Board ATmega328P 5V 16M Micro-Controller Board Compatible with Arduino</a></h6>
                                <div class="star-rating">
                                    <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                                <p class="entry-meta">
                                    <del class="text-muted mr-1">
                                        $100.00 </del>
                                    $100.00
                                </p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Arduino-Nano-V3-0-Board-ATmega328P-5V-16M-Micro-Controller-Board-Compatible-with-Arduino/46836733">
                                <img width="64" src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/27cacb1fa5e01f9c26b01417e30dc683.jpg" alt="image">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Arduino-Nano-V3-0-Board-ATmega328P-5V-16M-Micro-Controller-Board-Compatible-with-Arduino/46836733" class="d-block">Arduino Nano V3.0 - Board ATmega328P 5V 16M Micro-Controller Board Compatible with Arduino</a></h6>
                                <div class="star-rating">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i> </div>
                                <p class="entry-meta">
                                    $300.00
                                </p>
                            </div>
                        </div>
                    </div> <div class="feature-item widget"> <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Originals-Sound-Box-new-gadgets-31mm-4ohm-3w-soundbox-speaker-driver/65531224">
                                <img width="64" src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/e4c4218cb91ec0d1f0ce479bf3d596d5.jpg" alt="image">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Originals-Sound-Box-new-gadgets-31mm-4ohm-3w-soundbox-speaker-driver/65531224" class="d-block">Originals Sound Box - new gadgets 31mm 4ohm 3w soundbox speaker driver</a></h6>
                                <div class="star-rating">
                                    <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                                <p class="entry-meta">
                                    <del class="text-muted mr-1">
                                        $35.00 </del>
                                    $35.00
                                </p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Game-Controller-Indoor-Game-Player-620-Games-Console/16568891">
                                <img width="64" src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/a62ee17a0def37e45c544130d1cdb666.jpg" alt="image">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Game-Controller-Indoor-Game-Player-620-Games-Console/16568891" class="d-block">Game Controller - Indoor Game Player 620 Games Console </a></h6>
                                <div class="star-rating">
                                    <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                                <p class="entry-meta">
                                    <del class="text-muted mr-1">
                                        $500.00 </del>
                                    $500.00
                                </p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Tops-Samsung-Galaxy-S9-Plus-128GB/91479379">
                                <img width="64" src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/2a033b6d0097cad6824e15deb9169dca.jpg" alt="image">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Tops-Samsung-Galaxy-S9-Plus-128GB/91479379" class="d-block">Tops - Samsung Galaxy S9 Plus 128GB</a></h6>
                                <div class="star-rating">
                                    <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                                <p class="entry-meta">
                                    <del class="text-muted mr-1">
                                        $450.00 </del>
                                    $450.00
                                </p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Cap-Custom-3D-Embroidery-Promotional-Baseball-Caps/69634993">
                                <img width="64" src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/89f830b59f96befd90acffcea62ffaf0.png" alt="image">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/Cap-Custom-3D-Embroidery-Promotional-Baseball-Caps/69634993" class="d-block">Cap -Custom 3D Embroidery Promotional Baseball Caps</a></h6>
                                <div class="star-rating">
                                    <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                                <p class="entry-meta">
                                    <del class="text-muted mr-1">
                                        $400.00 </del>
                                    $400.00
                                </p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <a class="entry-thumb d-block position-relative bg-white border mr-3" href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/High-hill-Calvin-Klein-Women-s-Brady-Pump/77231921">
                                <img width="64" src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/40ae99a9d9526b369372d47035867706.png" alt="image">
                            </a>
                            <div class="media-body">
                                <h6 class="entry-title fs-16 font-weight-500 product-name overflow-hidden"><a href="https://isshue.bdtask.com/isshue_v4_demo1/product_details/High-hill-Calvin-Klein-Women-s-Brady-Pump/77231921" class="d-block">High hill -Calvin Klein Women&#039;s Brady Pump</a></h6>
                                <div class="star-rating">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                                <p class="entry-meta">
                                    <del class="text-muted mr-1">
                                        $130.00 </del>
                                    $130.00
                                </p>
                            </div>
                        </div>
                    </div> </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-1 mb-5">
    <div class="brand-logo owl-carousel owl-theme border-top border-bottom py-4 px-4">
        <a href="https://isshue.bdtask.com/isshue_v4_demo1/brand_product/list/U3AJ6XUKIJQBCJN" class="brand-logo_item d-block">
            <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/brand_image/2919daa6fd55901cf67958f136c6165e.png" alt="apex">
        </a>
        <a href="https://isshue.bdtask.com/isshue_v4_demo1/brand_product/list/8JUICMLUTGOBL1S" class="brand-logo_item d-block">
            <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/brand_image/e8b000fd3a1bd9739e75f232296eb6f4.png" alt="apple">
        </a>
        <a href="https://isshue.bdtask.com/isshue_v4_demo1/brand_product/list/4IAAYMODB6L89DA" class="brand-logo_item d-block">
            <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/brand_image/fef611f67774caf80b1bd4cef3aef083.png" alt="asus">
        </a>
        <a href="https://isshue.bdtask.com/isshue_v4_demo1/brand_product/list/TGBFAWOFZPIJVTO" class="brand-logo_item d-block">
            <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/brand_image/c8d3aca3905c34b4021b86339a083faa.png" alt="bata">
        </a>
        <a href="https://isshue.bdtask.com/isshue_v4_demo1/brand_product/list/WCS4G3S74CAOESA" class="brand-logo_item d-block">
            <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/brand_image/cf9d0940fbdacaf4c820e1a5cb6d9c1d.png" alt="bdtask">
        </a>
        <a href="https://isshue.bdtask.com/isshue_v4_demo1/brand_product/list/PPUZ4WVLZA8KXLP" class="brand-logo_item d-block">
            <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/brand_image/9f714d51f5da57299833be31d9179994.png" alt="lenovo">
        </a>
        <a href="https://isshue.bdtask.com/isshue_v4_demo1/brand_product/list/H498EL2VFRKEHBD" class="brand-logo_item d-block">
            <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/brand_image/6d2c6b152424353e4bd2b6cc9d698f4b.png" alt="LG">
        </a>
        <a href="https://isshue.bdtask.com/isshue_v4_demo1/brand_product/list/H5LE77ANBPSDAS3" class="brand-logo_item d-block">
            <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/brand_image/ddb0f3c983faea074c42ba6941583018.png" alt="oppo">
        </a>
        <a href="https://isshue.bdtask.com/isshue_v4_demo1/brand_product/list/CMGD5OSST28YV35" class="brand-logo_item d-block">
            <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/brand_image/94309948373611919e10f4c4ffd4b117.png" alt="panasonic">
        </a>
        <a href="https://isshue.bdtask.com/isshue_v4_demo1/brand_product/list/AR4T41M49L6NI4E" class="brand-logo_item d-block">
            <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/brand_image/d6a91006348a5dc36dff08a4ccab1754.png" alt="samsung">
        </a>
        <a href="https://isshue.bdtask.com/isshue_v4_demo1/brand_product/list/P812AQ8LLS826B7" class="brand-logo_item d-block">
            <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/brand_image/9270f0bdbe88532aa77c6ba154a60654.png" alt="testing">
        </a>
        <a href="https://isshue.bdtask.com/isshue_v4_demo1/brand_product/list/2XFD836BNTQ37QA" class="brand-logo_item d-block">
            <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/brand_image/f818264b275b9e2d8737f38432fbf682.png" alt="Walton">
        </a>
    </div>
</div>
-->



<link rel="stylesheet" type="text/css" href="https://isshue.bdtask.com/isshue_v4_demo1/application/modules/web/views/themes/zaima/assets/css/footer.css">
