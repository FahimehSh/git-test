@extends('layout.dashboard.index')

@section('page-title', '|ایجاد دسته بندی جدید');

@section('header-title', 'ایجاد دسته بندی جدید')

@section('mainContent')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">ایجاد دسته بندی جدید</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="post" action="{{route('categories.store')}}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">عنوان دسته بندی</label>
                                    <input type="text" name="name" value="{{old('name')}}" class="form-control" id="exampleInputEmail1"
                                           placeholder="عنوان دسته بندی را وارد کنید">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">ثبت</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection
