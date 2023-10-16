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
        @include('partials.navbar2')
        <div id="fh5co-menus" data-section="menu">
            <div class="container">
                <div class="row text-center fh5co-heading row-padded">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="heading to-animate">{{ $Category->name }}</h2>
                        <p class="sub-heading to-animate">{{ $Category->description }}</p>
                    </div>
                </div>
                <div class="row row-padded" style="display: flex; justify-content: center;">
                    @foreach ($Items as $item)
                        <div class="col-md-3 col-xs-6 text-center">
                            <img src="{{ url($item->image) }}" style="width: 100%" alt="{{ $item->name }}">
                            <h3>{{ $item->name }}</h3>
                            <h3>{{ $item->price }} {{ __('content.currency') }}</h3>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
    @include('partials.footer')
    @include('partials.scripts')
</body>

</html>
