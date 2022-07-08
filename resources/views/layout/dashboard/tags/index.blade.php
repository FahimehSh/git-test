@extends('layout.dashboard.index')

@section('page-title', '|لیست تگ ها');

@section('header-title', 'لیست تگ ها')

@section('mainContent')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">لیست تگ ها</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 10px">ردیف</th>
                                    <th>نام تگ</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tags as $tag)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$tag->name}}</td>
                                        <td>
                                            <a href="{{route('tags.edit', ['tag'=>$tag->id])}}"
                                               class="btn btn-sm btn-primary">ویرایش</a>
                                            <a href="{{route('tags.destroy', ['tag'=>$tag->id])}}"
                                               onclick="return confirm('آیا مطمئن هستید؟')"
                                               class="btn btn-sm btn-danger">حذف</a>
                                            <a href="{{route('tags.show', ['tag'=>$tag->id])}}"
                                               class="btn btn-sm btn-success">نمایش جزئیات</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">«</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">»</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection
