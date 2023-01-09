@extends('layouts.app', ['title' => 'الطلبيات'])
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold"><i class="fas fa-shopping-cart"></i> الطلبيات</h6>
                    </div>
                    <div class="card-body">
                        {{-- <form action="{{ route('order.index') }}" method="GET">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="q"
                                    placeholder="ادخل رقم الفاتورة للبحث عن الطلبيات">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>
                                        @lang('web.search')
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form> --}}
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" style="text-align:center;width: 6%">الرقم</th>
                                        {{-- <th scope="col">رقم الفاتورة</th> --}}
                                        <th scope="col">اسم المنتج</th>
                                        <th scope="col">الاجمالي</th>
                                        <th scope="col">الحالة</th>
                                        <th scope="col" style="width:15%;text-align: center">الاجراءات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($datas as $no => $data)
                                        <tr>
                                            <th scope="row" style="text-align:center">
                                                {{ ++$no + ($datas->currentPage() - 1) * $datas->perPage() }}
                                            </th>
                                            {{-- <td>{{ $invoice->invoice }}</td> --}}
                                            <td>{{ $data->name }}</td>
                                            <td>{{ moneyFormat($data->price) }}</td>
                                            <td class="text-center">
                                                @if ($data->status == 0)
                                                    مطلوب
                                                @elseif ($data->status == 1)
                                                    جاري التوصيل
                                                @elseif($data->status == 2)
                                                    تم التوصيل
                                                @else
                                                    فشل التوصيل
                                                @endif
                                            </td>

                                            <td>
                                                <form class="mb-2" action="{{ route('order.update', $data->id ) }}" method="POST">
                                                    @csrf

                                                    <input type="hidden" name="status" value="1">
                                                    {{-- <input type="hidden" name="id" value="{{ $data->id }}"> --}}
                                                    <button type="submit"
                                                        class="btn btn-sm btn-primary">
                                                        جاري التوصيل
                                                    </button>
                                                </form>
                                                <form class="mb-2" action="{{ route('order.update',$data->id ) }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="status" value="2">
                                                    {{-- <input type="hidden" name="id" value="{{ $data->id }}"> --}}
                                                    <button type="submit"
                                                        class="btn btn-sm btn-success">
                                                        تم التوصيل
                                                    </button>
                                                </form>
                                                <form class="mb-2" action="{{ route('order.update' , $data->id ) }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="status" value="3">
                                                    {{-- <input type="hidden" name="id" value="{{ $data->id }}"> --}}
                                                    <button type="submit"
                                                        class="btn btn-sm btn-danger">
                                                        فشل التوصيل
                                                    </button>
                                                </form>


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
                                {{ $datas->links('vendor.pagination.bootstrap-5') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
