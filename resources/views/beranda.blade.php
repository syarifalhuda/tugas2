
@extends('Layout/usertemplate')
@section('title', 'Beranda')


@section('content')
<!-- Page Content -->
<div class="row">
  <div class="col-md-6">
   <div class="card-artikel">
    <h1 class="beranda-title">WELCOME TO BLOG</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum soluta sint cum modi eligendi, tenetur libero quod, aliquid cumque, laboriosam labore sed totam. Quidem nulla saepe, magni officia voluptate beatae.</p>
  </div>
</div>
<div class="col-md-6">
   <img src="{{ url('tempelateuser/css/1.svg') }}" alt="" class="img-beranda">
</div>
</div>
<!-- /.container -->
@endsection
