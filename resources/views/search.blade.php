</html>
<!DOCTYPE html>
<html
    lang="{{ Backpack\LangFileManager\app\Models\Language::where('active', 1)->where('abbr', Session::get('locale'))->first()->abbr }}">
@include('partials.head')

<body @if (Backpack\LangFileManager\app\Models\Language::where('active', 1)->where('abbr', Session::get('locale'))->first()->abbr == 'ar') dir="rtl" @else dir="ltr" @endif>
    <div class="container-fluid">
        @include('partials.navbar2')
        <div class="row px-5 py-5 text-center justify-content-center">
            @foreach ($Categories as $category)
                <div class="col-md-4 text-center p-3">
                    <a href="/Categories/{{ $category->id }}">
                        <img src="{{ url($category->image) }}" class="img-fluid rounded" alt="{{ $category->name }}">
                        <br>
                        <br>
                        <h3>{{ $category->name }}</h3>
                    </a>
                    <a href="/Categories/{{ $category->id }}" class="btn btn-primary">{{ __('content.see_more') }}</a>
                </div>
            @endforeach
            @foreach ($Items as $item)
                <div class="col-md-4 text-center p-3">
                    <img src="{{ url($item->image) }}" class="img-fluid rounded"
                            alt="{{ $item->name }}">
                    <h3 class=" pt-3">{{ $item->name }}</h3>
                    <h3>{{ $item->price }} {{ __('content.currency') }}</h3>
                </div>
            @endforeach
        </div>
        @include('partials.footer')
    </div>
    @include('partials.scripts')
</body>

</html>
