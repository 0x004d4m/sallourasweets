<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <!-->
<html class="no-js"> <!--<![endif]-->
@include('partials.head')

<body @if (Backpack\LangFileManager\app\Models\Language::where('active', 1)->where('abbr', Session::get('locale'))->first()->abbr == 'ar') dir="rtl" @else dir="ltr" @endif>
    <div id="fh5co-container">
        @include('partials.slider')
        @include('partials.navbar')
        <div id="fh5co-menus" data-section="menu">
            <div class="container">
                <div class="row text-center fh5co-heading row-padded">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="heading to-animate">{{ __('content.menu_title') }}</h2>
                        <p class="sub-heading to-animate">{{ __('content.menu_text') }}</p>
                    </div>
                </div>
                @foreach ($Categories as $category)
                <div class="row row-padded" style="display: flex; justify-content: center;">
                    <div class="col-sm-6 col-md-6 text-center">
                        <a href="/Categories/{{ $category->id }}">
                            <img src="{{ url($category->image) }}" style="width: 100%" alt="{{ $category->name }}">
                            <h3>{{ $category->name }}</h3>
                        </a>
                        <a href="/Categories/{{ $category->id }}" class="btn btn-primary">{{ __('content.see_more') }}</a>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>

        @include('partials.branches')
        @include('partials.featured_items')
        @include('partials.about')
        @include('partials.testmonials')
    </div>
    @include('partials.footer')
    @include('partials.scripts')
</body>

</html>
