@extends ('layout/main')

@section('title', 'About')

@section('container')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-3">About</h1>
            <h3 class="mt-3">{{$nama}}</h3>
        </div>
    </div>
</div>
@endsection