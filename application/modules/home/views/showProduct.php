<div class="container">

    <nav aria-label="breadcrumb" class="my-2">
        <ol class="breadcrumb d-inline-flex mb-0">
            <li class="breadcrumb-item align-items-center"><a href="<?php echo base_url()?>index.php/home" class="d-flex align-items-center"><i data-feather="home" class="mr-2"></i>Home</a></li>
            <li class="breadcrumb-item align-items-center"><a href="<?php echo base_url()?>index.php/home" class="d-flex align-items-center">Electronics</a></li>
            <li class="breadcrumb-item align-items-center active" aria-current="page"><?php echo $data['product']->name; ?></li>
        </ol>
    </nav>
</div>
<div class="product-details-inner mb-5">
    <div class="container">
        <div class="product-header row no-gutters align-items-center border-bottom pb-2 mb-5">
            <div class="col-md-8">
                <h1 class="product-title fs-23 font-weight-400 mb-3"><?php echo $data['product']->name; ?></h1>
                <ul class="entry-meta d-flex flex-wrap align-items-center font-weight-500 list-unstyled m-0">
                    <li class="meta-brand position-relative px-2 px-md-3"> Brand: <a href="https://isshue.bdtask.com/isshue_v4_demo1/brand_product/list/WCS4G3S74CAOESA" class="meta-value">bdtask</a></li>
                    <li class="position-relative px-2 px-md-3">
                        <div class="product-rating d-flex align-items-center">
                            <div class="star-rating mb-0 mr-1">
                                <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                            <a href="#" class="review-link text-muted font-weight-400 fs-14">
                                (<span class="count">0</span> Review)
                            </a>
                        </div>
                    </li>
                    <li class="meta-sku position-relative px-2 px-md-3"> Model: <span class="meta-value">X-jn</span></li>
                </ul>
            </div>
            <div class="col-md-4 mt-4 mt-md-0">
                <div class="text-md-right d-flex justify-content-md-end">

                    <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                        <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                        <a class="a2a_button_facebook"></a>
                        <a class="a2a_button_whatsapp"></a>
                        <a class="a2a_button_twitter"></a>
                        <a class="a2a_button_linkedin"></a>
                        <a class="a2a_button_telegram"></a>
                        <a class="a2a_button_pinterest"></a>
                        <a class="a2a_button_skype"></a>
                        <a class="a2a_button_copy_link"></a>
                    </div>
                    <script data-cfasync="false" src="https://isshue.bdtask.com//cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script async src="https://static.addtoany.com/menu/page.js" type="ff6c4e960da60cd5291af1d9-text/javascript"></script>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="wrapper">

                    <div class="product-images">
                        <div class="row">
                            <div class="col-3 col-sm-2">

                                <ul class="thumb-nav">
                                    <li><img src="<?php echo base_url()?>/uploads/<?php echo $data['product']->image?>" alt="Image"></li>
                                </ul>

                            </div>
                            <div class="col-9 col-sm-10">

                                <div class="main-img-slider">
                                    <figure>
                                        <a href="<?php echo base_url()?>/uploads/<?php echo $data['product']->image?>" data-size="1400x1400">
                                            <img class="" src="<?php echo base_url()?>/uploads/<?php echo $data['product']->image?>"
                                                 data-lazy="<?php echo base_url()?>/uploads/<?php echo $data['product']->image?>"
                                                 data-zoom-image="<?php echo base_url()?>/uploads/<?php echo $data['product']->image?>" alt="Image" />
                                        </a>
                                    </figure>
                                </div>

                            </div>
                        </div>
                    </div>




                    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

                        <div class="pswp__bg"></div>

                        <div class="pswp__scroll-wrap">

                            <div class="pswp__container">

                                <div class="pswp__item"></div>
                                <div class="pswp__item"></div>
                                <div class="pswp__item"></div>
                            </div>

                            <div class="pswp__ui pswp__ui--hidden">
                                <div class="pswp__top-bar">

                                    <div class="pswp__counter"></div>
                                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                                    <button class="pswp__button pswp__button--share" title="Share"></button>
                                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>


                                    <div class="pswp__preloader">
                                        <div class="pswp__preloader__icn">
                                            <div class="pswp__preloader__cut">
                                                <div class="pswp__preloader__donut"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                    <div class="pswp__share-tooltip"></div>
                                </div>
                                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                                <div class="pswp__caption">
                                    <div class="pswp__caption__center"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-md-6">
                <input type="hidden" id="p_id" value="<?php echo $data['product']->id;?>">
                <input type="hidden" id="p_name" value="<?php echo $data['product']->name;?>">
                <input type="hidden" id="p_image" value="<?php echo $data['product']->image;?>">
                <input type="hidden" id="p_price" value="<?php echo $data['product']->price;?>">

                <div class="product-summary-content pl-md-4">
                    <div class="product-price-summary">
                        <ins class="fs-29 d-inline-block">
                            <span class="amount var_amount">
                            $<?php echo $data['product']->price; ?> </span>
                            <input type="hidden" id="price" name="price" value="300">
                        </ins>
                    </div>
                    <ul class="summary-header d-flex flex-wrap align-items-center list-unstyled  border-bottom font-weight-600 pb-2">
                        <li class="position-relative px-2 px-md-3">
                            <div class="stock">
                                <label class="text-dark pr-1 font-weight-500 mb-0">Status:</label>
                                <input type="hidden" value="100027220" id="stok">
                                <span>
In Stock </span>
                            </div>
                        </li>
                    </ul>
                    <div class="short-description">
                        <p><?php echo $data['product']->details; ?></p>
                        <div class="product-color mb-3">
                            <h5 class="fs-16 font-weight-500 mb-2">Color:</h5>
                            <input type="radio" class="product_colors" name="select_color" id="color_22BSG4PG5DRRCLR" value="22BSG4PG5DRRCLR" onclick="if (!window.__cfRLUnblockHandlers) return false; select_color_variant(77351425,'22BSG4PG5DRRCLR', 'C2YDWB5SBR58GW5')" checked="checked" data-cf-modified-ff6c4e960da60cd5291af1d9-="">
                            <label class="mb-0" for="color_22BSG4PG5DRRCLR"><span class="color_code" style="background: #0000ff"></span></label>
                            <input type="radio" class="product_colors" name="select_color" id="color_A33OS3BRSLIJ1JB" value="A33OS3BRSLIJ1JB" onclick="if (!window.__cfRLUnblockHandlers) return false; select_color_variant(77351425,'A33OS3BRSLIJ1JB', 'C2YDWB5SBR58GW5')" data-cf-modified-ff6c4e960da60cd5291af1d9-="">
                            <label class="mb-0" for="color_A33OS3BRSLIJ1JB"><span class="color_code" style="background: #00ff00"></span></label>
                            <input type="radio" class="product_colors" name="select_color" id="color_4ESRUABZ92EFI6V" value="4ESRUABZ92EFI6V" onclick="if (!window.__cfRLUnblockHandlers) return false; select_color_variant(77351425,'4ESRUABZ92EFI6V', 'C2YDWB5SBR58GW5')" data-cf-modified-ff6c4e960da60cd5291af1d9-="">
                            <label class="mb-0" for="color_4ESRUABZ92EFI6V"><span class="color_code" style="background: #f20202"></span></label>
                        </div>


                    </div>
                    <!--<button id="addToCardId"> a add to card</button>-->
                    <form action="https://isshue.bdtask.com/isshue_v4_demo1/#" class="cart-row d-flex align-items-center" method="post" accept-charset="utf-8">
                        <input type="hidden" name="csrf_test_name" value="722851b12fb558a9ff5844633a8741ae" />

                        <a href="javascript:void(0)" class="btn btn-primary cart-btn text-uppercase fs-12 font-weight-500 mr-2 cart-btn color4 color46" id="addToCardId">Add To Cart</a>

                    </form> <div class="product-meta pt-2 border-top mt-2">
                        <div class="posted-in mb-1">
                            <strong class="font-weight-500 mr-1">Category: </strong>
                            <a href="<?php echo base_url()?>index.php/home">Electronics</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <ul class="nav nav-tabs justify-content-center mb-4 border-bottom" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="true">Reviews</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="specification-tab" data-toggle="tab" href="#specification" role="tab" aria-controls="specification" aria-selected="false">Specifications</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="false">Description</a>
        </li>
    </ul>
    <div class="tab-content border p-4 rounded" id="myTabContent">
        <div class="tab-pane fade show active" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
            <div class="rating-block-wrapper">
                <h3 class="title fs-21 mb-4">Ratings and Reviews</h3>
                <div class="row align-items-center">
                    <div class="col-sm-3">
                        <div class="rating-block text-center">
                            <h4 class="mb-4 fs-21">Average user rating</h4>
                            <div class="rating-point position-relative ml-auto mr-auto">
                                <i data-feather="star"></i>
                                <h3 class="position-absolute mb-0 fs-18 text-primary">0</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="rating-position">
                            <h4 class="mb-4 fs-21">Rating breakdown</h4>
                            <div class="rating-dimension d-flex mb-2">
                                <div class="rating-quantity d-flex align-items-center mr-2">
                                    5
                                    <div class="star-rating ml-1 mb-0">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <div class="rating-percent w-100 mr-2">
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="user-rating">
                                    0 </div>
                            </div>
                            <div class="rating-dimension d-flex mb-2">
                                <div class="rating-quantity d-flex align-items-center mr-2">
                                    4
                                    <div class="star-rating ml-1 mb-0">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                <div class="rating-percent w-100 mr-2">
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="user-rating">
                                    0</div>
                            </div>
                            <div class="rating-dimension d-flex mb-2">
                                <div class="rating-quantity d-flex align-items-center mr-2">
                                    3
                                    <div class="star-rating ml-1 mb-0">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                <div class="rating-percent w-100 mr-2">
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="user-rating">0</div>
                            </div>
                            <div class="rating-dimension d-flex mb-2">
                                <div class="rating-quantity d-flex align-items-center mr-2">
                                    2
                                    <div class="star-rating ml-1 mb-0">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                <div class="rating-percent w-100 mr-2">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="user-rating">0</div>
                            </div>
                            <div class="rating-dimension d-flex">
                                <div class="rating-quantity d-flex align-items-center mr-2">
                                    11
                                    <div class="star-rating ml-1 mb-0">
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                <div class="rating-percent w-100 mr-2">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: 20%">
                                            <span class="sr-only">20% Complete (primary)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="user-rating">0</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="row">
                <div class="col-sm-7 content">
                    <div class="review-block-wrapper mb-5">
                    </div>
                </div>
                <div class="col-sm-5 pl-lg-5 rightSidebar">
                    <div class="review-content mb-5">
                        <form action="https://isshue.bdtask.com/isshue_v4_demo1/product/Ip-Camera-provide-SDK-10MP-HD-Industrial-Rolling-Shutter-CMOS-Sensor-GigE-color-Camera-For-Visual-inspection/77351425" class="review-form" method="post" accept-charset="utf-8">
                            <input type="hidden" name="csrf_test_name" value="722851b12fb558a9ff5844633a8741ae" />
                            <div class="review-product-info">
                                <h4 class="review-product-name"><?php echo $data['product']->name; ?></h4>
                                <div class="review-product-brand text-primary">Electronics</div>
                            </div>
                            <div class="rating-content d-flex align-items-center">
                                <label for="score" class="control-label mb-0 font-weight-500">Rate It: *</label>
                                <div id="rating" class="ml-2"></div>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-500">Review *</label>
                                <textarea class="form-control" placeholder="Review" name="review_msg" id="review_msg" rows="5"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary submit_review  color4 color46">Send Your Review</button>
                        </form> </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="specification" role="tabpanel" aria-labelledby="specification-tab">
            <div class="specs-details">
                <p xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla imperdiet magna erat. Nullam at ex ex. Donec convallis pulvinar lorem, finibus rutrum ante tincidunt nec. Phasellus quam ex, venenatis nec est in, malesuada tempus magna. Quisque quis varius turpis, sed vestibulum nisl. Vivamus quis mauris vel lacus volutpat facilisis. Nam vel erat blandit dolor commodo bibendum. Morbi eu nibh eget urna tincidunt vestibulum. Quisque fringilla eros risus, vel sagittis dolor imperdiet volutpat. Praesent convallis condimentum aliquam. Curabitur vel eros sit amet quam maximus consectetur posuere eu sem. Praesent tempor magna sed posuere interdum.</p><p xss=removed>Phasellus egestas risus risus, nec porta sem commodo a. Ut eget velit at turpis blandit aliquet. Donec eu gravida massa, commodo eleifend nunc. Nam fermentum non diam.</p> </div>
        </div>
        <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">
            <p xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla imperdiet magna erat. Nullam at ex ex. Donec convallis pulvinar lorem, finibus rutrum ante tincidunt nec. Phasellus quam ex, venenatis nec est in, malesuada tempus magna. Quisque quis varius turpis, sed vestibulum nisl. Vivamus quis mauris vel lacus volutpat facilisis. Nam vel erat blandit dolor commodo bibendum. Morbi eu nibh eget urna tincidunt vestibulum. Quisque fringilla eros risus, vel sagittis dolor imperdiet volutpat. Praesent convallis condimentum aliquam. Curabitur </p> </div>
    </div>
</div>


<div class="container py-5">
    <h3 class="mb-4 fs-21">You May Also Be Interested In</h3>
    <div class="row">
        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
            <div class="deals-item-inner bg-white overflow-hidden border mb-3">
                <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/Head-Phone-2020-High-Quality-New-Products-earphone-cheap/76592233">
                    <div class="item-image">
                        <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/715c8ee7e3b095cf46722310670d5f58.png" class="img-fluid" alt="">
                    </div>
                    <div class="item-details position-relative">
                        <h3 class="item-details-title overflow-hidden font-weight-400 mt-2 mb-0 fs-13">Head Phone - 2020 High Quality New Products earphone cheap</h3>
                        <div class="star-rating">
                            <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                        <div class="product-price font-weight-bolder font-italic">
                            $500.00 / Unit </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
            <div class="deals-item-inner bg-white overflow-hidden border mb-3">
                <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/Outdoor-Chair-Leisure-garden-chair-outdoor/85245819">
                    <div class="item-image">
                        <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/2621b70d0565e4dc5d498e916f80b9fa.png" class="img-fluid" alt="">
                    </div>
                    <div class="item-details position-relative">
                        <h3 class="item-details-title overflow-hidden font-weight-400 mt-2 mb-0 fs-13">Outdoor Chair - Leisure garden chair outdoor </h3>
                        <div class="star-rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i> </div>
                        <div class="product-price font-weight-bolder font-italic">
                            $250.00 / Unit </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
            <div class="deals-item-inner bg-white overflow-hidden border mb-3">
                <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/Royal-Watch-Smael-brand-SL9062-wristwatches-3ATM-waterproof/32868964">
                    <div class="item-image">
                        <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/d47b780ea37c3775e266f581b79aed8a.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="item-details position-relative">
                        <h3 class="item-details-title overflow-hidden font-weight-400 mt-2 mb-0 fs-13">Royal Watch - Smael brand SL9062 wristwatches 3ATM waterproof </h3>
                        <div class="star-rating">
                            <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                        <div class="product-price font-weight-bolder font-italic">
                            $50.00 / Unit </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
            <div class="deals-item-inner bg-white overflow-hidden border mb-3">
                <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/Game-Controller-Indoor-Game-Player-620-Games-Console/16568891">
                    <div class="item-image">
                        <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/a62ee17a0def37e45c544130d1cdb666.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="item-details position-relative">
                        <h3 class="item-details-title overflow-hidden font-weight-400 mt-2 mb-0 fs-13">Game Controller - Indoor Game Player 620 Games Console </h3>
                        <div class="star-rating">
                            <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                        <div class="product-price font-weight-bolder font-italic">
                            $500.00 / Unit </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
            <div class="deals-item-inner bg-white overflow-hidden border mb-3">
                <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/Originals-Sound-Box-new-gadgets-31mm-4ohm-3w-soundbox-speaker-driver/65531224">
                    <div class="item-image">
                        <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/e4c4218cb91ec0d1f0ce479bf3d596d5.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="item-details position-relative">
                        <h3 class="item-details-title overflow-hidden font-weight-400 mt-2 mb-0 fs-13">Originals Sound Box - new gadgets 31mm 4ohm 3w soundbox speaker driver</h3>
                        <div class="star-rating">
                            <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                        <div class="product-price font-weight-bolder font-italic">
                            $35.00 / Unit </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
            <div class="deals-item-inner bg-white overflow-hidden border mb-3">
                <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/Arduino-Nano-V3-0-Board-ATmega328P-5V-16M-Micro-Controller-Board-Compatible-with-Arduino/46836733">
                    <div class="item-image">
                        <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/27cacb1fa5e01f9c26b01417e30dc683.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="item-details position-relative">
                        <h3 class="item-details-title overflow-hidden font-weight-400 mt-2 mb-0 fs-13">Arduino Nano V3.0 - Board ATmega328P 5V 16M Micro-Controller Board Compatible with Arduino</h3>
                        <div class="star-rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i> </div>
                        <div class="product-price font-weight-bolder font-italic">
                            $300.00 / Unit </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
            <div class="deals-item-inner bg-white overflow-hidden border mb-3">
                <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/Arduino-Uno-R3-China-Board-ATmega328P-5V-16M-Micro-Controller-Board-Compatible-with-Arduino/13927825">
                    <div class="item-image">
                        <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/6791f133abeb4a97d7f720a11932cc47.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="item-details position-relative">
                        <h3 class="item-details-title overflow-hidden font-weight-400 mt-2 mb-0 fs-13">Arduino Uno R3 (China) - Board ATmega328P 5V 16M Micro-Controller Board Compatible with Arduino</h3>
                        <div class="star-rating">
                            <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                        <div class="product-price font-weight-bolder font-italic">
                            $100.00 / Unit  </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
            <div class="deals-item-inner bg-white overflow-hidden border mb-3">
                <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/Tsonami-Head-Phone-U1S-New-5-0-Bluetooth-Wireless-Earphones-Waterproof-Wireless-Head-Phone-Sports-Headsets-800mAh-Charging-Box-for-Phones-HD-Call/66842172">
                    <div class="item-image">
                        <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/16b3196bc913f3e746e3ea44a59e1278.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="item-details position-relative">
                        <h3 class="item-details-title overflow-hidden font-weight-400 mt-2 mb-0 fs-13">Tsonami Head Phone - U1S New 5.0 Bluetooth Wireless Earphones Waterproof Wireless Head Phone Sports Headsets 800mAh Charging Box for Phones HD Call </h3>
                        <div class="star-rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i> </div>
                        <div class="product-price font-weight-bolder font-italic">
                            $20.00 / Unit </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
            <div class="deals-item-inner bg-white overflow-hidden border mb-3">
                <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/xoss-Head-Phone-AORIWEI-Hot-Sale-Long-Sleeve-Winter-jacket-Thermal-Parka-Men-Winter-Coats/56916222">
                    <div class="item-image">
                        <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/c897152b4abd8b3674b1912ea157c49a.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="item-details position-relative">
                        <h3 class="item-details-title overflow-hidden font-weight-400 mt-2 mb-0 fs-13">xoss Head Phone - AORIWEI Hot Sale Long Sleeve Winter jacket Thermal Parka Men Winter Coats</h3>
                        <div class="star-rating">
                            <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                        <div class="product-price font-weight-bolder font-italic">
                            $12.00 / Unit </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
            <div class="deals-item-inner bg-white overflow-hidden border mb-3">
                <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/polo-tshirt-1-High-quality-cotton-polo-t-shirt-with-logo/22472558">
                    <div class="item-image">
                        <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/5b82e8d448a26f2b67a4d229f00af149.png" class="img-fluid" alt="">
                    </div>
                    <div class="item-details position-relative">
                        <h3 class="item-details-title overflow-hidden font-weight-400 mt-2 mb-0 fs-13">polo tshirt 1- High quality cotton polo t shirt with logo</h3>
                        <div class="star-rating">
                            <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                        <div class="product-price font-weight-bolder font-italic">
                            $300.00 / Unit </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
            <div class="deals-item-inner bg-white overflow-hidden border mb-3">
                <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/baby-Walker-2-Factory-wholesale-baby-walker-china-simple-baby-walker-china-cheap-car-walker-for-baby/45666689">
                    <div class="item-image">
                        <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/64c0b5d5e9566b3932509aff1260a9f1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="item-details position-relative">
                        <h3 class="item-details-title overflow-hidden font-weight-400 mt-2 mb-0 fs-13">baby Walker 2 Factory wholesale baby walker china simple baby walker china cheap car walker for baby </h3>
                        <div class="star-rating">
                            <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                        <div class="product-price font-weight-bolder font-italic">
                            $800.00 / Unit </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
            <div class="deals-item-inner bg-white overflow-hidden border mb-3">
                <a href="https://isshue.bdtask.com/isshue_v4_demo1/product/baby-Walker-Factory-wholesale-baby-walker-china-simple-baby-walker-china-cheap-car-walker-for-baby/72891796">
                    <div class="item-image">
                        <img src="https://isshue.bdtask.com/isshue_v4_demo1/my-assets/image/product/thumb/4b4ce65a9645a7eef6aa20490c23edf7.png" class="img-fluid" alt="">
                    </div>
                    <div class="item-details position-relative">
                        <h3 class="item-details-title overflow-hidden font-weight-400 mt-2 mb-0 fs-13">baby Walker -Factory wholesale baby walker china simple baby walker china cheap car walker for baby </h3>
                        <div class="star-rating">
                            <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </div>
                        <div class="product-price font-weight-bolder font-italic">
                            $1,700.00 / Unit </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>