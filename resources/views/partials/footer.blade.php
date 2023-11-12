<footer class="footer mt-5 py-3">
    <div class="container text-center">
        <img src="your-logo.png" alt="Logo" class="mb-3" style="height: 50px;">
        <br>
        {!! __('content.footer') !!}
        <div class="mb-3">
            @foreach ($Socials as $Social)
                <a href="{{ $Social->url }}" class="text-white me-2"><i class="{{ $Social->icon }}"></i></a>
            @endforeach
        </div>
        <div>
            <a href="{{ url('privacy') }}" class="text-white me-3">{!! __('content.privacies') !!}</a>
            <a href="{{ url('terms') }}" class="text-white">{!! __('content.terms') !!}</a>
        </div>
    </div>
</footer>
