@extends('layouts.main')
@section('content')

<section id="recent-posts" class="recent-posts">
    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Semua Konten Postingan </h2>
    </div><!-- End Section Title -->
    <div class="container">
        <div class="row gy-4">
            @forelse($datas as $data)
            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <article>

                    <div class="post-img">
                        <img src="{{ asset('/storage/'. $data->gambar)}}" alt="" class="img-fluid" type="video/mp4">
                    </div>
                
                    <h2 class="title">
                        <a href="/dashboard/{{ $data->id }}/showblog">{{$data->judul_kontent}}</a>
                    </h2>

                    <div class="d-flex align-items-center">
                        <img src="{{asset('img/blog/admin.jpg')}}" alt=""
                            class="img-fluid post-author-img flex-shrink-0">
                        <div class="post-meta">
                            <p class="post-author">{{$data->username}}</p>
                            <p class="post-date">
                                <time datetime="2022-01-01">{{$data->created_at}}</time>
                            </p>
                        </div>
                    </div>
                </article>
               
            </div>
            @empty
            <div class="container section-title" data-aos="fade-up">
                <h2>Belum Ada Postingan Saat ini</h2>
            </div>
            @endforelse
            <!-- End post list item -->
            
        </div><!-- End recent posts list -->

    </div>
    <section id="pricing" class="pricing">
        <div class="pricing-item">
            <div class="text-center"><a href="/" class="buy-btn">Back<i class="bi bi-arrow-right"></i></a></div>
        </div>
</section>
</section><!-- End Recent-posts Section -->

@endsection