@extends('layouts.common')
@section('common_content')
<style>
div.zoomContainer{
   /*  width: 700px !important;
    height: 558px !important;wish */
}
</style>
<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
    <!-- breadcrumb -->
    <div class="bg-gray-13 bg-md-transparent">
        <div class="container">
            <!-- breadcrumb -->
            <div class="my-md-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="../home/index.html">Home</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="../shop/shop.html">Accessories</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="../shop/shop.html">Headphones</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Ultra Wireless S50 Headphones S50 with Bluetooth</li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->
    <div class="container">
        <!-- Single Product Body -->
        <div class="mb-xl-14 mb-6">
            <div class="row">
                <div class="col-md-5 mb-4 mb-md-0">
                    <div id="" class="js-slick-carousel u-slick mb-2"
                        data-infinite="true"
                        data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle"
                        data-arrow-left-classes="fas fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4"
                        data-arrow-right-classes="fas fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4"
                        data-nav-for="#sliderSyncingThumb">
                        <a href="#" class="js-slide gallery-viewer">
                            <img id="zoom_10" class="img-fluid" src="/assets/img/720X660/img1.jpg" alt="Image Description">
                        </a>
                    </div>
                    

                    <div id="sliderSyncingThumb" class="js-slick-carousel u-slick u-slick--slider-syncing u-slick--slider-syncing-size u-slick--gutters-1 u-slick--transform-off"
                        data-infinite="true"
                        data-slides-show="5"
                        data-is-thumbs="true"
                        data-nav-for="#sliderSyncingNav">
                        @foreach($product_gallery_images as $product_gallery_image)
                        <div class="js-slide" style="cursor: pointer;">
                            <img class="img-fluid" src="{{$product_gallery_image->image_url}}" alt="Image Description">
                        </div>
                        @endforeach()
                    </div>
                </div>
                <div class="col-md-7 mb-md-6 mb-lg-0">
                    <div class="mb-2">
                        <div class="border-bottom mb-3 pb-md-1 pb-3">
                            <a href="#" class="font-size-12 text-gray-5 mb-2 d-inline-block">{{$product->category_name}}</a>
                            <h2 class="font-size-25 text-lh-1dot2">{{$product->product_name}}</h2>
                            <div class="mb-2">
                                <a class="d-inline-flex align-items-center small font-size-15 text-lh-1" href="#">
                                
                                    <div class="text-warning mr-2">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $averageRating)
                                                <small class="fas fa-star"></small>
                                            @else
                                                <small class="far fa-star text-muted"></small>
                                            @endif
                                        @endfor
                                    </div>
                                    {{$averageRating}} &nbsp;

                                    <span class="text-secondary font-size-13">({{$customerReviewCount}} customer reviews)</span>
                                </a>
                            </div>
                            <div class="d-md-flex">
                                <a href="#" class="max-width-150 ml-n2 mb-2 mb-md-0">Brand:- {{$product->brand_name}} <img class="img-fluid" src="{{$product->brand_logo}}" alt="Image Description"></a>
                                <a href="#" class="max-width-150 ml-n2 mb-2 mb-md-0">Seller:- {{$product->seller_name}}</a>
                                <div class="ml-md-3 text-gray-9 font-size-14">Availability: <span class="text-green font-weight-bold">{{$product->qty_available}} in stock</span></div>
                            </div>
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    toastMixin.fire({
                                        animation: true,
                                        icon: 'success',
                                        title: '{{ session('success') }}'
                                    });
                                });
                            </script>
                        @endif

                        @if (session('info'))
                            <div class="alert alert-danger">
                                {{ session('info') }}
                            </div>
                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    toastMixin.fire({
                                        animation: true,
                                        icon: 'info',
                                        title: '{{ session('info') }}'
                                    });
                                });
                            </script>
                        @endif
                        <div class="flex-horizontal-center flex-wrap mb-4">
                            <form class="wishlistForm" method="POST" action="{{route('wishlist.store')}}">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$product->id}}" />
                                <button type="submit" class="btn text-gray-6 font-size-13 wishlistButton second"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</button>
                            </form>
                            <a href="#" class="text-gray-6 font-size-13 ml-2"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                        </div>

                        {!! $product->product_desc !!}
                        
                        <p><strong>SKU</strong>: {{$product->sku}}</p>
                        <div class="mb-4">
                            <div class="d-flex align-items-baseline">
                                <ins class="font-size-36 text-decoration-none">${{$product->sell_price}}</ins>
                                <del class="font-size-20 ml-2 text-gray-6">${{$product->mrp}}</del>
                            </div>
                        </div>
                        <div class="border-top border-bottom py-3 mb-4">
                            @php
                            // Array to hold single value attributes
                            $singleValueAttributes = [];

                            // Array to hold multiple value attributes
                            $multipleValueAttributes = [];

                            foreach ($attributes as $key => $values) {
                                if (count($values) > 1) {
                                    // Multiple values: Store in an array for later display
                                    $multipleValueAttributes[$key] = $values;
                                } else {
                                    // Single value: Store in an array for immediate display
                                    $singleValueAttributes[$key] = $values[0];
                                }
                            }

                            // Display multiple value attributes as select dropdowns
                            foreach ($multipleValueAttributes as $key => $values) {
                                echo "<div class='d-flex align-items-center'>";
                                echo "<h6 class='font-size-14 mb-0'>{$key}</h6>";
                                echo "<select class='js-select selectpicker dropdown-select ml-3' data-style='btn-sm bg-white font-weight-normal py-2 border'>";
                                foreach ($values as $value) {
                                    $selected = $value === $values[0] ? ' selected' : ''; // Set the first option as selected
                                    echo "<option value='" . strtolower($value) . "'$selected>$value</option>";
                                }
                                echo "</select>";
                                echo "</div>";
                            }

                            // Display single value attributes as span elements
                            foreach ($singleValueAttributes as $key => $value) {
                                echo "<div class='d-flex align-items-center'>";
                                echo "<h6 class='font-size-14 mb-0'>{$key}</h6>";
                                echo "<span class='ml-3'>{$value}</span>";
                                echo "</div>";
                            }
                            @endphp
                        </div>
                        <div class="d-md-flex align-items-end mb-3">
                            <form action="{{route('cart.store')}}" method="POST" >
                                @csrf
                                <input type="hidden" name="product_id" value="{{$product->id}}" />
                                <div class="max-width-150 mb-4 mb-md-0">
                                    <h6 class="font-size-14">Quantity</h6>
                                    <!-- Quantity -->
                                    <div class="border rounded-pill py-2 px-3 border-color-1">
                                        <div class="js-quantity row align-items-center">
                                            <div class="col">
                                                <input name="qty" class="js-result form-control h-auto border-0 rounded p-0 shadow-none" type="text" value="1" min="1">
                                            </div>
                                            <div class="col-auto pr-1">
                                                <a class="js-minus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" href="javascript:;">
                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                </a>
                                                <a class="js-plus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" href="javascript:;">
                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Quantity -->
                                </div>
                                <div class="ml-md-3">
                                    <button type="submit" class="btn px-5 btn-primary-dark transition-3d-hover wishlistButton second"><i class="ec ec-add-to-cart mr-2 font-size-20"></i> Add to Cart</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Product Body -->
        <!-- Single Product Tab -->
        <div class="mb-8">
            <div class="position-relative position-md-static px-md-6">
                <ul class="nav nav-classic nav-tab nav-tab-lg justify-content-xl-center flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble border-0 pb-1 pb-xl-0 mb-n1 mb-xl-0" id="pills-tab-8" role="tablist">
                    <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                        <a class="nav-link active" id="Jpills-one-example1-tab" data-toggle="pill" href="#Jpills-one-example1" role="tab" aria-controls="Jpills-one-example1" aria-selected="true">Accessories</a>
                    </li>
                    <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                        <a class="nav-link" id="Jpills-two-example1-tab" data-toggle="pill" href="#Jpills-two-example1" role="tab" aria-controls="Jpills-two-example1" aria-selected="false">Description</a>
                    </li>
                    <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                        <a class="nav-link" id="Jpills-three-example1-tab" data-toggle="pill" href="#Jpills-three-example1" role="tab" aria-controls="Jpills-three-example1" aria-selected="false">Specification</a>
                    </li>
                    <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                        <a class="nav-link" id="Jpills-four-example1-tab" data-toggle="pill" href="#Jpills-four-example1" role="tab" aria-controls="Jpills-four-example1" aria-selected="false">Reviews</a>
                    </li>
                </ul>
            </div>
            <!-- Tab Content -->
            <div class="borders-radius-17 border p-4 mt-4 mt-md-0 px-lg-10 py-lg-9">
                <div class="tab-content" id="Jpills-tabContent">
                    <div class="tab-pane fade active show" id="Jpills-one-example1" role="tabpanel" aria-labelledby="Jpills-one-example1-tab">
                        <div class="row no-gutters">
                            <div class="col mb-6 mb-md-0">
                                <ul class="row list-unstyled products-group no-gutters border-bottom border-md-bottom-0">
                                    <li class="col-4 col-md-4 col-xl-2gdot5 product-item remove-divider-sm-down border-0">
                                        <div class="product-item__outer h-100">
                                            <div class="remove-prodcut-hover product-item__inner px-xl-4 p-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2 d-none d-md-block"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title d-none d-md-block"><a href="#" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="/assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="flex-center-between mb-1 d-none d-md-block">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-4 col-md-4 col-xl-2gdot5 product-item remove-divider-sm-down">
                                        <div class="product-item__outer h-100">
                                            <div class="remove-prodcut-hover add-accessories product-item__inner px-xl-4 p-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2 d-none d-md-block"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title d-none d-md-block"><a href="#" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="/assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="flex-center-between mb-1 d-none d-md-block">
                                                        <div class="prodcut-price d-flex align-items-center position-relative">
                                                            <ins class="font-size-20 text-red text-decoration-none">$1999,00</ins>
                                                            <del class="font-size-12 tex-gray-6 position-absolute bottom-100">$2 299,00</del>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-4 col-md-4 col-xl-2gdot5 product-item remove-divider-sm-down remove-divider">
                                        <div class="product-item__outer h-100">
                                            <div class="remove-prodcut-hover add-accessories product-item__inner px-xl-4 p-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2 d-none d-md-block"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title d-none d-md-block"><a href="#" class="text-blue font-weight-bold">Purple Solo 2 Wireless</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="/assets/img/212X200/img3.jpg" alt="Image Description"></a>
                                                    </div>
                                                    <div class="flex-center-between mb-1 d-none d-md-block">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="form-check pl-4 pl-md-0 ml-md-4 mb-2 pb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                                    <input class="form-check-input" type="checkbox" value="" id="inlineCheckbox1" checked disabled>
                                    <label class="form-check-label mb-1" for="inlineCheckbox1">
                                        <strong>This product: </strong> Ultra Wireless S50 Headphones S50 with Bluetooth - <span class="text-red font-size-16">$35.00</span>
                                    </label>
                                </div>
                                <div class="form-check pl-4 pl-md-0 ml-md-4 mb-2 pb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                    <label class="form-check-label mb-1 text-blue" for="inlineCheckbox2">
                                        <span class="text-decoration-on cursor-pointer-on">Universal Headphones Case in Black</span> - <span class="text-red font-size-16">$159.00</span>
                                    </label>
                                </div>
                                <div class="form-check pl-4 pl-md-0 ml-md-4 mb-2 pb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option2" checked>
                                    <label class="form-check-label mb-1 text-blue" for="inlineCheckbox3">
                                        <span class="text-decoration-on cursor-pointer-on">Headphones USB Wires</span> - <span class="text-red font-size-16">$50.00</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-auto">
                                <div class="mr-xl-15">
                                    <div class="mb-3">
                                        <div class="text-red font-size-26 text-lh-1dot2">$244.00</div>
                                        <div class="text-gray-6">for 3 item(s)</div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-block btn-primary-dark btn-wide transition-3d-hover">Add all to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Jpills-two-example1" role="tabpanel" aria-labelledby="Jpills-two-example1-tab">
                        <h3 class="font-size-24 mb-3">Perfectly Done</h3>
                        <p>Praesent ornare, ex a interdum consectetur, lectus diam sodales elit, vitae egestas est enim ornare nisl. Nullam in lectus nec sem semper viverra. In lobortis egestas massa. Nam nec massa nisi. Suspendisse potenti. Quisque suscipit vulputate dui quis volutpat. Ut id elit facilisis, feugiat est in, tempus lacus. Ut ultrices dictum metus, a ultricies ex vulputate ac. Ut id cursus tellus, non tempor quam. Morbi porta diam nisi, id finibus nunc tincidunt eu.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="pt-lg-8 pt-xl-10">
                                    <h3 class="font-size-24 mb-3">Wireless</h3>
                                    <p class="mb-6">Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim eros tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel est ut mollis. Donec luctus condimentum ante et euismod.</p>
                                    <h3 class="font-size-24 mb-3">Fresh Design</h3>
                                    <p class="mb-6">Integer bibendum aliquet ipsum, in ultrices enim sodales sed. Quisque ut urna vitae lacus laoreet malesuada eu at massa. Pellentesque nibh augue, pellentesque nec dictum vel, pretium a arcu. Duis eu urna suscipit, lobortis elit quis, ullamcorper massa.</p>
                                    <h3 class="font-size-24 mb-3">Fabolous Sound</h3>
                                    <p class="mb-6">Cras rutrum, nibh a sodales accumsan, elit sapien ultrices sapien, eget semper lectus ex congue elit. Nullam dui elit, fermentum a varius at, iaculis non dolor. In hac habitasse platea dictumst.</p>
                                </div>
                            </div>
                            <div class="col-md-6 text-right">
                                <img class="img-fluid mr-n4 mr-lg-n10" src="/assets/img/580X580/img1.jpg" alt="Image Description">
                            </div>
                            <div class="col-md-6 text-left">
                                <img class="img-fluid ml-n4 ml-lg-n10" src="/assets/img/580X580/img2.jpg" alt="Image Description">
                            </div>
                            <div class="col-md-6 align-self-center">
                                <div class="pt-lg-8 pt-xl-10 text-right">
                                    <h3 class="font-size-24 mb-3">Inteligent Bass</h3>
                                    <p class="mb-6">Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim eros tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel est ut mollis. Donec luctus condimentum ante et euismod.</p>
                                    <h3 class="font-size-24 mb-3">Battery Life</h3>
                                    <p class="mb-6">Integer bibendum aliquet ipsum, in ultrices enim sodales sed. Quisque ut urna vitae lacus laoreet malesuada eu at massa. Pellentesque nibh augue, pellentesque nec dictum vel, pretium a arcu. Duis eu urna suscipit, lobortis elit quis, ullamcorper massa.</p>
                                </div>
                            </div>
                        </div>
                        <ul class="nav flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                            <li class="nav-item text-gray-111 flex-shrink-0 flex-xl-shrink-1"><strong>SKU:</strong> <span class="sku">FW511948218</span></li>
                            <li class="nav-item text-gray-111 mx-3 flex-shrink-0 flex-xl-shrink-1">/</li>
                            <li class="nav-item text-gray-111 flex-shrink-0 flex-xl-shrink-1"><strong>Category:</strong> <a href="#" class="text-blue">Headphones</a></li>
                            <li class="nav-item text-gray-111 mx-3 flex-shrink-0 flex-xl-shrink-1">/</li>
                            <li class="nav-item text-gray-111 flex-shrink-0 flex-xl-shrink-1"><strong>Tags:</strong> <a href="#" class="text-blue">Fast</a>, <a href="#" class="text-blue">Gaming</a>, <a href="#" class="text-blue">Strong</a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="Jpills-three-example1" role="tabpanel" aria-labelledby="Jpills-three-example1-tab">
                        <div class="mx-md-5 pt-1">
                            <div class="table-responsive mb-4">
                                <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <th class="px-4 px-xl-5 border-top-0">Weight</th>
                                            <td class="border-top-0">7.25kg</td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 px-xl-5">Dimensions</th>
                                            <td>90 x 60 x 90 cm</td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 px-xl-5">Size</th>
                                            <td>One Size Fits all</td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 px-xl-5">color</th>
                                            <td>Black with Red, White with Gold</td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 px-xl-5">Guarantee</th>
                                            <td>5 years</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h3 class="font-size-18 mb-4">Technical Specifications</h3>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <th class="px-4 px-xl-5 border-top-0">Brand</th>
                                            <td class="border-top-0">Apple</td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 px-xl-5">Item Height</th>
                                            <td>18 Millimeters</td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 px-xl-5">Item Width</th>
                                            <td>31.4 Centimeters</td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 px-xl-5">Screen Size</th>
                                            <td>13 Inches</td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 px-xl-5">Item Weight</th>
                                            <td>1.6 Kg</td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 px-xl-5">Product Dimensions</th>
                                            <td>21.9 x 31.4 x 1.8 cm</td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 px-xl-5">Item model number</th>
                                            <td>MF841HN/A</td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 px-xl-5">Processor Brand</th>
                                            <td>Intel</td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 px-xl-5">Processor Type</th>
                                            <td>Core i5</td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 px-xl-5">Processor Speed</th>
                                            <td>2.9 GHz</td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 px-xl-5">RAM Size</th>
                                            <td>8 GB</td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 px-xl-5">Hard Drive Size</th>
                                            <td>512 GB</td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 px-xl-5">Hard Disk Technology</th>
                                            <td>Solid State Drive</td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 px-xl-5">Graphics Coprocessor</th>
                                            <td>Intel Integrated Graphics</td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 px-xl-5">Graphics Card Description</th>
                                            <td>Integrated Graphics Card</td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 px-xl-5">Hardware Platform</th>
                                            <td>Mac</td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 px-xl-5">Operating System</th>
                                            <td>Mac OS</td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 px-xl-5">Average Battery Life (in hours)</th>
                                            <td>9</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Jpills-four-example1" role="tabpanel" aria-labelledby="Jpills-four-example1-tab">
                        <div class="row mb-8">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <h3 class="font-size-18 mb-6">Based on {{$customerReviewCount}} reviews</h3>
                                    <h2 class="font-size-30 font-weight-bold text-lh-1 mb-0">{{$averageRating}}</h2>
                                    <div class="text-lh-1">overall</div>
                                </div>

                                <!-- Ratings -->
                                <ul class="list-unstyled">
                                    <li class="py-1">
                                        <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                                            <div class="col-auto mb-2 mb-md-0">
                                                <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                                    <small class="fas fa-star"></small>
                                                    <small class="fas fa-star"></small>
                                                    <small class="fas fa-star"></small>
                                                    <small class="fas fa-star"></small>
                                                    <small class="fas fa-star"></small>
                                                </div>
                                            </div>
                                            <div class="col-auto mb-2 mb-md-0">
                                                <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-auto text-right">
                                                <span class="text-gray-90">{{$rating5}}</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="py-1">
                                        <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                                            <div class="col-auto mb-2 mb-md-0">
                                                <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                                    <small class="fas fa-star"></small>
                                                    <small class="fas fa-star"></small>
                                                    <small class="fas fa-star"></small>
                                                    <small class="fas fa-star"></small>
                                                    <small class="far fa-star text-muted"></small>
                                                </div>
                                            </div>
                                            <div class="col-auto mb-2 mb-md-0">
                                                <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 53%;" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-auto text-right">
                                                <span class="text-gray-90">{{$rating4}}</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="py-1">
                                        <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                                            <div class="col-auto mb-2 mb-md-0">
                                                <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                                    <small class="fas fa-star"></small>
                                                    <small class="fas fa-star"></small>
                                                    <small class="fas fa-star"></small>
                                                    <small class="far fa-star text-muted"></small>
                                                    <small class="far fa-star text-muted"></small>
                                                </div>
                                            </div>
                                            <div class="col-auto mb-2 mb-md-0">
                                                <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-auto text-right">
                                                <span class="text-gray-90">{{$rating3}}</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="py-1">
                                        <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                                            <div class="col-auto mb-2 mb-md-0">
                                                <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                                    <small class="fas fa-star"></small>
                                                    <small class="fas fa-star"></small>
                                                    <small class="far fa-star text-muted"></small>
                                                    <small class="far fa-star text-muted"></small>
                                                    <small class="far fa-star text-muted"></small>
                                                </div>
                                            </div>
                                            <div class="col-auto mb-2 mb-md-0">
                                                <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-auto text-right">
                                                <span class="text-muted">{{$rating2}}</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="py-1">
                                        <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                                            <div class="col-auto mb-2 mb-md-0">
                                                <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                                    <small class="fas fa-star"></small>
                                                    <small class="far fa-star text-muted"></small>
                                                    <small class="far fa-star text-muted"></small>
                                                    <small class="far fa-star text-muted"></small>
                                                    <small class="far fa-star text-muted"></small>
                                                </div>
                                            </div>
                                            <div class="col-auto mb-2 mb-md-0">
                                                <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 1%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-auto text-right">
                                                <span class="text-gray-90">{{$rating1}}</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End Ratings -->
                            </div>
                            @php
                                if(session('firstname') && $is_purchased==true && $had_given_review_previously===false){
                                    @endphp
                                    <div class="col-md-6">
                                        <h3 class="font-size-18 mb-5">Add a review</h3>
                                        <!-- Form -->
                                        <form class="js-validate" method="POST" action="{{route('review.store')}}">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{$product->id}}" />
                                            <div class="row align-items-center mb-4">
                                                <div class="col-md-4 col-lg-3">
                                                    <label for="rating" class="form-label mb-0">Your Review</label>
                                                </div>
                                                <div class="col-md-8 col-lg-9">
                                                    <a href="#" class="d-block">
                                                        <div class="text-warning text-ls-n2 font-size-16">
                                                            <small class="far fa-star" data-value="1"></small>
                                                            <small class="far fa-star" data-value="2"></small>
                                                            <small class="far fa-star" data-value="3"></small>
                                                            <small class="far fa-star" data-value="4"></small>
                                                            <small class="far fa-star" data-value="5"></small>
                                                            <input type="hidden" name="rating" value="5" />
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="js-form-message form-group mb-3 row">
                                                <div class="col-md-4 col-lg-3">
                                                    <label for="descriptionTextarea" class="form-label">Your Review</label>
                                                </div>
                                                <div class="col-md-8 col-lg-9">
                                                    <textarea name="reviewContent" class="form-control" rows="3" id="descriptionTextarea"
                                                    data-msg="Please enter your message."
                                                    data-error-class="u-has-error"
                                                    data-success-class="u-has-success"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="offset-md-4 offset-lg-3 col-auto">
                                                    <button type="submit" class="btn btn-primary-dark btn-wide transition-3d-hover">Add Review</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- End Form -->
                                    </div>
                                    @php
                                }else{
                                    @endphp
                                    <div class="col-md-6">
                                        @php
                                        if(!session('firstname')){
                                            echo '<h3 class="font-size-18 mb-5 text-danger">You must be logged in</h3>';
                                        }
                                        @endphp
                                        <h3 class="font-size-18 mb-5 text-danger" >You must purchase this product to give review</h3>  
                                        <h3 class="font-size-18 mb-5 text-danger" >Must not had given review previously</h3>  
                                    </div>
                                    @php
                                }
                            @endphp
                            
                        </div>

                        <!-- Review -->
                        @foreach($reviews as $review)
                        <div class="border-bottom border-color-1 pb-4 mb-4">
                            <!-- Review Rating -->
                            <div class="d-flex justify-content-between align-items-center text-secondary font-size-1 mb-2">
                                <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $review->rating)
                                            <small class="fas fa-star"></small>
                                        @else
                                            <small class="far fa-star text-muted"></small>
                                        @endif
                                    @endfor
                                </div>
                            </div>
                            <!-- End Review Rating -->

                            <p class="text-gray-90">{{$review->reviewContent}}</p>

                            <!-- Reviewer -->
                            <div class="mb-2">
                                <strong>{{$review->name}} {{$review->surname}}<!--  ( {{$review->role}} ) --></strong>
                                <span class="font-size-13 text-gray-23">- {{ date('F j, Y', strtotime($review->created_at)) }} <!-- April 3, 2019 --></span>
                            </div>
                            <!-- End Reviewer -->
                        </div>
                        @endforeach
                        <!-- End Review -->
                        
                    </div>
                </div>
            </div>
            <!-- End Tab Content -->
        </div>
        <!-- End Single Product Tab -->
        <!-- Related products -->
        <div class="mb-6">
            <div class="d-flex justify-content-between align-items-center border-bottom border-color-1 flex-lg-nowrap flex-wrap mb-4">
                <h3 class="section-title mb-0 pb-2 font-size-22">Related products</h3>
            </div>
            <ul class="row list-unstyled products-group no-gutters">
                <li class="col-6 col-md-3 col-xl-2gdot4-only col-wd-2 product-item">
                    <div class="product-item__outer h-100">
                        <div class="product-item__inner px-xl-4 p-3">
                            <div class="product-item__body pb-xl-2">
                                <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                <div class="mb-2">
                                    <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="/assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                </div>
                                <div class="flex-center-between mb-1">
                                    <div class="prodcut-price">
                                        <div class="text-gray-100">$685,00</div>
                                    </div>
                                    <div class="d-none d-xl-block prodcut-add-cart">
                                        <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item__footer">
                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                    <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                    <form method="GET" action="{{route('wishlist.store')}}">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$product->id}}" />
                                        <button type="submit" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-6 col-md-3 col-xl-2gdot4-only col-wd-2 product-item">
                    <div class="product-item__outer h-100">
                        <div class="product-item__inner px-xl-4 p-3">
                            <div class="product-item__body pb-xl-2">
                                <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                <div class="mb-2">
                                    <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="/assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                </div>
                                <div class="flex-center-between mb-1">
                                    <div class="prodcut-price d-flex align-items-center position-relative">
                                        <ins class="font-size-20 text-red text-decoration-none">$1999,00</ins>
                                        <del class="font-size-12 tex-gray-6 position-absolute bottom-100">$2 299,00</del>
                                    </div>
                                    <div class="d-none d-xl-block prodcut-add-cart">
                                        <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item__footer">
                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                    <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                    <form method="GET" action="{{route('wishlist.store')}}">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$product->id}}" />
                                        <button type="submit" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-6 col-md-3 col-xl-2gdot4-only col-wd-2 product-item">
                    <div class="product-item__outer h-100">
                        <div class="product-item__inner px-xl-4 p-3">
                            <div class="product-item__body pb-xl-2">
                                <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Purple Solo 2 Wireless</a></h5>
                                <div class="mb-2">
                                    <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="/assets/img/212X200/img3.jpg" alt="Image Description"></a>
                                </div>
                                <div class="flex-center-between mb-1">
                                    <div class="prodcut-price">
                                        <div class="text-gray-100">$685,00</div>
                                    </div>
                                    <div class="d-none d-xl-block prodcut-add-cart">
                                        <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item__footer">
                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                    <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                    <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-6 col-md-3 col-xl-2gdot4-only col-wd-2 product-item remove-divider-md-lg">
                    <div class="product-item__outer h-100">
                        <div class="product-item__inner px-xl-4 p-3">
                            <div class="product-item__body pb-xl-2">
                                <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Smartphone 6S 32GB LTE</a></h5>
                                <div class="mb-2">
                                    <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="/assets/img/212X200/img4.jpg" alt="Image Description"></a>
                                </div>
                                <div class="flex-center-between mb-1">
                                    <div class="prodcut-price">
                                        <div class="text-gray-100">$685,00</div>
                                    </div>
                                    <div class="d-none d-xl-block prodcut-add-cart">
                                        <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item__footer">
                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                    <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                    <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-6 col-md-3 col-xl-2gdot4-only col-wd-2 product-item remove-divider-xl">
                    <div class="product-item__outer h-100">
                        <div class="product-item__inner px-xl-4 p-3">
                            <div class="product-item__body pb-xl-2">
                                <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Widescreen NX Mini F1 SMART NX</a></h5>
                                <div class="mb-2">
                                    <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="/assets/img/212X200/img5.jpg" alt="Image Description"></a>
                                </div>
                                <div class="flex-center-between mb-1">
                                    <div class="prodcut-price">
                                        <div class="text-gray-100">$685,00</div>
                                    </div>
                                    <div class="d-none d-xl-block prodcut-add-cart">
                                        <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item__footer">
                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                    <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                    <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-6 col-md-3 col-xl-2gdot4-only col-wd-2 product-item remove-divider-wd d-xl-none d-wd-block">
                    <div class="product-item__outer h-100">
                        <div class="product-item__inner px-xl-4 p-3">
                            <div class="product-item__body pb-xl-2">
                                <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                <div class="mb-2">
                                    <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="/assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                </div>
                                <div class="flex-center-between mb-1">
                                    <div class="prodcut-price d-flex align-items-center position-relative">
                                        <ins class="font-size-20 text-red text-decoration-none">$1999,00</ins>
                                        <del class="font-size-12 tex-gray-6 position-absolute bottom-100">$2 299,00</del>
                                    </div>
                                    <div class="d-none d-xl-block prodcut-add-cart">
                                        <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item__footer">
                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                    <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                    <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- End Related products -->
        <!-- Brand Carousel -->
        <div class="mb-8">
            <div class="py-2 border-top border-bottom">
                <div class="js-slick-carousel u-slick my-1"
                    data-slides-show="5"
                    data-slides-scroll="1"
                    data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-normal u-slick__arrow-centered--y"
                    data-arrow-left-classes="fa fa-angle-left u-slick__arrow-classic-inner--left z-index-9"
                    data-arrow-right-classes="fa fa-angle-right u-slick__arrow-classic-inner--right"
                    data-responsive='[{
                        "breakpoint": 992,
                        "settings": {
                            "slidesToShow": 2
                        }
                    }, {
                        "breakpoint": 768,
                        "settings": fancy{
                            "slidesToShow": 1
                        }
                    }, {
                        "breakpoint": 554,
                        "settings": {
                            "slidesToShow": 1
                        }
                    }]'>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50" src="/assets/img/200X60/img1.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50" src="/assets/img/200X60/img2.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50" src="/assets/img/200X60/img3.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50" src="/assets/img/200X60/img4.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50" src="/assets/img/200X60/img5.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50" src="/assets/img/200X60/img6.png" alt="Image Description">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Brand Carousel -->
    </div>
</main>

<!-- ========== END MAIN CONTENT ========== -->
@endsection