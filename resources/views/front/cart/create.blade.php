@extends('layouts.front', ['title' => 'إضافة للبطاقة'])
@section('content')
    <!-- Start About Page  -->
    <div class="about-box-main">
        <div class="container">
            <div class="row">
                {{-- @foreach ($productToCart as $Procart) --}}

                <div class="col-lg-6">
                    <div class="banner-frame"> <img class="img-fluid" src="{{ asset($productToCart->image) }}" alt="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="noo-sh-title-top"> اطلب <span> هذا المنتج الان </span></h2>
                    <p>
                    <form method="POST" action="" id="categoryForm">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                @if (Session::has('error'))
                                    <div class="row mr-2 ml-2">
                                        <button type="text" class="btn btn-lg btn-block btn-outline-danger mb-2"
                                            id="type-error">{{ Session::get('error') }}
                                        </button>
                                    </div>
                                @endif

                                <div class="row mr-2 ml-2" id="show" style="display: none">
                                    <button type="text" class="btn btn-lg btn-block btn-outline-success mb-2">
                                        تم اضافة المنتج بنجاح إلى البطاقة
                                    </button>
                                </div>
                                <input type="hidden" name="id" value="{{ $productToCart->id }}">
                                <div class="form-group">
                                    <label for="name">اسم المنتج : </label>
                                    <input type="text" class="form-control" id="name" name="product_name"
                                        placeholder="اسم المنتج" required data-error="الرجاء ادخال اسم المنتج"
                                        value="{{ $productToCart->title }}" readonly>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="price">سعر المنتج الواحد : </label>
                                    <input type="text" placeholder="ادخل سعر المنتج" id="price" class="form-control"
                                        name="price" required data-error="الرجاء ادخال سعر المنتج"
                                        value="{{ $productToCart->price }}" readonly>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="weight">وزن المنتج : </label>
                                    <input type="text" placeholder="ادخل وزن المنتج" id="weight" class="form-control"
                                        name="weight" required data-error="الرجاء ادخال وزن المنتج"
                                        value="{{ $productToCart->weight }}" readonly>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="qty">كمية المنتج : </label>
                                    <input type="number" placeholder="ادخل كمية المنتج" id="qty" class="form-control"
                                        name="qty" required data-error="الرجاء ادخال كمية المنتج" value="1">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="submit-button text-center">
                                    <button class="btn hvr-hover" id="save_date" type="submit">
                                        إضافة إلى البطاقة
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                    </p>
                    {{-- <a class="btn hvr-hover" href="#">Read More</a> --}}
                </div>

                {{-- @endforeach --}}
            </div>

        </div>
    </div>
    <!-- End About Page -->
@endsection
@section('js')
<script>
$(document).on('click', '#save_date', function (e) {
    e.preventDefault();
    // $('#cat_name_error').text('');
    // $('#cat_desc_error').text('');
    var formData = new FormData($('#categoryForm')[0]);
    $.ajax({
        type: 'post',
        url: "{{route('cart.save')}}",
        data: formData,
        processData: false,
        contentType: false,
        cache: true,
        success: function (data) {
            $('#show').show();
        }, error: function (reject) {
            var response = $.parseJSON(reject.responseText);
            $.each(response.errors, function (key, val) {
                $("#" + key + "_error").text(val[0]);
            });
        }
    });
});
</script>
@stop
