<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <!--> <html class="no-js"> <!--<![endif]-->
    @include('partials.head')
    <body>
        <div id="fh5co-container">
            @include('partials.slider')
            @include('partials.navbar')
            @include('partials.menu')
            @include('partials.branches')
            @include('partials.featured_items')
            @include('partials.about')
            @include('partials.testmonials')
        </div>
        @include('partials.footer')
        @include('partials.scripts')
    </body>
</html>
