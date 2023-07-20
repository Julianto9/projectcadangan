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
  <a href="/dashboard/create" class="btn btn-primary mb-3">Create new post</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Judul Postingan</th>
          <th scope="col">Isi postingan</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        
          @foreach($datas as $pos)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{$pos->judul_kontent}}</td>
          <td>{{$pos->isi_kontent}}</td>
          <td>
              <a href="/dashboard/{{ $pos->id }}/show" class="badge bg-info"><span data-feather="eye"></span></a>
              <a href="/dashboard/{{ $pos->id }}/edit" class="badge bg-info"><span data-feather="edit"></span></a>
              <form action="/dashboard/{{ $pos->id }}" method="post" class="d-inline">
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
