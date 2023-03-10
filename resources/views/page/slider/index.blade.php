@extends('layouts.app', ['title' => 'القائمة المتحركة'])
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold"><i class="fas fa-image"></i>القوائم المتحركةR</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        @if($errors->first('message'))
                        <div class=" col-12">
                            <div class="border-left-primary shadow-2">
                                <div class="alert alert-danger" role="alert">
                                    {{ $errors->first('message') }}
                                </div>
                            </div>
                        </div>
                        @endif

                        <div class="form-group">
                            <label>الصورة</label>
                            <input type="file" name="file" class="form-control">
                            <small class="form-text text-danger">{{ $errors->first('file') }}</small>
                        </div>
                        <div class="form-group">
                            <label>الوصف او العنوان</label>
                            <input type="text" name="link" placeholder="ادخل الوصف او العنوان" class="form-control">
                            <small class="form-text text-danger">{{ $errors->first('link') }}</small>
                        </div>
                        <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i>
                            @lang('web.submit')</button>
                        <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i>
                            @lang('web.reset')</button>
                    </form>
                </div>
            </div>
            <br>
            @if(Session::has('message'))
            <div class="col-8">
                <div class="border-left-primary alert alert-info" role="alert">
                    {{ Session::get('message') }}
                </div>
            </div>
            @endif

            <div class="card border-0 shadow mt-3 mb-4">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold"><i class="fas fa-laptop"></i> SLIDERS</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" style="text-align:center;width: 6%">الرقم</th>
                                    <th scope="col">الصورة</th>
                                    <th scope="col">الوصف</th>
                                    <th scope="col" style="width:15%;text-align: center">الاجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($datas as $no => $slider)
                                <tr>
                                    <th scope="row" style="text-align:center">
                                        {{ ++$no + ($datas->currentPage()-1) * $datas->perPage() }}
                                    </th>
                                    <td class="text-center">
                                        <img src="{{ $slider->image }}" class="rounded" style="width:200px">
                                    </td>
                                    <td>{{ $slider->link }}</td>
                                    <td class="text-center">
                                        <button onClick="Delete(this.id)" class="btn btn-sm btn-danger"
                                            id="{{ $slider->id }}">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-danger">
                                    لا يوجد بيانات لعرضه
                                </div>
                                @endforelse
                            </tbody>
                        </table>
                        <div style="text-align: center">
                            {{ $datas->links("vendor.pagination.bootstrap-5") }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<script>
//ajax delete
function Delete(id) {
    var id = id;
    var token = $("meta[name='csrf-token']").attr("content");
    swal({
        title: "هل انت متاكد من عملية المسح ؟",
        text: "لن تكن قادرا على استعادة البيانات",
        icon: "warning",
        buttons: [
            'إلغاء الامر',
            'تاكيد الامر'
        ],
        dangerMode: true,
    }).then(function(isConfirm) {
        if (isConfirm) {
            195 //ajax delete
            jQuery.ajax({
                url: "/slider/" + id,
                data: {
                    "id": id,
                    "_token": token
                },
                type: 'DELETE',
                success: function(response) {
                    if (response.status == "success") {
                        swal({
                            title: 'تمت العملية',
                            text: 'تم حذف البيانات بنجاح',
                            icon: 'success',
                            timer: 2000,
                            showConfirmButton: false,
                            showCancelButton: false,
                            buttons: false,
                        }).then(function() {
                            location.reload();
                        });
                    } else {
                        swal({
                            title: 'هنالك خطأ ما !',
                            text: 'لم تتم مسح البيانات بنجاح ',
                            icon: 'error',
                            timer: 2000,
                            showConfirmButton: false,
                            showCancelButton: false,
                            buttons: false,
                        }).then(function() {
                            location.reload();
                        });
                    }
                }
            });
        } else {
            return true;
        }
    })
}
</script>
@endsection
