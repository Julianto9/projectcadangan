@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success col-lg-10" role="alert">
  {{ session('success')}}
</div>
@endif
<div class="row">

  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Jumlah Konten Postingan </h5>
        
        <p class="card-text">{{$post}} Postingan</p>
        
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Jumlah Komentar</h5>
        <p class="card-text">{{$coment}} Komentar</p>
      </div>
    </div>
  </div>
</div>

@endsection
