@extends('layout.dashboard.index')

@section('page-title', '|ایجاد پست جدید');

@section('header-title', 'ایجاد پست جدید')

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
                            <h3 class="card-title">ایجاد پست جدید</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="post" action="{{route('posts.store')}}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">عنوان پست</label>
                                    <input type="text" name="title" value="{{old('title')}}" class="form-control"
                                           id="exampleInputEmail1"
                                           placeholder="عنوان پست را وارد کنید">
                                </div>
                                <div class="form-group">
                                    <label>خلاصه محتوا</label>
                                    <textarea name="short_content" class="form-control" rows="3"
                                              placeholder="خلاصه محتوا را وارد نمایید"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>محتوا</label>
                                    <textarea name="content" class="form-control" rows="3"
                                              placeholder=" محتوا را وارد نمایید"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>نام دسته بندی</label>
                                    <select name="category_id" class="form-control">
                                        <option>انتخاب کنید:</option>
                                        @foreach($categories as $category)
                                            <option
                                                value="{{old('$category_id', $category->id)}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="inputError">تگ های مورد نظر خود را علامت بزنید.</label>
                                    <div class="form-check">
                                        @foreach($tags as $tag)
                                            <div>
                                            <input class="form-check-input" type="checkbox" name="tag_id[]" value="{{$tag->id}}">
                                            <label class="form-check-label">{{$tag->name}}</label>
                                            </div>
                                        @endforeach
                                    </div>
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
