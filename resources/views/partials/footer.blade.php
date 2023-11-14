<footer class="footer mt-5 animate-on-scroll">
    <div class="container text-center">
        <img src="{{ url('/template/images/logo.png') }}" alt="Logo" class="mb-3 text-center" style="height: 150px;">
        <br>
        {!! __('content.footer') !!}
        <div class="my-3">
            @foreach ($Socials as $Social)
                <a href="{{ $Social->url }}" class="m-2"><span class="{{ $Social->icon }} fa-2x"></span></a>
            @endforeach
        </div>
        <div class="text-center">
            <a href="{{ url('privacy') }}" class="text-white text-center">{!! __('content.privacies') !!}</a>
            <br>
            <a href="{{ url('terms') }}" class="text-white text-center">{!! __('content.terms') !!}</a>
        </div>
    </div>
</footer>
