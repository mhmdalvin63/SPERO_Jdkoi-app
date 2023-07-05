<link rel="stylesheet" href=" {{ asset('../css/part/navbar.css')}}">

    <nav class="navbar w-100 navbar-expand-lg navbar-dark py-2" id="navbar_utama">
        <div class="container">
            <a href="{{ url('' )}}" class="navbar-brand d-flex align-items-center gap-2 justify-content-between justify-content-lg-start">
                <img src="{{asset('../images/jdkoi-logo.png')}}" alt="">
                <div class="merk">
                    <p class="mb-0">JAPAN DIRECT</p>
                    <p class="mb-0">KOI CENTER</p>
                </div>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav py-lg-0 py-3 gap-0 gap-lg-4 ms-auto">
                    <li class="{{ Request::segment(1) === '' ? 'active' : null }}">
                        <a href="{{ url('/' )}}" ></i>Home</a>
                    </li>
                    <li class="{{ Request::segment(1) === 'auction' ? 'active' : null }}">
                        <a href="{{ url('auction' )}}" ></i> Auction</a>
                    </li>
                    <li class="{{ Request::segment(1) === 'favorite' ? 'active' : null }}">
                        <a href="{{ url('favorite' )}}" ></i> Favorite</a>
                    </li>
                    <li class="{{ Request::segment(1) === 'breeder' ? 'active' : null }}">
                        <a href="{{ url('breeder' )}}" ></i> Breeder</a>
                    </li>
                    <li class="{{ Request::segment(1) === 'chart' ? 'active' : null }}">
                        <a href="{{ url('chart' )}}" ></i> Auction Chart</a>
                    </li>
                    <li class="{{ Request::segment(1) === 'profile' ? 'profileactive' : null }}">
                        <a href="{{ url('profile' )}}" class="mt-5 mt-lg-0">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                        </a>
                    </li>
                  	{{-- <a href="/" class="nav-item nav-link active">Home</a> --}}
                    {{-- <a href="/auction" class="nav-item nav-link">Auction</a> --}}
                    {{-- <a href="#" class="nav-item nav-link">Favorite</a> --}}
                    {{-- <a href="#" class="nav-item nav-link">Breeder</a> --}}
                    {{-- <a href="#" class="nav-item nav-link">Auction Chart</a> --}}
                    {{-- <a href="#" class="nav-item nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                    </a> --}}
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar position-fixed top-0 w-100 navbar-expand-lg navbar-dark py-2" id="navbar_utama">
        <div class="container">
            <a href="#" class="navbar-brand d-flex align-items-center gap-2 justify-content-between justify-content-lg-start">
                <img src="{{asset('../images/jdkoi-logo.png')}}" alt="">
                <div class="merk">
                    <p class="mb-0">JAPAN DIRECT</p>
                    <p class="mb-0">KOI CENTER</p>
                </div>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav py-lg-0 py-3 gap-0 gap-lg-4 ms-auto">
                    <li class="{{ Request::segment(1) === '/' ? 'active' : null }}">
                        <a href="{{ url('/' )}}" ></i>Home</a>
                    </li>
                    <li class="{{ Request::segment(1) === 'auction' ? 'active' : null }}">
                        <a href="{{ url('auction' )}}" ></i> Auction</a>
                    </li>
                    <li class="{{ Request::segment(1) === 'favorite' ? 'active' : null }}">
                        <a href="{{ url('favorite' )}}" ></i> Favorite</a>
                    </li>
                    <li class="{{ Request::segment(1) === 'breeder' ? 'active' : null }}">
                        <a href="{{ url('breeder' )}}" ></i> Breeder</a>
                    </li>
                    <li class="{{ Request::segment(1) === 'chart' ? 'active' : null }}">
                        <a href="{{ url('chart' )}}" ></i> Auction Chart</a>
                    </li>
                    <li class="{{ Request::segment(1) === 'profile' ? 'profileactive' : null }}">
                        <a href="{{ url('profile' )}}" class="mt-5 mt-lg-0">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                        </a>
                    </li>
                  	{{-- <a href="/" class="nav-item nav-link active">Home</a> --}}
                    {{-- <a href="/auction" class="nav-item nav-link">Auction</a> --}}
                    {{-- <a href="#" class="nav-item nav-link">Favorite</a> --}}
                    {{-- <a href="#" class="nav-item nav-link">Breeder</a> --}}
                    {{-- <a href="#" class="nav-item nav-link">Auction Chart</a> --}}
                    {{-- <a href="#" class="nav-item nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                    </a> --}}
                </ul>
            </div>
        </div>
    </nav>