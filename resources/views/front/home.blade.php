@extends('layouts.front', ['title' => 'الصفحة الرئيسية'])
@section('content')
<!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            @foreach ($sliders as $key => $slider )
            <li class="text-center">
                <img src="{{ asset($slider->image) }}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><small>مرحبا بك <br> في متجرنا</small></h1>
                            <p class="m-b-40">{{ $slider->link }}</p>
                            <p><a class="btn hvr-hover" href="#">تسوق الان</a></p>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
            {{-- <li class="text-center">
                <img src="{{ asset('front/images/banner-02.jpg') }}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Freshshop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="{{ asset('front/images/banner-03.jpg') }}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Freshshop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li> --}}
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                @foreach ($categories as $category )

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="{{ $category->image }}" alt="" style="height: 400px; width : 500px;" />
                        <a class="btn hvr-hover" href="#">
                        تصفح القسم الان</a>
                    </div>
                </div>

                @endforeach
                {{-- <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="{{ asset('front/images/categories_img_02.jpg') }}" alt="" />
                        <a class="btn hvr-hover" href="#">Lorem ipsum dolor</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="{{ asset('front/images/categories_img_03.jpg') }}" alt="" />
                        <a class="btn hvr-hover" href="#">Lorem ipsum dolor</a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- End Categories -->

	<div class="box-add-products">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<img class="img-fluid" src="{{ asset('front/images/add-img-01.jpg') }}" alt="" />
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<img class="img-fluid" src="{{ asset('front/images/add-img-02.jpg') }}" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>قائمة منتجاتنا</h1>
                        <p>تسوق و اعرف المزيد عن منتجاتنا</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">جميع المنتجات</button>
                            {{-- <button data-filter=".top-featured">منتجات جديدة</button> --}}
                            {{-- <button data-filter=".best-seller">Best seller</button> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                @foreach ($products as $product )
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">شراء</p>
                            </div>
                            <img src="{{ asset($product->image) }}" class="img-fluid" alt="Image" style="width: 370px; height : 242px;">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                {{-- <form method="POST" action="" id="categoryForm">
                                    @csrf --}}
                                    {{-- <input type="hidden" name="product_id" value="{{ $product -> id }}"> --}}
                                    {{-- <input type="hidden" name="customer" value="{{ Auth::user()->id }}"> --}}
                                    {{-- <input type="hidden" name="price" value="{{ $product -> price }}"> --}}
                                    {{-- <input type="hidden" name="weight" value="{{ $product -> weight }}"> --}}
                                <a class="cart "  href="{{ route('cart.show',$product->id ) }}">إضافة إلى البطاقة</a>
                                {{-- </form> --}}
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>{{ strip_tags($product->content) }}</h4>
                            <h5> ${{ $product->price }}</h5>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- End Products  -->

    <!-- Start Blog  -->
    <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>اخر اقسامنا</h1>
                        <p>
                            قائمة تضم اخر الاقسام التي تمت اضافتها موخرا
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($categories as $cat )

                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="{{ asset($cat -> image) }}" alt="" style="height: 250px; width : 350px;"/>
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>{{ $cat -> name }}</h3>
                                <p>
                                    {{ $cat -> content }}
                                </p>
                            </div>
                            {{-- <ul class="option-blog">
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- End Blog  -->


    <!-- Start Instagram Feed  -->
    {{-- <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{ asset('front/images/instagram-img-01.jpg') }}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{ asset('front/images/instagram-img-02.jpg') }}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{ asset('front/images/instagram-img-03.jpg') }}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{ asset('front/images/instagram-img-04.jpg') }}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{ asset('front/images/instagram-img-05.jpg') }}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{ asset('front/images/instagram-img-06.jpg') }}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{ asset('front/images/instagram-img-07.jpg') }}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{ asset('front/images/instagram-img-08.jpg') }}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{ asset('front/images/instagram-img-09.jpg') }}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{ asset('front/images/instagram-img-05.jpg') }}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Instagram Feed  -->

{{--
    <div class="modal fade" id="productViewModal" tabindex="-1" aria-labelledby="productViewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content" style="width: 800px; height:300px;">
            <div class="modal-header">
            <h5 class="modal-title" id="productViewModalLabel"><span id="pname"></span></h5>
            <button type="button" id="closeModal" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="" id="pimage" alt="" style="width: 180px" height="180px">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-group">
                            <li class="list-group-item">Price: <strong class="text-danger">BDT
                            <span id="price"></span>
                            </strong>
                            <del id="oldprice"></del>
                        </li>
                            <li class="list-group-item">Code: <strong id="pcode"></strong></li>
                            <li class="list-group-item">Category: <strong id="category"></strong></li>
                            <li class="list-group-item">Brand: <strong id="brand"></strong></li>
                            <li class="list-group-item">Stock:
                            <span id="Instock" class="bdage bdage-pill badge-success" style="background: green; color: white"></span>
                            <span id="Outofstock" class="bdage bdage-pill badge-danger" style="background: red; color: white"></span>
                        </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group" id="colorArea">
                            <label for="color">Choose Color</label>
                            <select class="form-control" id="color" name="color">
                                <option>--Select Color--</option>
                            </select>
                        </div>
                        <div class="form-group" id="sizeArea">
                            <label for="size">Choose Size</label>
                            <select class="form-control" id="size" name="size">
                                <option>--Select Size--</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="product_qty">Qty</label>
                            <input type="number" name="quantity" id="product_qty" value="1" min="1">
                        </div>
                        <input type="hidden" id="product_id">
                        <button class="btn btn-primary mb-2" type="submit" onclick="addToCart()">Add to Cart</button>

                    </div>
                </div>
            </div>
            {{-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div> --}}
        {{-- </div>
        </div>
    </div> --}}
    <!-- Add to Cart Product Modal END-->
@endsection



{{-- @section('js')
<script>
$(document).on('click', '#save_date', function (e) {
    e.preventDefault();
    // $('#cat_name_error').text('');
    // $('#cat_desc_error').text('');
    var formData = new FormData($('#categoryForm')[0]);
    $.ajax({
        type: 'post',
        url: "{{route('cart.add')}}",
        data: formData,
        processData: false,
        contentType: false,
        cache: true,
        success: function (data) {
            console.log(data);
        }, error: function (reject) {
            var response = $.parseJSON(reject.responseText);
            $.each(response.errors, function (key, val) {
                $("#" + key + "_error").text(val[0]);
            });
        }
    });
});
</script> --}}






{{-- <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    // start product view with Modal
    function productView(id){
        $.ajax({
            type: 'GET',
            url: '/product/view/modal/'+id,
            dataType: 'json',
            success: function(data){
                $('#pname').text(data.product.product_name_en);
                $('#pcode').text(data.product.product_code);
                $('#category').text(data.product.category.category_name_en);
                $('#brand').text(data.product.brand.brand_name_en);
                $('#pimage').attr('src', '/'+data.product.product_thumbnail);
                $('#product_id').val(id);
                $('#product_qty').val(1);
                //product price
                if(data.product.discount_price == null){
                    $('#price').text(data.product.selling_price);
                    $('#oldprice').text('');
                }else{
                    $('#price').text(data.product.discount_price);
                    $('#oldprice').text(data.product.selling_price);
                }
                // product stock
                if(data.product.product_qty > 0)
                {
                    $('#Outofstock').text('');
                    $('#Instock').text('In Stock');
                }else{
                    $('#Instock').text('');
                    $('#Outofstock').text('OUT of Stock');
                }
                // color and size
                $('select[name="color"]').empty();
                $.each(data.colors_en, function(key,value){
                    $('select[name="color"]').append('<option value=" '+value+' ">'+value+'</option>')
                    if(data.colors_en == ""){
                        $('#colorArea').hide()
                    }else{
                        $('#colorArea').show()
                    }
                })
                $('select[name="size"]').empty();
                $.each(data.size_en, function(key,value){
                    $('select[name="size"]').append('<option value=" '+value+' ">'+value+'</option>')
                    if(data.size_en == ""){
                        $('#sizeArea').hide()
                    }else{
                        $('#sizeArea').show()
                    }
                })
            }
        })
    }
    // Add to Cart Product
    function addToCart(){
        var product_name = $('#pname').text();
        var id = $('#product_id').val();
        var color = $('#color option:selected').text();
        var size = $('#size option:selected').text();
        var qty = $('#product_qty').val();
        $.ajax({
            type: 'POST',
            dataType: 'json',
            data:{
                color: color,
                size:size,
                qty: qty,
                product_name: product_name,
            },
            url: '/cart/data/store/'+id,
            success: function(data){
                miniCart()
                $('#closeModal').click();
                // console.log(data)
                const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 3000
                })
                if($.isEmptyObject(data.error)){
                    Toast.fire({
                        type:'success',
                        title: data.success,
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        title:data.error,
                    })
                }
            }
        })
    }
    // End to Cart Product
</script>
<script type="text/javascript">
    function miniCart(){
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: '/product/mini/cart',
            success: function(response){
                $('span[id="cartSubTotal"]').text(response.cart_total);
                $('span[id="cartQty"]').text(response.cart_qty);
                var miniCart = "";
                $.each(response.carts, function(key,value){
                    miniCart += `
                    <div class="cart-item product-summary">
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="image">
                                    <a href="#"><img src="/${value.options.image}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <h3 class="name"><a href="index.php?page-detail">${value.name}</a></h3>
                                <div class="price">$${value.price}X${value.qty}</div>
                            </div>
                            <div class="col-xs-1 action"> <button type="submit" id="${value.rowId}" onclick="miniCartRemove(this.id)"><i class="fa fa-trash"></i></button> </div>
                        </div>
                    </div>
                    <!-- /.cart-item -->
                    <div class="clearfix"></div>
                    <hr>
                    `;
                });
                $('#miniCart').html(miniCart);
            }
        })
    }
    miniCart();
    // mini cart remove start
    function miniCartRemove(rowId){
        $.ajax({
            type:'GET',
            dataType: 'json',
            url:'/minicart/product-remove/'+rowId,
            success: function(data){
                miniCart();
                //start message
                const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 3000
                })
                if($.isEmptyObject(data.error)){
                    Toast.fire({
                        type:'success',
                        title: data.success,
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        title:data.error,
                    })
                }
                //end message
            }
        });
    }
    // mini cart remove end
</script>
<script type="text/javascript">
    // Start Add to Wishlist
    function addToWishlist(id){
        $.ajax({
            type:'POST',
            dataType: 'json',
            url:'/user/add/product/to-wishlist/'+id,
            success: function(data){
                //start message
                const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                })
                if($.isEmptyObject(data.error)){
                    Toast.fire({
                        type:'success',
                        icon: 'success',
                        title: data.success,
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title:data.error,
                    })
                }
                //end message
            }
        });
    }
    // End Add to Wishlist
    // Start remove from wishlist
    function removeWishlist(wish_id){
        $.ajax({
            type:'GET',
            dataType: 'json',
            url:'/user/remove/from-wishlist/'+wish_id,
            success: function(data){
                //location.reload();
                //start message
                const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 3000
                })
                if($.isEmptyObject(data.error)){
                    Toast.fire({
                        type:'success',
                        title: data.success,
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        title:data.error,
                    })
                }
                //end message
            }
        });
    }
    // End remove from wishlist
</script> --}}
{{-- @stop --}}
