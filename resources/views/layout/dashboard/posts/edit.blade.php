@extends('layout.dashboard.index')

@section('header-title', 'ویرایش پست')

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
                            <h3 class="card-title">ویرایش پست</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="post" action="{{route('posts.update', ['post'=>$post->id])}}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">عنوان پست</label>
                                    <input type="text" name="title" value="{{old('title', $post->title)}}"
                                           class="form-control" id="exampleInputEmail1"
                                           placeholder="عنوان دسته بندی را وارد کنید">
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
                                        <option value="{{$category->id}}" @selected(old('$category_id') == $category->id)>{{$category->title}}</option>
                                        @endforeach
                                    </select>
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
