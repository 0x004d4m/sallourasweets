</html>
<!DOCTYPE html>
<html
    lang="{{ Backpack\LangFileManager\app\Models\Language::where('active', 1)->where('abbr', Session::get('locale'))->first()->abbr }}">
@include('partials.head')

<body @if (Backpack\LangFileManager\app\Models\Language::where('active', 1)->where('abbr', Session::get('locale'))->first()->abbr == 'ar') dir="rtl" @else dir="ltr" @endif>
    <div class="container-fluid">
        @include('partials.navbar2')
        <div class="row px-5 py-5 text-center">
            <h1 class="text-center">{{ $Category->name }}</h1>
            <p class="text-center">{{ $Category->description }}</p>
            <div class="col-12">
                <div class="row justify-content-center text-center">
                    @foreach ($Items as $item)
                        <div class="col-md-4 col-6 text-center p-3">
                            <a href="/Products/{{ $item->id }}">
                                <img src="{{ url($item->image) }}" class="img-fluid rounded" alt="{{ $item->name }}">
                            </a>
                            <a href="/Products/{{ $item->id }}">
                                <h3 class=" pt-3">{{ $item->name }}</h3>
                            </a>
                            <a href="/Products/{{ $item->id }}">
                                <h3>{{ $item->price }} {{ __('content.currency') }}</h3>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        @include('partials.footer')
    </div>
    @include('partials.scripts')
</body>

</html>
