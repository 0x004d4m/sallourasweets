<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
    <body @if (Backpack\LangFileManager\app\Models\Language::where('active', 1)->where('abbr', Session::get('locale'))->first()->abbr == 'ar') dir="rtl" @else dir="ltr" @endif>
        <div class="container-fluid">
            @include('partials.navbar')
            @include('partials.slider')
            @include('partials.menu')
            @include('partials.branches')
            @include('partials.featured_items')
            @include('partials.about')
            @include('partials.testmonials')
            @include('partials.footer')
        </div>
        @include('partials.scripts')
    </body>
</html>
