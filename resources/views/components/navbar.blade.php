       <header class="main-header position-absolute w-100">
            <nav class="navbar navbar-expand-xl navbar-light sticky-header z-10">
                <div class="container d-flex align-items-center justify-content-lg-between position-relative">
                    <a href="/" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                        <img width="150px" src="{{ URL::asset('assets/img/logo-color.png') }}" alt="logo multi kara digital" class="img-fluid logo-color" />
                    </a>
                    <a class="navbar-toggler position-absolute right-0 border-0" href="#offcanvasWithBackdrop" role="button">
                        <i
                  class="flaticon-menu"
                  data-bs-toggle="offcanvas"
                  data-bs-target="#offcanvasWithBackdrop"
                  aria-controls="offcanvasWithBackdrop"
                ></i>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse navbar-collapse justify-content-center">
                        <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="/">Beranda</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link">Tentang GAS</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link " href="#">Fitur</a>
                            </li>
                                
                            <li>
                                <a href="#" class="nav-link">Daftar</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link">Karir</a>
                            </li>
                        </ul>
                    </div>

                    <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">
                        <a href="/login" class="btn btn-primary">Login</a>
                    </div>
                </div>
            </nav>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBackdrop">
                <div class="offcanvas-header d-flex align-items-center mt-4">
                    <a href="/" class="d-flex align-items-center mb-md-0 text-decoration-none">
                        <img src="{{ URL::asset('assets/img/logo-color.png') }}" alt="MKD Logo" class="img-fluid ps-2" />
                    </a>
                    <button type="button" class="close-btn text-danger" data-bs-dismiss="offcanvas" aria-label="Close">
                        <i class="flaticon-cancel"></i>
                    </button>
                </div>
                <div class="offcanvas-body">
                    <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Beranda
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/tentang" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Tentang Kami
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/blog" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Blog
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/faq" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                FAQ
                            </a>
                        </li>

                        
                    </ul>
                    <div class="action-btns mt-4 ps-3">
                        <a href="/login" class="btn btn-primary">Login</a>
                    </div>
                </div>
            </div>
        </header>
