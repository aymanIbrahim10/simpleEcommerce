@extends('layouts.app', ['title' => 'إضافة مستخدم'])
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold"><i class="fas fa-user-circle"></i> إضافة مستخدم</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
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
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>اسم المستخدم</label>
                                    <input type="text" name="name" placeholder="ادخل اسم المستخدم"
                                        class="form-control @error('name') is-invalid @enderror">
                                    <small class="form-text text-danger">{{ $errors->first('name') }}</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>البريد الالكتروني</label>
                                    <input type="email" name="email" placeholder="ادخل البريد الالكتروني"
                                        class="form-control @error('email') is-invalid @enderror">
                                    <small class="form-text text-danger">{{ $errors->first('email') }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>كلمة المرور</label>
                                    <input type="password" name="password" placeholder="ادخل كلمة المرور"
                                        class="form-control @error('password') is-invalid @enderror">
                                    <small class="form-text text-danger">{{ $errors->first('password') }}</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>تاكيد كلمة المرور</label>
                                    <input type="password" name="password_confirmation"
                                        placeholder="تاكيد كلمة المرور" class="form-control">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i>
                            @lang('web.submit')</button>
                        <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> @lang('web.reset')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
