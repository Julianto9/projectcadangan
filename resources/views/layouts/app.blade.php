@extends('layouts.main')
@section('content')
<!-- Hero Section - Home Page -->
<section id="hero" class="hero">

    <img src="{{asset('img/hero-bg.jpg')}}" alt="" data-aos="fade-in">

    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <h2 data-aos="fade-up" data-aos-delay="100">Welcome to Agen Pulsa Nasional</h2>
                <p data-aos="fade-up" data-aos-delay="200">Tempat Penjualan Pulsa Dan Pendaftaran Agen Pulsa</p>
            </div>
            <div class="col-lg-5">
                <form action="#" class="sign-up-form d-flex" data-aos="fade-up" data-aos-delay="300">
                    <input type="text" class="form-control" placeholder="Enter email address">
                    <input type="submit" class="btn btn-primary" value="Sign up">
                </form>
            </div>
        </div>
    </div>

</section><!-- End Hero Section -->

<!-- Clients Section - Home Page -->

<section id="clients" class="clients">
    <div class="container-fluid" data-aos="fade-up">
        <div class="row gy-4">
            <div class="col-xl-2 col-md-3 col-6 client-logo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/Bank_Mandiri_logo_2016.svg/2560px-Bank_Mandiri_logo_2016.svg.png"
                    class="img-fluid" alt="">
            </div><!-- End Client Item -->
            <div class="col-xl-2 col-md-3 col-6 client-logo">
                <img src="https://upload.wikimedia.org/wikipedia/id/thumb/5/55/BNI_logo.svg/1200px-BNI_logo.svg.png"
                    class="img-fluid" alt="">
            </div><!-- End Client Item -->
            <div class="col-xl-2 col-md-3 col-6 client-logo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/BRI_2020.svg/1200px-BRI_2020.svg.png"
                    class="img-fluid" alt="">
            </div><!-- End Client Item -->
            <div class="col-xl-2 col-md-3 col-6 client-logo">
                <img src="https://image.cermati.com/v1428073854/brands/avqoa9rfng8bklutfhm6.jpg" class="img-fluid"
                    alt="">
            </div><!-- End Client Item -->
            {{-- <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{asset('img/clients/client-5.png')}}" class="img-fluid" alt="">
        </div><!-- End Client Item -->

        <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{asset('img/clients/client-6.png')}}" class="img-fluid" alt="">
        </div><!-- End Client Item --> --}}

    </div>

    </div>

</section><!-- End Clients Section -->

<!-- About Section - Home Page -->
<section id="about" class="about" >

    <div class="container" data-aos="fade-up" data-aos-delay="100" >
        <div class="row align-items-xl-center gy-5">
            <div class="col-lg-6">
				<img class="img-fluid" src="https://1.bp.blogspot.com/-5Nm9vTEm9WQ/XUVG8TBDx4I/AAAAAAAAJAc/N18FbcfSftY1WmEdVs8PJ6XL0NxqzaifwCLcBGAs/s1600/asdsa.png" alt="">
			</div>
            <div class="col-xl-5 content">
                <h3>About Us</h3>
                <h2>OM'Z Reload</h2>
                <p>OM'z Reload adalah Distributor, server pulsa termurah di Indonesia. Server beralamat di Jin. Pesisir
                    Blok A kel Rumbai Pesisir RT/RW 004/009, Pekanbaru-Riau. Produk yang kami tawarkan sangat komplit dan
                    bisa dipasarkan secara online maupun offline.

                    Produk OM'z Reload sendiri berupa pulsa reguler all operator, pulsa paket sms,pulsa paket internet,
                    game dan
                    Payment Point Online Bank ( PPOB ).

                    Untuk memulai bisnis Pulsa sangat mudah,anda cukup menyediakan satu nomor hp untuk didaftarkan di
                    OM'z
                    Reload.
                </p>
                <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>

            {{-- <div class="col-xl-7">
                <div class="row gy-4 icon-boxes">

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box">
                            <i class="bi bi-buildings"></i>
                            <h3>Eius provident</h3>
                            <p>Magni repellendus vel ullam hic officia accusantium ipsa dolor omnis dolor voluptatem</p>
                        </div>
                    </div> <!-- End Icon Box -->

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                            <i class="bi bi-clipboard-pulse"></i>
                            <h3>Rerum aperiam</h3>
                            <p>Autem saepe animi et aut aspernatur culpa facere. Rerum saepe rerum voluptates quia</p>
                        </div>
                    </div> <!-- End Icon Box -->

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon-box">
                            <i class="bi bi-command"></i>
                            <h3>Veniam omnis</h3>
                            <p>Omnis perferendis molestias culpa sed. Recusandae quas possimus. Quod consequatur
                                corrupti</p>
                        </div>
                    </div> <!-- End Icon Box -->

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon-box">
                            <i class="bi bi-graph-up-arrow"></i>
                            <h3>Harga Terjangkau</h3>
                            <p>Asyik asyik main game, tahu tahu nge lag. Setelah dicek, ternyata kuota habis.
                                Pasti kesel kan? Kamu tenang aja, gak perlu keluar rumah, pulsa untuk daftar kuota
                                internet siap kami kirim. PM aja,
                                dijamin pulsa disini harga murah dan buka 24 jam</p>
                        </div>
                    </div> <!-- End Icon Box -->

                </div>
            </div> --}}

        </div>
    </div>

</section><!-- End About Section -->

<!-- Stats Section - Home Page -->
<section id="stats" class="stats">

    <img src="{{asset('img/stats-bg.jpg')}}" alt="" data-aos="fade-in">

    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Clients</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Projects</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Hours Of Support</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Workers</p>
                </div>
            </div><!-- End Stats Item -->

        </div>

    </div>

</section><!-- End Stats Section -->

<!-- Services Section - Home Page -->
<section id="services" class="services">

    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Telegram</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
                <div class="service-item d-flex">
                    <div class="icon flex-shrink-0"><i class="bi bi-telegram" style="color:blue"></i></div>
                    <div>
                        <h4 class="title"><a href="https://t.me/omzreload" class="stretched-link">Telegram Info
                                Channel</a></h4>
                    </div>
                </div>
            </div>
            <!-- End Service Item -->

            <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="200">
                <div class="service-item d-flex">
                    <div class="icon flex-shrink-0"><i class="bi bi-telegram" style="color:blue"></i></div>
                    <div>
                        <h4 class="title"><a href="https://t.me/MarhanNet" class="stretched-link">Telegram Info
                                Admin</a></h4>
                    </div>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="300">
                <div class="service-item d-flex">
                    <div class="icon flex-shrink-0"><i class="bi bi-telegram" style="color:blue"></i></div>
                    <div>
                        <h4 class="title"><a href="https://t.me/abangdakhalid" class="stretched-link">Telegram Referall
                                Master</a></h4>
                    </div>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="400">
                <div class="service-item d-flex">
                    <div class="icon flex-shrink-0"><i class="bi bi-telegram" style="color:blue"></i></div>
                    <div>
                        <h4 class="title"><a href="https://t.me/csomzreload" class="stretched-link">Telegram Customer
                                Service</a></h4>
                    </div>
                </div>
            </div><!-- End Service Item -->
        </div>

    </div>

</section><!-- End Services Section -->

<!-- Team Section - Home Page -->
<section id="bank" class="team">

    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Bank Deposit</h2>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                <div class="post-img">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/Bank_Mandiri_logo_2016.svg/2560px-Bank_Mandiri_logo_2016.svg.png"
                        class="img-fluid" height="100px" alt="">
                </div><!-- End Client Item -->
                <div class="member-info text-center">
                    <h4>Bank Mandiri</h4>
                    <span>1080013080917</span>
                </div>
            </div><!-- End Team Member -->

            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
                <div class="post-img">
                    <img src="https://upload.wikimedia.org/wikipedia/id/thumb/5/55/BNI_logo.svg/1200px-BNI_logo.svg.png"
                        class="img-fluid" height="100px" alt="">
                </div><!-- End Client Item -->
                <div class="member-info text-center">
                    <h4>Bank BNI</h4>
                    <span>0418499006</span>
                </div>
            </div><!-- End Team Member -->

            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
                <div class="post-img">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/BRI_2020.svg/1200px-BRI_2020.svg.png"
                        class="img-fluid" height="100px" alt="">
                </div><!-- End Client Item -->
                <div class="member-info text-center">
                    <h4>Bank BRI</h4>
                    <span>015901001095566</span>
                </div>
            </div><!-- End Team Member -->

            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
                <div class="post-img">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Bank_Central_Asia.svg/2560px-Bank_Central_Asia.svg.png"
                        class="img-fluid" height="100px" alt="">
                </div><!-- End Client Item -->
                <div class="member-info text-center">
                    <h4>Bank BCA</h4>
                    <span>8455225643</span>
                </div>
            </div><!-- End Team Member -->
        </div>
    </div>

</section><!-- End Team Section -->
<!-- pricing - Home Page --> --}}
<section id="pricing" class="pricing">

    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Harga Produk</h2>
    </div><!-- End Section Title -->
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="pricing-item featured">
                    <ul>
                        <iframe
                            src="http://omzreload.webreport.info/harga.js.php?id=eef11a44da38a813d5797b8c3a6b86afdc71997d123030f8c5a25f8dde88c270fa871317aa0d9ba52e26bcb89e1c0d3a-3"
                            height="500px" width="1000px"></iframe>
                    </ul>
                    {{-- <div class="text-center"><a href="/harga" class="buy-btn">Lihat Harga</a></div> --}}
                </div>
            </div><!-- End Pricing Item -->
        </div>
    </div>
</section><!-- End Pricing Section -->


<!-- Team Section - Home Page -->
<section id="team" class="team">

    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-5">

            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                    <img src="{{asset('img/team/team-1.jpg')}}" class="img-fluid" alt="">
                    <div class="social">
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="member-info text-center">
                    <h4>Walter White</h4>
                    <span>Chief Executive Officer</span>
                    <p>Aliquam iure quaerat voluptatem praesentium possimus unde laudantium vel dolorum distinctio dire
                        flow</p>
                </div>
            </div><!-- End Team Member -->

            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
                <div class="member-img">
                    <img src="{{asset('img/team/team-2.jpg')}}" class="img-fluid" alt="">
                    <div class="social">
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="member-info text-center">
                    <h4>Sarah Jhonson</h4>
                    <span>Product Manager</span>
                    <p>Labore ipsam sit consequatur exercitationem rerum laboriosam laudantium aut quod dolores
                        exercitationem ut</p>
                </div>
            </div><!-- End Team Member -->

            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
                <div class="member-img">
                    <img src="{{asset('img/team/team-3.jpg')}}" class="img-fluid" alt="">
                    <div class="social">
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="member-info text-center">
                    <h4>William Anderson</h4>
                    <span>CTO</span>
                    <p>Illum minima ea autem doloremque ipsum quidem quas aspernatur modi ut praesentium vel tque sed
                        facilis at qui</p>
                </div>
            </div><!-- End Team Member -->

            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
                <div class="member-img">
                    <img src="{{asset('img/team/team-4.jpg')}}" class="img-fluid" alt="">
                    <div class="social">
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="member-info text-center">
                    <h4>Amanda Jepson</h4>
                    <span>Accountant</span>
                    <p>Magni voluptatem accusamus assumenda cum nisi aut qui dolorem voluptate sed et veniam quasi quam
                        consectetur</p>
                </div>
            </div><!-- End Team Member -->

            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="500">
                <div class="member-img">
                    <img src="{{asset('img/team/team-5.jpg')}}" class="img-fluid" alt="">
                    <div class="social">
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="member-info text-center">
                    <h4>Brian Doe</h4>
                    <span>Marketing</span>
                    <p>Qui consequuntur quos accusamus magnam quo est molestiae eius laboriosam sunt doloribus quia
                        impedit laborum velit</p>
                </div>
            </div><!-- End Team Member -->

            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="600">
                <div class="member-img">
                    <img src="{{asset('img/team/team-6.jpg')}}" class="img-fluid" alt="">
                    <div class="social">
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="member-info text-center">
                    <h4>Josepha Palas</h4>
                    <span>Operation</span>
                    <p>Sint sint eveniet explicabo amet consequatur nesciunt error enim rerum earum et omnis fugit
                        eligendi cupiditate vel</p>
                </div>
            </div><!-- End Team Member -->

        </div>

    </div>

</section><!-- End Team Section -->

<!-- Call-to-action Section - Home Page -->
<section id="call-to-action" class="call-to-action">

    <img src="{{asset('img/cta-bg.jpg')}}" alt="">

    <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-xl-10">
                <div class="text-center">
                    <h3>Call To Action</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum.</p>
                    <a class="cta-btn" href="#">Call To Action</a>
                </div>
            </div>
        </div>
    </div>

</section><!-- End Call-to-action Section -->

<!-- Testimonials Section - Home Page -->
<section id="testimonials" class="testimonials">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
                <h3>Testimonials</h3>
                <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                </p>
            </div>

            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">

                <div class="swiper">
                    <template class="swiper-config">
                        {
                        "loop": true,
                        "speed" : 600,
                        "autoplay": {
                        "delay": 5000
                        },
                        "slidesPerView": "auto",
                        "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                        }
                        }
                    </template>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="d-flex">
                                    <img src="assets/img/testimonials/testimonials-1.jpg"
                                        class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Saul Goodman</h3>
                                        <h4>Ceo & Founder</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                        suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et.
                                        Maecen aliquam, risus at semper.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="d-flex">
                                    <img src="assets/img/testimonials/testimonials-2.jpg"
                                        class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Sara Wilsson</h3>
                                        <h4>Designer</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum
                                        quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat
                                        irure amet legam anim culpa.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="d-flex">
                                    <img src="assets/img/testimonials/testimonials-3.jpg"
                                        class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Jena Karlis</h3>
                                        <h4>Store Owner</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla
                                        quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore
                                        quis sint minim.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="d-flex">
                                    <img src="assets/img/testimonials/testimonials-4.jpg"
                                        class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Matt Brandon</h3>
                                        <h4>Freelancer</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                        fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore
                                        quem dolore labore illum veniam.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="d-flex">
                                    <img src="assets/img/testimonials/testimonials-5.jpg"
                                        class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>John Larson</h3>
                                        <h4>Entrepreneur</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor
                                        noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam
                                        esse veniam culpa fore nisi cillum quid.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </div>

    </div>

</section><!-- End Testimonials Section -->

<section id="recent-posts" class="recent-posts">
    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Postingan Terbaru</h2>
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
                        {{-- <img src="{{asset('img/blog/admin.jpg')}}" alt=""
                            class="img-fluid post-author-img flex-shrink-0"> --}}
                        <div class="post-meta">
                            
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
            <div class="text-center"><a href="/blog" class="buy-btn">Lihat Selengkapnya<i class="bi bi-arrow-right"></i></a></div>
        </div>
</section>
</section><!-- End Recent-posts Section -->

<!-- Contact Section - Home Page -->
<section id="contact" class="contact">

    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-6">

                <div class="row gy-4">
                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="200">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Address</h3>
                            <p>Jin. Pesisir Blok A kel Rumbai Pesisir RT/RW 004/009, Pekanbaru-Riau</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="300">
                            <i class="bi bi-telephone"></i>
                            <h3>Call Us</h3>
                            <p>+6285161510461</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="400">
                            <i class="bi bi-envelope"></i>
                            <h3>Email Us</h3>
                            <p>info@example.com</p>
                            <p>contact@example.com</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="500">
                            <i class="bi bi-clock"></i>
                            <h3>Open Hours</h3>
                            <p>Monday - Friday</p>
                            <p>9:00AM - 05:00PM</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

            </div>

            <div class="col-lg-6">
                <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                    data-aos-delay="200">
                    <h1>Pendaftaran Agen</h1>
                    <div class="row gy-4">
                        
                        <iframe style="position: absolute; width: 45%; height: 100%;" src="http://omzreload.webreport.info/formagen.php?id=547c51ef8e81b34f196a69720202f2f272ae4d6f925e2577def29978a41cd4a15d89484c305f0320b088ffc78a09ceb7-304"></iframe>
                    </div>
                </form>
            </div><!-- End Contact Form -->

        </div>

    </div>

</section><!-- End Contact Section -->


@endsection
