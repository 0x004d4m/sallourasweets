</html>
<!DOCTYPE html>
<html
    lang="{{ Backpack\LangFileManager\app\Models\Language::where('active', 1)->where('abbr', Session::get('locale'))->first()->abbr }}">
@include('partials.head')

<body @if (Backpack\LangFileManager\app\Models\Language::where('active', 1)->where('abbr', Session::get('locale'))->first()->abbr == 'ar') dir="rtl" @else dir="ltr" @endif>
    <div class="container-fluid">
        @include('partials.navbar2')
        <div class="row px-5 py-5 text-center">
            <div class="col-12">
                <div class="row justify-content-center text-center">
                    <div class="col-md-4 col-6 text-center p-3">
                        <h3>{{ $Product->name }}</h3>
                        <img src="{{ url($Product->image) }}" class="img-fluid rounded"
                                alt="{{ $Product->name }}">
                        <h3 class="py-3">{{ $Product->price }} {{ __('content.currency') }}</h3>
                        <h5>{{ $Product->description }}</h5>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.footer')
    </div>
    @include('partials.scripts')
</body>

</html>
