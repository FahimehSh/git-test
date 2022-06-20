@extends('layout.home.master')

@section('content')
    <main class="rtl mt-3">
        <div class="d-flex justify-content-center flex-wrap">
            @foreach($posts as $post)
                @include('layout.home.contentHome')
            @endforeach
        </div>
    </main>
@endsection
