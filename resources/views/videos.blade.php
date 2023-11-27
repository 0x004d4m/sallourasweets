</html>
<!DOCTYPE html>
<html
    lang="{{ Backpack\LangFileManager\app\Models\Language::where('active', 1)->where('abbr', Session::get('locale'))->first()->abbr }}">
@include('partials.head')

<body @if (Backpack\LangFileManager\app\Models\Language::where('active', 1)->where('abbr', Session::get('locale'))->first()->abbr == 'ar') dir="rtl" @else dir="ltr" @endif>
    <div class="container-fluid">
        @include('partials.navbar')
        @include('partials.slider')
        <div class="row px-5 py-5 text-center justify-content-center">
            @foreach ($Videos as $Video)
                <div class="col-md-4 col-6">
                    <div class="card">
                        <div class="card-body">
                            <iframe style='width: 100%;' src="https://www.youtube.com/embed/{{ $Video->url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            <br>
                            <br>
                            {{ $Video->name }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @include('partials.footer')
    </div>
    @include('partials.scripts')
</body>

</html>
