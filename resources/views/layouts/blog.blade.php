@extends('layouts.main')
@section('content')

 <!-- Blog Details Page Title & Breadcrumbs -->
 <div data-aos="fade" class="page-title">
  <div class="heading">
    <div class="container">
      <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-8">
          <h1>Blog Details</h1>
          <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
        </div>
      </div>
    </div>
  </div>
  <nav class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="/#home">Home</a></li>
        <li class="current">Blog Details</li>
      </ol>
    </div>
  </nav>
</div><!-- End Page Title -->

<section id="blog-details" class="blog-details">
  
  <div class="container">
    <div class="row">
      @foreach($post as $key => $data)
      <div class="col-lg-12 text-center">
        <h1>{{$data->judul_kontent}}</h1>
        <ul class="list-inline mb-50">
          {{-- <li class="list-inline-item">Thomas Jonson</li> --}}
          <li class="list-inline-item">{{$data->created_at}}</li>
        </ul>
        <img class="img-fluid mb-50" src="{{ asset('/storage/'. $data->gambar)}}" alt="blog-image">
      </div>
      <div class="col-lg-12">
        <p>{!! $data->isi_kontent !!}</p>
       
      @endforeach
    </div>
  </div>

  <div class="comments">

    <h4 class="comments-count">{{$total}} Komentar</h4>
@forelse($coment as $key => $c)
    <div id="comment-1" class="comment">
      <div class="d-flex">
        <div class="comment-img"><img src="assets/img/blog/comments.jpg" alt=""></div>
        <div>
          <h5><a href="">{{$c->name}}</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
          <time datetime="2020-01-01">{{$c->created_at}}, {{$c->created_at->diffForHumans()}}</time>
          <p>
            {{$c->komentar}}
          </p>
        </div>
      </div>
    </div><!-- End comment #1 -->
@empty
<h1>Tidak Ada Berkomentar</h1>
@endforelse
    <form action="/coment" method="post" class="mb-5" enctype="multipart/form-data">
      @csrf
    <div class="reply-form">
      <h4>Leave a Reply</h4>
      <p>Your email address will not be published. Required fields are marked * </p>
      <form action="">
        <div class="row">
          <div class="col-md-6 form-group">
            <input name="name" id="name" type="text" class="form-control" placeholder="Your Name*">
          </div>
        <div class="row">
          <div class="col form-group">
            <textarea name="komentar" id="komentar" class="form-control" placeholder="Your Comment*"></textarea>
          </div>
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-primary">Post Comment</button>
        </div>

      </form>

    </div>
    </form>
  </div><!-- End blog comments -->

</section>


@endsection