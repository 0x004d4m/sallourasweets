<nav class="navbar px-2 my-0 py-0 d-flex align-content-start">
    <div>
        <a class="btn-outline-primary" id="offcanvasBtn" data-bs-toggle="offcanvas" href="#offcanvasExample"
            role="button" aria-controls="offcanvasExample">
            <span class="fa fa-bars"></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch"
            aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle search" style="border: none;">
            <span class="fa fa-search text-primary"></span>
        </button>
    </div>
    <div class="offcanvas @if (Backpack\LangFileManager\app\Models\Language::where('active', 1)->where('abbr', Session::get('locale'))->first()->abbr == 'ar') offcanvas-end @else offcanvas-start @endif" tabindex="-1"
        id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">{{ __('content.title') }}</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item"><a type="button" class="nav-link"
                            href="{{ url('/#carouselExampleSlidesOnly') }}">{{ __('content.Home') }}</a></li>
                    <li class="nav-item"><a type="button" class="nav-link"
                            href="{{ url('/#menu') }}">{{ __('content.Menu') }}</a></li>
                    <li class="nav-item"><a type="button" class="nav-link"
                            href="{{ url('/#branches') }}">{{ __('content.Branches') }}</a></li>
                    <li class="nav-item"><a type="button" class="nav-link"
                            href="{{ url('/#features') }}">{{ __('content.Features') }}</a></li>
                    <li class="nav-item"><a type="button" class="nav-link"
                            href="{{ url('/#videos') }}">{{ __('content.Videos') }}</a></li>
                    <li class="nav-item"><a type="button" class="nav-link"
                            href="{{ url('/#about') }}">{{ __('content.About') }}</a></li>
                    @foreach (Backpack\LangFileManager\app\Models\Language::get() as $Language)
                        @if ($Language->abbr == Session::get('locale'))
                        @else
                            <li class="nav-item"><a type="button" class="nav-link"
                                href="{{ url('set-language/' . $Language->abbr) }}">{{ $Language->name }}</a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="collapse navbar-collapse p-3" id="navbarSearch">
        <form class="d-flex" action="{{ url('/Search') }}">
            @csrf
            <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search"
                @if (Request::has('search')) value="{{ Request::get('search') }}" @endif required>
            <button class="btn btn-primary" type="submit">Search</button>
        </form>
    </div>
</nav>
