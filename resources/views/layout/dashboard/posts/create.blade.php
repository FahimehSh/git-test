@extends('layout.dashboard.index')

@section('mainContent')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">ثبت پست جدید</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="post" action="{{route('posts.store')}}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">عنوان پست</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1"
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
                                    <select name="" class="form-control">
                                        <option>انتخاب کنید:</option>
                                        {{-- @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                        @endforeach--}}
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
