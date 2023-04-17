<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tag -->
    @include('master.meta')
    <!-- Styling CSS -->
    @include('master.css')
</head>
<body>
    <!-- Bungkus Wrapper -->
    <div class="main-wrapper">
        <!-- Navbar nya -->
        @include('components.navbar')
        <!-- Akhir Navbar -->

        <!-- Hero Section -->
        @foreach ($hero as $hero)
        <section class="hero-section ptb-120 min-vh-100 d-flex align-items-center bg-primary text-white position-relative overflow-hidden" style="background: url('assets/img/page-header-bg.svg')no-repeat bottom right">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content-wrap">
                            <h5 class="text-black">{{ $hero->title }}</h5>
                            <h1 class="fw-bold display-5">{{ $hero->subtitle }}</h1>
                            <p class="lead text-black">{{ $hero->deskripsi }}</p>
                            <div class="action-btns mt-5">
                                <a href="{{ $hero->link }}" class="me-3"><img src="https://nikila.id/home/assets/img/googleplay.png" width="200px" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 mt-5 mt-lg-0">
                        <div class="animated-img-wrap">
                            <img src="images/{{ $hero->gambar }}"alt="gas" class="position-relative img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endforeach
        <!-- Akhir Hero Setion -->

        <!-- Tentang -->
        @foreach ($tentang as $tentang)
        <section class="app-two-feature-two pt-60 pb-120">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 col-xl-6 col-md-12">
                        <div class="app-two-feature-two-img">
                            <img src="images/{{ $tentang->gambar }}" alt="feature image" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="app-two-feature-two-right">
                            <div class="feature-content-wrap">
                                <span class="mk-subtitle mb-3 fw-bold">Tentang GAS</span>
                                <h2>{{ $tentang->title }}</h2>
                                <p> {{ $tentang->deskripsi }} </p>
                            </div>
                            <div class="app-two-feature-two-content">
                                <div class="action-btns mt-5">
                                    <a href="#" class="btn btn-primary">Bergabung Dengan Kami</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endforeach
        <!-- Akhir Tentang -->

        <!-- Fitur -->
        <section class="promo-section ptb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="section-heading text-center">
                            <h2 class="text-primary">Fitur</h2>
                            <p>Banyak Fitur kami yang sangat berguna untuk kebutuhan insight toko anda</p>
                        </div>
                    </div>
                </div>
                <div class="row flex-wrap justify-content-center">
                    @foreach ($fitur as $fitur)
                    <div class="col-lg-4 col-md-6">
                        <div class="promo-single position-relative text-center bg-white custom-shadow rounded-custom p-5 mb-4">
                            <div class="promo-icon mb-32">
                               <img src="images/{{ $fitur->gambar }}" width="100px" class="fa-3x" alt="">
                            </div>
                            <div class="promo-info">
                                <h3 class="h5">{{ $fitur->title }}</h3>
                                <p class="mb-0">{{ $fitur->deskripsi }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Akhir Fitur -->

        <!-- Kategori Toko -->
        <section class="home-blog-section pt-60 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="section-heading text-center">
                            <h2 class="text-primary">Kategori Toko</h2>
                            <p>Apapun Jenis Tokomu Dapat Bergabung Dengan GAS</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="swiper cyber-blog">
                        <div class="swiper-wrapper">
                            @foreach ($kategori as $kategori)
                            <div class="swiper-slide position-relative">
                                <div class="cyber-single-article mb-4 mb-lg-0 p-3 border">
                                    <a href="blog-single.html" class="cyber-article-img">
                                        <img src="images/{{ $kategori->gambar }}" alt="kategori" class="img-fluid" />
                                    </a>
                                    <div class="article-content">
                                        <div class="article-info d-flex py-3">
                                        </div>
                                        <a href="blog-single.html" class="text-decoration-none">
                                            <h2 class="h5 article-title limit-2-line-text">
                                                {{ $kategori->title }}
                                            </h2>
                                            <p class="text-black"> {{ $kategori->deskripsi }} </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Kategori Toko -->

        <!-- Fitur MAPS -->
        @foreach ($map as $map)
        <section class="mk-hero-section bg-primary position-relative overflow-hidden" style="background-image: url('assets/img/shape/mk-hero-curve.svg');">
            <span class="mk-hero-rectangle-shape position-absolute"></span>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7">
                        <div class="mk-title">
                            <h1 class="display-4 fw-bold mk-title text-white">{{ $map->title }}</h1>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="mk-hero-content">
                            <h6 class="mb-4 text-white"> {{ $map->deskripsi }} </h6>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="mk-hero-dashboard text-md-center position-relative mt-60 position-relative">
                            <span class="mk-gradient-hero-shape position-absolute rounded-circle"></span>
                            <span class="mk-secondary-gradient-shape position-absolute rounded-circle"></span>
                            <img src="images/{{ $map->gambar1 }}" alt="map" class="img-fluid">
                            <img src="images/{{ $map->gambar2 }}" alt="map" class="dashboard-sm d-none d-sm-block">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endforeach
        <!-- Akhir Fitur MAPS -->

        <!-- Daftar Toko -->
        @foreach ($daftoko as $daftoko)
        <section class="mk-business bg-white pt-5 pb-5">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-7">
                        <div class="mk-business-pr position-relative">
                            <img src="images/{{ $daftoko->gambar }}" alt="daftoko" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="mk-business-content">
                            <span class="mk-subtitle mb-3 fw-bold">Daftar Toko</span>
                            <h3 class="mk-heading mb-3"> {{ $daftoko->title }} </h3>
                            <p class="mb-30"> {{ $daftoko->deskripsi }} </p>
                            <div class="action-btns mt-5">
                                <a href="{{ $daftoko->link }}" class="me-3"><img src="https://nikila.id/home/assets/img/googleplay.png" width="150px" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endforeach
        <!-- Akhir Daftar Toko -->

        <!-- Footer -->
        @include('components.footer')
        <!-- Akhir Footer -->
    </div>
    <!-- Akhir Bungkus Wrapper -->

    <!-- Script JS -->
    @include('master.script')
</body>
</html>