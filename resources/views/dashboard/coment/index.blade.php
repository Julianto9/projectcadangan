@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Postingan</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success col-lg-10" role="alert">
  {{ session('success')}}
</div>
@endif

<div class="table-responsive col-lg-10">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Komentar</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        
          @foreach($datas as $c)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{$c->name}}</td>
          <td>{{$c->komentar}}</td>
          <td>
              <a href="/coment/{{ $c->id }}/show" class="badge bg-info"><span data-feather="eye"></span></a>
              <a href="/coment/{{ $c->id }}/edit" class="badge bg-info"><span data-feather="edit"></span></a>
              <form action="/coment/{{ $c->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Kamu yakin?')"><span data-feather="x-circle"></span></button>
            </form>
              
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
