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
            <div class="col-8">
                <h2 class="heading to-animate">{{ $Policy->name }}</h2>
                <p class="sub-heading to-animate">{!! $Policy->text !!}</p>
            </div>
        </div>
        @include('partials.footer')
    </div>
    @include('partials.scripts')
</body>

</html>
