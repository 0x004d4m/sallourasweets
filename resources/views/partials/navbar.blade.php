<div class="js-sticky">
    <div class="fh5co-main-nav">
        <div class="container-fluid">
            <div class="fh5co-menu-1">
                <a href="#" data-nav-section="home">{{ __('content.Home') }}</a>
                <a href="#" data-nav-section="about">{{ __('content.About') }}</a>
                <a href="#" data-nav-section="features">{{ __('content.Features') }}</a>
            </div>
            <div class="fh5co-logo">
                <a href="/">{{ __('content.title') }}</a>
            </div>
            <div class="fh5co-menu-2">
                <a href="#" data-nav-section="menu">{{ __('content.Menu') }}</a>
                <a href="#" data-nav-section="offers">{{ __('content.Branches') }}</a>
                <div class="dropdown" style="display: inline">
                    <a class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        {{ __('sidebar.lang') }}
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu text-center" aria-labelledby="dropdownMenu1">
                        @foreach (Backpack\LangFileManager\app\Models\Language::get() as $Language)
                            <li class="text-center" onclick="window.location = '{{ url('set-language/' . $Language->abbr) }}'"
                                @if ($Language->abbr == Session::get('locale')) class="active" @endif>
                                <p style="padding-top: 10px; padding-bottom: 0px">{{ $Language->name }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
