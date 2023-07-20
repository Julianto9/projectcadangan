@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
</div>

<div class="col-lg-8">
    @foreach($datas as $key => $data)
    <form action="/dashboard/{{ $data->id}}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label class="form-label">Judul Kontent</label>
            <input type="text" class="form-control @error('judul_kontent') is-invalid @enderror" id="judul_kontent" name="judul_kontent"
                required autofocus value="{{old('judul_kontent', $data->judul_kontent)}}">
            @error('judul_kontent')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Input Gambar</label>
            <input type="hidden" name="oldImage" value="{{ $data->gambar}}">
            @if ($data->gambar)
            <img src="{{asset('storage/' . $data->gambar)}}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
            @else
            <img class="img-preview img-fluid mb-3 col-sm-5">
            @endif
            
            <input class="form-control @error('gambar') is-invalid @enderror" type="file" id="gambar" name="gambar" value="{{ old('gambar', $data->gambar)}}" onchange="previewImage()">
            @error('gambar')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
        <div class="mb-3">
            <label class="form-label">Body</label>
            <input id="isi_kontent" type="hidden" name="isi_kontent" value="{{old('isi_kontent', $data->isi_kontent)}}">
            @error('isi_kontent')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            <trix-editor input="isi_kontent"></trix-editor>
        </div>


        <button type="submit" class="btn btn-primary">Update Post</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </form>
    @endforeach
</div>

<script type="text/javascript">
    document.addEventListener('trix-file-accept', function (e) {
        e.preventDefault();
    })
    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection
