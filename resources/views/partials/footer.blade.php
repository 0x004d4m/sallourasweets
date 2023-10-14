<div id="fh5co-footer">
    <div class="container">
        <div class="row row-padded">
            <div class="col-md-12 text-center">
                <p class="to-animate">{!! __('content.footer') !!}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center to-animate-2">
                <ul class="fh5co-social">
                    @foreach ($Socials as $Social)
                        <li class="to-animate-2"><a href="{{ $Social->url }}" target="_blank"><i class="{{ $Social->icon }}"></i></a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
