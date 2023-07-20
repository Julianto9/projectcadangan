@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Post</h1>
</div>

<div class="col-lg-8">
    <form action="/dashboard" method="post" class="mb-5" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-3">
            <label class="form-label">Judul Konten</label>
            <input type="text" class="form-control @error('judul_kontent') is-invalid @enderror" id="judul_kontent"
                name="judul_kontent" required autofocus value="{{old('judul_kontent')}}">
            @error('judul_kontent')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- <div class="mb-3">
            <label for="title" class="form-label">Isi</label>
            <input type="text" class="form-control @error('isi_kontent') is-invalid @enderror" id="isi_kontent" name="isi_kontent"
                required autofocus value="{{old('isi_kontent')}}">
        @error('isi_kontent')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
</div> --}}
<div class="mb-3">
    <label class="form-label">Body</label>
    <input id="isi_kontent" type="hidden" name="isi_kontent" value="{{old('isi_kontent')}}">
    @error('isi_kontent')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
    <trix-editor input="isi_kontent"></trix-editor>
</div>
<div class="mb-3">
    <label for="image" class="form-label">Input Gambar</label>
    <img class="img-preview img-fluid mb-3 col-sm-5 d-block">
    <input type="file" name="gambar" id="gambar" class="form-control @error('gambar') is-invalid @enderror"
        placeholder="isi Konten" autofocus onchange="previewImage()" value="{{ old('gambar') }} " />
    @error('gambar')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>



<button type="submit" class="btn btn-primary">Create Post</button>
<button type="reset" class="btn btn-primary">Reset</button>
</form>
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
