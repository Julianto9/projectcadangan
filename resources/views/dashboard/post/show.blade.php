@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    
    <div class="row justify-content-center mb-5">
        @foreach($post as $data)
        <div class="col-md-8">
            <h1 class="mb-3" style="text-align: center">{{ $data->judul_kontent }}</h1>
            
            @foreach($datas as $k)
            <p style="text-align: center">by <a href="/dashboard?author={{ $k->username}}" class="text-decoration-none">{{ $k->username }}, {{$data->created_at->diffForHumans();}}</a>
            </p>  
            @endforeach
            
            @if ($data->gambar)
            <div style="max-height: 350px; overflow: hidden;">
                <img src="{{ asset('/storage/'. $data->gambar)}}" class="img-fluid">
            </div>
            @endif

            <div class="col-lg-12">
                <p>{!! $data->isi_kontent !!}</p>
               
            </div>
            </article>
            <a href="/dashboard/" class="btn btn-success" ><span data-feather="arrow-left"></span>Back to all my
                post</a>
            <a href="/dashboard/{{$data->id}}/edit" class="btn btn-warning"><span data-feather="arrow-edit"></span>Edit</a>
            
        </div>
        @endforeach
    </div>
</div>
@endsection
