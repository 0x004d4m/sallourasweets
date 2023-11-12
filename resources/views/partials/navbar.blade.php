<nav class="navbar p-2">
    <a class="btn btn-outline-primary p-3" id="offcanvasBtn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
        <span class="fa fa-bars"></span>
    </a>

    <div class="offcanvas @if (Backpack\LangFileManager\app\Models\Language::where('active', 1)->where('abbr', Session::get('locale'))->first()->abbr == 'ar') offcanvas-end @else offcanvas-start @endif" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">{{ __('content.title') }}</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item"><a type="button" class="nav-link" href="#carouselExampleSlidesOnly">{{ __('content.Home') }}</a></li>
                    <li class="nav-item"><a type="button" class="nav-link" href="#menu">{{ __('content.Menu') }}</a></li>
                    <li class="nav-item"><a type="button" class="nav-link" href="#branches">{{ __('content.Branches') }}</a></li>
                    <li class="nav-item"><a type="button" class="nav-link" href="#features">{{ __('content.Features') }}</a></li>
                    <li class="nav-item"><a type="button" class="nav-link" href="#about">{{ __('content.About') }}</a></li>
                </ul>
            </div>
            <div class="dropdown mt-3">
                <button class="dropdown-toggle btn btn-secondary" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
                    {{ __('sidebar.lang') }}
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @foreach (Backpack\LangFileManager\app\Models\Language::get() as $Language)
                        <li><a class="dropdown-item @if ($Language->abbr == Session::get('locale')) active @endif"
                                href="{{ url('set-language/' . $Language->abbr) }}">{{ $Language->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <a class="navbar-brand mx-auto" href="{{ url('/') }}">
        <img src="your-logo.png" alt="Logo">
    </a>

    <button class="navbar-toggler p-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch"
        aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle search">
        <span class="fa fa-search text-primary"></span>
    </button>

    <div class="collapse navbar-collapse p-3" id="navbarSearch">
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary" type="submit">Search</button>
        </form>
    </div>
</nav>
