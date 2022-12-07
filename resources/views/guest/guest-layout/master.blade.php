<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Judul Website -->
        <title>Zero Plastic | @yield('page-title')</title>

        <!-- Logo Website -->
        <link rel="icon" href={{ asset('asset-img/logo-svg.svg') }}>

        {{-- Font --}}
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">

        <!-- Framework Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

        <!-- Custom CSS -->
        <link rel="stylesheet" href={{ asset('asset-style/font.css') }}>
        <link rel="stylesheet" href={{ asset('asset-style/guest-style1.css') }}>

        @yield('add-style')
    </head>
    <body>

        {{-- Navbar --}}
        <nav class="navbar navbar-expand-md navbar-dark sticky-top top-0 navbar-main">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src={{ asset('asset-img/logo-text-white-svg.svg') }} alt="Logo" width="100" height="45">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" 
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item"><a class="nav-link" href="/#berlangganan">Berlangganan</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#tentangKami">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link @yield('prod-nav-status')" href="/product">Produk</a></li>
                    <li class="nav-item"><a class="nav-link @yield('ar-nav-status')" href="/article">Artikel Terkait</a></li>
                </ul>
                <ul class="navbar-nav">
                    <form class="input-group" role="search" action="{{route('search')}}" method="POST">
                        @csrf
                        <input type="text" name="keyword" class="form-control search" placeholder="Search" type="search" aria-label="search" aria-describedby="button-addon2">
                        <button class="btn btn-outline-success" type="submit" id="button-addon2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </button>
                    </form>
                </ul>
            </div>
        </nav>
        
        <main class="container mt-3">
            @yield('content')
        </main>
        
        <!-- Footer -->
        <footer class="py-5 footer-main">
            <div class="container">
                <div class="row gap-5">
                    <div class="col-md-6 mb-3" id="berlangganan">
                        <form class="rounded-4 p-4 form-footer" action="https://gmail.us13.list-manage.com/subscribe/post?u=c0c4345411bcac159d9966b12&amp;id=d67fa84e7f&amp;f_id=00d491e2f0" method="post">
                            @csrf
                            <h3 class="text-center subs">Berlangganan</h3>
                            <p class="text-center pb-4">Masukkan email Anda untuk mendapatkan informasi terbaru dari Zero Plastic</p>
                            <div class="form-floating mb-3">
                                <!-- <input type="email" name="subscriber_email"class="form-control rounded-3" id="userEmail" placeholder="name@example.com">  -->
                                <input type="email" name="EMAIL"class="form-control rounded-3" id="userEmail" placeholder="name@example.com"> 
                                <label for="userEmail">Email</label>                         
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-secondary">Kirim</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5 text-end link-footer">
                        <h3 class="mb-3">Media Sosial</h3>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2">
                                <a href="#" class="link-footer">Facebook</a> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-facebook" viewBox="0 0 23 23">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                </svg>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="link-footer">Twitter</a> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-twitter" viewBox="0 0 23 23">
                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                </svg>
                                
                            </li>
                            <li class="nav-item mb-5">
                                <a href="#" class="link-footer">Instagram</a>
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-instagram" viewBox="0 0 23 23">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                </svg>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="link-footer">Email</a>
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-envelope" viewBox="0 0 23 23">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                </svg>
                            </li>
                            <li class="nav-item mb-2"><p>Jl. Vokasi, Blimbingsari, Caturtunggal, Depok, Sleman, Daerah Istimewa Yogyakarta</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        @yield('add-script')
        <script src="asset-js/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
</html>