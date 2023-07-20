@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
</div>

<div class="col-lg-8">
    @foreach($datas as $key => $data)
    <form action="/coment/{{ $data->id}}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label class="form-label">nama</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                required autofocus value="{{old('name', $data->name)}}">
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Komentar</label>
            <input type="text" class="form-control @error('komentar') is-invalid @enderror" id="komentar" name="komentar"
                required autofocus value="{{old('komentar', $data->komentar)}}">
            @error('komentar')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
       


        <button type="submit" class="btn btn-primary">Update</button>
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
